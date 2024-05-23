<style>
table tr td {
    align-items: center;
}

.sticky {
    position: sticky;
    top: 0;
    background-color: #f9f9f9;
    /* You can adjust the background color as needed */
    z-index: 1000;
    /* Ensure the z-index is higher than other elements */
}

/* Additional CSS to style the table */
.table-container {
    max-height: 400px;
    /* Adjust the max height as needed */
    overflow-y: auto;
}

/* Optional: Add padding to the bottom of the table to prevent content from hiding behind the sticky header */
.table-container table {
    margin-bottom: 50px;
    /* Adjust the value as needed */
}
</style>
<?php error_reporting(0);?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <!--  <div class="page-header-title">
                                <h4>Safegaurd Report</h4>
                            </div> -->
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                    <div class="card" style="margin-right:20px;">
                        <div class="card-block">
                            <div class="container" style="overflow:scroll;margin-right:20px">
                                <div class="row">
                                    <div class="col-12">
                                        <form method="post" action="">
                                            <table border="1px" cellpadding="3px" cellspacing="0px" width="100%">
                                                <thead>
                                                    <tr>
                                                        <td>Search</td>
                                                        <td>
                                                            <?php
$currentYear = date("Y"); // Get the current year
$startYear = 2020; // Set the start year
$endYear = 2050; // Set the end year

