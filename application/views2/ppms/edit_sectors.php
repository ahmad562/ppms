<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display PPMS Sector List</h4>

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
                                    <h5>PPMS Sector List Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>OutPutList</th>
                                                    <th>Sector Name</th>
                                                    <th>Sector Percentage</th>
                                                    <th>Sector Amount</th>

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_sector AS ps,ppms_output_list as pol
                  where ps.output_id=pol.output_id
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->output_name;?></td>

                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->sector_percentage;?></td>
                                                    <td><?php echo $item->sector_amount;?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sector/<?php echo $item->Sector_id;?>">
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
<?php  $edit_record = $this->db->query("SELECT * FROM ppms_sector AS ps,ppms_output_list as pol
                  where ps.output_id=pol.output_id and sector_id=$id
                  ")->row();
                  ?>
<input type="hidden" autofocus placeholder="Enter Sector Name"
                                                            required id="sector_id" class="form-control" name="sector_id"
                                                            tabindex="2" value="<?php echo $edit_record->sector_id?>">
                                            <table class="table">
                                            <tr>
                                                    <td>output</td>
                                                    <td> 
                                                         <select name="output_id" class="form-control">

<option value="<?php echo $edit_record->output_id?>"><?php echo $edit_record->output_name?></option>
<?php $done=$this->db->query("select output_id,output_name from ppms_output_list")->result();
foreach($done as $desig){
?>
<option value="<?php echo $desig->output_id;?>">
    <?php echo $desig->output_name;?></option>
<?php }?>
</select></td>
                                                </tr>
                                                <tr>
                                                    <td>Name</td>
                                                    <td><input type="text" autofocus placeholder="Enter Sector Name"
                                                            required id="sector_name" class="form-control" name="sector_name"
                                                            tabindex="2" value="<?php echo $edit_record->sector_name?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Percentage</td>
                                                    <td><input type="text" autofocus placeholder="Enter Sector(%)"
                                                            required id="percentage" class="form-control" name="percentage"
                                                            tabindex="3" value="<?php echo $edit_record->sector_percentage?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Amount</td>
                                                    <td><input type="text" autofocus placeholder="Enter Sector Amount"
                                                            required id="sector_amount" class="form-control" name="sector_amount"
                                                            tabindex="4" value="<?php echo $edit_record->sector_amount?>"></td>
                                                </tr>

                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="4">Save Record</button></td>
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
	$done=$this->db->query("select * from ppms_sector where sector_id='$sector_id'")->row();
	if($done){
$done=$this->db->query("update ppms_sector set output_id=$output_id,sector_name='$sector_name',sector_percentage='$percentage',sector_amount='$sector_amount' where sector_id=$sector_id");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_sectors'));
		}
	
	
	}
	
	
	
	?>