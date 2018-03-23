<section class="product-filters-wrapper">

    <form action="products" method="post">
        <article class="product-filter">
            
                <h6>Price Range</h6>

                <div class="price-range_input-wrapper">
                    <div class="range-input">
                        <label for="">$</label>
                        <input type="number" name="price-min" id="price-min" class="price-range-input" value="<?php echo $minPriceVal ;?>" min="0" max="1000">
                    </div>
                    <p for="">-</p>
                    <div class="range-input">
                        <label for="">$</label>
                        <input type="number" name="price-max" id="price-max" class="price-range-input" value="<?php echo $maxPriceVal ;?>" min="0" max="1000">
                    </div>
                </div>
                
        </article>

        <div id="slider-range"></div>
        <button type="submit" name="price-range_reset" class="price-range_btn" id="price-range_reset">Reset</button>
        <button type="submit" name="price-range_submit" class="price-range_btn" id="price-range_submit">Submit</button>
    </form>

</section>