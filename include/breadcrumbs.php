<section class="lab-row">

    <div class="breadcrumbs">
        <ul class="breadcrumbs-list">
            <li><a href="/"><i class="fa fa-home"></i></a></li>
            <?php foreach($breads as $bread) { ?>
                <li><a href="<?php echo $bread; ?>.php"><span style="text-transform: capitalize;"><?php echo $bread; ?></span></a></li>
            <?php } ?>
        </ul>
    </div>

</section>