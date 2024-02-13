<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Designations</h4>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-6">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Designation Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Serial# </th>
                                                <th>Designation</th>

                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM designation")->result();
                  foreach($result1 as $item){?>
                                            <tr class="gradeX">
                                                <td><?php echo $i;?></td>


                                                <td><?php echo $item->designation_name;?></td>

                                                <td align="center"><a
                                                        href="<?php echo base_url()?>Welcome/edit_designation/<?php echo $item->designation_id;?>">
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
                    <div class="col-sm-6">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit Designation</h5>
                               
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                <form role="form" method="post" id="create_item" enctype="multipart/form-data" action=""
                                    autocomplete="off"
                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
                                    <?php 
                    $result1 = $this->db->query("SELECT * FROM designation 
                    where designation_id=$id")->row();

                    ?>

                                    <input type="hidden" placeholder="Enter designation Name" required
                                        id="designation_id" class="form-control" name="designation_id"
                                        value="<?php echo $result1->designation_id;?>">
                                    <table class="table">
                                        <tr>
                                            <td>Designation</td>
                                            <td>
                                                <input type="text" autofocus placeholder="Enter designation Name"
                                                    required id="designation" class="form-control" name="designation"
                                                    tabindex="1" value="<?php echo $result1->designation_name;?>">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><button type="submit" class="btn btn-block btn-outline btn-primary"
                                                    id="add" name="add" tabindex="2">Edit Record</button></td>
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
	///$done=$this->db->query("select * from designation where designation_name='$designation'")->row();
	//if($done){
$done=$this->db->query("update designation set designation_name='$designation'
 where designation_id=$designation_id");	
	///}
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/display_designation'));
		}
	
	
	}
	
	
	
	?>