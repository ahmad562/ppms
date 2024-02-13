
<div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>Display status</h4> -->


                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Covenant Records</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">

    <h1>Covenant Name List</h1>

    <a href="<?php echo base_url('Covenant/create'); ?>">
    <button class="btn btn-danger">
    Create New Covenant Name
    </button>
</a>

    <table class="table table-border">
        <tr>
            <th>Covenant Name</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($covenant_names as $covenant_name) { ?>
            <tr>
                <td><?php echo $covenant_name->covenant_name; ?></td>
                <td>
                    <a href="<?php echo site_url('covenant_name/edit/' . $covenant_name->covenant_name_id); ?>">Edit</a>
                    <a href="<?php echo site_url('covenant_name/delete/' . $covenant_name->covenant_name_id); ?>" onclick="return confirm('Are you sure you want to delete this covenant name?')">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
        </div>
        </div>
        </div>
        </div>
        
