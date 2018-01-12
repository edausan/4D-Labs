<?php 
    define('TITLE', 'Checkout');
    include('header-2.php');
?>

<section class="lab-container">
    <article class="lab-row">
    
        <section class="checkout-wrapper">
            <?php 
                $active =   array(' ', 'active-cart-bread', ' ');
                include('include/cart-breadcrumbs.php'); 
            ?>
        
            <article class="checkout-account">
                <header class="checkout-account-header">
                    <h3>Already have an account?</h3>
                    <p>Please sign in. This purchase will be linked to your 4D Labs account. </p>
                </header>

                <form action="" class="checkout-have-account">
                    <div class="checkout-input-wrapper">
                        <input type="text" class="checkout-input" name="email" id="email" placeholder="Email Address">
                        <input type="text" class="checkout-input" name="password" id="password" placeholder="Password">
                    </div>

                    <div class="action-wrapper">
                        <a href="" id="forgot-pass" name="forgot-pass">Forgot your Password?</a>
                        <button id="checkout-signin-btn" name="checkout-signin-btn">Sign In</button>
                    </div>
                    
                </form>
                
            </article>

            <article class="checkout-account">
                <header class="checkout-account-header">
                    <h3>Don't have an account yet?</h3>
                    <p>Please sign up. Creating a 4D Labs account is quick and easy.</p>
                </header>
                
                <a href="register.php" id="checkout-signup-btn" name="checkout-signup-btn">Click here to Sign up.</a>
            
            </article>

        </section>

    </article>
</section>

<?php include('footer-3.php'); ?>