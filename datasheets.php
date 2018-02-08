<?php 
    define('TITLE', 'Datasheets');
    include('header-2.php');
    $breads =   array('support','datasheets');
?> 

<section class="lab-container">
    <!-- Breadcrumbs -->
    <?php include('include/breadcrumbs.php'); ?>
    <!-- /Breadcrumbs -->

    <article class="lab-row">

        <section class="datasheet-wrapper">

            <div class="doc-container">
                <?php
                    include('include/datasheet-content.php');
                ?>
            </div>
            
        </section>

    </article>
</section>

<?php include('footer-3.php'); ?>