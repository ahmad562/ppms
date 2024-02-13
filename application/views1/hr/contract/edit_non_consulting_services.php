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



                                        <form
                                            action="<?php echo site_url('Hr_non_consulting_services/update_record/' . $record->non_consul_id); ?>"
                                            method="post">


                                            <table class="table">
    <tr>
        <td>
            <label for="subproject_id">Subproject</label>
            <select id="subproject_id" name="subproject_id" class="form-control" required>
                <?php $edit_subproject = $this->db->query("select * from ppms_subproject where subproject_id=$record->subproject_id")->row();?>
                <option value="<?php echo $edit_subproject->subproject_id?>">
                    <?php echo $edit_subproject->subproject_name?>
                </option>
                <?php 
                $query = $this->db->get('ppms_subproject');
                $subprojects = $query->result();
                foreach ($subprojects as $subproject) : ?>
                    <option value="<?php echo $subproject->subproject_id; ?>">
                        <?php echo $subproject->subproject_name; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </td>
        <td>
            <label for="contract_name">Contract Name:</label>
            <input type="text" id="contract_name" name="contract_name" class="form-control" required value="<?php echo $record->contract_name; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="contractor_id">Contractor:</label>
            <select id="contractor_id" name="contractor_id" class="form-control" required>
                <?php 
                $query_edit = $this->db->query("select * from emp where organization_id=5 and emp_id=$record->contractor_id")->row();
                ?>
                <option value="<?php echo $query_edit->emp_id; ?>"><?php echo $query_edit->emp_name; ?></option>
                <?php 
                $query = $this->db->query("select * from emp where organization_id=5");
                $subprojects = $query->result();
                foreach ($subprojects as $subproject) : ?>
                    <option value="<?php echo $subproject->emp_id; ?>">
                        <?php echo $subproject->emp_name; ?>
                    </option>
                <?php endforeach; ?>
            </select>
        </td>
        <td>
            <label for="contract_type">Contract Type:</label>
            <input type="text" id="contract_type" name="contract_type" class="form-control" value="<?php echo $record->contract_type; ?>">
        </td>
    </tr>
    <!-- Add more rows as needed for the remaining fields -->
    <tr>
        <!-- Another pair of fields in a row -->
    </tr>

    <tr>
        <td>
            <label for="award_date">Award Date:</label>
            <input type="date" id="award_date" name="award_date" class="form-control" value="<?php echo $record->award_date; ?>">
        </td>
        <td>
            <label for="completion_date_org">Completion Date (Original):</label>
            <input type="date" id="completion_date_org" name="completion_date_org" class="form-control" value="<?php echo $record->completion_date_org; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="completion_date_rev">Completion Date (Revised):</label>
            <input type="date" id="completion_date_rev" name="completion_date_rev" class="form-control" value="<?php echo $record->completion_date_rev; ?>">
        </td>
        <td>
            <label for="currency">Currency:</label>
            <input type="text" id="currency" name="currency" class="form-control" value="<?php echo $record->currency; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="contract_amount_org">Contract Amount (Original):</label>
            <input type="text" id="contract_amount_org" name="contract_amount_org" class="form-control" value="<?php echo $record->contract_amount_org; ?>">
        </td>
        <td>
            <label for="contract_amount_rev">Contract Amount (Revised):</label>
            <input type="text" id="contract_amount_rev" name="contract_amount_rev" class="form-control" value="<?php echo $record->contract_amount_rev; ?>">
        </td>
    </tr>
    <tr>
        <td>
            <label for="expenditure">Expenditure:</label>
            <input type="number" id="expenditure" name="expenditure" class="form-control" value="<?php echo $record->expenditure; ?>">
        </td>
        <td>
            <label for="contract_status">Contract Status:</label>
            <input type="text" id="contract_status" name="contract_status" class="form-control" value="<?php echo $record->contract_status; ?>">
        </td>
    </tr>
</table>

