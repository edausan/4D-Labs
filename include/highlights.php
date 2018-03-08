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
                            <?php if ($highlight == 'sim-modules' || $highlight == 'workshop4' || $highlight == 'goldelox') : ?>
                                <figure class="highlights-figure"><img src="img/thumbnails/<?php echo $highlight; ?>.png" alt=""></figure>
                            <?php  else : ?>
                                <figure class="highlights-figure"><img src="img/<?php echo $highlight; ?>.png" alt=""></figure>
                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </a>
                </li>

                <?php endforeach; ?>
            </ul>

        </section>

    </article>

</section>