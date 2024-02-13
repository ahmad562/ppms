<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_consulting_firms') ?>">
                            <button class="btn btn-danger">View Firms Detail List</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Firm</h5>
                                </div>
                                <div class="card-block">
                                    <form method="post" action="<?php echo base_url('Hr_consulting_firms/add'); ?>">
                                        <div class="form-group">
                                            <label for="package">Firm Package:</label>
                                            <input type="text" class="form-control" id="package" name="package" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="contract_package">Contract Package:</label>
                                            <input type="text" class="form-control" id="contract_package" name="contract_package" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="est_amount_dollar">Estimated Amount (Dollar):</label>
                                            <input type="text" class="form-control" id="est_amount_dollar" name="est_amount_dollar" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Add Firm</button>
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
