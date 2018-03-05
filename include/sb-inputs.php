<div class="sb-input-wrapper billing-details-input-wrapper billing-details-wrapper translate-to-right" id="billing-details-wrapper">
    <header>
        <h3>Billing Details</h3>
    </header>

    <?php $proceed = 'Proceed to Shipping Method'; ?>

    <div class="sb-input-container half-wrapper" id="fname-wrapper">
        <label for="billing-firstname">First Name<span>*</span></label>
        <input class="sb-input" type="text" name="billing-firstname" id="billing-firstname" placeholder="Firstname" value="<?php echo $fname; ?>" required>
    </div>

    <div class="sb-input-container half-wrapper" id="lname-wrapper">
        <label for="billing-lastname">Last Name<span>*</span></label>
        <input class="sb-input" type="text" name="billing-lastname" id="billing-lastname" placeholder="Lastname" value="<?php echo $lname; ?>" required>
    </div>

    <div class="sb-input-container" id="company-wrapper">
        <label for="billing-company">Company Name<span>*</span></label>
        <input class="sb-input" type="text" name="billing-company" id="billing-company" placeholder="Company Name" value="<?php echo $company; ?>" required>
    </div>

    <div class="sb-input-container half-wrapper" id="phone-wrapper">
        <label for="billing-phone">Phone Number<span>*</span></label>
        <input class="sb-input" type="text" name="billing-phone" id="billing-phone" placeholder="Phone Number" value="<?php echo $phone; ?>" required>
    </div>

    <div class="sb-input-container half-wrapper" id="email-wrapper">
        <label for="billing-email">Email Address<span>*</span></label>
        <input class="sb-input" type="email" name="billing-email" id="billing-email" placeholder="Email Address" value="<?php echo $email; ?>" required>
    </div>

    <div class="sb-input-container" id="address1-wrapper">
        <label for="billing-address1">Street Address 1<span>*</span></label>
        <input class="sb-input" type="text" name="billing-address1" id="billing-address1" placeholder="Street Address 1" value="<?php echo $add1; ?>" required>
    </div>

    <div class="sb-input-container" id="address2-wrapper">
        <label for="billing-address2">Street Address 2<span>*</span></label>
        <input class="sb-input" type="text" name="billing-address2" id="billing-address2" placeholder="Street Address 2" value="<?php echo $add2; ?>" required>
    </div>

    <div class="sb-input-container half-wrapper" id="city-wrapper">
        <label for="billing-city">City <span>*</span></label>
        <input class="sb-input" type="text" name="billing-city" id="billing-city" placeholder="City" value="<?php echo $city; ?>" required>
    </div>

    <div class="sb-input-container half-wrapper" id="state-wrapper">
        <label for="billing-state">State / Province <span>*</span></label>
        <input class="sb-input" type="text" name="billing-state" id="billing-state" placeholder="State/Province" value="<?php echo $state; ?>" required>
    </div> 

    <div class="sb-input-container" id="postal-wrapper">
        <label for="billing-postal">Postal Code <span>*</span></label>
        <input class="sb-input" type="text" name="billing-postal" id="billing-postal" placeholder="Postal Code" value="<?php echo $postal; ?>" required>
    </div>

    <input class="sb-input" type="text" name="" id="selected-country" value="<?php echo $country; ?>" hidden>

    <div class="sb-input-container" id="country-wrapper">
        <label for="billing-country">Country <span>*</span></label>
        <?php 
            $disabled = ' '; 
            $billShip = 'billing';
            $required = 'required';
            include('include/country.php'); 
        ?>  
    </div>

    <textarea name="notes" id="notes" cols="30" rows="5" placeholder="Notes (Optional)"><?php echo $notes; ?></textarea>

    

    <div class="shipping-details-cbox">

        <div class="cbox" id="open-other-details">
            <input type="checkbox" name="same-with-billing" id="same-with-billing" class="" checked="true">
            <label for="same-with-billing">My Shipping details are the same as my Billing details.</label>
            <i class="fa fa-check"></i>
        </div>

        <div class="cbox">
            <input type="checkbox" name="save-details" id="save-details" class="">
            <label for="save-details">Save these details to my account (current details in your account will be overwritten).</label>
            <i class="fa fa-check"></i>
        </div>

        <button id="save-details-btn" type="submit">Proceed to Shipping Method <i class="fa fa-chevron-right"></i></button>
    </div>

