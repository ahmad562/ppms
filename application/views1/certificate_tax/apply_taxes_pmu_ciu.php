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
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Payment Certificate Module</h4>
                        <button class="btn btn-danger"><a href="<?php echo base_url('Certificate_tax')?>">
                                <font color="white">View Taxes</font>
                            </a></button>

                        <button class="btn btn-success"><a href="<?php echo base_url('Certificate_tax/tax_detail')?>">
                                <font color="white">Add New Tax</font>
                            </a></button>


                        <?php /*?><button class="btn btn-danger"><a
                                href="<?php echo base_url('Certificate_tax/apply_taxes_pmu_ciu/'.$id)?>">
                                <font color="white">Apply Taxes IPC</font>
                            </a></button>
                            <?php */?>

                        <button class="btn btn-danger"><a
                                href="<?php echo base_url('Certificate_tax/taxes_report/').$id?>">
                                <font color="white">Report</font>
                            </a></button>
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
                            <?php 
                         $result2 = $this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id and ipac_id=$id
                    ")->row();
                   
                   ?>
                            <div class="card">
                            <div class="card-header">
                                    <h5><?php echo $result2->project_name."-".$result2->subproject_name;?> Payment
                                        Certificate # <?php echo $result2->ipc_no; ?> Covering IPC# <?php echo $result2->ipc_no;?></h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">


                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Welcome/ipc_pmu_ciu_ipc_tax')?>"
                                            autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
                                <input type="hidden" id="organization_id" name="organization_id" class="form-control" value="<?php echo $orgName->organization_id; ?>">
                                            <table class="table table-bordered" style="width:100%">
                                                <tr>

                                                    <th>Description</th>
                                                    <th>Tax(%)</th>
                                                    <th>PKR</th>
                                                    <th>Remarks</th>
                                                </tr>
                                                <tr>

                                                    <td>Amount Claimed by Contractor of Escation Payment Certificate NO.
                                                        <?php echo $result2->ipc_no; ?>
                                                    </td>
                                                    <td align="center">-</td>
                                                    <td>
                    <input type="text" value="<?php echo $result2->ipa_amount; ?>" onBlur="update_ipc_amount(<?php echo $id?>,1)" class="form-control" id="ipc_amt_orginal" name="ipc_amt_orginal" >
                    <font color="red"><b><span id="display_updated_msg"></span></b></font>  
                    </td>
                                                    <td align="center">
                                                        <?php /*?><textarea name="remarks" class="form-control">

                                                    </textarea>
                                                        <?php */?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Amount of IPC#. <?php echo $result2->ipc_no; ?> By the Engineer</td>
                                                    <td align="center">-</td>
                                                    <td>
<input type="text" onBlur="update_ipc_amount(<?php echo $id?>,2)"  value="<?php echo $result2->ipac_amount; ?>" class="form-control" id="ipc_amt_engineer" name="ipc_amt_engineer">
<font color="red"><b><span id="display_updated_msg1"></span></b></font>  
</td>
                                                    <td align="center">

                                                        <?php /*?><textarea name="remarks" class="form-control">

                                                    </textarea><?php */?></td>
                                                </tr>


                                                <tr><td colspan="4"></td></tr>
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
                            
                                              
<select name="tax_id" onchange="update_record(<?php echo $row->ppms_payment_id;?>,1)"
                                                            id="tax_id<?php echo $row->ppms_payment_id;?>" class="form-control" style="width:350px;float:right;margin-top:-5px;">
                                                            <option value="<?php echo $row->ctp_id;?>">
                                                            <?php echo $row->ctp_option; ?></option>
                    <?php 
                    $doneee111=$this->db->query("select * from certificate_tax ")->result();
                    foreach($doneee111 as $doneee111){
                                    ?>
                                                            <option value="<?php echo $doneee111->ctp_id; ?>">
                                                                <?php echo $doneee111->ctp_option; ?>
                                                            </option>
                                                            <?php }?>

