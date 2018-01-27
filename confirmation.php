<!-- Shipping and Billing Page when user is already Logged In -->
<?php 
    define('TITLE', 'Confirmation');
    include('header-2.php');
?>



<section class="lab-container">
    <article class="lab-row">
    
        <section class="shipping-billing-userin-wrapper">
            
            <?php 
                $active =   array('pass-cart-bread','pass-cart-bread','pass-cart-bread','pass-cart-bread', 'active-cart-bread',);
                $atvlink =   array('href="shopping-cart.php"', 'href="shippingandbilling.php"', 'href="shipping-method.php"', 'href="payments.php"', ' ');
                include('include/cart-breadcrumbs-2.php'); 
            ?>

            <h1>Order Confirmation</h1>
            

        </section> 
    </article> 
</section>


<?php include('footer-3.php'); ?>