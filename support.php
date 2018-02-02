<?php 
    define('TITLE', 'Support');
    include('header-2.php');
?> 

<section class="lab-container">

    <article class="lab-row">

        <section class="support-wrapper">

            <div class="support-header">
                <h1>We're here to help.</h1>
                <p>Here at 4D Labs, we're committed to your success. We encourage you to check out FAQs and video tutorials, and 4D Labs Forum for user discussions. However, if you get stucked and need technical support, please submit a support ticket, and we will get back to you as soon as possible.</p>
            </div>

            <?php include('include/support-boxes.php'); ?>

            <div class="existing-ticket-wrapper">
                <h4>Do you have an existing support request that you want to view? <span>* required fields</span></h4>
                
                <div class="ticket-details ticket-input-wrapper">
                    <label for="" id="search-ticket" disabled>Request Subject</label>
                    <input type="text" class="ticket-input" name="ticket-input" id="ticket-input" placeholder=""> 
                </div>

                <button class="ticket-input" id="search-ticket-btn"><i class="fa fa-search"></i> Search</button>
            </div>

            <h4>Request New Support Ticket</h4>

            <?php include('include/support-form.php'); ?>

        </section>
    
    </article>

</section>

<?php include('footer-3.php'); ?>