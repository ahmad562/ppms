<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_non_consulting_services'); ?>">
                            <button class="btn btn-danger">View Records</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">

                                    <div class="dt-responsive table-responsive">

                                        <form action="<?php echo site_url('hr_non_consulting_services/add'); ?>"
                                            method="post">
                                            <table class="table">
                                                <tr>
                                                    <td>
                                            <label for="subproject_id">Subproject ID:</label>
</td><td>
                                            <select id="subproject_id" name="subproject_id" class="form-control"
                                                required>
                                                <option value="">Select Subproject</option>
                                                <?php 
    $query = $this->db->get('ppms_subproject');
    $subprojects=$query->result();
    foreach ($subprojects as $subproject) : ?>
                                                <option value="<?php echo $subproject->subproject_id; ?>">
                                                    <?php echo $subproject->subproject_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>
    </td><td>
                                            <label for="contract_name">Contract Name:</label>
                                            </td><td>

                                            <input type="text" id="contract_name" name="contract_name"
                                                class="form-control" required><br>
</td><td>
    </tr>
    <tr>

    </td>
    <td>
                                            <label for="contractor_id">Contractor:</label>
                                        </td><td>

                                            <select id="contractor_id" name="contractor_id" class="form-control"
                                                required>
                                                <option value="">Select Contractor</option>
                                                <?php 
    $query = $this->db->query("select * from emp where organization_id=5");
    $subprojects=$query->result();
    foreach ($subprojects as $subproject) : ?>
                                                <option value="<?php echo $subproject->emp_id; ?>">
                                                    <?php echo $subproject->emp_name; ?></option>
                                                <?php endforeach; ?>
                                            </select><br>
                                            </td>
                                        
                                                <td>

                                            <label for="contract_type">Contract Type:</label>
                                          </td>
                                            <td>
                                            <input type="text" id="contract_type" name="contract_type"
                                                class="form-control"><br>
                                                </td>
                                            </tr>
                                            
                                            
                                            
                                            <tr>
                                                <td>
                                            <label for="award_date">Award Date:</label></td><td>
                                            <input type="date" id="award_date" name="award_date"
                                                class="form-control"><br>
                                                </td>
                                          
                                                
                                                <td>
                                            <label for="completion_date_org">Completion Date (Original):</label>
                                            </td>
                                            <td>
                                            <input type="date" id="completion_date_org" name="completion_date_org"
                                                class="form-control"><br>
                                                </td>
    </tr>
    <tr>
                                                <td>

                                            <label for="completion_date_rev">Completion Date (Revised):</label>
                                        </td>
                                            <td>

                                            <input type="date" id="completion_date_rev" name="completion_date_rev"
                                                class="form-control"><br>
                                                </td>
                                            
                                           <td>
                                                
                                            <label for="currency">Currency:</label></td><td>

                                            <input type="text" id="currency" name="currency" class="form-control"><br>
                                            </td>
    </tr>
    <tr>
                                            <td>
                                            <label for="contract_amount_org">Contract Amount (Original):</label></td><td>
                                            <input type="text" id="contract_amount_org" name="contract_amount_org"
                                                class="form-control"><br>
                                                </td>
                                           <td>
                                            <label for="contract_amount_rev">Contract Amount (Revised):</label></td>
                                            <td>
                                            <input type="text" id="contract_amount_rev" name="contract_amount_rev"
                                                class="form-control"><br>
                                                </td><td>
    </tr>
    <tr><td>
                                            <label for="expenditure">Expenditure:</label>
                                            </td><td>
                                            <input type="number" id="expenditure" name="expenditure"
                                                class="form-control"><br>
                                                </td>
    
                                                
                                                <td>
                                            <label for="contract_status">Contract Status:</label></td><td>

                                            <select id="contract_status" name="contract_status" class="form-control"
                                                required>
                                                <option value="">Select Contract Status</option>
                                                <option value="Active">Active</option>
                                                <option value="Inactive">Inactive</option>
                                            </select><br>
                                            </td></tr><tr><td>
                                            <button type="submit" name="submit" class="btn btn-primary">Add</button>
                                            </td></tr>
                                            </table>
                                        </form>






                                    </div>
                                </div>
                            </div>
                        </div>