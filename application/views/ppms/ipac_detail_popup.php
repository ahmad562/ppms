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
   
   $orgName=$this->db->query("SELECT e.emp_id,e.emp_name,o.organization_name,
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
                                                    <th>Contractor Name</th>
                                                    <th>Remarks</th>
                                                    <th>Amount</th>
                                                    <th>Status</th>
                                                    <th>Submission date</th>
                                                    <th>Forward IPC</td>
                                                    <th>Payment Status</td>

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
                    if($desig_emp->designation_id==8){
                        $result1 = $this->db->query("SELECT * FROM 
                      ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp,assign_regional AS ar
                      where ppi.subproject_id=ppsp.subproject_id
                      and ppi.subproject_id=ar.subproject_id
                      and ppsp.project_id=ppp.project_id
                      and ar.emp_id=$empID
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

                                                    <td><?php echo $item->ipac_amount;?>M</td>

                                                    <td>
                                                        <?php
                                                    
                  if($tracs->status_id==0){
                  ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab<?php echo $item->ipac_id?>"><?php echo $tracs->organization_name;?></a></span>

                                                        <?php 
                 }else if($tracs->status_id==1){
                ?>
                                                        <label class="label label-warning">Farwarded</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal" data-target="#Modal-tab">
                                                                <?php echo $tracs->organization_name;?></a></span>

                                                        <?php }else if($tracs->status_id==2){
                ?>
                                                        <label class="label label-warning">Recieved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab<?php echo $item->ipac_id?>"><?php echo $tracs->organization_name;?></a></span>

                                                        <?php }else if($tracs->status_id==3){?>
                                                        <label class="label label-danger">Cancel</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab<?php echo $item->ipac_id?>">
                                                                <?php echo $tracs->organization_name;?></a></span>

                                                        <?php }else if($tracs->status_id==4){?>
                                                        <label class="label label-success">Approved</label><br>
                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab<?php echo $item->ipac_id?>">
                                                                <?php echo $tracs->organization_name;?></a></span>


                                                        <?php }else if($tracs->status_id==5){?>


                                                        <span align="center" style="font-weight:700;">
                                                            <a href="" data-toggle="modal"
                                                                data-target="#Modal-tab<?php echo $item->ipac_id?>">
                                                                <label class="label label-danger">Returned</label>



                                                            </a></span>


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
*/
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
                                                    <td align="center">
                                                        <?php 
                                                  if($orgName->organization_id==$tracs->organization_id){
                                                    if($orgName->organization_id==4){?>
                                                        <select name="status_ids"
                                                            id="status_ids<?php echo $item->ipac_id?>"
                                                            class="form-control" width="20px">
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
                                                            <img src="<?php echo base_url('img/next.png')?>"
                                                                width="30px" height="30px">
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

                                                </tr>

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

                                                                            </strong>
                                                                            <?php */?>
                                                                        </div>
                                                                        <div
                                                                            style="width: 64%; display:inline-block;border-style: double;background-color:red;">
                                                                            <strong
                                                                                style="color:red;margin-left:85px !important">
                                                                                <font color="white">Total Day's
                                                                                    Remaining:
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
                                                
                                                 $woweekends;
                                                
                                                
                                                ?>
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
                                                                                                    <?php /*?>icofont-ui-file<?php */?>
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
                                                </form>
                                                <!-- Hover table card end -->

                                    </div>
                                    <!-- Page-body end -->

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
                        let text = "Are You Sure to Forward IPAC.";
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