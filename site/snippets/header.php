<!DOCTYPE html>
<html lang="<?php echo $site->language();?>">
<head>

  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1.0">

  <title><?php echo $page->title()->html() ?> | <?php echo $site->title()->html() ?></title>
  <meta name="description" content="<?php echo $site->description()->html() ?>">
  <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">

  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600' rel='stylesheet' type='text/css'>
  <?php echo css('assets/min/style.css') ?>
  
  <!-- favicons -->
  <link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <!-- End of favicons -->
  <?php if($page->id() == 'pics'){
    echo "<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.2/jquery.min.js'></script>";
    echo "<script src='https://unpkg.com/imagesloaded@4.1/imagesloaded.pkgd.min.js'></script>";
    } ?>
  <!-- detecting mobile -->
  <?php 
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
     
    // Any mobile device (phones or tablets).
    if ( $detect->isMobile() ) {
      echo "<script>window.addEventListener(\"load\", function () {document.body.className += \" touchdevice\";}, false);</script>";
    }
     
    // Any tablet device.
    if( $detect->isTablet() ){
      echo "<script>window.addEventListener(\"load\", function () {document.body.className += \" tablet\";}, false);</script>";
    }
     
    // Exclude tablets.
    if( $detect->isMobile() && !$detect->isTablet() ){
      echo "<script>window.addEventListener(\"load\", function () {document.body.className += \" mobile\";}, false);</script>";
    }

    // Desktop
    if( !$detect->isMobile() ){
     echo "<script>window.addEventListener(\"load\", function () {document.body.className += \" desktop\";}, false);</script>";
    }

    // Check for a specific platform with the help of the magic methods:
    if( $detect->isiOS() ){
     echo "<script>window.addEventListener(\"load\", function () {document.body.className += \" ios\";}, false);</script>";
    }
     
    if( $detect->isAndroidOS() ){
    echo "<script>window.addEventListener(\"load\", function () {document.body.className += \" android\";}, false);</script>";
    }
  ?>
</head>
<body  class="<?php echo $page->uid() ?>">
  <!-- loading animation -->
  <div id="loader">
    <div class="dot"></div>
    <div class="outline"><span></span></div>
  </div>
  <!-- media queries for development -->
  <div id="mediaqueries"></div>
  
  <div id="mobile-menu-trigger">
    <div class="bar"></div>
  </div>

  <div class="mobile-menu-wrapper">
    <div class="black-header">
      <a href="<?php echo $site->url()?>" id="logo-tm">
          <span id="tm">TM</span><span id="iller">iller</span>
          </a>
    </div>
    <?php snippet('mobilemenu') ?>
  </div>

  <div class="page-wrapper">
    <header class="header container-fluid">
      <div class="container">
        <div class="header-inner">
          
          <a href="<?php echo $site->url()?>" id="logo-tm">
          <span id="tm">TM</span><span id="iller">iller</span>
          </a>
            <?php snippet('menu') ?>
        </div>
      </div>
    </header>

    <div class="page-container">