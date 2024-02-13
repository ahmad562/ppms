<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display PPMS List</h4>

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
                                    <h5>PPMS Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    
                                                    <th>Output Name</th>
                                                    <th>Output Percentage(%)</th>
                                                    <th>Output Amount(in Pkr)</br>
                                                Million</th>

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_output_list")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>


                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->output_percentage;?>%</td>
                                                    <td><?php echo $item->output_amount;?>M</td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_ppms/<?php echo $item->output_id;?>">
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
                                                    <td>Name</td>
                                                    <td><input type="text" autofocus placeholder="Enter OutPut Name"
                                                            required id="output_name" class="form-control" name="output_name"
                                                            tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>Percentage(%)</td>
                                                    <td><input type="text" autofocus placeholder="Enter OutPut(%)"
                                                            required id="percentage" class="form-control" name="percentage"
                                                            tabindex="2"></td>
                                                </tr>
                                                <tr>
                                                    <td>Amount(in PKR) Million</td>
                                                    <td><input type="text" autofocus placeholder="Enter OutPut Amount"
                                                            required id="output_amount" class="form-control" name="output_amount"
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
	$done=$this->db->query("select * from ppms_output_list where output_name='$output_name'")->row();
	if($done){
$done=$this->db->query("update ppms_output_list set output_name='$output_name' where output_name='$output_name',output_percentage='$percentage',output_amount='$output_amount'");	
	}else{
	$done=$this->db->query("insert into ppms_output_list set output_name='$output_name',output_percentage=$percentage,output_amount='$output_amount'");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms'));
		}
	
	
	}
	
	
	
	?>