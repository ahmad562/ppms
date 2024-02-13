
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>KPCIP-CW-01: Lot 1: Pedestrianization of Market<br> in Old City Centre;
                                                    and Urban / Green Space Initiatives <br>
                                                    Sherwan Adventure Family Park, Abbottabad </h4>

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

?>
