<?php 
    define('TITLE', 'Support');
    include('header-2.php');
?> 

<section class="lab-container">

    <article class="lab-row">

        <section class="support-wrapper">

            <section class="support-boxes">
                <ul class="support-list">
                    <li class="support-item" id="submit-ticket-wrapper">
                        <a href="http://">
                            <article class="support-box" >
                                <figure class="support-icon-wrapper">
                                    <img src="" alt="">
                                </figure>

                                <label for="">Submit a Ticket</label>

                                <a href="http://">Get support</a>
                            </article>
                        </a>
                    </li>

                    <li class="support-item" id="documentation-wrapper">
                        <a href="http://">
                            <article class="support-box" >
                                <figure class="support-icon-wrapper">
                                    <img src="" alt="">
                                </figure>

                                <label for="">Documentation</label>

                                <a href="http://">Get support</a>
                            </article>
                        </a>
                    </li>

                    

                    <li class="support-item" id="forum-wrapper">
                        <a href="http://">
                            <article class="support-box">
                                <figure class="support-icon-wrapper">
                                    <img src="" alt="">
                                </figure>

                                <label for="">Forum</label>

                                <a href="http://">Get support</a>
                            </article>
                        </a>
                    </li>

                    <li class="support-item" id="firmware-wrapper">
                        <a href="http://">
                            <article class="support-box">
                                <figure class="support-icon-wrapper">
                                    <img src="" alt="">
                                </figure>

                                <label for="">Firmware</label>

                                <a href="http://">Get support</a>
                            </article>
                        </a>
                    </li>

                </ul>

            </section>

            <div class="existing-ticket-wrapper">
                <h4>Do you have an existing support request that you want to view? </h4>
                
                <div class="ticket-input-wrapper">
                    <span><i class="fa fa-ticket"></i></span>
                    <input type="text" class="ticket-input" name="ticket-input" id="ticket-input" placeholder="Search existing support request"> 
                </div>

                <button class="ticket-input" id="search-ticket-btn"><i class="fa fa-search"></i> Search</button>
            </div>

            <div class="new-ticket-wrapper">
                <div class="ticket-details">
                    <label for=""><i class="fa fa-user"></i> First Name <span>*</span></label>
                    <input type="text" class="ticket-input" name="ticket-fname" id="ticket-fname" placeholder="First Name">
                </div>

                <div class="ticket-details f-right">
                    <label for=""><i class="fa fa-user-o"></i> Last Name <span>*</span></label>
                    <input type="text" class="ticket-input" name="ticket-lname" id="ticket-lname" placeholder="Last Name">
                </div>

                <div class="ticket-details">
                    <label for=""><i class="fa fa-envelope"></i> Email <span>*</span></label>
                    <input type="text" class="ticket-input" name="ticket-email" id="ticket-email" placeholder="Email Address">
                </div>

                <div class="ticket-details f-right">
                    <label for=""><i class="fa fa-envelope"></i> Confirm Email <span>*</span></label>
                    <input type="text" class="ticket-input" name="ticket-email" id="ticket-email" placeholder="Confirm Email Address">
                </div>

                <div class="ticket-details">
                    <label for=""><i class="fa fa-building"></i> Company <span>*</span></label>
                    <input type="text" class="ticket-input" name="ticket-company" id="ticket-company" placeholder="Company">
                </div>

                <div class="ticket-details f-right">
                    <label for=""><i class="fa fa-globe"></i> Country <span>*</span></label>
                    <?php include('include/country-2.php'); ?>
                </div>

                
            </div>

            <div class="inquiry-wrapper">
                
                <h4>Inquiry</h4>

                <div class="ticket-details">
                    <label for="">Request Subject <span>*</span></label>
                    <input type="text" class="ticket-input" name="ticket-subject" id="ticket-subject" placeholder="Request Subject">
                </div>

                <div class="ticket-details">
                    <label for="">Message <span>*</span></label>
                    <textarea class="ticket-input" name="" id="" cols="30" rows="10" placeholder="Enter you problem description or any comments"></textarea>
                </div>
                
            </div>

            <div class="attachment-wrapper">
                <h4>Attachments</h4>

                <div class="ticket-note-wrapper">
                    <label for="">Note:</label>
                    <p>For Hardware inquiries, please include the part names of all the items related to this inquiry. For any of the 4D Labs' Products, use 4d Labs' part names instead of Distributor's. For Software inquiries, please include the development Environment/Configuration related to this inquiry. You may wish to include the Software name this inquiry is about. You can attach files such as documents, screenshots, source codes, etc. to a support request. The size of each file must be <strong>less than or equal to 15MB.</strong></p>
                </div>
                
                <div class="upload-wrapper">
                    <input type="file" id="upload-file" hidden>
                    <button class="disabled" id="upload-btn" disabled>Upload</button>
                    <button class="" id="select-btn">Select Attachment</button>                    
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

        </section>
    
    </article>

</section>

<?php include('footer-3.php'); ?>