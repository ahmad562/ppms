<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Project Activity </h4>

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
                                                             </tr>

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
                                                </tr>
                                                <tr>
                                                  

                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="sub_project_id" id="sub_project_idss"
                                                            class="form-control">

                                                            <option value="">Select Sub Project List</option>

                                                        </select>
                                                    </td>



                                                    <td>Activity Name</td>
                                                    <td><input type="text" placeholder="Enter Activity Name" required
                                                            id="activity_name" class="form-control" name="activity_name"
                                                            tabindex="3"></td>

                                                   
                                                </tr>


                                                <tr>
                                                    <td>Activity Detail</td>
                                                    <td><input type="text" placeholder="Enter Activity Detail" required
                                                            id="activity_detail" class="form-control"
                                                            name="activity_detail" tabindex="3"></td>

                                                    <td>Planned</td>
                                                    <td><input type="text" placeholder="Enter Project Planned" required
                                                            id="project_planned" class="form-control"
                                                            name="project_planned" tabindex="3" style="width:175px;">

                                                            <select name="planned_unit" id="planned_unit"
                                                            class="form-control" style="width:90px;float:right;margin-top:-38px">

                                                            <option value="Km">Kilometer</option>
                                                            <option value="M">Meter</option>
                                                            <option value="Tons">Tons</option>
                                                        </select>
                                                        </td>
                                                </tr>

                                                <tr>
                                                    <td>Achieved</td>
                                                    <td><input type="text" placeholder="Enter Project Plan Achieved"
                                                            required id="project_achieved" class="form-control"
                                                            name="project_achieved" tabindex="3" style="width:175px;">

                                                            <select name="achieved_unit" id="achieved_unit"
                                                            class="form-control" style="width:90px;float:right;margin-top:-38px">

                                                            <option value="Km">Kilometer</option>
                                                            <option value="Meter">Meter</option>
                                                            <option value="Tons">Ton</option>
                                                        </select>
                                                        </td>
                                                    <td>Activity Suggestions</td>
                                                    <td><input type="text" placeholder="Enter Activity Suggestions"
                                                            required id="activity_suggestion" class="form-control"
                                                            name="activity_suggestion" tabindex="3"></td>
                                                </tr>


                                                <tr>
                                                    <td>Start Date</td>
                                                    <td><input type="date" placeholder="Enter Start Date" required
                                                            id="start_date" class="form-control" name="start_date"
                                                            tabindex="1"></td>

                                                    <td>End Date</td>
                                                    <td><input type="date" placeholder="Enter End Date" required
                                                            id="end_date" class="form-control" name="end_date"
                                                            tabindex="1"></td>
                                                </tr>
                                                <tr>


                                                    <td>Activity Amount</td>
                                                    <td><input type="text" placeholder="Enter Activity Amount" required
                                                            id="activity_amount" class="form-control"
                                                            name="activity_amount" tabindex="3"></td>
                                                    <td>Activity Status</td>
                                                    <td>
                                                        <select name="status_ids" id="status_ids" class="form-control"
                                                            width="20px">
                                                            <?php 
                                                     $activity=$this->db->query("select * from activity_status")->result();
                                                     foreach($activity as $activity){
                                                     
                                                     ?>
                                                            <option value="<?php echo $activity->activity_status_id?>">
                                                                <?php echo $activity->activity_status_name;?></option>
                                                            <?php }?>
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
                                    <h5>Project Activity Records</h5>
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
                                                    <th>Activity Name</th>
                                                    <th>Activity Detail</th>
                                                    <th>Planned/Unit</th>
                                                    <th>Achieved/Unit</th>

                                                    <th>Start Date</th>
                                                    <th>End Date</th>
                                                    <th>Activity Suggestions</th>
                                                    <th>Activity Amount</th>
                                                    <th>Activity Status</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM 

                  ppms_project_activity AS ppa,
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

                                                    <td><?php echo $item->project_activity_name;?></td>
                                                    <td><?php echo $item->project_activity_text;?></td>
                                                    <td><?php echo $item->project_planned;?>/<?php echo $item->planned_unit;?></td>
                                                    <td><?php echo $item->project_achieved;?>/<?php echo $item->achieved_unit;?></td>

                                                    <td><?php echo $item->project_activity_startdate;?></td>
                                                    <td><?php echo $item->project_activity_enddate;?></td>

                                                    <td><?php echo $item->suggestion_text;?></td>
                                                    <td><?php echo $item->activity_amount;?> Million</td>
                                                    <td><?php 
                        $activityStatus=$this->db->query("select * from activity_status where activity_status_id=$item->status_id")->row();
                                                    echo $activityStatus->activity_status_name;?></td>


                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects_activity/<?php echo $item->project_activity_id;?>">
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
	$done=$this->db->query("insert into ppms_project_activity set project_activity_startdate='$start_date',project_activity_enddate='$end_date',
    project_activity_name='$activity_name',project_activity_text='$activity_detail',planned_unit='$planned_unit',achieved_unit='$achieved_unit',
    project_id=$project_id,project_planned='$project_planned',project_achieved='$project_achieved',suggestion_text='$activity_suggestion',
    activity_amount=$activity_amount,status_id=$status_ids,subproject_id=$sub_project_id");	
	//}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_sub_projects_acivity'));
		}
	
	
	}
	
	
	
	?>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>