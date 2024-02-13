<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_consulting_firms/add_firm'); ?>">
                            <button class="btn btn-danger">Add New Firm</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Consulting Firms Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-bordered nowrap">
                                            <tr>
                                                <th>Firm Package</th>
                                                <th>Contract Package</th>
                                                <th>Estimated Amount (Dollar)</th>
                                                <th>Action</th>
                                            </tr>
                                            <?php foreach ($firms as $firm) { ?>
                                                <tr>
                                                    <td><?php echo $firm->package; ?></td>
                                                    <td><?php echo $firm->contract_package; ?></td>
                                                    <td><?php echo $firm->est_amount_dollar; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('hr_consulting_firms/edit_firm/' . $firm->hr_cfid); ?>" class="btn btn-primary">Edit</a>
                                                        <a href="<?php echo base_url('hr_consulting_firms/delete_firm/' . $firm->hr_cfid); ?>" class="btn btn-danger">Delete</a>
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
