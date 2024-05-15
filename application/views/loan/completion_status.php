<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Physical Progress</h4>

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
                                    <h5>Physical Progress Completion Status</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('CompletionStatus/store')?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
                                           


                                            <table class="table">
                                                <tr>
                                                    <td>Year</td>
    <td><select name="year" required class="form-control">
    <?php
    // Assuming you want a range of years, change the start and end values accordingly
    $start_year = date("Y") - 4; // 10 years ago
    $end_year = date("Y") + 30; // 10 years from now

    for ($year = $start_year; $year <= $end_year; $year++) {
        echo "<option value=\"$year\">$year</option>";
    }
    ?>
</select></td>
                                               
                                                    <td>Month</td>
                                                    <td>
                                                        <select name="month" required class="form-control">
    <?php
    $months = array(
        "January", "February", "March", "April", "May", "June",
        "July", "August", "September", "October", "November", "December"
    );

    foreach ($months as $month) {
        echo "<option value=\"$month\">$month</option>";
    }
    ?>
</select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Planned</td>
                                                    <td><input type="text" name="planned" required class="form-control">
                                                    </td>
                                               
                                                    <td>Achieved</td>
                                                    <td><input type="text" name="achieved" required class="form-control">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select required class="form-control" name="output"
                                                            id="output_id" >
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
                                                        <select required class="form-control" name="sectors"
                                                            id="sectors_id">
                                                            <option value="">Select Sectors</option>
                                                            <?php /*$sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                            <option value="<?php echo $sectorss->sector_id?>">
                                                                <?php echo $sectorss->sector_name?></option>
                                                            <?php }*/?>

                                                        </select>



                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td>
                                                        <select required name="project_id" id="project_id"
                                                            class="form-control">

                                                            <option value="">Select Project</option>
                                                            <?php /*?><?php $done=$this->db->query("select project_id,project_name from ppms_project")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->project_id;?>">
                                                                <?php echo $desig->project_name;?></option>
                                                            <?php }?><?php */?>
                                                        </select>
                                                    </td>

                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select required name="sub_project_id" id="sub_project_idss"
                                                            class="form-control" onChange="display_data(this.value)">

                                                            <option value="">Select Sub Project List</option>
                                                        </select>
                                                    </td>



                                                </tr>
                                                <tr style="display:none">
                                                    <td>Sub Sub Project</td>
                                                    <td>
                                                        <select  name="sub_sub_project_id"
                                                            id="sub_sub_project_id" class="form-control" onChange="get_bill(this.value)">

                                                            <option value="">Select Sub Sub Project List</option>
                                                        </select>
                                                    </td>



                                                </tr>
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
                                    <h5>Physical Progress Completion Status</h5>
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
                                                    <!-- <th>Sub Sub Project Name</th> -->
                                                    <th>Year</th>
                                                    <th>Month</th>
                                                    <th>Planned</th>
                                                    <th>Achieved</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php

                $user_data_session = $this->session->userdata();
                $subproject_check = "";
                if($user_data_session['groupid']==3){
                    $query_subproject = $this->db->query("select * from assign_regional where emp_id= '".$user_data_session['empid']."'")->result();
                    $subproject_check = " and psub.subproject_id ='".$query_subproject[0]->subproject_id."' ";
                }
                error_reporting(0);
			   
               $i=1; 
               //old query
            //    $result1 = $this->db->query("SELECT * FROM 
            //       ppms_completion_status AS pcs,
            //       ppms_subproject_area AS ppa,
            //       ppms_subproject AS psub,
            //       ppms_project AS pp,
            //       ppms_sector AS ps,
            //       ppms_output_list AS pol
                  
            //       WHERE 
                  
            //       pcs.sub_sub_id=ppa.project_area_id
            //       AND ppa.`subproject_id`=psub.`subproject_id`
            //       AND psub.`project_id`=pp.`project_id`
            //       AND pp.`sector_id`=ps.`sector_id`
            //       AND ps.`output_id`=pol.`output_id`")->result();
                  $result1 = $this->db->query("SELECT * FROM 
                  ppms_completion_status AS pcs,
                  ppms_subproject AS psub,
                  ppms_project AS pp,
                  ppms_sector AS ps,
                  ppms_output_list AS pol
                  
                  WHERE 
                  
                  pcs.sub_project_id=psub.subproject_id
                  AND psub.`project_id`=pp.`project_id` ".$subproject_check."
                  AND pp.`sector_id`=ps.`sector_id`
                  AND ps.`output_id`=pol.`output_id` ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->project_name;?></td>
                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <!-- <td><?php //echo $item->project_area_name;?></td> -->
                                                    <td><?php echo $item->year;?></td>
                                                    <td><?php echo $item->month;?></td>

                                                      <td><?php echo $item->planned;?></td>
                                                      <td><?php echo $item->achieved;?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>CompletionStatus/edit/<?php echo $item->cs_id;?>">
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