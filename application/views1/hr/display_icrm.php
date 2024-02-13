<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_qcbs/add_icrms') ?>">
                            <button class="btn btn-danger">Add ICRM Data</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5>Package Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    <table id="awardedTable" class="table table-bordered nowrap">
                                    <thead>
                                    <tr>
            <th>Package</th>
            <th>Planned Approved</th>

            <th>Budget ADB</th>
            <th>ADB Clear</th>
            <th>EOI Advert</th>
            <th>Sub ADB (01)</th>
            <th>ADB Approval (01)</th>

          
           
            <th>Sub ADB (02)</th>
            <th>ADB Approval (02)</th>
            <th>Contract Sign</th>
            <th>Intended Completion</th>
            <th>Awarded Amount</th>
             <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            $i=1;
            foreach ($records as $icrm) { ?>
            <tr>
                <td><?php echo $icrm->package; ?></td>
               <td><?= $icrm->planned_approved; ?></td>
                <td><?= $icrm->budget_adb; ?></td>
                <td><?= $icrm->adb_clear; ?></td>
                <td><?= $icrm->eoi_advert; ?></td>
                <td><?= $icrm->sub_adb_01; ?></td>
                <td><?= $icrm->adb_approval_01; ?></td>
               
              
               
                <td><?= $icrm->sub_adb_02; ?></td>
                <td><?= $icrm->adb_approval_02; ?></td>
                <td><?= $icrm->contract_sign; ?></td>
                <td><?= $icrm->intended_completion; ?></td>
                <td><?= $icrm->awarded_amount; ?></td>
                <td>
                                                        <a href="<?php echo base_url('Hr_qcbs/edit_icrms/' . $icrm->icrm_id); ?>"
                                                            class="btn btn-primary">Edit</a>
                                                        <a href="<?php echo base_url('Hr_qcbs/delete_icrms/' . $icrm->icrm_id); ?>"
                                                            class="btn btn-danger">Delete</a>
                                                    </td>
            </tr>
            <?php 
        $i++;
        } ?>
        </tbody>
                                    </table>
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
