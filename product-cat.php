<article class="cat-product-container">

    <section class="lab-container">

        <!-- Breadcrumbs -->
        <?php include('include/breadcrumbs.php'); ?>
        <!-- /Breadcrumbs -->

        <article class="lab-row"> 

            <!-- Mobile view buttons -->
            <button id="showAside">Show Filters</button>
            <button id="hideAside"><i class="fa fa-close"></i></button>
            <!-- /Mobile view buttons -->

            <!-- Product Category Sidebar -->
            <?php include('include/product-category_sidebar.php'); ?>
            <!-- /Product Category Sidebar -->

            <!-- Product List -->
            <section class="cat-product-result">
                <article class="show-count">

                    <!-- Product Count -->
                    <?php $x = 0; foreach ($catProductView as $key => $value) { $x++; } ?>

                    <label for=""><?php echo $x;?> Item(s)</label>
                    <!-- /Product Count -->

                    <div class="item-count-dropdown">
                        <label for="">Show</label>
                        <select name="" id="" class="form-control">
                            <option value="12">12</option>
                            <option value="24">24</option>
                            <option value="36">36</option>
                        </select>
                    </div>

                </article>

                <article class="cat-product-wrapper">

                    <!-- foreach loop for every products -->
                    <?php foreach ($catProductView as $key => $value) : ?>
                        <section class="cat-product">
                            
                        
                                <figure class="cat-product-img-wrapper">
                                    <a href="<?php echo $key; ?>">
                                        <img src="img/<?php echo $key; ?>.<?php echo $value['file-type']; ?>" alt="<?php echo $key; ?>">
                                    </a>
                                </figure>

                            

                            <div class="cat-product-details">

                                <?php if ($value['type'] == 'Embedded Graphics Controller') : ?>
                                    
                                    <h4 class="cat-product-title"><a href="<?php echo $key; ?>"><?php echo $key; ?> Graphics Processor</a></h4>

                                <?php elseif($value['type'] == 'Integrated Development Environment') : ?>

                                    <h4 class="cat-product-title"><a href="<?php echo $key; ?>"><?php echo $key; ?> PRO IDE</a></h4>

                                <?php else : ?>

                                    <h4 class="cat-product-title"><a href="<?php echo $key; ?>"><?php echo $key; ?></a></h4>

                                <?php endif; ?>
                                
                                

                                <label for="" class="cat-product-type"><?php echo $value['type']; ?></label>

                                <div class="cat-parametric-data">
                                    <details>
                                        <summary>More Details</summary>

                                        <ul class="product-data-list">

                                            <?php foreach ($value['parametric-data'] as $key => $val) : ?>

                                                <li><strong><?php echo $key; ?>: </strong> <span><?php echo $val; ?></span></li>

                                            <?php endforeach; ?>

                                        </ul>
                                    </details>
                                    
                                </div>

                            </div>
                            
                        </section>
                    <?php endforeach; ?>
                    <!-- /foreach loop for every products -->

                </article>

            </section>
            <!-- Product List -->
        
        </article>
    </section>

</article>