echo '<select name="year" class="form-control">';
for ($year = $startYear; $year <= $endYear; $year++) {
    // Check if the current year matches the iteration year
    $selected = ($year == $currentYear) ? 'selected' : '';
    echo '<option value="' . $year . '" ' . $selected . '>' . $year . '</option>';
}
echo '</select>';
?>
                                                        </td>
                                                        <td><input type="submit" name="search" value="Search"
                                                                class="btn btn-danger"></td>
                                                    </tr>
                                                </thead>
                                            </table>
                                        </form>

                                        <?php if(isset($_POST['search'])){
    
    extract($_POST);
    ?>
                                        <table border="1px" cellpadding="3px" cellspacing="0px" width="100%">
                                            <thead>
                                                <tr>
                                                    <th colspan="33" style="font-size: 18px;">KHYBER PAKHTUNKHWA CITIES
                                                        IMPROVEMENT PROJECT (KPCIP)</th>
                                                </tr>
                                                <tr>
                                                    <td colspan="33" style="font-size: 18px;">Financing : ADB Loan
                                                        4160-PAK
                                                        and AIIB Loan (L0214A)</td>

                                                </tr>
                                                <tr style="border-bottom: 4px solid black;">
                                                    <td colspan="33" style="font-size: 18px;">Disbursement Targets for
                                                        <?php echo $year;?>
                                                    </td>


                                                </tr>

                                                <tr class="sticky">
                                                    <th><b>Sr.</b></th>
                                                    <th><b>Description</b></th>

                                                    <th>Contract Amount</th>
                                                    <th>Previous Disbursements</th>
                                                    <?php 

$montheeee = $this->db->query("select * from month order by month_id asc")->result();

foreach($montheeee as $montheeee){
?>
                                                    <th><b><?php echo $montheeee->month_name;?></b>
                                                        <?php echo $year;?><br><br> PKR
                                                        Millions
                                                        <table width="100%" border="1" cellpadding="0" cellspacing="0">
                                                            <tr>
                                                                <td width="50%">Planned</td>
                                                                <td width="50%">Achieved</td>
                                                            </tr>

                                                        </table>

                                                    </th>
                                                    <?php }?>
                                                    <th><b>Total</b><br><br> PKR Millions</th>

                                                </tr>
                                            </thead>
                                            <tr style="border-bottom: 4px solid black;">
                                                <th>1</th>
                                                <td><b>Civil Works</b> </td>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                            </tr>

                                            <?php 

    $projects = $this->db->query("select * from ppms_project")->result();
    $z1=1;
    foreach($projects as $projects){
?>


                                            <tr>
                                                <td></td>
                                                <td><b>OCB/KPCIP/<?php echo $projects->project_name;?></b></td>

                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>


                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            <?php 

    $Subprojects = $this->db->query("select * from ppms_subproject as ps,city as c
     where ps.project_id=$projects->project_id and ps.city_id=c.city_id")->result();
    
    foreach($Subprojects as $Subprojects){
?>
                                            <tr>
                                                <td></td>
                                                <td align="right"><b><?php echo $Subprojects->subproject_name;?></b>:
                                                    <?php echo wordwrap($Subprojects->detail, 40, "<br>\n");?>

                                                    <b><?php echo $Subprojects->city_name;?></b>
                                                </td>
                                                <td align="center"><b><?php echo number_format($Subprojects->subproject_amount,2);?></b></td>
                                                <td align="center"><b><?php echo 0?></b></td>
                                                <?php 

$montheeee1 = $this->db->query("select * from month order by month_id asc")->result();

foreach($montheeee1 as $montheeee2){
?>
                                                <td>

                                                    <table width="100%" border="1" cellpadding="0" cellspacing="0">
                                                        <tr>
                                                            <td width="50%" align="center"> <?php 

$bud_amt = $this->db->query("select * from cad_disbursement_target where sub_project_id=$Subprojects->subproject_id and year=$year and month_id=$montheeee2->month_id")->row();

//foreach($bud_amt as $bud_amt){
?>

                                                                <?php if($bud_amt->amount){
                                                    echo $bud_amt->amount;
                                                }else{
                                                 echo 0;   
                                                }?></td>
                                                            <?php //}?>
                                                </td>
                                                <td width="50%" align="center"> <?php 

$paid_amt = $this->db->query("SELECT * FROM `ppms_ipac` AS ppi,`ipc_payment` AS ip
WHERE ppi.`ipac_id`=ip.`ipac_id`
AND ip.`status_id`=2
AND ppi.`subproject_id`=$Subprojects->subproject_id and MONTH(ipc_payment_date)=$montheeee2->month_id and YEAR(ipc_payment_date)=$year")->row();

//foreach($bud_amt as $bud_amt){
?>

                                                    <?php if($paid_amt->ipa_amount){
                                                    echo $paid_amt->ipa_amount;
                                                }else{
         $bud_amt_manual = $this->db->query("select * from ipc_temp_payment where sub_project_id=$Subprojects->subproject_id and year=$year and month_id=$montheeee2->month_id")->row();
  
  if($bud_amt_manual->amount){
    echo $bud_amt_manual->amount;
  }else{
    echo 0;
  }
                                                }?></td>
                                                <?php //}?>
                                                </td>


                                            </tr>

                                        </table>
                                        </td>
                                        <?php }?>

                                        </tr>


                                        <?php 
    }
                                        }?>

                                        <tr style="border-bottom: 4px solid black;">

                                            <th></th>
                                            <td><b>Total for Civil Works + Supervision/Project Management (PKR)</b>
                                            </td>
                                            <th></th>
                                            <th></th>
                                           
<?php 

$montheeee10 = $this->db->query("select * from month order by month_id asc")->result();

foreach($montheeee10 as $montheeee101){
?>
    <th>   
        <table class="table"><tr><td>
            <?php 

$bud_amt_gross = $this->db->query("select sum(amount) as sub_tots
 from cad_disbursement_target where year=$year and month_id=$montheeee101->month_id")->row();


?>

                                                <?php if($bud_amt_gross->sub_tots){
                                                    echo number_format($bud_amt_gross->sub_tots,2);
                                                }else{
                                                    

$tot_cad_dis = $this->db->query("select sum(amount) as tot_cad_dis from 
cad_disbursement_target where  year=$year and month_id=$montheeee101->month_id")->row();
                                                    
                                                    if($tot_cad_dis->tot_cad_dis >=1){
                                    echo number_format($tot_cad_dis->tot_cad_dis,2);
                                                    }else{
                                                        echo 0;
                                                    }
                                                
                                                }?>

</td><td>

<?php 

$tot_ipc_amt = $this->db->query("SELECT sum(ipa_amount) as tot_ipc_amt FROM `ppms_ipac` AS ppi,`ipc_payment` AS ip
WHERE ppi.`ipac_id`=ip.`ipac_id`
AND ip.`status_id`=2
AND MONTH(ipc_payment_date)=$montheeee101->month_id and YEAR(ipc_payment_date)=$year")->row();

//foreach($bud_amt as $bud_amt){
?>

                                                    <?php if($tot_ipc_amt->tot_ipc_amt){
                                                    echo number_format($tot_ipc_amt->tot_ipc_amt,2);
                                                }else{
         $tot_budget_amt = $this->db->query("select sum(amount) as tot_budget_amt 
         from ipc_temp_payment where year=$year and month_id=$montheeee101->month_id")->row();
  
  if($tot_budget_amt->tot_budget_amt){
    echo number_format($tot_budget_amt->tot_budget_amt,2);
  }else{
    echo 0;
  }
                                                }?>



</td></tr>
</table>





                                            </th>

                                            <?php }?>
                                        </tr>
                                        <tr style="border-bottom: 4px solid black;">
                                            <td></td>
                                            <td><b>Total Amounts in US$</b></td>


                                            <th></th>
                                            <th></th>
                                            <?php 

$montheeee10 = $this->db->query("select * from month order by month_id asc")->result();

foreach($montheeee10 as $montheeee101){
?>
    <th>   
        <table class="table"><tr><td>
            <?php 

$bud_amt_gross = $this->db->query("select sum(amount) as sub_tots
 from cad_disbursement_target where year=$year and month_id=$montheeee101->month_id")->row();


?>

                                                <?php if($bud_amt_gross->sub_tots){
                                                    $a=$bud_amt_gross->sub_tots/280;
                                                    echo number_format($a,2);
                                                }else{
                                                    

$tot_cad_dis = $this->db->query("select sum(amount) as tot_cad_dis from 
cad_disbursement_target where  year=$year and month_id=$montheeee101->month_id")->row();
                                                    
                                                    if($tot_cad_dis->tot_cad_dis >=1){
                                         $b=$tot_cad_dis->tot_cad_dis/280;
                                    echo number_format($b,2);
                                                    }else{
                                                        echo 0;
                                                    }
                                                
                                                }?>

</td><td>

<?php 

$tot_ipc_amt = $this->db->query("SELECT sum(ipa_amount) as tot_ipc_amt FROM `ppms_ipac` AS ppi,`ipc_payment` AS ip
WHERE ppi.`ipac_id`=ip.`ipac_id`
AND ip.`status_id`=2
AND MONTH(ipc_payment_date)=$montheeee101->month_id and YEAR(ipc_payment_date)=$year")->row();

//foreach($bud_amt as $bud_amt){
?>

                                                    <?php if($tot_ipc_amt->tot_ipc_amt){
                                                      $c=$tot_ipc_amt->tot_ipc_amt/280;  
                                                    echo number_format($c,2);
                                                }else{
         $tot_budget_amt = $this->db->query("select sum(amount) as tot_budget_amt 
         from ipc_temp_payment where year=$year and month_id=$montheeee101->month_id")->row();
  
  if($tot_budget_amt->tot_budget_amt){
    $d=$tot_budget_amt->tot_budget_amt/280;
    echo number_format($d,2);
  }else{
    echo 0;
  }
                                                }?>



</td></tr>
</table>





                                            </th>

                                            <?php }?>


                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>ADB Share (US$)</td>

                                            <th></th>
                                            <th></th>
                                            <?php 

$montheeee10 = $this->db->query("select * from month order by month_id asc")->result();

foreach($montheeee10 as $montheeee101){
?>
    <th>   
        <table class="table"><tr><td>
            <?php 

$bud_amt_gross = $this->db->query("select sum(amount) as sub_tots
 from cad_disbursement_target where year=$year and month_id=$montheeee101->month_id")->row();


?>

                                                <?php if($bud_amt_gross->sub_tots){
                                                    $a1=($bud_amt_gross->sub_tots/280);
                                                    $a11=((65*$a1)/100);
                                                    echo number_format($a11,2);
                                                }else{
                                                    

$tot_cad_dis = $this->db->query("select sum(amount) as tot_cad_dis from 
cad_disbursement_target where  year=$year and month_id=$montheeee101->month_id")->row();
                                                    
                                                    if($tot_cad_dis->tot_cad_dis >=1){
                                         $b1=$tot_cad_dis->tot_cad_dis/280;
                                         $b11=((65*$b1)/100);
                                    echo number_format($b11,2);
                                                    }else{
                                                        echo 0;
                                                    }
                                                
                                                }?>

</td><td>

<?php 

$tot_ipc_amt = $this->db->query("SELECT sum(ipa_amount) as tot_ipc_amt FROM `ppms_ipac` AS ppi,`ipc_payment` AS ip
WHERE ppi.`ipac_id`=ip.`ipac_id`
AND ip.`status_id`=2
AND MONTH(ipc_payment_date)=$montheeee101->month_id and YEAR(ipc_payment_date)=$year")->row();

//foreach($bud_amt as $bud_amt){
?>

                                                    <?php if($tot_ipc_amt->tot_ipc_amt){
                                                      $c1=$tot_ipc_amt->tot_ipc_amt/280;  
                                                      $c11=((65*$c1)/100);
                                                    echo number_format($c11,2);
                                                }else{
         $tot_budget_amt = $this->db->query("select sum(amount) as tot_budget_amt 
         from ipc_temp_payment where year=$year and month_id=$montheeee101->month_id")->row();
  
  if($tot_budget_amt->tot_budget_amt){
    $d1=$tot_budget_amt->tot_budget_amt/280;
    $d11=((65*$d1)/100);
    echo number_format($d11,2);
  }else{
    echo 0;
  }
                                                }?>



</td></tr>
</table>





                                            </th>

                                            <?php }?>




                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>AIIB Share (US$)</td>

                                            <th></th>
                                            <th></th>
                                            <?php 

$montheeee10 = $this->db->query("select * from month order by month_id asc")->result();

foreach($montheeee10 as $montheeee101){
?>
    <th>   
        <table class="table"><tr><td>
            <?php 

$bud_amt_gross = $this->db->query("select sum(amount) as sub_tots
 from cad_disbursement_target where year=$year and month_id=$montheeee101->month_id")->row();


?>

                                                <?php if($bud_amt_gross->sub_tots){
                                                    $a2=($bud_amt_gross->sub_tots/280);
                                                    $a22=((35*$a2)/100);
                                                    echo number_format($a22,2);
                                                }else{
                                                    

$tot_cad_dis = $this->db->query("select sum(amount) as tot_cad_dis from 
cad_disbursement_target where  year=$year and month_id=$montheeee101->month_id")->row();
                                                    
                                                    if($tot_cad_dis->tot_cad_dis >=1){
                                         $b2=$tot_cad_dis->tot_cad_dis/280;
                                         $b22=((35*$b2)/100);
                                    echo number_format($b22,2);
                                                    }else{
                                                        echo 0;
                                                    }
                                                
                                                }?>

</td><td>

<?php 

$tot_ipc_amt = $this->db->query("SELECT sum(ipa_amount) as tot_ipc_amt FROM `ppms_ipac` AS ppi,`ipc_payment` AS ip
WHERE ppi.`ipac_id`=ip.`ipac_id`
AND ip.`status_id`=2
AND MONTH(ipc_payment_date)=$montheeee101->month_id and YEAR(ipc_payment_date)=$year")->row();

//foreach($bud_amt as $bud_amt){
?>

                                                    <?php if($tot_ipc_amt->tot_ipc_amt){
                                                      $c2=$tot_ipc_amt->tot_ipc_amt/280;  
                                                      $c22=((35*$c2)/100);
                                                    echo number_format($c22,2);
                                                }else{
         $tot_budget_amt = $this->db->query("select sum(amount) as tot_budget_amt 
         from ipc_temp_payment where year=$year and month_id=$montheeee101->month_id")->row();
  
  if($tot_budget_amt->tot_budget_amt){
    $d2=$tot_budget_amt->tot_budget_amt/280;
    $d22=((35*$d2)/100);
    echo number_format($d22,2);
  }else{
    echo 0;
  }
                                                }?>



</td></tr>
</table>



<?php }?>
                                        </tr>

                                        </table>

                                        <?php }?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<style>
/* General Table Styles */
table {
    border-collapse: collapse;
    width: 100%;
    font-size: 12px; /* Set font size to 10px */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow around the table */
}

/* Header Styles */
th {
    background-color: #218559;
    color: #fff;
    border: 1px solid #fff;
    padding: 8px;
    text-align: left;
    vertical-align: middle;
    position: sticky; /* Keep headers fixed when scrolling */
    top: 0;
    z-index: 1;
    box-shadow: inset 0 0 5px #888;
    text-transform: uppercase; /* Capitalize headers */
}

/* Data Cell Styles */
td {
    background-color: #F9F9F9;
    border: 1px solid #fff;
    padding: 8px;
    text-align: left;
    vertical-align: middle;
    box-shadow: inset 0 0 5px #ccc;
    color: #333;
    transition: background-color 0.3s ease, color 0.3s ease;
}

/* Hover Effects for Data Cells */
td:hover {
    background-color: #F1F1F1;
    color: #000;
}

/* Row Striping */
tr:nth-child(even) td {
    background-color: #fff;
}

/* Enhanced Image Hover Effect */
img {
    transition: transform 0.3s ease, box-shadow 0.3s ease;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); /* Add shadow around images */
}

/* Rotate and Scale Image on Hover */
img:hover {
    transform: rotate(360deg) scale(1.1);
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2); /* Increase shadow on hover */
}
</style>