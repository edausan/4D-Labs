<!-- Shipping and Billing Page when user is already Logged In -->
<?php 
    define('TITLE', 'Shipping and Billing');
    include('header-2.php');
?>

<section class="lab-container">
    <article class="lab-row">
    
        <section class="shipping-billing-userin-wrapper">
            
            <?php 
                $active =   array('pass-cart-bread', 'active-cart-bread', ' ', ' ', ' ');
                $atvlink =   array('href="shopping-cart"', ' ', ' ', ' ', ' ');
                include('include/cart-breadcrumbs-2.php'); 
            ?>

            

            <form action="shipping-method" method="post" class="sb-form">
  
                <?php
                    $log    = $_POST['log'];
                                    
                    

                    if ($log == 1) {

                    
                    $_SESSION['fname'] = 'Jane';
                    $_SESSION['lname'] = 'Cruz';
                    $_SESSION['email'] = $_POST['email'];
                    $_SESSION['company'] = 'JaneCruz Inc.';

                    $_SESSION['billing-add1'] = 'Block 123 Lot 456 Phase 7';
                    $_SESSION['billing-add2'] = 'Villa Camella';
                    $_SESSION['billing-city'] = 'Darwin';
                    $_SESSION['billing-state'] = 'Queensland';
                    $_SESSION['billing-postal'] = '4101';
                    $_SESSION['billing-phone'] = '+123 456 789';
                    $_SESSION['billing-country'] = 13;

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

                    include('include/sb-inputs.php');
                ?>
                    
                <?php  } else { 

                    
                    
                    if (!empty($_POST['billing-country'])) {
                        // 
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

                        include('include/sb-inputs.php');

                    } else {
                        $_SESSION['fname'] = $_POST['firstname'];
                        $_SESSION['lname'] = $_POST['lastname'];
                        $_SESSION['email'] = $_POST['email'];
                        $_SESSION['company'] = $_POST['company'];

                        $fname = $_SESSION['fname'];
                        $lname = $_SESSION['lname'];
                        $email = $_SESSION['email'];
                        $company = $_SESSION['company'];
                        
                        $country = 0;
                        $add1 = '';
                        $add2 = '';
                        $city = '';
                        $state = '';
                        $postal = '';
                        $phone = '';
                        
                        include('include/sb-inputs.php');
                    }

                } 
                ?>
                
            </form>

        </section>
    </article>
</section>

<?php include('footer-3.php'); ?>