<form action="" method="post" class="ticket-form">
    
    <fieldset class="ticket-fieldset">

        <h4>Request New Support Ticket</h4>


        <div class="field-wrapper fleft"> <!-- Firstname -->
            <span><i class="fa fa-user-circle-o"></i></span>

            <div class="field-container" id="firstname">
                <input name="ticket-fname" class="ticket-input" type="text" placeholder="">
            </div>
        </div> <!-- /Firstname -->

        
        <div class="field-wrapper fright"> <!-- Company -->
            <span><i class="fa fa-building"></i></span>

            <div class="field-container" id="company">
                <input name="ticket-company" class="ticket-input" type="text" placeholder="">
            </div>
        </div> <!-- Company -->

            
        <div class="field-wrapper fleft"> <!-- Lastname -->
            <span><i class="fa fa-user-circle"></i></span>

            <div class="field-container" id="lastname">
                <input name="ticket-lname" class="ticket-input" type="text" placeholder="">
            </div> 
        </div> <!-- /Lastname -->


        <div class="field-wrapper fright"> <!-- Country -->
            <span><i class="fa fa-globe"></i></span>

            <div class="field-container" id="country">
                <?php $selName = 'ticket-country'; include('include/country-2.php'); ?>
            </div> 
        </div> <!-- /Country -->


        <div class="field-wrapper fleft"> <!-- Email -->
            <span><i class="fa fa-envelope"></i></span>

            <div class="field-container" id="email">
                <input name="ticket-email" class="ticket-input" type="email" placeholder="">
            </div> 
        </div> <!-- /Email -->


        <div class="field-wrapper fright"> <!-- Subject -->
            <span><i class="fa fa-edit"></i></span>

            <div class="field-container" id="subject">
                <input name="ticket-subject" class="ticket-input" type="text" placeholder="">
            </div> 
        </div> <!-- /Subject -->


    </fieldset>

    <fieldset class="ticket-fieldset">
        
        <h4>Inquiry</h4>

        <textarea name="" id="request-ticket" cols="30" rows="5"></textarea>

    </fieldset>

    <?php include('include/support-attachment.php'); ?>

</form>