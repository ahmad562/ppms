<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Backup</h4>

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
            <h5>Backup Database <a href="<?php echo base_url('Welcome/take_backup')?>"><button class="btn btn-danger">Take Backup</button></a>
            </h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>Date</th>
													<th>File</th>

                                                   
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM db_backups")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
												
                                                    <td><a
                                                            href="<?php echo base_url()?>db_backups/<?php echo $item->backup_file;?>"><?php echo $i;?></a></td>

													<td><a
                                                            href="<?php echo base_url()?>db_backups/<?php echo $item->backup_file;?>"><?php echo $item->backup_date;?></a></td>
                                                    <td><a
                                                            href="<?php echo base_url()?>db_backups/<?php echo $item->backup_file;?>"><?php echo $item->backup_file;?></a></td>

													
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
	$done=$this->db->query("select * from city where city_name='$city'")->row();
	if($done){
$done=$this->db->query("update city set city_name='$city' where city_name='$city'");	
	}else{
	$done=$this->db->query("insert into city set city_name='$city'");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/display_city'));
		}
	
	
	}
	
	
	
	?>