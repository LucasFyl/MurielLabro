<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="author" content="Lucas Fayolle">
        <meta name="description" content="<?php echo $site->description()->html() ?>">
        <meta name="keywords" content="<?php echo $site->keywords()->html() ?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo $site->title()->html() ?></title>
        
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">
        <link rel="shortcut icon" href="/favicon.ico">
        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <!-- build:css styles/vendor.css -->
        <!-- bower:css -->
        <link rel="stylesheet" href="../bower_components/normalize-css/normalize.css">
        <!-- endbower -->
        <!-- endbuild -->
        <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
        <!-- build:css(.tmp) styles/main.css -->
        <!-- <link rel="stylesheet" href="assets//main.css"> -->
        <!-- endbuild -->
        <?php echo css('assets/css/main.css') ?>
        <!-- build:js scripts/vendor/modernizr.js -->
        <script src="../bower_components/modernizr/modernizr.js"></script>
        <!-- endbuild -->
        
    </head>
    <body>