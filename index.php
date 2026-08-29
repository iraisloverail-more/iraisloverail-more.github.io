<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Moré | Belleza y elegancia que te define</title>
  <meta name="description" content="E-commerce de productos de belleza premium. Skincare, maquillaje y accesorios de alta calidad." />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600;700&family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet" />
  <style>
    :root {
      --primary: #1a1210;
      --primary-soft: #2c211c;
      --accent: #c9a07a;
      --accent-light: #e8d0b8;
      --accent-dark: #a67c52;
      --rose: #d4a5a5;
      --bg: #faf7f4;
      --card: #ffffff;
      --text: #2c211c;
      --text-muted: #7a6a5e;
      --border: #ebe4dc;
      --shadow: 0 12px 40px rgba(44, 33, 28, 0.08);
      --radius: 16px;
    }
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Inter', system-ui, sans-serif;
      background: var(--bg);
      color: var(--text);
      line-height: 1.6;
      overflow-x: hidden;
    }
    h1, h2, h3, .logo-text { font-family: 'Cormorant Garamond', Georgia, serif; }
    a { text-decoration: none; color: inherit; }
    img { max-width: 100%; display: block; }
    .container { width: 100%; max-width: 1180px; margin: 0 auto; padding: 0 20px; }

    header {
      background: var(--primary);
      color: white;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 4px 24px rgba(0,0,0,0.2);
    }
    .header-top {
      background: var(--primary-soft);
      font-size: 0.8rem;
      padding: 8px 0;
      text-align: center;
      letter-spacing: 0.5px;
    }
    .header-top a { color: var(--accent-light); font-weight: 600; }
    .nav {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 14px 0;
      gap: 20px;
    }
    .logo { display: flex; align-items: center; gap: 10px; }
    .logo img {
      height: 52px;
      width: auto;
      object-fit: contain;
      filter: drop-shadow(0 2px 8px rgba(201,160,122,0.3));
    }
    .nav-links {
      display: flex;
      gap: 28px;
      list-style: none;
      font-weight: 500;
      font-size: 0.92rem;
    }
    .nav-links a {
      position: relative;
      padding: 4px 0;
      transition: color 0.2s;
      color: rgba(255,255,255,0.85);
    }
    .nav-links a:hover, .nav-links a.active { color: var(--accent-light); }
    .nav-links a::after {
      content: '';
      position: absolute;
      bottom: -2px;
      left: 0;
      width: 0;
      height: 1.5px;
      background: var(--accent);
      transition: width 0.25s;
    }
    .nav-links a:hover::after, .nav-links a.active::after { width: 100%; }
    .nav-actions { display: flex; align-items: center; gap: 14px; }
    .cart-btn {
      position: relative;
      background: rgba(255,255,255,0.08);
      border: 1px solid rgba(201,160,122,0.3);
      color: white;
      width: 44px;
      height: 44px;
      border-radius: 12px;
      cursor: pointer;
      font-size: 1.15rem;
      transition: all 0.2s;
    }
    .cart-btn:hover { background: rgba(201,160,122,0.2); border-color: var(--accent); }
    .cart-count {
      position: absolute;
      top: -6px;
      right: -6px;
      background: var(--accent);
      color: var(--primary);
      font-size: 0.7rem;
      font-weight: 700;
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
    }
    .btn {
      display: inline-flex;
      align-items: center;
      justify-content: center;
      gap: 8px;
      padding: 13px 26px;
      border-radius: 50px;
      font-weight: 600;
      font-size: 0.92rem;
      border: none;
      cursor: pointer;
      transition: all 0.25s;
    }
    .btn-primary {
      background: linear-gradient(135deg, var(--accent), var(--accent-dark));
      color: white;
      box-shadow: 0 4px 18px rgba(166,124,82,0.35);
    }
    .btn-primary:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 24px rgba(166,124,82,0.45);
    }
    .btn-outline {
      background: transparent;
      border: 1.5px solid var(--accent);
      color: var(--accent-light);
    }
    .btn-outline:hover { background: var(--accent); color: var(--primary); }
    .btn-sm { padding: 10px 20px; font-size: 0.85rem; }
    .menu-toggle {
      display: none;
      background: none;
      border: none;
      color: white;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .hero {
      background: linear-gradient(160deg, #1a1210 0%, #2c211c 40%, #3d2e28 100%);
      color: white;
      padding: 90px 0 100px;
      position: relative;
      overflow: hidden;
    }
    .hero::before {
      content: '';
      position: absolute;
      top: -30%;
      right: -15%;
      width: 500px;
      height: 500px;
      background: radial-gradient(circle, rgba(201,160,122,0.12) 0%, transparent 70%);
      border-radius: 50%;
    }
    .hero-grid {
      display: grid;
      grid-template-columns: 1.1fr 0.9fr;
      gap: 50px;
      align-items: center;
      position: relative;
      z-index: 1;
    }
    .hero-badge {
      display: inline-flex;
      align-items: center;
      gap: 8px;
      background: rgba(201,160,122,0.15);
      border: 1px solid rgba(201,160,122,0.35);
      color: var(--accent-light);
      padding: 6px 16px;
      border-radius: 50px;
      font-size: 0.82rem;
      font-weight: 600;
      margin-bottom: 22px;
      letter-spacing: 0.5px;
    }
    .hero h1 {
      font-size: 3.4rem;
      font-weight: 600;
      line-height: 1.15;
      letter-spacing: -0.5px;
      margin-bottom: 18px;
    }
    .hero h1 span { color: var(--accent-light); font-style: italic; }
    .hero p {
      font-size: 1.1rem;
      color: rgba(255,255,255,0.75);
      margin-bottom: 32px;
      max-width: 480px;
    }
    .hero-cta { display: flex; gap: 14px; flex-wrap: wrap; }
    .hero-stats {
      display: flex;
      gap: 36px;
      margin-top: 48px;
      padding-top: 28px;
      border-top: 1px solid rgba(255,255,255,0.1);
    }
    .stat-item strong {
      display: block;
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--accent-light);
      font-family: 'Cormorant Garamond', serif;
    }
    .stat-item span { font-size: 0.85rem; color: rgba(255,255,255,0.6); }
    .hero-visual { position: relative; display: flex; justify-content: center; }
    .hero-logo-wrap {
      background: rgba(255,255,255,0.04);
      backdrop-filter: blur(20px);
      border: 1px solid rgba(201,160,122,0.2);
      border-radius: 28px;
      padding: 48px 56px;
      box-shadow: 0 30px 60px rgba(0,0,0,0.35);
    }
    .hero-logo-wrap img { width: 100%; max-width: 380px; height: auto; }
    .floating-badge {
      position: absolute;
      background: white;
      color: var(--primary);
      padding: 12px 18px;
      border-radius: 14px;
      font-weight: 600;
      font-size: 0.88rem;
      box-shadow: 0 12px 30px rgba(0,0,0,0.2);
      display: flex;
      align-items: center;
      gap: 8px;
    }
    .floating-badge.top { top: 10px; right: 0; }
    .floating-badge.bottom { bottom: 20px; left: -10px; }

    section { padding: 80px 0; }
    .section-header { text-align: center; margin-bottom: 48px; }
    .section-header .label {
      display: inline-block;
      background: rgba(201,160,122,0.12);
      color: var(--accent-dark);
      font-weight: 600;
      font-size: 0.8rem;
      padding: 5px 16px;
      border-radius: 50px;
      margin-bottom: 12px;
      text-transform: uppercase;
      letter-spacing: 1px;
    }
    .section-header h2 {
      font-size: 2.5rem;
      font-weight: 600;
      letter-spacing: -0.3px;
      margin-bottom: 12px;
      color: var(--primary);
    }
    .section-header p {
      color: var(--text-muted);
      max-width: 560px;
      margin: 0 auto;
      font-size: 1.02rem;
    }

    .products-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
      gap: 26px;
    }
    .product-card {
      background: var(--card);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      transition: all 0.3s;
      border: 1px solid var(--border);
      display: flex;
      flex-direction: column;
    }
    .product-card:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 45px rgba(44,33,28,0.12);
    }
    .product-img {
      height: 220px;
      background: linear-gradient(145deg, #f5ebe3, #e8d5c4);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 4.2rem;
      position: relative;
    }
    .product-badge {
      position: absolute;
      top: 14px;
      left: 14px;
      background: var(--accent);
      color: white;
      font-size: 0.72rem;
      font-weight: 700;
      padding: 4px 12px;
      border-radius: 20px;
      letter-spacing: 0.3px;
    }
    .product-body {
      padding: 22px;
      flex: 1;
      display: flex;
      flex-direction: column;
    }
    .product-body h3 {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 8px;
      color: var(--primary);
    }
    .product-body p {
      color: var(--text-muted);
      font-size: 0.92rem;
      margin-bottom: 16px;
      flex: 1;
    }
    .product-price {
      display: flex;
      align-items: center;
      justify-content: space-between;
      margin-bottom: 14px;
    }
    .price {
      font-size: 1.35rem;
      font-weight: 700;
      color: var(--primary);
      font-family: 'Cormorant Garamond', serif;
    }
    .price small {
      font-size: 0.85rem;
      color: var(--text-muted);
      font-weight: 500;
      font-family: 'Inter', sans-serif;
    }
    .rating {
      display: flex;
      align-items: center;
      gap: 3px;
      color: #d4a017;
      font-size: 0.85rem;
    }
    .rating span {
      color: var(--text-muted);
      margin-left: 3px;
      font-size: 0.8rem;
    }

    .reviews-section { background: white; }
    .reviews-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
      gap: 22px;
    }
    .review-card {
      background: var(--bg);
      border-radius: var(--radius);
      padding: 26px;
      border: 1px solid var(--border);
    }
    .review-header {
      display: flex;
      align-items: center;
      gap: 12px;
      margin-bottom: 14px;
    }
    .review-avatar {
      width: 46px;
      height: 46px;
      border-radius: 50%;
      background: linear-gradient(135deg, var(--accent), var(--accent-dark));
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-weight: 700;
      font-size: 1rem;
    }
    .review-meta h4 { font-weight: 600; font-size: 0.95rem; }
    .review-meta .stars { color: #d4a017; font-size: 0.85rem; }
    .review-card p {
      color: var(--text-muted);
      font-size: 0.92rem;
      font-style: italic;
    }
    .review-product {
      margin-top: 12px;
      font-size: 0.78rem;
      color: var(--accent-dark);
      font-weight: 600;
    }

    .blog-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
      gap: 26px;
    }
    .blog-card {
      background: var(--card);
      border-radius: var(--radius);
      overflow: hidden;
      box-shadow: var(--shadow);
      border: 1px solid var(--border);
      transition: transform 0.3s;
    }
    .blog-card:hover { transform: translateY(-5px); }
    .blog-img {
      height: 170px;
      background: linear-gradient(145deg, #2c211c, #4a3830);
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 2.8rem;
      color: var(--accent-light);
    }
    .blog-body { padding: 22px; }
    .blog-date {
      font-size: 0.78rem;
      color: var(--text-muted);
      font-weight: 500;
      margin-bottom: 8px;
      letter-spacing: 0.3px;
    }
    .blog-body h3 {
      font-size: 1.2rem;
      font-weight: 600;
      margin-bottom: 10px;
      color: var(--primary);
    }
    .blog-body p {
      color: var(--text-muted);
      font-size: 0.92rem;
      margin-bottom: 14px;
    }
    .read-more { color: var(--accent-dark); font-weight: 600; font-size: 0.88rem; }
    .read-more:hover { text-decoration: underline; }

    .payments-section { background: linear-gradient(180deg, #f5ebe3 0%, var(--bg) 100%); }
    .payments-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
      gap: 18px;
      margin-bottom: 36px;
    }
    .payment-card {
      background: white;
      border-radius: 14px;
      padding: 22px;
      border: 2px solid var(--border);
      text-align: center;
      transition: all 0.25s;
      position: relative;
    }
    .payment-card.selected {
      border-color: var(--accent);
      box-shadow: 0 0 0 4px rgba(201,160,122,0.18);
    }
    .payment-card.selected::after {
      content: '✓ Seleccionada';
      position: absolute;
      top: -11px;
      left: 50%;
      transform: translateX(-50%);
      background: var(--accent);
      color: white;
      font-size: 0.72rem;
      font-weight: 700;
      padding: 3px 12px;
      border-radius: 20px;
      white-space: nowrap;
    }
    .payment-icon { font-size: 2.3rem; margin-bottom: 10px; }
    .payment-card h4 {
      font-weight: 600;
      margin-bottom: 6px;
      color: var(--primary);
      font-size: 1.05rem;
    }
    .payment-card > p { font-size: 0.82rem; color: var(--text-muted); }
    .payment-pros {
      margin-top: 12px;
      text-align: left;
      font-size: 0.78rem;
      color: var(--text-muted);
      list-style: none;
    }
    .payment-pros li { margin-bottom: 4px; }
    .selected-reason {
      background: white;
      border-radius: var(--radius);
      padding: 26px;
      border: 1px solid var(--border);
      box-shadow: var(--shadow);
    }
    .selected-reason h3 {
      color: var(--primary);
      margin-bottom: 10px;
      font-size: 1.2rem;
      font-weight: 600;
    }

    .strategy-section { background: white; }
    .kpi-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 18px;
      margin-bottom: 36px;
    }
    .kpi-card {
      background: var(--bg);
      border-radius: 14px;
      padding: 22px;
      border: 1px solid var(--border);
      text-align: center;
    }
    .kpi-icon {
      width: 52px;
      height: 52px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
      margin: 0 auto 12px;
    }
    .kpi-icon.gold { background: rgba(201,160,122,0.15); }
    .kpi-icon.rose { background: rgba(212,165,165,0.2); }
    .kpi-icon.warm { background: rgba(166,124,82,0.15); }
    .kpi-icon.soft { background: rgba(232,208,184,0.4); }
    .kpi-card h4 {
      font-size: 0.85rem;
      color: var(--text-muted);
      font-weight: 600;
      margin-bottom: 4px;
    }
    .kpi-value {
      font-size: 1.7rem;
      font-weight: 700;
      color: var(--primary);
      font-family: 'Cormorant Garamond', serif;
    }
    .strategy-box {
      background: linear-gradient(145deg, var(--primary), var(--primary-soft));
      color: white;
      border-radius: var(--radius);
      padding: 36px;
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 36px;
    }
    .strategy-box h3 {
      font-size: 1.35rem;
      margin-bottom: 16px;
      font-weight: 600;
      color: var(--accent-light);
    }
    .strategy-list { list-style: none; }
    .strategy-list li {
      display: flex;
      align-items: flex-start;
      gap: 10px;
      margin-bottom: 12px;
      font-size: 0.92rem;
      color: rgba(255,255,255,0.85);
    }
    .strategy-list li::before {
      content: '✓';
      background: var(--accent);
      color: var(--primary);
      width: 20px;
      height: 20px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 0.7rem;
      font-weight: 700;
      flex-shrink: 0;
      margin-top: 2px;
    }

    .social-section { background: var(--bg); }
    .social-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(190px, 1fr));
      gap: 18px;
      margin-bottom: 36px;
    }
    .social-card {
      background: white;
      border-radius: 14px;
      padding: 26px 18px;
      text-align: center;
      border: 1px solid var(--border);
      transition: all 0.25s;
    }
    .social-card:hover {
      transform: translateY(-4px);
      box-shadow: var(--shadow);
    }
    .social-icon {
      width: 58px;
      height: 58px;
      border-radius: 14px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.6rem;
      margin: 0 auto 14px;
      color: white;
    }
    .social-icon.fb { background: #1877f2; }
    .social-icon.ig { background: linear-gradient(45deg, #f09433, #e6683c, #dc2743, #cc2366, #bc1888); }
    .social-icon.tt { background: #111; }
    .social-icon.wa { background: #25d366; }
    .social-card h4 { font-weight: 600; margin-bottom: 5px; font-size: 1rem; }
    .social-card p { font-size: 0.82rem; color: var(--text-muted); }
    .reel-box {
      background: white;
      border-radius: var(--radius);
      padding: 30px;
      border: 1px solid var(--border);
      display: flex;
      align-items: center;
      gap: 30px;
      flex-wrap: wrap;
    }
    .reel-preview {
      width: 160px;
      height: 280px;
      background: linear-gradient(180deg, #1a1210, #3d2e28);
      border-radius: 18px;
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      color: var(--accent-light);
      position: relative;
      overflow: hidden;
      flex-shrink: 0;
      box-shadow: 0 15px 40px rgba(0,0,0,0.2);
    }
    .reel-preview::before { content: '▶'; font-size: 2.5rem; opacity: 0.9; }
    .reel-preview span {
      position: absolute;
      bottom: 18px;
      font-size: 0.75rem;
      opacity: 0.8;
    }
    .reel-info h3 {
      color: var(--primary);
      margin-bottom: 10px;
      font-size: 1.25rem;
      font-weight: 600;
    }
    .reel-info p {
      color: var(--text-muted);
      margin-bottom: 12px;
      max-width: 480px;
      font-size: 0.95rem;
    }

    footer {
      background: var(--primary);
      color: white;
      padding: 55px 0 28px;
    }
    .footer-grid {
      display: grid;
      grid-template-columns: 1.6fr 1fr 1fr 1fr;
      gap: 36px;
      margin-bottom: 36px;
    }
    .footer-brand .logo { margin-bottom: 14px; }
    .footer-brand .logo img { height: 44px; }
    .footer-brand p {
      color: rgba(255,255,255,0.65);
      font-size: 0.92rem;
      max-width: 260px;
    }
    .footer-col h4 {
      font-weight: 600;
      margin-bottom: 16px;
      color: var(--accent-light);
      font-family: 'Cormorant Garamond', serif;
      font-size: 1.1rem;
    }
    .footer-col ul { list-style: none; }
    .footer-col li { margin-bottom: 9px; }
    .footer-col a {
      color: rgba(255,255,255,0.7);
      font-size: 0.9rem;
      transition: color 0.2s;
    }
    .footer-col a:hover { color: var(--accent-light); }
    .footer-bottom {
      border-top: 1px solid rgba(255,255,255,0.1);
      padding-top: 22px;
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      gap: 12px;
      font-size: 0.85rem;
      color: rgba(255,255,255,0.5);
    }

    .cart-modal {
      display: none;
      position: fixed;
      inset: 0;
      background: rgba(0,0,0,0.5);
      z-index: 2000;
      align-items: center;
      justify-content: flex-end;
    }
    .cart-modal.open { display: flex; }
    .cart-panel {
      width: 100%;
      max-width: 400px;
      height: 100%;
      background: white;
      padding: 26px;
      overflow-y: auto;
      box-shadow: -10px 0 40px rgba(0,0,0,0.15);
    }
    .cart-header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 22px;
    }
    .cart-header h3 {
      font-size: 1.3rem;
      color: var(--primary);
      font-weight: 600;
    }
    .close-cart {
      background: none;
      border: none;
      font-size: 1.4rem;
      cursor: pointer;
      color: var(--text-muted);
    }
    .cart-item {
      display: flex;
      gap: 12px;
      padding: 14px 0;
      border-bottom: 1px solid var(--border);
    }
    .cart-item-img {
      width: 64px;
      height: 64px;
      background: var(--bg);
      border-radius: 10px;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.6rem;
      flex-shrink: 0;
    }
    .cart-item-info { flex: 1; }
    .cart-item-info h4 { font-size: 0.92rem; margin-bottom: 3px; }
    .cart-item-info .price { font-size: 1rem; }
    .cart-total {
      margin-top: 22px;
      padding-top: 14px;
      border-top: 2px solid var(--border);
      display: flex;
      justify-content: space-between;
      font-size: 1.15rem;
      font-weight: 700;
      color: var(--primary);
    }

    @media (max-width: 900px) {
      .hero-grid { grid-template-columns: 1fr; text-align: center; }
      .hero h1 { font-size: 2.5rem; }
      .hero p { margin-left: auto; margin-right: auto; }
      .hero-cta { justify-content: center; }
      .hero-stats { justify-content: center; }
      .hero-visual { max-width: 360px; margin: 0 auto; }
      .strategy-box { grid-template-columns: 1fr; }
      .footer-grid { grid-template-columns: 1fr 1fr; }
      .nav-links { display: none; }
      .menu-toggle { display: block; }
      .nav-links.mobile-open {
        display: flex;
        flex-direction: column;
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        background: var(--primary);
        padding: 18px 20px;
        gap: 14px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.25);
      }
    }
    @media (max-width: 600px) {
      .hero h1 { font-size: 2rem; }
      section { padding: 50px 0; }
      .section-header h2 { font-size: 1.8rem; }
      .footer-grid { grid-template-columns: 1fr; }
      .reel-box { flex-direction: column; text-align: center; }
      .reel-preview { margin: 0 auto; }
      .logo img { height: 42px; }
    }
    html { scroll-behavior: smooth; }
  </style>
</head>
<body>

  <header>
    <div class="header-top">
      ✨ Envío gratis en compras mayores a $1,500 MXN · <a href="#productos">Ver colección</a>
    </div>
    <div class="container">
      <nav class="nav">
        <a href="#" class="logo">
          <img src="logo-more.png" alt="Moré" />
        </a>
        <ul class="nav-links" id="navLinks">
          <li><a href="#inicio" class="active">Inicio</a></li>
          <li><a href="#productos">Productos</a></li>
          <li><a href="#reseñas">Reseñas</a></li>
          <li><a href="#blog">Blog</a></li>
          <li><a href="#pagos">Pagos</a></li>
          <li><a href="#estrategia">Estrategia</a></li>
          <li><a href="#redes">Redes</a></li>
        </ul>
        <div class="nav-actions">
          <button class="cart-btn" id="cartBtn" aria-label="Carrito">
            🛒
            <span class="cart-count" id="cartCount">0</span>
          </button>
          <button class="menu-toggle" id="menuToggle" aria-label="Menú">☰</button>
        </div>
      </nav>
    </div>
  </header>

  <section class="hero" id="inicio">
    <div class="container">
      <div class="hero-grid">
        <div>
          <div class="hero-badge">🌸 Colección Otoño 2026</div>
          <h1>Belleza que <span>te define</span></h1>
          <p>Descubre nuestra línea premium de skincare, maquillaje y accesorios. Productos elaborados con ingredientes de origen natural y fórmulas de alta calidad.</p>
          <div class="hero-cta">
            <a href="#productos" class="btn btn-primary">Ver productos →</a>
            <a href="#estrategia" class="btn btn-outline">Nuestra estrategia</a>
          </div>
          <div class="hero-stats">
            <div class="stat-item"><strong>+8,500</strong><span>Clientas felices</span></div>
            <div class="stat-item"><strong>4.9</strong><span>Calificación</span></div>
            <div class="stat-item"><strong>100%</strong><span>Cruelty free</span></div>
          </div>
        </div>
        <div class="hero-visual">
          <div class="hero-logo-wrap">
            <img src="logo-more.png" alt="Moré Logo" />
          </div>
          <div class="floating-badge top">⭐ 4.9 / 5</div>
          <div class="floating-badge bottom">📦 +15k pedidos</div>
        </div>
      </div>
    </div>
  </section>

  <section id="productos">
    <div class="container">
      <div class="section-header">
        <span class="label">Catálogo</span>
        <h2>Nuestros Productos Clave</h2>
        <p>Selección premium diseñada para realzar tu belleza natural con resultados visibles.</p>
      </div>
      <div class="products-grid">
        <article class="product-card">
          <div class="product-img"><span class="product-badge">Más vendido</span>✨</div>
          <div class="product-body">
            <h3>Sérum Luminoso Vitamin C</h3>
            <p>Sérum facial con vitamina C pura al 15%. Ilumina, unifica el tono y reduce manchas en 4 semanas.</p>
            <div class="product-price">
              <div class="price">$689 <small>MXN</small></div>
              <div class="rating">★★★★★ <span>(342)</span></div>
            </div>
            <button class="btn btn-primary btn-sm add-to-cart" data-name="Sérum Luminoso Vitamin C" data-price="689">Agregar al carrito</button>
          </div>
        </article>
        <article class="product-card">
          <div class="product-img">🧴</div>
          <div class="product-body">
            <h3>Crema Hidratante Rose Gold</h3>
            <p>Hidratación profunda con ácido hialurónico y extracto de rosa. Textura ligera, ideal para todo tipo de piel.</p>
            <div class="product-price">
              <div class="price">$545 <small>MXN</small></div>
              <div class="rating">★★★★★ <span>(218)</span></div>
            </div>
            <button class="btn btn-primary btn-sm add-to-cart" data-name="Crema Hidratante Rose Gold" data-price="545">Agregar al carrito</button>
          </div>
        </article>
        <article class="product-card">
          <div class="product-img"><span class="product-badge">Nuevo</span>💋</div>
          <div class="product-body">
            <h3>Labial Mate Velvet</h3>
            <p>Acabado mate aterciopelado de larga duración. 12 tonos inspirados en el atardecer. No reseca los labios.</p>
            <div class="product-price">
              <div class="price">$329 <small>MXN</small></div>
              <div class="rating">★★★★☆ <span>(156)</span></div>
            </div>
            <button class="btn btn-primary btn-sm add-to-cart" data-name="Labial Mate Velvet" data-price="329">Agregar al carrito</button>
          </div>
        </article>
        <article class="product-card">
          <div class="product-img">🪞</div>
          <div class="product-body">
            <h3>Kit Ritual Nocturno</h3>
            <p>Set completo de 4 pasos: limpiador, tónico, sérum y crema nocturna. Resultados visibles desde la primera semana.</p>
            <div class="product-price">
              <div class="price">$1,890 <small>MXN</small></div>
              <div class="rating">★★★★★ <span>(97)</span></div>
            </div>
            <button class="btn btn-primary btn-sm add-to-cart" data-name="Kit Ritual Nocturno" data-price="1890">Agregar al carrito</button>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="reviews-section" id="reseñas">
    <div class="container">
      <div class="section-header">
        <span class="label">Opiniones reales</span>
        <h2>Reseñas de nuestras clientas</h2>
        <p>Lo que dicen quienes ya transformaron su rutina de belleza con Moré.</p>
      </div>
      <div class="reviews-grid">
        <div class="review-card">
          <div class="review-header">
            <div class="review-avatar">SG</div>
            <div class="review-meta"><h4>Sofía García</h4><div class="stars">★★★★★</div></div>
          </div>
          <p>"El sérum de vitamina C cambió mi piel en menos de un mes. Las manchas se atenuaron y ahora tengo un glow natural increíble."</p>
          <div class="review-product">→ Sérum Luminoso Vitamin C</div>
        </div>
        <div class="review-card">
          <div class="review-header">
            <div class="review-avatar">LM</div>
            <div class="review-meta"><h4>Laura Mendoza</h4><div class="stars">★★★★★</div></div>
          </div>
          <p>"La crema Rose Gold es mi favorita. No es grasosa, hidrata todo el día y el aroma es sutil y elegante. Ya voy por mi tercer frasco."</p>
          <div class="review-product">→ Crema Hidratante Rose Gold</div>
        </div>
        <div class="review-card">
          <div class="review-header">
            <div class="review-avatar">AR</div>
            <div class="review-meta"><h4>Andrea Ruiz</h4><div class="stars">★★★★☆</div></div>
          </div>
          <p>"El labial Velvet dura muchísimo y no reseca. El tono 'Nude Rosa' es perfecto para el día a día. Solo desearía más opciones de empaque."</p>
          <div class="review-product">→ Labial Mate Velvet</div>
        </div>
        <div class="review-card">
          <div class="review-header">
            <div class="review-avatar">CV</div>
            <div class="review-meta"><h4>Camila Vargas</h4><div class="stars">★★★★★</div></div>
          </div>
          <p>"El Kit Ritual Nocturno vale cada peso. Mi piel se siente más firme y luminosa. El empaque es precioso, ideal para regalar."</p>
          <div class="review-product">→ Kit Ritual Nocturno</div>
        </div>
      </div>
    </div>
  </section>

  <section id="blog">
    <div class="container">
      <div class="section-header">
        <span class="label">Contenido</span>
        <h2>Blog Moré</h2>
        <p>Artículos publicados durante el último mes para educar e inspirar a nuestra comunidad.</p>
      </div>
      <div class="blog-grid">
        <article class="blog-card">
          <div class="blog-img">🌅</div>
          <div class="blog-body">
            <div class="blog-date">27 de Agosto 2026</div>
            <h3>Rutina de skincare de 5 minutos para mañanas ocupadas</h3>
            <p>Pasos esenciales que realmente marcan la diferencia sin complicar tu día. Ideal si apenas empiezas en el mundo del cuidado facial.</p>
            <a href="#" class="read-more">Leer más →</a>
          </div>
        </article>
        <article class="blog-card">
          <div class="blog-img">💫</div>
          <div class="blog-body">
            <div class="blog-date">15 de Agosto 2026</div>
            <h3>Vitamina C: el activo estrella para una piel luminosa</h3>
            <p>Todo lo que necesitas saber sobre concentraciones, tipos de vitamina C y cómo incorporarla correctamente a tu rutina.</p>
            <a href="#" class="read-more">Leer más →</a>
          </div>
        </article>
        <article class="blog-card">
          <div class="blog-img">🎨</div>
          <div class="blog-body">
            <div class="blog-date">02 de Agosto 2026</div>
            <h3>Cómo elegir el tono de labial perfecto según tu subtono</h3>
            <p>Guía práctica con ejemplos visuales para descubrir si eres de subtono cálido, frío o neutro y qué colores te favorecen.</p>
            <a href="#" class="read-more">Leer más →</a>
          </div>
        </article>
        <article class="blog-card">
          <div class="blog-img">🌿</div>
          <div class="blog-body">
            <div class="blog-date">20 de Julio 2026</div>
            <h3>Ingredientes naturales vs. sintéticos: ¿cuál es mejor?</h3>
            <p>Desmontamos mitos sobre la cosmética natural y explicamos por qué lo importante es la efectividad y seguridad de cada fórmula.</p>
            <a href="#" class="read-more">Leer más →</a>
          </div>
        </article>
      </div>
    </div>
  </section>

  <section class="payments-section" id="pagos">
    <div class="container">
      <div class="section-header">
        <span class="label">Investigación</span>
        <h2>Pasarelas de pago evaluadas</h2>
        <p>Investigamos 4 opciones y seleccionamos la que mejor se adapta a nuestro e-commerce de belleza en México.</p>
      </div>
      <div class="payments-grid">
        <div class="payment-card">
          <div class="payment-icon">💳</div>
          <h4>Stripe</h4>
          <p>Internacional · API robusta</p>
          <ul class="payment-pros">
            <li>✓ Excelente documentación</li>
            <li>✓ Soporte multi-moneda</li>
            <li>✗ Comisiones altas en MX</li>
            <li>✗ Menos métodos locales</li>
          </ul>
        </div>
        <div class="payment-card selected">
          <div class="payment-icon">🇲🇽</div>
          <h4>Mercado Pago</h4>
          <p>Líder en LATAM · Ideal MX</p>
          <ul class="payment-pros">
            <li>✓ Alta conversión local</li>
            <li>✓ Meses sin intereses</li>
            <li>✓ OXXO, SPEI, tarjetas</li>
            <li>✓ Liquidación rápida</li>
          </ul>
        </div>
        <div class="payment-card">
          <div class="payment-icon">🏦</div>
          <h4>Conekta</h4>
          <p>Mexicana · Enfoque e-commerce</p>
          <ul class="payment-pros">
            <li>✓ Buena integración</li>
            <li>✓ SPEI y efectivo</li>
            <li>✗ Menor reconocimiento</li>
            <li>✗ Soporte más limitado</li>
          </ul>
        </div>
        <div class="payment-card">
          <div class="payment-icon">🔵</div>
          <h4>PayPal</h4>
          <p>Global · Confianza alta</p>
          <ul class="payment-pros">
            <li>✓ Marca reconocida</li>
            <li>✓ Protección al comprador</li>
            <li>✗ Comisiones elevadas</li>
            <li>✗ Menos opciones locales</li>
          </ul>
        </div>
      </div>
      <div class="selected-reason">
        <h3>✅ Por qué elegimos Mercado Pago</h3>
        <p>Tras evaluar costos, facilidad de integración, métodos de pago locales (tarjeta, SPEI, OXXO, meses sin intereses) y velocidad de liquidación, <strong>Mercado Pago</strong> es la opción que mejor se adapta a un e-commerce de belleza premium orientado al mercado mexicano. No se generó ningún convenio ni compra real de pasarela; solo se documentó la investigación y la selección técnica.</p>
      </div>
    </div>
  </section>

  <section class="strategy-section" id="estrategia">
    <div class="container">
      <div class="section-header">
        <span class="label">Monitoreo y resultados</span>
        <h2>Indicadores de desempeño (KPIs)</h2>
        <p>Definimos y mediremos estos 4 indicadores clave para asegurar el éxito del sitio.</p>
      </div>
      <div class="kpi-grid">
        <div class="kpi-card">
          <div class="kpi-icon gold">👥</div>
          <h4>Visitas al sitio web</h4>
          <div class="kpi-value">18,000</div>
          <p style="font-size:0.82rem;color:var(--text-muted);margin-top:4px;">Meta mensual</p>
        </div>
        <div class="kpi-card">
          <div class="kpi-icon rose">🛒</div>
          <h4>Tasa de conversión</h4>
          <div class="kpi-value">4.2%</div>
          <p style="font-size:0.82rem;color:var(--text-muted);margin-top:4px;">Visitantes → compra</p>
        </div>
        <div class="kpi-card">
          <div class="kpi-icon warm">💵</div>
          <h4>Ticket promedio</h4>
          <div class="kpi-value">$920</div>
          <p style="font-size:0.82rem;color:var(--text-muted);margin-top:4px;">Gasto por compra</p>
        </div>
        <div class="kpi-card">
          <div class="kpi-icon soft">🔄</div>
          <h4>Tasa de retención</h4>
          <div class="kpi-value">38%</div>
          <p style="font-size:0.82rem;color:var(--text-muted);margin-top:4px;">Clientas que regresan</p>
        </div>
      </div>
      <div class="strategy-box">
        <div>
          <h3>📈 Estrategia de monitoreo</h3>
          <ul class="strategy-list">
            <li>Google Analytics 4 + Search Console para visitas y comportamiento.</li>
            <li>Eventos de conversión en cada botón de compra y checkout.</li>
            <li>Heatmaps (Microsoft Clarity) para analizar clics y scroll.</li>
            <li>Reportes semanales de KPIs al equipo de marketing.</li>
          </ul>
        </div>
        <div>
          <h3>🚀 Estrategia digital</h3>
          <ul class="strategy-list">
            <li>Atraer tráfico: SEO + Meta Ads + colaboraciones con influencers.</li>
            <li>Medir resultados continuamente con los 4 KPIs definidos.</li>
            <li>Optimizar el sitio (velocidad, UX móvil, copy persuasivo).</li>
            <li>Aplicar estrategias en redes, contenidos y campañas estacionales.</li>
          </ul>
        </div>
      </div>
    </div>
  </section>

  <section class="social-section" id="redes">
    <div class="container">
      <div class="section-header">
        <span class="label">Presencia digital</span>
        <h2>Redes sociales y contenido</h2>
        <p>Canales donde promocionamos nuestros productos y la página web.</p>
      </div>
      <div class="social-grid">
        <div class="social-card">
          <div class="social-icon fb">f</div>
          <h4>Facebook</h4>
          <p>Comunidad y anuncios de remarketing. Testimonios y lanzamientos.</p>
        </div>
        <div class="social-card">
          <div class="social-icon ig">📷</div>
          <h4>Instagram</h4>
          <p>Reels, Stories y carruseles de productos. Tutoriales de maquillaje y skincare.</p>
        </div>
        <div class="social-card">
          <div class="social-icon tt">♪</div>
          <h4>TikTok</h4>
          <p>Videos cortos de rutinas, unboxings y tendencias de belleza.</p>
        </div>
        <div class="social-card">
          <div class="social-icon wa">💬</div>
          <h4>WhatsApp Business</h4>
          <p>Atención personalizada a clientas y catálogo de productos compartible.</p>
        </div>
      </div>
      <div class="reel-box">
        <div class="reel-preview"><span>Reel promocional</span></div>
        <div class="reel-info">
          <h3>🎬 Reel promocional de la página web</h3>
          <p>Se generó un reel de 15-30 segundos que muestra:</p>
          <ul style="color:var(--text-muted);margin:10px 0 16px 18px;font-size:0.92rem;">
            <li>Vista rápida de la página de inicio y productos estrella</li>
            <li>Texturas y detalles de los productos clave</li>
            <li>Llamado a la acción: “Descubre Moré en more.mx”</li>
            <li>Música trending + subtítulos elegantes</li>
          </ul>
          <p style="font-size:0.85rem;color:var(--text-muted);"><em>Nota: El archivo del reel se incluye en la entrega del PDF / evidencia del proyecto.</em></p>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="footer-grid">
        <div class="footer-brand">
          <a href="#" class="logo"><img src="logo-more.png" alt="Moré" /></a>
          <p>Belleza premium con ingredientes de origen natural. Cruelty free · Hecho con amor.</p>
        </div>
        <div class="footer-col">
          <h4>Productos</h4>
          <ul>
            <li><a href="#productos">Sérum Vitamin C</a></li>
            <li><a href="#productos">Crema Rose Gold</a></li>
            <li><a href="#productos">Labial Velvet</a></li>
            <li><a href="#productos">Kit Ritual</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Empresa</h4>
          <ul>
            <li><a href="#blog">Blog</a></li>
            <li><a href="#reseñas">Reseñas</a></li>
            <li><a href="#estrategia">Estrategia</a></li>
            <li><a href="#pagos">Pagos</a></li>
          </ul>
        </div>
        <div class="footer-col">
          <h4>Contacto</h4>
          <ul>
            <li><a href="#">hola@more.mx</a></li>
            <li><a href="#">+52 229 987 6543</a></li>
            <li><a href="#">Veracruz, México</a></li>
          </ul>
        </div>
      </div>
      <div class="footer-bottom">
        <span>© 2026 Moré · Proyecto ESCI · Programación E-commerce</span>
        <span>Diseño responsive · HTML5 · CSS3 · JavaScript</span>
      </div>
    </div>
  </footer>

  <div class="cart-modal" id="cartModal">
    <div class="cart-panel">
      <div class="cart-header">
        <h3>🛒 Tu carrito</h3>
        <button class="close-cart" id="closeCart">✕</button>
      </div>
      <div id="cartItems">
        <p style="color:var(--text-muted);text-align:center;padding:40px 0;">Tu carrito está vacío</p>
      </div>
      <div class="cart-total" id="cartTotal" style="display:none;">
        <span>Total</span>
        <span id="totalAmount">$0</span>
      </div>
      <button class="btn btn-primary" style="width:100%;margin-top:18px;display:none;" id="checkoutBtn">
        Proceder al pago (Mercado Pago)
      </button>
    </div>
  </div>

  <script>
    let cart = [];
    const cartBtn = document.getElementById('cartBtn');
    const cartModal = document.getElementById('cartModal');
    const closeCart = document.getElementById('closeCart');
    const cartCount = document.getElementById('cartCount');
    const cartItems = document.getElementById('cartItems');
    const cartTotal = document.getElementById('cartTotal');
    const totalAmount = document.getElementById('totalAmount');
    const checkoutBtn = document.getElementById('checkoutBtn');

    cartBtn.addEventListener('click', () => cartModal.classList.add('open'));
    closeCart.addEventListener('click', () => cartModal.classList.remove('open'));
    cartModal.addEventListener('click', (e) => {
      if (e.target === cartModal) cartModal.classList.remove('open');
    });

    document.querySelectorAll('.add-to-cart').forEach(btn => {
      btn.addEventListener('click', () => {
        const name = btn.dataset.name;
        const price = parseInt(btn.dataset.price);
        cart.push({ name, price });
        updateCart();
        btn.textContent = '✓ Agregado';
        btn.style.background = '#2e7d32';
        setTimeout(() => {
          btn.textContent = 'Agregar al carrito';
          btn.style.background = '';
        }, 1500);
      });
    });

    function updateCart() {
      cartCount.textContent = cart.length;
      if (cart.length === 0) {
        cartItems.innerHTML = '<p style="color:var(--text-muted);text-align:center;padding:40px 0;">Tu carrito está vacío</p>';
        cartTotal.style.display = 'none';
        checkoutBtn.style.display = 'none';
        return;
      }
      cartItems.innerHTML = cart.map((item, i) => `
        <div class="cart-item">
          <div class="cart-item-img">✨</div>
          <div class="cart-item-info">
            <h4>${item.name}</h4>
            <div class="price">$${item.price.toLocaleString('es-MX')} MXN</div>
          </div>
          <button onclick="removeItem(${i})" style="background:none;border:none;color:#c62828;cursor:pointer;font-size:1.1rem;">✕</button>
        </div>
      `).join('');
      const total = cart.reduce((sum, item) => sum + item.price, 0);
      totalAmount.textContent = `$${total.toLocaleString('es-MX')} MXN`;
      cartTotal.style.display = 'flex';
      checkoutBtn.style.display = 'block';
    }

    function removeItem(index) {
      cart.splice(index, 1);
      updateCart();
    }

    const menuToggle = document.getElementById('menuToggle');
    const navLinks = document.getElementById('navLinks');
    menuToggle.addEventListener('click', () => navLinks.classList.toggle('mobile-open'));
    navLinks.querySelectorAll('a').forEach(link => {
      link.addEventListener('click', () => navLinks.classList.remove('mobile-open'));
    });

    const sections = document.querySelectorAll('section[id]');
    window.addEventListener('scroll', () => {
      let current = '';
      sections.forEach(section => {
        const sectionTop = section.offsetTop - 100;
        if (scrollY >= sectionTop) current = section.getAttribute('id');
      });
      navLinks.querySelectorAll('a').forEach(a => {
        a.classList.remove('active');
        if (a.getAttribute('href') === '#' + current) a.classList.add('active');
      });
    });
  </script>
</body>
</html>