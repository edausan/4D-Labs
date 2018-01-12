<article class="cart-breadcrumbs">
    <ul class="cart-bread-list">
        <li class="cart-bread">
            <a href="shopping-cart.php" class="cart-bread-link">
                <section class="bread bread-arrow <?php echo $active[0] ?>">
                    <span id="bread-icon">
                        <i class="b-icon">1</i>
                    </span>
                    <span>Items in you Cart</span>
                </section>
            </a>
        </li>

        <li class="cart-bread">
            <a href="checkout.php" class="cart-bread-link">
                <section class="bread bread-arrow <?php echo $active[1] ?>">
                    <span id="bread-icon">
                        <i class="b-icon">2</i>
                    </span>
                    <span>Shipping and Billing</span>
                </section>
            </a>
        </li>
        
        <li class="cart-bread">
            <a href="payment.php" class="cart-bread-link">
                <section class="bread <?php echo $active[2] ?>">
                    <span id="bread-icon">
                        <i class="b-icon">3</i>
                    </span>
                    <span>Payment</span>
                </section>
            </a>
        </li>
    </ul>
</article>


<!-- active-cart-bread -->