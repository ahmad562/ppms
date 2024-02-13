
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
<h4>Display Source</h4>

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
                                            <h5>Source Records</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>Source Name</th>

                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grm_source_tbl")->result();
                  foreach($result1 as $item){?>
                                                        <tr class="gradeX">
                                                            <td><?php echo $i;?></td>


                                                            <td><?php echo $item->source_name;?></td>

                        <td><a
    href="<?php echo base_url()?>Welcome/edit_cc/<?php echo $item->source_id_id;?>">
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
                                            <h5>Add New source</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">

                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td>source name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter source name" required
                                                                    id="source" class="form-control"
                                                                    name="source_name" tabindex="1"></td>
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
	$done=$this->db->query("select * from grm_source_tbl where source_name='$sourcename'")->row();
	if($done){

	}else{
	$done=$this->db->query("insert into grm_source_tbl set source_name='$sourcename'");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/source'));
		}
	
	
	}
	
	
	
	?>