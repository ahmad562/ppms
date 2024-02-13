<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display IPAC Forward </h4>

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
                                    <h5>IPAC Forward Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>

                                                    <th>IPAC Name</th>
                                                    <th>Forward Date</th>
                                                    <th>Organization</th>
                                                    <th>Status</th>
                                                    <th>Tracking</th>




                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM 
                  ppms_ipac_forward as psd,
                  ppms_ipac AS ps,
                  ppms_subproject as pps,
                  organization as o
                  where psd.ipac_id=ps.ipac_id
                  and ps.subproject_id=pps.subproject_id
                  and psd.organization_id=o.organization_id
                  order by psd.ipac_forward_id desc
                ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>

                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <td><?php echo $item->ipac_forward_date;?></td>
                                                    <td><?php echo $item->organization_name;?></td>
                                                    <td><?php if($item->flag_id==0){
                                                     echo "<button class='btn btn-success'>Off</button>";   
                                                        
                                                    }else if($item->flag_id==1){
                                                     echo "<button class='btn btn-danger'>On</button>";   
                                                        
                                                    }?></td>

<td><?php 


if($item->status_id==0){
                                                     echo "<button class='btn btn-primary'>Recieved</button>";   
                                                        
                                                    }else if($item->status_id==1){
                                                     echo "<button class='btn btn-success'>Farward</button>";   
                                                        
                                                    }else if($item->status_id==2){
                                                        echo "<button class='btn btn-danger'>In Progress</button>";   
                                                           
                                                       }else if($item->status_id==3){
                                                        echo "<button class='btn btn-danger'>Rejected</button>";   
                                                           
                                                       }?></td>


                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects/<?php echo $item->ipac_forward_id;?>">
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

                                            <input type="hidden" placeholder="Enter IPAC Amount" required
                                                value="<?php echo $id?>" id="ipac_amount" class="form-control"
                                                name="ipac_id" tabindex="1">

                                            <table class="table">
                                                <tr>
                                                    <td>IPAC</td>
                                                    <td>

                                                        <?php 
                                                $rowsss = $this->db->query(
                                                    "SELECT * FROM 
                  ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp,ppms_ipac_remarks as ppir
                  where ppi.subproject_id=ppsp.subproject_id
                  and ppsp.project_id=ppp.project_id
                  and ppi.ipac_id=ppir.ipac_id and ppi.ipac_id=$id"
                  )->row();
                  ?>

                                                        <input class="form-control" name="ipace"
                                                            value="<?php echo $rowsss->project_name."-".$rowsss->subproject_name;?>">

                                                    </td>
                                                </tr>


                                                <input type="hidden"  required
                                                value="<?php 
                                                $old_org = $this->db->query(
                                                    "SELECT organization_id FROM 
                  ppms_ipac_forward
                  where ipac_forward_id=(
                    select max(ipac_forward_id) from ppms_ipac_forward where ipac_id=$id
                    )"
                  )->row();
                                                
                                                echo $old_org->organization_id?>" id="old_organization" class="form-control"
                                                name="old_organization" tabindex="1">


                                                <tr>
                                                    <td>Organization</td>
                                                    <td>
                                                        <select name="organization" class="form-control">

                                                            <option value="">Select Organization</option>
                                                            <?php $done=$this->db->query("select organization_id,organization_name from organization")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->organization_id;?>">
                                                                <?php echo $desig->organization_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>


                                                <tr>
                                                    <td>Forward Date</td>
                                                    <td><input type="date" placeholder="Enter Submitted Date" required
                                                            id="forward_date" class="form-control" name="forward_date"
                                                            tabindex="1"></td>
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
        //echo "kifayat";
///$done=$this->db->query("select * from ppms_ipac where subproject_id=$project_id and contractor_id=$contractor_id")->row();
	//if($done){
//$done=$this->db->query("update ppms_subproject_detail set city_id=$city_id,start_date='$start_date',end_date='$end_date',subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
	//}else{
	
	//}
    $uid=$this->session->userdata('userid');
    $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$forward_date',organization_id=$old_organization,flag_id=0,user_id=$uid";
    $done=$this->db->query($doneeee);	

 $doneeee="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$forward_date',organization_id=$organization,flag_id=1,user_id=$uid";
    $done=$this->db->query($doneeee);	
		 $this->db->last_query();
		///exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ipac_forward/'.$ipac_id));
		}
	
	
	}
	
	
	
	?>