<!-- display_records_view.php -->
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Other page content -->
        <div class="page-body">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>QCBS Detail List</h5>
                            <a href="<?php echo base_url('Hr_qcbs/add_activity'); ?>">
                            <button class="btn btn-danger">Add New Record</button>
                        </a>
                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table id="simpletable" class="table table-bordered nowrap">
                                    <tr>
                                        <th>Planned Approved</th>
                                        <th>Sub ADB</th>
                                        <th>ADB Approval</th>
                                        <th>EOI Advertisement</th>
                                        <th>HR Consulting Firm ID</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php foreach ($records as $record) { ?>
                                        <tr>
                                            <td><?php echo $record->planned_approved; ?></td>
                                            <td><?php echo $record->sub_adb; ?></td>
                                            <td><?php echo $record->adb_approval; ?></td>
                                            <td><?php echo $record->eoi_advert; ?></td>
                                            <td><?php echo $record->package; ?>-<?php echo $record->contract_package; ?></td>
                                            <td>
                                                <a href="<?php echo base_url('hr_qcbs/edit_qcbs_forms/' . $record->qcbs_id); ?>" class="btn btn-primary">Edit</a>
                                                <a href="<?php echo base_url('hr_qcbs/delete/' . $record->qcbs_id); ?>" class="btn btn-danger">Delete</a>
                                            </td>
                                        </tr>
                                    <?php } ?>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
