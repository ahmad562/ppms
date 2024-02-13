<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display PPMS Projects </h4>

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
                                    <h5>PPMS Project List Records</h5>
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
                                                    <th>Project Percentage(%)</th>
                                                    <th>Project Amount(in PKR) M</th>

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_project AS ps,
                  ppms_sector as pol,ppms_output_list as poll
                  where ps.sector_id=pol.sector_id
                  and pol.output_id=poll.output_id
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>

                                                    <td><?php echo $item->project_name;?></td>
                                                    <td><?php echo $item->project_percentage;?>%</td>
                                                    <td><?php echo $item->project_amount;?>M</td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_project/<?php echo $item->project_id;?>">
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
                                            <tr><td>OutPut</td>
                                                <td> <select class="form-control" name="output" id="output_id">
                                                                    <option value="">Select OutPut</option>
                                         <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
											<option value="<?php echo $outList->output_id?>"><?php echo $outList->output_name?></option>
																			<?php }?>
																			
																		</select>
                                                             </td>
                                                             </tr>
                                                             <tr>
                                                             <td>Sectors</td><td>
                                                             <select  class="form-control" name="sector_id" id="sectors_id">
                                            <option value="">Select Sectors</option>
                                             <?php /*$sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
											<option value="<?php echo $sectorss->sector_id?>"><?php echo $sectorss->sector_name?></option>
																			<?php }*/?>
                                                
																			</select>



                                                             </td></tr>
                                          
                                                <tr>
                                                    <td>Name</td>
                                                    <td><input type="text" autofocus placeholder="Enter Project Name"
                                                            required id="project_name" class="form-control" name="project_name"
                                                            tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>Percentage</td>
                                                    <td><input type="text" autofocus placeholder="Enter Project(%)"
                                                            required id="percentage" class="form-control" name="percentage"
                                                            tabindex="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>Amount</td>
                                                    <td><input type="text" autofocus placeholder="Enter Project Amount"
                                                            required id="project_amount" class="form-control" name="project_amount"
                                                            tabindex="3"></td>
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
	$done=$this->db->query("select * from ppms_project where project_name='$project_name'")->row();
	if($done){
$done=$this->db->query("update ppms_Project set project_name='$project_name',project_percentage=$percentage,project_amount='$project_amount' where project_name='$project_name'");	
	}else{
	$done=$this->db->query("insert into ppms_project set sector_id=$sector_id,project_name='$project_name',project_percentage=$percentage,project_amount='$project_amount'");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_projects'));
		}
	
	
	}
	
	
	
	?>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>