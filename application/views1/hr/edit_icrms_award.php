<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Edit Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/display_award_list') ?>">
                            <button class="btn btn-danger">View Awarded Detail List</button>
                        </a>
                    </div>
                </div>
                <?php 
                
                $award=$this->db->query("select * from hr_icrm_awarded as hqa,hr_individual_package as hip
                 where award_id=$awards_id and hqa.hr_cfid=hip.hr_in_package_id")->row();
                
                ?>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <form method="post" action="<?php echo base_url('Hr_qcbs/edit_icrms_award_record/' . $awards_id); ?>">
                                        <div class="form-group">
                                            <label for="negotiated">Negotiated Date:</label>
                <input type="date" class="form-control" id="negotiated" name="negotiated" value="<?php echo $award->negotiated_date; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="awarded">Awarded Date:</label>
                                            <input type="date" class="form-control" id="awarded" name="awarded" value="<?php echo $award->awarded_date; ?>" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="completed">Completed Date:</label>
                                            <input type="date" class="form-control" id="completed" name="completed" value="<?php echo $award->completed_date; ?>" required>
                                        </div>
                                        <div class="form-group">
                                                    <label for="hr_in_package_id">Package:</label>

                                                    <select id="hr_in_package_id" name="hr_in_package_id"
                                                        class="form-control" required>
                                                        <option value="<?php echo $award->hr_in_package_id; ?>"><?php echo $award->package; ?></option>
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


                                        <div class="form-group">
                                            <label for="awarded_amount">Awarded Amount (Dollar):</label>
                                            <input type="text" class="form-control" id="awarded_amount" name="awarded_amount" value="<?php echo $award->awarded_amount; ?>" required>
                                        </div>
                                        <button type="submit" class="btn btn-primary">Update Award</button>
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
