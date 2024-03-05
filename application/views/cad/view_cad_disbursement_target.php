<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Cad_performance/cad_disbursement_target') ?>">
                            <button class="btn btn-danger">Add Cad Performance</button>
                        </a>
                        <a href="<?php echo base_url('Cad_performance/cad_detail') ?>">
                            <button class="btn btn-success">Report</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>View Cad Disbursement Target</h5>
                                </div>
                                <div class="card-block">
                                    <table border="1" class="table table-bordered">
                                        <tr>
                                            <th>ID</th>
                                            <th>city</th>
                                            <th>SubProject</th>
                                            <th>Year</th>
                                            <th>Month</th>
                                            <th>Amount</th>
                                           
                                            <th>Actions</th>
                                        </tr>
                                        <?php 
                                        $x=1;
                                        $performances=$this->db->query("select * from cad_disbursement_target as cdt,
                                        city as c,ppms_subproject as pps,month as mi
                                        where cdt.city_id=c.city_id
                                        and cdt.sub_project_id=pps.subproject_id
                                        and cdt.month_id=mi.month_id
                                        ")->result();
                                        foreach ($performances as $performance) { ?>
                                            <tr>
                                                <td><?php echo $x ?></td>
                                                <td><?php echo $performance->city_name; ?></td>
                                                <td><?php echo $performance->subproject_name; ?></td>
                                                <td><?php echo $performance->year; ?></td>
                                              
                                                <td><?php echo $performance->month_name; ?></td>
                                                <td><?php echo $performance->amount; ?></td>
                                            
                                            
                                            </td>
                                                <td>
                                                    <a href="<?php echo base_url('Cad_performance/edit/' . $performance->cdt_id); ?>">Edit</a>
                                                    <a href="<?php echo base_url('Cad_performance/delete/' . $performance->cdt_id); ?>"
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
