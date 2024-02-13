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
                                                    <th>Sector Name</th>
                                                    <th>Project Name</th>
                                                    <th>Project Percentage(%)</th>
                                                    <th>Project Amount(in PKR) Million</th>

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_project AS ps,ppms_sector as pol
                  where ps.sector_id=pol.sector_id
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
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
                                    <h5>Edit Record</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
<?php  $edit = $this->db->query("SELECT * FROM ppms_project AS ps,ppms_sector as pol
                  where ps.sector_id=pol.sector_id and project_id=$id
                  ")->row();?>

<input type="hidden" autofocus placeholder="Enter Sector Name"
                                                            required id="project_id" class="form-control" name="project_id"
                                                            tabindex="2" value="<?php echo $edit->project_id?>">

                                            <table class="table">
                                            <tr>
                                                    <td>Sectors</td>
                                                    <td> 
<select name="sector_id" class="form-control">
<option value="<?php echo $edit->sector_id?>"><?php echo $edit->sector_name?></option>
<?php $done=$this->db->query("select sector_id,sector_name from ppms_sector")->result();
foreach($done as $desig){
?>
<option value="<?php echo $desig->sector_id;?>">
    <?php echo $desig->sector_name;?></option>
<?php }?>
</select></td>
                                                </tr>
                                                <tr>
                                                    <td>Name</td>
                                                    <td><input type="text" autofocus placeholder="Enter Project Name"
                                                            required id="project_name" class="form-control" name="project_name"
                                                            tabindex="1" value="<?php echo $edit->project_name;?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Percentage</td>
                                                    <td><input type="text" autofocus placeholder="Enter Project(%)"
                                                            required id="percentage" class="form-control" name="percentage"
                                                            tabindex="2" value="<?php echo $edit->project_percentage;?>"></td>
                                                </tr>
                                                <tr>
                                                    <td>Amount</td>
                                                    <td><input type="text" autofocus placeholder="Enter Project Amount"
                                                            required id="project_amount" value="<?php echo $edit->project_amount;?>" class="form-control" name="project_amount"
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
	//$done=$this->db->query("select * from ppms_project where project_id=$project_id")->row();
	//if($done){
$done=$this->db->query("update ppms_project set sector_id=$sector_id,project_name='$project_name',project_percentage=$percentage,project_amount='$project_amount' where project_id=$project_id");	
	//}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/edit_project/'.$project_id));
		}
	
	
	}
	
	
	
	?>