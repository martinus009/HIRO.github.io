<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="HIRO">
  <meta name="keywords" content="HIRO">
  <meta name="author" content="HIRO">
  <link rel="manifest" href="manifest.json">
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <title>HIRO App</title>
  <link rel="icon" href="assets/images/favicon.png" type="image/x-icon">
  <link rel="apple-touch-icon" href="assets/images/favicon.png">
  <meta name="theme-color" content="#ff4c3b">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="HIRO">
  <meta name="msapplication-TileImage" content="assets/images/favicon.png">
  <meta name="msapplication-TileColor" content="#FFFFFF">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <link rel="stylesheet" id="rtl-link" type="text/css" href="assets/css/vendors/bootstrap.css">

  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/css/vendors/slick.css">

  <link rel="stylesheet" type="text/css" href="assets/css/vendors/iconly.css">

  <link rel="stylesheet" id="change-link" type="text/css" href="assets/css/style.css">

</head>

<body>
<header>
  <div class="loader">
    <span></span>
    <span></span>
  </div>

  <header>
    <div class="nav-bar">
      <img src="assets/svg/bar.svg" class="img-fluid" alt="">
    </div>
    <a href="index.html" class="brand-logo">
     <img src="assets/logo.jpeg" style="background-color:orange;">
    </a>
    <div class="header-option">
      <ul>
        <li>
        <a href="notification.html"><i class="iconly-Notification icli"></i></a>
        </li>
        <li>
    </div>
  </header>
  
  </header>

<?php $this->load->view($layout); ?>


  <div class="bottom-panel">
    <ul>
      <li class="active">
        <a href="index.html">
          <div class="icon">
            <i class="iconly-Home icli"></i>
            <i class="iconly-Home icbo"></i>
          </div>
          <span>home</span>
        </a>
      </li>
      <li>
        <a href="profile.html">
          <div class="icon">
            <i class="iconly-Profile icli"></i>
            <i class="iconly-Profile icbo"></i>
          </div>
          <span>profile</span>
        </a>
      </li>
    </ul>
  </div>

  <script src="assets/js/jquery-3.3.1.min.js"></script>

  <script src="assets/js/bootstrap.bundle.min.js"></script>

  <script src="assets/js/slick.js"></script>

  <script src="assets/js/homescreen-popup.js"></script>

  <script src="assets/js/timer.js"></script>

  <script src="assets/js/offcanvas-popup.js"></script>

  <script src="assets/js/script.js"></script>

</body>

</html>