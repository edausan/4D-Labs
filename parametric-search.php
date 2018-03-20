<?php 
    define('TITLE', 'Parametric Search');
    $nav = array('','','','','','nav-active');
    include('header-2.php');
?> 

<section class="lab-container-fluid">

    <article class="lab-row">  
        <div id="orientation-msg" style="display: none;">
            <i class="fa fa-exclamation"></i>
            <span>Please change your device's orientation to <strong>Landscape</strong> to view Parametric Search.</span> 
        </div>
        <?php include('include/parametric-search-content.php'); ?>
    </article>

</section>

<?php include('footer-3.php'); ?>