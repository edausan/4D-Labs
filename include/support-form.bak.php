<form action="" method="post" class="support-form">

    <div class="new-ticket-wrapper">
        <div class="ticket-details">
            <span for="" id="firstname"><i class="fa fa-user"></i></span>

            <div class="ticket-field-wrapper">
                <input type="text" class="ticket-input" name="ticket-fname" id="ticket-fname" placeholder="">
            </div>
            
        </div>

        <div class="ticket-details f-right">
            <label for="" id="lastname">lastname</label>
            <input type="text" class="ticket-input" name="ticket-lname" id="ticket-lname" placeholder="">
        </div>

        <div class="ticket-details">
            <label for="" id="email">email</label>
            <input type="email" class="ticket-input" name="ticket-email" id="ticket-email" placeholder="">
        </div>

        <div class="ticket-details f-right">
            <label for="" id="confirmemail">confirmemail</label>
            <input type="email" class="ticket-input" name="ticket-email" id="ticket-email" placeholder="">
        </div>

        <div class="ticket-details">
            <label for="" id="company">company</label>
            <input type="text" class="ticket-input" name="ticket-company" id="ticket-company" placeholder="">
        </div>

        <div class="ticket-details f-right">
            <label for="" id="country">country</label>
            <?php include('include/country-2.php'); ?>
        </div>

        
    </div>

    <div class="inquiry-wrapper">
        
        <h4>Inquiry</h4>

        <div class="ticket-details">
            <label for="" id="request">Request Subject</label>
            <input type="text" class="ticket-input" name="ticket-subject" id="ticket-subject" placeholder="">
        </div>

        <div class="ticket-details">
            <label for="" id="request-msg">Message <span>*</span></label>
            <textarea class="ticket-input" name="" id="" cols="30" rows="10" placeholder="Enter you problem description or any comments"></textarea>
        </div>
        
    </div>

    <div class="attachment-wrapper">
        <h4>Attachments</h4>

        <div class="ticket-note-wrapper">
            <label for="">Note:</label>
            <p>For Hardware inquiries, please include the part names of all the items related to this inquiry. For any of the 4D Labs' Products, use 4d Labs' part names instead of Distributor's. For Software inquiries, please include the development Environment/Configuration related to this inquiry. You may wish to include the Software name this inquiry is about. You can attach files such as documents, screenshots, source codes, etc. to a support request. </strong></p>
        </div>
        
        <div class="upload-wrapper">
            <input type="file" id="upload-file" accept="image/*,application/zip,application/x-zip,application/x-zip-compressed" hidden>
            <button class="disabled" id="upload-btn" type="button" disabled>Upload</button>
            <button class="" id="select-btn" type="button">Select Attachment</button>                    
            <label for="" id="file-name">Select file to upload.</label>
        </div>
        
        <label for="" id="warning-text">File must be less than 10MB. Allowed file types :jpg, gif, pdf, png, tif, zip</label>

        <div class="accept-wrapper">
            <div class="accept-item">
                <input type="checkbox" name="pp" id="pp" required>
                <label for="pp">I agree with the <a href="privacy-policy">Privacy Policy.</a></label>
            </div>
            <div class="accept-item">
                <input type="checkbox" name="" id="ns">
                <label for="ns">I wish to receive the latest news and offers from 4D Labs.</a></label>
            </div>
        </div>

        <button id="submit-btn">Submit Ticket</button>
    </div>

    <div class="addl-wrapper"></div>

</form>