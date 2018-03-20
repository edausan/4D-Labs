<?php 
    define('TITLE', 'App Notes');
    
    include('header-2.php');

    

    function strip_bad_chars( $input ) {
        $output =   preg_replace( "/[^a-zA-Z0-9_-]/", "", $input);
        return $output;
    }

    if (array_key_exists($_GET['appnote'], $appNoteItems)) {
        if(isset($_GET['appnote'])){
            $menuItem   =   strip_bad_chars( $_GET['appnote'] );
            $appnote   =   $appNoteItems[$menuItem];

            $breads     =   array('app notes', $appnote['title']);
        }
?>



<section class="solutions-wrapper">
    

    <article class="lab-container">
        <!-- Breadcrumbs -->
        <?php include('include/breadcrumbs.php'); ?>
        <!-- /Breadcrumbs -->

        <section class="lab-row">
            <article class="appnote-wrapper">
                <header class="appnote-header">
                    <h2 class="appnote-title"><?php echo $appnote['title']; ?></h2>
                </header>
                
                <ul class="appnote-detail-list">

                    <li class="appnote-detail" id="diff">
                        
                        <strong>Difficulty: </strong> <span><figure><img src="img/diff.jpg" alt="" class="<?php echo $appnote['difficulty']; ?>"></figure><?php echo $appnote['difficulty']; ?></span>
                    </li>

                    <li class="appnote-detail" id="revision">
                        <strong>Revision: </strong> <span><?php echo $appnote['revision']; ?></span>
                    </li>

                    <li class="appnote-detail" id="description">
                        <strong>Description: </strong> <span id="description-content"><?php echo $appnote['description']; ?></span>
                    </li>

                    <li class="appnote-detail" id="supported-processor">
                        <strong>Supported Processors: </strong> 

                        <?php
                            foreach ($appnote['processor'] as $key => $val) {
                        ?>

                            <a href="<?php echo $key; ?>.php" title="<?php echo $val; ?>" rel="noopener noreferrer" target="_blank" class="<?php echo $key; ?>"><?php echo $val; ?></a>
                        
                        <?php } ?>

                    </li>
                    
                    <li class="appnote-detail" id="supported-environment">
                        <strong>Supported Environments: </strong>

                        <?php
                            foreach ($appnote['environment'] as $val) {
                        ?>

                        <img src="img/ws4-env/<?php echo $val; ?>.png" alt="<?php echo $val; ?>" title="<?php echo $val; ?>">

                        <?php } ?>
                    </li>

                    <?php if (array_key_exists('prerequisites', $appnote)) { ?>
                        <li class="appnote-detail" id="prerequisites">
                            <strong>Prerequisites : </strong>
                            <ul>
                                <li class="prerequisite-header">
                                    <strong id="app-title">App Note Title</strong> <strong>Difficulty</strong>
                                </li>
                                <?php
                                    foreach ($appnote['prerequisites'] as $key => $val) {
                                ?>
                                
                                    <li>
                                        <a href="appnotes.php?appnote=<?php echo $val['link']; ?>" rel="noopener noreferrer" target="_blank"><?php echo $key; ?></a>  <span><?php echo $val['diff']; ?></span>
                                    </li>
                                
                                
                                <?php } ?>
                            </ul>

                        </li> 
                    <?php } ?>

                    <li class="appnote-detail" id="downloads">
                        <strong>Downloads: </strong>

                        <ul>
                            <?php 
                                foreach($appnote['downloads'] as $fileType => $downloadLink) {
                            ?>
                                <li>
                                    <a href="<?php echo $downloadLink; ?>" rel="noopener noreferrer" target="_blank">
                                        <img src="img/<?php echo $fileType; ?>.png" alt="">
                                    </a>
                                </li>
                            
                            <?php } ?>
                        </ul>
                        
                    </li>
                    
                </ul>

            </article>

        </section>
            
        



    </article>

</section>

<?php } else { ?>

<section class="solutions-wrapper">
    <article class="lab-container">
        <h1>Sorry the page is not available..</h1>
    </article>
</section>

<?php } ?>


<?php include('footer-3.php'); ?>