<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign In | 4D Labs</title>

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

                    <form action="payments.php" method="post" class="registration-form" >
                        <!-- HIDDEN DATA -->
                        <!-- Just for the mock and flow of the site -->
                        <div class="hidden-data" hidden>
                            <input type="text" name="firstname" value="Jane">
                            <input type="text" name="lastname" value="Doe">
                            <input type="text" name="address" value="Block 1 Lot 2 Phase 3 Villa Subdivision">
                        </div>
                        <!-- /HIDDEN DATA -->

                        <div class="login-wrapper">
                            <figure class="reg-logo-wrapper"><a href="/"><img src="img/4dllogo2.png" alt=""></a></figure>

                            <hr>
                            
                            <header>
                                <h4>Sign In</h4>
                            </header>

                            <div class="input-wrapper">
                                <span><i class="fa fa-envelope"></i></span>
                                <input class="reg-input" type="email" placeholder="your@email.com" id="email" name="email" required>
                            </div>

                            <div class="input-wrapper">
                                <span><i class="fa fa-lock"></i></span>
                                <input class="reg-input" type="password" placeholder="Password" id="password" name="password" pattern=".{8,}" minlength="8" required>
                            </div>

                            <a href="" id="forgotpass">Forgot Password?</a>
                            
                            <div class="sub-btn-wrapper">
                                <button href="" id="submit" class="signin"><span>Sign In</span></button>
                                <a href="register.php" id="login"><span>Don't have account yet?<p>Click here to sign up.</p></span></a>
                            </div>
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


