<div class="purchase-order-wrapper">
    <header>
        <h3>Purchase Order Reference</h3>
    </header>
    <table class="purchase-order-table">
        <thead>
            
            <tr>
                <th>#</th>
                <th>Product(s)</th>
                <th>Unit Price (US$)</th>
                <th>Quantity</th>
                <th>Subtotal</th>
            </tr>
        </thead>

        <tbody>
            <?php
                $x = 1;
                foreach ($shopSample as $prod => $details) {
            ?>

            <tr>
                <td id="product-num">
                    <?php echo $x; ?>
                </td>
                <td id="product-details-wrapper">
                    <figure class="prod-img-container">
                        <a href="<?php echo $prod; ?>.php" title="<?php echo $details[0]; ?>">
                            <img src="img/<?php echo $prod; ?>.png" alt="<?php echo $prod; ?>">
                        </a>
                    </figure>

                    <header class="prod-name">
                        <div class="prod-name-content">
                            <a href="<?php echo $prod; ?>.php" title="<?php echo $details[0]; ?>">
                                <p>
                                    <?php echo $details[0]; ?>
                                </p>
                            </a>
                        </div>

                    </header>
                </td>
                <td id="price">
                    <input type="text" name="price" id="price-input" value="$<?php echo $details[1]; ?>"
                        readonly="true" disabled>
                </td>
                <td id="quantity">
                    <input type="text" min="1" name="quantity" id="quantity-input" value="<?php echo $details[2]; ?>" readonly="true" disabled>
                </td>
                <td id="subtotal">
                    <input type="text" name="subtotal" id="subtotal-input" readonly="true" disabled>
                </td>

            </tr>

            <?php $x++; } ?>
        </tbody>
    </table>
</div>