</select>

<select name="add_less" onchange="update_record(<?php echo $row->ppms_payment_id;?>,1)" id="add_less<?php echo $row->ppms_payment_id;?>" class="form-control" style="width:100px;float:right;margin-top:-5px;margin-left:-100px">
<?php if($row->add_less==0){?>
    <option value="0">Less</option>
  <?php }else{?>
        <option value="1"> Add</option>
    <?php }?>

<option value="1"> Add</option>
<option value="0"> Less</option>
</select> 
                                                    
                                                    </td>
                                                    <td style="width:10%">
<input type="text" id="tax<?php echo $row->ppms_payment_id;?>" name="tax" class="form-control" 
                                                            value="<?php echo $row->tax_value?>" onblur="update_record(<?php echo $row->ppms_payment_id;?>,1)">
                                                        
                                                    </td>
                                                    <td style="width:10%">
                                                        <?php $kifi11=$row->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

<input type="text" id="tax_amount<?php echo $row->ppms_payment_id;?>" name="tax_amount"
                                                            class="form-control"
                                                            value="<?php echo $row->gross_payment; ?>"
                                                            onblur="update_record(<?php echo $row->ppms_payment_id;?>,1)">
                                                    </td>
                                                    <td align="left" style="width:40%">
                <textarea name="remarks" id="remarks<?php echo $row->ppms_payment_id;?>" onblur="update_record(<?php echo $row->ppms_payment_id;?>,1)" 
                                                            class="form-control"><?php 
                                                        echo $row->remarks;
                                                        
                                                        
                                                        ?></textarea>
                                                       
                                                    </td>
                                                </tr>
                                                <?php 
                                                $kifi1=$kifi1+$kifi11;
$x++;
}?>
                                                <tr>
                                                    <td colspan="2"><strong>Gross Amount Payable of this IPC
                                                            No.<?php echo $result2->ipc_no; ?></strong></td>
                                                    <td> <b><?php echo number_format($kifi1,2);?></b></td>
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
                            
                                              
<select name="tax_id" onchange="update_record(<?php echo $rowL->ppms_payment_id;?>,1)"
                                                            id="tax_id<?php echo $rowL->ppms_payment_id;?>" class="form-control" style="width:350px;float:right;margin-top:-5px;">
                                                            <option value="<?php echo $rowL->ctp_id;?>">
                                                            <?php echo $rowL->ctp_option; ?></option>
                    <?php 
                    $doneee111=$this->db->query("select * from certificate_tax ")->result();
                    foreach($doneee111 as $doneee111){
                                    ?>
                                                            <option value="<?php echo $doneee111->ctp_id; ?>">
                                                                <?php echo $doneee111->ctp_option; ?>
                                                            </option>
                                                            <?php }?>

</select>

<select name="add_less" onchange="update_record(<?php echo $rowL->ppms_payment_id;?>,1)" id="add_less<?php echo $rowL->ppms_payment_id;?>" class="form-control" style="width:100px;float:right;margin-top:-5px;margin-left:-100px">
<?php if($row->add_less==0){?>
    <option value="0"> Less</option>
  <?php }else{?>
        <option value="1"> Add</option>
    <?php }?>

<option value="1"> Add</option>
<option value="0"> Less</option>
</select> 
                                                    
                                                    </td>
                                                    <td style="width:10%">
<input type="text" id="tax<?php echo $rowL->ppms_payment_id;?>" name="tax" class="form-control" 
                                                            value="<?php echo $rowL->tax_value?>" onblur="update_record(<?php echo $rowL->ppms_payment_id;?>,1)">
                                                        
                                                    </td>
                                                    <td style="width:10%">
                                                        <?php $b1=$rowL->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

