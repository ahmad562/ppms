<?php 
$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');
/////////////////////////////////////////////////////////////////
if($groupID > 1){
    $cityii="and ps.city_id=$cityID";
   }
   if($groupID > 1){
    $cityoption="where city_id=$cityID";
   }

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Sub Project Assign List(RE) </h4>

                    </div>
                    <div class="page-header-breadcrumb">

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
                                    <h5>Add New Record</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">


                                            <table class="table">
                                               <?php /*?> <tr>
                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="project_id" class="form-control">

                                                            <option value="">Select Sub Project List</option>
                         <?php $done=$this->db->query("select subproject_id,subproject_name from ppms_subproject $cityoption")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->subproject_id;?>">
                                                                <?php echo $desig->subproject_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <?php */?>
 <tr>
                                                    <td>OutPut</td>
                                                    <td> <select class="form-control" name="output" id="output_id">
                                                            <option value="">Select OutPut</option>
                                                            <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
                                                            <option value="<?php echo $outList->output_id?>">
                                                                <?php echo $outList->output_name?></option>
                                                            <?php }?>

                                                        </select>
                                                    </td>
                                                    <td>Sectors</td>
                                                    <td>
                                                        <select class="form-control" name="sectors" id="sectors_id">
                                                            <option value="">Select Sectors</option>
                                                            <?php /*$sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                            <option value="<?php echo $sectorss->sector_id?>">
                                                                <?php echo $sectorss->sector_name?></option>
                                                            <?php }*/?>

                                                        </select>



                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                    <td>Project</td>
                                                    <td>
                                                        <select name="project_id" id="project_id" class="form-control">

                                                            <option value="">Select Project List</option>
                                                           
                                                        </select>
                                                    </td>
                                                   
                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="sub_project_id" id="sub_project_idss" class="form-control">

                                                            <option value="">Select Sub Project List</option>
                                                           
                                                        </select>
                                                    </td>

                                              
                                                <tr>
                                                    <td>Assign Date</td>
                                                    <td><input type="date" placeholder="Enter Assign Date"
                                                            required id="assign_date" class="form-control"
                                                            name="assign_date" tabindex="1"></td>
                                               
                                                    <td>Regional Engineer</td>
                                                    <td>  <select name="re_id" class="form-control">

<option value="">Regional Engineer</option>
<?php $done=$this->db->query("select emp_id,emp_name from emp where designation_id=8")->result();
foreach($done as $desig){
?>
<option value="<?php echo $desig->emp_id;?>">
    <?php echo $desig->emp_name;?></option>
<?php }?>
</select></td>
                                                </tr>

                                               
                                                

                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Save Record</button></td>
                                                </tr>
                                            </table>
                                        </form>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sub Project Assign List Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>Output</th>
                                                    <th>Sectors Name</th>
                                                    <th>Project Name</th>
                                                    
                                                    <th>Sub Project Name</th>
                                                    <th>Assign Date</th>
                                                    <th>Regional Engineer</th>
                                                    
                                                   
                                                   

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT 
                  * FROM 
                  assign_regional as psd,
                  ppms_subproject AS psub,
                  ppms_project AS pp,
                  ppms_sector AS ps,
                  ppms_output_list AS pol,
                  emp as e
                  
                  WHERE psd.subproject_id=psub.subproject_id
                  and psub.`project_id`=pp.`project_id`
                  AND pp.`sector_id`=ps.`sector_id`
                  AND ps.`output_id`=pol.`output_id`
                  and psd.emp_id=e.emp_id
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                   
                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->project_name;?></td>
                                                   
                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <td><?php echo $item->assign_date;?></td>
                                                    <td><?php echo $item->emp_name;?></td>
                                                   
                                                    
                                                  

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects_assign/<?php echo $item->assign_regional_id;?>">
                                                            <img src="<?php echo base_url()?>img/edit.PNG" width="30px"
                                                                height="30px" /> </a>
                                                    </td>
                                                </tr>
                                                <?php
 $i++;
 } ?>
                                            </tbody>
                                            <tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->





                        </div>



                       

                        <?php 
	if(isset($_POST['add'])){
		extract($_POST);
$done=$this->db->query("select * from assign_regional where subproject_id=$sub_project_id and emp_id=$re_id")->row();
	if($done){
//$done=$this->db->query("update ppms_subproject_detail set city_id=$city_id,start_date='$start_date',end_date='$end_date',subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
	}else{
	$done=$this->db->query("insert into assign_regional set subproject_id=$sub_project_id,emp_id=$re_id,
    assign_date='$assign_date'");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/spare'));
		}
	
	
	}
	
	
	
	?>