<?php 
    define('TITLE', 'App Notes');
    $nav = array('','','nav-active','','','');
    include('header-2.php');


    $sidebarFilters =   array(

                            'difficulty'  =>  array(
                                                'Easy'                  =>  28,
                                                'Average'               =>  17,
                                                'Difficult'             =>  1,
                                            ),

                            'processors'  =>  array(
                                                'Goldelox'              =>  11,
                                                'Diablo16'              =>  34,
                                                'Picaso'                =>  33,
                                                'Picaso-Lite'           =>  30,
                                            ),
                            
                            'environments'  =>  array(
                                                'Designer'              =>  18,
                                                'Serial'               =>  11,
                                                'ViSi'                  =>  21,
                                                'ViSi Genie'            =>  26,
                                            ),

                            'topics'  =>  array(
                                                'ADC'                   =>  1,
                                                'Audio'                 =>  1,
                                                'File Access'           =>  2,
                                                'Flash Banks'           =>  7,
                                                'Flash Memory'          =>  2,
                                                'Fonts'                 =>  1,
                                                'Genie Events'          =>  11,
                                                'Getting Started'       =>  8,
                                                'GPIO'                  =>  1,
                                                'PmmC'                  =>  3,
                                                'Primitives'            =>  4,
                                                'Program Destination'   =>  7,
                                                'RAM'                   =>  2,
                                                'Smart Widgets'         =>  10,
                                                'Strings'               =>  3,
                                                'Touch Inputs'          =>  5,
                                                'uSD Card'              =>  6,
                                                'Workshop PRO'          =>  10,
                                                'Workshop4 Widgets'     =>  12,
                                            ),

                        );
?> 






<section class="appnote-wrapper">

    <article class="lab-container">

            

            <?php
                $title      =   'app notes';
                $breads     =   array($title);
                include('appnotes-cat-template.php'); 
            ?>

    </article>

</section>

<?php include('footer-3.php'); ?>