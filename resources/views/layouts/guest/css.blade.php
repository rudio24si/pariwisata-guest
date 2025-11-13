<!-- Meta Tags -->
<meta name="description" content="Elevate your digital presence with Rayo - dynamic and stylish HTML template designed for creative agencies and personal brands. With modern layouts, smooth interactions and a polished aesthetic, Rayo template helps showcase projects, services and expertise with clarity and impact.">
<meta name="keywords" content="mix_design, resume, portfolio, personal page, cv, template, one page, responsive, html5, css3, creative, clean">
<meta name="author" content="mix_design">

<!-- Viewport Meta-->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- Template Favicon & Icons Start -->
<link rel="icon" href="{{ asset('assets/img/favicon/favicon.ico') }}" sizes="any">
<link rel="icon" href="{{ asset('assets/img/favicon/icon.svg') }}" type="image/svg+xml">
<link rel="apple-touch-icon" href="img/favicon/apple-touch-icon.png">
<link rel="manifest" href="img/favicon/manifest.webmanifest">
<!-- Template Favicon & Icons End -->

<!-- Facebook Metadata Start -->
<meta property="og:image:height" content="1200">
<meta property="og:image:width" content="1200">
<meta property="og:title" content="Rayo - Digital Agency & Personal Portfolio HTML Template">
<meta property="og:description" content="Elevate your digital presence with Rayo - dynamic and stylish HTML template designed for creative agencies and personal brands. With modern layouts, smooth interactions and a polished aesthetic, Rayo template helps showcase projects, services and expertise with clarity and impact.">
<meta property="og:url" content="https://mixdesign.dev/themeforest/rayo">
<meta property="og:image" content="https://mixdesign.dev/themeforest/rayo/img/og-image.jpg">
<!-- Facebook Metadata End -->

<!-- Template Styles Start -->
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/loaders/loader.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/plugins.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('assets/css/main.css') }}">
<!-- Template Styles End -->

<!-- Custom Browser Color Start -->
<meta name="theme-color" media="(prefers-color-scheme: light)" content="#FAF7F6">
<meta name="theme-color" media="(prefers-color-scheme: dark)" content="#161616">
<meta name="msapplication-navbutton-color" content="#161616">
<meta name="mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<!-- Custom Browser Color End -->

<style>
    .user-dropdown {
        position: relative;
        display: inline-block;
    }

    .user-dropdown-toggle {
        display: flex;
        align-items: center;
        cursor: pointer;
    }

    .user-dropdown-menu {
        position: absolute;
        top: calc(100% + 10px);
        right: 0;
        background: #ffffff;
        border-radius: 8px;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
        min-width: 200px;
        padding: 8px 0;
        opacity: 0;
        visibility: hidden;
        transform: translateY(-10px);
        transition: all 0.3s ease;
        z-index: 1000;
    }

    .user-dropdown-menu.show {
        opacity: 1;
        visibility: visible;
        transform: translateY(0);
    }

    .dropdown-item-custom {
        display: flex;
        align-items: center;
        gap: 10px;
        padding: 10px 16px;
        color: #333;
        text-decoration: none;
        transition: background-color 0.2s ease;
        cursor: pointer;
        border: none;
        background: none;
        width: 100%;
        text-align: left;
        font-size: 14px;
    }

    .dropdown-item-custom:hover {
        background-color: #f5f5f5;
    }

    .dropdown-item-custom svg {
        flex-shrink: 0;
    }

    .dropdown-divider-custom {
        height: 1px;
        background-color: #e0e0e0;
        margin: 8px 0;
    }

    .logout-btn {
        color: #dc3545;
    }

    .logout-btn:hover {
        background-color: #fff5f5;
    }

    /* Dark mode support */
    [data-theme="dark"] .user-dropdown-menu {
        background: #2a2a2a;
        box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    }

    [data-theme="dark"] .dropdown-item-custom {
        color: #e0e0e0;
    }

    [data-theme="dark"] .dropdown-item-custom:hover {
        background-color: #3a3a3a;
    }

    [data-theme="dark"] .dropdown-divider-custom {
        background-color: #444;
    }

    [data-theme="dark"] .logout-btn:hover {
        background-color: #3a2a2a;
    }

    /* Floating WhatsApp Button */
    .whatsapp-float {
        position: fixed;
        bottom: 25px;
        right: 25px;
        z-index: 1000;
    }

    .whatsapp-link {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 60px;
        height: 60px;
        background-color: #25D366;
        border-radius: 50%;
        box-shadow: 0 4px 12px rgba(37, 211, 102, 0.4);
        transition: all 0.3s ease;
        animation: pulse-whatsapp 2s infinite;
    }

    .whatsapp-link:hover {
        transform: scale(1.1);
        box-shadow: 0 6px 16px rgba(37, 211, 102, 0.6);
        background-color: #128C7E;
    }

    .whatsapp-link i {
        font-size: 32px;
        color: white;
    }

    @keyframes pulse-whatsapp {
        0% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0.7);
        }

        70% {
            box-shadow: 0 0 0 10px rgba(37, 211, 102, 0);
        }

        100% {
            box-shadow: 0 0 0 0 rgba(37, 211, 102, 0);
        }
    }

    /* Responsive adjustments */
    @media (max-width: 768px) {
        .whatsapp-float {
            bottom: 20px;
            right: 20px;
        }

        .whatsapp-link {
            width: 55px;
            height: 55px;
        }

        .whatsapp-link i {
            font-size: 28px;
        }
    }

    .about-section {
        padding: 60px 0;
    }

    .about-section.gray-bg {
        background: #f8f9fa;
    }

    .about-section.green-bg {
        background: #2E8B57;
        color: white;
    }

    .section-title {
        text-align: center;
        margin-bottom: 3rem;
    }

    .section-title h2 {
        font-size: 2.5rem;
        font-weight: 700;
        margin-bottom: 1rem;
    }

    .visi-misi-box {
        padding: 2rem;
    }

    .visi-misi-box h3 {
        font-size: 2rem;
        margin-bottom: 1.5rem;
        font-weight: 600;
    }

    .visi-misi-box ul {
        list-style: none;
        padding: 0;
    }

    .visi-misi-box ul li {
        margin-bottom: 1rem;
        font-size: 1.1rem;
    }

    .facility-card {
        text-align: center;
        padding: 2rem;
        transition: transform 0.3s ease;
    }

    .facility-card:hover {
        transform: translateY(-10px);
    }

    .facility-card i {
        font-size: 3.5rem;
        color: #2E8B57;
        margin-bottom: 1rem;
    }

    .facility-card h4 {
        font-size: 1.5rem;
        margin: 1rem 0;
        font-weight: 600;
    }

    .stats-card {
        text-align: center;
        padding: 2rem;
    }

    .stats-number {
        font-size: 3.5rem;
        font-weight: 700;
        margin-bottom: 0.5rem;
    }

    .stats-label {
        font-size: 1.2rem;
        opacity: 0.9;
    }
</style>