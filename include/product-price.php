<article class="price-container">

    <div class="price-quantity" id="price-wrapper">
        <label>Your Price:</label>
        <!-- <input type="text" value="21,543" disabled> -->
        <span id="price"><?php echo $product['product-price']['price']; ?></span>
        
        <span>USD</span>
    </div>

    <div class="price-quantity" id="stock-wrapper">
        
        <label>In Stock:</label>
        
        <input id="stock-val" type="text" value="<?php echo number_format($product['product-price']['in-stock']); ?>" disabled>
    </div>

    <div class="price-quantity" id="quantity-wrapper">
        <span id="stock-notif">Sorry, insuffecient stock.</span>
        <div class="quantity-title">
            <label>Quantity</label>
            <p>Min: <input type="text" id="min-quantity" value="<?php echo number_format($product['product-price']['min']); ?>" disabled>   Mult: <input type="text" id="mult-quantity" value="<?php echo number_format($product['product-price']['mult']); ?>" disabled></p>
        </div>

        <div class="quantity-input">
            
            <div class="quantity-field">
                <button id="q-minus">-</button>
                <button id="q-plus">+</button>
                <input id="quantity-input" type="text" min="<?php echo $product['product-price']['min']; ?>" value="<?php echo $product['product-price']['min']; ?>">
            </div>
            <ul class="price-quantity-list">
                <?php foreach ($product['product-price']['quantity'] as $key => $value) : ?>
                    <li id="<?php echo $key; ?>">
                        <p><label><?php echo number_format($key); ?></label>: <span>$ <strong id="u-price"><?php echo $value; ?></strong></span></p>
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
            <button id="add-cart"><i class="fa fa-plus"></i> Add to Cart</button>
            <a href="">Request a Quote</a>
        </div>
    </div>

</article>


