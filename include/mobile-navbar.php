<section class="lab-container">
    <article class="lab-row">
        <div id="overlay"></div>
        <div class="mobile-navbar-wrapper">
            <ul>
                <li><a href="/"><i class="fa fa-home"></i>Home</a></li>
                <li><a href="products"><i class="fa fa-shopping-basket"></i>Products</a></li>
                <li><a href="solutions"><i class="fa fa-wrench"></i>Solutions</a></li>
                <li><a href="app_notes"><i class="fa fa-book"></i>App Notes</a></li>
                <li><a href="support"><i class="fa fa-comments"></i>Support</a></li>
                <li><a href="about"><i class="fa fa-users"></i>About Us</a></li>
                <li><a href="shopping-cart"><i class="fa fa-shopping-cart"></i>Shopping Cart</a></li>
                <li><hr></li>
                <li>
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
                            <a id="mobile-cart" href="shopping-cart"><i class="fa fa-shopping-cart"></i>Shopping Cart</a>

                            <button type="submit" name="logout">Sign out <i class="fa fa-sign-out" style="margin-left: 5px;"></i></button>

                        <?php else : ?>

                            <?php include('include/signin-form.php'); ?>

                        <?php endif; ?>
                        
                    </form>
                </li>
                <!-- <li><a href="register"><i class="fa fa-sign-in"></i> Sign In</a></li> -->
                
            </ul>
        </div>
    </article>
</section>