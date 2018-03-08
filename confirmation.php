<!-- Shipping and Billing Page when user is already Logged In -->
<?php 
    define('TITLE', 'Thank You');
    include('header-2.php');
?>


<section class="lab-container">
    <article class="lab-row">
    
        <section class="confirmation-wrapper">
            
            <?php 
                $active =   array('pass-cart-bread','pass-cart-bread','pass-cart-bread','pass-cart-bread', 'active-cart-bread',);
                $atvlink =   array('href="shopping-cart.php"', 'href="shippingandbilling.php"', 'href="shipping-method.php"', 'href="payments.php"', ' ');
                $processTitle = 'Order Confirmation';
                include('include/cart-breadcrumbs-2.php'); 
            ?>

            

            <div class="confirmation-container">

                <h1>Thank you.</h1>
                <h3>Your order was completed successfully.</h3>

                <p>An email receipt including the details about your order has been sent to the email address provided. Please keep it for your records.</p>
                <p>You can visit the <a href="user-account">My Account</a> page at any time to check the status of your order.</p>

                <a href="products" id="continue-shopping"><i class="fa fa-shopping-cart"></i> Continue Shopping</a>

            </div>
            

        </section> 
    </article> 
</section>


<?php include('footer-3.php'); ?>