<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/add_icrms_award') ?>">
                            <button class="btn btn-danger">Add Awarded for ICRMS</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>View Awarded</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="awardedActivitiesTable" class="table table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                <th>Package</th>
                                                    <th>Negotiated Date</th>
                                                    <th>Awarded Date</th>
                                                    <th>Completed Date</th>
                                                    <th>Awarded Amount (Dollar)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($records as $activity) { ?>
                                                    <tr>
                                                        <td><?php echo $activity->package; ?></td>
                                                        <td><?php echo $activity->negotiated_date; ?></td>
                                                        <td><?php echo $activity->awarded_date; ?></td>
                                                        <td><?php echo $activity->completed_date; ?></td>
                                                        <td><?php echo $activity->awarded_amount; ?></td>
                                                        <td>
                                                            <a href="<?php echo base_url('Hr_qcbs/edit_icrms_award/' . $activity->award_id); ?>"
                                                                class="btn btn-primary">Edit</a>
                                                            <a href="<?php echo base_url('Hr_qcbs/delete_icrms_award/' . $activity->award_id); ?>"
                                                                class="btn btn-danger">Delete</a>
                                                        </td>
                                                    </tr>
                                                <?php } ?>
                                            </tbody>
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
