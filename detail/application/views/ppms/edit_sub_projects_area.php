<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Edit Sub Sub Project </h4>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">

<?php  $done = $this->db->query("SELECT * FROM ppms_subproject_area AS ppa,
                  ppms_subproject AS psub,
                  ppms_project AS pp,
                  ppms_sector AS ps,
                  ppms_output_list AS pol
                  
                  WHERE ppa.`subproject_id`=psub.`subproject_id`
                  AND psub.`project_id`=pp.`project_id`
                  AND pp.`sector_id`=ps.`sector_id`
                  AND ps.`output_id`=pol.`output_id` and ppa.project_area_id=$id")->row();
                  ?>


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
                                                             </tr>

                                                    <td>Sectors</td>
                                                    <td>
                                                        <select class="form-control" name="sectors" id="sectors_id">
                                                        <option value="<?php echo $done->sector_id;?>">
                                                                <?php echo $done->sector_name;?></option>
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

                                                        <option value="<?php echo $done->project_id ?>"><?php echo $done->project_name ?></option>
                                                           

                                                        </select>
                                                    </td>
                                                </tr>
                                                </tr>
                                                <tr>
                                                  

                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="sub_project_id" id="sub_project_idss"
                                                            class="form-control">

                                                            <option value="<?php echo $done->subproject_id;?>"><?php echo $done->subproject_name;?></option>

                                                        </select>
                                                    </td>



                                                    <td>Sub Sub Project Name</td>
                                                    <td><input type="text" placeholder="Enter Area Name" required
                                                            id="area_name" class="form-control" name="area_name"
                                                            tabindex="3" value="<?php echo $done->project_area_name;?>">
                                                        
                                                            <input type="text" placeholder="Enter Area Name" required
                                                            id="area_id" class="form-control" name="area_id"
                                                            tabindex="3" value="<?php echo $done->project_area_id;?>">
                                                        </td>

                                                   
                                                </tr>


                                               

                                               


                                               
                                               
                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Edit Record</button></td>
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
                                    <h5>Sub Project Area Records</h5>
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
                                                    <th>Sub Sub Project Name</th>
                                                   
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM 

ppms_subproject_area AS ppa,
                  ppms_subproject AS psub,
                  ppms_project AS pp,
                  ppms_sector AS ps,
                  ppms_output_list AS pol
                  
                  WHERE ppa.`subproject_id`=psub.`subproject_id`
                  AND psub.`project_id`=pp.`project_id`
                  AND pp.`sector_id`=ps.`sector_id`
                  AND ps.`output_id`=pol.`output_id`")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->project_name;?></td>
                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <td><?php echo $item->project_area_name;?></td>
                                                   


                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects_area/<?php echo $item->project_area_id;?>">
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
	//$done=$this->db->query("select * from ppms_subproject_detail where subproject_name='$sub_project_name'")->row();
	//if($done){
//$done=$this->db->query("update ppms_subproject_detail set city_id=$city_id,start_date='$start_date',end_date='$end_date',subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
//	}else{
	$done=$this->db->query("update ppms_subproject_area set project_area_name='$area_name',subproject_id=$sub_project_id where project_area_id=$area_id");	
	//}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_sub_projects_area'));
		}
	
	
	}
	
	
	
	?>
                      