<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_pipeline') ?>">
                            <button class="btn btn-danger">View Detail List</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Record</h5>
                                </div>
                                <div class="card-block">
                               
 

    <?php echo validation_errors(); ?>
<?php /*?>
    <?php echo form_open('Hr_pipeline/add'); ?>

    <label for="package">Package:</label>
    <input type="text" name="package" class="form-control" required>
    <br>

    <label for="contract_package">Contract Package:</label>
    <input type="text" name="contract_package" class="form-control" required>
    <br>

    <label for="est_amount_dollar">Estimated Amount (Dollar):</label>
    <input type="text" name="est_amount_dollar" class="form-control" required>
    <br>

    <label for="planned_approved">Planned Approved:</label>
    <select name="planned_approved" class="form-control" required>
        <option value="Planned" >Planned</option>
        <option value="Actual">Actual</option>
    </select>
    <br>

    <label for="ifb">IFB:</label>
    <input type="text" name="ifb" class="form-control" required>
    <br>

    <label for="technical_bid">Technical Bid:</label>
    <input type="text" name="technical_bid" class="form-control" required>
    <br>

    <label for="tber_bid">TBER Bid:</label>
    <input type="text" name="tber_bid" class="form-control" required>
    <br>

    <label for="tber_adb_approval">TBER ADB Approval:</label>
    <input type="text" name="tber_adb_approval" class="form-control" required>
    <br>

    <label for="financial_bid">Financial Bid:</label>
    <input type="text" name="financial_bid" class="form-control" required>
    <br>

    <label for="pber_adb">PBER ADB:</label>
    <input type="text" name="pber_adb" class="form-control" required>
    <br>

    <label for="pber_approval_adb">PBER Approval ADB:</label>
    <input type="text" name="pber_approval_adb" class="form-control" required>
    <br>

    <label for="contract_award">Contract Award:</label>
    <input type="date" name="contract_award" class="form-control" required>
    <br>

    <label for="remarks">Remarks:</label>
    <textarea name="remarks" class="form-control"></textarea>
    <br>

    <input type="submit" value="Add New Record" class="btn btn-danger">
    
    <?php echo form_close(); ?>
    <?php */?>

<?php echo form_open('Hr_pipeline/add'); ?>

<table class="table">
    <tbody>
        <tr>
            <td>
                <label for="package">Package:</label>
                <input type="text" name="package" class="form-control" required>
            </td>
            <td>
                <label for="contract_package">Contract Package:</label>
                <input type="text" name="contract_package" class="form-control" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="est_amount_dollar">Estimated Amount (Dollar):</label>
                <input type="text" name="est_amount_dollar" class="form-control" required>
            </td>
            <td>
                <label for="planned_approved">Planned Approved:</label>
                <select name="planned_approved" class="form-control" required>
                    <option value="Planned">Planned</option>
                    <option value="Actual">Actual</option>
                </select>
            </td>
        </tr>
        <tr>
            <td>
                <label for="ifb">IFB:</label>
                <input type="text" name="ifb" class="form-control" required>
            </td>
            <td>
                <label for="technical_bid">Technical Bid:</label>
                <input type="text" name="technical_bid" class="form-control" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="tber_bid">TBER Bid:</label>
                <input type="text" name="tber_bid" class="form-control" required>
            </td>
            <td>
                <label for="tber_adb_approval">TBER ADB Approval:</label>
                <input type="text" name="tber_adb_approval" class="form-control" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="financial_bid">Financial Bid:</label>
                <input type="text" name="financial_bid" class="form-control" required>
            </td>
            <td>
                <label for="pber_adb">PBER ADB:</label>
                <input type="text" name="pber_adb" class="form-control" required>
            </td>
        </tr>
        <tr>
            <td>
                <label for="pber_approval_adb">PBER Approval ADB:</label>
                <input type="text" name="pber_approval_adb" class="form-control" required>
            </td>
            <td>
                <label for="contract_award">Contract Award:</label>
                <input type="date" name="contract_award" class="form-control" required>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <label for="remarks">Remarks:</label>
                <textarea name="remarks" class="form-control"></textarea>
            </td>
        </tr>
    </tbody>
</table>

<input type="submit" value="Add New Record" class="btn btn-danger">
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