<input type="text" id="tax_amount<?php echo $rowL->ppms_payment_id;?>" name="tax_amount"
                                                            class="form-control"
                                                            value="<?php echo $rowL->gross_payment; ?>"
                                                            onblur="update_record(<?php echo $rowL->ppms_payment_id;?>,1)">
                                                    </td>
                                                    <td align="left" style="width:40%">
                <textarea name="remarks" id="remarks<?php echo $rowL->ppms_payment_id;?>" onblur="update_record(<?php echo $rowL->ppms_payment_id;?>,1)" 
                                                            class="form-control"><?php 
                                                        echo $rowL->remarks;
                                                        
                                                        
                                                        ?></textarea>
                                                       
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
                                                    <td> <b><?php echo number_format(($kifi1-$b),2);?></b></td>
                                                </tr>





                                            <tr><td colspan="4"></td></tr>
                                                <tr>
                                                    <td><b>Amount verified by PMU this IPC No.<?php echo $result2->ipc_no; ?></b></td>
                                                    <td>-</td>
                                                    <td>
                                                        <b> <?php echo number_format($kifi1,2);?></b>
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
                            
                                              
<select name="tax_id" onchange="update_record(<?php echo $rowPMUADD->ppms_payment_id;?>,2)"
                                                            id="tax_id<?php echo $rowPMUADD->ppms_payment_id;?>" class="form-control" style="width:350px;float:right;margin-top:-5px;">
                                                            <option value="<?php echo $rowPMUADD->ctp_id;?>">
                                                            <?php echo $rowPMUADD->ctp_option; ?></option>
                    <?php 
                    $doneee111=$this->db->query("select * from certificate_tax ")->result();
                    foreach($doneee111 as $doneee111){
                                    ?>
                                                            <option value="<?php echo $doneee111->ctp_id; ?>">
                                                                <?php echo $doneee111->ctp_option; ?>
                                                            </option>
                                                            <?php }?>

</select>

<select name="add_less" onchange="update_record(<?php echo $rowPMUADD->ppms_payment_id;?>,2)" id="add_less<?php echo $rowPMUADD->ppms_payment_id;?>" class="form-control" style="width:100px;float:right;margin-top:-5px;margin-left:-100px">
<?php if($rowPMUADD->add_less==0){?>
    <option value="0">Less</option>
  <?php }else{?>
        <option value="1"> Add</option>
    <?php }?>

<option value="1"> Add</option>
<option value="0"> Less</option>
</select> 
                                                    
                                                    </td>
                                                    <td style="width:10%">
<input type="text" id="tax<?php echo $rowPMUADD->ppms_payment_id;?>" name="tax" class="form-control" 
                                                            value="<?php echo $rowPMUADD->tax_value?>" onblur="update_record(<?php echo $rowPMUADD->ppms_payment_id;?>,2)">
                                                        
                                                    </td>
                                                    <td style="width:10%">
                                                        <?php $c=$rowPMUADD->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

<input type="text" id="tax_amount<?php echo $rowPMUADD->ppms_payment_id;?>" name="tax_amount"
                                                            class="form-control"
                                                            value="<?php echo $rowPMUADD->gross_payment; ?>"
                                                            onblur="update_record(<?php echo $rowPMUADD->ppms_payment_id;?>,2)">
                                                    </td>
                                                    <td align="left" style="width:40%">
                <textarea name="remarks" id="remarks<?php echo $rowPMUADD->ppms_payment_id;?>" onblur="update_record(<?php echo $rowPMUADD->ppms_payment_id;?>,2)" 
                                                            class="form-control"><?php 
                                                        echo $rowPMUADD->remarks;
                                                        
                                                        
                                                        ?></textarea>
                                                       
                                                    </td>
                                                </tr>


                                               
                                                <?php 
                                                $c=$c+$c1;

