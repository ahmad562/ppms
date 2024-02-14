<!-- add_qcbs_activity.php -->

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add QCBS Activity</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs') ?>">
                            <button class="btn btn-danger">View QCBS Activities</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                  
                                       <?php /*?> <label for="planned_approved">Planned/Approved:</label>
                                        <select id="planned_approved" name="planned_approved" class="form-control" required>
                                            <option value="Planned">Planned</option>
                                            <option value="Actual">Actual</option>
                                        </select>
                                        <br>

                                        <label for="sub_adb">Sub ADB:</label>
                                        <input type="date" id="sub_adb" name="sub_adb" class="form-control" required>
                                        <br>

                                        <label for="adb_approval">ADB Approval:</label>
                                        <input type="date" id="adb_approval" name="adb_approval" class="form-control" required>
                                        <br>

                                        <label for="eoi_advert">EOI Advertisement:</label>
                                        <input type="date" id="eoi_advert" name="eoi_advert" class="form-control" required>
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

                                        <button type="submit" name="submit" class="btn btn-primary">Add QCBS Activity</button>
                                    </form>
                                    <?php */?>
                                    <?php
// Assuming $data contains existing data for the form
$data=$this->db->query("select * from hr_qcbs as hq,hr_consulting_firms as hcf where hq.hr_cfid=hcf.hr_cfid and qcbs_id=$id")->row_array();
?>

<form method="post" action="<?php echo base_url('Hr_qcbs/update_qcbs/'.$id); ?>">
    <table class="table table-bordered">
        <tr>
            <td>
                <label for="planned_approved">Planned/Approved:</label>
                <select id="planned_approved" name="planned_approved" class="form-control" required>
                    <option value="Planned" <?php echo ($data['planned_approved'] === 'Planned') ? 'selected' : ''; ?>>Planned</option>
                    <option value="Actual" <?php echo ($data['planned_approved'] === 'Actual') ? 'selected' : ''; ?>>Actual</option>
                </select>
            </td>
            <td>
                <label for="sub_adb">Sub ADB:</label>
                <input type="date" id="sub_adb" name="sub_adb" class="form-control" required value="<?php echo $data['sub_adb']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="adb_approval">ADB Approval:</label>
                <input type="date" id="adb_approval" name="adb_approval" class="form-control" required value="<?php echo $data['adb_approval']; ?>">
            </td>
            <td>
                <label for="eoi_advert">EOI Advertisement:</label>
                <input type="date" id="eoi_advert" name="eoi_advert" class="form-control" required value="<?php echo $data['eoi_advert']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="awarded">Awarded Date:</label>
                <input type="date" id="awarded" name="awarded" class="form-control" required value="<?php echo $data['awarded']; ?>">
            </td>
            <td>
                <label for="completed">Completed Date:</label>
                <input type="date" id="completed" name="completed" class="form-control" required value="<?php echo $data['completed']; ?>">
            </td>
        </tr>
        <tr>
            <td>
                <label for="awarded_amount">Awarded Amount (Dollar):</label>
                <input type="text" id="awarded_amount" name="awarded_amount" class="form-control" required value="<?php echo $data['awarded_amount']; ?>">
            </td>
            <td colspan="5">
                <label for="hr_cfid">Consulting Firm</label>
                <select id="hr_cfid" name="hr_cfid" class="form-control" required>
                    <?php 
                    $consulting_firms = $this->db->query('select * from hr_consulting_firms')->result();
                    foreach ($consulting_firms as $firm) { ?>
                        <option value="<?php echo $firm->hr_cfid; ?>" <?php echo ($data['hr_cfid'] == $firm->hr_cfid) ? 'selected' : ''; ?>><?php echo $firm->package; ?></option>
                    <?php } ?>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="6">
                <button type="submit" name="submit" class="btn btn-primary">Update QCBS Activity</button>
            </td>
        </tr>
    </table>
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