<article class="price-container dark">
    <form action="" method="post">
        <div class="price-quantity" id="price-wrapper">
            <label>Unit Price:</label>
            <span><input id="price" type="text" name="unit-price" value="<?php echo $product['product-price']['price']; ?>" disabled></span>
            
            <!-- <span>USD</span> -->
        </div>

        <div class="price-quantity" id="stock-wrapper">
            
            <label>In Stock:</label>
            
            <input id="stock-val" type="text" value="<?php echo number_format($product['product-price']['in-stock']); ?>" disabled>
        </div>

        <div class="price-quantity" id="quantity-wrapper">
            <span id="stock-notif">Sorry, insuffecient stock.</span>
            <div class="quantity-title">
                <label>Quantity</label>
                <p><span>Min:</span> <input type="text" id="min-quantity" value="<?php echo number_format($product['product-price']['min']); ?>" disabled></p>  
                <p><span>Reel Qty:</span> <input type="text" id="mult-quantity" value="<?php echo number_format($product['product-price']['reel-qty']); ?>" disabled></p>
                <p id="lead-time"><strong>Manufacturer Lead Time:</strong> <br /> <span>12 weeks</span></p>
            </div>

            <div class="quantity-input">
                
                <div class="quantity-field">
                    <button id="q-minus" type="button">-</button>
                    <button id="q-plus" type="button">+</button>
                    <input id="quantity-input" name="order-quantity" placeholder="Quantity" type="text" value="<?php echo $product['product-price']['min']; ?>">
                </div>
                <ul class="price-quantity-list">
                    <?php foreach ($product['product-price']['quantity'] as $key => $value) : ?>
                        <li id="<?php echo $key; ?>" class="q-list">
                            <p><label><?php echo number_format($key); ?></label>+ <span>$ <strong id="u-price"><?php echo $value; ?></strong></span></p>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>

        <div class="price-quantity" id="subtotal-wrapper">
            <div class="subtotal">
                <label>Subtotal</label>
                <input id="price-subtotal" type="text" value="$223,000" disabled>
            </div>

            <div class="quote-wrapper">
                <button id="add-cart" name="order-submit" type="submit"><i class="fa fa-plus"></i> Add to Cart</button>
                <a href="">Request a Quote</a>
            </div>

        </div>
    </form>
</article>


