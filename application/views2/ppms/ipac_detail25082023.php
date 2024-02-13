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
                                                    <th>IPC No.</th>
                                                    <th>Package Name</th>
                                                    <th>Certificate Type</th>
                                                    <th>Contractor Name</th>

                                                    <th>Amount</th>
                                                    <th>Internal</th>
                                                    <th>Status</th>
                                                    <th>Submission date</th>
                                                    <th>Due date</th>
                                                    <th>Forward IPC</td>
                                                    <th>Payment Status</td>
                                                    <th>Remarks</th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
                   
                   if($groupID == 5 or $groupID == 6 or $groupID == 1){
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
                  // echo $this->db->last_query();
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
                                                    <td><?php echo $item->ipc_no;?></td>

                                                    <td><?php echo $item->project_name."-".$item->subproject_name;?>
                                                    <td><?php echo $item->certificate_type;?></td>
                                                    </td>
                                                    <td>

                                                        <?php 
                                        $cidnew1 = $this->db->query("SELECT emp_id,emp_name FROM ppms_subproject_assign AS psa,emp AS e
                                        WHERE psa.`contractor_id`=e.`emp_id` and subproject_id=$item->subproject_id")->result();
                                        $z1=1;
                                        foreach($cidnew1 as $cidnew1){
                                            echo $cidnew1->emp_name." - ";
                                        //echo "(".$z1.") "."<br>";
                                        $z1++;
                                        }?>



                                                        <?php //echo $cid->emp_name;?></td>




                                                    <td><?php echo $item->ipac_amount;?></td>

                                                    <td align="center">
                                                        <?php if($tracs->status_id==2){
                                                        
                if($orgName->organization_id==$tracs->organization_id){              
                                                        ?>
                                                        <select name="designation" id="designation" style="width:80px;" class="form-control"
                                                            onChange="forward_internal(this.value,<?php echo $item->ipac_id?>,<?php echo $tracs->organization_id;?>)">

                                                            <?php 
                                                        $done1="SELECT d.designation_id,designation_name
                                                        from ppms_forward_internal as pfi,
                                                        designation as d
                                                        where pfi.to_desig_id=d.designation_id and pfi.flag_id=1 and ipc_id=$item->ipac_id";
                                                        $done2=$this->db->query($done1)->row();
                                                        if($done2){
                                                        ?>
                                                            <option value="<?php echo $done2->designation_id;?>">
                                                                <?php echo $done2->designation_name;?></option>
                                                            <?php }else{?>
                                                            <option value="">File Move</option>
                                                            <?php }?>

                                                            <?php 

/*$desig = $this->db->query("SELECT designation_id,designation_name
from designation as d,emp as e
where d.designation_id=e.designation_id
and e.organization_id=3
")->result();*/

 $desig = $this->db->query("SELECT designation_id,designation_name
 from designation
 ")->result();
foreach($desig as $desig){
?>
                                                            <option value="<?php echo $desig->designation_id;?>">
                                                                <?php echo $desig->designation_name;?></option>
                                                            <?php }?>

                                                        </select><br>




                                                        <a href="" data-toggle="modal"
                                                            data-target="#Modal-tab<?php echo $item->ipac_id?>">
                                                            <span align="center" style="font-weight:700;">
                                                                <label class="label label-danger">Check File Log</label>
                                                            </span>
                                                        </a>

                                                        <?php
}else{
 echo "<label class='label label-success'>Internal Files Log</label>";   
    
}?>

<?php }else{
 echo "<label class='label label-success'>Internal Files Log</label>";   
    
}?>
                                                        <!-------------------------------------------------------------------------------->

                                                        <div class="modal fade modal-flex"
                                                            id="Modal-tab<?php echo $item->ipac_id?>" tabindex="-1"
                                                            role="dialog">
                                                            <div class="modal-dialog" role="document">
                                                                <div class="modal-content">
                                                                    <div class="modal-body">



                                                                        <div class="card">
                                                                            <div class="card-block">
                                                                                <div class=""
                                                                                    style="background-color:#D4F4D4;">
                                                                                    <div
                                                                                        class="cd-timeline cd-container">

                                                                                        <!-- cd-timeline-block -->
                                                                                        <?php 
 $logee="SELECT d.designation_id,designation_name,forward_date,flag_id,datetime FROM ppms_forward_internal AS pfi,designation AS d
WHERE pfi.to_desig_id=d.designation_id AND ipc_id=$item->ipac_id order by ifd_id desc";
$logeee = $this->db->query($logee)->result();
 $f=1;
 foreach($logeee as $logeee){
 ?>

                                                                                        <div class="cd-timeline-block">
                                                                                           
                                                                                            <!-- cd-timeline-img -->
                                                                                            <div
                                                                                                class="cd-timeline-content card_main">
                                                                                                <div class="card-block">
                                                                                                    <span
                                                                                                        style="color:red;"><?php 
                                                                                                        echo $logeee->designation_name;
                                                                                                        ?>
                                                                                                        
                                                                                                        </span><br />
                                                                    <span></span>
                                                                                                    <div
                                                                                                        class="timeline-details">
                                                                                                        <?php echo $logeee->datetime;?>
                                                                                                        <br>
                    <?php if($logeee->flag_id==0){
                 echo "<label class='label label-success'>Forwarded</label>";
                }else if($logeee->flag_id==1){
             echo "<label class='label label-danger'>Recieved</label>";
            }
                                                                                                        
?>

                                                                                                            
                                                                                                          
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


                    <!------------------------------------------------------------------------------->


                    </td>

                    <td>
                        <?php
                                                    
                  if($tracs->status_id==0){
                  ?>
                        <label class="label label-warning">Recieved</label><br>
                        <span align="center" style="font-weight:700;">
                            <a
                                href="<?php echo base_url('Welcome/new_ipc_detail_popup/')?><?php echo $item->ipac_id?>"><?php echo $tracs->organization_name;?></a></span>

                        <?php 
                 }else if($tracs->status_id==1){
                ?>
                        <label class="label label-warning">Farwarded</label><br>
                        <span align="center" style="font-weight:700;">
                            <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/')?><?php echo $item->ipac_id?>">
                                <?php echo $tracs->organization_name;?></a></span>

                        <?php }else if($tracs->status_id==2){
                ?>
                        <label class="label label-warning">Recieved</label><br>
                        <span align="center" style="font-weight:700;">
                            <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/').$item->ipac_id;?>">
                                <?php echo $tracs->organization_name;?></a></span>

                        <?php }else if($tracs->status_id==3){?>
                        <label class="label label-danger">Cancel</label><br>
                        <span align="center" style="font-weight:700;">
                            <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/')?>
                                                            <?php echo $item->ipac_id?>" data-toggle="modal"
                                data-target="#Modal-tab<?php echo $item->ipac_id?>">
                                <?php echo $tracs->organization_name;?></a></span>

                        <?php }else if($tracs->status_id==4){?>
                        <label class="label label-success">Approved</label><br>
                        <span align="center" style="font-weight:700;">

                            <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/')?><?php echo $item->ipac_id?>">

                                <?php echo $tracs->organization_name;?></a></span>


                        <?php }else if($tracs->status_id==5){?>


                        <span align="center" style="font-weight:700;">
                            <a href="<?php echo base_url('Welcome/new_ipc_detail_popup/')?><?php echo $item->ipac_id?>">
                                <label class="label label-danger">Returned</label>



                            </a></span>


                        <?php }?>
                    </td>

                    <td><?php 
                 
                                                   

echo $Date1=$tracs->ipac_forward_date;                                                
                                                    ?>
                    </td>
                    <td>
                        <?php 
                                                   
           $tdateee=$this->db->query("select * from ipc_days where level_id=$orgName->order_by")->row();
                                                   //echo $tdateee->days;
                                                  
           /// echo $Date2 = date('Y-m-d', strtotime($tracs->ipac_forward_date . " + $tdateee->days day"));
            $tdateeee=date('Y-m-d');
////////////////////////////////////////////////////////////////////////////////////////////

$currentDate = $tracs->ipac_forward_date;
//date('Y-m-d'); // Get the current date in 'Y-m-d' format
$daysToAdd = $tdateee->days; // Number of days to add

$nextDate = addBusinessDaysToDate($currentDate, $daysToAdd);
$nextDate; // Output the next date after excluding weekends


////////////////////////////////////////////////////////////////////////////////////////////

/*
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
*/

///echo $woweekends." days without weekend";
//////////////////////////////////////////////////////////////////////////////////
/*$now = time(); // or your date as well
$your_date = strtotime($Date2);
$datediff = $now - $your_date;

$calculated=round($datediff / (60 * 60 * 24));
*/
///////////////////////////////////////////////////////////////////////////

                                              
                                              // Example usage:
                                              $dateeToday=date('Y-m-d'); 
                                              $startDate = $tracs->ipac_forward_date;
                                              $endDate = $nextDate;
                                              $woweekends = getBusinessDaysCount($dateeToday, $endDate);
                                              $nextDate;




////////////////////////////////////////////////////////////////////////////
$kifi1=$this->db->query("select * from ipc_payment where ipac_id=$item->ipac_id and status_id=2")->row();
if($kifi1){
    echo "<label class='label label-warning'>Closed</label>";
}else{
if($woweekends >= 0){
   if($tdateeee >= $nextDate){?>
                        <img src="<?php echo base_url('img/days_pass.gif')?>" width="100px" height="70px"><br>
                        <?php
                                                       
echo "<label class='label label-danger'>".$woweekends." Days Above</label>";
}else{
echo "<label class='label label-success'>".$woweekends." Days Remaining</label>";
}


}
}
?>
                    <td align="center">
                        <?php 
                                                  if($orgName->organization_id==$tracs->organization_id){
                                                    if($orgName->organization_id==4){?>
                        <select name="status_ids" id="status_ids<?php echo $item->ipac_id?>" class="form-control"
                            width="20px">
                            <?php /*?><option value="0">Recieved</option>
                            <option value="1">Forwarded</option>
                            <option value="2">In Progress</option>
                            <?php */?>
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
                            <img src="<?php echo base_url('img/next.png')?>" width="30px" height="30px">
                        </a>
                        <?php }?>


                        <?php }else{
                                                    echo "<label class='label label-warning'>Forwarded</label>";
                                                    }?>
                    </td>
                    <td align="center">
                        <?php
                                                        //echo "Pak";
                                                        if($groupID==1){
                                                            
                                                            $kifi=$this->db->query("select * from ipc_payment where ipac_id=$item->ipac_id")->row();
                                                     if($kifi){
                                    if($kifi->status_id==2){
                                        ?>
                        <label class="label label-success">
                            <font color="white">Paid</font>
                        </label>

                        <?php
                                                        }else{?>

                        <label class="label label-danger">
                            <font color="white">Un Paid</font>
                        </label>



                        <?php }

}else{?>
                        <label class="label label-danger">
                            <font color="white">Un Paid</font>
                        </label>

                        <?php  }
      /////////////////////////////////////////////////////payment stutus with out paid/////////////
     }else{
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
                            <a href='#' onClick='paid(<?php echo $item->ipac_id?>,<?php echo $tracs->status_id?>)'>
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
                                        Up-Paid
                                        <?php
                /*if($orgName->organization_id==3){?>
                                        <a href='#'
                                            onClick="paid(<?php echo $item->ipac_id?>,<?php echo $tracs->status_id?>)">
                                            <font color="white">Click to Pays</font>
                                        </a>
                                        <?php 
          }else{
            if($kifi->status_id==1){
                echo "<font color='white'>Payable</font>";
            }else{
echo "<font color='white'>Un Paid</font>";
            }


          }
          */

        }
    }
          ?>
                                        </lable>



                    </td>

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




        <!-- Modal -->

    </div>
    <?php 
                        date_default_timezone_set('Asia/Karachi');
                        /*function getTotalWorkingDays($startDate, $endDate) {
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
                        }*/
                        /////////////////////////////////////////////////
                        function getBusinessDaysCount($startDate, $endDate) {
                            $start = new DateTime($startDate);
                            $end = new DateTime($endDate);
                            
                            $interval = new DateInterval('P1D'); // 1 day interval
                            $period = new DatePeriod($start, $interval, $end);
                            
                            $businessDays = 0;
                            foreach ($period as $date) {
                                // Check if it's not Saturday or Sunday (6 = Saturday, 7 = Sunday)
                                if ($date->format('N') < 6) {
                                    $businessDays++;
                                }
                            }
                            
                            return $businessDays;
                        }
                        
                        /////////////////////////////////////////////////////
                        function addBusinessDaysToDate($date, $daysToAdd) {
                            $currentDate = new DateTime($date);
                            
                            // Loop through the days to add
                            for ($i = 0; $i < $daysToAdd; $i++) {
                                $currentDate->modify('+1 day');
                        
                                // Check if it's Saturday or Sunday and skip to the next weekday
                                while ($currentDate->format('N') >= 6) { // 6 = Saturday, 7 = Sunday
                                    $currentDate->modify('+1 day');
                                }
                            }
                            
                            return $currentDate->format('Y-m-d'); // Format the date as needed
                        }
                        
                        ?>
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
	redirect(base_url('Welcome/ipac_detail'));
		}
	
	
	}
	
	
	
	?>
    <script type="text/javascript">
    function forward(id, oid) {


        var status_ids = $("#status_ids" + id).val();
        let text = "Are You Sure to Forward IPC.";
        if (confirm(text) == true) {
            $.post("<?php echo base_url()?>Dropdowns/forward_ipace/", {
                ipac_id: id,
                oid: oid,
                status_ids: status_ids

            }, function(page_response) {

                if (page_response == 1) {
                    alert('File Moved');
                    // $("#display_products").html(page_response);
                    ///calculate_grand_total();
                    ///$("#barcode").focus();
                    window.location.reload();
                } else {
                    alert('Thanks File Moved Already');
                    window.location.reload();

                }

            });
        }

    }
    </script>

    <script type="text/javascript">
    function forward_internal(desig, id, oid) {



        let text = "Are You Sure to Forward IPC.";
        if (confirm(text) == true) {
            $.post("<?php echo base_url()?>Dropdowns/forward_internal/", {
                ipac_id: id,
                oid: oid,
                desig: desig

            }, function(page_response) {

                if (page_response == 1) {
                    alert('File Moved');
                    // $("#display_products").html(page_response);
                    ///calculate_grand_total();
                    ///$("#barcode").focus();
                    window.location.reload();
                } else {
                    alert('Thanks File Moved Already');
                    window.location.reload();

                }

            });
        }

    }
    </script>

    <script type="text/javascript">
    function paid(id, sid) {

        if (sid == 4) {

            let text = "Are You Sure to Change Payment Status.";
            if (confirm(text) == true) {
                $.post("<?php echo base_url()?>Dropdowns/ipace_paid/", {
                    ipac_id: id


                }, function(page_response) {

                    if (page_response == 1) {
                        alert('IPC Paid');
                        // $("#display_products").html(page_response);
                        ///calculate_grand_total();
                        ///$("#barcode").focus();
                        window.location.reload();
                    } else {
                        alert('Some Problem');
                        window.location.reload();

                    }

                });
            }

        } else {

            alert("You are not authroized for this Activity");
        }


    }
    </script>