<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">

                    <a href="<?php echo base_url('Cad_performance/view_cad_achieved') ?>">
                            <button class="btn btn-danger">View Cad Achieved</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Cad Achieved</h5>
                                </div>
                                <div class="card-block">
                <form action="<?php echo base_url('Cad_performance/add_cad_achieved'); ?>" method="post">
                                        <div class="row">

                                            <div class="col-sm-6">
                                                <label for="cad_product_id">City:</label>
                                                <select id="city_id" name="city_id" class="form-control" required>
                                                    <option value="">Select City</option>
                                                    <?php
                                                    $products = $this->db->query("select * from city")->result();
                                                    foreach ($products as $product) {
                                                        echo '<option value="' . $product->city_id . '">' . $product->city_name . '</option>';
                                                    }
                                                    ?>
                                                </select>
                                                <label for="quarter_id">Subproject:</label>
                                                <select name="sub_project_id" id="sub_project_idss"
                                                        class="form-control" onChange="display_subprject(this.value)">

                                                        <option value="">Select Sub Project List</option>
                                                       
                                                    </select>
                        <label for="contract_disbursment">Month:</label>
                        <select name="month_id" id="month_id" class="form-control" required>
    <option value="">Select Month</option>
    <option value="1">January</option>
    <option value="2">February</option>
    <option value="3">March</option>
    <option value="4">April</option>
    <option value="5">May</option>
    <option value="6">June</option>
    <option value="7">July</option>
    <option value="8">August</option>
    <option value="9">September</option>
    <option value="10">October</option>
    <option value="11">November</option>
    <option value="12">December</option>
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
                                                <label for="projected">Amount:</label>
                                                <input type="text" id="amount" name="amount" class="form-control" required>
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
