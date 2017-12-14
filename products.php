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
            <h1>Products</h1>
            <h3>Graphics Processors</h3>


            <ul class="product-cat-list">
                <?php  foreach ($productNames as $key => $value) {
                ?>

                    <li>
                        <a href="<?php echo $value?>.php" style="text-transform: capitalize;">
                            <figure class="prod-icon">
                                <img src="img/<?php echo $value?>.png" alt="">
                            </figure>
                        
                            <h4 for=""><?php echo $value?></h4>
                        </a>
                    </li>

                <?php } ?>
            </ul>

    </article> 
</section>


<?php include('footer-3.php'); ?>