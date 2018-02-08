<section class="parametric-wrapper">

    
    
    <section class="lab-container">
        <article class="lab-row">
            <div class="para-category-wrapper">

                <h1>Parametric Search</h1>

                <div class="para-description">
                    <div id="para-icon-wrapper"><span><i class="fa fa-exclamation"></i></span></div>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Temporibus nobis eius est minus vel sunt quibusdam, sit dicta molestias modi, provident distinctio ducimus magnam ex ut debitis ipsam reiciendis? Similique.</p>
                </div>

                <label for="para-category">Category</label>

                <select name="para-category" id="para-category">
                    <option value="Processors" selected>Processors</option>
                    <option value="SIM Modules">SIM Modules</option>
                    <option value="Chipsets">Chipsets</option>
                    <option value="Developments Tools">Developments Tools</option>
                </select>

                <h3 id="para-category-label">Processors</h3>
            </div>
        </article>
    </section>
    

    <div class="menu-bar">
        <button class="hide" id="filter-control"><i class="fa fa-filter"></i> <span id="filter-control-text">Hide </span>Filters</button>
        <button id="reset-filter">Reset Filters</button>

        <div class="page-size-wrapper">
            <button class="active-size" id="twenty">20</button>
            <button id="fifty">50</button>
            <button id="all">All</button>
            
        </div>
        <label for="">Results per page</label>
    </div>

    <div class="parametric-table-wrapper">

        <table class="parametric-table" id="para-tb-1">
            <thead>
                <tr>
                    <th class="" id="compare"><div class="th-wrapper"><button class="hideCompare" id="compare-btn" disabled>Compare</button></div></th>
                    <th class="" id="part-name"><div class="th-wrapper"><span>Part Name</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                </tr>

                <tr class="para-input-wrapper" id="para-input-wrapper">
                    <th class="" id="compare">
                        <div class="th-wrapper"></div>
                        <div class="filter-reset"><a href="" hidden>Reset</a></div>
                    </th>
                    <th class="" id="part-name">
                        <div class="th-wrapper"><input type="text" name="" id="" placeholder="Search part name"> <i class="fa fa-search"></i></div>
                        <div class="filter-reset"><a href="">Reset</a></div>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($partName as $key => $value) : ?>
                    <tr class="para-tbody-row" id="<?php echo $key; ?>">
                            <td id="para-prod-cbox"><div class="th-wrapper"><input type="checkbox" name="" id="" class="compare-cbox"></div></td>
                            <td id="para-prod-name"><div class="th-wrapper"><a href="<?php echo $key; ?>" class="para-prod-name-link"><?php echo $value; ?></a></div></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="para-tb-2-wrapper">
            <table class="parametric-table" id="para-tb-2">

                <thead>
                    <tr>
                        <th class="large " id="Quantity"><div class="th-wrapper changed"><span>Quantity</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="Price"><div class="th-wrapper"><span>Price</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Availability"><div class="th-wrapper"><span>Availability</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Manufacturer"><div class="th-wrapper"><span>Manufacturer</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Info"><div class="th-wrapper"><span>Info</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Status"><div class="th-wrapper"><span>Status</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Package-Type"><div class="th-wrapper"><span>Package Type</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="Supply-Voltage"><div class="th-wrapper"><span>Supply Voltage</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="Clock-Speed"><div class="th-wrapper"><span>Clock Speed (Max)</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="Data-Processing"><div class="th-wrapper"><span>Data Processing</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="Internal-Flash"><div class="th-wrapper"><span>Internal Flash</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="Internal-SRAM"><div class="th-wrapper"><span>Internal SRAM</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="communication-protocols"><div class="th-wrapper"><span>Communication Protocols</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="GPIO-Pins"><div class="th-wrapper"><span>GPIO Pins</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="Timer"><div class="th-wrapper"><span>Timer</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Operating-Temperature"><div class="th-wrapper"><span>Operating Temperature</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="Display-Interface"><div class="th-wrapper"><span>Display Interface</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                    </tr>

                    <tr class="para-input-wrapper" id="para-input-wrapper">
                        <th class="large " id="Quantity">
                            <div class="th-wrapper" id="prod-quantity">
                                <input type="text" placeholder="Quantity" min="1">
                                <button class="quantity-btn" id="minus"><i class="fa fa-minus"></i></button>
                                <button class="quantity-btn" id="plus"><i class="fa fa-plus"></i></button>
                                
                            </div>

                            <div class="filter-reset"><a href="">Reset</a></div>
                        </th>

                        <th class="large" id="Price">
                            <div class="th-wrapper">
                                <ul>
                                    <li>
                                        <label for="from">From:</label>
                                        <input type="text" class="price-range" id="from" name="price-range-from" placeholder="$0.00">
                                    </li>
                                    
                                    <li>
                                        <label for="to">To:</label>
                                        <input type="text" class="price-range" id="to" name="price-range-to" placeholder="$0.00">
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-reset"><a href="">Reset</a></div>
                        </th>

                        <th class="medium" id="Availability"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>

                        <th class="medium" id="Manufacturer"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>

                        <th class="medium" id="Info"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>

                        <th class="small" id="Status"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>
                        
                        <th class="medium" id="Package-Type">
                            <div class="th-wrapper">
                                <ul>
                                    <li><input type="checkbox" name="" id="Canned"> <label for="Canned">Canned Module</label></li>
                                    <li><input type="checkbox" name="" id="QFN"> <label for="QFN">QFN</label></li>
                                    <li><input type="checkbox" name="" id="TQFP"> <label for="TQFP">TQFP</label></li>
                                </ul>
                            </div>
                            <div class="filter-reset"><a href="">Reset</a></div>
                        </th>

                        <th class="large" id="Supply-Voltage"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>
                        <th class="small" id="Clock-Speed"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>
                        <th class="small" id="Data-Processing"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>

                        <th class="small" id="Internal-Flash">
                            <div class="th-wrapper">
                                <ul>
                                    <li>
                                        <input type="checkbox" name="" id="10kb">
                                        <label for="10kb">10 kb</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="14kb">
                                        <label for="14kb">14 kb</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="192kb">
                                        <label for="192kb">192 kb</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-reset"><a href="">Reset</a></div>
                        </th>

                        <th class="small" id="Internal-SRAM">
                            <div class="th-wrapper">
                                <ul>
                                    <li>
                                        <input type="checkbox" name="" id="510b">
                                        <label for="510b">510 b</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="14kb2">
                                        <label for="14kb2">14 kb</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="32kb">
                                        <label for="32kb">32 kb</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-reset"><a href="">Reset</a></div>
                        </th>

                        <th class="small" id="SPI-Interface">
                            <div class="th-wrapper">
                                <ul>
                                    <li>
                                        <input type="checkbox" name="" id="uart">
                                        <label for="uart">UART</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="i2c">
                                        <label for="i2c">I2C</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="spi">
                                        <label for="spi">spi</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="1-wire">
                                        <label for="1-wire">1-wire</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="8bit-Bus-Interface">
                                        <label for="8bit-Bus-Interface">8bit Bus Interface</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="16bit-Bus-Interface">
                                        <label for="16bit-Bus-Interface">16bit Bus Interface</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-reset"><a href="">Reset</a></div>
                        </th>

                        <th class="small" id="GPIO-Pins">
                            <div class="th-wrapper">
                                <ul>
                                    <li>
                                        <input type="checkbox" name="" id="Digital-I/O">
                                        <label for="Digital-I/O">Digital I/O</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="Analog-Input">
                                        <label for="Analog-Input">Analog Input</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="PWM-Output">
                                        <label for="PWM-Output">PWM Output</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="Pulse-Counters">
                                        <label for="Pulse-Counters">Pulse Counters</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="Quadrature-Input">
                                        <label for="Quadrature-Input">Quadrature Input</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-reset"><a href="">Reset</a></div>
                        </th>

                        <th class="large" id="Timer"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>
                        <th class="medium" id="Operating-Temperature"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>
                        <th class="large" id="Display-Interface"><div class="th-wrapper"></div><div class="filter-reset"><a href="">Reset</a></div></th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($products as $product => $value) : ?>
                        <tr class="para-tbody-row" id="<?php echo $product; ?>">
                            <td id="Quantity">
                                <div class="th-wrapper" id="prod-quantity">
                                    <input type="text" placeholder="Quantity" min="1" value="">
                                    <button class="quantity-btn" id="minus"><i class="fa fa-minus"></i></button>
                                    <button class="quantity-btn" id="plus"><i class="fa fa-plus"></i></button>
                                </div>
                                <button id="para-add-to-cart-btn" title="Add to Cart"><i class="fa fa-shopping-cart"></i></button>

                                <p>Min: <span>160</span> Mult: <span>160</span></p>
                            </td>
                            <?php foreach ($value as $key => $val) : ?>
                                <td id="<?php echo $key; ?>">
                                    <ul>
                                        <?php $i = 1; foreach ($val as $newKey => $newVal) : ?>
                                            <?php  if (is_int($newKey)) : ?>
                                                <li class="para-id" id="para-<?php echo $i; ?>"><span><?php echo $newVal; ?></span></li>
                                            <?php else : ?>
                                                <li class="para-id" id="para-<?php echo $i; ?>"><span id="para-key"><?php echo $newKey; ?></span> <span id="para-val"><?php echo $newVal; ?></span></li>
                                            <?php endif; ?>
                                        <?php $i++; endforeach;  ?>
                                    </ul>
                                </td>
                            <?php endforeach;  ?>
                        </tr>
                    <?php endforeach;  ?>
                </tbody>
            </table>
        </div>

    </div>

</section>