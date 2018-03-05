<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create an Account | 4D Labs</title>

    <!-- favicon -->
    <link rel="shortcut icon" href="img/favicon.png" type="image/png">

    <!-- Styles -->
    <link rel="stylesheet" href="default-css/font-awesome.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/dev-style.min.css">
    <link rel="stylesheet" href="css/dev-style.min-dist.css">
</head>
<body>
    
<section class="lab-container-fluid">
    <article class="lab-row">


        <section class="register-wrapper">
            <article class="lab-container">
                <section class="lab-row">

                    <form action="sb-loggedin" class="registration-form" method="post">
                        <input type="text" name="log" value="2" hidden>

                        <!-- Personal Information Form -->
                        <div class="personal-info-wrapper translate-right">
                            <!-- hidden data for log -->
                            <input type="text" name="log" value="0" hidden>
                            <!-- /hidden data for log -->

                            <figure class="reg-logo-wrapper"><a href="/"><img src="img/4dllogo2.png" alt=""></a></figure>
                            <hr>

                            <header>
                                <h4>Create an Account</h4>
                            </header>
                            
                            <div class="input-wrapper">
                                <span><i class="fa fa-user-o"></i></span>
                                <input class="reg-input" type="text" placeholder="First Name" id="firstname" name="firstname" value="" required>
                            </div>

                            <div class="input-wrapper">
                                <span><i class="fa fa-user"></i></span>
                                <input class="reg-input" type="text" placeholder="Last Name" id="lastname" name="lastname" value="" required>
                            </div>

                            <!-- <div class="input-wrapper">
                                <span><i class="fa fa-map-marker"></i></span>
                                <textarea name="address" id="address" cols="30" rows="3" placeholder="Address" id="address" name="address" value="" required>Block 1 Lot 2 Phase 3 Villa Subdivision</textarea>
                            </div> -->

                            <div class="input-wrapper">
                                <span><i class="fa fa-envelope"></i></span>
                                <input class="reg-input" type="email" placeholder="your@email.com" id="email" name="email" value="" required>
                            </div>

                            <div class="input-wrapper">
                                <span><i class="fa fa-building"></i></span>
                                <input class="reg-input" type="text" placeholder="Company Name" id="company" name="company" value="" required>
                            </div>

                            <div class="input-wrapper">
                                <span><i class="fa fa-lock"></i></span>
                                <input class="reg-input" type="password" placeholder="Password" id="password" name="password" pattern=".{8,}" minlength="8" value="" required>
                            </div>

                            <div class="input-wrapper">
                                <span><i class="fa fa-lock"></i></span>
                                <input class="reg-input" type="password" placeholder="Confirm Password" id="confirmpass" name="confirmpass" pattern=".{8,}" minlength="8" value="" required>
                            </div>

                            <div class="cbox newsletter" id="just-check">
                                <input type="checkbox" name="newsletter" id="newsletter" class="newsletter-cbox">
                                <label for="newsletter">Sign Up for Newsletter</label>
                                <i class="fa fa-check"></i>
                            </div>

                            <hr>

                            <div class="cbox newsletter" id="open-other-details">
                                <i class="fa fa-check"></i>
                                <input type="checkbox" name="ship-cbox" id="ship-cbox" class="reg-input" class="newsletter-cbox">
                                <label for="ship-cbox">Specify your shipping and billing information now?</label>
                            </div>

                            <hr>

                            <div class="tnc-wrapper">
                                <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>

                                <p>By clicking Sign up, you are indicating that you have read and agree to the <a href="terms-and-conditions">Terms and Conditios</a> and <a href="privacy-policy">Privacy Policy</a>.</p>
                            </div>
                            

                            <div class="sub-btn-wrapper">
                                <button href="" id="submit" name="signup-submit"><span>Sign Up</span></button>
                                <a href="login" id="login"><span>Already have an account?<p>Click here to sign in.</p></span></a>
                            </div>

                            

                            
                        </div>

                        <!-- Shipping and Billing Form -->
                        <div class="shipping-and-billing-wrapper translate-right">
                        

                            <!-- Billing Details -->
                            <div class="billing-details-wrapper" id="billing-details-wrapper">
                                <header class="form-header">
                                    <h3>Billing Details</h3>
                                </header>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-street-view"></i></span>
                                    <input class="reg-input" type="text" placeholder="Street Address 1" id="billing-address1" name="billing-address1">
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-street-view"></i></span>
                                    <input class="reg-input" type="text" placeholder="Street Address 2" id="billing-address2" name="billing-address2">
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-map"></i></span>
                                    <input class="reg-input" type="text" placeholder="City" id="billing-city" name="billing-city">
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <input class="reg-input" type="text" placeholder="State/Province" id="billing-state" name="billing-state">
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-envelope-o"></i></span>
                                    <input class="reg-input" type="text" placeholder="Postal Code" id="billing-postal" name="billing-postal">
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-globe"></i></span>
                                    <?php 
                                        $disabled = 'true'; 
                                        $billShip = 'billing'; 
                                        $required = ' ';
                                        include('include/country.php');
                                    ?> 
                                    
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-phone"></i></span>
                                    <input class="reg-input" type="text" placeholder="Phone Number" id="billing-phone" name="billing-phone">
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-id-badge"></i></span>
                                    <input class="reg-input" type="text" placeholder="Tax ID" id="billing-taxid" name="billing-taxid">
                                </div>

                            </div>
                            <!-- /Billing Details -->

                            <hr>

                            <!-- Shipping Details -->
                            <div class="shipping-details-wrapper" id="shipping-details-wrapper">
                                <header class="form-header">
                                    <h3>Shipping Details</h3>

                                    <div class="cbox newsletter" id="just-check">
                                        <input type="checkbox" name="same-with-bill" id="same-with-bill">
                                        <label for="same-with-bill">Same as Billing Details</label>
                                        <i class="fa fa-check"></i>
                                    </div>
                                </header>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-street-view"></i></span>
                                    <input class="reg-input" type="text" placeholder="Street Address 1" id="shipping-address1" name="shipping-address1" value="" >
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-street-view"></i></span>
                                    <input class="reg-input" type="text" placeholder="Street Address 2" id="shipping-address2" name="shipping-address2" value="" >
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-map"></i></span>
                                    <input class="reg-input" type="text" placeholder="City" id="shipping-city" name="shipping-city" value="" >
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-map-marker"></i></span>
                                    <input class="reg-input" type="text" placeholder="State/Province" id="shipping-state" name="shipping-state" value="" >
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-envelope-o"></i></span>
                                    <input class="reg-input" type="text" placeholder="Postal Code" id="shipping-postal" name="shipping-postal" value="" >
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-globe"></i></span>
                                    <?php 
                                        $disabled = 'true'; 
                                        $billShip = 'shipping'; 
                                        $required = ' ';
                                        include('include/country.php');
                                    ?> 
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-phone"></i></span>
                                    <input class="reg-input" type="text" placeholder="Phone Number" id="shipping-phone" name="shipping-phone" value="" >
                                </div>

                                <div class="input-wrapper">
                                    <span><i class="fa fa-id-badge"></i></span>
                                    <input class="reg-input" type="text" placeholder="Tax ID" id="shipping-taxid" name="shipping-taxid" value="" >
                                </div>

                            </div>
                            <!-- /Shipping Details -->

                            

                        </div>
                        <!-- /Shipping and Billing Form -->

                    </form>

                    

                </section>
            </article>
            <a href="home" id="goto">Go to 4DLabs.com.au</a>
        </section>

        
    </article>
</section>


<!-- JavaScripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="scripts/register.js"></script>

</body>
</html>


