<!doctype html>
<html class="no-js" lang="">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title><?php if(isset($metaTitle) && $metaTitle !== '') echo $metaTitle;?></title>
    <meta name="description" content="<?php if(isset($metaDesc) && $metaDesc !== '') echo $metaDesc;?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="/css/normalize.min.css">
    <link rel="stylesheet" href="/css/h5bp.css">
    <link rel="stylesheet" href="/css/compiled.css">
    <script src="/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
  </head>
  <body>

<div id="wrap">
<!--[if lte IE 9]>
  <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

  <header>
    <div class="container">

      <a href="/" class="logo">
        <img src="" alt="">
      </a>

      <a href="#" class="menu-icon" onClick="return false;"><span class="visuallyhidden">Toggle Navigation</span></a>

      <nav class="main">
        <ul class="clearfix">
          <li><a href="/">Home</a></li>
          <li><a href="#" onClick="return false;" class="off">dropdown</a>
            <ul>
              <li><a href="">sub-item</a></li>
            </ul>
          </li>

        </ul>
      </nav>

    </div>
  </header>
