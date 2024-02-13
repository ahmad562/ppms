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
    $desig_emp=$this->db->query("SELECT designation_id,o.organization_id,o.order_by
    FROM
    emp as e,organization as o WHERE e.emp_id=$empID
    and e.organization_id=o.organization_id
    ")->row();
   if($desig_emp->designation_id==8){

    $doneSUB=$this->db->query("SELECT psp.subproject_id,subproject_name 
    FROM ppms_subproject AS psp,assign_regional AS ar
    WHERE psp.`subproject_id`=ar.`subproject_id`
    and ar.emp_id=$empID")->result();

   }else{
    if($groupID==1 or $groupID=2 or $groupID=5 or $groupID=6){
        $doneSUB=$this->db->query("select subproject_id,subproject_name from ppms_subproject")->result();
    }else{
    $doneSUB=$this->db->query("select subproject_id,subproject_name from ppms_subproject where city_id=$cityID")->result();
    }

   }
   ////////////////////////////////////////////////

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Enviromental Safeguard Report </h4>

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
                                    <h5>Filter Documents</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <form method="post" action=""">
                                    <div class=" dt-responsive table-responsive">

                                        <table class="table">
                                            <?php if($groupID == 1 or $groupID == 2 or $groupID == 5 or $groupID == 6){?>
                                            <tr>
                                                <?php /*?> <td>OutPut</td>
                                                <td> <select class="form-control" name="output" id="output_id">
                                                        <option value="">Select OutPut</option>
                                                        <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
                                                        <option value="<?php echo $outList->output_id?>">
                                                            <?php echo $outList->output_name?></option>
                                                        <?php }?>

                                                    </select>
                                                </td><?php */?>
                                                <td>Sectors</td>
                                                <td>
                                                    <select class="form-control" name="sectors" id="sectors_id">
                                                        <option value="">Select Sectors</option>
                                                        <?php $sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                        <option value="<?php echo $sectorss->sector_id?>">
                                                            <?php echo $sectorss->sector_name?></option>
                                                        <?php }?>

                                                    </select>



                                                </td>

                                                <td>Project</td>
                                                <td>
                                                    <select name="project_id" id="project_id" class="form-control">

                                                        <option value="">Select Project List</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <?php }?>
                                            <tr>

                                                <td>Sub Project</td>
                                                <td>
                                                    <select name="sub_project_id" id="sub_project_idss"
                                                        class="form-control">
                                                        <option value="">Select Sub Projects</option>
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

                                                        <option value="">Select Site</option>

                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Module</td>
                                                <td><select name="modules" class="form-control">
                                                        <option value="">Select Module</option>
                                                        <option value="1">Construction Document</option>
                                                        <option value="2">Construction Lab Test</option>
                                                        <option value="3">External Monitoring</option>
                                                        <option value="4">Document Approval</option>
                                                        <option value="5">Saemer Document</option>



                                                        </option>

                                                    </select>
                                            <tr>
                                                <td><button type="submit" class="btn btn-block btn-outline btn-primary"
                                                        id="add" name="add" tabindex="2">Search Record</button></td>
                                            </tr>
                                        </table>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php 
                if(isset($_POST['add'])){
                    extract($_POST);
                    if($output){
                        $outputee="and f.`output_id`=$output";
                    }
                    if($sectors){
                        $sectorss="and e.`sector_id`=$sectors";
                    }
                    if($project_id){
                        $projectee="and d.`project_id`=$project_id";
                    }
                    if($sub_project_id){
                        $sub_project_idss="and c.`subproject_id`=$sub_project_id";
                    }
                    if($site_id){
                        $site_idss="and b.`sps_id`=$site_id";
                   }
if($modules==1){
                ?>
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Construction Documents</h5>
                            <span></span>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                <table class="table table-bordered nowrap">
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
                                            <th>Forward File</th>




                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
			   error_reporting(0);
			   
               $a=1; 
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
                  $outputee
                  $sectorss
                  $projectee
                  $sub_project_idss
                  $site_idss
                 
                  $cityii
                  ")->result();
                  foreach($result1 as $item){?>
                                        <tr class="gradeX">
                                            <td><?php echo $a;?></td>
                                            <td><?php echo $item->output_name;?></td>
                                            <td><?php echo $item->sector_name;?></td>
                                            <td><?php echo $item->project_name;?></td>

                                            <td><?php echo $item->subproject_name;?></td>

                                            <td><?php echo $item->site_name;?></td>
                                            <td><?php echo $item->es_cd_title;?></td>
                                            <td><?php echo $item->es_cd_date;?></td>
                                            <td>
                                                <?php $filesss = $this->db->query("SELECT * FROM  ppms_es_file_attached where id=$item->es_cd_id and es_module_id=1")->result();
                            $x=1;
                 foreach($filesss as $filesss){?>
                                                <a href="<?php echo base_url('img/upload_files/').$filesss->attached_file;?>"
                                                    target="_new">(<?php echo $x;?>)File Attached<br></a>
                                                <?php 
                                $x++;}?>
                                            </td>
                                            <td><?php if($item->es_aed_status==0){
                                                        echo "Pending";
                                                    }else if($item->es_cd_status==1){
                                                        echo "Approved";

                                                    }
                                                        ?></td>

                                            <td>
                                                <?php 
 $tracs = $this->db->query("SELECT * FROM ppms_es_forward AS psa,organization AS e
WHERE psa.`organization_id`=e.`organization_id` and es_module_id=1 and id=$item->es_cd_id and psa.es_flag=1 ")->row();
if($tracs){
    ///echo $tracs->status_id;
    ?>

                                                <?php
                                                    
                  if($tracs->status_id==0){
                  ?>
                                                <label class="label label-warning">Recieved</label><br>
                                                <span align="center" style="font-weight:700;">
                                                    <a href="" onClick="display_log(<?php echo $item->es_cd_id?>,1)"
                                                        data-toggle="modal"
                                                        data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

                                                <?php 
                 }else if($tracs->status_id==1){
                
                 if($tracs->es_flag==1){
            if($desig_emp->organization_id==$tracs->organization_id){

                ?>
                                                <a href="javascript:"
                                                    onClick="forward(<?php echo $item->es_cd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 1;?>)">
                                                    <img src="<?php echo base_url('img/forward.png')?>" width="50px"
                                                        height="50px">
                                                </a>
                                                <?php
                            }
                }?><br>
                                                <label class="label label-warning">Farwarded</label><br>
                                                <span align="center" style="font-weight:700;">
                                                    <a href="" onClick="display_log(<?php echo $item->es_cd_id?>,1)"
                                                        data-toggle="modal" data-target="#Modal-tab">
                                                        <?php echo $tracs->organization_name;?></a></span>

                                                <?php }else if($tracs->status_id==2){
                                                    if($tracs->es_flag==1){
                            if($desig_emp->organization_id==$tracs->organization_id){
                                if($desig_emp->organization_id==4){?>

                                                <select name="status_ids" id="status_ids<?php echo $item->es_cd_id?>"
                                                    class="form-control" width="20px"
                                                    onChange="update_status(this.value,<?php echo $item->es_cd_id?>,1)">
                                                    <option value="">Select</option>

                                                    <option value="4">Approved</option>
                                                    <option value="5">Disapproved</option>


                                                </select>


                                                <?php }else{
                ?>
                                                <a href="javascript:"
                                                    onClick="forward(<?php echo $item->es_cd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 1;?>)">
                                                    <img src="<?php echo base_url('img/forward.png')?>" width="50px"
                                                        height="50px">
                                                </a>
                                                <?php
                            }
                        }
                }?>
                                                <br>
                                                <label class="label label-warning">Recieved</label><br>
                                                <span align="center" style="font-weight:700;">
                                                    <a href="" onClick="display_log(<?php echo $item->es_cd_id?>,1)"
                                                        data-toggle="modal" data-target="#Modal-tab">
                                                        <?php echo $tracs->organization_name;?></a></span>

                                                <?php }else if($tracs->status_id==3){?>
                                                <label class="label label-danger">Cancel</label><br>
                                                <span align="center" style="font-weight:700;">
                                                    <a href="" onClick="display_log(<?php echo $item->es_cd_id?>,1)"
                                                        data-toggle="modal" data-target="#Modal-tab">
                                                        <?php echo $tracs->organization_name;?></a></span>

                                                <?php }else if($tracs->status_id==4){?>
                                                <label class="label label-success">Approved</label><br>
                                                <span align="center" style="font-weight:700;">
                                                    <a href="" onClick="display_log(<?php echo $item->es_cd_id?>,1)"
                                                        data-toggle="modal" data-target="#Modal-tab">
                                                        <?php echo $tracs->organization_name;?></a></span>


                                                <?php }else if($tracs->status_id==5){?>


                                                <span align="center" style="font-weight:700;">
                                                    <a href="" onClick="display_log(<?php echo $item->es_cd_id?>,1)"
                                                        data-toggle="modal" data-target="#Modal-tab">
                                                        <label class="label label-danger">Returned</label>



                                                    </a></span>


                                                <?php }?>




                                                <?php }else{
                                                    if($desig_emp->order_by==1){
                                                    
                                                    ?>
                                                <a href="javascript:"
                                                    onClick="forward(<?php echo $item->es_cd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 1;?>)">
                                                    <img src="<?php echo base_url('img/forward.png')?>" width="50px"
                                                        height="50px">
                                                </a>



                                                <?php }else{
                                                    echo "You Are Not Authorized to Forward";
                                                }?>
                                            </td>



                                        </tr>
                                        <?php 

}
$a++;
 }

?>

                            </div>

                            <!--------------------------------------------------------->

                            </tbody>

                            </table>




                        </div>
                    </div>
                    <?php }else if($modules==2){?>




                    <div class="col-sm-12">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Construction Lab Test Modules</h5>
                                <span></span>

                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <div class="dt-responsive table-responsive">
                                        <table class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>OutPut</th>
                                                    <th>Sector Name</th>
                                                    <th>Project Name</th>
                                                    <th>Sub Project Name</th>

                                                    <th>Site Name</th>

                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>Remarks</th>
                                                    <th>File Attached</th>
                                                    <th>Status</th>
                                                    <th>Forward File</th>




                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT * FROM 
                  ppms_es_construction_labtest as a,
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
                  $outputee
                  $sectorss
                  $projectee
                  $sub_project_idss
                  $site_idss
                 
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
                                                    <td><?php echo $item->es_cit_name;?></td>

                                                    <td><?php echo $item->es_cit_date;?></td>
                                                    <td><?php echo $item->es_cit_remarks;?></td>
                                                    <td>
                                                        <?php $filesss = $this->db->query("SELECT * FROM  ppms_es_file_attached where id=$item->es_cit_id and es_module_id=2")->result();
                            $x=1;
                 foreach($filesss as $filesss){?>
                                                        <a href="<?php echo base_url('img/lab/').$filesss->attached_file;?>"
                                                            target="_new">(<?php echo $x;?>)File Attached<br></a>
                                                        <?php 
                                $x++;}?>
                                                    </td>
                                                    <td><?php if($item->es_status==0){
                                                        echo "Pending";
                                                    }else if($item->es_status==1){
                                                        echo "Approved";

                                                    }
                                                        ?></td>

                                                    <td>
                                                        <?php 
 $tracs = $this->db->query("SELECT * FROM ppms_es_forward AS psa,organization AS e
WHERE psa.`organization_id`=e.`organization_id` and es_module_id=2 and id=$item->es_cit_id and psa.es_flag=1 and psa.status_id=2")->row();
if($tracs){
    ///echo $tracs->status_id;
    ?>

                                                        <?php
                                                    
                  if($tracs->status_id==0){
                  ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_cit_id?>,2)"
                                                                data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

                                                        <?php 
                 }else if($tracs->status_id==1){
                    if($tracs->es_flag==1){
                        if($desig_emp->organization_id==$tracs->organization_id){
                ?>
                                                        <label class="label label-warning">Farwarded</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_cit_id?>,2)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <?php echo $tracs->organization_name;?></a></span>
                                                        <?php
                            }
                }?><br>
                                                        <?php }else if($tracs->status_id==2){

if($tracs->es_flag==1){
    if($desig_emp->organization_id==$tracs->organization_id){
        if($desig_emp->organization_id==4){?>

                                                        <select name="status_ids"
                                                            id="status_ids<?php echo $item->es_cd_id?>"
                                                            class="form-control" width="20px"
                                                            onChange="update_status(this.value,<?php echo $item->es_cd_id?>,1)">
                                                            <option value="">Select</option>

                                                            <option value="4">Approved</option>
                                                            <option value="5">Disapproved</option>


                                                        </select>


                                                        <?php }else{
?>
                                                        <a href="javascript:"
                                                            onClick="forward(<?php echo $item->es_cd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 1;?>)">
                                                            <img src="<?php echo base_url('img/forward.png')?>"
                                                                width="50px" height="50px">
                                                        </a>
                                                        <?php
    }
}
}?>
                                                        <br>

                                                        ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_cit_id?>,2)"
                                                                data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

                                                        <?php }else if($tracs->status_id==3){?>
                                                        <label class="label label-danger">Cancel</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_cit_id?>,2)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <?php echo $tracs->organization_name;?></a></span>

                                                        <?php }else if($tracs->status_id==4){?>
                                                        <label class="label label-success">Approved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_cit_id?>,2)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <?php echo $tracs->organization_name;?></a></span>


                                                        <?php }else if($tracs->status_id==5){?>


                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_cit_id?>,2)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <label class="label label-danger">Returned</label>



                                                            </a></span>


                                                        <?php }?>




                                                        <?php }else{
                                                        if($desig_emp->order_by==1){
                                                        ?>
                                                        <a href="javascript:"
                                                            onClick="forward(<?php echo $item->es_cit_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 2;?>)">
                                                            <img src="<?php echo base_url('img/forward.png')?>"
                                                                width="50px" height="50px">
                                                        </a>



                                                        <?php }else{
                                                    echo "You Are Not Authorized to Forward";
                                                }



?>
                                                    </td>

                                                </tr>






                                    </div>



                                    <?php
                                                    }
 $i++;
 } ?>
                                    </tbody>
                                    <tfoot>
                                        </table>



                                </div>
                            </div>
                        </div>
                        <!-- Zero config.table end -->
                        <?php }else if($modules==3){?>

                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>External Monitoring Modules</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>OutPut</th>
                                                    <th>Sector Name</th>
                                                    <th>Project Name</th>
                                                    <th>Sub Project Name</th>

                                                    <th>Site Name</th>

                                                    <th>Name</th>
                                                    <th>Remarks</th>

                                                    <th>File Attached</th>
                                                    <th> Date</th>
                                                    <th>Status</th>
                                                    <th> File Transfer</th>




                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT * FROM 
                  ppms_es_externalmonitoring_detail as a,
                  ppms_es_externalmonitoring as a1,

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
                 and a.es_em_id=a1.es_em_id
                 $outputee
                 $sectorss
                 $projectee
                 $sub_project_idss
                 $site_idss
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
                                                    <td><?php echo $item->es_em_name;?></td>
                                                    <td><?php echo $item->es_file_remarks;?></td>
                                                    <td>
                                                        <?php $filesss = $this->db->query("SELECT * FROM  ppms_es_file_attached where id=$item->es_emd_id and es_module_id=4")->result();
                            $x=1;
                 foreach($filesss as $filesss){?>
                                                        <a href="<?php echo base_url('img/enviroment/').$filesss->attached_file;?>"
                                                            target="_new">(<?php echo $x;?>)File Attached<br></a>
                                                        <?php 
                                $x++;}?>
                                                    </td>

                                                    <td><?php echo $item->es_date;?></td>

                                                    <td><?php if($item->es_emd_status==0){
                                                        echo "Pending";
                                                    }else if($item->es_emd_status==1){
                                                        echo "Approved";

                                                    }
                                                        ?></td>

                                                    <td>
                                                        <?php 
 $tracs = $this->db->query("SELECT * FROM ppms_es_forward AS psa,organization AS e
WHERE psa.`organization_id`=e.`organization_id` and es_module_id=4 and id=$item->es_emd_id and psa.es_flag=1 and psa.status_id=2")->row();
if($tracs){
    ///echo $tracs->status_id;
    ?>

                                                        <?php
                                                    
                  if($tracs->status_id==0){
                  ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_emd_id?>,4)"
                                                                data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

                                                        <?php 
                 }else if($tracs->status_id==1){
                    if($tracs->es_flag==1){
                        if($desig_emp->organization_id==$tracs->organization_id){
                ?>
                                                        <label class="label label-warning">Farwarded</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_emd_id?>,4)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <?php echo $tracs->organization_name;?></a></span>

                                                        <?php }
                                                        }
                                                    }else if($tracs->status_id==2){
                
                
if($tracs->es_flag==1){
    if($desig_emp->organization_id==$tracs->organization_id){
        if($desig_emp->organization_id==4){?>

                                                        <select name="status_ids"
                                                            id="status_ids<?php echo $item->es_emd_id?>"
                                                            class="form-control" width="20px"
                                                            onChange="update_status(this.value,<?php echo $item->es_emd_id?>,1)">
                                                            <option value="">Select</option>

                                                            <option value="4">Approved</option>
                                                            <option value="5">Disapproved</option>


                                                        </select>


                                                        <?php }else{
?>
                                                        <a href="javascript:"
                                                            onClick="forward(<?php echo $item->es_emd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 1;?>)">
                                                            <img src="<?php echo base_url('img/forward.png')?>"
                                                                width="50px" height="50px">
                                                        </a>
                                                        <?php
    }
}
}?>
                                                        <br>

                                                        ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_emd_id?>,4)"
                                                                data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a>
                                                        </span>





                                                        <?php }else if($tracs->status_id==3){?>
                                                        <label class="label label-danger">Cancel</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_emd_id?>,4)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <?php echo $tracs->organization_name;?></a></span>

                                                        <?php }else if($tracs->status_id==4){?>
                                                        <label class="label label-success">Approved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_emd_id?>,4)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <?php echo $tracs->organization_name;?></a></span>


                                                        <?php }else if($tracs->status_id==5){?>


                                                        <span align="center" style="font-weight:700;">
                                                            <a href=""
                                                                onClick="display_log(<?php echo $item->es_emd_id?>,4)"
                                                                data-toggle="modal" data-target="#Modal-tab">
                                                                <label class="label label-danger">Returned</label>



                                                            </a></span>


                                                        <?php }?>




                                                        <?php }else{
                                                            if($desig_emp->order_by==1){
                                                            ?>
                                                        <a href="javascript:"
                                                            onClick="forward(<?php echo $item->es_emd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 4;?>)">
                                                            <img src="<?php echo base_url('img/forward.png')?>"
                                                                width="50px" height="50px">
                                                        </a>



                                                        <?php }else{
                                                    echo "You Are Not Authorized to Forward";
                                                }



?>
                                                    </td>

                                                </tr>
                                                <?php
 
 } ?>







                                                <?php 
                        $i++;
}
?>
                                            </tbody>
                                            <tfoot>
                                        </table>

                                        <?php  }else if($modules==4){?> 
                                        
                                        
                                        <div class="col-sm-12">
                                <!-- Zero config.table start -->
                                <div class="card">
                                    <div class="card-header">
                                        <h5>Document Approval List Records</h5>
                                        <span></span>

                                    </div>
                                    <div class="card-block">
                                        <div class="dt-responsive table-responsive">
                                            <table class="table table-striped table-bordered nowrap">
                                                <thead>
                                                    <tr>
                                                        <th>Serial# </th>
                                                        <th>OutPut</th>
                                                        <th>Sector Name</th>
                                                        <th>Project Name</th>
                                                        <th>Sub Project Name</th>

                                                        <th>Site Name</th>
                                                        <th>Name</th>

                                                        <th>File Attached</th>
                                                        <th>Status</th>
                                                        <th>File Transfer</th>




                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT * FROM 
                  ppms_es_approval_documents as a,
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
                 
                 $outputee
                 $sectorss
                 $projectee
                 $sub_project_idss
                 $site_idss
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
                                                        <td><?php echo $item->es_aed_category_name;?></td>

                                                        <td>
                                                        <?php $filesss = $this->db->query("SELECT * FROM  ppms_es_file_attached where id=$item->es_aed_id and es_module_id=5")->result();
                            $x=1;
                 foreach($filesss as $filesss){?>
                                                        <a href="<?php echo base_url('img/approval/').$filesss->attached_file;?>"
                                                            target="_new">(<?php echo $x;?>)File Attached<br></a>
                                                        <?php 
                                $x++;}?>
                                                    </td>


                                                        <td><?php if($item->es_aed_status==0){
                                                        echo "Pending";
                                                    }else if($item->es_aed_status==1){
                                                        echo "Approved";

                                                    }
                                                        ?></td>

                                                        <td>
                                                            <?php 
 $tracs = $this->db->query("SELECT * FROM ppms_es_forward AS psa,organization AS e
WHERE psa.`organization_id`=e.`organization_id` and es_module_id=5 and id=$item->es_aed_id and psa.es_flag=1 and psa.status_id=2")->row();
if($tracs){
    ///echo $tracs->status_id;
    ?>

                                                            <?php
                                                    
                  if($tracs->status_id==0){
                  ?>
                                                            <label class="label label-warning">Recieved</label><br>
                                                            <span align="center" style="font-weight:700;">
                                                                <a href=""
                                                                    onClick="display_log(<?php echo $item->es_aed_id?>,5)"
                                                                    data-toggle="modal"
                                                                    data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

                <?php 
                 }else if($tracs->status_id==1){
                
                
                 if($tracs->es_flag==1){
            if($desig_emp->organization_id==$tracs->organization_id){

                ?>
                                                <a href="javascript:"
                                                    onClick="forward(<?php echo $item->es_cd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 1;?>)">
                                                    <img src="<?php echo base_url('img/forward.png')?>" width="50px"
                                                        height="50px">
                                                </a>
                                                <?php
                            }
                }?>
                                                            <label class="label label-warning">Farwarded</label><br>
                                                            <span align="center" style="font-weight:700;">
                                                                <a href=""
                                                                    onClick="display_log(<?php echo $item->es_aed_id?>,5)"
                                                                    data-toggle="modal" data-target="#Modal-tab">
                                                                    <?php echo $tracs->organization_name;?></a></span>

                                                            <?php }else if($tracs->status_id==2){
                
                  if($tracs->es_flag==1){
                            if($desig_emp->organization_id==$tracs->organization_id){
                                if($desig_emp->organization_id==4){?>

                                                <select name="status_ids" id="status_ids<?php echo $item->es_cd_id?>"
                                                    class="form-control" width="20px"
                                                    onChange="update_status(this.value,<?php echo $item->es_cd_id?>,1)">
                                                    <option value="">Select</option>

                                                    <option value="4">Approved</option>
                                                    <option value="5">Disapproved</option>


                                                </select>


                                                <?php }else{
                ?>
                                                <a href="javascript:"
                                                    onClick="forward(<?php echo $item->es_cd_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 1;?>)">
                                                    <img src="<?php echo base_url('img/forward.png')?>" width="50px"
                                                        height="50px">
                                                </a>
                                                <?php
                            }
                        }
                }?>


                                                            <label class="label label-warning">Recieved</label><br>
                                                            <span align="center" style="font-weight:700;">
                                                                <a href=""
                                                                    onClick="display_log(<?php echo $item->es_aed_id?>,5)"
                                                                    data-toggle="modal"
                                                                    data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

                                                            <?php }else if($tracs->status_id==3){?>
                                                            <label class="label label-danger">Cancel</label><br>
                                                            <span align="center" style="font-weight:700;">
                                                                <a href=""
                                                                    onClick="display_log(<?php echo $item->es_aed_id?>,5)"
                                                                    data-toggle="modal" data-target="#Modal-tab">
                                                                    <?php echo $tracs->organization_name;?></a></span>

                                                            <?php }else if($tracs->status_id==4){?>
                                                            <label class="label label-success">Approved</label><br>
                                                            <span align="center" style="font-weight:700;">
                                                                <a href=""
                                                                    onClick="display_log(<?php echo $item->es_aed_id?>,5)"
                                                                    data-toggle="modal" data-target="#Modal-tab">
                                                                    <?php echo $tracs->organization_name;?></a></span>


                                                            <?php }else if($tracs->status_id==5){?>


                                                            <span align="center" style="font-weight:700;">
                                                                <a href=""
                                                                    onClick="display_log(<?php echo $item->es_aed_id?>,5)"
                                                                    data-toggle="modal" data-target="#Modal-tab">
                                                                    <label class="label label-danger">Returned</label>



                                                                </a></span>


                                                            <?php }?>




                                                            <?php }else{
                                                if($desig_emp->order_by==1){
                                                                ?>
                                                            <a href="javascript:"
                                                                onClick="forward(<?php echo $item->es_aed_id?>,<?php echo $desig_emp->organization_id;?>,<?php echo 5;?>)">
                                                                <img src="<?php echo base_url('img/forward.png')?>"
                                                                    width="50px" height="50px">
                                                            </a>



                                                            <?php }else{
                                                    echo "You Are Not Authorized to Forward";
                                                }?>




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


                            <?php }
}
}?>
?> <script type="text/javascript">
                            function update_status(id, oid, mid) {


                                //var status_ids = $("#status_ids" + id).val();
                                let text = "Are You Sure to Approve the Document.";
                                if (confirm(text) == true) {
                                    $.post("<?php echo base_url()?>Dropdowns/forward_es_file_status/", {
                                        sid: id,
                                        rid: oid,
                                        mid: mid

                                    }, function(page_response) {

                                        if (page_response == 1) {
                                            alert('File Approved');
                                            // $("#display_products").html(page_response);
                                            ///calculate_grand_total();
                                            ///$("#barcode").focus();
                                            window.location.reload();
                                        } else {
                                            alert('File Not Approved');
                                            window.location.reload();

                                        }

                                    });
                                }

                            }
                            </script>

                            <script type="text/javascript">
                            function forward(id, oid, mid) {


                                //var status_ids = $("#status_ids" + id).val();
                                let text = "Are You Sure to Forward IPAC.";
                                if (confirm(text) == true) {
                                    $.post("<?php echo base_url()?>Dropdowns/forward_es_file/", {
                                        id: id,
                                        oid: oid,
                                        mid: mid

                                    }, function(page_response) {

                                        if (page_response == 1) {
                                            alert('File Moved');
                                            // $("#display_products").html(page_response);
                                            ///calculate_grand_total();
                                            ///$("#barcode").focus();
                                            window.location.reload();
                                        } else {
                                            alert('Thanks File Moved Already');
                                            window.location.reload();

                                        }

                                    });
                                }

                            }
                            </script>
                            <script type="text/javascript">
                            function display_log(id, mid) {


                                //var status_ids = $("#status_ids" + id).val();

                                $.post("<?php echo base_url()?>Dropdowns/display_log/", {
                                    id: id,

                                    mid: mid

                                }, function(page_response) {
                                    //alert(page_response);
                                    $("#display_log").html(page_response);

                                });


                            }
                            </script>
                            <!------------------------------------------------------->
                            <div class="modal fade modal-flex" id="Modal-tab" tabindex="-1" role="dialog">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-body">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                            <ul class="nav nav-tabs" role="tablist">

                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tab-profile"
                                                        role="tab">Timeline</a>
                                                </li>


                                            </ul>
                                            <div class="tab-content modal-body">

                                                <div class="tab-pane active" id="tab-profile" role="tabpanel">

                                                    <div class="card">
                                                        <div class="card-block">
                                                            <div class="" style="background-color:#D4F4D4;">
                                                                <div class="cd-timeline cd-container" id="display_log">






                                                                </div>
                                                            </div>
                                                        </div>





                                                    </div>


                                                </div>