<?php 
    define('TITLE', 'Products');
    $nav = array('nav-active','','','','','');
    include('header-2.php');

    // price range checking
    include('include/price-range-checking.php');

    $productNames   =   array('goldelox', 'diablo16','picaso','picaso-Lite');
    $breads         =   array('products');
?>

<section class="product-category-wrapper">
    <article class="lab-container-fluid">
        
        <section class="lab-row">

            <?php include('product-cat.php'); ?>

        </section>

    </article> 
</section>


<?php include('footer-3.php'); ?>