$x1++;
}?>
                                                <tr>
                                                    <td>Gross Amount Payable</td>
                                                    <td>-</td>
                                                    <td><b><?php echo $c;?></b></td>
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
                            
                                              
<select name="tax_id" onchange="update_record(<?php echo $rowL1->ppms_payment_id;?>,2)"
                                                            id="tax_id<?php echo $rowL1->ppms_payment_id;?>" class="form-control" style="width:350px;float:right;margin-top:-5px;">
                                                            <option value="<?php echo $rowL1->ctp_id;?>">
                                                            <?php echo $rowL1->ctp_option; ?></option>
                    <?php 
                    $doneee111=$this->db->query("select * from certificate_tax ")->result();
                    foreach($doneee111 as $doneee111){
                                    ?>
                                                            <option value="<?php echo $doneee111->ctp_id; ?>">
                                                                <?php echo $doneee111->ctp_option; ?>
                                                            </option>
                                                            <?php }?>

</select>

<select name="add_less" onchange="update_record(<?php echo $rowL1->ppms_payment_id;?>,2)" id="add_less<?php echo $rowL1->ppms_payment_id;?>" class="form-control" style="width:100px;float:right;margin-top:-5px;margin-left:-100px">
<?php if($rowL1->add_less==0){?>
    <option value="0">Less</option>
  <?php }else{?>
        <option value="1"> Add</option>
    <?php }?>

<option value="1"> Add</option>
<option value="0"> Less</option>
</select> 
                                                    
                                                    </td>
                                                    <td style="width:10%">
<input type="text" id="tax<?php echo $rowL1->ppms_payment_id;?>" name="tax" class="form-control" 
                                                            value="<?php echo $rowL1->tax_value?>" onblur="update_record(<?php echo $rowL1->ppms_payment_id;?>,2)">
                                                        
                                                    </td>
                                                    <td style="width:10%">
                                                        <?php $d1=$rowL1->gross_payment;
                                                         //echo number_format($row->gross_payment,2);?>

<input type="text" id="tax_amount<?php echo $rowL1->ppms_payment_id;?>" name="tax_amount"
                                                            class="form-control"
                                                            value="<?php echo $rowL1->gross_payment; ?>"
                                                            onblur="update_record(<?php echo $rowL1->ppms_payment_id;?>,2)">
                                                    </td>
                                                    <td align="left" style="width:40%">
                <textarea name="remarks" id="remarks<?php echo $rowL1->ppms_payment_id;?>" onblur="update_record(<?php echo $rowL1->ppms_payment_id;?>,2)" 
                                                            class="form-control"><?php 
                                                        echo $rowL1->remarks;
                                                        
                                                        
                                                        ?></textarea>
                                                       
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




                                            <table class="table table-bordered">

                                                <tr style="background-color:#000;color:#fff">
                                                    <td><strong>Add/Less</strong></td>
                                                    <td><strong>Tax</strong></td>
                                                    <td><strong>Tax(%)</strong></td>
                                                    <td><strong>Amount</strong></td>

                                                </tr>
                                                <tr>
                                                    <td> <select name="add_less" id="add_less" class="form-control">

                                                            <option value="1"> Add</option>
                                                            <option value="0"> Less</option>

                                                        </select>
                                                    </td>
                                                    <td>
                                                        <select name="tax_id" id="tax_id" class="form-control">
                                                            <?php 
                    $doneee111=$this->db->query("select * from certificate_tax ")->result();
                    foreach($doneee111 as $doneee111){
                                    ?>
                                                            <option value="<?php echo $doneee111->ctp_id; ?>">
                                                                <?php echo $doneee111->ctp_option; ?>
                                                            </option>
                                                            <?php }?>
                                                    </td>


                                                    <td>

                                                        <input type="text" id="tax" name="tax" class="form-control"
                                                            value="0" onblur="get_tax_amount1()">



                                                    </td>
                                                    <td>


                                                        <input type="hidden" id="verified" name="verified"
                                                            class="form-control" value="<?php if($orgName->organization_id==3){
