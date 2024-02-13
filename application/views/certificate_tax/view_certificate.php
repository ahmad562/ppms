<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Certificate_tax/tax_detail') ?>">
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
        
        
            <th>Tax</th>
        
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($certificate_tax as $certificate_tax_item): ?>
           
                
                <td><?php echo $certificate_tax_item['ctp_option']; ?></td>
               
                <td>
                    <a href="<?php echo base_url('Certificate_tax/edit_form/'.$certificate_tax_item['ctp_id']); ?>" class="btn btn-primary">Edit</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>




                                </div></div></div></div></div>



