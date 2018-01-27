<?php 
    define('TITLE', 'Payments');
    include('header-2.php');
?>


<section class="lab-container">

    <article class="lab-row">
    
        <section class="payments-wrapper"> <!-- Payment Wrapper -->

            <?php 
                $active =   array('pass-cart-bread', 'pass-cart-bread','pass-cart-bread', 'active-cart-bread', ' ');
                $atvlink =   array('href="shopping-cart"', 'href="shippingandbilling"', 'href="shipping-method"', ' ', ' ');
                include('include/cart-breadcrumbs-2.php'); 
            ?>

            <section class="cart-wrapper"> <!-- Cart Wrapper -->
                
                <form action="confirmation" method="post" id="payment-method-form"> <!-- Payment Method Form -->
                    
                    <article class="user-details"> <!-- User Details -->

                        <section class="user-details-container">
                        
                            <div class="payment-user-details-wrapper"> <!-- User Details Wrapper -->

                                <header class="payment-user-details-header">
                                    <h3>Ships to:</h3>
                                </header>

                                <!-- User Details foreach loop -->
                                <?php 
                                    $email =  $_SESSION['email'];
                                    $_SESSION['shipping-method']    =   $_POST['shipping-method'];
                                    $_SESSION['po-ref-num']    =   $_POST['po-ref-num'];
                                    
                                    $shippingMethod =    $_SESSION['shipping-method'];
                                    
                                    if (!empty($email)) {
                                        
                                        $user   =   array(
                                            'fname'             => $_SESSION['fname'],
                                            'lname'             => $_SESSION['lname'],
                                            'phone'             => $_SESSION['billing-phone'],
                                            'add1'              =>  $_SESSION['billing-add1'],
                                            'add2'              =>  $_SESSION['billing-add2'],
                                            'state'             =>  $_SESSION['billing-state'],
                                            'city'              =>  $_SESSION['billing-city'],
                                            'country'           =>  $_SESSION['billing-country'],
                                            'postal'            =>  $_SESSION['billing-postal'],
                                            'shipping-method'   => $_SESSION['shipping-method'],
                                            'po-ref-num'        => $_SESSION['po-ref-num'],
                                            'company'           => $_SESSION['company'],

                                        );
                                ?>
                                
                                <div class="payment-user-info"> <!-- Payment User info -->
                                    
                                    <ul class="user-details-list"> <!-- User Details List -->

                                        <li>
                                            <label for="">Company: </label>
                                            <p for=""><?php echo $user['company']; ?></p>
                                        </li>

                                        <li>
                                            <label for="">Full Name: </label>
                                            <p for=""><?php echo $user['fname']; ?> <?php echo $user['lname']; ?></p>
                                        </li>

                                        <li>
                                            <label for="">Address: </label>
                                            <p for=""><?php echo $user['add1']; ?> <?php echo $user['add2']; ?> 
                                        </li>

                                        <li>
                                            <p><?php echo $user['city']; ?> <?php echo $user['state']; ?> <?php echo $user['postal']; ?></p>
                                        </li>

                                        <li id="phone-num">
                                            <label for="">Phone Number: </label>
                                            <p for=""><?php echo $user['phone']; ?></p>
                                        </li>

                                        <li id="country">
                                            <label for="">Country: </label>
                                            <p id="billing-country-payment-detail">
                                                <?php 
                                                    $disabled = ' '; 
                                                    $selected = $user['country'];
                                                    $billShip = 'billing';
                                                    include('include/country.php'); 
                                                ?> 
                                            </p>
                                        </li>

                                    </ul> <!-- /User Details List -->

                                </div> <!-- /Payment User info -->
                                

                                <?php } else { 
                                        $url='shippingandbilling';
                                        echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">'; 
                                        } 
                                ?>  
                            </div> <!-- /User Details Wrapper -->

                            <div class="shipping-method-wrapper"> <!-- Shipping Method Wrapper -->
                                
                                <ul class="payment-user-details-list"> <!-- User Details List -->
                                    
                                    <li class="shipping-method-item"> <!-- Purchase Order Number -->
                                        <header class="payment-user-details-header">
                                            <h3>Purchase Order Number</h3>
                                        </header>
                                        
                                        <p><?php echo $user['po-ref-num']; ?></p>
                                    </li> <!-- /Purchase Order Number -->

                                    
                                    <li class="shipping-method-item"> <!-- Shipping Method -->
                                        <header class="payment-user-details-header">
                                            <h3>Shipping Method</h3>
                                        </header>
                                        
                                        <p><?php echo $user['shipping-method']; ?></p>
                                    </li> <!-- /Shipping Method -->

                                </ul> <!-- User Details List -->

                            </div> <!-- Shipping Method Wrapper -->
                            
                        </section>
                        
                        <div class="payment-method-wrapper"> <!-- Payment Method -->
                            <header class="payment-method-header">
                                <h3><label for="select-payment-method">Payment Method</label></h3>
                            </header>

                            <!-- <select name="" class="select-payment-method">
                                <option value="-" disabled selected>Select your Payment Method</option>
                                <option value="credit-card">Credit Card</option>
                                <option value="paypal">Check / Money Order</option>
                            </select> -->

                            <?php include('include/payment-method.php'); ?>
                        </div> <!-- Payment Method -->
                        

                    </article> <!-- /User Details -->
                    

                    <!-- Cart Summary -->
                    <?php $proceed = 'Place Order'; include('include/cart-summary.php'); ?>
                    <!-- /Cart Summary -->
                    
                </form> <!-- /Payment Method Form -->
                
            </section> <!-- /Cart Wrapper -->
           
        </section> <!-- /Payment Wrapper -->

    </article>

</section>



<?php include('footer-3.php'); ?>

