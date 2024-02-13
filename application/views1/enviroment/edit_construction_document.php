<?php 
$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');
if($groupID > 1){
    $cityii="and c.city_id=$cityID";
   }
   if($groupID > 1){
    $cityoption="where city_id=$cityID";
   }

    $empID=$this->session->userdata('empid');
    $desig_emp=$this->db->query("SELECT designation_id
    FROM
    emp WHERE emp_id=$empID")->row();
   if($desig_emp->designation_id==8){

    $doneSUB=$this->db->query("SELECT psp.subproject_id,subproject_name 
    FROM ppms_subproject AS psp,assign_regional AS ar
    WHERE psp.`subproject_id`=ar.`subproject_id`
    and ar.emp_id=$empID")->result();

   }else{
    if($groupID==1 or $groupID=2 or $groupID=5){
        $doneSUB=$this->db->query("select subproject_id,subproject_name from ppms_subproject")->result();
    }else{
    $doneSUB=$this->db->query("select subproject_id,subproject_name from ppms_subproject where city_id=$cityID")->result();
    }

   }
   ////////////////////////////////////////////////

   $row1 = $this->db->query("
   SELECT * FROM 
   ppms_es_construction_doc AS a,
   ppms_subproject_site AS b,
   ppms_subproject AS c,
   ppms_project AS d,
   ppms_sector AS e,
   ppms_output_list AS f
   
   WHERE  a.`sps_id`=b.`sps_id`
   
   AND b.`subproject_id`=c.`subproject_id`
   AND c.`project_id`=d.`project_id`
   AND d.`sector_id`=e.`sector_id`
   AND e.`output_id`=f.`output_id`
   and a.es_cd_id=$id
  
   ")->row();

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Sub Project Site List </h4>

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
                                            action="<?php echo base_url('Enviroment/edit_construction')?>"
                                            autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="text" name="id" class="form-control" value="<?php echo $row1->es_cd_id?>">

                                            <table class="table">

                                                <?php if($groupID == 1 or $groupID == 2 or $groupID == 5 or $groupID == 6){?>
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select class="form-control" name="output" id="output_id">
                                                            <option value="<?php echo $row1->output_id?>"><?php echo $row1->output_name?></option>
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
                                                            <option value="<?php echo $row1->sector_id?>"><?php echo $row1->sector_name?></option>
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
                                                        <select name="project_id" id="projects" class="form-control">

                                                            <option value="<?php echo $row1->project_id?>"><?php echo $row1->project_name?></option>

                                                        </select>
                                                    </td>
                                                </tr>
                                                <?php }?>
                                                <tr>
                                                    <td>Sub Project</td>
                                                    <td>


                                                        <select name="sub_project_id" id="sub_project_id"
                                                            class="form-control" required>
                                                            <option value="<?php echo $row1->subproject_id?>"><?php echo $row1->subproject_name?></option>

                                                            <?php 
foreach($doneSUB as $doneSUB){
?>
                                                            <option value="<?php echo $doneSUB->subproject_id;?>">
                                                                <?php echo $doneSUB->subproject_name;?></option>
                                                            <?php }?>
                                                        </select>


                                                    </td>


                                                    <td>Site Name</td>
                                                    <td><select name="site_id" id="site_id" class="form-control">

                                                            <option value="<?php echo $row1->sps_id?>"><?php echo $row1->site_name?></option>

                                                        </select></td>
                                                </tr>
                                                <tr>

                                                    <td>Title</td>
                                <td><input type="text" name="es_cd_title" class="form-control" value="<?php echo $row1->es_cd_title?>"></td>


                                                    <td>Document Attached</td>
                                                    <td>
                                                        <input type="file" name="images[]" class="form-control"
                                                            multiple value="<?php echo $row1->es_cd_document?>">

                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>Date</td>
                                                    <td>
                             <input type="hidden" name="id" class="form-control" value="<?php echo $id?>">
                            <input type="date" name="doc_date" class="form-control" value="<?php echo $row1->es_cd_date?>"></td>
                                                    <td>Status</td>
                                                    <td>
                                                        <select name="status_id" id="status_id" class="form-control"
                                                            required>
                                 <option value="<?php echo $row1->es_cd_status?>"><?php if($row1->es_cd_status==1){
                                    echo "Approved";
                                 }else{

                                 echo "Pending";

                                 }?></option>
                                                            <option value="1">Approved</option>
                                                            <option value="0">Pending</option>

                                                        </select>
                                                    </td>


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
                                                    <th>OutPut</th>
                                                    <th>Sector Name</th>
                                                    <th>Project Name</th>
                                                    <th>Sub Project Name</th>

                                                    <th>Site Name</th>

                                                    <th>Title</th>
                                                    <th>Date</th>
                                                    <th>File Attached</th>
                                                    <th>Status</th>




                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT * FROM 
                  ppms_es_construction_doc AS a,
                  ppms_subproject_site AS b,
                  ppms_subproject AS c,
                  ppms_project AS d,
                  ppms_sector AS e,
                  ppms_output_list AS f
                  
                  WHERE  a.`sps_id`=b.`sps_id`
                  
                  AND b.`subproject_id`=c.`subproject_id`
                  AND c.`project_id`=d.`project_id`
                  AND d.`sector_id`=e.`sector_id`
                  AND e.`output_id`=f.`output_id`
                 
                 
                  $cityii
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->project_name;?></td>

                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <td><?php echo $item->site_name;?></td>
                                                    <td><?php echo $item->es_cd_title;?></td>
                                                    <td><?php echo $item->es_cd_date;?></td>
                                                    <td>
                                 <a href="<?php echo base_url('img/upload_files/').$item->es_cd_document;?>">File Attached</a>    
                                                    
                                                  </td>
                                                    <td><?php if($item->es_aed_status==0){
                                                        echo "Pending";
                                                    }else if($item->es_cd_status==1){
                                                        echo "Approved";

                                                    }
                                                        ?></td>


                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Environment/edit_construction_document/<?php echo $item->es_cd_id;?>">
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
	
	
	
	?>