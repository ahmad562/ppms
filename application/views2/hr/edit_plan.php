<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <!-- <h4>Display status</h4> -->
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_staff_plan') ?>">
                            <button class="btn btn-danger">View Plan Records</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Plan Detail</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <?php 
                                        $plan = $this->db->query("SELECT hp.*, o.organization_name
                                        FROM hr_staff_plan hp
                                        JOIN organization o ON hp.organization_id = o.organization_id
                                        WHERE hp.hr_staff_plan_id = $pid")->row();
                                        ?>
                                        <form method="post" action="<?php echo base_url('hr_staff_plan/edit/' . $plan->hr_staff_plan_id); ?>">
                                            <label for="organization_id">Organization ID:</label>
                                            <select id="organization_id" name="organization_id" class="form-control" required>
                                                <option value="<?php echo $plan->organization_id; ?>"><?php echo $plan->organization_name; ?></option>
                                                <?php 
                                                $organizations = $this->db->query("SELECT * FROM organization")->result();
                                                foreach ($organizations as $org) { ?>
                                                    <option value="<?php echo $org->organization_id; ?>"><?php echo $org->organization_name; ?></option>
                                                <?php } ?>
                                            </select>
                                            <br><br>

                                            <label for="adv_date">Advertisement Date:</label>
                                            <input type="date" class="form-control" id="adv_date" name="adv_date" value="<?php echo $plan->adv_date; ?>" required>
                                            <br><br>

                                            <label for="invi_inter_date">Interview Date:</label>
                                            <input type="date" class="form-control" id="invi_inter_date" name="invi_inter_date" value="<?php echo $plan->invi_inter_date; ?>" required>
                                            <br><br>

                                            <label for="ranking_date">Ranking Date:</label>
                                            <input type="date" class="form-control" id="ranking_date" name="ranking_date" value="<?php echo $plan->ranking_date; ?>" required>
                                            <br><br>

                                            <label for="approval_date">Approval Date:</label>
                                            <input type="date" class="form-control" id="approval_date" name="approval_date" value="<?php echo $plan->approval_date; ?>" required>
                                            <br><br>

                                            <label for="appoint_letter">Appointment Letter:</label>
                                            <input type="text" class="form-control" id="appoint_letter" name="appoint_letter" value="<?php echo $plan->appoint_letter; ?>" required>
                                            <br><br>

                                            <label for="remarks">Remarks:</label>
                                            <input type="text" class="form-control" id="remarks" name="remarks" value="<?php echo $plan->remarks; ?>" required>
                                            <br><br>

                                            <input type="submit" name="submit" value="Update Plan" class="btn btn-danger">
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
