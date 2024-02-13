<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/add_award') ?>">
                            <button class="btn btn-danger">Add New LOan</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Loan Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    <?php echo form_open('Loan/create'); ?>

<label for="name">Name:</label><br />
<input type="text" name="name" class="form-control" /><br />

<input type="submit" name="submit" class="btn btn-danger" value="Add Loan" />

<?php echo form_close(); ?>

            </div>      </div>      </div>      </div>      </div>      </div>