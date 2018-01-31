<!-- Shipping and Billing Page when user is already Logged In -->
<?php 
    define('TITLE', 'Account');
    include('header-2.php');
?>



<section class="lab-container">
    <article class="lab-row">
    
        <section class="user-account-wrapper">
            

        <?php
            $title      =   'account';
            $breads     =   array($title);
            include('include/coming-soon.php');
        ?>
            

        </section> 
    </article> 
</section>


<?php include('footer-3.php'); ?>