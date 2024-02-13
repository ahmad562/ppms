<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/add_package') ?>">
                            <button class="btn btn-danger">Add Package</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Package Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="awardedTable" class="table table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Package</th>
                                                    <td>Organization</td>
                                                    <th>Package Contract</th>
                                                    <th>Package Amount</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php foreach ($packages as $package) { ?>
                                                <tr>
                                                    <td><?php echo $package->package; ?></td>
                                                    <td><?php echo $package->organization_name; ?></td>
                                                    <td><?php echo $package->package_contract; ?></td>
                                                    <td><?php echo $package->package_amount; ?></td>
                                                    <td>
                                                        <a href="<?php echo base_url('Hr_qcbs/edit_package/' . $package->hr_in_package_id); ?>"
                                                            class="btn btn-primary">Edit</a>
                                                        <a href="<?php echo base_url('Hr_qcbs/delete_package/' . $package->hr_in_package_id); ?>"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
                                                </tr>
                                                <?php } ?>
                                            </tbody>
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