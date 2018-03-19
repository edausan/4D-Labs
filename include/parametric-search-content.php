<section class="parametric-wrapper" id="parametric-wrapper">

    <div class="para-category-wrapper">
        <h1>Parametric Part Number Search</h1>
        <p for="">Use the Parametric Search to find or build a part to your specifications.</p>
    </div>
    

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
                        <div class="th-wrapper"><input type="text" name="" id="" placeholder="Search part name"> <i id="part-name-search" class="fa fa-search"></i></div>
                        <div class="filter-reset"><label for="">Reset</label></div>
                    </th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($partName as $key => $value) : ?>
                    <tr class="para-tbody-row" id="<?php echo $key; ?>">
                            <td id="para-prod-cbox"><div class="th-wrapper"><input type="checkbox" name="" id="" class="compare-cbox"></div></td>
                            <td id="para-prod-name">
                                <div class="th-wrapper">
                                    <a href="<?php echo $key; ?>" class="para-prod-name-link"><?php echo $value['part-name']; ?></a>
                                </div>
                            </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

        <div class="para-tb-2-wrapper dragscroll" title="Drag to scroll">


            <table class="parametric-table" id="para-tb-2">

                <thead class="column-names">
                    <tr>
                        <th class="medium" id="Product-image"><div class="th-wrapper"><span>Product Image</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Datasheet"><div class="th-wrapper"><span>Datasheet</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Price"><div class="th-wrapper"><span>10K Pricing</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Availability"><div class="th-wrapper"><span>Availability</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Status"><div class="th-wrapper"><span>Status</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        
                        <th class="large" id="Supply-Voltage"><div class="th-wrapper"><span>Supply Voltage</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="Clock-Speed"><div class="th-wrapper"><span>Clock Speed (MHz)</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="Data-Processing"><div class="th-wrapper"><span>Processor Type</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Internal-Flash"><div class="th-wrapper"><span>Internal Flash (kB)</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Internal-SRAM"><div class="th-wrapper"><span>Internal SRAM (kB)</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>

                        <th class="small" id="communication-protocols"><div class="th-wrapper"><span>UART</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="communication-protocols"><div class="th-wrapper"><span>I2C</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="communication-protocols"><div class="th-wrapper"><span>SPI</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="communication-protocols"><div class="th-wrapper"><span>1-WIRE</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>

                        <th class="small" id="GPIO-Pins"><div class="th-wrapper"><span>Digital I/O</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="GPIO-Pins"><div class="th-wrapper"><span>Analog Input</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="GPIO-Pins"><div class="th-wrapper"><span>PWM Output</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="GPIO-Pins"><div class="th-wrapper"><span>Pulse Counters</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="small" id="GPIO-Pins"><div class="th-wrapper"><span>Quadrature Input</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        
                        <th class="large" id="Timer"><div class="th-wrapper"><span>Digital Timer</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Operating-Temperature"><div class="th-wrapper"><span>Operating Temperature</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="Display-Interface"><div class="th-wrapper"><span>Display Interface</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="large" id="Package-Type"><div class="th-wrapper"><span>Package Type</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                        <th class="medium" id="Info"><div class="th-wrapper"><span>Info</span> <span id="sorter" hidden><i class="fa fa-arrow-down"></i></span></div></th>
                    </tr>

                    <tr class="para-input-wrapper" id="para-input-wrapper">

                        <!-- ### PRODUCT IMAGE -->
                        <th class="medium" id="product-image">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### DATASHEET -->
                        <th class="medium" id="datasheet">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### PRICE -->
                        <th class="medium" id="Price">
                            <div class="th-wrapper">
                                <ul>
                                    <li><input type="checkbox" name="" id="$4.50" hidden> <label for="$4.50">$4.50</label></li>
                                    <li><input type="checkbox" name="" id="$5.00" hidden> <label for="$5.00">$5.00</label></li>
                                    <li><input type="checkbox" name="" id="$5.15" hidden> <label for="$5.15">$5.15</label></li>
                                    <li><input type="checkbox" name="" id="$5.27" hidden> <label for="$5.27">$5.27</label></li>
                                    <li><input type="checkbox" name="" id="$6.15" hidden> <label for="$6.15">$6.15</label></li>
                                </ul>
                            </div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### AVAILABILITY -->
                        <th class="medium" id="Availability"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>

                        <!-- <th class="medium" id="Manufacturer"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th> -->

                        <!-- ### STATUS -->
                        <th class="small" id="Status"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>
            
                        <!-- ### SUPPLY VOLTAGE -->
                        <th class="large" id="Supply-Voltage"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>

                        <!-- ### CLOCK SPEED -->
                        <th class="small" id="Clock-Speed"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>

                        <!-- ### PROCESSOR TYPE -->
                        <th class="small" id="Processor-Type"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>

                        <!-- ### INTERNAL FLASH -->
                        <th class="medium" id="Internal-Flash">
                            <div class="th-wrapper">
                                <ul>
                                    <li>
                                        <input type="checkbox" name="" id="10kb" hidden>
                                        <label for="10kb">10 kb</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="14kb" hidden>
                                        <label for="14kb">14 kb</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="192kb" hidden>
                                        <label for="192kb">192 kb</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### INTERNAL SRAM -->
                        <th class="medium" id="Internal-SRAM">
                            <div class="th-wrapper">
                                <ul>
                                    <li>
                                        <input type="checkbox" name="" id="510b" hidden>
                                        <label for="510b">510 b</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="14kb2" hidden>
                                        <label for="14kb2">14 kb</label>
                                    </li>
                                    <li>
                                        <input type="checkbox" name="" id="32kb" hidden>
                                        <label for="32kb">32 kb</label>
                                    </li>
                                </ul>
                            </div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### UART -->
                        <th class="small" id="uart">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ## I2C -->
                        <th class="medium" id="I2C">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### SPI -->
                        <th class="small" id="spi">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### 1-WIRED -->
                        <th class="small" id="1-wired">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### Digital I/O -->
                        <th class="small" id="Digital-I/O">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### ANALOG INPUT -->
                        <th class="small" id="Analog-input">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <!-- ### PWM Output -->
                        <th class="small" id="PWM-Ouput">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>


                        <th class="small" id="Pulse-Counters">
                            <div class="th-wrapper"></div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>

                        <th class="small" id="Quadrature-Output"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>

                        <th class="large" id="Timer"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>
                        <th class="medium" id="Operating-Temperature"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>
                        <th class="large" id="Display-Interface"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>
                        <th class="medium" id="Package-Type">
                            <div class="th-wrapper">
                                <ul>
                                    <li><input type="checkbox" name="" id="Canned" hidden> <label for="Canned">Canned Module</label></li>
                                    <li><input type="checkbox" name="" id="QFN" hidden> <label for="QFN">QFN</label></li>
                                    <li><input type="checkbox" name="" id="TQFP" hidden> <label for="TQFP">TQFP</label></li>
                                </ul>
                            </div>
                            <div class="filter-reset"><label for="">Reset</label></div>
                        </th>
                        <th class="medium" id="Info"><div class="th-wrapper"></div><div class="filter-reset"><label for="">Reset</label></div></th>
                    </tr>
                </thead>

                <tbody>
                    <?php $x = 0; foreach ($products as $product => $value) : ?>
                        <tr class="para-tbody-row" id="<?php echo $product; ?>">
                        
                            <!-- Product Thumbnail -->
                            <td>
                                <figure class="product-image">
                                    <img src="img/<?php echo $product; ?>.png" alt="">
                                </figure>
                            </td>

                            <!-- Product Datasheet -->
                            <td>
                                <figure class="product-pdf">
                                    <a href="<?php echo $partName['goldelox']['datasheet']; ?>" target="_blank">
                                        <img src="img/pdf.png" alt="" title="Click to Download.">
                                    </a>
                                </figure>
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
                    <?php $x++; endforeach;  ?>
                </tbody>
            </table>
        </div>

    </div>

</section>