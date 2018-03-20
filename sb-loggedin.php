<!-- Shipping and Billing Page when user is already Logged In -->
<?php 
    define('TITLE', 'Shipping and Billing');
    $nav = array('','','','','','');
    include('header-2.php');

    if (isset($_POST['checkout-signin-btn'])) {
        $log = 1;
        $_SESSION['log'] = $_POST['log'];

    } else if (isset($_POST['signup-submit'])) {
        $log = 2;
        $_SESSION['log'] = $_POST['log'];

    } else {
        $log = 0;
    }

    if (!empty($_SESSION['email'])) {
        $log = 0;

    } else {
        $_SESSION['email'] = $_POST['email'];
    }
    
?>


<section class="lab-container">
    <article class="lab-row">
    
        <section class="shipping-billing-userin-wrapper">
            <!-- Cart Breadcrumbs -->
            <?php 
                $active =   array('pass-cart-bread', 'active-cart-bread', ' ', ' ', ' ');
                $atvlink =   array('href="shopping-cart"', ' ', ' ', ' ', ' ');
                $processTitle = 'Shipping and Billing Address';
                include('include/cart-breadcrumbs-2.php'); 
            ?>
            <!-- Cart Breadcrumbs -->

            
            <!-- Shipping and Billing Form -->
            <form action="shipping-method" method="post" class="sb-form">
  
                <?php
                    if ($log == 1) {
                    // Passing Data from pre-defined data to $_SESSION
                    $_SESSION['fname'] = 'Jane';
                    $_SESSION['lname'] = 'Cruz';
                    $_SESSION['email'] = 'janedoe@email.com';
                    $_SESSION['company'] = 'JaneCruz Inc.';

                    $_SESSION['billing-add1'] = 'Block 123 Lot 456 Phase 7';
                    $_SESSION['billing-add2'] = 'Villa Camella';
                    $_SESSION['billing-city'] = 'Darwin';
                    $_SESSION['billing-state'] = 'Queensland';
                    $_SESSION['billing-postal'] = '4101';
                    $_SESSION['billing-phone'] = '+123 456 789';
                    $_SESSION['billing-country'] = 13;

                    // Passing Data from $_SESSION to variable
                    $email = $_SESSION['email'];
                    $company = $_SESSION['company'];
                    $fname = $_SESSION['fname'];
                    $lname = $_SESSION['lname'];
                    $add1 = $_SESSION['billing-add1'];
                    $add2 = $_SESSION['billing-add2'];
                    $city = $_SESSION['billing-city'];
                    $state = $_SESSION['billing-state'];
                    $postal = $_SESSION['billing-postal'];
                    $phone = $_SESSION['billing-phone'];
                    $country = $_SESSION['billing-country'];
                    if (empty($_SESSION['notes'])) {
                        $_SESSION['notes'] = 'sample note';
                    }
                    $notes = $_SESSION['notes'];
                    
                    // Including Billing and Shipping Form Fields
                    include('include/sb-inputs.php');
                ?>
                    
                <?php  } else if ($log == 2) {

                            // checking if the Sessions variables has a value
                            if (empty($_POST['firstname'])) {
                                $_POST['firstname'] = '';
                                $_POST['lastname'] = '';
                                $_POST['company'] = '';
                                $_POST['email'] = $_SESSION['email'];
                                $_POST['billing-address1'] = '';
                                $_POST['billing-address2'] = '';
                                $_POST['billing-city'] = '';
                                $_POST['billing-state'] = '';
                                $_POST['billing-postal'] = '';
                                $_POST['billing-phone'] = '';
                                $_POST['billing-country'] = 0;
                            }

                            // Passing Data from $_POST to $_SESSION
                            $_SESSION['fname'] = $_POST['firstname'];
                            $_SESSION['lname'] = $_POST['lastname'];
                            $_SESSION['email'] = $_POST['email'];
                            $_SESSION['company'] = $_POST['company'];
                            $_SESSION['billing-add1'] = $_POST['billing-address1'];
                            $_SESSION['billing-add2'] = $_POST['billing-address2'];
                            $_SESSION['billing-city'] = $_POST['billing-city'];
                            $_SESSION['billing-state'] = $_POST['billing-state'];
                            $_SESSION['billing-postal'] = $_POST['billing-postal'];
                            $_SESSION['billing-phone'] = $_POST['billing-phone'];
                            $_SESSION['billing-country'] = $_POST['billing-country'];
                            
                            // Passing Data from $_SESSION to variable
                            $fname = $_SESSION['fname'];
                            $lname = $_SESSION['lname'];
                            $email = $_SESSION['email'];
                            $company = $_SESSION['company'];
                            $add1 = $_SESSION['billing-add1'];
                            $add2 = $_SESSION['billing-add2'];
                            $city = $_SESSION['billing-city'];
                            $state = $_SESSION['billing-state'];
                            $postal = $_SESSION['billing-postal'];
                            $phone = $_SESSION['billing-phone'];
                            $country = $_SESSION['billing-country'];
                            if (empty($_SESSION['notes'])) {
                                $_SESSION['notes'] = '';
                            }  
                            
                            $notes = $_SESSION['notes'];
                            
                            // Including Billing and Shipping Form Fields
                            include('include/sb-inputs.php');

                        } else {
                            $fname = $_SESSION['fname'];
                            $lname = $_SESSION['lname'];
                            $email = $_SESSION['email'];
                            $company = $_SESSION['company'];
                            $add1 = $_SESSION['billing-add1'];
                            $add2 = $_SESSION['billing-add2'];
                            $city = $_SESSION['billing-city'];
                            $state = $_SESSION['billing-state'];
                            $postal = $_SESSION['billing-postal'];
                            $phone = $_SESSION['billing-phone'];
                            $country = $_SESSION['billing-country'];      
                            if (empty($_SESSION['notes'])) {
                                $_SESSION['notes'] = '';
                            }                      
                            $notes = $_SESSION['notes'];


                            // Including Billing and Shipping Form Fields
                            include('include/sb-inputs.php');

                        }
                ?>
                
            </form>

        </section>
    </article>
</section>

<?php include('footer-3.php'); ?>