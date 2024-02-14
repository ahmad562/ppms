<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>SMS IPC Employee Records</h4>

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
            <th>Email ID</th>
            <th>Phone Number</th>
            <th>Group</th>
            <th>Action</th>
        </tr>
        <?php 
        $i=1;
        foreach ($records as $record): ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $record->s_fullname; ?></td>
                <td><?php echo $record->hr_email_id; ?></td>
                <td><?php echo $record->phone_no; ?></td>
                <td><?php echo $record->sms_group_name; ?></td>
                <td>
                    <a href="<?php echo base_url('Hr_ipc_sms/edit/' . $record->hr_ipc_sms_id); ?>">Edit</a>
                    <a href="<?php echo base_url('Hr_ipc_sms/delete/' . $record->hr_ipc_sms_id); ?>">Delete</a>
                </td>
            </tr>
        <?php 
    $i++;
    endforeach; ?>
    </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->





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
                                            action="<?php echo base_url('Hr_ipc_sms/add')?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">


                                            <table class="table">
                                          
                                           
                                            <tr>
                <td><label for="org_id">Sms Group:</label></td>
                <td><select id="sms_group_id" name="sms_group_id"  required class="form-control" style="width:240px">
                        <option value="">Select SMS Group</option>
                        <?php 
                        $sms_group_id=$this->db->query("select * from sms_group")->result();
                        foreach ($sms_group_id as $sms_group_id): ?>
                            <option value="<?php echo $sms_group_id->sms_group_id; ?>"><?php echo $sms_group_id->sms_group_name; ?></option>
                        <?php endforeach; ?>
                    </select>
            <img src="<?php echo base_url('img/add.png')?>" width="40px" height="40px" style="float:right; margin-top:-40px;margin-left:150px"  data-toggle="modal" data-target="#myModal" onclick="add_more_group()"></td>
            </tr>
           
            <tr>
                <td><label for="emp_id">Employee:</label></td>
                <td><select id="emp_id" name="emp_id" required class="form-control">
                        <option value="">Select Employee</option>
                        <?php 
                        $employee_ids=$this->db->query("select * from ppms_service_tbl where s_fullname !=''")->result();
                        foreach ($employee_ids as $employee): ?>
                            <option value="<?php echo $employee->service_id; ?>"><?php echo $employee->s_fullname; ?></option>
                        <?php endforeach; ?>
                    </select></td>
            </tr>
            <tr>
                <td><label for="phone_no">Email:</label></td>
                <td><input type="email" id="email_id" name="email_id" required class="form-control"></td>
            </tr>
            
           
            <tr>
                <td><label for="phone_no">Phone Number:</label></td>
                <td><input type="text" id="phone_no" name="phone_no" required class="form-control"></td>
            </tr>
            

            </tbody>
        </table>
        <br>
        <input type="submit" value="Add Record" class="btn btn-danger">
   
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
    <script>

function add_more_group(){
$('#group_sms').show();
}

</script>

<script type="text/javascript">
function add_more_sms_record(val) {
  
    //alert(detail);

    $.post("<?php echo base_url()?>Hr_ipc_sms/add_more_sms_record/", {
        group_name: val
       

    }, function(page_response) {
        ///alert(page_response);
        if (page_response == 1) {
            ///alert('Record Updated');
            window.location.reload();
                } else {
            if (page_response == 0) {
                //alert('Record Saved!');
                ///$("#cdetailss").show("slow");
            }
        }
    });

}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    </script>

<!-- The Modal -->
<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">

            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">SMS Group</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>

            <!-- Modal Body -->
            <div class="modal-body">
            <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Hr_ipc_sms/add_more_sms_record')?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
            <table>
 
 <tbody id="group_sms">
            <tr>
                <td><label for="phone_no">SMS Group Name:</label></td>
                <td><input type="text" id="sms_group_name" name="sms_group_name" required class="form-control" onBlur="add_more_sms_record(this.value)"></td>
            </tr>
            <tr>
                <td><label for="org_id">Organization:</label></td>
                <td><select id="org_id" name="org_id" required class="form-control">
                        <option value="">Select Organization</option>
                        <?php 
                        $organizations=$this->db->query("select * from organization")->result();
                        foreach ($organizations as $organization): ?>
                            <option value="<?php echo $employee->organization_id; ?>"><?php echo $organization->organization_name; ?></option>
                        <?php endforeach; ?>
                    </select></td>
            </tr>
           <tr><td> <input type="submit" value="Add Record" class="btn btn-danger"></td></tr>
            </tbody>
 </table>
            </div>

            <!-- Modal Footer -->
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>

        </div>
    </div>
</div>