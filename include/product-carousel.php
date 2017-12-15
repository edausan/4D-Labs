<div id="carouselExampleIndicators" class="carousel slide carousel-2" data-ride="carousel">
    <ol class="carousel-indicators">

        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <?php $x = 1; foreach ($product['carousel-img'] as $carImg) { ?>

            <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $x; ?>"></li>

        <?php $x++; } ?>

    </ol>

    <div class="carousel-inner" role="listbox">
        <div class="carousel-item active" style="background-image: url('img/product-banner/<?php echo $product['title'] ?>.jpg')">
        </div>

        <?php foreach ($product['carousel-img'] as $carImg) { ?>
            
            <div class="carousel-item" style="background-image: url('img/product-banner/<?php echo $carImg; ?>.jpg')">
            </div>

        <?php } ?>

    </div>



    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>

    
</div>