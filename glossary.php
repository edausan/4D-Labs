<?php 
    define('TITLE', 'Technical Glossary');
    include('header-2.php');
    $breads     =   array('technical glossary');
?> 


<section class="lab-container-fluid">

    <article class="lab-row">
        <h3 class="glossary-header">
            <section class="lab-container">
                <article class="lab-row">
                    <p>Technical Glossary</p>
                </article>
            </section>
        </h3>

        <section class="lab-container">

            <article class="lab-row">

                <section class="glossary-wrapper">

                    <div class="alpha-nav">

                        <a class="alpha-link" href="#num">#</a>
                        <?php 
                            foreach ($alphanav as $alpha) {
                        ?>
                            <a class="alpha-link" href="#<?php echo $alpha; ?>"><?php echo $alpha; ?></a>
                        <?php } ?>

                    </div>


                    <div class="glossary-list-wrapper">

                        <ul class="glossary-list">

                            <?php 
                                foreach ($glossary as $item => $content) {
                            ?>

                            <li class="glossary-item">
                                <h3 class="glossary-item-header"><a href="" id="<?php echo $item; ?>"><?php echo $item; ?></a></h3>
                                <ul class="glossary-title-list">

                                    <?php 
                                        foreach ($content as $val => $v) {
                                    ?>

                                        <li class="glossary-item-title">

                                            <h6><a href="#<?php echo $val; ?>"><?php echo $val; ?></a></h6>

                                            <ul>

                                                <?php 
                                                    foreach ($v as $cv) {
                                                ?>
                                                    <li><?php echo $cv; ?></li>
                                                <?php } ?>

                                            </ul>

                                        </li>

                                    <?php } ?>

                                </ul>

                            </li>

                            <?php } ?>

                        </ul>

                    </div>

                </section>

            </article>

        </section>

    </article>

</section>



<?php include('footer-3.php'); ?>