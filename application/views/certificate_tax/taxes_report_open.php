<style>
table {
    width: 100%;
    border-collapse: collapse;
}

th,
td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: left;
    /* Center horizontally */
    vertical-align: middle;
    /* Center vertically */
}
</style>

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <?php  
$empiD=$this->session->userdata('empid');
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
  error_reporting(0);
   ?>
        <?php 
                         $result2 = $this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id and ipac_id=$id
                    ")->row();
                   
                   ?>
      
                            <table width="100%" border="0" cellpadding="0" cellspacing="0">

                                <tr style="background-color:#558ed5;color:#fff">
                                    <td>
                                        <h2>Package Name:</h2>
                                    </td>
                                    <td><strong>
                                            <h2><?php echo $result2->project_name."/".$result2->subproject_name;?></h2>
                                        </strong>
                                    </td>
                                    <td>/</td>
                                    <td>
                                        <h2>IPC No: <?php echo $result2->ipc_no;?></h2>
                                </tr>
                            </table>
                         

                                 
                                      
                                                    <h5><?php echo $result2->project_name."-".$result2->subproject_name;?>
                                                        Payment Certificate # <?php echo $result2->ipc_no; ?> Covering
                                                        IPC#
                                                        <?php echo $result2->ipc_no;?>
                                                       

                                                       



                                                        <input type="hidden" id="organization_id" name="organization_id"
                                                            class="form-control"
                                                            value="<?php echo $orgName->organization_id; ?>">
                                                        <table class="table table-bordered" style="width:100%">
                                                            <tr style="background-color:#000;color:#fff">

                                                                <th>Description</th>
                                                                <th>Tax(%)</th>
                                                                <th>PKR</th>
                                                                <th>Remarks</th>
                                                            </tr>
                                                            <tr>

                                                                <td>Amount Claimed by Contractor of Escation Payment
                                                                    Certificate NO.
                                                                    <?php echo $result2->ipc_no; ?>
                                                                </td>
                                                                <td align="center">-</td>
                                                                <td>
                                                                    <?php echo number_format($result2->ipa_amount,2); ?>
                                                                       
                                                                </td>
                                                                <td align="center">
                                                                    <?php /*?><textarea name="remarks"
                                                                        class="form-control">

                                                    </textarea>
                                                                    <?php */?>
                                                                </td>
                                                            </tr>

                                                            <tr>
                                                                <td>Amount of IPC#. <?php echo $result2->ipc_no; ?>
                                                                    By the Engineer</td>
                                                                <td align="center">-</td>
                                                                <td>
                                                                    <?php echo number_format($result2->ipac_amount,2); ?>
                                                                </td>
                                                                <td align="center">

                                                                    <?php /*?><textarea name="remarks"
                                                                        class="form-control">

                                                    </textarea><?php */?></td>
                                                            </tr>


                                                            <tr style="background-color:#000;color:#fff">
                                                                <td colspan="4"></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Add</b> </td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <?php 
$doneee=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=1 and pgp.add_less=1 and pgp.ctp_id=ct.ctp_id and pgp.ipc_id=$id")->result();
 //echo $this->db->last_query();
$x=1;
$kifi1=0;
foreach($doneee as $row){
?>
                                                            <tr>
                                                                <td style="width:40%"> (<?php echo $x; ?>)


                                                                   
                                                                            <?php echo $row->ctp_option; ?>

                                                                   
                                                                        <?php if($row->add_less==0){?>
                                                                        Less
                                                                        <?php }else{?>
                                                                        Add
                                                                        <?php }?>

                                                                      
                                                                    
                                                                   
                                                                </td>
                                                                <td style="width:10%">
                                                                    <?php echo $row->tax_value?>

                                                                </td>
                                                                <td style="width:15%">
                                                                    <?php $kifi11=$row->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

                                                                  <?php echo number_format($row->gross_payment,2); ?>
                                                                </td>
                                                                <td align="left" style="width:40%">
                                                                   <?php 
                                                        echo $row->remarks;
                                                        
                                                        
                                                        ?>

                                                                </td>
                                                            </tr>
                                                            <?php 
                                                $kifi1=$kifi1+$kifi11;
$x++;
}?>
<?php /*?><tr><td colspan="2"><b>Gross Amount</b></td>
<td ><b><?php echo number_format($kifi1,2);?></b></td></tr>
<?php */?>
                                                            <tr style="background-color:#000;color:#fff">
                                                                <td colspan="2"><strong>Gross Amount Payable of this
                                                                        IPC
                                                                        No.<?php echo $result2->ipc_no; ?></strong>
                                                                </td>
                                                                <td colspan="2"> <b><?php 
                                                                ///echo number_format($result2->ipac_amount,2);
                                                                echo number_format($kifi1,2);?></b>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Less</b> </td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <?php 
