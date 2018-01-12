<article class="cat-product-container">
    <aside class="sidebar-wrapper">
        <section class="product-search-wrapper">
            <form action="" class="cat-search-form">
                <label for="">Search Product</label>
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Search Here">
                    <button class="input-group-addon"><i class="fa fa-search"></i></button>
                </div>
                
            </form>
        </section>

        <section class="product-filters-wrapper">
            <?php 
                foreach ($sidebarFilters as $key => $value) {
            ?>

            <article class="product-filter">
                
                <h6 for=""><?php echo $key; ?></h6>

                <ul>
                    <?php
                        foreach ($value as $valkey => $val) {
                    ?>
                    
                    <li>
                        <a href="">
                            <input type="checkbox" name="<?php echo $key; ?>" id="<?php echo $valkey; ?>">
                            <label for="<?php echo $valkey; ?>"><?php echo $valkey; ?> [<?php echo $val; ?>]</label>
                        </a>
                        
                    </li>

                    <?php } ?>
                </ul>
            </article>

            <?php } ?>
        </section>

    </aside>

    <section class="cat-product-result">
        <article class="show-count">
            <?php 
                $x = 0;
                foreach ($catProductView as $key => $value) {
                $x++;
                }
            ?>
            <label for=""><?php echo $x;?> Item(s)</label>
            

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

            <?php 
                foreach ($catProductView as $key => $value) {
            ?>
            <section class="cat-product">
                
            
                    <figure class="cat-product-img-wrapper">
                        <a href="<?php echo $key; ?>.php">
                            <img src="img/<?php echo $key; ?>.<?php echo $value['file-type']; ?>" alt="<?php echo $key; ?>">
                        </a>
                    </figure>

                

                <div class="cat-product-details">

                    <?php
                        if ($value['type'] == 'Embedded Graphics Controller') { ?>
                        
                            <h4 class="cat-product-title"><a href="<?php echo $key; ?>.php"><?php echo $key; ?> Graphics Processor</a></h4>

                        <?php } elseif($value['type'] == 'Integrated Development Environment') { ?>

                            <h4 class="cat-product-title"><a href="<?php echo $key; ?>.php"><?php echo $key; ?> PRO IDE</a></h4>

                        <?php } else { ?>

                            <h4 class="cat-product-title"><a href="<?php echo $key; ?>.php"><?php echo $key; ?></a></h4>

                        <?php } ?>
                    
                    

                    <label for="" class="cat-product-type"><?php echo $value['type']; ?></label>

                    <div class="cat-parametric-data">
                        <details>
                            <summary>More Details</summary>
                            <ul class="product-data-list">

                                <?php 
                                    foreach ($value['parametric-data'] as $key => $val) {
                                ?>
                                <li><strong><?php echo $key; ?>: </strong> <span><?php echo $val; ?></span></li>
                                <?php } ?>

                            </ul>
                        </details>
                        
                    </div>

                </div>
                
            </section>
            <?php } ?>

        </article>

    </section>
</article>