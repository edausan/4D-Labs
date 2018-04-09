<?php include('include/account_checking.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">
    <meta name="description" content="4D Labs Semiconductors is a global leader in the research, development and manufacture of intelligent graphics solutions.">
    <!-- Apple Touch Icon (at least 200x200px) -->
    <link rel="apple-touch-icon" href="img/4dllogo.png">

    <!-- To run web application in full-screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">
    
    <!-- Status Bar Style (see Supported Meta Tags below for available values) -->
    <!-- Has no effect unless you have the previous meta tag -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-config" content="browserconfig.xml">

    <meta property="og:url"                content="http://4dl.4dwebsites.cf/" />
    <meta property="og:type"               content="article" />
    <meta property="og:title"              content="4D Labs" />
    <meta property="og:description"        content="4D Labs Semiconductors is a global leader in the research, development and manufacture of intelligent graphics solutions." />
    <meta property="og:image"              content="http://4dl.4dwebsites.cf/img/fb_thumb.jpg" />
    <meta property="fb:app_id"             content="1971476612882479" />

    <title><?php echo TITLE; ?> | 4D Labs</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">
    

    <!-- Styles -->
    <link rel="stylesheet" href="css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/jquery-ui.min.css">
    <link rel="stylesheet" href="css/full-slider.css">
    <link rel="stylesheet" href="css/dev-style.min.css">
    
    <!-- JavaScript -->
    <script src="js/jquery.min.js"></script>
    <script src="scripts/loading.js"></script>
    
</head>

<?php include('arrays.php'); ?>


<body dir="ltr">
    <?php include('include/add-to-cart-notif.php'); ?>
    <?php include('include/loading.php'); ?>

    <section class="page-container" style="opacity: 0; transition: 1s ease; overflow-x:hidden">

        <!-- including Parametric Compare modal/popup -->
        <?php include('include/parametric-compare-popup.php'); ?>

        <!-- including Product video modal/popup -->
        <!-- <?php include('include/product-video-popup.php'); ?> -->

        <div class="to-top">
            <i class="fa fa-chevron-up"></i>
        </div>

        <!-- including navbar.php -->
        <?php include('include/navbar.php'); ?>
        





