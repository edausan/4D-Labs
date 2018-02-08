<article class="datasheet-content">
    <h1>Firmware</h1>
    

    <div class="datasheet-search">
        <label for="datasheet-list">Search by:</label>

        <select name="datasheet-list" id="datasheet-list" class="datasheet-list">
            <option value="All">All</option>
            <option value="Products">Products</option>
            <option value="Document Title">Document Title</option>
        </select>

        <input class="hidden" type="text" name="datasheet-search-bar" id="datasheet-search-input">

        <button id="datasheet-search-btn"><i class="fa fa-search"></i> Search</button>
    </div>


    <div class="datasheet-table-wrapper">
        <table class="datasheet-table">
            <thead>
                <tr>
                    <th id="products">Products</th>
                    <th id="document-title">Document Title</th>
                    <th id="last-updated">Last Updated</th>
                </tr>
            </thead>

            <tbody>
                <?php 
                    for ($i=0; $i < 30; $i++) {
                ?>
                    <tr>
                        <td id="products-td">11AA010 </td>
                        <td id="doc-title-td"><a href="">11AAXXX/11LCXXX 1K - 16K UNI/O® Serial EEPROM Family Data Sheet</a></td>
                        <td id="last-updated-td">18-May-2011</td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</article>