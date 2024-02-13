<div class="pcoded-content">
    <div class="pcoded-inner-content">
                        <?php 
                                            
                                            $done=$this->db->query("SELECT * FROM 

                                            ppms_project_activity AS ppa,
                                            ppms_subproject AS psub,
                                            ppms_project AS pp,
                                            
                                            ppms_sector AS ps,
                                            ppms_output_list AS pol
                                            
                                            WHERE ppa.`subproject_id`=psub.`subproject_id`
                                            AND psub.`project_id`=pp.`project_id`
                                            AND pp.`sector_id`=ps.`sector_id`
                                            AND ps.`output_id`=pol.`output_id`
                                             and ppa.project_activity_id=$id
                                            ")->row();
                                            
                                            
                                            ?>
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
                                        <form role="form" method="post" action="<?php echo base_url() ?>Welcome/update_sub_project_activity" id="create_item" enctype="multipart/form-data"
                                            action="" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="hidden" value="<?php echo $id;?>" name="project_activity_id">

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
                                                        <select name="project_id"  id="project_id" class="form-control">

                                    <option value="<?php echo $done->project_id ?>"><?php echo $done->project_name ?></option>
                                                            <?php $done1=$this->db->query("select project_id,project_name from ppms_project")->result();
foreach($done1 as $desig){
?>
                                                            <option value="<?php echo $desig->project_id;?>">
                                                                <?php echo $desig->project_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                               
                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="sub_project_id" id="sub_project_idss"
                                                            class="form-control">
                                                <option value="<?php echo $done->subproject_id ?>"><?php echo $done->subproject_name ?></option>
                                                            

                                                        </select>
                                                    </td>
</tr>
<tr>
                                            

                                              
                                               
                                                
                                                    <td>Activity Name</td>
                                                    <td><input type="text"  placeholder="Enter Activity Name"
                                                            required id="activity_name" class="form-control" value="<?php echo $done->project_activity_name; ?>"
                                                            name="activity_name" tabindex="3"></td>
                                                </tr>


                                                <tr>
                                                    <td>Activity Detail</td>
                                                    <td><input type="text"  placeholder="Enter Activity Detail"
                                                            required id="activity_detail" class="form-control" value="<?php echo $done->project_activity_text; ?>"                                                            name="activity_detail" tabindex="3"></td>
                                               
                                                    <td>Planned</td>
                                                    <td><input type="text"  placeholder="Enter Project Planned"
                                                            required id="project_planned" class="form-control" value="<?php echo $done->project_planned; ?>" 
                                                            name="project_planned" tabindex="3" style="width:175px;">

                                                            <select name="planned_unit" id="planned_unit"
                                                            class="form-control" style="width:90px;float:right;margin-top:-38px">
<?php if($done->planned_unit=='Km'){?>
    <option value="Km">Kilometer</option>
<?php }else if($done->planned_unit=='M'){?>
<option value="M">Meter</option>
<?php }else if($done->planned_unit=='Tons'){?>
    <option value="Tons">Tons</option>
    <?php }else{?>
        <option value="">Select Unit</option>

        <?php }?>
                                                            <option value="Km">Kilometer</option>
                                                            <option value="M">Meter</option>
                                                            <option value="Tons">Tons</option>
                                                        </select>

                                                      
                                                        
                                                        </td>
                                                </tr>

                                                <tr>
                                                    <td>Achieved</td>
                                                    <td><input type="text"  placeholder="Enter Project Plan Achieved"
                                                            required id="project_achieved" class="form-control" value="<?php echo $done->project_achieved; ?>"
                                                            name="project_achieved" tabindex="3" style="width:175px;">
                                                        
                                                            <select name="achieved_unit" id="achieved_unit"
                                                            class="form-control" style="width:90px;float:right;margin-top:-38px">
                                                            <?php if($done->achieved_unit=='Km'){?>
    <option value="Km">Kilometer</option>
<?php }else if($done->achieved_unit=='M'){?>
<option value="M">Meter</option>
<?php }else if($done->achieved_unit=='Tons'){?>
    <option value="Tons">Tons</option>
    <?php }else{?>
        <option value="">Select Unit</option>

        <?php }?>
                                                            <option value="Km">Kilometer</option>
                                                            <option value="Meter">Meter</option>
                                                            <option value="Tons">Ton</option>
                                                        </select>
                                                        
                                                        </td>
                                                            <td>Activity Suggestions</td>
                                                    <td><input type="text"  placeholder="Enter Activity Suggestions"
                                                            required id="activity_suggestion" class="form-control"
                                                            name="activity_suggestion" tabindex="3" value="<?php echo $done->suggestion_text; ?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Start Date</td>
                                                    <td><input type="date" placeholder="Enter Start Date"
                                                            required id="start_date" class="form-control" value="<?php echo $done->project_activity_startdate; ?>" 
                                                            name="start_date"  tabindex="1"></td>
                                               
                                                    <td>End Date</td>
                                                    <td><input type="date" placeholder="Enter End Date"
                                                            required id="end_date" class="form-control" value="<?php echo $done->project_activity_enddate; ?>" 
                                                            name="end_date" tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                   
                                              
                                                   <td>Activity Amount</td>
                                                   <td><input type="text"  placeholder="Enter Activity Amount"
                                                           required id="activity_amount" class="form-control"
                                                           name="activity_amount" tabindex="3" value="<?php echo $done->activity_amount; ?>"></td>
                                                           <td>Activity Status</td>
                                                   <td>
                                                   <select name="status_ids" id="status_ids" class="form-control" width="20px">
                                                   <?php 
                        $activityStatus=$this->db->query("select * from activity_status where activity_status_id=$done->status_id")->row();
                                                    ?>
                        <option value="<?php echo $activityStatus->activity_status_id?>"><?php echo $activityStatus->activity_status_name;?></option>
                                                   

                                                    <?php 
                                                    $activity=$this->db->query("select * from activity_status")->result();
                                                    foreach($activity as $activity){
                                                    
                                                    ?>
                                                       <option value="<?php echo $activity->activity_status_id?>"><?php echo $activity->activity_status_name;?></option>
                                                      <?php }?>
                                                       </select>
                                                       
                                                       </td>
                                               </tr>
                                              
                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Update</button></td>
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
                                    <h5>Project Project Activity Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                            <!-- Zero config.table start -->
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
                            <!-- Zero config.table end -->

                            </div> </div> </div>

                       