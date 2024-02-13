<?php 
$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');
/////////////////////////////////////////////////////////////////
if($groupID > 1){
    $cityii="and d.city_id=$cityID";
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
                        <h4>PPMS File </h4>

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
                                                    <td>File Name</td>
                                                    <td><input type="text" name="file_name" class="form-control"></td>

                                                    <td>Module</td>
                                                    <td>
                                                        <input type="text" name="module_id" class="form-control">
                                                   </td>
                                                </tr>
                                                <tr>
                                                    <td>UserName</td>
                                                    <td><input type="text" name="user_name" class="form-control"></td>

                                                    <td>Flag</td>
                                                    <td>
                                                        <input type="text" name="flag_id" class="form-control">
                                                   </td>




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
                                    <h5>File List Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>

                                                    <th>Name</th>

                                                    <th>UserName</th>

                                                    <th>Module</th>

                                                    <th>Status</th>

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT * FROM 
                  ppms_es_file
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->es_file_name;?></td>

                                                    <td><?php echo $item->es_module_id;?></td>

                                                    <td><?php echo $item->es_userid;?></td>

                                                    <td><?php echo $item->es_flag;?></td>


                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects_assign/<?php echo $item->es_file_id;?>">
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

        $done=$this->db->query("insert into ppms_es_file 
        set es_file_name='$cname',es_module_id=$module_id,es_userid=$user_name,es_flag=$flag_id");	

	if($done){
	redirect(base_url('Enviroment/es_file'));
		}
	
	
	}
	
	
	
	?>