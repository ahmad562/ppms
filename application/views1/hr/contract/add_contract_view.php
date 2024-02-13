<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_consultancy_contracts') ?>">
                            <button class="btn btn-danger">View Contract Detail</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">



                                <div class="dt-responsive table-responsive">     
                               
    <form action="<?php echo base_url('Hr_consultancy_contracts/add'); ?>" method="post">
       <?php /*?> <label for="package">Package:</label>
        <input type="text" id="package" name="package" class="form-control" required><br><br>

        <label for="firm_indi_id">Firm/Individual:</label>
       
        <select id="firm_indi_id" name="firm_indi_id" class="form-control" required>
            <option value="Individual">Individual</option>
            <option value="Firm">Firm</option>
        </select>
        <br><br>

        <label for="emp_id">Employee:</label>
        <select id="emp_id" name="emp_id" class="form-control" required>
            <option value="">Select Employee</option>
            <?php 
            $query = $this->db->select('*')->from('ppms_service_tbl')->get();
            $employee_ids=$query->result();
             foreach ($employee_ids as $employee) {
                    echo '<option value="' . $employee->service_id . '">' . $employee->s_fullname . '</option>';
                }
             ?>
        </select>
        
        <br><br>

        <label for="contract_award">Contract Award:</label>
        <input type="date" id="contract_award" name="contract_award" class="form-control" required><br><br>

        <label for="completion_date">Completion Date:</label>
        <input type="date" id="completion_date" name="completion_date" class="form-control" required><br><br>

        <label for="revised_date">Revised Date:</label>
        <input type="date" id="revised_date" name="revised_date" class="form-control" required><br><br>

        <label for="currency">Currency:</label>
        <input type="text" id="currency" name="currency" class="form-control" required><br><br>

        <label for="cont_amt_orig">Original Amount:</label>
        <input type="number" id="cont_amt_orig" name="cont_amt_orig" class="form-control" required><br><br>

        <label for="cont_amt_revised">Revised Amount:</label>
        <input type="number" id="cont_amt_revised" name="cont_amt_revised" class="form-control" required><br><br>

        <label for="disbursement">Disbursement:</label>
        <input type="number" id="disbursement" name="disbursement" class="form-control" required><br><br>

        <label for="status_id">Status:</label>
        <select id="status_id" name="status_id" class="form-control" required>
            <option value="1">Active</option>
            <option value="0">In Active</option>
            <?php /*
            if (!empty($statuses)) {
                foreach ($statuses as $status) {
                    echo '<option value="' . $status->status_id . '">' . $status->status_name . '</option>';
                }
            } 

        </select>
        <br>

        <input type="submit" name="submit" value="Add Contract" class="btn btn-danger">

        <?php */?>
         <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="package">Package:</label>
                                                    <input type="text" id="package" name="package" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="firm_indi_id">Firm/Individual:</label>
                                                    <select id="firm_indi_id" name="firm_indi_id" class="form-control" required>
                                                        <option value="Individual">Individual</option>
                                                        <option value="Firm">Firm</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="emp_id">Employee:</label>
                                                    <select id="emp_id" name="emp_id" class="form-control" required>
                                                        <option value="">Select Employee</option>
                                                        <?php 
                                                        $query = $this->db->select('*')->from('ppms_service_tbl')->get();
                                                        $employee_ids = $query->result();
                                                        foreach ($employee_ids as $employee) {
                                                            echo '<option value="' . $employee->service_id . '">' . $employee->s_fullname . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <label for="contract_award">Contract Award:</label>
                                                    <input type="date" id="contract_award" name="contract_award" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="completion_date">Completion Date:</label>
                                                    <input type="date" id="completion_date" name="completion_date" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="revised_date">Revised Date:</label>
                                                    <input type="date" id="revised_date" name="revised_date" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="currency">Currency:</label>
                                                    <input type="text" id="currency" name="currency" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="cont_amt_orig">Original Amount:</label>
                                                    <input type="text" id="cont_amt_orig" name="cont_amt_orig" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="cont_amt_revised">Revised Amount:</label>
                                                    <input type="text" id="cont_amt_revised" name="cont_amt_revised" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="disbursement">Disbursement:</label>
                                                    <input type="text" id="disbursement" name="disbursement" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="status_id">Status:</label>
                                                    <select id="status_id" name="status_id" class="form-control" required>
                                                        <option value="1">Active</option>
                                                        <option value="0">Inactive</option>
                                                        <!-- Add options dynamically if needed -->
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <input type="submit" name="submit" value="Add Contract" class="btn btn-danger">
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
    </form>





                                </div>
                                </div>
                                </div>
                                </div>
                                    

