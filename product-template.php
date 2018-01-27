<!-- Breadcrumbs -->
<?php include('include/breadcrumbs.php'); ?>
<!-- /Breadcrumbs -->

<!-- Product Wrapper -->
<section class="lab-row">
    <article class="product-details-wrapper">

        <!-- Header -->
        <header class="product-header">
            <figure class="product-icon">
                <img src="img/satellite_2.png" alt="">
            </figure>
            <div class="header-content">
                <h1><?php echo $product['name']; ?></h1>
                <label for="">Embedded Graphics Controller</label>
            </div>
        </header>
        <!-- /Header -->

        
        <!-- Product Image -->
        <!-- <figure class="product-img-wrapper">
            <div class="product-img">
                <img src="img/product-banner/<?php echo $product['title']; ?>.jpg" alt="<?php echo $product['title']; ?>">
            </div>
        </figure> -->

        <?php include('include/product-carousel.php'); ?>
        <!-- /Product Image -->
        



        <!-- Product Highlights -->
        <article class="highlights-wrapper">
            <h3 style="text-transform: capitalize;"><?php echo $product['title']?> Overview</h3>

            <ul class="highlights-list">
                <?php  foreach ($product['highlights'] as $key => $value) { ?>

                    <li class="highlights"><p><?php echo $value?></p></li>

                <?php } ?>
            </ul>
        </article>
        <!-- /Product Highlights -->


        <!-- Parametric Data -->
        <article class="parametric-data-wrapper">
            <header class="parametric-header">
                <h1>Parametric Data</h1>
            </header>
            
            <div class="parametric-data">
                <ul class="data-list">

                    <?php foreach ($product['order-details'] as $key => $value) { ?>

                        <li><strong><?php echo $key; ?></strong> <span><?php echo $value; ?></span></li>

                    <?php } ?>

                </ul>
            </div>
            
        </article>
        <!-- /Parametric Data -->



        <!-- Product Diagram -->
        <!-- <figure class="product-diagram-wrapper">
            <div class="product-diagram">
                <img src="img/product-diagram/<?php echo $product['title']; ?>-diagram.png" alt="<?php echo $product['title']; ?>">
            </div>
        </figure> -->
        <!-- /Product Diagram -->

        <!-- Tabs -->
        <section class="product-tabs">
            <article class="tabs-wrapper">
                    <ul class="tabs">
                        <li class="tab active" id="description">
                            <label>
                                <svg class="ico-svg" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/tab-icons.svg#description" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <span>Description</span>
                            </label>
                        </li>
                        <li class="tab" id="specifications">
                            <label> 
                                <svg class="ico-svg" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/tab-icons.svg#specs" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <span>Specifications</span>
                            </label>
                        </li>
                        <li class="tab " id="downloads">
                            <label>
                                <svg class="ico-svg" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/tab-icons.svg#downloads" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <span>Downloads</span>
                            </label>
                        </li>
                        <li class="tab" id="product-video">
                            <label>
                                <svg class="ico-svg video" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/tab-icons.svg#video" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <span>Product Video</span>
                            </label>
                        </li>
                        <li class="tab" id="dev-tools">
                            <label>
                                <svg class="ico-svg" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/tab-icons.svg#devtools" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <span>Development Tools</span>
                            </label>
                        </li>
                        <li class="tab order" id="order-details">
                            <label>
                                <svg class="ico-svg" viewBox="0 0 1000 1000" xmlns="http://www.w3.org/2000/svg">
                                    <use xlink:href="img/tab-icons.svg#cart" xmlns:xlink="http://www.w3.org/1999/xlink"></use>
                                </svg>
                                <span>Order Now</span>
                            </label>
                        </li>
                    </ul>
            </article>  

            <!-- Tab Content -->
            <article class="tab-content">
            
                <!-- Product Description -->
                <div class="tab-content description-wrapper" id="description">
                    <h2>
                    
                        <?php echo $product['name']; ?></h2>

                    <?php foreach ($product['description'] as $key => $value) { ?>

                        <p><?php echo $value?></p>

                    <?php } ?>
                </div>
                <!-- /Product Description -->



                <!-- Product Specs -->
                <div class="tab-content tab-hidden specs-wrapper" id="specifications">
                    <h2><?php echo $product['title']; ?> Specifications</h2>
                    <ul class="specs-list">
                        <?php  foreach ($product['specs'] as $key => $value) { ?>

                            <li class="specs"><?php echo $value?></li>

                        <?php } ?>
                    </ul>
                    <ul class="specs-list">
                        <?php  foreach ($product['specs-1'] as $key => $value) { ?>
                            <li class="specs"><?php echo $value?></li>
                        <?php } ?>

                        <?php if (array_key_exists('specs-2', $product)) { ?>
                            
                            <?php  foreach ($product['specs-2'] as $key => $value) { ?>
                                <li class="specs">
                                    <p><?php echo $key; ?></p>

                                    <ul class="sub-specs">
                                        <?php  foreach ($value as $val) { ?>
                                            <li><?php echo $val; ?></li>
                                        <?php } ?>
                                    </ul>

                                </li>
                            <?php } ?>

                        <?php } ?>

                        
                    </ul>
                </div>
                <!-- /Product Specs -->



                <!-- Downloads -->
                <div class="tab-content tab-hidden downloads-wrapper" id="downloads">
                    <h2>Downloads</h2>
                    <ul class="download-category-list">
                        
                        <?php $y=0; foreach ($product['downloads'] as $key => $value) { ?>
                        

                            <li class="download-category">
                                <strong><img src="img/download-icons/<?php echo $product['download-header-icon'][$y]?>.png" alt="<?php echo $product['download-header-icon'][$y]?>"> <p><?php echo $key?></p></strong> 

                                <ul class="download-list">

                                    <?php $x=0;  foreach ($value['names'] as $val) { ?>

                                        <li class="download-item">
                                            <figure class="file-icon">
                                                <a href="<?php echo $value['srcs'][$x]; ?>">
                                                    <img src="img/<?php echo $value['icon'][$x]; ?>.png" alt="<?php echo $value['icon'][$x]; ?>">
                                                </a>
                                            </figure>
                                            <div class="download-details">
                                                <p><a href="<?php echo $value['srcs'][$x]; ?>"><?php echo $val; ?></a></p>
                                                <p id="rev"><?php echo $value['rev'][$x]; ?> | <?php echo $value['size'][$x]; ?></p>
                                            </div>
                                            
                                        
                                        </li>

                                    <?php $x++; } ?>

                                </ul>
                            </li>

                        <?php $y++; } ?>
                    </ul>
                </div>
                <!-- /Downloads -->



                <!-- Product Video -->
                <div class="tab-content tab-hidden product-video-wrapper" id="product-video">
                    <h2><?php echo $product['title']; ?> Product Video</h2>
                    <iframe src="<?php echo $product['video-src']; ?>" allowfullscreen="true" frameborder="0" width="100%"></iframe>
                </div>
                <!-- /Product Video -->


                <!-- Order Details -->
                <div class="tab-content tab-hidden order-details-wrapper" id="order-details">
                    <h2>Order Now</h2>

                    <!-- Ordering form -->
                    <div class="order-container">
                        <form action="" class="order-form">
                            
                            <figure class="order-img-wrapper" >
                                <img src="img/<?php echo $product['title']?>.png" alt="">
                                <figcaption><?php echo $product['order-details']['Package Type']?></figcaption>
                            </figure>

                            <div class="form-input">
                                <label for="qty" class="">Quantity</label>
                                <input name="qty" id="qty" step="" min="1" max="999999999" value="1" title="Enter Quantity" class="input-text form-control" type="number">
                                <button type="submit" class="btn btn-info"><i class="fa fa-shopping-cart"></i> <span>Add to Cart</span> </button>

                                <div class="separator"><span>or</span></div>

                                <a href="contact" class="request-quote">REQUEST A QUOTE FOR HIGHER QUANTITIES</a>
                            </div>

                            
                            
                        </form>
                        <!-- /Ordering form -->

                        <!-- Quantity Table -->
                        <table class="quantity-table table">
                                
                            <thead>
                                <tr>
                                    <?php
                                        foreach ($product['quotation'] as $key => $value) {
                                    ?>
                                                <th style="padding-right: 20px;"><?php echo $key; ?></th>
                                    <?php } ?>
                                </tr>
                            </thead>

                            <tbody>
                                    <?php
                                        $x = 0;
                                        foreach ($product['quotation']['Quantity'] as $quote) {
                                    ?>
                                <tr>

                                        <td><?php echo $quote; ?></td>
                                        <td><?php echo $product['quotation']['Unit Price'][$x]; ?></td>
                                        <td><?php echo $product['quotation']['Lead Time'][$x]; ?></td>
                                    
                                </tr>
                                    <?php  $x++; } ?>
                            </tbody>
                        </table>
                        <!-- /Quantity Table -->

                    </div>


                    
                    <!-- Reel Order -->
                    <div class="reel-order">
                        <?php if (array_key_exists('reel-order', $product)) { ?>
                            
                            <?php  foreach ($product['reel-order'] as $key => $value) { ?>
                                <div class="reel-order-content">
                                    <i class="fa fa-info-circle"></i> 
                                    <label for=""><strong><?php echo $key; ?></strong></label>
                                    <p><?php echo $value; ?></p>
                                </div>
                            <?php } ?>

                        <?php } ?>
                    </div>
                    <!-- /Reel Order -->

                    <!-- <hr> -->

                    <!-- Order Services -->
                    <div class="order-services">

                        <div class="services dispatch">
                            <div class="service">
                                
                                <div class="service-content">
                                    <h3>Next Business Day Dispatch</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>

                                <img src="img/order-icons/dispatch.png" alt="">
                            </div>
                            
                        </div>

                        <div class="services delivery">
                            <div class="service">
                                
                                <div class="service-content">
                                    <h3>Express Worldwide Delivery</h3>
                                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                                </div>

                                <img src="img/order-icons/delivery.png" alt="">
                            </div>
                        </div>

                    </div>
                    <!-- /Order Services -->

                </div>

                <!-- /Order Details -->


                <!-- Development Tools -->
                <div class="tab-content tab-hidden dev-tools-wrapper" id="dev-tools">
                    <header class="dev-tools-header">
                        <h2>Development Tools</h2>
                        <h5><?php echo $product['dev-tools']['title'] ;?></h5>
                        <p><?php echo $product['dev-tools']['intro'] ;?></p>
                    </header>

                    <figure class="dev-tool-img">
                        <a href="<?php echo $product['downloads']['Development Resources']['srcs'][1] ?>">
                            <img src="<?php echo $product['dev-tools']['ws4-img'] ;?>" alt="">
                        </a>
                    </figure>

                    


                    <!-- Description -->
                    <article class="dev-tool-description">
                        <?php foreach ($product['dev-tools']['description'] as $desc) {  ?>
                            <p><?php echo $desc; ?></p>
                        <?php } ?>
                    </article>
                    <!-- /Description -->
                    

                    <!-- Environments -->
                    <article class="dev-tool-environment">
                    <?php $x = 0; foreach ($product['dev-tools']['ws4-environments'] as $env => $envVal) {  ?>
                        <div class="environment">
                            <figure class="environment-thumb">
                                <img src="img/ws4-env/<?php echo $env; ?>.png" alt="">
                            </figure>
                            
                            <section class="environment-details" >
                                <h3 style="text-transform: capitalize;" id="<?php echo $env; ?>"><?php echo $env; ?></h3>
                                <p><?php echo $envVal; ?></p>
                            </section>
                        </div>
                        
                    <?php $x++; } ?>
                    </article>
                    <!-- /Environments -->

                </div>
                <!-- /Development Tools -->

            </article>
            <!-- /Tab Content -->

        </section>
        <!-- /Tabs -->

    </article>
</section>
<!-- /Product Wrapper -->