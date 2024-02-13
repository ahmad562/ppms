
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
 <h4>Display Tier</h4>

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
                                            <h5>Tier Records</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>tier name</th>
                                                            <th>tier days</th>

                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grm_tier_tbl")->result();
                  foreach($result1 as $item){?>
                                                        <tr class="gradeX">
                                                            <td><?php echo $i;?></td>


                                                            <td><?php echo $item->tier_name;?></td>

                                                              <td><?php echo $item->tier_days;?></td>

                                                            <td><a
                                                                    href="<?php echo base_url()?>complaint/edit_tier/<?php echo $item->tier_id;?>">
                                                                    <img src="<?php echo base_url()?>img/edit.PNG"
                                                                        width="30px" height="30px" /> </a>
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
                                            <h5>Add New Tier</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">

                                                    <table class="table gridexample">
                                                        <tr>
                                                    <td>Tier name</td>
                        <td><input type="text" autofocus 
                        placeholder="Enter tier name" required
                        id="tier " class="form-control"
                        name="tier_name" tabindex="1"></td>
                             </tr>
                                                     
                                
                                          <tr>  
                        <td>Tier days</td>
                        <td><input type="text" autofocus 
                        placeholder="tier days" required
                        id="tier" class="form-control"
                        name="tier_days" tabindex="1"style=></td>
                             </tr>
                                                        <tr>
                                                            <td><button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                        </tr>
                                                    </table>
                                                </form>
                                            </div>
                                        </div>


                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                            </div>

                        </div>
                        <?php 
	if(isset($_POST['add'])){
		extract($_POST);
	
	$done=$this->db->query("insert into grm_tier_tbl set tier_name='$tier_name',tier_days=$tier_days");	
		
		//echo $this->db->last_query();
	
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('complaint/tier'));
		}
	
	
	}
	
	
	
	?>