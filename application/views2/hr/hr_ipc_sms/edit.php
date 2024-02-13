<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Edit SMS for IPC Employee</h4>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>SMS IPC Employee Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        
        <tr>
            <th>ID</th>
            <th>Employee</th>
            <th>Organization</th>
            <th>Phone Number</th>
            <th>Action</th>
        </tr>
        <?php foreach ($record as $record): ?>
            <tr>
                <td><?php echo $record->hr_ipc_sms_id; ?></td>
                <td><?php echo $record->s_fullname; ?></td>
                <td><?php echo $record->organization_name; ?></td>
                <td><?php echo $record->phone_no; ?></td>
                <td>
                    <a href="<?php echo base_url('Hr_ipc_sms/edit/' . $record->hr_ipc_sms_id); ?>">Edit</a>
                    <a href="<?php echo base_url('Hr_ipc_sms/delete/' . $record->hr_ipc_sms_id); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->


<?php  
$this->db->select('*');
        $this->db->from('hr_ipc_sms');
        $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
        $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
        $this->db->where('hr_ipc_sms.hr_ipc_sms_id', $id);
        
        // Use row_array for single record query
        $recordSingle=$this->db->get()->row();?>


                        </div>



                        <div class="col-sm-6">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5> Add HR IPC SMS Record</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Hr_ipc_sms/edit/'.$recordSingle->hr_ipc_sms_id)?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">


                                          
    <table class="table">
        <tr>
            <td><label for="emp_id">Employee:</label></td>
            <td>
                <select id="emp_id" name="emp_id" required class="form-control">
                    <option value="">Select Employee</option>
                    <?php 
                    $employee_ids = $this->db->query("select * from ppms_service_tbl where s_fullname !=''")->result();
                    foreach ($employee_ids as $employee): ?>
                        <option value="<?php echo $employee->service_id; ?>" <?php echo ($employee->service_id == $recordSingle->service_id) ? 'selected' : ''; ?>>
                            <?php echo $employee->s_fullname; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="org_id">Organization:</label></td>
            <td>
                <select id="org_id" name="org_id" required class="form-control">
                  
                    <?php 
                    $organizations = $this->db->query("select * from organization")->result();
                    foreach ($organizations as $organization): ?>
                        <option value="<?php echo $organization->organization_id; ?>" <?php echo ($organization->organization_id == $recordSingle->org_id) ? 'selected' : ''; ?>>
                            <?php echo $organization->organization_name; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </td>
        </tr>
        <tr>
            <td><label for="phone_no">Phone Number:</label></td>
            <td><input type="text" id="phone_no" name="phone_no" value="<?php echo $recordSingle->phone_no; ?>" required class="form-control"></td>
        </tr>
    </table>
    <br>
    <input type="submit" value="Update Record" class="btn btn-primary">
<?php echo form_close(); ?>

    <?php echo form_close(); ?>
                                            </table>
                                        </form>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                            </div>

                        </div>


                        <?php 
	if(isset($_POST['add'])){
		extract($_POST);
	$done=$this->db->query("select * from designation where designation_name='$designation'")->row();
	if($done){
$done=$this->db->query("update designation set designation_name='$designation' where designation_name='$designation'");	
	}else{
	$done=$this->db->query("insert into designation set designation_name='$designation'");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/display_designation'));
		}
	
	
	}
	
	
	
	?>