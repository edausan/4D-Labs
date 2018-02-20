<section class="lab-container-fluid">
    <article class="lab-row">

        <section class="news-and-events-wrapper">
            <article class="lab-container">
                <section class="lab-row">

                    <header class="news-header">
                        <h3>News and Events</h3>
                    </header>

                    <div class="news-container">

                        <?php $x = 1; foreach ($news as $key => $value) : ?>
                            <div class="news-item">
                                <div class="news-content-wrapper">
                                    <figure class="news-thumb">
                                        <a href="<?php echo $value['link']; ?>">    
                                            <img src="img/news-thumbs/<?php echo $value['thumb']; ?>" alt="" title="<?php echo $value['title']; ?>">
                                        </a>
                                    </figure>

                                    <div class="news-content">
                                        <a href="<?php echo $value['link']; ?>">   
                                            <h5><?php echo $value['title']; ?></h5>
                                        </a>
                                        <p id="news-content-<?php echo $x; ?>"><?php echo $value['content']; ?></p>

                                        <strong><span><?php echo $key; ?></span> <a href="<?php echo $value['link']; ?>" title="<?php echo $value['title']; ?>">Read More →</a></strong>
                                        
                                    </div>
                                </div>
                            </div>
                        <?php $x++; endforeach; ?>

                    </div>
                </section>  

            </article>

        </section>

    </article>
</section>