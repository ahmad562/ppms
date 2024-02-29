<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Cad_performance/add_form') ?>">
                            <button class="btn btn-danger">Add Cad Performance</button>
                        </a>
                        <a href="<?php echo base_url('Cad_performance/report') ?>">
                            <button class="btn btn-success">Report</button>
                        </a>

                        <a href="<?php echo base_url('Cad_performance/cad_detail') ?>">
                            <button class="btn btn-warning">Cad Performance Detail</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>View Cad Performances</h5>
                                </div>
                                <div class="card-block">
                                    <table border="1" class="table table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>Item</th>
                                            <th>Year</th>
                                            <th>Quarter</th>
                                            <th>Projected</th>
                                            <th>Actual</th>
                                            <th>Contract Disbursment</th>
                                            <th>Actions</th>
                                        </tr>
                                        <?php 
                                        $x=1;
                                        foreach ($performances as $performance) { ?>
                                            <tr>
                                                <td><?php echo $x ?></td>
                                                <td><?php echo $performance->cad_product_name; ?></td>
                                                <td><?php echo $performance->year; ?></td>
                                                <td><?php 
                                                if($performance->quarter_id==1) {
echo 'Q1';
                                                } else if($performance->quarter_id== 2) {
                                                    echo 'Q2';
                                                } else if($performance->quarter_id== 3) {
                                                    echo 'Q3';
                                                } else if($performance->quarter_id== 4) {
                                                    echo 'Q4';                                                                 
                                                } ?></td>
                                                <td><?php echo $performance->projected; ?></td>
                                                <td><?php echo $performance->actual; ?></td>
                                                <td>
                                                    
                                                <?php if($performance->contract_disbursment==1){
                                                    echo "Contract Awards";
                                                }else{
                                                    echo "Disbursements"; 
                                                } ?>
                                            
                                            
                                            </td>
                                                <td>
                                                    <a href="<?php echo base_url('Cad_performance/edit/' . $performance->cad_performance_id); ?>">Edit</a>
                                                    <a href="<?php echo base_url('Cad_performance/delete/' . $performance->cad_performance_id); ?>"
                                                        onclick="return confirm('Are you sure you want to delete this performance?')">Delete</a>
                                                </td>
                                            </tr>
                                        <?php 
                                    $x++;
                                    } ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
