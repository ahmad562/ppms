<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/display_award_list') ?>">
                            <button class="btn btn-danger">View Awarded Detail List</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                    <form method="post" action="<?php echo base_url('Hr_qcbs/add_award_record'); ?>">
                                        <label for="negotiated">Negotiated Date:</label>
                                        <input type="date" id="negotiated" name="negotiated" class="form-control" required>
                                        <br>

                                        <label for="awarded">Awarded Date:</label>
                                        <input type="date" id="awarded" name="awarded" class="form-control" required>
                                        <br>

                                        <label for="completed">Completed Date:</label>
                                        <input type="date" id="completed" name="completed" class="form-control" required>
                                        <br>

                                        <label for="awarded_amount">Awarded Amount (Dollar):</label>
                                        <input type="text" id="awarded_amount" name="awarded_amount" class="form-control" required>
                                        <br>
                                        <label for="hr_cfid">Consulting Firm</label>
                                        <select id="hr_cfid" name="hr_cfid" class="form-control" required>
                                            <?php 
                                            $consulting_firms=$this->db->query('select * from hr_consulting_firms')->result();
                                            foreach ($consulting_firms as $firm) { ?>
                                                <option value="<?php echo $firm->hr_cfid; ?>"><?php echo $firm->package; ?></option>
                                            <?php } ?>
                                        </select>
                                        <br>
                                        <button type="submit" name="submit" class="btn btn-primary">Add Award</button>
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
