<?php 
    define('TITLE', 'About');
    include('header-2.php');
?> 

<section class="about-wrapper">

    <!-- <article class="about-banner"><figure></figure></article> -->

    <!-- About Us Nav -->
    <nav class="about-nav">
        <article class="lab-container">
            <ul class="about-nav-list">
                <li><a href="#about">4D Labs</a></li>
                <li><a href="#addtnl-1">Global Leader</a></li>
                <li><a href="#addtnl-2">Display Hardware</a></li>
                <li><a href="#team">Our Team</a></li>
                <li><a href="#learn">Learn</a></li>
            </ul>
        </article>
        
    </nav>
    <!-- /About Us Nav -->

    <article class="lab-container-fluid">
        <section class="lab-row">

            <!-- About Us Header -->
            <article class="about-us" id="about">
                <section class="about-title">
                    <h1>4D Labs <br> Semiconductors</h1>
                </section>
                <section class="about-main-content">
                    <p>4D Labs Semiconductors is a global leader in the research, development and manufacture of intelligent graphics solutions, offering customers unique, innovative, and cost effective yet market leading graphics processors, catering for a range of applications and industries.</p>
                </section>
            </article>
            <!-- About Us Header -->


            <!-- About Description -->
            <article class="about-description about-first">
                <ul class="desc-list ">
                    <li>
                        <section class="about-desc-content right-desc">
                            <h4>
                                <figure class="icon-wrapper">
                                    <img src="img/about-icons/est.png" alt=""> 
                                </figure>
                                
                                <p>Established in 1990, our extensive experience allows us to transform concepts and ideas into cutting edge hardware and software products, capable of exceeding demands and expectations of our customers.</p></h4>
                        </section>
                    </li>

                    <li>
                        <section class="about-desc-content left-desc">
                            <h4>
                                <p>4D Labs designs, develops and manufactures custom graphics processors that enable both stand alone and host dependant solutions, suitable for a very wide range of applications and projects.</p>
                                <figure class="icon-wrapper">
                                    <img src="img/about-icons/processor.png" alt=""> 
                                </figure>
                            </h4>
                        </section>
                    </li>

                    <li>
                        <section class="about-desc-content right-desc">
                            <h4>
                                <figure class="icon-wrapper">
                                    <img src="img/about-icons/eng.png" alt=""> 
                                </figure>
                                <p>Our engineering team consists of seasoned electronic and software engineers, who work in close partnership with ISO 9001 certified production factories under our stringent Quality Assurance practices and procedures, enabling us to develop and deliver market leading solutions to our customers, to the up-most quality.</p>
                            </h4>
                        </section>
                    </li>

                    <li>
                        <section class="about-desc-content left-desc">
                            <h4>
                            <p>With headquarters in Sydney Australia, 4D Labs has strategically partnered with numerous distributors across the globe, to effectively distribute our unique technology to the ever changing and expanding market.</p>
                            
                            <figure class="icon-wrapper">
                                <img src="img/about-icons/dist.png" alt=""> 
                            </figure>
                            
                            </h4>
                        </section>
                    </li>
                </ul>
            </article>
            <!-- /About Description -->


            <!-- Additional 1 -->
            <article class="about-content addtnl-about-content" id="addtnl-1" >
                <section class="lab-container">
                    <article class="lab-row">
                        <header>
                            <h1>a global leader for intelligent displays and graphics processors</h1>
                        </header>
                        <p>Our growing range of embedded displays leverage oLED and LCD technology, while our range of dedicated graphics processors provide the horsepower to bring superior yet affordable graphics systems to any application.</p>
                        
                        <ul>
                            <li><span><i class="fa fa-angle-double-right"></i></span> <p>Powerful and Rich Graphics displays.</p> </li>
                            <li><span><i class="fa fa-angle-double-right"></i></span> <p>Resistive or Capacitive Touch in many instances.</p> </li>
                            <li><span><i class="fa fa-angle-double-right"></i></span> <p>Comprehensive User Interface solution.</p> </li>
                        </ul>
                    </article>
                </section>
            </article>
            <!-- /Additional 1 -->


            <!-- Additional 2 -->
            <article class="about-content addtnl-about-content" id="addtnl-2">
                <section class="lab-container">
                    <article class="lab-row">
                        
                        <header>
                            <h1>We designs and manufactures custom embedded graphics controllers designed to interface with many popular OLED and LCD display panels</h1>
                        </header>
                        <p id="subtitle">While our heritage is in providing power for commercially-destined embedded systems, an area we remain committed to, the maker movement has also created new interest and requirements for rich displays. Our suite of Arduino and Raspberry Pi compatible display hardware provides market-leading capabilities, without prohibitive cost or development challenges even for novice users. Native display capabilities for Arduino compatible hardware in particular are quite limited. Our integrated solutions take care of the processing, so a rich user experience is possible with standard Arduino hardware. </p>

                        <ul class="last-list">
                            <li>
                                
                                <p>We’re constantly improving and adapting to the needs of our customers, to rapidly improve and forge new technologies.</p>
                                <figure class="about-icon-wrapper">
                                    <img src="img/about-icons/ico-investment.png" alt="">
                                </figure>
                            </li>

                            <li>
                                
                                <p>It goes without saying that quality matters every step of the way. Our hardware and software engineering teams are well seasoned, and work with ISO9001 certified production factories using our own quality assurance procedures for impeccable outcomes. Hardware is available directly or via one of many distribution partners across the globe. Our hardware is directly supported by our engineering team for impeccable problem solving, so you’re not alone. </p>
                                <figure class="about-icon-wrapper">
                                    <img src="img/about-icons/ico-portfolio.png" alt="">
                                </figure>
                            </li>
                        </ul>
                    </article>
                </section-lab-container>
            </article>
            <!-- /Additional 2 -->
            

            <!-- Our Team -->
            <section class="about-content team" id="team">
                <article class="lab-container">
                    <section class="lab-row">

                        <h3>Our Team</h3>
                        <ul class="team-list">

                            <?php
                                foreach ($team as $name => $val) {
                            ?>
                            
                                <li class="team team-member">
                                    <a href="" id="<?php echo $name ?>">
                                        <figure>
                                            <img src="img/<?php echo $val['dp'] ?>.jpg" alt="">
                                            <figcaption>
                                                <h3><?php echo $val['name'] ?></h3>
                                                <h5><?php echo $val['position'] ?></h4>
                                                <label for=""><?php echo $val['about-staff-summ'] ?></label>
                                            </figcaption>
                                        </figure>
                                    </a>
                                </li>
                            <?php } ?>

                        </ul>
                    </section>
                </article>
            </section>
            <!-- /Our Team -->

            
            <!-- Learn About Us -->
            <section class="learn-nav" id="learn">
                <article class="lab-container">
                    <section class="lab-row">
                        <ul class="learn-list">
                            <li class="learn learn-product">
                                <a href="products">
                                    <header>
                                        <label for="">Learn about our</label>
                                        <h1>Products</h1>
                                        <span class="arrow arrow-left"></span>
                                    </header>
                                    
                                </a>
                            </li>
                            
                            <li class="learn learn-software">
                                <a href="workshop4">
                                    <header>
                                        <label for="">Learn about our</label>
                                        <h1>Software</h1>
                                        <span class="arrow arrow-right"></span>
                                    </header>

                                    
                                </a>
                            </li>
                        </ul>
                    </section>
                </article>
            </section>
            <!-- Learn About Us -->



        </section>
    </article>

    <div id="modal"></div>
    
</section>

<?php include('footer-3.php'); ?>