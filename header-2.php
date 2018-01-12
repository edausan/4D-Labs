<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title><?php echo TITLE; ?> | 4D Labs</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <!-- Styles -->
    <link rel="stylesheet" href="default-css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/full-slider.css">
    <link rel="stylesheet" href="css/dev-style.min.css">
    <link rel="stylesheet" href="css/dev-style.min-dist.css">
    
</head>
<?php include('arrays.php'); ?>
<?php include('updates.php'); ?>
<body>

    <div class="to-top">
        <i class="fa fa-chevron-up"></i>
    </div>


    <header class="header-wrapper">

    <section class="navigation-wrapper">
        <section class="navigation-container">
            <article class="logo-wrapper">
                <a href="/">
                    <img src="img/4dllogo.png" alt="">
                </a>
            </article>

            <article class="navbar-wrapper">
                
                <section class="menu-bar">
                    <ul>

                        <!-- account form -->
                        <li>
                            <a id="account"><i class="fa fa-user"></i> <label for="">ACCOUNT</label> <i class="fa fa-angle-down"></i></a>

                            <!-- Change the div element to 'form' -->
                            <!-- also change the 'div.account-form' to 'form.account-form in navbar-3.sass' -->
                            <!-- also change the 'div.account-form' to 'form.account-form in navbar.js'  -->
                            <div class="account-form">
                                <span class="close-form-btn"><i class="fa fa-close"></i></span>
                                <h4>Sign In </h4>

                                <p class="notif"><i class="fa fa-exclamation-circle"></i></p>

                                <label for="email-add">Email Address</label>
                                <input type="email" name="email-add" id="email-add">

                                <label for="password">Password</label>
                                <input type="password" name="password" id="password">

                                <button class="submit" id="submit">Sign In <i class="fa fa-paper-plane"></i></button>

                                <hr>

                                <div class="account-bottom">
                                    <a href="">Forgot your password?</a>
                                    <p>Don't have an account? <a href="register.php">Register Now</a></p>
                                </div>
                                
                            </div>
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
                        <li><a href="shopping-cart.php"><i class="fa fa-shopping-cart"></i> <label for="">CART</label> <span id="order-count"><i><?php echo $x; ?></i></span></a></li>
                    </ul>
                </section>
                
                <nav class="navigation-bar">
                    <ul>
                        <li><a href="products.php">Products</a></li>
                        <li><a href="solutions.php">Solutions</a></li>
                        <li><a href="app notes.php">App Notes</a></li>
                        <li><a href="support.php">Support</a></li>
                        <li><a href="about.php">About</a></li>
                        <li><a id="search"><i class="fa fa-search"></i></a></li>
                    </ul>
                </nav>
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


