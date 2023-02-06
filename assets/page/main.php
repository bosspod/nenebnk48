<?php
$head = '<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="Nene, Nene BNK48, Nenethanida, Thanida Akarawuthi, เนเน่, เนเน่ BNK48, เนเน่ธนิดา, BNK48">
    <meta name="description" content="Nene BNK48 | Nene BNK48 Thailand Fanclub">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta property="og:url" content="https://nenebnk48.com" />
	<meta property="og:site_name" content="NENE BNK48" />
	<meta property="og:type" content="website" />
	<meta property="og:title" content="Nene BNK48 Website" />
	<meta property="og:description" content="This website is provided by Nene BNK48 Thailand Fanclub" />
	<meta property="og:image" content="https://nenebnk48.com//assets/images/Thumbnail.jpg" />
	<meta property="og:image:width" content="1200" />
	<meta property="og:image:height" content="627" />
	<meta name="twitter:card" content="summary_large_image" />
    
    <title>'.$page_title.' - Nene BNK48</title>

    <link rel="icon" type="image/x-icon" href="/assets/images/favicon.ico">
    <link rel="stylesheet" href="/assets/css/bootstrap.css">
    <link rel="stylesheet" href="/assets/css/LineIcons.css">
    <link rel="stylesheet" href="/assets/css/style.css">

    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v16.0"
        nonce="R8X61APK"></script>
</head>';

$navbar = '
<header>
<nav class="navbar navbar-expand-lg navbar-light border-bottom">
    <div class="container-fluid">
        <a class="navbar-brand" href="/"><img class="nav-logo" src="/assets/images/logo.svg"
                alt="NENE LOGO"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item '.$n_menu_home.'">
                    <a class="nav-menu-link '.$menu_home.'" aria-current="page" href="/">Home</a>
                </li>
                <li class="nav-item '.$n_menu_about.'">
                    <a class="nav-menu-link '.$menu_about.'" aria-current="page" href="/about/">About</a>
                </li>
                <li class="nav-item '.$n_menu_schedule.'">
                    <a class="nav-menu-link '.$menu_schedule.'" aria-current="page" href="/schedule/">Schedule</a>
                </li>
                <li class="nav-item '.$n_menu_gallery.'">
                    <a class="nav-menu-link '.$menu_gallery.'" aria-current="page" href="/gallery/">Gallery</a>
                </li>
                <li class="nav-item '.$n_menu_performance.'">
                    <a class="nav-menu-link '.$menu_performance.'" aria-current="page" href="/performance/">Performance</a>
                </li>
                <li class="nav-item '.$n_menu_shop.'">
                    <a class="nav-menu-link '.$menu_shop.'" aria-current="page" href="/shop/">Shop</a>
                </li>
            </ul>
            <div class="d-flex justify-content-center btn-res">
                <a class="btn btn-menu" href="/sponsor/">Support Nene</a>
            </div>
        </div>
    </div>
</nav>
</header>
';

$footer = '
<footer class="text-center text-lg-start footer-bg text-muted nene-font-color">
<section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
    <div class="me-5">
        <span>Nene BNK48 Thailand Fanclub</span>
    </div>
    <div>
        <a href="https://line.me/ti/g2/Hmgvo-1C6KHhuXyEXyX5K4xFfnArynMmnjPtOQ" target="_blank"
            class="me-4 text-reset">
            <i class="lni lni-line"></i>
        </a>
        <a href="" class="me-4 text-reset">
            <i class="lni-twitter-filled"></i>
        </a>
    </div>
</section>
<div class="text-center p-4">
    © 2023 Copyright:
    <a class="text-reset copy-f fw-bold" href="/">nenebnk48.com</a>
</div>
</footer>';

$script = '<script src="/assets/js/bootstrap.js"></script>';
?>