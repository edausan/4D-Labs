<section class="compare-popup-wrapper">
    <div class="compare-popup">
        <header class="popup-header">
            <h3>Compare</h3>
            <button id="compare-x-btn"><i class="fa fa-close"></i></button>
        </header>

        <div class="compare-tb-wrapper">
            <table class="compare-table" id="compare-table-header">
                <thead>
                    <tr>
                        <th class="compare-th">Parameters</th>
                        <?php foreach ($partName as $prodName => $part) :?>
                            
                            <th class="compare-th compared-prod"><a href="<?php echo $prodName; ?>"><?php echo $part['part-name']; ?></a></th>
                        <?php endforeach; ?>
                    </tr>
                </thead>
            </table>

            <div class="compare-table-data-wrapper">
                <table class="compare-table" id="compare-table-data">
                    <tbody>
                        <?php foreach ($products['goldelox'] as $param => $value) : ?>
                        <tr>
                            <td><?php echo $param; ?></td>
                            
                            <td>
                                <ul>
                                    <?php foreach ($value as $key => $val) : ?>
                                        <li><?php echo $key; ?> <?php echo $val; ?></li>
                                    <?php endforeach; ?>
                                </ul>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>

        <button id="compare-x-btn" class="compare-close-btn">Close</button>

    </div>
</section>