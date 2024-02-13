<div class="pcoded-content">
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
                        <a href="<?php echo base_url('Hr_staff_position')?>"><button
                                class="btn btn-danger">
                                View Position Records</button></a>
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
                                    <h5>Position Detail List</h5>


                                </div>
                                <div class="card-block">


                                    <div class="dt-responsive table-responsive">
                                        <?php 
    $position=$this->db->query("select * from hr_staff_position as hsp,organization as o
     where hr_staff_id=$pid and hsp.organization_id=o.organization_id")->row();
    
    ?>
                                        <form method="post"
                                            action="<?php echo base_url('hr_staff_position/edit/' . $position->hr_staff_id); ?>">
                                            <label for="organization_id">Organization ID:</label>
                                            <select id="organization_id" name="organization_id" class="form-control" required>
        <option value="<?php echo $position->organization_id; ?>"><?php echo $position->organization_name; ?></option>
        <?php 
    $organizations=$this->db->query("select * from organization")->result();
   
    
    ?>
                   
                    <?php foreach ($organizations as $org) { ?>
                        <option value="<?php echo $org->organization_id; ?>"><?php echo $org->organization_name; ?></option>
                    <?php } ?>
                </select>
                                            <br><br>

                                            <label for="total_position">Total Positions:</label>
                                            <input type="text" class="form-control" id="total_position" name="total_position"
                                                value="<?php echo $position->total_position; ?>" required>
                                            <br><br>

                                            <label for="filled_total">Filled Positions:</label>
                                            <input type="text" class="form-control" id="filled_total" name="filled_total"
                                                value="<?php echo $position->filled_total; ?>" required>
                                            <br><br>

                                            <label for="male">Male Positions:</label>
                                            <input type="text" class="form-control" id="male" name="male"
                                                value="<?php echo $position->male; ?>" required>
                                            <br><br>

                                            <label for="female">Female Positions:</label>
                                            <input type="text" class="form-control" id="female" name="female"
                                                value="<?php echo $position->female; ?>" required>
                                            <br><br>

                                            <label for="remaining">Remaining Positions:</label>
                                            <input type="text" class="form-control" id="remaining" name="remaining"
                                                value="<?php echo $position->remaining; ?>" required>
                                            <br><br>

                                            <input type="submit" name="submit" value="Update Position" class="btn btn-danger">
                                        </form>
                                        </body>

                                        </html>