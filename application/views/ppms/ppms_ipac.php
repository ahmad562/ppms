<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <?php  $empiD=$this->session->userdata('empid');

$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');

/*if($groupID <> 5 or $groupID <> 6){
    $cityii="and ppsp.city_id=$cityID";
   }
/*if($groupID > 1){
    $cityii="and ppsp.city_id=$cityID";
   }
   if($groupID > 1){
    $cityoption="where city_id=$cityID";
   }*/
   
   $orgName=$this->db->query("SELECT e.emp_id,e.emp_name,o.organization_name,e.designation_id,
   o.organization_id,o.order_by
   FROM
   emp AS e,organization AS o
   WHERE e.organization_id=o.organization_id 
   and e.emp_id=$empiD")->row();
  /// echo $this->db->last_query();
   ?>
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>IPC Module</h4>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <?php if($this->session->flashdata('msg')){?>
                            <div class="alert alert-success" role="alert" id="display_msg">
                                <b><?php echo $this->session->flashdata('msg');?></b>
                            </div>
                            <?php }?>
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Record(IPC Entry)</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">


                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Welcome/insert_ipac')?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
                                            

                                            <table class="table">
                                                <?php if($groupID == 5 or $groupID == 6 or $groupID == 1){?>
                                                    <tr style="background-color:#1ABC9C;; color:#fff">
                                                    <td colspan="4"><font size="+1">Project & SubProject Detail</font></td>
                                                </tr>  
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select class="form-control" name="output" id="output_id">
                                                            <option value="">Select OutPut</option>
                                                            <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
                                                            <option value="<?php echo $outList->output_id?>">
                                                                <?php echo $outList->output_name?></option>
                                                            <?php }?>

                                                        </select>
                                                    </td>
                                                    <td>Sectors</td>
                                                    <td>
                                                        <select class="form-control" name="sectors" id="sectors_id">
                                                            <option value="">Select Sectors</option>
                                                            <?php /*$sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                            <option value="<?php echo $sectorss->sector_id?>">
                                                                <?php echo $sectorss->sector_name?></option>
                                                            <?php }*/?>

                                                        </select>



                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td>
                                                        <select name="project_id" id="project_id" class="form-control">

                                                            <option value="">Select Project</option>
                                                            <?php /*?><?php $done=$this->db->query("select project_id,project_name from ppms_project")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->project_id;?>">
                                                                <?php echo $desig->project_name;?></option>
                                                            <?php }?><?php */?>
                                                        </select>
                                                    </td>
                                                    <?php }?>
                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="sub_project_id" id="sub_project_idss"
                                                            class="form-control" required onChange="display_subprject(this.value),get_already_ipc_no()">

                                                            <option value="">Select Sub Project List</option>
            <?php 
            if($orgName->designation_id==8){
                $subProject=$this->db->query("SELECT * FROM ppms_subproject AS ps,assign_regional AS ar
                WHERE ps.`subproject_id`=ar.`subproject_id` and ar.emp_id=$empiD")->result();
            }else{
            $subProject=$this->db->query("select * from ppms_subproject where city_id=$cityID")->result();
            }
                                                             foreach($subProject as $subProject){?>
                                                            <option value="<?php echo $subProject->subproject_id?>">
                                                                <?php echo $subProject->subproject_name?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                   <?php /*?> <td>Sub Sub Project</td>
                                                    <td>
                                                        <select name="sub_sub_project_id" id="sub_sub_project_id"
                                                            class="form-control" require
                                                            onChange="display_data(this.value)">

                                                            <option value="">Select Sub Sub Project List</option>
                                                        </select>
                                                    </td>
                                                    <?php */?>

                                                    <td>Contractor Submission Date</td>
                                                    <td><input type="date" placeholder="Enter Submitted Date" required
                                                            id="submitted_date" class="form-control"
                                                            name="submitted_date" tabindex="1"></td>
                                                </tr>

                                                            
                        <tr><td>Detail</td>
                        <td colspan="3">
                            <textarea readonly name="display_sub_sub_project_ipc" class="form-control" id="display_sub_sub_project_ipc">


                        </textarea>   
                    </td></tr>
                                                            
                                                            </table>
                                                             <table class="table" id="file_displays">
                                                <tr style="background-color:#1ABC9C; color:#fff">
                                                    <td><font size="+1">Title/File Name</font></td>
                                                    <td><font size="+1">Attached File</font></td>
                                                    <td><font size="+1">Action</font></td>
                                                </tr>
                                                <tr>

                                                    <td><input type="text" name="filename[]" class="form-control"
                                                            placeholder="Enter Title/File Name Here">


                                                    <td><input type="file" placeholder="Please Attached a File" 
                                                            id="images" class="form-control" name="files[]"
                                                            tabindex="6"></td>
                                                    <td><input type="button" class="btn btn-danger"
                                                            value="Attach More Files" onclick="addRow()"></td>


                                                </tr>


                                               

                                            </table>
                                               
                                               <table class="table">
                                               <tr style="background-color:#1ABC9C;; color:#fff">
                                                    <td colspan="4"><font size="+1">Remarks & Contractor Detail</font></td>
                                                </tr>  
                                                    <tr>
                                                    <td>Remarks</td>
                                                    <td colspan="3"><textarea placeholder="Enter Remarks" required
                                                            id="remarks" class="form-control" name="remarks_new"
                                                            tabindex="5">
</textarea>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Contractor</td>
                                                    <td>
                                                        <select name="contractor_id" id="contractor_id"
                                                            class="form-control">



                                                        </select>
                                                    </td>

                                                    <td><b>
                    <font color="red">Contractor Amount(In PKR) 
                    </b></td>
                                                    <td>
                                                        <input type="text" placeholder="Enter Contractor Amount(In PKR) " required
                                                            id="ipc_amount"  class="form-control" name="ipc_amount"
                                                            tabindex="1">
                                                            <?php 
                                                           /// onchange="formatInput(this.value)" onblur="formatInput(this.value)"
                                                            ?>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>IPC No./EPC No.</td>
                                                    <td><input type="text" placeholder="Enter IPC#" required id="ipc_no"
                                                            class="form-control" name="ipc_no" tabindex="1">
                                                        
                                                           

<select name="already_ipc_no" id="already_ipc_no" class="form-control">
<option value="">Select Option</option>


</select>




                                                        </td>

                                                            <td><b>
                    <font color="red">Verified Amount(in PKR) </font>
                </b>
                                                             </td>
                                                             <td>
                <input type="text" name="ipac_amount420" placeholder="Enter IPAC Amount" required id="ipac_amount"
                    class="form-control" >
                    <?php 
                    ////onchange="formatInput1(this.value)" onblur="formatInput1(this.value)"
                    ?>
            </td>
                                                </tr>

<tr><td>Certificate Type</td>
<td>
<select name="certificate_type" class="form-control" onchange="get_already_ipc(this.value)">
<option value="">Select Option</option>
<option value="IPA/IPC">IPC</option>
<option value="IPC & EPC">IPC & EPC</option>
<option value="EPC">EPC</option>
<option value="Mobilization">Mobilization</option>
<option value="Mobilization & IPC">Mobilization & IPC</option>
<option value="Secure Advance">Secure Advance</option>


</select>


</td><td>IPC's Already Used</td>
<td>
<select name="already_ipc[]" id="already_ipc" class="form-control" multiple>
<option value="">Select Option</option>


</select>
<span style="color:red"><b>Select Multiple IPC No by pressing Control+Click</b></span>


</td></tr>

                                            </table>



                                            <div id="display_data1">

                                            </div>





                                            <!--/span-->

                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->





                        </div>




                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-block">


                                    <table class="table">
                                        <tr>
                                            <td>

                                                <input type="submit" class="btn btn-block btn-outline btn-primary"
                                                    id="add" name="add" value="Save Record">
                                            </td>
                                        </tr>
                                    </table>




                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>IPC Records</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table  table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                <th>Serial No.</th>
                                                    <th>IPC No.</th>
                                                    <th>Package Name</th>
                                                    <th>Contractor Name</th>
                                                    <th>Remarks</th>
                                                    <th>Amount(in PKR)
                                                    </th>
                                                  
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
                   
                   if($groupID == 5 or $groupID == 6){
                    $result1 = $this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id
                    order by ppi.ipac_id desc
                   ")->result();
                   }else{
                    if($orgName->designation_id==8){
                        $result1 = $this->db->query("SELECT * FROM 
                      ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp,assign_regional AS ar
                      where ppi.subproject_id=ppsp.subproject_id
                      and ppi.subproject_id=ar.subproject_id
                      and ppsp.project_id=ppp.project_id
                      and ar.emp_id=$empiD
                      order by ppi.ipac_id desc
                      ")->result();
                       
                      }else{
                    $result1 = $this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id
                    and ppsp.city_id=$cityID
                    order by ppi.ipac_id desc
                   ")->result();
                   
                      }
                   }
                 

///echo $this->db->last_query();
$j=1;
                  foreach($result1 as $item){

                   $tracs = $this->db->query("SELECT * FROM 
                   ppms_ipac_forward as pif,organization as o
                   where ipac_id=$item->ipac_id and pif.organization_id=o.organization_id and pif.flag_id=1")->row();
                   
                   ?>
                                                <tr class="gradeX">
                                                    <td><?php echo $j;?></td>
                                                    <td><?php echo $item->ipc_no;?></td>
                                                    <td><?php echo $item->project_name."-".$item->subproject_name;?>
                                                    </td>

                                                    <?php 
 $cid = $this->db->query("SELECT emp_id,emp_name FROM ppms_subproject_assign AS psa,emp AS e
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

                                                    <td><?php echo number_format($item->ipac_amount,2);?></td>
                                                    <td align="center">
                                                    <?php 
                                                  if($orgName->organization_id==$tracs->organization_id){?>     
                                                    
                                                    <a
                                                            href="<?php echo base_url()?>Welcome/edit_ppms_ipc/<?php echo $item->ipac_id;?>">
                                                            <img src="<?php echo base_url()?>img/edit.PNG" width="30px"
                                                                height="30px" />
                                                        </a>
                                               <?php }else{
                                                echo "You Can't Edit";
                                                
                                               }?>         
                                                    </td>
                                                    <td class="action-icon">
                                                    <?php 
                                                  if($orgName->organization_id==$tracs->organization_id){?>  
                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete"><i
                                                                class="icofont icofont-delete-alt"></i></a>
                                                                <?php }else{
                                                echo "You Can't Delet";
                                                
                                               }?>  

                                                    </td>

                                                </tr>
                                                <?php 
                                            $j++;
                                            }?>
                                                   <?php /*?> <td>
                                                        <?php
                                                    
                  if($tracs->status_id==0){
                  ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <?php echo $tracs->organization_name;?></span>

                                                        <?php 
                 }else if($tracs->status_id==1){
                ?>
                                                        <label class="label label-warning">Farwarded</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            
                                                                <?php echo $tracs->organization_name;?></span>

                                                        <?php }else if($tracs->status_id==2){
                ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <?php echo $tracs->organization_name;?></span>

                                                        <?php }else if($tracs->status_id==3){?>
                                                        <label class="label label-danger">Cancel</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            
                                                                <?php echo $tracs->organization_name;?></span>

                                                        <?php }else if($tracs->status_id==4){?>
                                                        <label class="label label-success">Approved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            
                                                                <?php echo $tracs->organization_name;?></span>


                                                        <?php }else if($tracs->status_id==5){?>


                                                        <span align="center" style="font-weight:700;">
                                                           
                                                                <label class="label label-danger">Returned</label>



                                                            </span>


                                                        <?php }?>
                                                    </td>

                                                    <td><?php 
                 
                                                   
                                                    
           
                                                   
            $tdateee=$this->db->query("select * from ipc_days where level_id=$orgName->order_by")->row();
                                                    //echo $tdateee->days;
                                                   
             $Date2 = date('Y-m-d', strtotime($tracs->ipac_forward_date . " + $tdateee->days day"));
             $tdateeee=date('Y-m-d');
$datetime1 = new DateTime($Date2);
$datetime2 = new DateTime($tdateeee);
$interval = $datetime1->diff($datetime2);
$woweekends = 0;
for($i=0; $i<=$interval->d; $i++){
    $datetime1->modify('+1 day');
    $weekday = $datetime1->format('w');

    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for Saturday
        $woweekends++;  
    }

}

///echo $woweekends." days without weekend";
//////////////////////////////////////////////////////////////////////////////////
/*$now = time(); // or your date as well
$your_date = strtotime($Date2);
$datediff = $now - $your_date;

$calculated=round($datediff / (60 * 60 * 24));

if($woweekends > 0){
    if($tdateeee > $Date2){?>
                                                        <img src="<?php echo base_url('img/days_pass.gif')?>"
                                                            width="100px" height="70px"><br>
                                                        <?php
echo "<label class='label label-danger'>".$woweekends." Days Above</label>";
 }else{
echo "<label class='label label-success'>".$woweekends." Days Remaining</label>";
}


}
echo "<br>";
echo $Date1=$tracs->ipac_forward_date;                                                
                                                    ?>
                                                    </td>
                                                    <td>
                                                        <?php 
                                                  if($orgName->organization_id==$tracs->organization_id){
                                                    if($orgName->organization_id==4){?>
                                                        <select name="status_ids"
                                                            id="status_ids<?php echo $item->ipac_id?>"
                                                            class="form-control" width="20px">
                                                           <option value="0">Recieved</option>
                                                            <option value="1">Forwarded</option>
                                                            <option value="2">In Progress</option>
                                                           
                                                            <option value="3">Cancel</option>
                                                            <option value="4">Approved</option>
                                                            <option value="5">Returned</option>


                                                        </select>
                                                        <?php }
                                                        if($tracs->status_id==3){

                                                            echo "<label class='label label-warning'>Forwarded</button>";

                        }else if($tracs->status_id==4 or $tracs->status_id==5){
              echo "<label class='label label-primary'>Approved</label>";                
}else{?>
                                                        <a href="javascript:"
                                                            onClick="forward(<?php echo $item->ipac_id?>,<?php echo $orgName->organization_id;?>)">
                                                            <img src="<?php echo base_url('img/next.png')?>"
                                                                width="50px" height="50px">
                                                        </a>
                                                        <?php }?>


                                                        <?php }else{
                                                    echo "<label class='label label-warning'>Forwarded</label>";
                                                    }?>
                                                    </td>
                                                    <td align="center">
                                                        <?php
                                                        //echo "Pak";
                                                   $kifi=$this->db->query("select * from ipc_payment where ipac_id=$item->ipac_id")->row();
                                                     if($kifi){
                                    if($kifi->status_id==2){
                                        ?>
                                                        <label class="label label-success">
                                                            <font color="white">Paid</font>
                                                        </label>

                                                        <?php
                                                        }else if($kifi->status_id==0){?>

                                                        <label class="label label-danger">
                                                            <font color="white">Un Paid</font>
                                                        </label>






                                                        <?php }else if($kifi->status_id==1) {?>


                                                        <?php
                     if($orgName->organization_id==3){?>
                                                        <label class="label label-warning">
                                                            <a href='#'
                                                                onClick='paid(<?php echo $item->ipac_id?>,<?php echo $tracs->status_id?>)'>
                                                                <font color="white">Click to Pay</font>
                                                            </a>
                                                            </lable>
                                                            <?php 
                     }else{ 
                        if($kifi->status_id==2){
                        ?>
                                                            <label class="label label-success">
                                                                <font color="white">Paid</font>
                                                                </lable>
                                                                <?php
                        } else if($kifi->status_id==0){?>
                                                                <label class="label label-danger">
                                                                    <font color="white">Un Paid</font>
                                                                </label>
                                                                <?php }else if($kifi->status_id==1){?>
                                                                <label class="label label-warning">
                                                                    <font color="white">Payable</font>
                                                                    </lable>

                                                                    <?php }
                     }
                     ?>


                                                                    <?php }
                     
                     
                     
                    }else{
                    
                ?>

                                                                    <label class="label label-danger">
                                                                        <?php
                if($orgName->organization_id==3){?>
                                                                        <a href='#'
                                                                            onClick="paid(<?php echo $item->ipac_id?>,<?php echo $tracs->status_id?>)">
                                                                            <font color="white">Paid</font>
                                                                        </a>
                                                                        <?php 
          }else{
            if($kifi->status_id==1){
                echo "<font color='white'>Payable</font>";
            }else{
echo "<font color='white'>Un Paid</font>";
            }


          }
        }
          ?>
                                                                        </lable>



                                                    </td>
                                                   

                                                <div class="modal fade modal-flex"
                                                    id="Modal-tab<?php echo $item->ipac_id?>" tabindex="-1"
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
                                                                            href="#tab-home<?php echo $item->ipac_id?>"
                                                                            role="tab">IPC Detail</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="#tab-profile<?php echo $item->ipac_id?>"
                                                                            role="tab">Timeline</a>
                                                                    </li>
                                                                    <li class="nav-item">
                                                                        <a class="nav-link" data-toggle="tab"
                                                                            href="#tab-messages<?php echo $item->ipac_id?>"
                                                                            role="tab">Remarks</a>
                                                                    </li>

                                                                </ul>
                                                                <div class="tab-content modal-body">
                                                                    <div class="tab-pane active"
                                                                        id="tab-home<?php echo $item->ipac_id?>"
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
                                                                                href="<?php echo base_url('img/upload_files/')?><?php echo $filess->ipac_file_url;?>"><br><?php echo "(".$f.")"?><?php echo $filess->ipac_file_name;?><br>
                                                                            </a>
                                                                        </span>
                                                                        <?php 
                                                                        $f++;
                                                                        }?>
                                                                        <br><br>





                                                                    </div>
                                                                    <div class="tab-pane"
                                                                        id="tab-profile<?php echo $item->ipac_id?>"
                                                                        role="tabpanel">
                                                                        <div
                                                                            style="width:35%; display:inline-block;border-style: double;background-color:green;">
                                                                            <strong style="color:white;">Total Days:
                                                                                <?php 
                                                                        echo 35;
                                                                        
                                                                        ?></strong>
                                                                            <?php /*?>>
                                                                            <strong style="color:green;"
                                                                                align="right">Total Day's Spent:
                                                                                <?php
                                                 $dateeToday=date('Y-m-d'); 
                                                $datetime1 = new DateTime($item->ipac_submitted_date);
                                                $datetime2 = new DateTime($dateeToday);
                                                $interval = $datetime1->diff($datetime2);
                                                $woweekends = 0;
                                                for($i=0; $i<=$interval->d; $i++){
                                                    $datetime1->modify('+1 day');
                                                    $weekday = $datetime1->format('w');
                                                
                                                    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for Saturday
                                                        $woweekends++;  
                                                    }
                                                
                                                }
                                                
                                                echo $woweekends;
                                                
                                                
                                                ?>
                                                                            </strong>
                                                                            
                                                                        </div>
                                                                        <div
                                                                            style="width: 64%; display:inline-block;border-style: double;background-color:red;">
                                                                            <strong
                                                                                style="color:red;margin-left:85px !important">
                                                                                <font color="white">Total Day's
                                                                                    Remaining:
                                                                                    <?php 
                                                                        echo 35 - $woweekends;
                                                                        
                                                                        ?>
                                                                                </font>
                                                                            </strong>
                                                                        </div>


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
                                                                                                <i class="icofont">
                                                                                                   icofont-ui-file
                                                                                                    <?php if($logeee->status_id==0){
                                                                                                     echo 0; 
                                                                                                    }else if($logeee->status_id==1){
                                                                    $pki="select ipac_forward_date from ppms_ipac_forward
                                                                    where ipac_id=$logeee->ipac_id
                                                                    and organization_id=$logeee->organization_id
                                                                    and ipac_forward_id
                                                                    =(
select min(ipac_forward_id) from ppms_ipac_forward as b
where b.ipac_id=$logeee->ipac_id
and b.organization_id=$logeee->organization_id
)";
$daysssse = $this->db->query($pki)->row();  
$logeee->ipac_forward_date;
///echo $this->db->last_query();
///echo "<br>";
///$daysssse->ipac_forward_date; 
//$datediff111 = $logeee->ipac_forward_date - $daysssse->ipac_forward_date;

///echo round($datediff111 / (60 * 60 * 24));

$origin = new DateTime($logeee->ipac_forward_date);
$target = new DateTime($daysssse->ipac_forward_date);
$interval = $target->diff($origin);
echo $interval->format('%a');
                                                                                                        
                                                                                                    }else{

                                                                                                        echo 0;
                                                                                                    }?>
                                                                                                    <font color="black">
                                                                                                        Days</font>
                                                                                                </i>
                                                                                            </div>
                                                                                            <!-- cd-timeline-img -->
                                                                                            <div
                                                                                                class="cd-timeline-content card_main">
                                                                                                <div class="card-block">
                                                                                                    <span
                                                                                                        style="color:red;"><?php if($f==1){
                                                                                                          echo $cid->emp_name;
                                                                                                        }else if($f > 1){
                                                                                                            echo $logeee->organization_name;
                                                                                                        }?></span><br />
                                                                                                    <span><?php echo $logeee->ipac_forward_date;?></span>
                                                                                                    <div
                                                                                                        class="timeline-details">

                                                                                                        <a href="#">

                                                                                                            <?php if($logeee->status_id==0){
                                                                                                          echo "<label class='label label-warning'>Recieved</label>";
                                                                                                        }else if($logeee->status_id==1){
                                                                                                            echo "<label class='label label-warning'>Forwarded</label>";
                                                                                                        }else if($logeee->status_id==2){
                                                                                                            echo "<label class='label label-warning'>Recieved</label>";
                                                                                                        }else if($logeee->status_id==3){
                                                                                                            echo "<label class='label label-danger'>Cancel</label>";
                                                                                                        }else if($logeee->status_id==4){
                                                                                                            echo "<label class='label label-success'>Approved</label>";
                                                                                                        }else if($logeee->status_id==5){
                                                                                                            echo "<label class='label label-danger'>Returned</label>";
                                                                                                        }?>


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

                                                                                        <?php 
                                                                                    $f++;}?>










                                                                                    </div>
                                                                                    <!-- cd-timeline -->
                                                                                </div>
                                                                            </div>
                                                                        </div>





                                                                    </div>
                                                                    <div class="tab-pane"
                                                                        id="tab-messages<?php echo $item->ipac_id?>"
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
                                                                                                                src="<?php echo base_url()?>assets/images/user.png"
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

                                                <!-- Hover table card end -->

                                    </div>
                                    <!-- Page-body end -->


                                    </tr>
                                    <?php
 $j++;
 } ?>
                                    </tbody>
                                    <tfoot>
                                        </table>





                                </div>
                                <!--/row-->

                            </div>
                        </div>

                    </div>
                    </form>

                    
                    <?php /*?> <script type="text/javascript">
                    $(document).ready(function() {
                        Populate data to state dropdown
                        $('#project_id').on('change', function() {
                            var project_id = $(this).val();
                            if (project_id) {
                                $.ajax({
                                    type: 'POST',
                                    url: '<?php echo base_url('dropdowns/getStates'); ?>',
                                    data: 'project_id=' + project_id,
                                    success: function(data) {
                                        //alert(data);
                                        //$('#sub_project_id').html('<option value="">Select Sub Projects</option>'); 
                                        var dataObj = jQuery.parseJSON(data);
                                        if (dataObj) {
                                            $(dataObj).each(function() {
                                                var option = $('<option />');
                                                option.attr('value', this.id)
                                                    .text(this.name);
                                                $('#sub_project_idss').append(
                                                    option);
                                            });
                                        } else {
                                            $('#sub_project_idss').html(
                                                '<option value="">Sub Projects not available</option>'
                                            );
                                        }
                                    }
                                });
                            }
                        });

                        Populate data to city dropdown
                        $('#state').on('change', function() {
                            var stateID = $(this).val();
                            if (stateID) {
                                $.ajax({
                                    type: 'POST',
                                    url: '<?php echo base_url('dropdowns/getCities'); ?>',
                                    data: 'state_id=' + stateID,
                                    success: function(data) {
                                        $('#city').html(
                                            '<option value="">Select City</option>');
                                        var dataObj = jQuery.parseJSON(data);
                                        if (dataObj) {
                                            $(dataObj).each(function() {
                                                var option = $('<option />');
                                                option.attr('value', this.id)
                                                    .text(this.name);
                                                $('#city').append(option);
                                            });
                                        } else {
                                            $('#city').html(
                                                '<option value="">City not available</option>'
                                            );
                                        }
                                    }
                                });
                            } else {
                                $('#city').html('<option value="">Select state first</option>');
                            }
                        });
                    });
                    
                    </script><?php */?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
                    <script type='text/javascript'>
                    // baseURL variable
                    var baseURL = "<?php echo base_url();?>";

                    $(document).ready(function() {

                        // City change
                        $('#project_id').change(function() {
                            var project_id = $(this).val();

                            // AJAX request
                            $.ajax({
                                url: '<?=base_url()?>Dropdowns/getStates',
                                method: 'post',
                                data: {
                                    project_id: project_id
                                },
                                dataType: 'json',
                                success: function(response) {

                                    // Remove options 

                                    $('#sub_project_idss').find('option').not(':first')
                                        .remove();

                                    // Add options
                                    $.each(response, function(index, data) {
                                        $('#sub_project_idss').append(
                                            '<option value="' + data[
                                                'subproject_id'] + '">' +
                                            data['subproject_name'] +
                                            '</option>');
                                    });
                                }
                            });
                        });

                        // Department change
                        $('#sub_project_idss').change(function() {
                            var sub_project_idss = $(this).val();
///alert(sub_project_idss);
                            // AJAX request
                            $.ajax({
                                url: '<?=base_url()?>Dropdowns/get_contractor',
                                method: 'post',
                                data: {
                                    sub_project_idss: sub_project_idss
                                },
                                dataType: 'json',
                                success: function(response) {

                                    // Remove options
                                    $('#contractor_id').find('option').not(':first')
                                        .remove();

                                    // Add options
                                    $.each(response, function(index, data) {
                                        $('#contractor_id').append(
                                            '<option value="' + data[
                                                'emp_id'] + '">' + data[
                                                'emp_name'] + '</option>');
                                    });
                                }
                            });
                        });

                    });

                    setTimeout(function() {
                        $('#display_msg').fadeOut('fast');
                    }, 30000); // <-- time in milli
                    </script>




                    <script type="text/javascript">
                    function display_data(ssid) {


                        var id = $("#sub_project_idss").val();

                        $.post("<?php echo base_url()?>Dropdowns/display_data/", {
                            id: id,
                            ssid: ssid

                        }, function(page_response) {
                            //alert(page_response);
                            $("#display_data1").show();
                            $("#display_data1").html(page_response);

                        });


                    }
                    </script>

                    <script>
                    function calculate_grand_total() {

                        grand_total = 0;

                        var counter = $("#sid_tot").val();
                        ///alert(counter);
                        //exit;

                        for (var i = 1; i <= counter; i++) {
                            ///var x = '' + j + i;

                            grand_total += Number($("#billsummary_amount" + i).val());
                            //grand_total = parseInt(grand_total);

                        }

                        $("#ipac_amount").val(parseInt(grand_total));
                        //$("#sub_total1").val(grand_total);
                        /// document.getElementById("ipac_amount").innerHTML = grand_total.toFixed(2);

                    }
                    </script>


                    <script>
                    function addRow() {

                        var tableRow = document.getElementById("file_displays");
                        var row = document.createElement("tr");
                        var cell1 = document.createElement("td");
                        var cell2 = document.createElement("td");
                        var cell3 = document.createElement("td");

                        cell1.innerHTML =
                            "<input type='text' name='filename[]' class='form-control'  placeholder='Enter Caption Here'>";
                        cell2.innerHTML =
                            "<input type='file' placeholder='Please Attached a File' class='form-control' name='files[]'>";
                        cell3.innerHTML =
                            "<input type='button' value='Delete' class='btn btn-danger' onclick='deleteRow(this)'>";
                        row.appendChild(cell1);
                        row.appendChild(cell2);
                        row.appendChild(cell3);

                        tableRow.appendChild(row);
                    }
                    ////////////////////////////////////////////////

                    function deleteRow(r) {
                        var i = r.parentNode.parentNode.rowIndex;
                        document.getElementById("file_displays").deleteRow(i);
                    }
                    </script>

                    
                   
<script>
    function formatInput(value) {

 //let inputValue = value.replace(/[^0-9.,]/g, ''); // Remove unwanted characters
 var inputValue = value.replace(/[^\d.]/g, '');

// Allow only one dot for decimal
var dotCount = inputValue.split('.').length - 1;
if (dotCount > 1) {
  inputValue = inputValue.replace(/\.+$/, '');
}

// Format as a number with two decimal places
var formattedValue = Number(inputValue).toLocaleString('en-US', {
  minimumFractionDigits: 2,
  maximumFractionDigits: 2
}
);

// Update the input value
$("#ipc_amount").val(formattedValue);

}

</script>

<script>
    function formatInput1(value) {

 //let inputValue = value.replace(/[^0-9.,]/g, ''); // Remove unwanted characters
 var inputValue = value.replace(/[^\d.]/g, '');

// Allow only one dot for decimal
var dotCount = inputValue.split('.').length - 1;
if (dotCount > 1) {
  inputValue = inputValue.replace(/\.+$/, '');
}

// Format as a number with two decimal places
var formattedValue = Number(inputValue).toLocaleString('en-US', {
  minimumFractionDigits: 2,
  maximumFractionDigits: 2
}
);

// Update the input value
$("#ipac_amount").val(formattedValue);

}

</script>


<script>







</script>