echo 2;
}else{
echo 1;
} ?>">





                                                        <input type="hidden" id="ipcno" name="ipcno"
                                                            class="form-control" value="<?php echo $id; ?>">

                                                        <input type="hidden" id="ipc_id" name="ipc_id"
                                                            class="form-control"
                                                            value="<?php echo $result2->ipac_id; ?>">

                                                        <input type="hidden" id="ipc_amount" name="ipc_amount"
                                                            class="form-control"
                                                            value="<?php echo $result2->ipac_amount; ?>">

                                                        <input type="text" id="tax_amount" name="tax_amount"
                                                            class="form-control"
                                                            value="<?php echo $result2->ipac_amount; ?>"
                                                            onblur="get_tax_amount()">



                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Remarks</strong></td>
                                                    <td colspan="2">

                                                        <textarea name="remarks" id="remarks"
                                                            class="form-control"></textarea>



                                                    </td>
                                                    <td><input type="submit" name="save" id="save" value="Save"
                                                            class="btn btn-danger">
                                                </tr>
                                            </table>


                                        </form>
                                        <script>
                                        function get_tax_amount1111() {
                                            var taxVal = $("#tax").val();
                                            var ipc_amount = $("#ipc_amount").val();
                                            if (taxVal >= 1) {
                                                var tot_amt = ((taxVal * ipc_amount) / 100);

                                                $("#tax_amount").val(tot_amt);

                                            }


                                        }
                                        </script>
                                        
                                        
                                        <script type="text/javascript">
                    function update_ipc_amount(ipcid,id) {
                       
                        
                        var ipc_amt_orginal = $("#ipc_amt_orginal").val();
                        var ipc_amt_engineer = $("#ipc_amt_engineer").val();
                        
                        $.post("<?php echo base_url()?>Welcome/ipc_amt_engineer/", {
                            ipc_amt_orginal: ipc_amt_orginal,
                            ipc_amt_engineer: ipc_amt_engineer,
                            ipcid: ipcid
                           
                           
                        }, function(page_response) {
                            ///alert(page_response);
                            if (page_response == 1) {
                                ///alert('Record Updated');
                                if(id==1){
                                 $("#display_updated_msg").text("Record Updated Successfully !");
                                }else if(id==2){
                                  $("#display_updated_msg1").text("Record Updated Successfully !");   
                                    
                                }
                            } else {
                                if (page_response == 0) {
                                    ///alert('Record Saved!');
                                    //$("#cdetailss").show("slow");
                                }
                            }
                        });

                    }
                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    </script>

                    <script type="text/javascript">
                    function update_record(id,vid) {
                        
                       /// var conca = ipcno + "" + cptid +"" +ipcid;
                        //alert(conca);
                      
                       
                        var tax_id = $("#tax_id"+id).val();
                        ///alert(tax_id);
                        var add_less = $("#add_less"+id).val();

                        var tax = $("#tax"+id).val();
                        var organization_id=$("#organization_id").val();

                        var tax_amount = $("#tax_amount"+id).val();
                        var remarks = $("#remarks"+id).val();

                        //alert(tax);
                        //alert(valuess);
                        //alert(remarks);
                        $.post("<?php echo base_url()?>Welcome/ppms_gross_payment/", {
                            tax_id: tax_id,
                            add_less: add_less,
                            tax: tax,
                            tax_amount:tax_amount,
                            remarks:remarks,
                            id:id,
                            vid:vid,
                            organization_id:organization_id
                            
                           
                        }, function(page_response) {
                            ///alert(page_response);
                            if (page_response == 1) {
                                ///alert('Record Updated');
                                window.location.reload();
                            } else if(page_response == 0) {
                                
                                    alert('Some Problem');
                                    //$("#cdetailss").show("slow");
                                }else if(page_response == 420){

                               alert("You are Not Eligible To make Changes")

                                }
                            
                        });

                    }
                    /////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                    </script>