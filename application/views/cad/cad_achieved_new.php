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
                       
                       <br>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="year">Year:</label>
                                 <select id="year" name="year" class="form-control" required >
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
                                            </div>
                                            <div class="col-sm-12">

<hr>
<br>
<table class="table">
  <tr style="background-color:#000;color:#fff"><td><strong>Month</strong></td>
  <td><strong>Amount</strong></td></tr>  
     
<?php 
for($i = 1; $i <= 12; $i++) {
    ?>
    <tr>
      
        <td>
            <select name="month_id[]" id="month_id[]" readonly class="form-control" required>
                <option value="1" <?php echo ($i == 1) ? 'selected' : ''; ?>>January</option>
                <option value="2" <?php echo ($i == 2) ? 'selected' : ''; ?>>February</option>
                <option value="3" <?php echo ($i == 3) ? 'selected' : ''; ?>>March</option>
                <option value="4" <?php echo ($i == 4) ? 'selected' : ''; ?>>April</option>
                <option value="5" <?php echo ($i == 5) ? 'selected' : ''; ?>>May</option>
                <option value="6" <?php echo ($i == 6) ? 'selected' : ''; ?>>June</option>
                <option value="7" <?php echo ($i == 7) ? 'selected' : ''; ?>>July</option>
                <option value="8" <?php echo ($i == 8) ? 'selected' : ''; ?>>August</option>
                <option value="9" <?php echo ($i == 9) ? 'selected' : ''; ?>>September</option>
                <option value="10" <?php echo ($i == 10) ? 'selected' : ''; ?>>October</option>
                <option value="11" <?php echo ($i == 11) ? 'selected' : ''; ?>>November</option>
                <option value="12" <?php echo ($i == 12) ? 'selected' : ''; ?>>December</option>
            </select>
        </td>
      
        <td>
            <input type="text" id="amount" value="0" name="amount[]" class="form-control" required>
        </td>
    </tr>
<?php 
}
?>
  
</table>
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
