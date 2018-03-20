<?php 
    define('TITLE', 'Payments');
    $nav = array('','','','','','');
    include('header-2.php');
?>


<section class="lab-container">

    <article class="lab-row">
    
        <section class="payments-wrapper"> <!-- Payment Wrapper -->

            <?php 
                $active =   array('pass-cart-bread', 'pass-cart-bread','pass-cart-bread', 'active-cart-bread', ' ');
                $atvlink =   array('href="shopping-cart"', 'href="shippingandbilling"', 'href="shipping-method"', ' ', ' ');
                $processTitle = 'Payment';
                include('include/cart-breadcrumbs-2.php'); 
            ?>

            <section class="cart-wrapper"> <!-- Cart Wrapper -->
                
                <form action="confirmation" method="post" id="payment-method-form"> <!-- Payment Method Form -->
                    
                    <article class="user-details"> <!-- User Details -->

                        <div class="payment-method-wrapper"> <!-- Payment Method -->
                        
                            
                            <header class="payment-method-header">
                                <h3><label for="select-payment-method">Payment Method</label></h3>
                            </header>

                            <div class="payment-selection-wrapper">
                                <input type="checkbox" name="payment-selector" id="payment-selector" hidden checked>
                                <div class="payment-selector-wrapper">
                                    <button class="ps-selector ps-selected" id="ps-cc" type="button" disabled="true"><i class="fa fa-credit-card"></i> Credit Card</button>
                                    <button class="ps-selector" id="ps-pp" type="button"><i class="fa fa-paypal"></i> PayPal</button>
                                </div>
                            </div>

                            
                            <hr>


                            <?php include('include/credit-card.php'); ?>
                            <?php include('include/paypal.php'); ?>

                        </div> <!-- Payment Method -->      

                    </article> <!-- /User Details -->
                    

                    <!-- Cart Summary -->
                    <?php $proceed = 'Place Your Order'; include('include/cart-summary.php'); ?>
                    <!-- /Cart Summary -->
                    
                </form> <!-- /Payment Method Form -->
                
            </section> <!-- /Cart Wrapper -->
           
        </section> <!-- /Payment Wrapper -->

    </article>

</section>



<?php include('footer-3.php'); ?>

