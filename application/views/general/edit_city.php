<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display City</h4>

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
                                    <h5>City Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Serial# </th>
                                                <th>City</th>

                                                <th>Edit</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM city")->result();
                  foreach($result1 as $item){?>
                                            <tr class="gradeX">
                                                <td><?php echo $i;?></td>


                                                <td><?php echo $item->city_name;?></td>

                                                <td align="center"><a
                                                        href="<?php echo base_url()?>Welcome/edit_city/<?php echo $item->city_id;?>">
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
                                <h5>Edit City</h5>
                               
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
 <form role="form" method="post" id="create_item" enctype="multipart/form-data" action="<?php echo base_url('Welcome/edit_city_record')?>"
                                    autocomplete="off"
                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
                                    <?php 
                    $result1 = $this->db->query("SELECT * FROM city 
                    where city_id=$id")->row();

                    ?>

                                    <input type="hidden" placeholder="Enter City Name" required
                                        id="city_id" class="form-control" name="city_id"
                                        value="<?php echo $result1->city_id;?>">
                                    <table class="table">
                                        <tr>
                                            <td>City</td>
                                            <td>
                                                <input type="text" autofocus placeholder="Enter City Name"
                                                    required id="city" class="form-control" name="city_name"
                                                    tabindex="1" value="<?php echo $result1->city_name;?>">
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
	//////if(isset($_POST['add'])){
		
   // exit;
	////}
	
	
	
	?>