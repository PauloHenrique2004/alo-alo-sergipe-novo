<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- ==== Document Title ==== -->
    <title><?= $title ?> - alÔ alÔ Sergipe</title>

    <!-- ==== Document Meta ==== -->
    <meta name="author" content="">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <?= $this->fetch('script-footer') ?>


    <?php if($_SERVER['REQUEST_URI'] == '/'): ?>
        <meta property="og:image" content="https://<?= $_SERVER['HTTP_HOST'] . '/images/meta.png' ?>"/>
        <meta property="og:title" content= "alÔ alÔ Sergipe"/>
        <meta property="og:description" content="alÔ alÔ Sergipe, seu portal!"/>
    <?php endif; ?>

    <!-- ==== Favicons ==== -->
    <link rel="icon" href="/images/iconeA.png" type="image/png">

    <!-- ==== Google Font ==== -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,600,700">

    <!-- ==== Font Awesome ==== -->
    <link rel="stylesheet" href="/css/site/font-awesome.min.css">

    <!-- ==== Bootstrap Framework ==== -->
    <link rel="stylesheet" href="/css/site/bootstrap.min.css">

    <!-- ==== Bar Rating Plugin ==== -->
    <link rel="stylesheet" href="/css/site/fontawesome-stars-o.min.css">

    <!-- ==== Main Stylesheet ==== -->
    <link rel="stylesheet" href="/css/site/style.css">

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
</head>
<body>

<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader bg--color-1--b" data-preloader="1">
        <div class="preloader--inner"></div>
    </div>
</div>
<!-- Preloader End -->

