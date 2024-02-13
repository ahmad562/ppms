<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>IPAC Module</h4>

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
                                    <h5>IPAC Records</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial#</th>
                                                    <th>IPC</th>
                                                    <th>Contractor Name</th>
                                                    <th>Remarks</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Action</td>
                                                    <th>Submitted Date</th>
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM 
                  ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                  where ppi.subproject_id=ppsp.subproject_id
                  and ppsp.project_id=ppp.project_id
                 ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>

                                                    <td><?php echo $item->project_name."-".$item->subproject_name;?>
                                                    </td>



                                                    <?php 
 $cid = $this->db->query("SELECT emp_id,emp_name FROM `ppms_subproject_assign` AS psa,emp AS e
WHERE psa.`contractor_id`=e.`emp_id` and subproject_id=$item->subproject_id")->row();?>

                                                    <td><?php echo $cid->emp_name;?></td>


                                                    <td>
                                                        <?php 
                                                    $remarkss="SELECT ipac_remark
                                                       FROM 
                                                       ppms_ipac_remarks
                                                       where ipac_id=$item->ipac_id
                                                       order by ipac_id asc
                                                       limit 1
                                                       ";
$remarkss = $this->db->query($remarkss)->row();
echo $remarkss->ipac_remark;?>
                                                    </td>



                                                    <td><?php echo $item->ipac_amount;?></td>
                                                    <td>
                                                        <?php
                                                    $tracs = $this->db->query("SELECT * FROM 
                  ppms_ipac_forward as pif,organization as o
                   where ipac_id=$item->ipac_id and pif.organization_id=o.organization_id and pif.flag_id=1")->row();
                  if($tracs->status_id==0){
                  ?>
                                                        <label class="label label-danger">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

                <?php 
                 }else if($tracs->status_id==1){
                ?>
 <label class="label label-success">Farward</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

<?php }else if($tracs->status_id==2){
                ?>
 <label class="label label-danger">In Progress</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>

<?php }else if($item->status_id==3){?>
    <label class="label label-danger">Rejected</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab"><?php echo $tracs->organization_name;?></a></span>
                                                           
                                                       <?php }?>
                                                    </td>
                                                    <td>

                                                        <a
                                                            href="<?php echo base_url('Welcome/ipac_forward/').$item->ipac_id?>">
                                                            <button class="btn btn-danger">Click to Forward</button></a>
                                                    </td>
                                                    <td><?php echo $item->ipac_submitted_date;?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_sub_projects/<?php echo $item->ipac_id;?>">
                                                            <img src="<?php echo base_url()?>img/edit.PNG" width="30px"
                                                                height="30px" /> </a>
                                                    </td>
                                                    <td class="action-icon">

                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete"><i
                                                                class="icofont icofont-delete-alt"></i></a>


                                                    </td>
                                                </tr>
                                                <div class="modal fade modal-flex" id="Modal-tab" tabindex="-1"
                                                    role="dialog">
                                                    <div class="modal-dialog" role="document">
                                                        <div class="modal-content">
                                                            <div class="modal-body">
                                                                <button type="button" class="close" data-dismiss="modal"
                                                                    aria-label="Close">
                                                                    <span aria-hidden="true">&times;</span>
                                                                </button>
                                                                <ul class="nav nav-tabs" role="tablist">
                                                                    <li class="nav-item">
                                                                        <a class="nav-link active" data-toggle="tab"
                                                                            href="#tab-home" role="tab">IPC Detail</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="#tab-profile" role="tab">Timeline</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="#tab-messages" role="tab">Remarks</a>
                                                                    </li>

                                                                </ul>
                                                                <div class="tab-content modal-body">
                                                                    <div class="tab-pane active" id="tab-home"
                                                                        role="tabpanel">
                                                                        <strong><?php echo $item->project_name."-".$item->subproject_name;?></strong><br><br>
                                                                        <label><strong>Contractor Name:
                                                                            </strong></label><span>
                                                                            <?php echo $cid->emp_name;?></span><br><br>
                                                                        <label><strong>Documents Download:
                                                                            </strong></label>
                                                                        <?php 
                                                                         $filee="SELECT ipac_file_name,ipac_file_url 
                                                                            FROM 
                                                                            ppms_ipac_file where ipac_id=$item->ipac_id";
 $filess = $this->db->query($filee)->result();
 $f=1;
 foreach($filess as $filess){
 ?>
                                                                        <span>
                                                                            <a
                                                                                href="<?php echo base_url('img/upload_files/')?><?php echo $filess->ipac_file_url;?>"><?php echo "(".$f.")"?>
                                                                                <?php echo $filess->ipac_file_name;?>
                                                                            </a>
                                                                        </span>
                                                                        <?php 
                                                                        $f++;
                                                                        }?>
                                                                        <br><br>
                                                                    </div>
                                                                    <div class="tab-pane" id="tab-profile"
                                                                        role="tabpanel">
                                                                        <strong style="color:red;">Total Day's spent:
                                                                            <?php ;
                                                                        $now = time(); // or your date as well
                                                                        $your_date = strtotime($item->ipac_submitted_date);
                                                                        $datediff = $now - $your_date;
                                                                        
                                                                        echo round($datediff / (60 * 60 * 24));
                                                                        
                                                                        ?></strong>
                                                                        <div class="card">
                                                                            <div class="card-block">
                                                                                <div class=""
                                                                                    style="background-color:#D4F4D4;">
                                                                                    <div
                                                                                        class="cd-timeline cd-container">

                                                                                        <!-- cd-timeline-block -->
                                                                                        <?php 
                                                                         $logee="SELECT *
                                                                            FROM 
                                                                            ppms_ipac_forward as pif,organization as o,emp as e,designation as d,department as de
                                                                            where pif.organization_id=o.organization_id
                                                                            and pif.user_id=e.emp_id
                                                                            and e.designation_id=d.designation_id
                                                                            and e.department_id=de.department_id
                                                                            and ipac_id=$item->ipac_id
                                                                            order by ipac_forward_id asc";
 $logeee = $this->db->query($logee)->result();
 $f=1;
 foreach($logeee as $logeee){
 ?>

                                                                                        <div class="cd-timeline-block">
                                                                                            <div
                                                                                                class="cd-timeline-icon bg-primary">
                                                                                                <i
                                                                                                    class="icofont icofont-ui-file"></i>
                                                                                            </div>
                                                                                            <!-- cd-timeline-img -->
                                                                                            <div
                                                                                                class="cd-timeline-content card_main">
                                                                                                <div class="card-block">
                                                                                                    <span
                                                                                                        style="color:red;"><?php echo $logeee->organization_name;?></span><br />
                                                                                                    <span><?php echo $logeee->ipac_forward_date;?></span>
                                                                                                    <div
                                                                                                        class="timeline-details">

                                                                                                        <a href="#">
                                                                                                            <label>Submitted
                                                                                                                By
                                                                                                                :</label>
                                                                                                            <br>
                                                                                                            <span
                                                                                                                style="font-size:10px;">
                                                                                                                <?php echo $logeee->emp_name;?>,
                                                                                                                <br><?php echo $logeee->designation_name;?>
                                                                                                                <br>
                                                                                                                <i><?php echo $logeee->department_name;?></i></span>
                                                                                                        </a>
                                                                                                        <p
                                                                                                            class="m-t-20">
                                                                                                        </p>
                                                                                                    </div>
                                                                                                </div>
                                                                                                <span
                                                                                                    class="cd-date"></span>
                                                                                            </div>
                                                                                            <!-- cd-timeline-content -->
                                                                                        </div>

                                                                                        <?php }?>










                                                                                    </div>
                                                                                    <!-- cd-timeline -->
                                                                                </div>
                                                                            </div>
                                                                        </div>





                                                                    </div>
                                                                    <div class="tab-pane" id="tab-messages"
                                                                        role="tabpanel">
                                                                        <p>


                                                                        <div class="card">

                                                                            <div class="row card-block">
                                                                                <div class="col-md-12">
                                                                                    <ul class="list-view">
                                                                                        <?php 
                                                                         $remarkss="SELECT *
                                                                            FROM 
                                                                            ppms_ipac_remarks as pif,emp as e,designation as d,department as de
                                                                            where  pif.ipac_remark_userid=e.emp_id
                                                                            and e.designation_id=d.designation_id
                                                                            and e.department_id=de.department_id
                                                                            and ipac_id=$item->ipac_id";
 $remarkss = $this->db->query($remarkss)->result();
 $f=1;
 foreach($remarkss as $remarkss){
 ?>
                                                                                        <li>
                                                                                            <div class="card user-card">
                                                                                                <div class="card-block">
                                                                                                    <div class="media">
                                                                                                        <a class="media-left"
                                                                                                            href="#">
                                                                                                            <img class="media-object img-circle card-list-img"
                                                                                                                src="<?php echo base_url()?><?php echo $remarkss->emp_pic;?>"
                                                                                                                alt="Generic placeholder image">
                                                                                                        </a>
                                                                                                        <div
                                                                                                            class="media-body">
                                                                                                            <div
                                                                                                                class="col-xs-12">
                                                                                                                <strong
                                                                                                                    class="d-inline-block"><?php echo $remarkss->emp_name;?></strong>
                                                                                                                <label
                                                                                                                    class="label label-info"><?php echo $remarkss->department_name;?></label>
                                                                                                            </div>
                                                                                                            <p><?php echo $remarkss->ipac_remark;?>
                                                                                                            </p>
                                                                                                            <span
                                                                                                                style="color:#228B22;"><i>Posted
                                                                                                                    on:
                                                                                                                    <strong
                                                                                                                        style="color:#228B22;"><?php echo $remarkss->ipac_remark_date;?></strong></i></span>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </div>
                                                                                            </div>
                                                                                        </li>

                                                                                        <?php }?>



                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                            <form method="post" action="">
                                                                                <!-- List view card end -->
                                                                                <label>Add Remark:</label>
                                                                                <div class="card">
                                                                                    <input type="hidden" name="ipac_id"
                                                                                        value="<?php echo $item->ipac_id;?>">
                                                                                    <textarea name="remarks"
                                                                                        class="form-control max-textarea"
                                                                                        maxlength="255"
                                                                                        rows="4"></textarea><br>
                                                                                    <button type="submit" name="add"
                                                                                        class="btn btn-primary btn-block">Submit</button>

                                                                                </div>
                                                                        </div>

                                                                        <!-- List view card end -->


                                                                        </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                </form>
                                                <!-- Hover table card end -->

                                    </div>
                                    <!-- Page-body end -->

                                    <?php
 $i++;
 } ?>
                                    </tbody>
                                    <tfoot>
                                        </table>

                                </div>
                                <!--/row-->

                            </div>
                        </div>




                        <!-- Modal -->

                    </div>
                    <?php 
	if(isset($_POST['add'])){
		extract($_POST);
        $tdate=date('Y-m-d');
	//$done=$this->db->query("select * from ppms_ipac_remarks where output_name='$output_name'")->row();
//	if($done){


	//}else{
	$done=$this->db->query("insert into ppms_ipac_remarks set ipac_id=$ipac_id,ipac_remark='$remarks',ipac_remark_date='$tdate',ipac_remark_userid=1");	
	//}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_ipac'));
		}
	
	
	}
	
	
	
	?>