<?php 
    define('TITLE', 'Terms and Conditions');
    $nav = array('','','','','','');
    include('header-2.php');

    $breads = array('Terms and Conditions');
?>

<article class="lab-container">    
    <?php include('include/breadcrumbs.php'); ?>
    <section class="lab-row">
        <article class="terms-wrapper">
            <header>
                <h1 class="">Terms and Conditions</h1>
            </header>
        
            <ul class="terms-list">
                <?php 
                    foreach ($termsAndConditions as $title => $content) {
                ?>
                    <li class="terms-item">
                        <h3><?php echo $title; ?></h3>

                        <?php foreach ($content as $key => $value) { ?>
                            
                            <?php if(!is_array($value)) { ?>

                                <p><?php echo $value; ?></p>
                            
                            <?php } else { ?>
                                <p><?php echo $key; ?></p>
                                
                                <ol class="terms-sublist">
                                    <?php foreach ($value as $key => $val) { ?>
                                        <!-- <p><?php echo $key[0]; ?></p> -->
                                        <li><?php echo $val; ?></li>
                                    <?php } ?>
                                
                                </ol>

                            <?php } ?>

                        <?php } ?>
                        
                    </li>
                <?php } ?>

            </ul>
        </article>

    </section>
</article>

<?php include('footer-3.php'); ?>