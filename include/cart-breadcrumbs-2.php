<article class="cart-breadcrumbs-new">
    <p class="mobile-cart-process-title"><?php echo $processTitle; ?></p>
    <ul class="cart-bread-list-new">
        <li class="cart-bread bread-arrow ">
            <section class="bread <?php echo $active[0] ?>">
                <p class="bread-title">Items in your Cart</p>
                <div class="bread-number-wrapper">
                    <a <?php echo $atvlink[0] ?>>
                        <p class="num-wrapper"><span>1</span></p>
                    </a>
                </div> 
            </section>
        </li>

        <li class="cart-bread bread-arrow ">
            <section class="bread <?php echo $active[1] ?> ">
                <p class="bread-title">Shipping & Billing Address</p>
                <div class="bread-number-wrapper">
                    <a <?php echo $atvlink[1] ?>>
                        <p class="num-wrapper"><span>2</span></p>
                    </a>
                </div> 
            </section>
        </li>

        <li class="cart-bread bread-arrow ">
            <section class="bread <?php echo $active[2] ?> ">
                <p class="bread-title">Shipping Method</p>
                <div class="bread-number-wrapper">
                    <a <?php echo $atvlink[2] ?>>
                        <p class="num-wrapper"><span>3</span></p>
                    </a>
                </div> 
            </section>
        </li>
        
        <li class="cart-bread bread-arrow ">
            <section class="bread <?php echo $active[3] ?>">
                <p class="bread-title">Payment</p>
                <div class="bread-number-wrapper">
                    <a <?php echo $atvlink[3] ?>>
                        <p class="num-wrapper"><span>4</span></p>
                    </a>
                </div> 
            </section>
        </li>

        <li class="cart-bread bread-arrow last-bread ">
            <section class="bread <?php echo $active[4] ?>">
                <p class="bread-title">Confirmation</p>
                <div class="bread-number-wrapper">
                    <a <?php echo $atvlink[4] ?>>
                        <p class="num-wrapper"><span>5</span></p>
                    </a>
                </div> 
            </section>
        </li>
    </ul>
</article>


<!-- active-cart-bread -->