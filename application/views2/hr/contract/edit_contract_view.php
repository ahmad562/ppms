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

                                        <form action="<?php echo base_url('Hr_consultancy_contracts/edit/'.$contract_data['hr_cid']); ?>"
                                            method="post">

                                            <?php echo validation_errors(); ?>
                                          
                                            

                                            <table class="table">
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label for="package">Package:</label>
                                                    <input type="text" id="package" name="package" value="<?php echo isset($contract_data['package']) ? $contract_data['package'] : ''; ?>" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="firm_indi_id">Firm/Individual:</label>
                                                    <select id="firm_indi_id" name="firm_indi_id" class="form-control" required>
                                                    <option value="Individual"
                                                                    <?php echo isset($contract_data['firm_indi_id']) && $contract_data['firm_indi_id'] == 'Individual' ? 'selected' : ''; ?>>
                                                                    Individual</option>
                                                                <option value="Firm"
                                                                    <?php echo isset($contract_data['firm_indi_id']) && $contract_data['firm_indi_id'] == 'Firm' ? 'selected' : ''; ?>>
                                                                    Firm</option>
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
                                                            $selected = isset($contract_data['emp_id']) && $contract_data['emp_id'] == $employee->service_id ? 'selected' : '';
                                                            echo '<option value="' . $employee->service_id . '" ' . $selected . '>' . $employee->s_fullname . '</option>';
                                                        }
                                                        ?>
                                                    </select>
                                                </td>
                                                <td>
                                                    <label for="contract_award">Contract Award:</label>
                                        <input type="date" value="<?php echo isset($contract_data['contract_award']) ? $contract_data['contract_award'] : ''; ?>" id="contract_award" name="contract_award" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="completion_date">Completion Date:</label>
                                        <input type="date" value="<?php echo isset($contract_data['completion_date']) ? $contract_data['completion_date'] : ''; ?>"  id="completion_date" name="completion_date" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="revised_date">Revised Date:</label>
                                                    <input type="date" value="<?php echo isset($contract_data['revised_date']) ? $contract_data['revised_date'] : ''; ?>"  id="revised_date" name="revised_date" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="currency">Currency:</label>
                                                    <input type="text" value="<?php echo isset($contract_data['currency']) ? $contract_data['currency'] : ''; ?>"  id="currency" name="currency" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="cont_amt_orig">Original Amount:</label>
                                                    <input type="text" value="<?php echo isset($contract_data['cont_amt_orig']) ? $contract_data['cont_amt_orig'] : ''; ?>"  id="cont_amt_orig" name="cont_amt_orig" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label for="cont_amt_revised">Revised Amount:</label>
                                                    <input type="text" value="<?php echo isset($contract_data['cont_amt_revised']) ? $contract_data['cont_amt_revised'] : ''; ?>"  id="cont_amt_revised" name="cont_amt_revised" class="form-control" required>
                                                </td>
                                                <td>
                                                    <label for="disbursement">Disbursement:</label>
                                                    <input type="text" value="<?php echo isset($contract_data['disbursement']) ? $contract_data['disbursement'] : ''; ?>"  id="disbursement" name="disbursement" class="form-control" required>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <label for="status_id">Status:</label>
                                                    <select id="status_id" name="status_id" class="form-control" required>
                                                    <option value="1"
                                                                    <?php echo isset($contract_data['status_id']) && $contract_data['status_id'] == '1' ? 'selected' : ''; ?>>
                                                                    Active</option>
                                                                <option value="0"
                                                                    <?php echo isset($contract_data['status_id']) && $contract_data['status_id'] == '0' ? 'selected' : ''; ?>>
                                                                    Inactive</option>
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
                                            <?php echo form_close(); ?>
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
</div>