<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Certificate_tax/add_certificate') ?>">
                            <button class="btn btn-danger">Add New Record</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">

                                <table id="simpletable" class="table table-bordered nowrap">
    <thead>
        <tr>
        <th>Verified By</th>
        <th>Add/Less</th>
            <th>Attribute</th>
            <th>Option</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($certificate_tax as $certificate_tax_item): ?>
            <tr>
            <td><?php if($certificate_tax_item['ctp_flag']==1){
echo "Engineer";

            }else{
                echo "PMU";
            } ?></td>
                <td><?php echo $certificate_tax_item['add_less']; ?></td>
                <td><?php echo $certificate_tax_item['ctp_attribute']; ?>%</td>
                <td><?php echo $certificate_tax_item['ctp_option']; ?></td>
                <td>
                    <a href="<?php echo base_url('Certificate_tax/edit_form/'.$certificate_tax_item['ctp_id']); ?>" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>




                                </div></div></div></div></div>



