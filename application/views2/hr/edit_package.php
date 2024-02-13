<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Edit Package</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/package_list') ?>">
                            <button class="btn btn-danger">View Package List</button>
                        </a>
                    </div>
                </div>
                <?php 
                $package=$this->db->query("select * from hr_individual_package as hip,organization as o
                where hr_in_package_id=$award_id and hip.organization_id=o.organization_id")->row();
                                
                                ?>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
                                <form method="post" action="<?php echo base_url('Hr_qcbs/edit_package_record/' . $award_id); ?>">
    <label for="package">Package:</label>
    <input type="text" id="package" name="package" class="form-control" value="<?php echo $package->package; ?>" required><br>

    <label for="package_contract">Package Contract:</label>
    <input type="text" id="package_contract" name="package_contract" class="form-control" value="<?php echo $package->package_contract; ?>" required><br>

    <label for="package_amount">Package Amount:</label>
    <input type="number" id="package_amount" name="package_amount" class="form-control" value="<?php echo $package->package_amount; ?>" required><br>
    <label for="organization_id">Select Organization:</label>
                                        <select id="organization_id" name="organization_id" class="form-control" required>
    <option value="<?php echo $package->organization_id; ?>">
                                                    <?php echo $package->organization_name; ?>
                                            <?php 
                                            $organizations=$this->db->query("select * from organization")->result();
                                            
                                            foreach ($organizations as $organization) { ?>
                                                <option value="<?php echo $organization->organization_id; ?>">
                                                    <?php echo $organization->organization_name; ?>
                                                </option>
                                            <?php } ?>
                                        </select><br>
    <button type="submit" name="submit" class="btn btn-primary">Update Package</button>
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
