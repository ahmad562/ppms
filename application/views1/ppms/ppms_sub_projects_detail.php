<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Sub Project Detail List </h4>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-8">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Sub Project Detail List Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    
                                                    <th>Sub Project Name</th>
                                                    <th>Start Date</th>
                                                    <th>End Start</th>
                                                    <th>Acceptance Date</th>
                                                    <th>Commence Start</th>
                                                   
                                                    <th>Project Amount</th>

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_subproject_detail as psd,ppms_subproject AS ps
                  where psd.subproject_id=ps.subproject_id")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                   
                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <td><?php echo $item->subproject_start_date;?></td>
                                                    <td><?php echo $item->subproject_end_date;?></td>
                                                    <td><?php echo $item->subproject_acceptancedate;?></td>
                                                    <td><?php echo $item->subproject_commencedate;?></td>
                                                    
                                                    <td><?php echo $item->subproject_amount;?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects/<?php echo $item->subproject_detail_id;?>">
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



                        <div class="col-sm-4">
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
                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="project_id" class="form-control">

                                                            <option value="">Select Sub Project List</option>
                                                            <?php $done=$this->db->query("select subproject_id,subproject_name from ppms_subproject")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->subproject_id;?>">
                                                                <?php echo $desig->subproject_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>

                                              
                                                <tr>
                                                    <td>Start Date</td>
                                                    <td><input type="date" placeholder="Enter Start Date"
                                                            required id="start_date" class="form-control"
                                                            name="start_date" tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>End Date</td>
                                                    <td><input type="date" placeholder="Enter End Date"
                                                            required id="end_date" class="form-control"
                                                            name="end_date" tabindex="1"></td>
                                                </tr>

                                                <tr>
                                                    <td>Acceptance Date</td>
                                                    <td><input type="date" placeholder="Enter Acceptance Date"
                                                            required id="acceptance_date" class="form-control"
                                                            name="acceptance_date" tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>Commence Date</td>
                                                    <td><input type="date" placeholder="Enter Commence Date"
                                                            required id="Commence_date" class="form-control"
                                                            name="commence_date" tabindex="1"></td>
                                                </tr>

                                              
                                               
                                                <tr>
                                                    <td>Amount</td>
                                                    <td><input type="text"  placeholder="Enter Project Amount"
                                                            required id="project_amount" class="form-control"
                                                            name="project_amount" tabindex="3"></td>
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


                        <?php 
	if(isset($_POST['add'])){
		extract($_POST);
	//$done=$this->db->query("select * from ppms_subproject_detail where subproject_name='$sub_project_name'")->row();
	//if($done){
//$done=$this->db->query("update ppms_subproject_detail set city_id=$city_id,start_date='$start_date',end_date='$end_date',subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
//	}else{
	$done=$this->db->query("insert into ppms_subproject_detail set subproject_start_date='$start_date',subproject_end_date='$end_date',
    subproject_acceptancedate='$acceptance_date',subproject_commencedate='$commence_date',
    subproject_id=$project_id,subproject_amount='$project_amount'");	
	//}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_sub_projects'));
		}
	
	
	}
	
	
	
	?>