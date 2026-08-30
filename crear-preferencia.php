<?php
/**
 * Backend mínimo para Checkout Pro de Mercado Pago
 * -----------------------------------------------
 * 1. Crea una app en: https://www.mercadopago.com.mx/developers
 * 2. Copia el Access Token de PRUEBA (TEST-...) o PRODUCCIÓN (APP_USR-...)
 * 3. Pégalo en $ACCESS_TOKEN abajo
 * 4. Sube este archivo junto con index.html a tu hosting (debe soportar PHP)
 * 5. En index.html, deja MP_ACCESS_TOKEN vacío; el frontend usará este PHP
 */

header('Content-Type: application/json; charset=utf-8');
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, OPTIONS');
header('Access-Control-Allow-Headers: Content-Type');

if ($_SERVER['REQUEST_METHOD'] === 'OPTIONS') {
    http_response_code(204);
    exit;
}

// ========== PEGA TU ACCESS TOKEN AQUÍ ==========
$ACCESS_TOKEN = "APP_USR-67406726012951-082922-a75f532e9b4776c28b5e9cdf57817a1c-261988731";
// ================================================

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    echo json_encode(['error' => 'Método no permitido']);
    exit;
}

$input = json_decode(file_get_contents('php://input'), true);
if (!$input || empty($input['items'])) {
    http_response_code(400);
    echo json_encode(['error' => 'Faltan items del carrito']);
    exit;
}

$items = [];
foreach ($input['items'] as $it) {
    $items[] = [
        'title'       => substr(preg_replace('/[^\p{L}\p{N}\s\-]/u', '', $it['name'] ?? 'Producto'), 0, 250),
        'quantity'    => 1,
        'unit_price'  => floatval($it['price'] ?? 0),
        'currency_id' => 'MXN',
    ];
}

$base = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http')
      . '://' . ($_SERVER['HTTP_HOST'] ?? 'localhost');
$path = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/\\');
$site = $base . ($path === '' || $path === '/' ? '' : $path) . '/index.html';

$preference = [
    'items'                => $items,
    'back_urls'            => [
        'success' => $site . '?status=success',
        'failure' => $site . '?status=failure',
        'pending' => $site . '?status=pending',
    ],
    'auto_return'          => 'approved',
    'statement_descriptor' => 'MORE BOUTIQUE',
    'external_reference'   => 'more-' . time(),
];

$ch = curl_init('https://api.mercadopago.com/checkout/preferences');
curl_setopt_array($ch, [
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_POST           => true,
    CURLOPT_HTTPHEADER     => [
        'Content-Type: application/json',
        'Authorization: Bearer ' . $ACCESS_TOKEN,
    ],
    CURLOPT_POSTFIELDS     => json_encode($preference),
]);

$response = curl_exec($ch);
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
$error    = curl_error($ch);
curl_close($ch);

if ($error) {
    http_response_code(500);
    echo json_encode(['error' => 'Error de conexión: ' . $error]);
    exit;
}

http_response_code($httpCode);
echo $response;