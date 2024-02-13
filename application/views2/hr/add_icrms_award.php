<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/display_icrms_award') ?>">
                            <button class="btn btn-danger">View Awarded for ICRMS</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add Awarded</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    <div class="container">
   
    <form action="<?php echo base_url('Hr_qcbs/add_icrms_award_record'); ?>" method="post">
        <div class="form-group">
            <label for="negotiated">Negotiated Date:</label>
            <input type="date" id="negotiated" name="negotiated" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="awarded">Awarded Date:</label>
            <input type="date" id="awarded" name="awarded" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="completed">Completed Date:</label>
            <input type="date" id="completed" name="completed" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="awarded_amount">Awarded Amount (Dollar):</label>
            <input type="text" id="awarded_amount" name="awarded_amount" class="form-control" required>
        </div>
        <div class="form-group">
                                                    <label for="hr_in_package_id">Package:</label>

                                                    <select id="hr_in_package_id" name="hr_in_package_id"
                                                        class="form-control" required>
                                                        <option value="">Select Package</option>
                                                        <?php
        // Assuming $db is your database connection
        $query = "SELECT hr_in_package_id, package FROM hr_individual_package";
        $result = $this->db->query($query)->result();

        foreach ($result as $row) {
            
                echo '<option value="' . $row->hr_in_package_id . '">' . $row->package . '</option>';
            }
        
        ?>
                                                    </select>

                                                </div>


                                              

                                                </div>



        <button type="submit" name="submit" class="btn btn-primary mt-3">Add Awarded Activity</button>
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
    </div>
</div>