</div>


<div class="sb-input-wrapper shipping-details-input-wrapper shipping-details-wrapper translate-to-right" id="shipping-details-wrapper">
        
    <div class="shipping-details-container">
        <header>
            <h3>Shipping Details</h3>
        </header>
        
        <div class="sb-input-container half-wrapper" id="fname-wrapper">
            <label for="shipping-firstname">First Name<span>*</span></label>
            <input class="sb-input" type="text" name="shipping-firstname" id="shipping-firstname" placeholder="Firstname" value="<?php echo $fname; ?>" required>
        </div>

        <div class="sb-input-container half-wrapper" id="lname-wrapper">
            <label for="shipping-lastname">Last Name<span>*</span></label>
            <input class="sb-input" type="text" name="shipping-lastname" id="shipping-lastname" placeholder="Lastname" value="<?php echo $lname; ?>" required>
        </div>

        <div class="sb-input-container" id="company-wrapper">
            <label for="shipping-company">Company Name<span>*</span></label>
            <input class="sb-input" type="text" name="shipping-company" id="shipping-company" placeholder="Company Name" value="<?php echo $company; ?>" required>
        </div>

        <div class="sb-input-container half-wrapper" id="phone-wrapper">
            <label for="shipping-phone">Phone Number<span>*</span></label>
            <input class="sb-input" type="text" name="shipping-phone" id="shipping-phone" placeholder="Phone Number" value="<?php echo $phone; ?>" required>
        </div>

        <div class="sb-input-container half-wrapper" id="email-wrapper">
            <label for="shipping-email">Email Address<span>*</span></label>
            <input class="sb-input" type="email" name="shipping-email" id="shipping-email" placeholder="Email Address" value="<?php echo $email; ?>" required>
        </div>

        <div class="sb-input-container" id="address1-wrapper">
            <label for="shipping-address1">Street Address 1<span>*</span></label>
            <input class="sb-input" type="text" name="shipping-address1" id="shipping-address1" placeholder="Street Address 1" value="<?php echo $add1; ?>" required>
        </div>

        <div class="sb-input-container" id="address2-wrapper">
            <label for="shipping-address2">Street Address 2<span>*</span></label>
            <input class="sb-input" type="text" name="shipping-address2" id="shipping-address2" placeholder="Street Address 2" value="<?php echo $add2; ?>" required>
        </div>

        <div class="sb-input-container half-wrapper" id="city-wrapper">
            <label for="shipping-city">City <span>*</span></label>
            <input class="sb-input" type="text" name="shipping-city" id="shipping-city" placeholder="City" value="<?php echo $city; ?>" required>
        </div>

        <div class="sb-input-container half-wrapper" id="state-wrapper">
            <label for="shipping-state">State / Province <span>*</span></label>
            <input class="sb-input" type="text" name="shipping-state" id="shipping-state" placeholder="State/Province" value="<?php echo $state; ?>" required>
        </div> 

        <div class="sb-input-container" id="postal-wrapper">
            <label for="shipping-postal">Postal Code <span>*</span></label>
            <input class="sb-input" type="text" name="shipping-postal" id="shipping-postal" placeholder="Postal Code" value="<?php echo $postal; ?>" required>
        </div>

        <input class="sb-input" type="text" name="" id="selected-country" value="<?php echo $country; ?>" hidden>

        <div class="sb-input-container" id="country-wrapper">
            <label for="shipping-country">Country <span>*</span></label>
            <?php 
                $disabled = ' '; 
                $billShip =  'shipping';
                $required = 'required';
                include('include/country.php'); 
            ?>  
        </div>
    </div>

 

</div>

