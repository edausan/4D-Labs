<section class="lab-container">
    <article class="lab-row">

        <section class="new-thumbnails-wrapper">

            <header class="new-thumbnails-header">
                <h2>What We Do</h2>
            </header>

            <div class="thumbnails-container">

            <?php foreach ($thumbnails as $thumb => $value) : ?>
                <div class="thumbnails-item <?php echo $value['class'] ?>" id="">
                    <figure class="thumb-wrapper">
                        <a href="<?php echo $value['page'] ?>">
                            <img src="img/thumbnails/<?php echo $value['img'] ?>" alt="">
                        
                    </figure>
                    
                    <div class="thumb-content">
                        <header class="thumb-header">
                            <a href="<?php echo $value['page'] ?>">
                                <h3><?php echo $thumb; ?></h3>
                            </a>
                        </header>

                        <p><?php echo $value['description'] ?></p>

                        <a href="<?php echo $value['page'] ?>">Read More →</a>
                    </div>
                </div>
            <?php endforeach; ?>


            </div>



        </section>

    </article>
</section>