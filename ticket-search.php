<?php 
    define('TITLE', 'Search Result');
    $nav = array('','','','','','');
    include('header-2.php');
?> 

<section class="lab-container">
    <article class="lab-row">
        
        <h1>Ticket Search Result Page</h1>
        <input type="text" value="<?php echo $_POST['ticket-search']; ?>">
        
    </article>
</section>

<?php include('footer-3.php'); ?>