<header class="header-wrapper">

    <section class="navigation-wrapper">
        <section class="lab-container">
            <article class="lab-row">
                <section class="navigation-container">
                    <article class="logo-wrapper">
                        <a href="/">
                            <img src="img/4dllogo.png" alt="">
                        </a>
                    </article>

                    <button id="open-mnav"><span><i class="fa fa-bars"></i></span></button>

                    <article class="navbar-wrapper">
                        
                        <section class="menu-bar">
                            <ul>

                                <!-- account form
                                 -->
                                <li>
                                    <!-- checking if session email is empty -->
                                    <?php if (!empty($_SESSION['email'])) : ?>
                                        <a id="account"><i class="fa fa-user"></i> <label for=""><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></label> <i class="fa fa-angle-down"></i></a>

                                    <?php else : ?>

                                        <a id="account"><i class="fa fa-user"></i> <label for="">ACCOUNT</label> <i class="fa fa-angle-down"></i></a>
                                    <?php endif; ?>
                                    

                                    <form class="account-form" action="#" method="post">
                                        <?php if (!empty($_SESSION['email'])) : ?>

                                            <?php 

                                                if (empty($_SESSION['fname']) && empty($_SESSION['lname'])) {
                                                    $_SESSION['fname'] = "Your";
                                                    $_SESSION['lname'] = "Name";
                                                }
                                            
                                            ?>

                                            <label>Hi! <strong><?php echo $_SESSION['fname']; ?> <?php echo $_SESSION['lname']; ?></strong></label>
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
                                <li><a href="parametric-search"><i class="fa fa-search"></i> <label for="">PARAMETRIC SEARC</label>H</a></li>
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
                                <li><a id="search"><i class="fa fa-search"></i></a></li>
                                <!-- <li><a id="parametric-search" class="<?php echo $nav[5]; ?>" href="parametric-search">Parametric Search</a></li> -->
                                <li><a id="about" class="<?php echo $nav[4]; ?>" href="about">About</a></li>
                                <li><a id="support" class="<?php echo $nav[3]; ?>" href="support">Support</a></li>
                                <li><a id="app-notes" class="<?php echo $nav[2]; ?>" href="app_notes">App Notes</a></li>
                                <li><a id="solutions" class="<?php echo $nav[1]; ?>" href="solutions">Solutions</a></li>
                                <li><a id="products" class="<?php echo $nav[0]; ?>" href="products">Products</a></li>
                                <div class="underline"></div>
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