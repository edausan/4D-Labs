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
        <!-- Credit Card Type -->
        <select name="cc-type" id="cc-type" class="" required>
            <option value="" disabled selected>Credit Card Type</option>
            <option value="mastercard">MasterCard</option>
            <option value="visa">Visa</option>
        </select> 

        <!-- Credit Card Number -->
        <input type="text" name="cc-num" id="cc-num" placeholder="Credit Card Number" required>

        <!-- First Name -->
        <input type="text" name="cc-fname" id="cc-fname" placeholder="First Name" required>

        <!-- Last Name -->
        <input type="text" name="cc-lname" id="cc-lname" placeholder="Last Name" required>

    </div>
    

    <div class="cc-input-wrapper cc-sec">
        <!-- CVV Code -->
        <input type="text" name="cvv-code" id="cvv-code" placeholder="CVV Code" required>

        <!-- Month -->
        <select name="month" id="month" required>
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
        </select>

        <!-- Year -->
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
    </div>

    <div class="cc-geotrust-wrapper">
        <a href="https://sealsplash.geotrust.com/splash?&dn=www.4dsystems.com.au" target="GEOTRUST_SSL_Splash">
            <img src="img/geotrust.png" alt="">
        </a>
    </div>

</section>