<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Hr_non_consulting_services/add_form') ?>">
                            <button class="btn btn-danger">Add New Record</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">



                                  
                               
                    
   
                                <div class="dt-responsive table-responsive">     
                                <table id="awardedTable" class="table table-bordered nowrap">
        <tr>
            <th>ID</th>
            <th>Subproject</th>
            <th>Contract Name</th>
            <th>Contractor Name</th>
            <th>Contract Type</th>
            <th>Award Date</th>
            <th>Completion Date (Original)</th>
            <th>Completion Date (Revised)</th>
            <th>Currency</th>
            <th>Contract Amount (Original)</th>
            <th>Contract Amount (Revised)</th>
            <th>Expenditure</th>
            <th>Contract Status</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($records as $record) : ?>
            <tr>
                <td><?php echo $record->non_consul_id; ?></td>
                <td><?php echo $record->subproject_name; ?></td>
                <td><?php echo $record->contract_name; ?></td>
                <td><?php echo $record->emp_name; ?></td>
                <td><?php echo $record->contract_type; ?></td>
                <td><?php echo $record->award_date; ?></td>
                <td><?php echo $record->completion_date_org; ?></td>
                <td><?php echo $record->completion_date_rev; ?></td>
                <td><?php echo $record->currency; ?></td>
                <td><?php echo $record->contract_amount_org; ?></td>
                <td><?php echo $record->contract_amount_rev; ?></td>
                <td><?php echo $record->expenditure; ?></td>
                <td><?php echo $record->contract_status; ?></td>
                <td>
                    <a href="<?php echo site_url('hr_non_consulting_services/edit/' . $record->non_consul_id); ?>">Edit</a>
                    <a href="<?php echo site_url('hr_non_consulting_services/delete/' . $record->non_consul_id); ?>"
                        onclick="return confirm('Are you sure you want to delete this record?')">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>





                                </div>
                                </div>
                                </div>
                                </div>
                                    

