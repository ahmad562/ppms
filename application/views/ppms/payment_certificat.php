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
                                <font color="white">Add New Tax</font>
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
                    and ppsp.project_id=ppp.project_id and ipc_no='$id'
                    ")->row();
                  
                   ?>
                            <div class="card">
                                <div class="card-header">
                                    <h5><?php echo $result2->project_name."-".$result2->subproject_name;?> Payment
                                        Certificate # <?php echo $result2->ipc_no;?> Covering IPC# <?php echo $result2->ipc_no;?></h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">


                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Welcome/insert_ipac')?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">

                                            <table class="table table-bordered">
                                                <tr>
                                                    <th>Description</th>
                                                    <th>Tax(%)</th>
                                                    <th>PKR</th>
                                                    <th>Remarks</th>
                                                </tr>
                                                <tr>
                                                    <td>Amount Claimed by Contractor of Escation Payment Certificate NO.
                                                        <?php echo $id; ?>
                                                    </td>
                                                    <td align="center">-</td>
                                                    <td><?php echo $result2->ipa_amount; ?></td>
                                                    <td align="center">
                                                    <?php /*?><textarea name="remarks" class="form-control">

                                                    </textarea>
                                                    <?php */?>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Amount of IPC#. <?php echo $result2->ipc_no;?> By the Engineer</td>
                                                    <td align="center">-</td>
                                                    <td><?php echo $result2->ipac_amount; ?></td>
                                                    <td align="center">
                                                        
                                                    <?php /*?><textarea name="remarks" class="form-control">

                                                    </textarea><?php */?></td>
                                                </tr>

                                                <tr>
                                                    <td colspan="3"><strong>Add</strong></td>
                                                </tr>
                                                <?php 
$doneee=$this->db->query("select * from certificate_tax where ctp_flag=1 and add_less='add'")->result();
$x=1;
foreach($doneee as $row){
?>
                                                <tr>
                                                    <td> (<?php echo $x; ?>)
                                                        <?php echo $row->ctp_option; ?></td>
                                                    <td>

                                                          <input type="text" id="tax<?php echo $result2->ipac_id;?><?php echo $row->ctp_id;?><?php echo $id;?>" name="tax" class="form-control"
                                                            onblur="get_net_payment(<?php echo $result2->ipac_id;?>,<?php echo $row->ctp_id;?>,<?php echo $id;?>,'<?php echo $row->ctp_id;?>',<?php echo 1;?>)"
                                                            value="<?php echo $row->ctp_attribute?>">
                                                    </td>
                                                    <td>

<input type="text" onblur="get_net_payment(<?php echo $result2->ipac_id;?>,<?php echo $row->ctp_id;?>,<?php echo $id;?>,<?php echo 1;?>)"
 id="valuess<?php echo $result2->ipac_id;?><?php echo $row->ctp_id;?><?php echo $id;?>" name="valuess" class="form-control"
                                                            value="<?php if($x==1){
                                                            echo $result2->ipac_amount;    
                                                            }else{
echo 0;
                                                            }?>">
                                                    </td>
                                                    <td align="center">
                        <textarea name="remarks" onblur="get_net_payment(<?php echo $result2->ipac_id;?>,<?php echo $row->ctp_id;?>,<?php echo $id;?>,<?php echo 1;?>)"
 id="remarks<?php echo $result2->ipac_id;?><?php echo $row->ctp_id;?><?php echo $id;?>" class="form-control">

                                                        </textarea></td>
                                                </tr>
                                                <?php 
$x++;
}?>

                                                <tr>
                                                    <td colspan="3"><strong>Gross Amount Payable of this IPC
                                                            No.<?php echo $id;?></strong></td>
                                                </tr>



                                                <tr>
                                                    <td colspan="3"><strong>Less</strong></td>
                                                </tr>
                                                <?php 
