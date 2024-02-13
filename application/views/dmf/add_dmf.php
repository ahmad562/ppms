<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                  
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>DMF Entry Form</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <?php echo form_open('Loan/create'); ?>

                                        <label for="name">OutCome:</label><br />
                                        <input type="text" name="name" class="form-control" /><br />

                                        <label for="name">Year:</label><br />
                                        <input type="text" name="year" class="form-control" /><br />

                                        <label for="name">Performance Indicators :</label><br />
                                        <textarea type="text" name="performance_indicators " class="form-control" />
                                        </textarea><br />


                                        <label for="name">Status:</label><br />
                                        <textarea type="text" name="status " class="form-control" />
                                        </textarea><br />

                                        <input type="submit" name="submit" class="btn btn-danger" value="Add New Record" />

                                        <?php echo form_close(); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>