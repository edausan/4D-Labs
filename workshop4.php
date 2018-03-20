<?php 
    define('TITLE', 'Worshop4 PRO IDE');
    $nav = array('nav-active','','','','','');
    include('header-2.php');
?> 


<section class="solutions-wrapper">

    <article class="lab-container">

            <?php
                $title      =   'workshop4';
                $breads     =   array('products', $title);
                $name       =   'workshop4';
                $type       =   'png';
                
            ?>       
    
    </article>

    <article class="lab-container-fluid">
        <section class="lab-row">
        <?php include('ws4.php');  ?>
        </section>
    </article>

</section>

<?php include('footer-3.php'); ?>