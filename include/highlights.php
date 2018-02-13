<?php

    $highlights =   array(
            'goldelox'      =>  array(
                                    'Goldelox Graphics Processor' => 'The GOLDELOX is a custom embedded graphics controller designed to interface with many popular OLED and LCD display panels.'
                                ),
            'diablo16'      =>  array(
                                    'Diablo16 Graphics Processor' => 'The Diablo16 processor is a great addition to the 4D labs processor range, providing more power, more FLASH, more RAM and more features than the Picaso Processor.'
                                ),
            'parametric-search' =>  array(
                                    'Parametric Search' => 'A parametric search allows queries using multiple criteria to narrow the results.'
                                ),
            'picaso'   =>  array(
                                    'Picaso Graphics Processor' => 'Picaso is a custom embedded 4DGL graphics controller designed to interface with many popular OLED and LCD display panels.'
                                ),
            'workshop4'   =>  array(
                                    'Workshop4 PRO IDE' => 'Workshop4 is a comprehensive software IDE for Microsoft Windows that provides an integrated software development platform for all of the 4D family of processors and modules.'
                                ),
    );

?>

<section class="lab-container-fluid">

    <article class="lab-row">
    
        <section class="highlights-wrapper">

            <ul class="highlights-list">
                <?php foreach ($highlights as $highlight => $value) : ?>

                <li id="<?php echo $highlight; ?>" class="highlights-item">
                    <a href="<?php echo $highlight; ?>">
                        <div class="highlights-container">
                            <?php foreach ($value as $hlkey => $hlval) : ?>

                            <header class="highlights-header">
                                <h4 id="highlights-title"><?php echo $hlkey; ?></h4>
                            </header>
                            <p><?php echo $hlval; ?></p>
                            <figure class="highlights-figure"><img src="img/<?php echo $highlight; ?>.png" alt=""></figure>

                            <?php endforeach; ?>
                        </div>
                    </a>
                </li>

                <?php endforeach; ?>
            </ul>

        </section>

    </article>

</section>