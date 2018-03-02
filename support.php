<?php 
    define('TITLE', 'Support');
    include('header-2.php');
?> 

<section class="lab-container-fluid">

    <article class="lab-row">

        <div class="support-banner-wrapper">
            <figure class="support-banner">
                <section class="lab-container">
                    <article class="lab-row">
                        <figcaption>
                            <h1>We're here to help.</h1>
                            <p>Here at 4D Labs, we're committed to your success. </p>
                        </figcaption>
                    </article>
                </section>
                
            </figure>
        </div> 

        <section class="lab-container">

            <article class="lab-row">

                <section class="support-wrapper">

                    <!-- Support Boxes -->
                    <?php include('include/support-boxes.php'); ?>

                    <!-- Exisiting Ticket Search Bar -->
                    <?php include('include/support-existing-ticket.php'); ?>

                    <!-- Request New Ticket Form -->
                    <?php include('include/support-form.php'); ?>

                </section>

            </article>

        </section>
    
    </article>

</section>

<?php include('footer-3.php'); ?>