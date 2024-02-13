<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title"></div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_pipeline/add_form') ?>">
                            <button class="btn btn-danger">Add Contract Pipline</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h5> Pipeline Contract Detail List</h5>
                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                       
   
    
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
        <thead>
            <tr>
                <th>Package</th>
                <th>Contract Package</th>
                <th>Estimated Amount (Dollar)</th>
                <th>Planned Approved</th>
                <th>IFB</th>
                <th>Technical Bid</th>
                <th>TBER Bid</th>
                <th>TBER ADB Approval</th>
                <th>Financial Bid</th>
                <th>PBER ADB</th>
                <th>PBER Approval ADB</th>
                <th>Contract Award</th>
                <th>Remarks</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pipelines as $pipeline) : ?>
                <tr>
                    <td><?= $pipeline->package; ?></td>
                    <td><?= $pipeline->contract_package; ?></td>
                    <td><?= $pipeline->est_amount_dollar; ?></td>
                    <td><?= $pipeline->planned_approved; ?></td>
                    <td><?= $pipeline->ifb; ?></td>
                    <td><?= $pipeline->technical_bid; ?></td>
                    <td><?= $pipeline->tber_bid; ?></td>
                    <td><?= $pipeline->tber_adb_approval; ?></td>
                    <td><?= $pipeline->financial_bid; ?></td>
                    <td><?= $pipeline->pber_adb; ?></td>
                    <td><?= $pipeline->pber_approval_adb; ?></td>
                    <td><?= $pipeline->contract_award; ?></td>
                    <td><?= $pipeline->remarks; ?></td>
                    <td>
                        <a href="<?= base_url('Hr_pipeline/edit_form/' . $pipeline->pipeline_id); ?>">Edit</a> |
                        <a href="<?= base_url('Hr_pipeline/delete/' . $pipeline->pipeline_id); ?>">Delete</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</body>
</html>

















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
