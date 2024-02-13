<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_staff_plan/add_plan'); ?>">
                            <button class="btn btn-danger">Add New Plan</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Staff Plan Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-bordered nowrap">
                                            <tr>
                                                <th>Organization</th>
                                                <th>Designation</th>
                                                <th>Advertisement Date</th>
                                                <th>Interview Date</th>
                                                <th>Ranking Date</th>
                                                <th>Approval Date</th>
                                               
                                                <th>Remarks</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php foreach ($plans as $plan) { ?>
                                                <tr>
                                                    <td><?php echo $plan->organization_name; ?></td>
                                                    <td><?php echo $plan->designation_name; ?></td>
                                                    <td><?php echo $plan->adv_date; ?></td>
                                                    <td><?php echo $plan->invi_inter_date; ?></td>
                                                    <td><?php echo $plan->ranking_date; ?></td>
                                                    <td><?php echo $plan->approval_date; ?></td>
                                                   
                                                    <td><?php echo $plan->remarks; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('hr_staff_plan/edit_plan/' . $plan->hr_staff_plan_id); ?>">Edit</a>
                                                        <a href="<?php echo base_url('hr_staff_plan/delete/' . $plan->hr_staff_plan_id); ?>">Delete</a>
                                                    </td>
                                                </tr>
                                            <?php } ?>
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
</div>
