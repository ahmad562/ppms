<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Contract Detail/h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_consultancy_contracts/addForm') ?>">
                            <button class="btn btn-danger">Add New Contract Detail</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">



                                <div class="dt-responsive table-responsive">     
                                <table id="awardedTable" class="table table-bordered nowrap">
                                            <tr>
                                                <th>ID</th>
                                                <th>Package</th>
                                                <th>Firm/Individual ID</th>
                                                <th>Employee Name</th>
                                                <th>Contract Award</th>
                                                <th>Completion Date</th>
                                                <th>Revised Date</th>
                                                <th>Currency</th>
                                                <th>Original Amount</th>
                                                <th>Revised Amount</th>
                                                <th>Disbursement</th>
                                                <th>Status ID</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php foreach ($contracts as $contract) { ?>
                                            <tr>
                                                <td><?php echo $contract->hr_cid; ?></td>
                                                <td><?php echo $contract->package; ?></td>
                                                <td><?php echo $contract->firm_indi_id; ?></td>
                                                <td><?php echo $contract->s_fullname; ?></td>
                                                <td><?php echo $contract->contract_award; ?></td>
                                                <td><?php echo $contract->completion_date; ?></td>
                                                <td><?php echo $contract->revised_date; ?></td>
                                                <td><?php echo $contract->currency; ?></td>
                                                <td><?php echo $contract->cont_amt_orig; ?></td>
                                                <td><?php echo $contract->cont_amt_revised; ?></td>
                                                <td><?php echo $contract->disbursement; ?></td>
                                                <td><?php if($contract->status_id==1){
                                                    echo "Active";
                                                 }else{
                                                    echo "In Active";
                                                 } ?></td>
                                                <td>
                                                    <a href="<?php echo base_url('Hr_consultancy_contracts/editForm/' . $contract->hr_cid); ?>">Edit</a>
                                                    <a href="<?php echo base_url('Hr_consultancy_contracts/delete/' . $contract->hr_cid); ?>">Delete</a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                        </table>
                                </div>
                                </div>
                                </div>
                                </div>
                                    

