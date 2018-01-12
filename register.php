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

                    <form action="" class="registration-form">
                        <figure class="reg-logo-wrapper"><a href="/"><img src="img/4dllogo2.png" alt=""></a></figure>
                        <hr>
                        <header>
                            <h4>Create an Account</h4>
                        </header>
                        
                        <div class="input-wrapper">
                            <span><i class="fa fa-user-o"></i></span>
                            <input class="reg-input" type="text" placeholder="First Name" id="firstname" name="firstname" required>
                        </div>

                        <div class="input-wrapper">
                            <span><i class="fa fa-user"></i></span>
                            <input class="reg-input" type="text" placeholder="Last Name" id="lastname" name="lastname" required>
                        </div>

                        <div class="input-wrapper">
                            <span><i class="fa fa-envelope"></i></span>
                            <input class="reg-input" type="email" placeholder="your@email.com" id="email" name="email" required>
                        </div>

                        <div class="input-wrapper">
                            <span><i class="fa fa-lock"></i></span>
                            <input class="reg-input" type="password" placeholder="Password" id="password" name="password" required>
                        </div>

                        <div class="input-wrapper">
                            <span><i class="fa fa-lock"></i></span>
                            <input class="reg-input" type="password" placeholder="Confirm Password" id="confirmpass" name="confirmpass" required>
                        </div>


                        <div class="newsletter">
                            <input type="checkbox" name="newsletter" id="newsletter">
                            <label for="newsletter">Sign Up for Newsletter</label>
                            <i class="fa fa-check"></i>
                        </div>

                        <hr>

                        <p>By creating an account with our store, you will be able to move through the checkout process faster, store multiple shipping addresses, view and track your orders in your account and more.</p>

                        <p>By clicking Sign up, you are indicating that you have read and agree to the <a href="terms-and-conditions.php">Terms and Conditios</a> and <a href="privacy-policy.php">Privacy Policy</a>.</p>

                        <div class="sub-btn-wrapper">
                            <a href="" id="submit"><span>Sign Up</span></a>
                            <a href="login.php" id="login"><span>Already have an account?<p>Click here to sign in.</p></span></a>
                        </div>
                        

                    </form>

                    <a href="/" id="goto">Go to 4DLabs.com.au</a>
                </section>
            </article>
        </section>

        
    </article>
</section>


<!-- JavaScripts -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="scripts/register.js"></script>

</body>
</html>


