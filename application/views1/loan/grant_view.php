<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Loan/add_grant') ?>">
                            <button class="btn btn-danger">Add New Grant</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Grant Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="awardedTable" class="table table-bordered nowrap">
                                       
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($grants as $loan): ?>
                <tr>
                    <td><?php echo $loan['grant_id']; ?></td>
                    <td><?php echo $loan['grant_name']; ?></td>
                    <td><a href="<?php echo base_url('Loan/grant_edit/'.$loan['grant_id']); ?>">Edit</a></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

            </div>      </div>      </div>      </div>      </div>      </div>