$donei=$this->db->query("select * from certificate_tax where ctp_flag=1 and add_less='less'")->result();
$i=1;
$w=0;
foreach($donei as $row1){
?>
                                                <tr>
                                                    <td> (<?php echo $i; ?>)
                                                        <?php echo $row1->ctp_option; ?></td>
                                                    <td>

<input type="text" name="tax_less" id="tax_less<?php echo $result2->ipac_id;?><?php echo $row1->ctp_id;?><?php echo $id;?>" class="form-control" value="<?php echo $row1->ctp_attribute?>" onblur="get_net_payment1(<?php echo $result2->ipac_id;?>,<?php echo $row1->ctp_id;?>,<?php echo $id;?>,<?php echo 0;?>)">
                                                    </td>

<td><input type="text" value="<?php 
if($row1->ctp_attribute >=1){
    echo $w=($result2->ipac_amount*$row1->ctp_attribute)/100;
}else{
    echo $w=0;
}

?>" name="valuess_less" id="valuess_less<?php echo $result2->ipac_id;?><?php echo $row1->ctp_id;?><?php echo $id;?>" class="form-control" onblur="get_net_payment1(<?php echo $result2->ipac_id;?>,<?php echo $row1->ctp_id;?>,<?php echo $id;?>,<?php echo 0;?>)">
                                                    </td>
<td align="center"><textarea name="valuess_less" id="remarks_less<?php echo $result2->ipac_id;?><?php echo $row1->ctp_id;?><?php echo $id;?>" class="form-control" onblur="get_net_payment1(<?php echo $result2->ipac_id;?>,<?php echo $row1->ctp_id;?>,<?php echo $id;?>,<?php echo 0;?>)">

                                                        </textarea></td>

                                                </tr>
                                                <?php 
                                                $w1=$w1+$w;
$i++;
}?>
                                                <tr>
                                                    <td><strong>Total Deduction</strong></td>
                                                    <td align="center">-</td>
                        <td><input type="text" name="total_deductions" class="form-control" value="<?php echo $w1;?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Net Payable Amount</strong></td>
                                                    <td align="center">-</td>
                                                    <td>
                        <input type="text" name="total_payable" class="form-control" value="<?php echo $result2->ipac_amount-$w1;?>">
                                                </tr>


                                                <!------------------------------------------Verified by PMU---------------------------------------------------------------->

                                                <tr style="background-color:#000; color:#fff">

                                                    <td colspan="1">Amount Verified By PMU this IPC No.
                                                        <?php echo $id;?></td>
                                                    <td align="center">-</td>
                                                    <td>
                                        <input type="text" name="total_payable" class="form-control" value="<?php echo $result2->ipac_amount?>">
                                                    <td align="center">-</td>
                                                </tr>


                                                <tr>
                                                    <td colspan="3"><strong>Add</strong></td>
                                                </tr>
                                                <?php 
$doneee=$this->db->query("select * from certificate_tax where ctp_flag=2 and add_less='add'")->result();
$x=1;
foreach($doneee as $row){
?>
                                                <tr>
                                                    <td> (<?php echo $x; ?>)
                                                        <?php echo $row->ctp_option; ?></td>
                                                    <td>

<input type="text" id="tax_pmu_add<?php echo $result2->ipac_id;?><?php echo $row->ctp_id;?><?php echo $id;?>" name="tax" class="form-control"
value="<?php echo $row->ctp_attribute?>" onblur="get_net_payment2(<?php echo $result2->ipac_id;?>,<?php echo $row->ctp_id;?>,<?php echo $id;?>,<?php echo 1;?>)">
                                                    </td>
                                                    <td>
<input type="text" id="valuess_pmu_add<?php echo $result2->ipac_id;?><?php echo $row->ctp_id;?><?php echo $id;?>" class="form-control" onblur="get_net_payment2(<?php echo $result2->ipac_id;?>,<?php echo $row->ctp_id;?>,<?php echo $id;?>,<?php echo 1;?>)"
                                                            value="<?php echo $result2->ipac_amount; ?>">
                                                    </td>
                                                    <td align="center">
    <textarea id="remarks_pmu_add<?php echo $result2->ipac_id;?><?php echo $row->ctp_id;?><?php echo $id;?>" onblur="get_net_payment2(<?php echo $result2->ipac_id;?>,<?php echo $row->ctp_id;?>,<?php echo $id;?>,<?php echo 1;?>)" class="form-control">

                                                        </textarea></td>
                                                </tr>
                                                <?php 
$x++;
}?>

                                                <tr>
                                                    <td colspan="3"><strong>Gross Amount Payable of this IPC
                                                            No.<?php echo $id;?></strong></td>
                                                </tr>



                                                <tr>
                                                    <td colspan="3"><strong>Less</strong></td>
                                                </tr>
                                                <?php 
