<style>
table tr td {
    align-items: center;
}
.sticky {
    position: sticky;
    top: 0;
    background-color: #f9f9f9; /* You can adjust the background color as needed */
    z-index: 1000; /* Ensure the z-index is higher than other elements */
}

/* Additional CSS to style the table */
.table-container {
    max-height: 400px; /* Adjust the max height as needed */
    overflow-y: auto;
}

/* Optional: Add padding to the bottom of the table to prevent content from hiding behind the sticky header */
.table-container table {
    margin-bottom: 50px; /* Adjust the value as needed */
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

                                    



                                        <table border="1px" cellpadding="3px" cellspacing="0px" width="100%">
                                        <thead>   
                                        <tr>
                                                <th colspan="33" style="font-size: 18px;">KHYBER PAKHTUNKHWA CITIES
                                                    IMPROVEMENT PROJECT (KPCIP)</th>
                                            </tr>
                                            <tr>
                                                <th colspan="33" style="font-size: 18px;">Financing : ADB Loan 4160-PAK
                                                    and AIIB Loan (L0214A)</th>

                                            </tr>
                                            <tr style="border-bottom: 4px solid black;">
                                                <th colspan="33" style="font-size: 18px;">Disbursement Targets for 2024
                                                </th>


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
                                                <th><b><?php echo $montheeee->month_name;?></b> 2024<br><br> PKR Millions
<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr><td width="50%">Planned</td>
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
                                                
                                                <b><?php echo $Subprojects->city_name;?></b></td>
                                                <td align="center"><b><?php echo 0?></b></td>
                                                <td align="center"><b><?php echo 0?></b></td>
                                                <?php 

$montheeee1 = $this->db->query("select * from month order by month_id asc")->result();

foreach($montheeee1 as $montheeee2){
?>                                               
<td>

<table width="100%" border="1" cellpadding="0" cellspacing="0">
<tr>
<td width="50%" align="center"> <?php 

$bud_amt = $this->db->query("select * from cad_disbursement_target where sub_project_id=$Subprojects->subproject_id and year=2024 and month_id=$montheeee2->month_id")->row();

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
AND ppi.`subproject_id`=$Subprojects->subproject_id and MONTH(ipc_payment_date)=$montheeee2->month_id and YEAR(ipc_payment_date)=2024")->row();

//foreach($bud_amt as $bud_amt){
?>

                                                <?php if($paid_amt->ipa_amount){
                                                    echo $paid_amt->ipa_amount;
                                                }else{
         $bud_amt_manual = $this->db->query("select * from ipc_temp_payment where sub_project_id=$Subprojects->subproject_id and year=2024 and month_id=$montheeee2->month_id")->row();
  
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
                                                <th> 2,055 </th>
                                                <th> 2,173 </th>
                                                <th> 3,625 </th>
                                                <th> 2,807 </th>
                                                <th> 2,143 </th>
                                                <th> 1,856 </th>
                                                <th> 2,530 </th>
                                                <th> 2,902 </th>
                                                <th> 2,603 </th>
                                                <th> 2,564 </th>
                                                <th> 2,825 </th>
                                                <th> 2,851 </th>
                                                <th> 30,934 </th>

                                            </tr>
                                            <tr style="border-bottom: 4px solid black;">
                                                <td></td>
                                                <td><b>Total Amounts in US$</b></td>


                                                <th></th>
                                                <th></th>
                                                <th> $7.34 </th>
                                                <th> $7.76 </th>
                                                <th> $12.95 </th>
                                                <th> $10.02 </th>
                                                <th> $7.65 </th>
                                                <th> $6.63 </th>
                                                <th> $9.04 </th>
                                                <th> $10.37 </th>
                                                <th> $9.30 </th>
                                                <th> $9.16 </th>
                                                <th> $10.09 </th>
                                                <th> $10.18 </th>
                                                <th> $110.48 </th>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>ADB Share (US$)</td>

                                                <td></td>
                                                <td></td>
                                                <td> $5.32 </td>
                                                <td> $5.64 </td>
                                                <td> $9.42 </td>
                                                <td> $7.29 </td>
                                                <td> $5.56 </td>
                                                <td> $4.82 </td>
                                                <td> $6.57 </td>
                                                <td> $7.53 </td>
                                                <td> $6.76 </td>
                                                <td> $6.66 </td>
                                                <td> $7.33 </td>
                                                <td> $7.40 </td>
                                                <td> $71.69 </td>

                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td>AIIB Share (US$)</td>

                                                <td></td>
                                                <td></td>
                                                <td> $2.02 </td>
                                                <td> $2.12 </td>
                                                <td> $3.53 </td>
                                                <td> $2.73 </td>
                                                <td> $2.09 </td>
                                                <td> $1.81 </td>
                                                <td> $2.47 </td>
                                                <td> $2.83 </td>
                                                <td> $2.54 </td>
                                                <td> $2.50 </td>
                                                <td> $2.76 </td>
                                                <td> $2.78 </td>
                                                <td> $38.79 </td>

                                            </tr>

                                        </table>
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