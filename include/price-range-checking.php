<?php 

if (empty($_SESSION['price-min'])) {
    $minPriceVal = 0;
    $maxPriceVal = 1000;

} else {
    $minPriceVal            =   $_SESSION['price-min'];
    $maxPriceVal            =   $_SESSION['price-max']; 
}

if (isset($_POST['price-range_submit'])) {
    $_SESSION['price-min']  =   $_POST['price-min'];
    $_SESSION['price-max']  =   $_POST['price-max'];
    $minPriceVal            =   $_SESSION['price-min'];
    $maxPriceVal            =   $_SESSION['price-max'];
}

if (isset($_POST['price-range_reset'])) {
    $_SESSION['price-min']  =   0;
    $_SESSION['price-max']  =   1000;
    $minPriceVal            =   $_SESSION['price-min'];
    $maxPriceVal            =   $_SESSION['price-max'];
}