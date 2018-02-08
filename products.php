<?php 
    define('TITLE', 'Products');
    include('header-2.php');

    $productNames   =   array('goldelox', 'diablo16','picaso','picaso-Lite');
    $breads          =   array('products');
?>

<section class="product-category-wrapper">
    <article class="lab-container">
        <!-- Breadcrumbs -->
        <?php include('include/breadcrumbs.php'); ?>
        <!-- /Breadcrumbs -->

        <section class="lab-row">

            <?php include('product-cat.php'); ?>

        </section>

    </article> 
</section>


<?php include('footer-3.php'); ?>