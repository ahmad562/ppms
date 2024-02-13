<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                    <a href="<?php echo base_url('Cad_Performance') ?>">
                            <button class="btn btn-danger">View Cad Performance</button>
                        </a>

                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit Cad Performance</h5>
                                </div>
                                <div class="card-block">
            <form action="<?php echo base_url('Cad_performance/update/' . $performance->cad_performance_id); ?>" method="post">
            <label for="cad_product_id">Item:</label>
            <select id="cad_product_id" name="cad_product_id" class="form-control" required>
            <option value="<?php echo $performance->cad_product_id?>"><?php echo $performance->cad_product_name?></option>
                                                    <?php
                                                    $products = $this->db->query("select * from cad_product")->result();
                                                    foreach ($products as $product) {
                                                        echo '<option value="' . $product->cad_product_id . '">' . $product->cad_product_name . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                        <label for="year">Year:</label>
                    <input type="number" id="year" name="year" class="form-control" value="<?php echo $performance->year; ?>" required><br>

                                        <label for="quarter_id">Quarter:</label>
                                        <select id="quarter_id" name="quarter_id" class="form-control" required>
                                     <option value="<?php echo $performance->quarter_id?>">
                                     <?php 
                                                if($performance->quarter_id==1) {
echo 'Q1';
                                                } else if($performance->quarter_id== 2) {
                                                    echo 'Q2';
                                                } else if($performance->quarter_id== 3) {
                                                    echo 'Q3';
                                                } else if($performance->quarter_id== 4) {
                                                    echo 'Q4';                                                                 
                                                } ?></option>
                                                    <?php
                                                    for ($i = 1; $i <= 4; $i++) {
                                                        $quarter = 'Q' . $i;
                                                        echo '<option value="' . $i . '">' . $quarter . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                        <label for="projected">Projected Amount($):</label>
                                        <input type="text" id="projected" name="projected" class="form-control" value="<?php echo $performance->projected; ?>" required><br>

                                        <label for="actual">Actual Amount($):</label>
                                        <input type="text" id="actual" name="actual" class="form-control" value="<?php echo $performance->actual; ?>" required><br>

                                        <label for="contract_disbursment">Contract/Disbursments:</label>
                   
                    <select name="contract_disbursment" id="contract_disbursment" class="form-control" required>
                        <option value="<?php echo $performance->contract_disbursment; ?>">
                        <?php if($performance->contract_disbursment==1){
                                                    echo "Contract Awards";
                                                }else{
                                                    echo "Disbursements"; 
                                                } ?>
                    </option>
                        <option value="1">Contract Awards</option>
                        <option value="2">Disbursements</option>
                        </select> <br>
                                        <button type="submit" name="submit" class="btn btn-primary">Update</button>
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
