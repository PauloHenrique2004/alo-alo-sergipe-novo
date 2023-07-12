<!DOCTYPE html>
<html dir="ltr" lang="pt-BR">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title><?= $title ?> - alÔ alÔ Sergipe</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="Wetech">
    <meta name="description" content="Alô Alô Sergipe é um site de notícias que traz as últimas informações sobre eventos, cultura, política, esportes e muito mais em Sergipe. Fique por dentro de todas as novidades e acontecimentos do estado.">
    <meta name="keywords" content="Alô Alô Sergipe, notícias Sergipe, eventos Sergipe, cultura Sergipe, política Sergipe, esportes Sergipe">



    <?php if($_SERVER['REQUEST_URI'] == '/'): ?>
        <meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/meta.png' ?>"/>
        <meta property="og:title" content= "alÔ alÔ Sergipe"/>
        <meta property="og:description" content="alÔ alÔ Sergipe, seu portal!"/>
    <?php else: ?>
        <?= $this->fetch('script-head'); ?>
    <?php endif; ?>

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="/images/favicon-alo.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="/css/site/font-awesome.min.css">

    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="/css/site/bootstrap.min.css">

    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="/css/site/fontawesome-stars-o.min.css">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="/css/site/style.css?id=4">

    <!-- ==== Responsive Stylesheet ==== -->
    <link rel="stylesheet" href="/css/site/responsive-style.css">

    <!-- ==== Theme Color Stylesheet ==== -->
    <link rel="stylesheet" href="/css/site/colors/theme-color-1.css" id="changeColorScheme">

    <!-- ==== Custom Stylesheet ==== -->
    <link rel="stylesheet" href="/css/site/custom.css">

    <!-- ==== HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries ==== -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-Z4NFKMH0P9"></script>
    <script> window.dataLayer = window.dataLayer || []; function gtag(){dataLayer.push(arguments);} gtag('js', new Date()); gtag('config', 'G-Z4NFKMH0P9'); </script>
</head>
<body>

<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader bg--color-1--b" data-preloader="1"  style="background: #000 !important;" >
        <div class="preloader--inner"></div>
    </div>
</div>
<!-- Preloader End -->

