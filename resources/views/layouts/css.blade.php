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
</style>