$doneeeL=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=1 and pgp.add_less=0 and pgp.ctp_id=ct.ctp_id and pgp.ipc_id=$id")->result();
$l=1;
$b=0;
foreach($doneeeL as $rowL){
?>

                                                            <tr>
                                                                <td style="width:40%"> (<?php echo $l; ?>)


                                                                    
                                                                            <?php echo $rowL->ctp_option; ?>
                                                                       

                                                                   
                                                                        <?php if($rowL->add_less==0){?>
                                                                         Less
                                                                        <?php }else{?>
                                                                        Add
                                                                        <?php }?>

                                                                       
                                                                    <br>
                                                                    <br>
                                                                   
                                                                </td>
                                                                <td style="width:10%">
                                                                    <?php echo $rowL->tax_value?>

                                                                </td>
                                                                <td style="width:15%">
                                                                    <?php $b1=$rowL->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

                                                                   <?php echo number_format($rowL->gross_payment,2); ?>
                                                                </td>
                                                                <td align="left" style="width:40%">
                                                                    <?php 
                                                        echo $rowL->remarks;
                                                        
                                                        
                                                        ?>

                                                                </td>

                                                            </tr>
                                                            <?php 
                                                $b=$b+$b1;
$l++;
}?>


                                                            <tr>
                                                                <td colspan="2"><strong>Total Deductions
                                                                    </strong></td>
                                                                <td> <b><?php echo number_format($b,2);?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td colspan="2"><strong>Net Payable Amount
                                                                    </strong></td>
                                                                <td> <b><?php echo number_format(($kifi1-$b),2);?></b>
                                                                </td>
                                                            </tr>





                                                            <tr>
                                                                <td colspan="4"></td>
                                                            </tr>
                                                            <tr style="background-color:#558ed5;color:#fff">
                                                                <td><b>Amount verified by PMU this IPC
                                                                        No.<?php echo $result2->ipc_no; ?></b></td>
                                                                <td>-</td>
                                                                <td colspan="2">
                                                                    <b> <?php 
                                                                    echo number_format($result2->ipac_amount,2);
                                                                    
                                                                    
                                                                    //echo number_format($kifi1,2);?></b>
                                                                </td>

                                                            </tr>
                                                            <tr>
                                                                <td><b>Add</b> </td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <?php 
$doneee=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=2 and pgp.add_less=1 and pgp.ctp_id=ct.ctp_id and pgp.ipc_id=$id")->result();
$x1=1;
$c=0;
foreach($doneee as $rowPMUADD){
?>


                                                            <tr>
                                                                <td style="width:40%"> (<?php echo $x1; ?>)


                                                                  
                                                                            <?php echo $rowPMUADD->ctp_option; ?>
                                                                        

                                                                   
                                                                        <?php if($rowPMUADD->add_less==0){?>
                                                                        Less
                                                                        <?php }else{?>
                                                                         Add
                                                                        <?php }?>

                                                                       
                                                                   
                                                                </td>
                                                                <td style="width:10%">
                                                                    <?php echo $rowPMUADD->tax_value?>

                                                                </td>
                                                                <td style="width:15%">
                                                                    <?php $c1=$rowPMUADD->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

                                                                   <?php echo number_format($rowPMUADD->gross_payment,2); ?>  </td>
                                                                <td align="left" style="width:40%">
                                                                   <?php 
                                                        echo $rowPMUADD->remarks;
                                                        
                                                        
                                                        ?>

                                                                </td>
                                                            </tr>



                                                            <?php 
                                                $c=$c+$c1;

$x1++;
}?>
                                                            <tr>
                                                                <td>Gross Amount Payable</td>
                                                                <td>-</td>
                                                                <td><b><?php echo number_format($c,2);?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Less</b> </td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                                <td>-</td>
                                                            </tr>
                                                            <?php 
$doneeeL1=$this->db->query("select * from ppms_gross_payment as pgp,certificate_tax as ct
 where verified=2 and pgp.add_less=0 and pgp.ctp_id=ct.ctp_id and pgp.ipc_id=$id")->result();
 $d101=0;
$y1=1;
foreach($doneeeL1 as $rowL1){
?>

                                                            <tr>
                                                                <td style="width:40%"> (<?php echo $y1; ?>)


                                                                  
                                                                            <?php echo $rowL1->ctp_option; ?>
                                                                       

                                                                   
                                                                        <?php if($rowL1->add_less==0){?>
                                                                        Less
                                                                        <?php }else{?>
                                                                         Add
                                                                        <?php }?>

                                                                </td>
                                                                <td style="width:10%">
                                                                    <?php echo $rowL1->tax_value?>

                                                                </td>
                                                                <td style="width:15%">
                                                                    <?php $d1=$rowL1->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

                                                                   <?php echo number_format($rowL1->gross_payment,2); ?>
                                                                    </td>
                                                                <td align="left" style="width:40%">
                                                                   <?php 
                                                        echo $rowL1->remarks;
                                                        
                                                        
                                                        ?>

                                                                </td>
                                                            </tr>


                                                            <?php 
                                                $d101=$d101+$d1;
$y1++;
}?>


                                                            <tr>
                                                                <td><b>Total Deductions</b></td>
                                                                <td>-</td>
                                                                <td><b><?php echo number_format($d101,2);?></b></td>
                                                            </tr>
                                                            <tr>
                                                                <td><b>Net Payable</b></td>
                                                                <td>-</td>
                                                                <td><b><?php $ddddddd=$c-$d101;
                                                    echo number_format($ddddddd,2);
                                                    ?></b></td>
                                                            </tr>
                                                        </table>


                                                        <script type="text/javascript">
window.print();
</script>