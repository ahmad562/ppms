<div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>Display status</h4> -->


                            </div>
                            <div class="page-header-breadcrumb">
                            <a href="<?php echo base_url('Hr_staff_position/add_position'); ?>"><button class="btn btn-danger">
                            Add New Position</button>
                            </a>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">

                                                            <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Positions Detail List</h5>


                                        </div>
                                        <div class="card-block">
      
        
                                        <div class="dt-responsive table-responsive">



<table id="simpletable" class="table  table-bordered  nowrap">
    <tr>
        <th>Organization</th>
        <th>Total Positions</th>
        <th>Filled Positions</th>
        <th>Male</th>
        <th>Female</th>
        <th>Remaining Positions</th>
        <th>Action</th>
    </tr>
    <?php foreach ($positions as $position) { ?>
        <tr>
            <td><?php echo $position->organization_name; ?></td>
            <td><?php echo $position->total_position; ?></td>
            <td><?php echo $position->filled_total; ?></td>
            <td><?php echo $position->male; ?></td>
            <td><?php echo $position->female; ?></td>
            <td><?php echo $position->remaining; ?></td>
            <td>
                <a href="<?php echo base_url('hr_staff_position/edit_position/' . $position->hr_staff_id); ?>">Edit</a>
                <a href="<?php echo base_url('hr_staff_position/delete/' . $position->hr_staff_id); ?>">Delete</a>
            </td>
        </tr>
    <?php } ?>
</table>

</div>
</div>
</div>

