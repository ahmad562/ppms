<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add New Record</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Certificate_tax') ?>">
                            <button class="btn btn-danger">View Certificate List</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">


                                    <?php echo validation_errors(); ?>

                                    <form method="post" action="<?php echo base_url('Certificate_tax/create_tax')?>">

                                        <table class="table">
                                           
                                            <tr>
                                                <th>Tax/DPR</th>
                                                <td>
                                                    <input type="input" name="ctp_attribute" class="form-control" />
                                                </td>
                                            </tr>
                                          
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" name="submit" value="Save"
                                                        class="btn btn-primary" />
                                                </td>
                                            </tr>
                                        </table>


                                    </form>




                                </div>
                            </div>
                        </div>
                    </div>
                </div>