<?php 
    define('TITLE', 'Firmware');
    include('header-2.php');
    $breads =   array('support','firmware');
?> 

<section class="lab-container">
    <!-- Breadcrumbs -->
    <?php include('include/breadcrumbs.php'); ?>
    <!-- /Breadcrumbs -->

    <article class="lab-row">

        <section class="firmware-wrapper">

            <div class="doc-container">
                <?php
                    include('include/firmware-content.php');
                ?>
            </div>
            
        </section>

    </article>
</section>

<?php include('footer-3.php'); ?>