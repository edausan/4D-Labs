<?php
    session_start();

    if (isset($_POST['logout'])) {
        session_destroy();
        $url='home';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">'; 
    } else  if (isset($_POST['signin'])) {
        $_SESSION['email'] = $_POST['email'];
    }

?>


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
    <link rel="stylesheet" href="css/full-slider.css">
    <link rel="stylesheet" href="css/dev-style.min.css">
    <!-- <link rel="stylesheet" href="css/dev-style.min-dist.css"> -->
    

    <script src="js/jquery.min.js"></script>
    <script>
        $(function() {
            var loading;
            $('.loading-wraper').fadeIn(300);
            $('body').addClass('scrollOff');

            loading = setInterval(function() {
                if ( $(window).ready()) {
                    load();                    
                }
            }, 100);

            function load() {
                $('.loading-wrapper').fadeOut(300);
                setTimeout(function() {
                    $('.loading-wrapper').hide();
                    $('.page-container').css('opacity', 1);
                    $('body').removeClass('scrollOff');
                }, 400);
                clearInterVal(loading);
            }; 
        });
           
    </script>
    
</head>
<?php include('arrays.php'); ?>

<body dir="ltr">

<div class="loading-wrapper">
    <figure><img src="img/favicon.png" alt=""></figure>
    <div class="loading">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </div>
    <h2 for="">
        <span>L</span>
        <span>O</span>
        <span>A</span>
        <span>D</span>
        <span>I</span>
        <span>N</span>
        <span>G</span>
    </h2>
</div>

<section class="page-container" style="opacity: 0; transition: 1s ease;">

<?php include('include/parametric-compare-popup.php'); ?>
<?php include('include/product-video-popup.php'); ?>

    <div class="to-top">
        <i class="fa fa-chevron-up"></i>
    </div>


    <header class="header-wrapper">

        <section class="navigation-wrapper">
            <section class="lab-container">
                <article class="lab-row">
                    <section class="navigation-container">
                        <article class="logo-wrapper">
                            <a href="home">
                                <img src="img/4dllogo.png" alt="">
                            </a>
                        </article>

                        <button id="open-mnav"><span><i class="fa fa-bars"></i></span></button>

                        <article class="navbar-wrapper">
                            
                            <section class="menu-bar">
                                <ul>

                                    <!-- account form -->
                                    <li>
                                        <a id="account"><i class="fa fa-user"></i> <label for="">ACCOUNT</label> <i class="fa fa-angle-down"></i></a>

                                        <!-- Change the div element to 'form' -->
                                        <!-- also change the 'div.account-form' to 'form.account-form in navbar-3.sass' -->
                                        <!-- also change the 'div.account-form' to 'form.account-form in navbar.js'  -->
                                        <form class="account-form" action="#" method="post">
                                            <?php if (!empty($_SESSION['email'])) : ?>

                                                <?php 

                                                    if (empty($_SESSION['fname']) && empty($_SESSION['lname'])) {
                                                        $_SESSION['fname'] = "User's";
                                                        $_SESSION['lname'] = "Name";
                                                    }
                                                
                                                ?>

                                                <label><strong><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></strong></label>
                                                <p><?php echo $_SESSION['email']; ?></p>
                                                <a href="shopping-cart"><i class="fa fa-shopping-cart"></i>Shopping Cart</a>

                                                <button type="submit" name="logout">Logout</button>

                                            <?php else : ?>

                                                <?php include('include/signin-form.php'); ?>

                                            <?php endif; ?>
                                            
                                        </form>

                                        
                                    </li>
                                    <!-- /account form -->


                                    <li>
                                        <a id="languages"><span class="lang lang-en"></span> <span id="lang-name">ENGLISH</span><i class="fa fa-angle-down"></i></a>
                                        
                                        <div class="languages-wrapper">
                                            <ul>
                                                <li>Select language</li>
                                                <hr>
                                                <li><a id="en"><span class="lang lang-en"></span> ENGLISH</a></li>
                                                <li><a id="zh"><span class="lang lang-zh"></span> 中文</a></li>
                                                <li><a id="ja"><span class="lang lang-ja"></span> 日本語</a></li>
                                                <li><a id="ko"><span class="lang lang-ko"></span> 한국어</a></li>
                                            </ul>
                                        </div>

                                    
                                    
                                    </li>
                                    <?php 
                                        $x = 0;
                                        foreach ($shopSample as $key => $value) {
                                        $x++;
                                        }
                                    ?>
                                    <li><a href="shopping-cart"><i class="fa fa-shopping-cart"></i> <label for="">CART</label> <span id="order-count"><i><?php echo $x; ?></i></span></a></li>
                                </ul>
                            </section>
                            
                            <nav class="navigation-bar">
                                <ul>
                                    <li><a href="products">Products</a></li>
                                    <li><a href="solutions">Solutions</a></li>
                                    <li><a href="app_notes">App Notes</a></li>
                                    <li><a href="support">Support</a></li>
                                    <li><a href="about">About</a></li>
                                    <!-- <li><a href="contact">Contact</a></li> -->
                                    <li><a id="search"><i class="fa fa-search"></i></a></li>
                                </ul>
                            </nav>
                        </article>

                        <?php include('include/mobile-navbar.php'); ?>

                    </section>
                </article>
            </section>
            
        </section>

        <section class="search-bar-wrapper">
            <form action="" class="search-bar">
                <input type="text" name="" id="" placeholder="Search Product">
                <span class="clear-btn" title="Clear search bar"><i class="fa fa-close"></i></span>
            </form>
        </section>
    </header>




