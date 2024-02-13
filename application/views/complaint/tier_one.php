
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="container">
                                    <div class="row">
                                        <div class="col-9">
                                            <h4>Complaints List Tier 1</h4>
                                        </div>
                                        
                                    </div>
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
                                            <h5>Complaint Records</h5>
                                            <span></span>
                                        
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">

                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>Applicant Name</th>
                                                            <th>Applicant Address</th>
                                                            <th>Applicant Mobile</th>
                                                            <th>Applicant CNIC</th>
                                                            <th>Complaint Date</th>
                                                            <th>Complaint Category</th>
                                                            <th>Source</th>
                                                            <th>SubProject</th>
                                                            <th>Tehsil</th>
                                                            <th>Complaint Title</th>
                                                            <th>Complaint Detail</th>
                                                            <th>Tier</th>
                                                            <th>Status</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,tehsil AS th,grm_tier_tbl As t,grc_status_tbl As gs where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND th.tehsil_id=gcd.tehsil_id AND t.tier_id=gcd.tier_id AND gcd.tier_id=1 AND gs.status_id=gcd.status_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>
                        <td><?php echo $item->applicant_name?></td>
                        <td><?php echo $item->applicant_address?></td>
                        <td><?php echo $item->applicant_mobile?></td>
                        <td><?php echo $item->applicant_cnic?></td>
                        <td><?php echo $item->complaint_date?></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->subproject_name?></td>
                        <td><?php echo $item->tehsil_name?></td>
                        <td><?php echo $item->complaint_title?></td>
                        <td><?php echo $item->complaint_detail?></td>
                        <td><?php echo $item->tier_name?></td>
                        <td><?php echo $item->status_name?></td>

        <td><a href="<?php echo base_url()?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id;?>">
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




                            </div>

                        </div>
                        
	<?php 
    // $result = $this->db->query("SELECT complaint_date FROM gre_complaint_detail where tier_id=1")->row();
    //     $result1 = $this->db->query("SELECT tier_days FROM grm_tier_tbl where tier_id=1")->row();
//     $date= date('Y-m-d');
//     echo $date.'<br>';

//     $Date2 = date('Y-m-d', strtotime($result->complaint_date . " + $result1->tier_days day"));
//     echo $Date2.'<br>';
//    $datetime1 = new DateTime($Date2);
//    $datetime2 = new DateTime($date);
//    //echo '<hr>';
//    $interval=$datetime2->diff($datetime1);
//    $woweekends = 0;
// for($i=0; $i<=$interval->d; $i++){
//    $datetime1->modify('+1 day');
//    $weekday = $datetime1->format('w');

//    if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for Saturday
//        $woweekends++;  
//    }
// }
// echo $woweekends;
//     //echo $interval->format('%a').'<br>';
//     $current_date=date("Y-m-d");
//     if($Date2==$current_date){
//      $update=$this->db->query("update gre_complaint_detail set tier_id=2 where tier_id=1 AND complaint_date=CURRENT_DATE");
//      echo "Yes";
// }
// else{
//     echo "No";
// }
    ?>

    
<!--Begin Code for Tier Updation through date -->
  <?php 
    $result = $this->db->query("SELECT complaint_date FROM gre_complaint_detail where tier_id=1")->row();
    $result1 = $this->db->query("SELECT tier_days FROM grm_tier_tbl where tier_id=1")->row();
  $Date2 = date('Y-m-d', strtotime($result->complaint_date . " + $result1->tier_days day"));
  $Date3 = date('Y-m-d', strtotime($Date2 . " - $result4->tier_days day"));
 //echo '<br>'.date('Y-m-d').'<br>';
 //echo $Date2.'<br>';
$tdateeee=date('Y-m-d');
$datetime1 = new DateTime($Date2);
$datetime2 = new DateTime($tdateeee);
//echo '<hr>';
$interval=$datetime1->diff($datetime2);
//echo $interval->format('%a').'<br>';
$woweekends = 0;
for($i=1; $i<=$interval->d; $i++){
   $datetime2->modify('+1 day');
  $weekday = $datetime2->format('w');
  //echo "zzz".$weekday."YYY";
   if($weekday !== "0" && $weekday !== "6"){ // 0 for Sunday and 6 for Saturday
       $woweekends++;
       //echo '<br>'.$woweekends;
   }
}
// if($woweekends<=0){
//     $update = $this->db->query("update gre_complaint_detail set tier_id=2 where tier_id=1 AND complaint_date='$Date3'");
// }
     ?>

<!-- End Code for Tier Updation through date -->
	







    <?php
  
// Initialising the two datetime objects
//$datetime1 = new DateTime('2019-9-10');
//$datetime2 = new DateTime('2019-9-15');
  
// Calling the diff() function on above
// two DateTime objects
//$difference = $datetime1->diff($datetime2);
  
// Getting the difference between two
// given DateTime objects
//echo $difference->format('%R%a days');
?>