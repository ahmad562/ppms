<?php

 $item = $this->db->query("SELECT * FROM 
 ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
 where ppi.subproject_id=ppsp.subproject_id
 and ppsp.project_id=ppp.project_id
 and ppi.ipac_id=$id
 order by ppi.ipac_id desc
")->row();
$ipc_iddd=$id;
?>
<?php 
 $cid = $this->db->query("SELECT emp_id,emp_name FROM ppms_subproject_assign AS psa,emp AS e
WHERE psa.`contractor_id`=e.`emp_id` and subproject_id=$item->subproject_id")->row();
$subID=$item->subproject_id;
$subsubID=$item->sub_sub_project_id;
$groupID=$this->session->userdata('groupid');
?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <?php /*?><h4>IPC File Details</h4><?php */?>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
 <button class="btn btn-danger">
                    <a
                                href="<?php echo base_url('Welcome/bill_summary_detail/')?><?php echo $item->ipac_id?>">
                                <font color="white">Bill Summary Detail</font></a></button>
                 <button class="btn btn-success">
                 <a
                                href="<?php echo base_url('Welcome/mobilization_advance/')?><?php echo $item->ipac_id?>">
                                <font color="white">   
                 Mobilization Detail</font></button></a>

                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Material tab card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>IPC File Details</h5>
                                    <div class="card-header-right">
                                        <i class="icofont icofont-rounded-down"></i>
                                        <i class="icofont icofont-refresh"></i>
                                        <i class="icofont icofont-close-circled"></i>
                                    </div>
                                </div>
                                <div class="card-block">
                                    <!-- Row start -->
                                    <div class="row m-b-30">
                                        <div class="col-lg-12 col-xl-12">
                                            <div class="sub-title">



                                                <div
                                                    style="width:30%; display:inline-block;border-style: double;background-color:#DD1E2F;">
                                                    <strong style="color:white;">Total Days:
                                                        <?php 
                                                                        echo 35;
                                                                        
                                                                        ?></strong>
                                                    <?php /*?>>
                                                    <strong style="color:green;" align="right">Total Day's Spent:

                                                    </strong>
                                                    <?php */?>
                                                </div>

                                                <div
                                                    style="width: 38%; display:inline-block;border-style: double;background-color:#00008B;">
                                                    <strong style="color:red;">
                                                        <font color="white">Passed Days:
                                                            <?php
                                                           /* $timezone = 'Asia/Karachi';
                                                            date_default_timezone_set($timezone);
                                                

                                                /*$datetime1 = new DateTime($item->ipac_submitted_date);
                                                $datetime2 = new DateTime($dateeToday);
                                                $interval = $datetime2->diff($datetime1);
                                                $interval->format('%a');

                                                $origin = new DateTime($item->ipac_submitted_date);
                                                $target = new DateTime($dateeToday);
                                                $interval = $origin->diff($target);
                                                echo $interval->format('%R%a days'); // Output: +12 days

                                               */
                                            
                                              date_default_timezone_set('Asia/Karachi');
                                              function getTotalWorkingDays($startDate, $endDate) {
                                                  $startDate = new DateTime($startDate);
                                                  $endDate = new DateTime($endDate);
                                                  
                                                  // Initialize the working days counter
                                                  $workingDays = 0;
                                                  
                                                  // Loop through the dates
                                                  while ($startDate <= $endDate) {
                                                      // Check if the current day is a weekday (Monday to Friday)
                                                      if ($startDate->format('N') <= 5) {
                                                          $workingDays++;
                                                      }
                                                      
                                                      // Move to the next day
                                                      $startDate->modify('+1 day');
                                                  }
                                                  
                                                  return $workingDays;
                                              }
                                              
                                              // Example usage:
                                              $dateeToday=date('Y-m-d'); 
                                              $startDate = $item->ipac_submitted_date;
                                              $endDate = $dateeToday;
                                             echo $totalWorkingDays = getTotalWorkingDays($startDate, $endDate);
                                              //echo "Total working days between $startDate and $endDate: $totalWorkingDays";
                                              ?>



                                                        </font>
                                                    </strong>
                                                </div>
                                                <?php  $tot_days=35;
                                                $rem=$tot_days - $totalWorkingDays ;
                                                
 
if($rem > 0){
    $colCode="#218559";
    }else{
    $colCode="#DD1E2F";
}?>
                                                <div
                                                    style="width: 31%; display:inline-block;border-style: double;background-color:<?php echo $colCode;?>;float:right; margin-top:0px !important">
                                                    <strong style="color:red;!important;">
                                                        <font color="white"><?php 
                                     if($rem > 0){
                                        echo "Remaining Days :".$rem; 
                                     }else{
                                        echo "Above Days: ".abs($rem); 

                                     }
                                                        
                                                            
                                               

                                               /* $woweekends = 0;
                                                for($i=0; $i<=$interval->d; $i++){
                                                    $origin->modify('+1 day');
                                                    $weekday = $origin->format('w');
                                                
                                                    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for Saturday
                                                        $woweekends++;  
                                                    }
                                                
                                                }
                                                
                                                echo $woweekends;
                                                echo "<br>";*/
                                               


                                                                     
///echo "<br>";

 
                                                                        
                                                                        ?>
                                                        </font>
                                                    </strong>
                                                </div>
                                                <hr>



                                                <?php //$statuseeee=$this->session->userdata('bilo');
                                                //if($statuseeee){
                                                ///if($statuseeee==420){
                                                    $activatee="active";
                                                ///}else{
                                                   // $activatee="";   
                                                //}
                                            //}else{
                                              //  $activatee="active";  
                                            //}
                                                
                                                ?>
                                                <!-- Nav tabs -->
                                                <ul class="nav nav-tabs md-tabs" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active" data-toggle="tab" href="#home3"
                                                            role="tab">IPC Detail</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#profile3"
                                                            role="tab">Timeline</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#messages3"
                                                            role="tab">Remarks</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings3"
                                                            role="tab">Payments</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" data-toggle="tab" href="#settings4"
                                                            role="tab">CheckList</a>
                                                        <div class="slide"></div>
                                                    </li>
                                                </ul>
                                                <!-- Tab panes -->
                                                <div class="tab-content card-block">
                                                    <div class="tab-pane active" id="home3" role="tabpanel">


                                                        <table width="100%" border="3">

                                                            <tr>
                                                                <td>Package Name:</td>
                                                                <td><strong><?php echo $item->project_name."-".$item->subproject_name;?></strong>
                                                                </td>
                                                                <td>IPC No</td>
                                                                <td>

                                                                    <b>
                                                                        <font colo="white"><?php 
                                                        echo $item->ipc_no;
                                                        ?>
                                                                    </b>
                                                                    </font>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Contractor Name:</td>
                                                                <td><strong>
                                                                        <?php 
                                        $cidnew = $this->db->query("SELECT emp_id,emp_name FROM ppms_subproject_assign AS psa,emp AS e
                                        WHERE psa.`contractor_id`=e.`emp_id` and subproject_id=$item->subproject_id")->result();
                                        $z1=1;
                                        foreach($cidnew as $cidnew){
                                            echo $cidnew->emp_name." - ";
                                        //echo "(".$z1.") "."<br>";
                                        $z1++;
                                        }?></strong></td>

                                                                <td>Mobilization Advance</td>
                                                                <td>

                                                                    <b><?php 
                                                      echo $item->mobilization_advance_amount." M";
                                                      ?></b>
                                                                </td>

                                                            </tr>

                                                            <tr>
                                                                <td>Commencement Date:</td>
                                                                <td><strong>
                                                                        <?php echo $item->subproject_commencedate;?></strong>
                                                                </td>

                                                                <td>Completion Date</td>
                                                                <td>

                                                                    <b><?php echo $item->subproject_end_date;?></b>
                                                                </td>


                                                            </tr>


                                                            <tr>
                                                                <td>Sub Sub Project name</td>
                                                                <td colspan="3"><?php 
$dubee="select project_area_name from ppms_subproject_area where subproject_id=$subID";

$dubee1= $this->db->query($dubee)->result();
$z=1;
foreach($dubee1 as $dubee1){

//echo "(".$z.") ".
echo wordwrap($dubee1->project_area_name,50,"<br>\n")." - ";
//echo "<br>";
$z++;
}
//echo $this->db->last_query();
?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Certificate Type</td>
                                                                <td><?php echo $item->certificate_type;?></td>
                                                            </tr>




                                                            <tr style="background-color:#218559; color:#fff">
                                                                <td colspan="4" align="left">
                                                                    <strong>Documents Download:
                                                                    </strong>
                                                                </td>
                                                            </tr>

                                                            <?php 
                                                                         $filee="SELECT ipac_file_name,ipac_file_url,file_name 
                                                                            FROM 
                                                                            ppms_ipac_file where ipac_id=$ipc_iddd";
 $filess = $this->db->query($filee)->result();?>
                                                            <tr>
                                                                <?php $f=1;
 foreach($filess as $filess){
 ?>
                                                                <td><?php echo $f;?></td>
                                                                <td><?php echo $filess->file_name;?></td>
                                                                <td><?php echo $filess->ipac_file_name;?></td>
                                                                <td colspan="2" align="center">

                                                                    <a
                                                                        href="<?php echo base_url('img/upload_files/')?><?php echo $filess->ipac_file_url;?>">
                                                                        <img src="<?php echo base_url('img/download.jpg')?>"
                                                                            width="30px" height="30px">
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php 
                                                                        $f++;
                                                                        }?>


                                                            </form>

                                                        </table>
                                                        <form method="post"
                                                            action="<?php echo base_url('Welcome/more_file_uploading')?>"
                                                            enctype="multipart/form-data">
                                                            <table class="table">
                                                                <tr style="background-color:#218559; color:#fff">
                                                                    <td colspan="5" align="left">
                                                                        <strong>Documents Upload:
                                                                        </strong>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>File Name</td>
                                                                    <td>
                                                                        <input type="text" name="file_name" value=""
                                                                            class="form-control">
                                                                    </td>

                                                                    <td>File Upload</td>
                                                                    <td>
                                                                        <input type="hidden" name="ipc_id"
                                                                            value="<?php echo $id?>">
                                                                        <input type="file" name="Pict_upload"
                                                                            class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <input type="submit" name="upload_kifi"
                                                                            value="Upload File" class="btn btn-primary">
                                                                    </td>
                                                                </tr>

                                                            </table>
                                                        </form>

                                                    </div>
                                                    <div class="tab-pane" id="profile3" role="tabpanel">
                                                        <div class="" style="background-color:#D4F4D4;">
                                                            <div class="cd-timeline cd-container">

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
                                                                    <div class="cd-timeline-icon bg-primary">
                                                                        <i class="icofont">
                                                                            <?php /*?>icofont-ui-file<?php */?>
                                                                            <?php if($logeee->status_id==0){
                                                                                                     echo 0; 
}else if($logeee->status_id==1){
$pki="select ipac_forward_date from ppms_ipac_forward where ipac_id=$logeee->ipac_id
and organization_id=$logeee->organization_id and ipac_forward_id=(
select min(ipac_forward_id) from ppms_ipac_forward as b
where b.ipac_id=$logeee->ipac_id
and b.organization_id=$logeee->organization_id)";
$daysssse = $this->db->query($pki)->row();  
$logeee->ipac_forward_date;
///echo $this->db->last_query();
///echo "<br>";
///$daysssse->ipac_forward_date; 
//$datediff111 = $logeee->ipac_forward_date - $daysssse->ipac_forward_date;

///echo round($datediff111 / (60 * 60 * 24));

/*$origin = new DateTime($logeee->ipac_forward_date);
$target = new DateTime($daysssse->ipac_forward_date);
$interval = $target->diff($origin);
echo $interval->format('%a');
*/
 $endDate = $logeee->ipac_forward_date;
 $startDate = $daysssse->ipac_forward_date;

$weekdaysCount = getWeekdaysCount($startDate, $endDate);
echo $weekdaysCount;
///echo "Number of weekdays between $startDate and $endDate: $weekdaysCount";
                                                                                                        
                                                                                                    }else{

                                                                                                        echo 0;
                                                                                                    }?>
                                                                            <font color="black"
                                                                                style="font-size: 13px;">

                                                                                Days

                                                                            </font>
                                                                        </i>
                                                                    </div>
                                                                    <!-- cd-timeline-img -->
                                                                    <div class="cd-timeline-content card_main">
                                                                        <div class="card-block">
                                                                            <span
                                                                                style="color:red;"><?php if($f==1){
                                                                                                          echo $cid->emp_name;
                                                                                                        }else if($f > 1){
                                                                                                            echo $logeee->organization_name;
                                                                                                        }?></span><br />
                                                                            <span>
                                                                                <?php if($groupID==1){?>
                                                                                <input type="date" name="fdate"
                                                                                    class="form-control"
                                                                                    value="<?php echo $logeee->ipac_forward_date;?>"
                                                                                    onBlur="change_date(this.value,<?php echo $logeee->ipac_forward_id;?>,<?php echo $item->ipac_id;?>)">
                                                                                <?php }else{?>
                                                                                <?php echo $logeee->ipac_forward_date;?>

                                                                                <?php }?>
                                                                            </span>
                                                                            <div class="timeline-details">

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
                                                                                    <span style="font-size:10px;">
                                                                                        <?php 
                                                                                        if($logeee->status_id==2){
                                                                                            echo "";
                                                                                        ?>,

                                                                                        <?php }else{
                                                                                        echo $logeee->emp_name;?>
                                                                                        <br><?php echo $logeee->designation_name;?>
                                                                                        <br>
                                                                                        <i><?php echo $logeee->department_name;?></i></span>

                                                                                    <br>

                                                                                    <?php 

if($logeee->status_id==1){ 
$tot_days_level=$this->db->query("select days from ipc_days where level_id=$logeee->order_by")->row();
echo "<label class='label label-danger'>Total $tot_days_level->days Days</label> ";

///echo "<label class='label label-danger'>"."Total ".$tot_days_level->days."</lable>"."Days"; 
//echo "<br>";
echo "<label class='label label-success'>Passed $weekdaysCount Days</label> ";

//echo "<label class='label label-success'>Passed $weekdaysCount Days </lable> ";
$tot_daiiisss=$tot_days_level->days - $weekdaysCount;
$tot_daiiissss=abs($tot_daiiisss);
if($tot_daiiisss >=1 ){
    $daisss="Remaining";
    echo "<label class='label label-warning'> $daisss $tot_daiiissss Days</lable>";
}else{
    $daisss="Above";
    echo "<label class='label label-danger'> $daisss $tot_daiiissss Days</lable>";
}

}
?>





                                                                                    <?php }?>
                                                                                </a>
                                                                                <p class="m-t-20">
                                                                                </p>
                                                                            </div>
                                                                        </div>
                                                                        <span class="cd-date"></span>
                                                                    </div>
                                                                    <!-- cd-timeline-content -->
                                                                </div>

                                                                <?php 
                                                                                    $f++;}?>










                                                            </div>
                                                            <!-- cd-timeline -->
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="messages3" role="tabpanel">
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
                                                                            <a class="media-left" href="#">
                                                                                <img class="media-object img-circle card-list-img"
                                                                                    src="<?php echo base_url()?>assets/images/user.png"
                                                                                    alt="Generic placeholder image">
                                                                            </a>
                                                                            <div class="media-body">
                                                                                <div class="col-xs-12">
                                                                                    <strong
                                                                                        class="d-inline-block"><?php echo $remarkss->emp_name;?></strong>
                                                                                    <label
                                                                                        class="label label-info"><?php echo $remarkss->department_name;?>
                                                                                    </label>
                                                                                </div>
                                                                                <p><?php echo $remarkss->ipac_remark;?>
                                                                                </p>
                                                                                <span style="color:#228B22;"><i>Posted
                                                                                        on:
                                                                                        <strong
                                                                                            style="color:#228B22;"><?php echo $remarkss->ipac_remark_date;?></strong></i>
                                                                                </span>
                                                                                <?php 
$filee="SELECT ipac_file_name,ipac_file_url,file_name FROM 
ppms_ipac_file where ipac_id=$ipc_iddd and ipac_user_id=$remarkss->emp_id and ipac_remarks_id=$remarkss->ipac_remarks_id";
 $filess = $this->db->query($filee)->row();
 if( $filess){
 ?>
                                                                                <table class="table">
                                                                                    <tr
                                                                                        style="background-color:#218559; color:#fff">
                                                                                        <td colspan="4" align="left">
                                                                                            <strong>Documents Download:
                                                                                            </strong>
                                                                                        </td>
                                                                                    </tr>

                                                                                    <tr>

                                                                                        <td><?php echo $filess->file_name;?>
                                                                                        </td>
                                                                                        <td><?php echo $filess->ipac_file_name;?>
                                                                                        </td>
                                                                                        <td colspan="2" align="center">

                                                                                            <a
                                                                                                href="<?php echo base_url('img/upload_files/')?><?php echo $filess->ipac_file_url;?>">
                                                                                                <img src="<?php echo base_url('img/download.jpg')?>"
                                                                                                    width="30px"
                                                                                                    height="30px">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>



                                                                                    </form>

                                                                                </table>
                                                                                <?php }?>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </li>

                                                            <?php }?>



                                                        </ul>

                                                        <form method="post"
                                                            action="<?php echo base_url('Welcome/remarks_file_uploading')?>"
                                                            enctype="multipart/form-data">
                                                            <!-- List view card end -->
                                                            <label>Add Remark:</label>
                                                            <div class="card">
                                                                <input type="hidden" name="ipac_id"
                                                                    value="<?php echo $item->ipac_id;?>">
                                                                <textarea name="remarks"
                                                                    class="form-control max-textarea" maxlength="255"
                                                                    rows="4"></textarea><br>






                                                                <table class="table">
                                                                    <tr style="background-color:#218559; color:#fff">
                                                                        <td colspan="5" align="left">
                                                                            <strong>Documents Upload:
                                                                            </strong>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>File Name</td>
                                                                        <td>
                                                                            <input type="text" name="file_name" value=""
                                                                                class="form-control">
                                                                        </td>

                                                                        <td>File Upload</td>
                                                                        <td>
                                                                            <input type="hidden" name="ipc_id"
                                                                                value="<?php echo $id?>">
                                                                            <input type="file" name="Pict_upload"
                                                                                class="form-control">
                                                                        </td>
                                                                        <td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>
                                                                            <input type="submit" name="upload_kifi"
                                                                                value="Save Record"
                                                                                class="btn btn-primary">
                                                                        </td>
                                                                    </tr>

                                                                </table>
                                                        </form>
                                                    </div>
                                                </div>

                                                <div class="tab-pane" id="settings3" role="tabpanel">
                                                    <div class="dt-responsive table-responsive">
                                                        <?php 
                                                        
                $main = $this->db->query("SELECT pb.sub_sub_project_id,project_area_name
                FROM `ppms_billsummary` as pb,ppms_subproject_area as ps
                WHERE pb.subproject_id=$subID
                and pb.sub_sub_project_id=ps.project_area_id
                group by pb.sub_sub_project_id")->result();
foreach($main as $main){
?>
                                                        <h2><?php echo $main->project_area_name;?> </h2>
                                                        <table width="100%" border="5" cellspacing="0" cellpadding="0">



                                                            <tbody>


                                                                <?php
error_reporting(E_ALL);

$i=1; 
$result1 = $this->db->query("SELECT * FROM ppms_billsummary_category")->result();
foreach($result1 as $item){?>
                                                                <tr style="background-color:#000; color:#fff">
                                                                    <td colspan="3">
                                                                        <h4>
                                                                            <font color="white">(<?php echo $i;?>)
                                                                                <?php echo $item->billsummary_category_name;?>
                                                                            </font>
                                                                        </h4>
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <table style="width:100%" cellpadding="0"
                                                                            cellspacing="0" border="5">
                                                                            <thead>
                                                                                <tr
                                                                                    style="background-color:#218559; color:#fff">
                                                                                    <th style="width:10%">
                                                                                        Bill# </th>
                                                                                    <th style="width:30%">
                                                                                        Bill Summary
                                                                                        Description
                                                                                    </th>
                                                                                    <?php 
      $totKIFi="SELECT count(*) as totKIF FROM `bill_summary_amount` WHERE `subproject_id`=$subID 
      AND `sub_sub_project_id`=$main->sub_sub_project_id and amount > 1";
      $totKIFi=$this->db->query($totKIFi)->row();
      if($totKIFi->totKIF >=1){
?>  
                                                                                    <th style="width:10%">
                                                                                        BOQ First
                                                                                        Amount</th>
                                                                                    <th style="width:10%">
                                                                                        BOQ Last
                                                                                        Amount</th>

                                                                <?php }else{?>
                                                                    <th style="width:10%">
                                                                                        BOQ 
                                                                                        Amount</th>
                                                                                        <?php }?>
                                                                                    <th style="width:10%">
                                                                                        IPC
                                                                                        Amount</th>

                                                                                </tr>
                                                                            </thead>
                                                                            <tbody>
                                                                                <?php
error_reporting(0);


$result1 = $this->db->query("SELECT * FROM ppms_billsummary as a,ppms_billsummary_category as b
where a.billsummary_category_id=b.billsummary_category_id
and a.billsummary_category_id=$item->billsummary_category_id and subproject_id=$subID and sub_sub_project_id=$main->sub_sub_project_id
 order by sid asc
")->result();
$j=1;
$d1=0;
foreach($result1 as $item){?>
                                                                                <tr>





                                                                                    <td>
                                                                                        <?php //echo $i;?><?php echo $item->billsummary_no;?>
                                                                                    </td>
                                                                                    <td style="width:30%">
                                                                                        <?php  $text=$item->billsummary_desc;
                                        echo wordwrap($text, 50, "<br />\n");
                                         //echo chunk_split ($str, 5, "\r\n");
                                        //echo preg_replace("/(.{10})/", "$1\n\r", $str);
                                        ?>
    </td>
     
   <?php /*?> <td><?php 
                                                            
                                                            $maxiiM="SELECT MIN(bs_id),amount FROM `bill_summary_amount` WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id and billsummary_id=$item->billsummary_id and amount > 1";
                                                           $maxiiiM=$this->db->query($maxiiM)->row();
                                                           $newVALM=$maxiiiM->amount;
                                                           if($newVALM){
                                                       echo $newVALM;
                                                           }else{
                                                                                                                   
                                                        echo $item->billsummary_amt;
                                                           }?>
</td>
    <td>

    <?php 
                                                            
                                                            $maxii="SELECT MAX(bs_id),amount FROM `bill_summary_amount` WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id and billsummary_id=$item->billsummary_id and amount > 1";
                                                           $maxiii=$this->db->query($maxii)->row();
                                                           $newVAL=$maxiii->amount;
                                                           if($newVAL){?>
                                                            <?php 
echo $newVAL;
    }else{
                                                            
 echo $item->billsummary_amt;
    }?>


    </td>
    
    <?php */?> 
  
   <?php 
     $totKIFi="SELECT count(*) as totKIF FROM `bill_summary_amount` WHERE `subproject_id`=$subID 
      AND `sub_sub_project_id`=$main->sub_sub_project_id  and billsummary_id=$item->billsummary_id";
      $totKIFi=$this->db->query($totKIFi)->row();
      if($totKIFi->totKIF >=1){
?>
                                                                                    <td style="width:10%">
                                                                                    <?php 
                                 $maxiiM="

SELECT amount FROM bill_summary_amount 
WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id  AND billsummary_id=$item->billsummary_id AND grp_id=1 
AND grp_id=(
SELECT MIN(grp_id) FROM `bill_summary_amount`
WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id AND billsummary_id=$item->billsummary_id
)";


                                                                                    $maxiiiM=$this->db->query($maxiiM)->row();
                                                                                    $newVALM=$maxiiiM->amount;
                                                                                    if( $newVALM >=1){
                                                                                    echo $newVALM=$maxiiiM->amount;
                                                                                    }else{
                                                                                        echo 0;
                                                                                    }
                                                                                    



?>
</td>
                                                                                    <td style="width:10%">
                                                                                    <?php 
                                                            
                    $maxii="SELECT amount FROM bill_summary_amount 
                    WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id  AND billsummary_id=$item->billsummary_id and grp_id > 1
                    AND grp_id=(
                    SELECT MAX(grp_id) FROM `bill_summary_amount`
                    WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id AND billsummary_id=$item->billsummary_id
                    )" ;
                                                            $maxiii=$this->db->query($maxii)->row();
                                                            $newVAL=$maxiii->amount;
                                                            if($newVAL >=1){
                                                            echo $newVAL=$maxiii->amount;
                                                                                                    
                                                            }else{
                                                             echo 0;   
                                                            }?>
                                                            </td>

                                                                                    <?php }else{?>
                                                                                    <td style="width:10%">
                                                            <?php 
                                                            echo $item->billsummary_amt;
                                                                                        
                                                                                        ?></td>
                                                                                    <?php }?>

     
<td align="center">


     <?php  $doneeee="select * from ppms_ipc_billsummary where billsummary_id=$item->billsummary_id and ipc_id=$ipc_iddd";
			$done900=$this->db->query($doneeee)->row();
           $d=$done900->ipc_bs_amount;
            ?>
                                                                                        <input type="hidden"
                                                                                            placeholder="Enter IPAC Amount"
                                                                                            required id="billsummary_id"
                                                                                            class="form-control"
                                                                                            name="billsummary_id[]"
                                                                                            value="<?php echo $item->billsummary_id;?>">



                                                                                        <input type="text"
                                                                                            placeholder="Enter IPAC Amount"
                                                                                            required
                                                                                            id="billsummary_amount<?php echo $item->sid;?>"
                                                                                            class="form-control"
                                                                                            name="billsummary_amount[]"
                                                                value="<?php 
                                    if($done900->ipc_bs_amount >=1){
                                    echo $done900->ipc_bs_amount;
                                    }else{
                                        echo 0;
                                    }?>" onKeyup="calculate_grand_total()" onBlur="calculate_grand_total(),insert_amt(this.value,<?php echo $item->billsummary_id;?>,<?php echo $subID;?>,<?php echo $main->sub_sub_project_id?>,<?php echo $ipc_iddd;?>)">

                                                                                    </td>



                                                                                </tr>
                                                                                <?php
                    
                 
$j++;
$d1=$d1+$d; 

} 
 $totttt=$d1;
$totiiii = $this->db->query("SELECT count(*) as tot_rec FROM ppms_billsummary
where subproject_id=$subID and sub_sub_project_id=$main->sub_sub_project_id")->row();
//echo $this->db->last_query();
?>


                                                                            </tbody>
                                                                            <tfoot>
                                                                        </table>
                                                                    </td>

                                                                </tr>

                                                                <?php
$i++;
} 



?>

                                                                <input type="hidden" required id="sid_tot"
                                                                    class="form-control" name="sid_tot"
                                                                    value="<?php echo $totiiii->tot_rec;?>">
                                                                <table width="100%" cellpadding="0" cellspacing="0"
                                                                    border="0">

                                                                    <tr>
                                                                        <td><b>
                                                                                <font color="black">Amount (in PKR)
                                                                                    Million
                                                                                </font>
                                                                            </b></td>
                                                                        <td>
                                                                            <font color="black">
                                                                                <h3>
                                                                                    <input type="text"
                                                                                        name="ipac_amount420" value="<?php 
$doneeee="select sum(ipc_bs_amount) as tot_amt from ppms_ipc_billsummary where  ipc_id=$ipc_iddd and subproject_id=$subID and sub_subproject_id=$main->sub_sub_project_id";
	$done=$this->db->query($doneeee)->row();
    echo $done->tot_amt;
    ?>" style="width:280px;float:right;margin-top:0px">
                                                                                </h3>
                                                                            </font>
                                                                        </td>
                                                                    </tr>

                                                                </table>

                                                                <?php }?>
                                                                </tr>

                                                                <table class="table">
                                                                    <tr style="background-color:#000;color:#fff">
                                                                        <td>
                                                                            <h4>
                                                                                Over All Amount(in PKR) Million </h4>
                                                                        </td>
                                                                        <td><?php 
$doneeee1="select sum(ipc_bs_amount) as tot_amt1 from ppms_ipc_billsummary where  ipc_id=$ipc_iddd";
	$done1=$this->db->query($doneeee1)->row();
    echo "<h4>".$done1->tot_amt1. "</h4>";
    ?> </td>
                                                                    </tr>

                                                                </table>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="settings4" role="tabpanel">




                                                    <form method="post"
                                                        action="<?php echo base_url('Welcome/item_ipc_record')?>">
                                                        <table border="0" class="table" width="100%">
                                                            <tr style="background-color:#000;color:#fff">
                                                                <td width="20%">SNo</td>
                                                                <td width="60%">ItemName</td>
                                                                <td width="20%" colspan="3">Action</td>
                                                            </tr>
                                                            <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM items where ipc_id=$id")->result();
                  foreach($result1 as $items){?>
                                                            <tr>
                                                                <td width="20%"><?php echo $i;?></td>
                                                                <td width="60%">
                                                                    <?php if($groupID==1){?>
                                                                    <input type="text" name="item_id"
                                                                        class="form-control"
                                                                        value="<?php echo $items->item_name;?>"
                                                                        onBlur="edit_itemName(this.value,<?php echo $items->item_id;?>)">
                                                                    <?php
                       }else{?>
                                                                    <?php echo $items->item_name;?>
                                                                    <?php }?>


                                                                </td>
                                                                <input type="hidden" name="ipac_id"
                                                                    value="<?php echo $id;?>">
                                                                <?php /*?><input type="hidden"
                                                                    value="<?php echo $items->item_id;?>"
                                                                    name="item_id[]"><?php 
*/

$doneee = $this->db->query("SELECT * FROM items where item_id=$items->item_id and ipc_id=$id and status_id=1")->row();
if($doneee){
$checked="checked";
}else{
    $checked=" ";

}

?>
                                                                <td width="20%" align="left">
                                                                    <input type="checkbox"
                                                                        id="item_ids<?php echo $items->item_id;?>"
                                                                        onClick="get_checkbox(<?php echo $items->item_id;?>,<?php echo $id?>)"
                                                                        name="item_id[]"
                                                                        value="<?php echo $items->item_id;?>"
                                                                        <?php echo $checked;?> class="form-control">
                                                                </td>
                                                                <?php if($groupID==1){?>



                                                                <td>
                                                                    <a href="javascript:"
                                                                        onClick="delete_item(<?php echo $items->item_id;?>)">
                                                                        <img src="<?php echo base_url()?>img/delete.png"
                                                                            width="30px" height="30px" /> </a>


                                                                </td>
                                                                <?php }?>

                                                            </tr>
                                                            <?php 
$i++;
}?>

                                                            <?php /*?> <tr>
                                                                <td>
                                                                    <button type="submit"
                                                                        class="btn btn-block btn-outline btn-danger"
                                                                        id="add" name="item_ipc" tabindex="2">Save
                                                                        Record</button>


                                                                </td>


                                                                <td colspan="1">
                                                                    <a
                                                                        href="<?php echo base_url('Welcome/add_item/').$id?>">
                                                                        <button type="button"
                                                                            class="btn btn-block btn-outline btn-success"
                                                                            id="add" name="item_ipc" tabindex="2">Add
                                                                            New Item
                                                                            Record</button>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <?php */?>


                                                        </table>
                                                    </form>
                                                    <?php if($groupID==1){?>
                                                    <form role="form" method="post" id="create_item"
                                                        enctype="multipart/form-data" action="" autocomplete="off"
                                                        onsubmit="return confirm('Are you sure you want to submit this form?');">


                                                        <table class="table">
                                                            <tr style="background-color:#000;color:#fff">

                                                                <td colspan="3">New Item</td>

                                                            </tr>
                                                            <tr>
                                                                <td width="20%">Enter New Item</td>
                                                                <td width="60%"><input type="text" autofocus
                                                                        placeholder="Enter Item Name" required id="item"
                                                                        class="form-control" name="item" tabindex="1">
                                                                    <input type="hidden" autofocus
                                                                        placeholder="Enter Item Name" required id="ipc"
                                                                        value="<?php echo $id;?>" class="form-control"
                                                                        name="ipc" tabindex="1">

                                                                </td>

                                                                <td width="20%"><button type="submit"
                                                                        class="btn btn-block btn-outline btn-primary"
                                                                        id="add" name="add_item" tabindex="2">Save
                                                                        Record</button>
                                                                </td>
                                                            </tr>
                                                        </table>
                                                    </form>
                                                    <?php }?>










                                                </div>




                                            </div>


                                        </div>
                                        <!-- Row end -->

                                    </div>
                                </div>
                                <!-- Material tab card end -->
                            </div>
                        </div>
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
                        <?php 
	if(isset($_POST['add11'])){
		extract($_POST);
        $tdate=date('Y-m-d');
	//$done=$this->db->query("select * from ppms_ipac_remarks where output_name='$output_name'")->row();
//	if($done){


	//}else{
	//}
		
		//echo $this->db->last_query();
		//exit;
        //echo $this->db->last_query();
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/new_ipc_detail_popup/').$ipac_id);
		}
	
	
	}
	
	
	
	?>
                        <?php 
	if(isset($_POST['add_item'])){
		extract($_POST);
	$done=$this->db->query("select * from items where item_name='$item' and ipc_id=$ipc")->row();
	if($done){
$done=$this->db->query("update items set item_name='$item' where item_name='$item' and ipc_id=$ipc");	
	}else{
	$done=$this->db->query("insert into items set item_name='$item',ipc_id=$ipc");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/new_ipc_detail_popup/'.$ipc));
		}
	
	
	}
	
	
	
	?>
                        <script type="text/javascript">
                        function insert_amt(amt, sid, sprojectID, subprojectID, ipcid) {
                            ///alert(amt);
                            //var unit_qty_old=$("#unit_qty_old"+id).val();

                            //a//lert(s_qq);
                            //alert(s_rr);
                            $.post("<?php echo base_url()?>Welcome/insert_amt/", {
                                amt: amt,
                                sid: sid,
                                sprojectID: sprojectID,
                                subprojectID: subprojectID,
                                ipcid: ipcid
                            }, function(page_response) {
                                //$.post("view/get_inst.php",{inst:cont},function(rep3)
                                if (page_response == 1) {
                                    // $('#bilo').value(1);
                                   window.location.reload();
                                }
                            });

                        }
                        </script>
                        <script type="text/javascript">
                        function change_date(fdate, id, ipcid) {
                            //alert(fdate);
                            //var unit_qty_old=$("#unit_qty_old"+id).val();

                            //a//lert(s_qq);
                            //alert(s_rr);
                            $.post("<?php echo base_url()?>Welcome/change_date/", {
                                fdate: fdate,
                                id: id,
                                ipcid: ipcid
                            }, function(page_response) {
                                //$.post("view/get_inst.php",{inst:cont},function(rep3)
                                if (page_response == 1) {

                                    window.location.reload();
                                }
                            });

                        }
                        </script>
                        <?php 

function getWeekdaysCount($startDate, $endDate) {
    $startDate = strtotime($startDate);
    $endDate = strtotime($endDate);

    $weekdaysCount = 0;

    while ($startDate <= $endDate) {
        // Check if the current day is not a Saturday (6) or Sunday (0)
        if (date("w", $startDate) !== "0" && date("w", $startDate) !== "6") {
            $weekdaysCount++;
        }
        $startDate = strtotime("+1 day", $startDate);
    }

    return $weekdaysCount;
}






?>