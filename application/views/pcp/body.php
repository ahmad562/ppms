
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Welcome to <?php 
    $empID=$this->session->userdata('empid');
    $orgee=$this->db->query("SELECT organization_name,e.city_id,d.organization_id,e.emp_id
    FROM
    emp AS e,organization AS d
    WHERE e.organization_id=d.organization_id and e.emp_id=$empID")->row();
   ///echo $this->db->last_query();
   /////////////////////////////////////////////////////////////////////////////////////////////
   $citi=$this->db->query("SELECT city_name
   FROM
   city 
   WHERE city_id=$orgee->city_id")->row();
   /////////////////////////////////////////////////////////////////////////////////////////
   if($orgee){

    if($orgee->organization_id==1 or $orgee->organization_id==2){
   /// echo $orgee->organization_name."(".$citi->city_name.")";
   echo "<h4> CW-Physical-Progress</h4>";
   ///echo "<br>"; 
   echo "<span>Sector/CW/Lot Physical Progress </span>";
    }else{
        if($orgee->emp_id > 1){   
        echo $orgee->organization_name;
        }else{
            echo "Admin";  
        }

    }
   }else{
    echo "Admin";
   }
    
    ?> </h4>
                                        </div>
                                        <div class="page-header-breadcrumb">
                                            <ul class="breadcrumb-title">
                                                <li class="breadcrumb-item">
                                                    <a href="index.html">
                                                        <i class="icofont icofont-home"></i>
                                                    </a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Pages</a>
                                                </li>
                                                <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="page-body">
                                      
                                </div>
                            </div>

                            <div id="styleSelector"></div>
                            </div>
                        </div>
                   
    
                        <div class="pcoded-inner-content">

                        <div class="main-body">
        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
              
			        <!-- New ticket button card start -->
                        <div class="card">
						<div class="card-header">
                        <h5>Filter</h5>
                        <span>By <code>SECTOR</code> or <code>CW</code> or <code>LOT</code></span>
								<div class="card-header-right">
									<i class="icofont icofont-rounded-down"></i>
									<i class="icofont icofont-refresh"></i>
									<i class="icofont icofont-close-circled"></i>
								</div>
                    </div>
                    <form method="post" action="">
                            <div class="card-block">
                                <div class=" waves-effect waves-light m-r-10 v-middle issue-btn-group">
								<div class="row">
								<?php /*?> <div class="col-sm-3">
                                                                   <select class="form-control" name="output" id="output_id">
                                                                    <option value="">Select OutPut</option>
                                         <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
											<option value="<?php echo $outList->output_id?>"><?php echo $outList->output_name?></option>
																			<?php }?>
																			
																		</select>
																							</div>
                                                                                            <?php */?>

																							<div class="col-sm-3">
											<select  class="form-control" name="sectors" id="sectors_id">
                                            <option value="">Select Sectors</option>
                                             <?php $sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
											<option value="<?php echo $sectorss->sector_id?>"><?php echo $sectorss->sector_name?></option>
																			<?php }?>
                                                
																			</select>
                                                                </div>
																<div class="col-sm-3">
																<select  class="form-control" name="projects" id="projects">
                                                                <option value="">Select Projects</option>			
																			
                                             <?php /*$projects=$this->db->query("select * from ppms_project")->result();
                                                             foreach($projects as $projectss){?>
											<option value="<?php echo $projectss->project_id?>"><?php echo $projectss->project_name?></option>
																			<?php }
                                                                            
                                                                            */?>
                                                
																			</select>
																</div>
																
																
																<div class="col-sm-3">
											 <input type="submit" name="search" class="btn btn-primary btn-block" value="Filter">
																</div>
																
																
																</div>
                                    
                                                             </form>
                                </div>
                            </div>
                        </div>
                        <!-- New ticket button card end -->
			  
			  
			  
            </div>
            <?php 
            if(isset($_POST['search'])){
                //error_reporting(0);
           extract($_POST);
          /* echo $output_id = $this->input->post('output_id');
            ////////////////////////////////////////////////////////
            echo "pakistan".$output_id."No data";
            echo $sectors_id;
           echo $projects;
          
            if($output){
                //echo "kifayat";
                $outputs="and pol.output_id=$output";
            } */
            if($sectors){
                 $sectorss="and se.sector_id=$sectors";
            }
            if($projects){
                $projectss="and ps.project_id=$projects";
            }
?>

            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                  
                    <div class="col-xl-12">
                        <!-- New ticket button card start -->
                       <?php /*?> <div class="card">
                            <div class="card-block">
                                <div class=" waves-effect waves-light m-r-10 v-middle issue-btn-group">
                                    <button type="button" class="btn btn-sm btn-success btn-new-tickets waves-effect waves-light m-r-15 m-t-10 m-b-10"><i class="icofont icofont-paper-plane"></i><span class="m-l-10">New Tickets</span></button>
                                    <div class="btn-group m-t-10 m-b-10">
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-ui-user"></i></button>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-edit-alt"></i></button>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-reply"></i></button>
                                        <button type="button" class="btn btn-primary btn-sm waves-effect waves-light"><i class="icofont icofont-printer"></i></button>
                                    </div>
                                    <div class="f-right bug-issue-link m-t-10">
                                        <ol class="breadcrumb bg-white m-0 p-t-5 p-b-0">
                                            <li class="breadcrumb-item"><a href="#">16 Bugs</a></li>
                                            <li class="breadcrumb-item"><a href="#">19 Issue</a></li>
                                        </ol>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php */?>
                        <!-- New ticket button card end -->
                        <!-- bug list card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5><?php 
                                  $res="SELECT * FROM 
                                  ppms_project AS ps,
                                  ppms_sector AS se
                                  WHERE  ps.`sector_id`=se.`sector_id`
                                  $sectorss
                                  $projectss";
                                       $reseee = $this->db->query($res)->row();
                                echo $reseee->sector_name."/".$reseee->project_name;
                                ?></h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="issue-list-table" class="table dt-responsive width-100">
                                  
                                        <thead class="text-left">
                                            <tr>
                                                <th>SN.#</th>
                                                <th>Project/Sub Project</th>
                                                <th>Start date</th>
                                                <th>End Date</th>
                                               
                                                <th>Status</th>

                                            </tr>
                                        </thead>
                                            <tbody class="text-left">
                                            <?php

                $user_data_session = $this->session->userdata();
                //print_r($user_data_session);
                $subproject_check = "";
                if($user_data_session['groupid']==3){
                    $query_subproject = $this->db->query("select * from assign_regional where emp_id= '".$user_data_session['empid']."'")->result();
                    $subproject_check = " and psd.subproject_id ='".$query_subproject[0]->subproject_id."' ";
                }

			   $result2="SELECT * FROM 
             ppms_subproject AS psd,
             ppms_project AS ps,
             ppms_sector AS se,
             ppms_output_list AS pol            
             WHERE psd.project_id=ps.project_id ".$subproject_check."
             AND ps.`sector_id`=se.`sector_id`
             AND se.`output_id`=pol.`output_id`
            
             
             "
             // commented for sub project check for physical progress module
            //  $outputs  
            //  $sectorss
            //  $projectss
             ;
                  $result1 = $this->db->query($result2)->result();
                  //echo $this->db->last_query();
                    $i=1; 
                  foreach($result1 as $item){?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $item->project_name;?>-<?php echo $item->subproject_name;?></td>
                                                <td><?php echo $item->subproject_start_date;?></td>
                                                <td><?php echo $item->subproject_end_date;?></td>
                                               
                                                <?php /*?> <td><span class="label label-success"><?php echo $item->activity_status_name?></span></td><td><a href="#"></a></td>
                                                <td><span class="label label-primary"></span></td>
                  <?php */?>
                                                <td><a href="<?php echo base_url('Welcome/diplay_dashborad/').$item->subproject_id?>">Click</a></td>
                                               
                                            </tr>
											<?php 
                                        $i++;
                                        }?> 
                                           
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end of table -->
                            </div>
                        </div>
                        <!-- bug list card end -->
                    </div>
					
					
					  <div class="col-xl-4">
                        <!-- Overall Progress card start -->
                       
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main-body end -->
								
		<?php }?>						
								
								
								
                            </div>

                            <div id="styleSelector"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type='text/javascript'>
                        // baseURL variable
                        var baseURL = "<?php echo base_url();?>";

                        $(document).ready(function() {

                            // City change
                            $('#output_id').change(function() {
                                var output = $(this).val();

                                // AJAX request
                                $.ajax({
                                    url: '<?=base_url()?>Dropdowns/get_sectors',
                                    method: 'post',
                                    data: {
                                        outputID: output
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                        // Remove options 

                                        $('#sectors_id').find('option').not(':first')
                                            .remove();

                                        // Add options
                                        $.each(response, function(index, data) {
                                            $('#sectors_id').append(
                                                '<option value="' + data[
                                                    'sector_id'] + '">' +
                                                data['sector_name'] +
                                                '</option>');
                                        });
                                    }
                                });
                            });

                            // Department change
                            $('#sectors_id').change(function() {
                                var sectors_id = $(this).val();

                                // AJAX request
                                $.ajax({
                                    url: '<?=base_url()?>Dropdowns/get_projects',
                                    method: 'post',
                                    data: {
                                        sectors_id: sectors_id
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                        // Remove options
                                        $('#projects').find('option').not(':first')
                                            .remove();

                                        // Add options
                                        $.each(response, function(index, data) {
                                            $('#projects').append(
                                                '<option value="' + data[
                                                    'project_id'] + '">' + data[
                                                    'project_name'] + '</option>');
                                        });
                                    }
                                });
                            });

                        });
                       
                        setTimeout(function() {
                            $('#display_msg').fadeOut('fast');
                          }, 30000); // <-- time in milli

                          </script>