$donei=$this->db->query("select * from certificate_tax where ctp_flag=2 and add_less='less'")->result();
$i=1;
$w91=0;
foreach($donei as $row1){
?>
                                                <tr>
                                                    <td> (<?php echo $i; ?>)
                                                        <?php echo $row1->ctp_option; ?></td>
                                                    <td>

<input type="text"name="tax_pmu_less" id="tax_pmu_less<?php echo $result2->ipac_id;?><?php echo $row1->ctp_id;?><?php echo $id;?>" onblur="get_net_payment3(<?php echo $result2->ipac_id;?>,<?php echo $row1->ctp_id;?>,<?php echo $id;?>,<?php echo 0;?>)" class="form-control" value="<?php echo $row1->ctp_attribute?>">
                                                    </td>

<td><input type="text" name="valuess_pmu_less" value="<?php 
if($row1->ctp_attribute >=1){
    if($row1->ctp_id==14){
       echo $w90=($result2->ipac_amount/1000000)*2000;

        //*$row1->ctp_attribute)/100;
    //} 
    ///else if($row1->ctp_id==14){
       // echo $w=($result2->ipac_amount/1000000)*2000;
 
         //*$row1->ctp_attribute)/100;
     }else{
        echo $w90=($result2->ipac_amount*$row1->ctp_attribute)/100;
    }
    
}else{
    echo $w90=0;
}

?>" id="valuess_pmu_less<?php echo $result2->ipac_id;?><?php echo $row1->ctp_id;?><?php echo $id;?>" class="form-control" onblur="get_net_payment3(<?php echo $result2->ipac_id;?>,<?php echo $row1->ctp_id;?>,<?php echo $id;?>,<?php echo 0;?>)"></td>

                                                    <td align="center">
    <textarea name="remarks_pmu_less" id="remarks_pmu_less<?php echo $result2->ipac_id;?><?php echo $row1->ctp_id;?><?php echo $id;?>" class="form-control" onblur="get_net_payment3(<?php echo $result2->ipac_id;?>,<?php echo $row1->ctp_id;?>,<?php echo $id;?>,<?php echo 0;?>)">

                                                        </textarea></td>

                                                </tr>
                                                <?php 
                                                $w91=$w91+$w90;
$i++;
}?>
                                                <tr>
                                                    <td><strong>Total Deduction</strong></td>
                                                    <td align="center">-</td>
                                                    <td>
                            <input type="text" name="total_deductions" class="form-control" value="<?php echo $w91;?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Net Payable Amount</strong></td>
                                                    <td align="center">-</td>
                                                    <td>
                                    <input type="text" name="total_payable" class="form-control" value="<?php echo $result2->ipac_amount-$w91;?>">
                                                </tr>

                                            </table>



                                            <!--/span-->

                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->





                        </div>




                       
                        </form>
                        

                    <script type="text/javascript">
                    function get_net_payment(ipcno,cptid,ipcid,add_less) {
                        //alert(ipcno);
                        //alert(cptid);
                        ///alert(ipcid);
                        //var conca = ipcno.concat(cptid, ipcid);
                        //var conca = str1.concat(str2, str3);
                       // var conca = ipcno+cptid+ipcid;
                        var conca = ipcno + "" + cptid +"" +ipcid;
                        //alert(conca);
                        var tax = $("#tax"+conca).val();

                        var valuess = $("#valuess"+conca).val();
                        var remarks = $("#remarks"+conca).val();

                        //alert(tax);
                        //alert(valuess);
                        //alert(remarks);
                        $.post("<?php echo base_url()?>Welcome/ipc_pmu_payment/", {
                            ipcno: ipcno,
                            cptid: cptid,
                            ipcid: ipcid,
                            tax:tax,
                            gpayment:valuess,
                            remarks:remarks,
                            add_less:add_less
                           
                        }, function(page_response) {
                            ///alert(page_response);
                            if (page_response == 1) {
                                ///alert('Record Updated');
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
                    function get_net_payment1(ipcno,cptid,ipcid,add_less) {
                        //alert(ipcno);
                        //alert(cptid);
                        ///alert(ipcid);
                        //var conca = ipcno.concat(cptid, ipcid);
                        //var conca = str1.concat(str2, str3);
                       // var conca = ipcno+cptid+ipcid;
                        var conca = ipcno + "" + cptid +"" +ipcid;
                        //alert(conca);
                        var tax = $("#tax_less"+conca).val();

                        var valuess = $("#valuess_less"+conca).val();
                        var remarks = $("#remarks_less"+conca).val();

                        //alert(tax);
                        //alert(valuess);
                        //alert(remarks);
                        $.post("<?php echo base_url()?>Welcome/ipc_pmu_payment/", {
                            ipcno: ipcno,
                            cptid: cptid,
                            ipcid: ipcid,
                            tax:tax,
                            gpayment:valuess,
                            remarks:remarks,
                            add_less:add_less
                           
                        }, function(page_response) {
                            ///alert(page_response);
                            if (page_response == 1) {
                                ///alert('Record Updated');
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
                    function get_net_payment2(ipcno,cptid,ipcid,add_less) {
                        //alert(ipcno);
                        //alert(cptid);
                        ///alert(ipcid);
                        //var conca = ipcno.concat(cptid, ipcid);
                        //var conca = str1.concat(str2, str3);
                       // var conca = ipcno+cptid+ipcid;
                        var conca = ipcno + "" + cptid +"" +ipcid;
                        //alert(conca);
                        var tax = $("#tax_pmu_add"+conca).val();

                        var valuess = $("#valuess_pmu_add"+conca).val();
                        var remarks = $("#remarks_pmu_add"+conca).val();

                        //alert(tax);
                        //alert(valuess);
                        //alert(remarks);
                        $.post("<?php echo base_url()?>Welcome/ipc_pmu_payment_pmu/", {
                            ipcno: ipcno,
                            cptid: cptid,
                            ipcid: ipcid,
                            tax:tax,
                            gpayment:valuess,
                            remarks:remarks,
                            add_less:add_less
                           
                        }, function(page_response) {
                            ///alert(page_response);
                            if (page_response == 1) {
                                ///alert('Record Updated');
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
                    function get_net_payment3(ipcno,cptid,ipcid,add_less) {
                        //alert(ipcno);
                        //alert(cptid);
                        ///alert(ipcid);
                        //var conca = ipcno.concat(cptid, ipcid);
                        //var conca = str1.concat(str2, str3);
                       // var conca = ipcno+cptid+ipcid;
                        var conca = ipcno + "" + cptid +"" +ipcid;
                        //alert(conca);
                        var tax = $("#tax_pmu_less"+conca).val();
                        var valuess = $("#valuess_pmu_less"+conca).val();
                        var remarks = $("#remarks_pmu_less"+conca).val();
                        //alert(tax);
                        //alert(valuess);
                        //alert(remarks);
                        $.post("<?php echo base_url()?>Welcome/ipc_pmu_payment_pmu/", {
                            ipcno: ipcno,
                            cptid: cptid,
                            ipcid: ipcid,
                            tax:tax,
                            gpayment:valuess,
                            remarks:remarks,
                            add_less:add_less
                           
                        }, function(page_response) {
                            ///alert(page_response);
                            if (page_response == 1) {
                                ///alert('Record Updated');
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