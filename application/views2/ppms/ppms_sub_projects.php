<?php 
$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');
/////////////////////////////////////////////////////////////////
if($groupID > 1){
    $cityii="and c.city_id=$cityID";
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
                        <h4>Display Sub Project List </h4>

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







                                                    <td>City</td>
                                                    <td>
                                                        <select name="city_id" class="form-control">

                                                            <option value="">Select City</option>
                                                            <?php 
                          
                         $donecity=$this->db->query("select city_id,city_name from city $cityoption")->result();
foreach($donecity as $donecity){
?>
                                                            <option value="<?php echo $donecity->city_id;?>">
                                                                <?php echo $donecity->city_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Sub Project Name</td>
                                                    <td><input type="text" placeholder="Enter Sub Project Name" required
                                                            id="sub_project_name" class="form-control"
                                                            name="sub_project_name" tabindex="1"></td>

                                                    <td>Start Date</td>
                                                    <td><input type="date" placeholder="Enter Start Date" 
                                                            id="start_date" class="form-control" name="start_date"
                                                            tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>End Date</td>
                                                    <td><input type="date" placeholder="Enter End Date" 
                                                            id="end_date" class="form-control" name="end_date"
                                                            tabindex="1"></td>

                                                    <td>Acceptance Date</td>
                                                    <td><input type="date" placeholder="Enter Acceptance Date" 
                                                            id="acceptance_date" class="form-control"
                                                            name="acceptance_date" tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>Commence Date</td>
                                                    <td><input type="date" placeholder="Enter Commence Date" 
                                                            id="Commence_date" class="form-control" name="commence_date"
                                                            tabindex="1"></td>

                                                    <td>Percentage(%)</td>
                                                    <td><input type="text" placeholder="Enter Project(%)" required
                                                            id="percentage" class="form-control" name="percentage"
                                                            tabindex="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>Contract Amount(in PKR) Million</td>
                                                    <td><input type="text" placeholder="Enter Project Amount" required
                                                            id="project_amount" class="form-control"
                                                            name="project_amount" tabindex="3"></td>
                                                </tr>
                                                <tr>
                                                <td>Mobilization Advance</td>
                                                    <td>
                                                        <select  placeholder="Enter Mobilizaion Advance Amount" required
                                                            id="mobilization_advance" class="form-control"
                                                            name="mobilization_advance">
                                                        
                                                        <option value="No">No</option>
                                                        <option value="Yes">Yes</option>
                                                        </select>
                                                    
                                                    </td>
                                                    <td>Mobilization Advance <br>Amount(in PKR) Million</td>
                                                    <td><input type="text" placeholder="Enter Project Amount" required
                                                            id="mobilization_advance_amount" class="form-control"
                                                            name="mobilization_advance_amount" tabindex="3"></td>
                                                </tr>
                                                <tr>
                                                    <td>Detail</td>
                                                    <td colspan="3"><textarea name="detail" id="detail" required
                                                            class="form-control">


                                                </textarea></td>
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
                                    <h5>Sub Project List Records</h5>
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
                                                    <th>City Name</th>


                                                    <th>Start Date</th>
                                                    <th>End Start</th>
                                                    <th>Acceptance Date</th>
                                                    <th>Commence Date</th>


                                                    <th>Percentage(%)</th>
                                                    <th>Amount(in PKR) Million</th>
                                                    <th>Detail</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
              
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM 
                  ppms_subproject AS psub,
                  ppms_project AS pp,
                  city AS c,
                  ppms_sector AS ps,
                  ppms_output_list AS pol
                  
                  WHERE psub.`project_id`=pp.`project_id`
                  AND pp.`sector_id`=ps.`sector_id`
                  AND ps.`output_id`=pol.`output_id`
                  AND psub.`city_id`=c.`city_id`
                  $cityii
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->project_name;?></td>

                                                    <td><?php echo $item->subproject_name;?></td>
                                                    <td><?php echo $item->city_name;?></td>
                                                    <td><?php echo $item->subproject_start_date;?></td>
                                                    <td><?php echo $item->subproject_end_date;?></td>
                                                    <td><?php echo $item->subproject_acceptancedate;?></td>
                                                    <td><?php echo $item->subproject_commencedate;?></td>


                                                    <td><?php echo $item->subproject_percentage;?>%</td>
                                                    <td><?php echo $item->subproject_amount;?>M</td>
                                                    <td><?php echo $item->detail;?></td>
                                        <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects/<?php echo $item->subproject_id;?>">
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
	/*$done=$this->db->query("select * from ppms_subproject where subproject_name='$sub_project_name'")->row();
	if($done){
$done=$this->db->query("update ppms_subproject set detail='$detail',subproject_start_date='$start_date',subproject_end_date='$end_date',
subproject_acceptancedate='$acceptance_date',subproject_commencedate='$commence_date',city_id=$city_id,subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
	}else{}
        */
	$done=$this->db->query("insert into ppms_subproject set detail='$detail',subproject_start_date='$start_date',subproject_end_date='$end_date',
    subproject_acceptancedate='$acceptance_date',subproject_commencedate='$commence_date',city_id=$city_id,project_id=$project_id,subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount',mobilization_advance_amount=$mobilization_advance_amount,mobilization_advance='$mobilization_advance'");	
	
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_sub_projects'));
		}
	
	
	}
	
	
	
	?>