<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/display_icrm') ?>">
                            <button class="btn btn-danger">View ICRM</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add ICRM Record</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <!-- hr_icrm_add_form.php -->
                                        <div class="container">
                                         
                                            <form action="<?php echo base_url('Hr_qcbs/add_icrms_record'); ?>"
                                                method="post">
                                                <div class="container">
    
   
        <?php /*?><table class="table">
            <tbody>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="planned_approved">Planned Approved:</label>
                            <select id="planned_approved" name="planned_approved" class="form-control" required>
                                <option value="">Select Status</option>
                                <option value="planned">Planned</option>
                                <option value="actual">Actual</option>
                            </select>
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="sub_adb">Sub ADB:</label>
                            <input type="date" id="sub_adb" name="sub_adb" required class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="adb_approval">ADB Approval:</label>
                            <input type="date" id="adb_approval" name="adb_approval" required class="form-control">
                        </div>
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="eoi_advert">EOI Advertisement:</label>
                            <input type="date" id="eoi_advert" name="eoi_advert" required class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="hr_in_package_id">Package:</label>
                            <select id="hr_in_package_id" name="hr_in_package_id" class="form-control" required>
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
                    </td>
                    <td>
                        <div class="form-group">
                            <label for="budget_adb">Budget ADB:</label>
                            <input type="number" id="budget_adb" name="budget_adb" required class="form-control">
                        </div>
                    </td>
                </tr>
                <tr>
                    <td>
                        <div class="form-group">
                            <label for="adb_clear">ADB Clear:</label>
                            <input type="date" id="adb_clear" name="adb_clear" required class="form-control">
                        </div>
                    </td>
                    <td>
                        <button type="submit" name="submit" class="btn btn-primary mt-3">Add ICRM Data</button>
                    </td>
                </tr>
            </tbody>
        </table>
        <?php */?>
      

    <div class="container">
        <h2 class="mt-3">Add/Edit ICRM Data</h2>
       
            <input type="hidden" name="icrm_id" value="<?php echo isset($icrm_data['icrm_id']) ? $icrm_data['icrm_id'] : ''; ?>">
            <table class="table">
                <tbody>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="planned_approved">Planned Approved:</label>
                                <select id="planned_approved" name="planned_approved" class="form-control" required>
                                    <option value="">Select Status</option>
                                    <option value="planned" <?php echo isset($icrm_data['planned_approved']) && $icrm_data['planned_approved'] == 'planned' ? 'selected' : ''; ?>>Planned</option>
                                    <option value="actual" <?php echo isset($icrm_data['planned_approved']) && $icrm_data['planned_approved'] == 'actual' ? 'selected' : ''; ?>>Actual</option>
                                </select>
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="budget_adb">Budget ADB:</label>
                                <input type="text" id="budget_adb" name="budget_adb" required class="form-control" value="<?php echo isset($icrm_data['budget_adb']) ? $icrm_data['budget_adb'] : ''; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="adb_clear">ADB Clear:</label>
                                <input type="date" id="adb_clear" name="adb_clear" required class="form-control" value="<?php echo isset($icrm_data['adb_clear']) ? $icrm_data['adb_clear'] : ''; ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="eoi_advert">EOI Advertisement:</label>
                                <input type="date" id="eoi_advert" name="eoi_advert" required class="form-control" value="<?php echo isset($icrm_data['eoi_advert']) ? $icrm_data['eoi_advert'] : ''; ?>">
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="sub_adb">Sub ADB (01):</label>
                                <input type="date" id="sub_adb_01" name="sub_adb_01" required class="form-control" value="<?php echo isset($icrm_data['sub_adb_01']) ? $icrm_data['sub_adb_01'] : ''; ?>">
                            </div>
                        </td>
                  
                        <td>
                            <div class="form-group">
                                <label for="adb_approval_01">ADB Approval (01):</label>
                                <input type="date" id="adb_approval_01" name="adb_approval_01" required class="form-control" value="<?php echo isset($icrm_data['adb_approval_01']) ? $icrm_data['adb_approval_01'] : ''; ?>">
                            </div>
                        </td>
                      
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="sub_adb">Sub ADB (02):</label>
                                <input type="date" id="sub_adb_02" name="sub_adb_02" required class="form-control" value="<?php echo isset($icrm_data['sub_adb_01']) ? $icrm_data['sub_adb_02'] : ''; ?>">
                            </div>
                        </td>
                  
                        <td>
                            <div class="form-group">
                                <label for="adb_approval_01">ADB Approval (02):</label>
                                <input type="date" id="adb_approval_02" name="adb_approval_02" required class="form-control" value="<?php echo isset($icrm_data['adb_approval_02']) ? $icrm_data['adb_approval_02'] : ''; ?>">
                            </div>
                        </td>
                      
                    </tr>

                    <tr>
                        <td>
                            <div class="form-group">
                                <label for="sub_adb">Contract Signing:</label>
                                <input type="date" id="contract_signing" name="contract_signing" required class="form-control" value="<?php echo isset($icrm_data['contract_sign']) ? $icrm_data['contract_sign'] : ''; ?>">
                            </div>
                        </td>
                  
                        <td>
                            <div class="form-group">
                                <label for="adb_approval_01">Intended completion:</label>
                                <input type="date" id="intendedcompletion" name="intendedcompletion" required class="form-control" value="<?php echo isset($icrm_data['intended_completion completion']) ? $icrm_data['intended_completion'] : ''; ?>">
                            </div>
                        </td>
                      
                    </tr>
                    <tr>
                    <td>
                            <div class="form-group">
                                <label for="adb_approval_01">Awarded Amount:</label>
                                <input type="text" id="AwardedAmount" name="AwardedAmount" required class="form-control" value="<?php echo isset($icrm_data['intended_completion completion']) ? $icrm_data['intended_completion'] : ''; ?>">
                            </div>
                        </td>
                        <td>
                            <div class="form-group">
                                <label for="hr_in_package_id">Package:</label>
                                <select id="hr_in_package_id" name="hr_in_package_id" class="form-control" required>
                                    <option value="">Select Package</option>
                                    <?php
                                    // Assuming $db is your database connection
                                    $query = "SELECT hr_in_package_id, package FROM hr_individual_package";
                                    $result = $this->db->query($query)->result();

                                    foreach ($result as $row) {
                                        $selected = isset($icrm_data['hr_in_package_id']) && $icrm_data['hr_in_package_id'] == $row->hr_in_package_id ? 'selected' : '';
                                        echo '<option value="' . $row->hr_in_package_id . '" ' . $selected . '>' . $row->package . '</option>';
                                    }
                                    ?>
                                </select>
                            </div>
                        </td>
                        
                        <td>
                            <!-- Add other fields as needed -->
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <button type="submit" name="submit" class="btn btn-primary mt-3">Save ICRM Data</button>
                        </td>
                    </tr>
                </tbody>
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
        </div>
    </div>
</div>