<?php 
    define('TITLE', 'Shipping and Billing');
    $nav = array('','','','','','');
    include('header-2.php');
    
    if (!empty($_SESSION['email'])) {
        $url='sb-loggedin';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">'; 
    }

?>

<section class="lab-container">
    <article class="lab-row">
    
        <section class="checkout-wrapper">
            <?php 
                $active =   array('pass-cart-bread', 'active-cart-bread', ' ');
                $atvlink =   array('href="shopping-cart"', ' ', ' ', ' ', ' ');
                $processTitle = 'Shipping and Billing Address';
                include('include/cart-breadcrumbs-2.php'); 
            ?>
        
            <article class="checkout-account" id="login-wrapper">
                <header class="checkout-account-header">
                    <h3>Already have an account?</h3>
                    <p>Please sign in. This purchase will be linked to your 4D Labs account. </p>
                </header>

                <form action="sb-loggedin" method="post" class="checkout-have-account">

                    <!-- HIDDEN DATA -->
                    <!-- Just for the mock and flow of the cart -->
                    <div class="hidden-data" hidden>
                        <input type="text" name="log" value="1">
                    </div>
                    <!-- /HIDDEN DATA -->

                    
                    <div class="checkout-input-wrapper">
                        <div class="login-wrapper">
                            <span><i class="fa fa-envelope"></i></span>
                            <input type="email" class="checkout-input" name="email" id="email" placeholder="Email Address" value="janedoe@email.com" required>
                        </div>

                        <div class="login-wrapper">
                            <span><i class="fa fa-key"></i></span>
                            <input type="password" class="checkout-input" name="password" id="password" placeholder="Password" value="12345678" pattern=".{8,}" minlength="8" required>
                        </div>
                        
                        
                    </div>

                    <div class="action-wrapper">
                        <a href="" id="forgot-pass" name="forgot-pass">Forgot your Password?</a>
                        <button id="checkout-signin-btn" name="checkout-signin-btn"><i class="fa fa-sign-in"></i> Sign In</button>
                    </div>
                    
                </form>
                
            </article>

            <article class="checkout-account">
                <header class="checkout-account-header">
                    <h3>Don't have an account yet?</h3>
                    <p>Please sign up. Creating a 4D Labs account is quick and easy.</p>
                </header>

                <div class="spacer"></div>
                
                <a href="register" id="checkout-signup-btn" name="checkout-signup-btn"><i class="fa fa-plus"></i> Click here to Sign up.</a>
            
            </article>

        </section>

    </article>
</section>

<?php include('footer-3.php'); ?>