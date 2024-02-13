<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <?php 
                                            
    $done=$this->db->query(" SELECT * FROM 
    ppms_subproject_assign AS a,
    ppms_subproject AS b,
    ppms_project AS c,
   
    ppms_sector AS d,
     emp AS e,
    ppms_output_list AS f

    WHERE a.`subproject_id`=b.`subproject_id`
    AND a.`contractor_id`=e.`emp_id`
    AND b.`project_id`=c.`project_id`
    AND c.`sector_id`=d.`sector_id`
    AND d.`output_id`=f.`output_id`
    
    AND a.subproject_assign_id=$aid
                                            ")->row();
                                            
                                            
                                            ?>
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Sub Project Assign List </h4>

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
                                        <form role="form" method="post"
                                            action="<?php echo base_url()?>Welcome/update_sub_project_assign"
                                            id="create_item" enctype="multipart/form-data"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">

                                            <input type="hidden" name="subproject_assign_id" class="form-control"
                                                value="<?php echo $done->subproject_assign_id;?>">
                                            <table class="table">
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select class="form-control" name="output" id="output_id">
                                                            <option value="<?php echo $done->output_id;?>">
                                                                <?php echo $done->output_name;?></option>
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
                                                            <option value="<?php echo $done->sector_id;?>">
                                                                <?php echo $done->sector_name;?></option>
                                                            <?php /*$sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                            <option value="<?php echo $sectorss->sector_id?>">
                                                                <?php echo $sectorss->sector_name?></option>
                                                            <?php }*/?>

                                                        </select>



                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Project</td>
                                                    <td>
                                                        <select name="project_id" id="project_id" class="form-control">

                                                            <option value="<?php echo $done->project_id;?>">
                                                                <?php echo $done->project_name;?></option>
                                                            <?php /*$done=$this->db->query("select project_id,project_name from ppms_project")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->project_id;?>">
                                                                <?php echo $desig->project_name;?></option>
                                                            <?php } */
                                                            ?>
                                                        </select>
                                                    </td>
                                              
                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="subproject_id" class="form-control">

                                                            <option value="<?php echo $done->subproject_id;?>">
                                                                <?php echo $done->subproject_name;?></option>
                                                            <?php $done1=$this->db->query("select subproject_id,subproject_name from ppms_subproject")->result();
foreach($done1 as $desig){
?>
                                                            <option value="<?php echo $desig->subproject_id;?>">
                                                                <?php echo $desig->subproject_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Assign Date</td>
                                                    <td><input type="date" placeholder="Enter Assign Date" required
                                                            id="assign_date" class="form-control"
                                                            value="<?php echo $done->subproject_assign_date;?>"
                                                            name="assign_date" tabindex="1"></td>
                                              
                                                    <td>Contractor Name</td>
                                                    <td> <select name="contractor_id" class="form-control">

                                                            <option value="<?php echo $done->emp_id;?>">
                                                                <?php echo $done->emp_name;?></option>
                                                            <?php $done2=$this->db->query("select emp_id,emp_name from emp")->result();
foreach($done2 as $desig2){
?>
                                                            <option value="<?php echo $desig2->emp_id;?>">
                                                                <?php echo $desig2->emp_name;?></option>
                                                            <?php }?>
                                                        </select></td>
                                                </tr>

                                                <tr>
                                                    <td>Status</td>
                                                    <td> <select name="status_id" class="form-control">

                                                            <option value="<?php 
if($done->subproject_assign_status==1){

echo 1;

}elseif($done->subproject_assign_status==0){
echo 0;

}

?>"><?php 
if($done->subproject_assign_status==1){

echo "On";

}elseif($done->subproject_assign_status==0){
echo "Off";

}

?></option>

                                                            <option value="1">On</option>
                                                            <option value="0">Off</option>

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

                                                        <th>OutPut </th>
                                                        <th>Sectors</th>
                                                        <th>Project</th>
                                                        <th>Sub Project Name</th>
                                                        <th>Assign Date</th>
                                                        <th>Contractor Name</th>


                                                        <th>Status</th>

                                                        <th>Edit</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query(" SELECT * FROM 
                  ppms_subproject_assign AS a,
                  ppms_subproject AS b,
                  ppms_project AS c,
                 
                  ppms_sector AS d,
                   emp AS e,
                  ppms_output_list AS f

                  WHERE a.`subproject_id`=b.`subproject_id`
                  AND a.`contractor_id`=e.`emp_id`
                  AND b.`project_id`=c.`project_id`
                  AND c.`sector_id`=d.`sector_id`
                  AND d.`output_id`=f.`output_id`
                  ")->result();
                  foreach($result1 as $item){?>
                                                    <tr class="gradeX">
                                                        <td><?php echo $i;?></td>
                                                        <td><?php echo $item->output_name;?></td>
                                                        <td><?php echo $item->sector_name;?></td>
                                                        <td><?php echo $item->project_name;?></td>

                                                        <td><?php echo $item->subproject_name;?></td>

                                                        <td><?php echo $item->subproject_assign_date;?></td>
                                                        <td><?php echo $item->emp_name;?></td>


                                                        <td><?php 
                                                    if($item->subproject_assign_status==0){
                                                    echo "Off";
                                                    }else{
                                                        echo "On";
                                                    }
                                                    ?></td>

                                                        <td align="center"><a
                                                                href="<?php echo base_url()?>Welcome/edit_sub_projects_assign/<?php echo $item->subproject_assign_id;?>">
                                                                <img src="<?php echo base_url()?>img/edit.PNG"
                                                                    width="30px" height="30px" /> </a>
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





                        </div>


                        <?php 
	if(isset($_POST['add'])){
		extract($_POST);
$done=$this->db->query("select * from ppms_subproject_assign where subproject_id=$subproject_id and contractor_id=$contractor_id")->row();
	if($done){
//$done=$this->db->query("update ppms_subproject_detail set city_id=$city_id,start_date='$start_date',end_date='$end_date',subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
	}else{
	$done=$this->db->query("insert into ppms_subproject_assign set subproject_id=$subproject_id,contractor_id=$contractor_id,
    subproject_assign_status=$status_id,subproject_assign_date='$assign_date'");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_sub_projects_assign'));
		}
	
	
	}
	
	
	
	?>