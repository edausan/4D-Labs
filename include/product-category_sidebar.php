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
        <?php foreach ($sidebarFilters as $key => $value) : ?>
            <article class="product-filter">
                
                <h6 for=""><?php echo $key; ?></h6>

                <ul>
                    <?php foreach ($value as $valkey => $val) : ?>
                        <li>
                            <a href="">
                                <input type="checkbox" name="<?php echo $key; ?>" id="<?php echo $valkey; ?>">
                                <label for="<?php echo $valkey; ?>"><?php echo $valkey; ?> [<?php echo $val; ?>]</label>
                            </a>
                            
                        </li>
                    <?php endforeach; ?>
                </ul>
            </article>
        <?php endforeach; ?>
    </section>

    <?php include('include/price-range.php'); ?>

</aside>