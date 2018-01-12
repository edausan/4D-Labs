<?php 
    define('TITLE', 'Shopping Cart');
    include('header-2.php');
    
?>


<section class="lab-container">
    <article class="lab-row">
        
        <section class="shopping-cart-wrapper">

            <?php 
                $active =   array('active-cart-bread', ' ', ' ');
                include('include/cart-breadcrumbs.php'); 
            ?>

            <header class="title-wrapper">
                <h1>
                    <span><i class="fa fa-shopping-basket"></i></span> 
                    <span>Your Shopping Cart</span> 
                    <a href="products.php" class="continue-shop">Continue Shopping <i class="fa fa-chevron-right"></i></a>
                </h1>
            </header>


            <section class="cart-wrapper">
                <article class="cart-orders">

                    <form action="" class="cart-form">
                        <table class="shopping-cart-table">

                            <thead>
                                <tr>
                                    <th class="shopcart-header" id="items">Item(s)</th>
                                    <th class="shopcart-header">Unit Price (USD)</th>
                                    <th class="shopcart-header">Quantity</th>
                                    <th class="shopcart-header" id="subtotal-head">Subtotal</th>
                                    <th class="shopcart-header" id="action"></th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                    foreach ($shopSample as $prod => $details) {
                                ?>
                                
                                <tr>
                                    <td>
                                        <figure class="prod-img-container">
                                            <a href="<?php echo $prod; ?>.php" title="<?php echo $details[0]; ?>">
                                                <img src="img/<?php echo $prod; ?>.png" alt="<?php echo $prod; ?>">
                                            </a>
                                        </figure>

                                        <header class="prod-name">
                                            <div class="prod-name-content">
                                                <a href="<?php echo $prod; ?>.php" title="<?php echo $details[0]; ?>">
                                                    <p><?php echo $details[0]; ?></p>
                                                </a>
                                                <details>
                                                    <summary>View Description</summary>
                                                    <p><?php echo $details[3]; ?></p>
                                                </details>

                                            </div>
                                            
                                        </header>
                                    </td>

                                    <td id="price"><input type="text" value="$<?php echo $details[1]; ?>" readonly="true"></td>
                                    <td id="quantity"><input type="number" min="1" value="<?php echo $details[2]; ?>"></td>
                                    <td id="subtotal"><p></p></td>
                                    <td id="remove"><a href=""><span><i class="fa fa-times"></i></span></a></td>

                                </tr>

                                <?php } ?>
                            </tbody>

                        </table>

                        
                        
                        

                    </form>

                </article>
                
                <article class="cart-summary">
                    <header class="cart-summary-header">
                        <h5>Total</h5>
                    </header>

                    <ul class="totals subtotal-wrapper">
                        <li>
                            <p>(3) Items Subtotal (USD)</p>
                            <input type="text" value="$443.50">
                        </li>
                    </ul>

                    <hr>

                    <div class="totals total-wrapper">
                        <p>Order Total (USD)</p>
                        <input type="text" value="$443.50">
                    </div>

                    <hr>

                    <div class="totals final-total">
                        <p>USD</p>
                        <input type="text" value="443.50">
                    </div>

                    <p id="vat">VAT and Shipping will be calculated later.</p>


                    <div class="coupon-wrapper">
                        <h5>Promo Code</h5>
                        <p>If you have a coupon, enter it here. Your order will be updated to reflect the promo.</p>

                        <div class="input-group coupon-input">
                            <input type="text" class="form-control" placeholder="Enter promo code here">
                            <button class="btn btn-default input-group-addon">Apply</button>
                        </div>
                    </div>

                    <div class="checkout-wrapper">
                        <a id="proceed-checkout" href="checkout.php">Proceed to Checkout</a>
                        <a href="">Ship to multiple address</a>
                    </div>

                </article>
            </section>


            <article class="frequent-products">
            <hr>
                <header class="also-viewed">
                    <h6>other customers also viewed:</h6>
                </header>
                <?php
                    foreach ($shopSample as $prod => $details) {
                ?>
                    <section class="freq-product">
                        <a href="<?php echo $prod; ?>.php">
                            <figure><img src="img/<?php echo $prod; ?>.png" alt=""></figure>
                        
                        
                            <header>
                                <h5><?php echo $details[0]; ?></h5>
                                <p></p>
                            </header>
                        </a>
                    </section>
                <?php } ?>
            </article>
            
        </section>
    
    </article>
</section>


<?php include('footer-3.php'); ?>