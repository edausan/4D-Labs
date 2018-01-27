<!-- Cart Summary -->
<article class="cart-summary">
    <section class="cart-sum-wrapper">
        <header class="cart-summary-header">
            <h5>Order Summary</h5>
        </header>


        <div class="total-container">
            <ul class="totals subtotal-wrapper">
                <li>
                    <p>3 Items Subtotal</p>
                    <input type="text" value="$443.50" disabled>
                </li>
            </ul>

            <hr>

            <div class="totals total-wrapper">
                <p>Order Total (US$)</p>
                <input type="text" value="$443.50" disabled>
            </div>

            <!-- <hr>

            <div class="totals final-total">
                <p>USD</p>
                <input type="text" value="443.50" disabled>
            </div> -->

        </div>

        <div class="terms-wrapper">
            <p for="">Incoterms: FCA (Duty. customs and GST collected at the time of delivery).</p>

            <label for="">International Postage Costs</label>
            <p>We post orders via UPS or FedEx to most locations worldwide at special low prices.</p>

            <label for="">No Handling Fees</label>
            <p>Orders shipped via UPS Worldwide Express Saver or FedEx International Priority will not incur any handling fees</p>

            <label for="">FedEx International Priority</label>
            <ul>
                <li>Delivery in 3 to 5 days UPS Worldwide Express Saver</li>
                <li>Delivery In 3 to 5 days</li>
            </ul>

            <!-- <label for="">USPS (United States Postal Service)</label>
            <p>Mouser offers various USPS shipping methods based on your location. Please be advised it can be difficult to track some USPS shipments and that estimated delivery times may be less accurate.</p>

            <p id="vat">VAT and Shipping will be calculated later.</p> -->
        </div>
        


        <!-- <div class="coupon-wrapper">
            <h5>Promo Code</h5>
            <p>If you have a coupon, enter it here. Your order will be updated to reflect the promo.</p>

            <div class="input-group coupon-input">
                <input type="text" class="form-control" placeholder="Enter promo code here">
                <button class="btn btn-default input-group-addon">Apply</button>
            </div>
        </div> -->

        <div class="checkout-wrapper">
            <button id="proceed-checkout" type="submit"><?php echo $proceed; ?></button>
        </div>
    </section>
</article>
<!-- /Cart Summary -->