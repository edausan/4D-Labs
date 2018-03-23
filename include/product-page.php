<section class="lab-container-fluid">
    <article class="lab-row">

    
        <section class="product-page-wrapper"> <!-- Product Page Wrapper -->

            <section class="lab-container"> <!-- lab-container -->
                <!-- Breadcrumbs -->
                <?php include('include/breadcrumbs.php'); ?>
                <!-- /Breadcrumbs -->
                <article class="lab-row"> <!-- lab-row -->
                    

                    <section class="product-head-wrapper"> <!-- Product Details Wrapper -->

                        <div class="product-head" id="product-title">
                            <header>
                                <?php if ($product['product-type'] >= 1) : ?>
                                    <h1><?php echo $product['title']; ?> Graphics <br /> Processor</h1>
                                <?php else :?>
                                    <h1><?php echo $product['name']; ?></h1>
                                <?php endif; ?> 

                                <!-- <h1><?php echo $product['name']; ?></h1> -->
                                <div class="sub-head">
                                    <h3>Manufacturer Part#: <span><?php echo $product['order-details']['Part Number']; ?></span></h3>
                                    <h5><?php echo $product['order-details']['Package Type']; ?> Graphics Processor</h5>
                                </div>                                
                            </header>
                            <p><?php echo $product['short-description']; ?></p>

                            <!-- <a href="workshop4">Download the Workshop4 PRO IDE »</a> -->

                            <!-- <div class="product-overview">
                                <ul>
                                    <li><a class="hideVideo" id="view-product-video"><img src="img/product-page-icons/product-overview.png" alt=""> <span>Product Video</span></a></li>
                                    <li><a href=""><img src="img/product-page-icons/datasheet.png" alt=""> <span>Datasheet</span></a></li>
                                    <li><a href=""><img src="img/product-page-icons/manual.png" alt=""> <span>Manual</span></a></li>
                                </ul>
                            </div> -->
                        </div>

                        <div class="product-head" id="product-img">
                            <figure class="product-thumb">
                                <img id="" src="img/product-page-icons/goldelox.png" alt="">
                            </figure>
                            <p id="pricing">Price: <span>10K+</span> <strong>$ <?php echo $product['pricing']; ?></strong></p>
                        </div>

                    </section> <!-- Product Details Wrapper -->

                    <section class="diagram-parametric-wrapper">
                        <div class="diagram-wrapper">
                            

                            <figure class="diagram-thumb">

                                <div class="thumb-slide-controls">
                                    <button class="thumb-slide-control ctrl-left" id="ctrl-left"><i class="fa fa-chevron-left"></i></button>
                                    <button class="thumb-slide-control ctrl-right" id="ctrl-right"><i class="fa fa-chevron-right"></i></button>
                                </div>
                               

                                <div class="diagram-thumb-wrapper">
                                    <div class="thumb-container">
                                        <img src="img/product-diagram/diagram.png" alt="">
                                    </div>
                                    <div class="thumb-container">
                                        <img src="img/product-diagram/diagram.png" alt="">
                                    </div>
                                    <div class="thumb-container">
                                        <img src="img/product-diagram/diagram.png" alt="">
                                    </div>
                                    <div class="thumb-container">
                                        <img src="img/product-diagram/diagram.png" alt="">
                                    </div>
                                </div>
                            </figure>

                            <ul class="diagram-thumb-list">
                                <li class="active-thumb" id="prod-thumb-1" data-move="0">
                                    <!-- <img src="img/product-diagram/diagram.png" alt=""> -->
                                </li>
                                <li id="prod-thumb-2" data-move="25">
                                    <!-- <img src="img/product-diagram/diagram.png" alt=""> -->
                                </li>
                                <li id="prod-thumb-3" data-move="50">
                                    <!-- <img src="img/product-diagram/diagram.png" alt=""> -->
                                </li>
                                <li id="prod-thumb-4" data-move="75">
                                    <!-- <img src="img/product-diagram/diagram.png" alt=""> -->
                                </li>
                            </ul>
                        </div>


                        
                        <div class="parametric-wrapper">
                            <ul class="parametric-details-list">
                                <li class="parametric-detail"><strong>Part Number:</strong> <span><?php echo $product['order-details']['Part Number']; ?></span></li>
                                <li class="parametric-detail"><strong>Status:</strong> <span><?php echo $product['order-details']['Status']; ?></span></li>
                                <li class="parametric-detail"><strong>Package Type:</strong> <span><?php echo $product['order-details']['Package Type']; ?></span></li>
                                <li class="parametric-detail"><strong>Supply Voltage:</strong> <span><?php echo $product['order-details']['Supply Voltage']; ?></span></li>
                                <li class="parametric-detail"><strong>Clock Speed (Max):</strong> <span><?php echo $product['order-details']['Clock Speed (Max)']; ?></span></li>
                            </ul>
                            <ul class="parametric-details-list">
                                <li class="parametric-detail"><strong>Data Processing:</strong> <span><?php echo $product['order-details']['Data Processing']; ?></span></li>
                                <li class="parametric-detail"><strong>Internal Flash:</strong> <span><?php echo $product['order-details']['Internal Flash']; ?></span></li>
                                <li class="parametric-detail"><strong>Internal SRAM:</strong> <span><?php echo $product['order-details']['Internal SRAM']; ?></span></li>
                                <li class="parametric-detail"><strong>Communication Protocols:</strong>
                                    <span>
                                        <ul id="comm-protocols">
                                        <?php foreach ($product['order-details']['Communication Protocols'] as $key => $value) : ?>
                                            <li class="parametric-detail"><?php echo $key; ?>: <?php echo $value; ?></li>
                                        <?php endforeach; ?>
                                        </ul>
                                    </span>
                                </li>
                                <li class="parametric-detail"><strong>GPIO Pins:</strong> <span><?php echo $product['order-details']['GPIO Pins']; ?></span></li>
                            </ul>
                            <ul class="parametric-details-list">
                                <li class="parametric-detail"><strong>Timer:</strong> <span><?php echo $product['order-details']['Timer']; ?></span></li>
                                <li class="parametric-detail"><strong>Operating Temperature:</strong> <span><?php echo $product['order-details']['Operating Temperature']; ?></span></li>
                                <li class="parametric-detail"><strong>Display Interface:</strong> <span><?php echo $product['order-details']['Display Interface']; ?></span></li>
                                <li class="parametric-detail"><strong>RoHS Certified:</strong> <span><?php echo $product['order-details']['RoHS Certified']; ?></span></li>
                            </ul>
                        </div>
                    </section>

                    <?php include('product-page-tabs.php'); ?>
                    <?php include('mobile-page-tabs.php'); ?>

                </article> <!-- lab-row -->
            </section> <!-- lab-container -->

        </section> <!-- Product Page Wrapper -->

        

    </article>
</section>