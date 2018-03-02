<?php 
    define('TITLE', 'Shopping Cart');
    include('header-2.php');
    
?>


<section class="lab-container">
    <article class="lab-row">

        <section class="shopping-cart-wrapper">

            <?php 
                $active =   array('active-cart-bread', ' ', ' ', ' ', ' ');
                $atvlink =   array(' ', ' ', ' ', ' ', ' ');
                include('include/cart-breadcrumbs-2.php'); 
            ?>

            <!-- Cart Header -->
            <header class="title-wrapper">
                <h1>
                    <span>Your Shopping Cart</span>
                </h1>
            </header>
            <!-- /Cart Header -->


            <?php 
                if (!empty($shopSample)) { 
            ?>

            <!-- Cart Section -->
            <section class="cart-wrapper">

                <!-- Cart Orders -->
                <article class="cart cart-orders">

                    <form action="" method="" class="cart-form">
                        <table class="cart-table shopping-cart-table">
                            <!--class = shopping-cart-table -->

                            <thead>
                                <tr>
                                    <th class="shopcart-header" id=""><span>#</span></th>
                                    <th class="shopcart-header" id="image"><span>Image</span></th>
                                    <th class="shopcart-header" id="items"><span>Item(s)</span></th>
                                    <!-- <th class="shopcart-header" id="">Description</th> -->
                                    <th class="shopcart-header"><span>Unit Price (US$)</span></th>
                                    <th class="shopcart-header"><span>Quantity</span></th>
                                    <th class="shopcart-header" id="subtotal-head"><span>Subtotal</span></th>
                                    <th class="shopcart-header" id="action"></th>
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
                                        
                                        <td id="image">
                                            <figure class="prod-img-container">
                                                <a href="<?php echo $prod; ?>" title="<?php echo $details[0]; ?>">
                                                    <img src="img/<?php echo $prod; ?>.png" alt="<?php echo $prod; ?>">
                                                </a>
                                            </figure>
                                        </td>

                                        <td id="product-details-wrapper">
                                            

                                            <header class="prod-name">
                                                <div class="prod-name-content">
                                                    <a href="<?php echo $prod; ?>" title="<?php echo $details[0]; ?>">
                                                        <p>
                                                            <?php echo $details[0]; ?>
                                                        </p>
                                                    </a>

                                                    <label for="">P/N: <?php echo $details[5]; ?></label>

                                                    <details>
                                                        <summary>View Description</summary>
                                                        <p>
                                                        <?php echo $details[3]; ?>
                                                        </p>
                                                    </details>
                                                </div>
                                            </header>
                                        </td>

                                        <!-- <td id="description">
                                            <p><?php echo $details[3]; ?></p>
                                        </td> -->
                                        
                                        <td id="price">
                                            <input type="text" name="price" id="price-input" value="<?php echo $details[1]; ?>"
                                                readonly="true" disabled>
                                        </td>

                                        <td id="quantity">
                                            <button id="minus" type="button"></button>
                                            <input type="text" min="1" name="quantity" id="quantity-input" value="50000">
                                            <button id="plus" type="button"></button>
                                        </td>

                                        <td id="subtotal">
                                            <input type="text" name="subtotal" id="subtotal-input" readonly="true" disabled title="">
                                        </td>

                                        <td id="remove">
                                            <a href="">
                                                <span>
                                                    <i class="fa fa-times"></i>
                                                </span>
                                            </a>
                                        </td>

                                    </tr>

                                    <?php $x++; } ?>
                            </tbody>

                        </table>





                    </form>

                </article>
                <!-- /Cart Orders -->


                <article class="total-wrapper">
                    <label for="">Total</label>
                    <input id="total-input" type="text" value="$443,350" disabled>
                </article>

                <!-- Total -->
                <article class="voucher-total-wrapper">

                    <section class="voucher-total voucher-container">
                        <!-- <label for="voucher-input">Voucher</label> -->

                        <div class="voucher-input">
                            <input id="voucher-input" type="text" placeholder="Voucher">
                            <button id="voucher-btn">Ok</button>
                        </div>
                    </section>

                    <section class="voucher-total proceed">
                        <a id="proceed-btn" href="products"><i class="fa fa-chevron-left" id="shopping"></i> Continue Shopping</a>
                        <a id="proceed-btn" href="shippingandbilling">Proceed to Checkout <i class="fa fa-chevron-right" id="checkout"></i></a>
                    </section>

                    
                </article>
                <!-- /Total -->

                <!-- Cart Summary -->
                <!-- <article class="cart-summary">
                    <section class="cart-sum-wrapper">
                        <header class="cart-summary-header">
                            <h5>Total</h5>
                        </header>

                        <ul class="totals subtotal-wrapper">
                            <li>
                                <p>(3) Items Subtotal (US$)</p>
                                <input type="text" value="$443.50">
                            </li>
                        </ul>

                        <hr>

                        <div class="totals total-wrapper">
                            <p>Order Total (US$)</p>
                            <input type="text" value="$443.50">
                        </div>

                        <hr>
                        

                        <p id="vat">Shipping will be calculated at Checkout.</p>


                        <div class="coupon-wrapper">
                            <h5>Promo Code</h5>
                            <p>If you have a coupon, enter it here. Your order will be updated to reflect the promo.</p>

                            <div class="input-group coupon-input">
                                <input type="text" class="form-control" placeholder="Enter promo code here">
                                <button class="btn btn-default input-group-addon">Apply</button>
                            </div>
                        </div>

                        <div class="checkout-wrapper">
                            <a id="proceed-checkout" href="shippingandbilling.php">Proceed to Checkout</a>
                            <a href="">Ship to multiple address</a>
                        </div>

                    </section>

                    <section class="continue-shop-wrapper">
                        <a href="products.php">
                            <i class="fa fa-shopping-basket"></i> Continue Shopping</a>
                    </section>

                </article> -->
                <!-- /Cart Summary -->

            </section>
            <!-- /Cart Section -->


            <?php   } else { ?>

            <h3>No Item in your Shopping Cart.
                <a href="products">Shop Now!</a>
            </h3>

            <?php } ?>

            <!-- Order Services -->
            <div class="order-services">

                <div class="services dispatch">
                    <div class="service">

                        <div class="service-content">
                            <h3>Next Business Day Dispatch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <img src="img/order-icons/dispatch.png" alt="">
                    </div>
                </div>

                <div class="services delivery">
                    <div class="service">

                        <div class="service-content">
                            <h3>Express Worldwide Delivery</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <img src="img/order-icons/delivery.png" alt="">
                    </div>
                </div>

                <div class="services dispatch ">
                    <div class="service last-service">

                        <div class="service-content">
                            <h3>Next Business Day Dispatch</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <img src="img/order-icons/dispatch.png" alt="">
                    </div>
                </div>

                <div class="services delivery ">
                    <div class="service last-service">

                        <div class="service-content">
                            <h3>Express Worldwide Delivery</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div>

                        <img src="img/order-icons/delivery.png" alt="">
                    </div>
                </div>

            </div>
            <!-- /Order Services -->

            <hr>

            <!-- Related Products -->
            <section class="related-products-wrapper">
                <header>
                    <h3>Related Products</h3>
                </header>

                <form action="" method="post" class="related-products-form">
                    <ul class="related-products-list">
                        <?php 
                            $x = 1;
                            foreach ($relatedProducts as $product => $details) {
                        ?>
                            <li class="related-product">
                                <a href="<?php echo $product; ?>">
                                    <figure><img src="img/<?php echo $product; ?>.png" alt=""></figure>
                                    <div class="related-product-details">
                                        <span><input type="text" name="related-product-name" id="related-product-name" value="<?php echo $details[0]; ?>" readonly="true"></span>
                                    </div>
                                </a>
                                <div class="related-product-details">
                                    <span id="related-price-<?php echo $x; ?>"><input type="text" name="related-product-price" id="related-product-price-<?php echo $x; ?>" value="<?php echo $details[2]; ?>" readonly="true" disabled></span>
                                </div>
                                <button class="add-to-cart" id="add-cart-btn-<?php echo $x; ?>"><i class="fa fa-shopping-cart"></i> Add to Cart</button>
                                
                            </li>
                        <?php $x++; } ?>
                    </ul>
                </form>
            </section>
            <!-- /Related Products -->

        </section>

    </article>
</section>


<?php include('footer-3.php'); ?>