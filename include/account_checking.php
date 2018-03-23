<?php 
    // starting session
    session_start();

    // if logout button is clicked
    // session will be destroyed and will be redirected to home page
    if (isset($_POST['logout'])) {
        session_destroy();
        $url='/';
        echo '<META HTTP-EQUIV=REFRESH CONTENT="0; '.$url.'">'; 
    } else  if (isset($_POST['signin'])) {
        $_SESSION['email'] = $_POST['email'];
    }

    // log - (boolean) checking if the user's account is from login form or signup form
    // checking if log is empty
    if (empty($_POST['log'])) {
        $_POST['log'] = 0;
    }

    // if signin button is clicked
    // post's log ($_POST['log']) will be pushed to variable session log ($_SESSION['log'])
    if (isset($_POST['signin'])) {
        $_SESSION['log'] = $_POST['log'];
    }