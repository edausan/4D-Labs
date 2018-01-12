<?php
    include('include/breadcrumbs.php'); 
?>

<section class="lab-row">
    <article class="cat-product-container">
        <aside class="sidebar-wrapper">
            <section class="product-search-wrapper">
                <form action="" class="cat-search-form">
                    <label for="">Search App Notes</label>
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
                    foreach ($appNoteItems as $key => $value) {
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
                    foreach ($appNoteItems as $appnote => $appVal) {
                ?>
                <section class="cat-product">
                    
                    <figure class="cat-product-img-wrapper appnote-thumb">
                        <!-- <a href="appnotes.php?appnote=<?php echo $appnote; ?>"> -->
                            <img src="img/ws4-env/<?php echo $appVal['img']; ?>.png" alt="<?php echo $key; ?>">
                        <!-- </a> -->
                    </figure>

                
                    <div class="cat-product-details appnote-details">
                        <h4 class="cat-product-title"><?php echo $appVal['title']; ?></h4>
                        <p for="" class="cat-product-type"><?php echo $appVal['description']; ?></p>

                        <details class="appnote-cat-details">
                            <summary>More Details</summary>
                            <ul class="appnote-detail-list">
                                <li class="appnote-detail">
                                    <strong>Difficulty: </strong> <span><?php echo $appVal['difficulty']; ?></span>
                                </li>

                                <li class="appnote-detail">
                                    <strong>Revision: </strong> <span><?php echo $appVal['revision']; ?></span>
                                </li>

                                <li class="appnote-detail" id="description">
                                    <strong>Description: </strong> <span><?php echo $appVal['description']; ?></span>
                                </li>

                                <li class="appnote-detail" id="supported-processor">
                                    <strong>Supported Processors: </strong> 

                                    <?php 
                                        foreach ($appVal['processor'] as $key =>  $val) {
                                    ?>
                                        <a href="<?php echo $key; ?>.php" title="<?php echo $val; ?>" target="_blank" class="<?php echo $key; ?>"><?php echo $val; ?>, </a>
                                    <?php } ?>
                                </li>

                                <li class="appnote-detail" id="supported-environment">
                                    <strong>Supported Environments: </strong> 
                                    <ul class="env-list">
                                        <?php 
                                            foreach ($appVal['environment'] as $value) {
                                        ?>
                                            <!-- <img src="img/ws4-env/<?php echo $value; ?>.png" alt=""> -->

                                                <li id="<?php echo $value; ?>"><?php echo $value; ?>, </li>
                                            
                                        <?php } ?>
                                    </ul>
                                </li>

                                <li class="appnote-detail" id="downloads">
                                    <strong>Downloads: </strong> 

                                    <ul>
                                        <li>
                                        
                                        <?php 
                                            foreach ($appVal['downloads'] as $fileType => $downloadLink) {
                                        ?>
                                            <a href="<?php echo $downloadLink; ?>" target="_blank">
                                                <img src="img/<?php echo $fileType; ?>.png" alt="">
                                            </a>
                                        <?php } ?>

                                        </li>
                                    </ul>
                                </li>

                                <?php if (array_key_exists('prerequisites', $appVal)) { ?>
                                    <li class="appnote-detail" id="prerequisites">
                                        <strong>Prerequisites : </strong>

                                        <ul>
                                            <li class="prerequisite-header">
                                                <strong id="app-title">App Note Title</strong> <strong>Difficulty</strong>
                                            </li>
                                            <?php
                                                foreach ($appVal['prerequisites'] as $key => $val) {
                                            ?>
                                            
                                                <li>
                                                    <a href="appnotes.php?appnote=<?php echo $val['link']; ?>" target="_blank"><?php echo $key; ?></a>  <span><?php echo $val['diff']; ?></span>
                                                </li>
                                            
                                            
                                            <?php } ?>
                                        </ul>

                                    </li> 
                                <?php } ?>

                            </ul>
                        </details>
                    </div>

                </section>
                <?php } ?>

            </article>

        </section>
    </article>
</section>