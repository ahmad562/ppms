<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">

                    <a href="<?php echo base_url('Cad_performance') ?>">
                            <button class="btn btn-danger">View Cad Performance</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Cad Performance</h5>
                                </div>
                                <div class="card-block">
                                    <form action="<?php echo base_url('Cad_performance/add'); ?>" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <label for="cad_product_id">Item:</label>
                                                <select id="cad_product_id" name="cad_product_id" class="form-control" required>
                                                    <option value="">Select Item</option>
                                                    <?php
                                                    $products = $this->db->query("select * from cad_product")->result();
                                                    foreach ($products as $product) {
                                                        echo '<option value="' . $product->cad_product_id . '">' . $product->cad_product_name . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <label for="quarter_id">Quarter No:</label>
                                                <select id="quarter_id" name="quarter_id" class="form-control" required>
                                                    <option value="">Select Quarter</option>
                                                    <?php
                                                    for ($i = 1; $i <= 4; $i++) {
                                                        $quarter = 'Q' . $i;
                                                        echo '<option value="' . $i . '">' . $quarter . '</option>';
                                                    }
                                                    ?>
                                                </select>
                        <label for="contract_disbursment">Contract/Disbursements:</label>
                        <select name="contract_disbursment" id="contract_disbursment" class="form-control" required>
                        <option value="1">Contract Awards</option>
                        <option value="2">Disbursements</option>
                        </select>
                       <br>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="year">Year:</label>
                                                <select id="year" name="year" class="form-control" required>
                                                    <option value="">Select Year</option>
                                                    <?php
                                                    $currentYear = date('Y');
                                                    for ($i = 2022; $i <= 2050; $i++) {
                                                        echo '<option value="' . $i . '"';
                                                        if ($i== $currentYear) {
                                                            echo ' selected';
                                                        }
                                                        echo '>' . $i . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <label for="projected">Projected Amount($):</label>
                                                <input type="text" id="projected" name="projected" class="form-control" required>
                                                <label for="actual">Actual Amount($):</label>
                                                <input type="text" id="actual" name="actual" class="form-control" required><br>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
