<?php 
    define('TITLE', 'Privacy Policy');
    include('header-2.php');

    $breads = array('Privacy Policy');
?>

<article class="lab-container">    
    <section class="lab-row">

        <?php include('include/breadcrumbs.php'); ?>

        <article class="terms-wrapper">
            <header>
                <h1 class="">Privacy Policy</h1>
            </header>
        
            <ul class="terms-list">
                <?php 
                    foreach ($privacyPolicy as $title => $content) {
                ?>
                    <li class="terms-item">
                        <h3><?php echo $title; ?></h3>

                        <?php foreach ($content as $key => $value) { ?>
                            
                            <?php if(!is_array($value)) { ?>

                                <p><?php echo $value; ?></p>
                            
                            <?php } else { ?>
                                <p><?php echo $key; ?></p>
                                
                                <ul class="terms-sublist">
                                    <?php foreach ($value as $key => $val) { ?>
                                        <!-- <p><?php echo $key[0]; ?></p> -->
                                        <li><?php echo $val; ?></li>
                                    <?php } ?>
                                
                                </ul>

                            <?php } ?>

                        <?php } ?>
                        
                    </li>
                <?php } ?>

            </ul>
        </article>

    </section>
</article>

<?php include('footer-3.php'); ?>