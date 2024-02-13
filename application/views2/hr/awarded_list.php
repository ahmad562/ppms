<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/add_award') ?>">
                            <button class="btn btn-danger">Add Award List</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Awarded Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="awardedTable" class="table table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Negotiated Date</th>
                                                    <th>Awarded Date</th>
                                                    <th>Completed Date</th>
                                                    <th>Awarded Amount (Dollar)</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($records as $award) { ?>
                                                    <tr>
                                                        <td><?php echo $award->negotiated; ?></td>
                                                        <td><?php echo $award->awarded; ?></td>
                                                        <td><?php echo $award->completed; ?></td>
                                                        <td><?php echo $award->awarded_amount; ?></td>
                                                        <td>
                                                        
                            <a href="<?php echo base_url('Hr_qcbs/edit_award/'.$award->award_id); ?>" class="btn btn-primary">Edit</a>
                            <a href="<?php echo base_url('Hr_qcbs/delete_award/' . $award->award_id); ?>" class="btn btn-danger">Delete</a>
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
