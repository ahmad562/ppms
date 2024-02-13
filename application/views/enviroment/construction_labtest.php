<?php 
$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');
if($groupID > 1){
    $cityii="and ppsp.city_id=$cityID";
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
                        <h4>Construction Lab Test Documents </h4>

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
                                            action="<?php echo base_url('Enviroment/add_labtest')?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">


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

                                                    <td>Name</td>
                                                    <td><input type="text" name="site_name" class="form-control"></td>


                                                    <td>Document Attached</td>
                                                    <td>
                                                        <input type="file" name="images[]" class="form-control"
                                                            multiple>

                                                    </td>
                                                </tr>

                                                <tr>

                                                    <td>Date</td>
                                                    <td><input type="date" name="doc_date" class="form-control"></td>


                                                    <td>Remarks</td>
                                                    <td colspan="3">
                                                        <textarea name="remarks" class="form-control">


                                                    </textarea>

                                                    </td>

                                                </tr>
                                                <tr>
                                                <td>Status</td>
<td>
                                                    <select name="status_id" id="status_id"
                                                            class="form-control" required>
                                                            <option value="">Select Status</option>
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
                                    <h5> List Records</h5>
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

                                                    <th>Name</th>
                                                    <th>Date</th>
                                                    <th>File Attached</th>
                                                    <th>Remarks</th>
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
                  ppms_es_construction_labtest as a,
                  ppms_subproject_site AS c,
                  ppms_subproject AS d,
                  ppms_project AS e,
                  ppms_sector AS f,
                  ppms_output_list AS g
                  WHERE  a.`sps_id`=c.`sps_id`
                  AND c.`subproject_id`=d.`subproject_id`
                  AND d.`project_id`=e.`project_id`
                  AND e.`sector_id`=f.`sector_id`
                  AND f.`output_id`=g.`output_id`
                 
                 
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
                                                    <td>
            <?php $filesss = $this->db->query("SELECT * FROM  ppms_es_file_attached where id=$item->es_cit_id and es_module_id=2")->result();
                            $x=1;
                 foreach($filesss as $filesss){?>
         <a href="<?php echo base_url('img/lab/').$filesss->attached_file;?>" target="_new">(<?php echo $x;?>)File Attached<br></a>    
                                    <?php 
                                $x++;}?>                
                                                  </td>
                                                   
                                                    <td><?php echo $item->es_cit_remarks;?></td>

                                                    <td><?php if($item->es_status==0){
                                                        echo "Pending";
                                                    }else if($item->es_status==1){
                                                        echo "Approved";

                                                    }
                                                        ?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Enviroment/edit_construction_labtest/<?php echo $item->es_cit_id;?>">
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





                       