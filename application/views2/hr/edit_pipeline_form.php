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
                                    <h5>Edit Record</h5>
                                </div>
                                <div class="card-block">
                               
 

                               

    <?php echo validation_errors(); ?>

    <?php echo form_open('Hr_pipeline/edit/' . $pipeline->pipeline_id); ?>

    <label for="package">Package:</label>
    <input type="text" name="package" class="form-control" value="<?php echo set_value('package', $pipeline->package); ?>" required>
    <br>

    <label for="contract_package">Contract Package:</label>
    <input type="text" name="contract_package" class="form-control" value="<?php echo set_value('contract_package', $pipeline->contract_package); ?>" required>
    <br>

    <label for="est_amount_dollar">Estimated Amount (Dollar):</label>
    <input type="number" name="est_amount_dollar" class="form-control" value="<?php echo set_value('est_amount_dollar', $pipeline->est_amount_dollar); ?>" required>
    <br>

    <label for="planned_approved">Planned Approved:</label>
    <select name="planned_approved" class="form-control" required>
        <option value="Planned" <?php echo set_select('planned_approved', 'Planned', ($pipeline->planned_approved == 'Planned')); ?>>Planned</option>
        <option value="Actual" <?php echo set_select('planned_approved', 'Actual', ($pipeline->planned_approved == 'Actual')); ?>>Actual</option>
    </select>
    <br>

    <label for="ifb">IFB:</label>
    <input type="text" name="ifb" class="form-control" value="<?php echo set_value('ifb', $pipeline->ifb); ?>" required>
    <br>

    <label for="technical_bid">Technical Bid:</label>
    <input type="text" name="technical_bid" class="form-control" value="<?php echo set_value('technical_bid', $pipeline->technical_bid); ?>" required>
    <br>

    <label for="tber_bid">TBER Bid:</label>
    <input type="text" name="tber_bid" class="form-control" value="<?php echo set_value('tber_bid', $pipeline->tber_bid); ?>" required>
    <br>

    <label for="tber_adb_approval">TBER ADB Approval:</label>
    <input type="text" name="tber_adb_approval" class="form-control" value="<?php echo set_value('tber_adb_approval', $pipeline->tber_adb_approval); ?>" required>
    <br>

    <label for="financial_bid">Financial Bid:</label>
    <input type="text" name="financial_bid" class="form-control" value="<?php echo set_value('financial_bid', $pipeline->financial_bid); ?>" required>
    <br>

    <label for="pber_adb">PBER ADB:</label>
    <input type="text" name="pber_adb" class="form-control" value="<?php echo set_value('pber_adb', $pipeline->pber_adb); ?>" required>
    <br>

    <label for="pber_approval_adb">PBER Approval ADB:</label>
    <input type="text" name="pber_approval_adb" class="form-control" value="<?php echo set_value('pber_approval_adb', $pipeline->pber_approval_adb); ?>" required>
    <br>

    <label for="contract_award">Contract Award:</label>
    <input type="date" name="contract_award" class="form-control" value="<?php echo set_value('contract_award', $pipeline->contract_award); ?>" required>
    <br>

    <label for="remarks">Remarks:</label>
    <textarea name="remarks" class="form-control"><?php echo set_value('remarks', $pipeline->remarks); ?></textarea>
    <br>

    <input type="submit" class="btn btn-danger" value="Update Pipeline">
    
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
