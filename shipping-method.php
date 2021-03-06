<!-- Shipping and Billing Page when user is already Logged In -->
<?php 
    define('TITLE', 'Shipping Method');
    $nav = array('','','','','','');
    include('header-2.php');

    $email = $_SESSION['email']; 

                                    
    if (empty($email)) {
        $email = $_POST['billing-email'];
    }

    if (!empty($email)) {
        if (!empty($_POST['billing-firstname'])) {
            $_SESSION['fname']              = $_POST['billing-firstname'];
            $_SESSION['lname']              = $_POST['billing-lastname'];
            $_SESSION['company']            = $_POST['billing-company'];
            $_SESSION['billing-add1']       = $_POST['billing-address1'];
            $_SESSION['billing-add2']       = $_POST['billing-address2'];
            $_SESSION['billing-city']       = $_POST['billing-city'];
            $_SESSION['billing-state']      = $_POST['billing-state'];
            $_SESSION['billing-postal']     = $_POST['billing-postal'];
            $_SESSION['billing-phone']      = $_POST['billing-phone'];
            $_SESSION['billing-country']    = $_POST['billing-country'];
            $_SESSION['notes']              = $_POST['notes'];
        }
        
        $user   =   array(
            'fname'  => $_SESSION['fname'],
            'lname'  => $_SESSION['lname'],
            'company'  => $_SESSION['company'],
            'phone'  => $_SESSION['billing-phone'],
            'add1'   =>  $_SESSION['billing-add1'],
            'add2'   =>  $_SESSION['billing-add2'],
            'state'   =>  $_SESSION['billing-state'],
            'city'   =>  $_SESSION['billing-city'],
            'country'   =>  $_SESSION['billing-country'],
            'postal'   =>  $_SESSION['billing-postal'],
            'note'   =>  $_SESSION['notes'],
        );
?>

<section class="lab-container">
    <article class="lab-row">
                
        <section class="shipping-method-wrapper"> <!-- Shipping Method Wrapper -->

            <?php 
                $active =   array('pass-cart-bread','pass-cart-bread', 'active-cart-bread', ' ', ' ');
                $atvlink =   array('href="shopping-cart"', 'href="shippingandbilling"', ' ', ' ', ' ');
                $processTitle = 'Shipping Method';
                include('include/cart-breadcrumbs-2.php'); 
            ?>

            
            <form action="payments" method="post" class="" id="shipping-method-form"> <!-- Shipping Method Form -->
                
                <section class="cart-wrapper"> <!-- Cart Wrapper -->
                
                    <article class="shipping-method-details"> <!-- User Details Wrapper -->
                        
                        <section class="user-details-container"> <!-- User Details Container-->
                            
                            <div class="payment-user-details-wrapper"> <!-- User Details Wrapper -->
                                <header class="payment-user-details-header">
                                    <h3>Shipping Information:</h3>
                                </header>
                                
                                <div class="payment-user-info">

                                    
                                    <ul class="payment-user-details-list" id="payment-user-details-list"> <!-- User Details List -->

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

                                        <li id="phone-num">
                                            <label for="">Phone Number: </label>
                                            <p for=""><?php echo $user['phone']; ?></p>
                                        </li>

                                        <?php if (!empty($_SESSION['notes'])) : ?>

                                            <li id="notes">
                                                <label for="">Notes: </label>
                                                <p for=""><?php echo $user['note']; ?></p>
                                            </li>
                                        <?php endif; ?>

                                        <li id="changeadd">
                                            <a href="sb-loggedin" id="change-add">Change Shipping Information</a>
                                        </li>

                                    </ul> <!-- /User Details List -->

                                </div>

                                
                            </div> <!-- /User Details Wrapper -->
                            
                        </section> <!-- /User Details Wrapper -->
                        
                        <div class="shipping-method-container"> <!-- Shipping Method Container -->
                            
                            <section class="po-ref-wrapper"> <!-- Purchase Order Number -->
                                <header>
                                    <h3>Purchase Order Number</h3>
                                </header>
                                <input type="text" class="sb-input" name="po-ref-num" id="po-ref-num" placeholder="ex. PO-0004" required>
                            </section> <!-- Purchase Order Number -->
                            
                            <section class="shipping-method-wrapper"> <!-- Shipping Method -->

                                <header class="shipping-method-header">
                                    <h3>Shipping Method</h3>
                                </header>

                                <div class="shipping-method-left">

                                    <select name="shipping-method" class="select-shippping-method" id="select-shipping-method" required>
                                        <option value="-" disabled selected>Select Carrier</option>
                                        <option value="FedEx - $30.00">FedEx - $30.00</option>
                                        <option value="DHL - $30.00">DHL - $30.00</option>
                                    </select>
                                </div>
                                
                            </section> <!-- /Shipping Method -->

                            <section class="acceptance-wrapper"> <!-- Shipping Preference -->
                                <header>
                                    <h3>Acceptance</h3>
                                </header>

                                <ul>
                                    <li class="shipping-preference-item">
                                        <input type="checkbox" class="" name="ship-preference" id="terms-conditions" value="I accept 4D Labs' Terms and Conditions of Sale." required>
                                        <label for="terms-conditions">I accept 4D Labs' <a href="terms-and-conditions">Terms and Conditions</a> of Sale.</label>
                                    </li>

                                    <li class="shipping-preference-item">
                                        <input type="checkbox" class="" name="ship-preference" id="duties" value="I accept payment and responsibility for all Duties and Import Taxes." required>
                                        <label for="duties">I accept payment and responsibility for all Duties and Import Taxes.</label>
                                    </li>
                                </ul>
                                
                            </section> <!-- /Shipping Preference -->
                            
                        </div> <!-- /Shipping Method Container -->
                       
                    </article> <!-- User Details -->
                    
                    <?php $proceed = 'Proceed to Payment'; include('include/cart-summary.php'); ?>
                    
                </section> <!-- /Cart Wrapper -->

            </form> <!-- /Shipping Method Form -->
            
        </section> <!-- /Shipping Method Wrapper -->
        
    </article> 
</section>

<?php } else { 
        $url='shippingandbilling';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">'; 
        } 
?>  


<?php include('footer-3.php'); ?>