<button type="submit" name="submit" class="btn btn-primary">Update</button>





<?php /*?>
                                            <label for="subproject_id">Subproject</label>
                                            <select id="subproject_id" name="subproject_id" class="form-control"
                                                required>
                <?php $edit_subproject=$this->db->query("select * from ppms_subproject where subproject_id=$record->subproject_id")->row();?>
                                                <option value="<?php echo $edit_subproject->subproject_id?>">
                                                <?php echo $edit_subproject->subproject_name?></option>

                                                <?php 
    $query = $this->db->get('ppms_subproject');
    $subprojects=$query->result();
    foreach ($subprojects as $subproject) : ?>
                                                <option value="<?php echo $subproject->subproject_id; ?>">
                                                    <?php echo $subproject->subproject_name; ?></option>
                                                <?php endforeach; ?>
                                            </select>


                                            <label for="contract_name">Contract Name:</label>
                                            <input type="text" id="contract_name" name="contract_name"
                                                class="form-control" required
                                                value="<?php echo $record->contract_name; ?>"><br>

                                            <label for="contractor_id">Contractor:</label>

                                            <select id="contractor_id" name="contractor_id" class="form-control"
                                                required>
    <?php 
    $query_edit = $this->db->query("select * from emp where organization_id=5 and emp_id=$record->contractor_id")->row();
    ?>
    <option value="<?php echo $query_edit->emp_id; ?>"><?php echo $query_edit->emp_name; ?></option>
                                                
                                                <?php 
    $query = $this->db->query("select * from emp where organization_id=5");
    $subprojects=$query->result();
    foreach ($subprojects as $subproject) : ?>
                                                <option value="<?php echo $subproject->emp_id; ?>">
                                                    <?php echo $subproject->emp_name; ?></option>
                                                <?php endforeach; ?>
                                            </select><br>

                                                

                                            <label for="contract_type">Contract Type:</label>
                                            <input type="text" id="contract_type" name="contract_type"
                                                class="form-control" value="<?php echo $record->contract_type; ?>"><br>

                                            <label for="award_date">Award Date:</label>
                                            <input type="date" id="award_date" name="award_date" class="form-control"
                                                value="<?php echo $record->award_date; ?>"><br>

                                            <label for="completion_date_org">Completion Date (Original):</label>
                                            <input type="date" id="completion_date_org" name="completion_date_org"
                                                class="form-control"
                                                value="<?php echo $record->completion_date_org; ?>"><br>

                                            <label for="completion_date_rev">Completion Date (Revised):</label>
                                            <input type="date" id="completion_date_rev" name="completion_date_rev"
                                                class="form-control"
                                                value="<?php echo $record->completion_date_rev; ?>"><br>

                                            <label for="currency">Currency:</label>
                                            <input type="text" id="currency" name="currency" class="form-control"
                                                value="<?php echo $record->currency; ?>"><br>

                                            <label for="contract_amount_org">Contract Amount (Original):</label>
                                            <input type="text" id="contract_amount_org" name="contract_amount_org"
                                                class="form-control"
                                                value="<?php echo $record->contract_amount_org; ?>"><br>

                                            <label for="contract_amount_rev">Contract Amount (Revised):</label>
                                            <input type="text" id="contract_amount_rev" name="contract_amount_rev"
                                                class="form-control"
                                                value="<?php echo $record->contract_amount_rev; ?>"><br>

                                            <label for="expenditure">Expenditure:</label>
                                            <input type="number" id="expenditure" name="expenditure"
                                                class="form-control" value="<?php echo $record->expenditure; ?>"><br>

                                            <label for="contract_status">Contract Status:</label>
                                            <input type="text" id="contract_status" name="contract_status"
                                                class="form-control"
                                                value="<?php echo $record->contract_status; ?>"><br>

                                            <button type="submit" name="submit" class="btn btn-primary">Update</button>

                                            <?php */?>
                                        </form>






                                    </div>
                                </div>
                            </div>
                        </div>