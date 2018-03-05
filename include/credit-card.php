<section class="credit-card-payment-wrapper">
    <header class="credit-header">
        <h4>Pay via Credit Card</h4>

        <p>For your added security, we do not store any of your credit card information here in our website. </p>
    </header>

    <figure class="credit-card-logo-wrapper">
        <ul>
            <li>
                <img src="img/footer-icons/mastercard.png" id="cc-mastercard" alt="MasterCard">
            </li>

            <li>
                <img src="img/footer-icons/visa.png" id="cc-visa" alt="Visa">
            </li>
        </ul>
        
    </figure>


    <div class="cc-input-wrapper cc-first">
        

        <div class="cc-type-row">
            <!-- Credit Card Type -->
            <div>
                <label for="cc-type">Payment Method:</label>
                <select name="cc-type" id="cc-type" class="fleft" required>
                    <option value="" disabled selected>Choose your Payment Method</option>
                    <option value="mastercard">MasterCard</option>
                    <option value="visa">Visa</option>
                </select>
            </div>
             
            <!-- Credit Card Number -->
            <div>
                <label for="cc-num">Credit Card Number:</label>
                <input type="text" class="fright" name="cc-num" id="cc-num" placeholder="ex. 1234 5678 0000 1234" required>
            </div>
            
        </div>
        

        <div class="name-row">
            <!-- First Name -->
            <div>
                <label for="cc-fname">First Name:</label>
                <input type="text" class="fleft" name="cc-fname" id="cc-fname" placeholder="First Name" required>
            </div>            

            <!-- Last Name -->
            <div>
                <label for="cc-lname">Last Name:</label>
                <input type="text" class="fright" name="cc-lname" id="cc-lname" placeholder="Last Name" required>
            </div>
            
        </div>
        

    </div>
    

    <div class="cc-input-wrapper cc-sec">
        <label for="month">Expiry Date:</label>

        <!-- Year -->
        <div>
            <select name="Year" id="year" required>
                <option value="" disabled selected>YYYY</option>
                <option value="2018">2018</option>
                <option value="2019">2019</option>
                <option value="2020">2020</option>
                <option value="2021">2021</option>
                <option value="2022">2022</option>
                <option value="2023">2023</option>
                <option value="2024">2024</option>
                <option value="2025">2025</option>
                <option value="2026">2026</option>
                <option value="2027">2027</option>
                <option value="2028">2028</option>
                <option value="2029">2029</option>
                <option value="2030">2030</option>
                <option value="2031">2031</option>
                <option value="2032">2032</option>
            </select>
            
            <select name="month" id="month" required>
                <option value="" disabled selected>Month</option>
                <option value="01">January</option>
                <option value="02">February</option>
                <option value="03">March</option>
                <option value="04">April</option>
                <option value="05">May</option>
                <option value="06">June</option>
                <option value="07">July</option>
                <option value="08">August</option>
                <option value="09">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
            </select>
        
        </div>
        

        <!-- Month -->
        <!-- <select name="month" id="month" required>
            <option value="" disabled selected>MM</option>
            <option value="01">01</option>
            <option value="02">02</option>
            <option value="03">03</option>
            <option value="04">04</option>
            <option value="05">05</option>
            <option value="06">06</option>
            <option value="07">07</option>
            <option value="08">08</option>
            <option value="09">09</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
        </select> -->
        

        <!-- CVV Code -->
        <label for="cvv-code">CVV Code:</label>
        <input type="text" name="cvv-code" id="cvv-code" placeholder="ex. 234" required title="Enter the last 3 digits of your credit card number">
    </div>

    <div class="cc-geotrust-wrapper">
        <a href="https://sealsplash.geotrust.com/splash?&dn=www.4dsystems.com.au" target="GEOTRUST_SSL_Splash">
            <img src="img/geotrust.png" alt="">
        </a>
    </div>

</section>