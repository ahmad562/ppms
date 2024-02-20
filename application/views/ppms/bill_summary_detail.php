

<?php

 $item = $this->db->query("SELECT * FROM ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
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
 <table width="100%" border="0" cellpadding="0" cellspacing="0">

<tr style="background-color:#558ed5;color:#fff">
    <td><h2>Package Name:</h2></td>
    <td><strong><h2><?php echo $item->project_name."/".$item->subproject_name;?></h2></strong>
    </td>
    <td>/</td>
    <td><h2>IPC No: <?php echo $item->ipc_no;?></h2>
</tr>
                    </table>

                    </div>
                    <div class="page-header-breadcrumb">

                    </div>
                </div>
                <!-- Page-header end -->
                <!-- Page-body start -->
                <div class="page-body">
                <?php /*?><button class="btn btn-danger" style="border-radius:10px">
                    <a
                                href="<?php echo base_url('Welcome/bill_summary_detail/')?><?php echo $item->ipac_id?>">
                                <font color="white">IPC'S Payment Detail</font></a></button>
                 <button class="btn btn-success" style="border-radius:10px">
                 <a
                                href="<?php echo base_url('Welcome/mobilization_advance/')?><?php echo $item->ipac_id?>">
                                <font color="white">   
                 Mobilization Detail</font></button></a>
                 <button class="btn btn-danger" style="border-radius:10px">
                 <a
                                href="<?php echo base_url('Welcome/bill_summary_detail_amount/')?><?php echo $item->ipac_id?>">
                                <font color="white">   
                 Bill Summary Detail</font></button>
                </a><?php */?> <div class="row">
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
<table  class="table  table-bordered nowrap">

<tr>
<td style="text-align: center;
    vertical-align: middle; !important">
<a href="<?php echo base_url('Welcome/new_ipc_detail_popup/')?><?php echo $item->ipac_id?>">
<img src="<?php echo base_url('img/ipc/ipc_detail.png')?>" width="70px" height="70px"><br>
<b>IPC Detail</b>
</a>
</td>

<td style="text-align: center;
    vertical-align: middle; !important">
<a href="<?php echo base_url('Welcome/bill_summary_detail/')?><?php echo $item->ipac_id?>">
<img src="<?php echo base_url('img/ipc/ipc_payment.png')?>" width="70px" height="70px"><br>
<b>IPC'S Payment Detail</b>
</a>
</td>

<td style="text-align: center;
    vertical-align: middle; !important"> <a href="<?php echo base_url('Welcome/mobilization_advance/')?><?php echo $item->ipac_id?>">
<img src="<?php echo base_url('img/ipc/mobilization.png')?>" width="70px" height="70px"><br>
<b>Mobilization Detail</b>
</a>
</td>

<td style="text-align: center;
    vertical-align: middle; !important">
<a href="<?php echo base_url('Welcome/bill_summary_detail_amount/')?><?php echo $item->ipac_id?>">
<img src="<?php echo base_url('img/ipc/bill.png')?>" width="70px" height="70px"><br>
<b>Bill Summary Detail</b>
</a>
</td>


<td style="text-align: center;
    vertical-align: middle; !important">
<a href="<?php echo base_url('Welcome/boq_amount_percent/')?><?php echo $item->ipac_id?>">
<img src="<?php echo base_url('img/ipc/progress.png')?>" width="70px" height="70px"><br>
<b>Financial Progress</b>
</a>
</td>


<td style="text-align: center;
    vertical-align: middle; !important">
<a href="<?php echo base_url('Welcome/payment_certificat/')?><?php echo $item->ipac_id?>" target="parent">
<img src="<?php echo base_url('img/ipc/certificate.png')?>" width="70px" height="70px"><br>
<b>Payment Certificate</b>
</a>
</td>


                                                </tr>
                                            </thead>
                                    </table>
                    <div class="row">
                        <div class="col-sm-12">
                            <!-- Material tab card start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bill summary Detail</h5>
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




                                                <!-- Nav tabs -->

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
                                                      echo number_format($item->mobilization_advance_amount,2);
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
echo wordwrap($dubee1->project_area_name,30,"<br>\n")." - ";
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
                                                        <div class="dt-responsive table-responsive">
                                                            <?php 
                                                        
                                                        $main = $this->db->query("SELECT pb.sub_sub_project_id,project_area_name
                                                        FROM `ppms_billsummary` as pb,ppms_subproject_area as ps
                                                        WHERE pb.subproject_id=$subID
                                                        and pb.sub_sub_project_id=ps.project_area_id
                                                        group by pb.sub_sub_project_id")->result();
                                        foreach($main as $main){
                                        ?>
                                                            <h3><?php echo $main->project_area_name;?> </h3>
                                                            <table width="100%" border="5" cellspacing="0"
                                                                cellpadding="0">



                                                                <tbody>


                                                                    <?php
                                        error_reporting(E_ALL);
                                        
                                        $i=1; 
                                        $result1 = $this->db->query("SELECT * FROM ppms_billsummary_category")->result();
                                        foreach($result1 as $item){?>
                                                                    <tr style="background-color:#558ed5; color:#fff">
                                                                        <th colspan="3">
                                                                            <h4>
                                                                                <font color="white">(<?php echo $i;?>)
                                                                                    <?php echo wordwrap($item->billsummary_category_name,50,"<br>\n");?>

                                                                                </font>
                                                                            </h4>
                                                                        </th>



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
                                                                                        <?php /*?><?php 
                                              $totKIFi="SELECT count(*) as totKIF FROM `bill_summary_amount` WHERE `subproject_id`=$subID 
                                              AND `sub_sub_project_id`=$main->sub_sub_project_id and amount > 1";
                                              $totKIFi=$this->db->query($totKIFi)->row();
                                              if($totKIFi->totKIF >=1){
                                        ?>
                                                                                        <?php 
                                        $totKIFiiii="SELECT distinct billsummary_id  FROM `bill_summary_amount` WHERE `subproject_id`=$subID 
                                        AND `sub_sub_project_id`=$main->sub_sub_project_id and amount > 1";
                                        $totKIFi4=$this->db->query($totKIFiiii)->result();
                                        $boq=1;
                                        foreach($totKIFi4 as $totKIFi4){
                                       ?>
                                                                                        <th style="width:10%">
                                                                                            BOQ
                                                                                            Amount(<?php echo $boq;?>)
                                                                                        </th>
                                                                                        <?php 
                                                                                    $boq++;
                                                                                    }?>

                                                                                        <?php }else{?>
                                                                                        <th style="width:10%">
                                                                                            BOQ
                                                                                            Amount</th>
                                                                                        <?php }?>

<?php */?>
<?php 
      $totKIFi="SELECT count(*) as totKIF FROM `bill_summary_amount` WHERE `subproject_id`=$subID 
      AND `sub_sub_project_id`=$main->sub_sub_project_id and amount > 1";
      $totKIFi=$this->db->query($totKIFi)->row();
      if($totKIFi->totKIF >=1){
?>
                                                                                    
                                                                                    <th style="width:5%">
                                                                                        BOQ Latest
                                                                                        Amount</th>

                                                                                    <?php }else{?>
                                                                                    <th style="width:5%">
                                                                                        BOQ
                                                                                        Amount</th>
                                                                                    <?php }?>

                                                                             

                                                                                        <?php 
                                   
                                    $z=1;
                                    $doneeee0="select distinct ipc_id from ppms_ipc_billsummary
                                     where subproject_id=$subID and sub_subproject_id=$main->sub_sub_project_id order by ipc_id asc";
                                           $done9000=$this->db->query($doneeee0)->result();
                                           foreach($done9000 as $done90000){
                                       
                                                    ?>
                                                                                        <th style="width:10%">
                                                                                            IPC<?php echo $z;?>
                                                                                            Amount</th>
                                                                                        <?php 
$z++;
}?>
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
                                                                                echo wordwrap($text, 20, "<br />\n");
                                                                                 //echo chunk_split ($str, 5, "\r\n");
                                                                                //echo preg_replace("/(.{10})/", "$1\n\r", $str);
                                                                                ?>
                                                                                        </td>

                                                                                        <?php 
                                             $totKIFi="SELECT count(*) as totKIF FROM `bill_summary_amount` WHERE `subproject_id`=$subID 
                                              AND `sub_sub_project_id`=$main->sub_sub_project_id and billsummary_id=$item->billsummary_id";
                                              $totKIFi=$this->db->query($totKIFi)->row();
                                              if($totKIFi->totKIF >=1){
                                        ?>
                                                                                        <?php /*?> <td
                                                                                            style="width:10%">
                                                                                            <?php 
                                                                         $maxiiM="
                                        
                                        SELECT amount FROM bill_summary_amount 
                                        WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id  AND billsummary_id=$item->billsummary_id
                                        AND grp_id=1 
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
                                                            WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id  AND billsummary_id=$item->billsummary_id
                                                            AND grp_id=(
                                                            SELECT MAX(grp_id) FROM `bill_summary_amount`
                                                            WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id AND billsummary_id=$item->billsummary_id
                                                            )";
                                                                                                    $maxiii=$this->db->query($maxii)->row();
                                                                                                    $newVAL=$maxiii->amount;
                                                                                                    if($newVAL >=1){
                                                                                                    echo $newVAL=$maxiii->amount;
                                                                                                                                            
                                                                                                    }else{
                                                                                                     echo 0;   
                                                                                                    }?>
                                                                                        </td>
                                                                                        <?php */?>

                                         <?php /*?><?php 
                                        echo $totdetailAmt="SELECT amount FROM `bill_summary_amount` WHERE `subproject_id`=$subID 
                                        AND `sub_sub_project_id`=$main->sub_sub_project_id and amount > 1 AND billsummary_id=$item->billsummary_id order by grp_id asc";
                                        $totKIFi4=$this->db->query($totKIFiiii)->result();
                                        $boq2=1;
                                        foreach($totdetailAmt as $totdetailAmt){
                                       ?><td>kifayat
                                        <?php echo $totdetailAmt->amount;?>
                                                                                        </td>

                                                                                        <?php 
$boq2++;
}?>


                                                                                        <?php }else{?>
                                                                                        <td style="width:10%">
                                                                                            <?php 
                                                                                                    echo $item->billsummary_amt;
                                                                                                                                
                                                                                                                                ?>
                                                                                        </td>
                                                                                        <?php }?>
<?php */?>

<td style="width:5%">
                                                                                    <?php 
                                                            
                    $maxii="SELECT amount FROM bill_summary_amount 
                    WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id  AND billsummary_id=$item->billsummary_id
                    AND grp_id=(
                    SELECT MAX(grp_id) FROM `bill_summary_amount`
                    WHERE `subproject_id`=$subID AND `sub_sub_project_id`=$main->sub_sub_project_id AND billsummary_id=$item->billsummary_id
                    )";
                                                            $maxiii=$this->db->query($maxii)->row();
                                                            $newVAL=$maxiii->amount;
                                                            if($newVAL >=1){
                                                             $newVAL=$maxiii->amount;
                                                             echo number_format($maxiii->amount,2);                               
                                                            }else{
                                                             echo 0;   
                                                            }?>
                                                            </td>

                                                                                    <?php }else{?>
                                                                                    <td style="width:5%">
                                                            <?php 
                                                            echo  number_format($item->billsummary_amt,2);
                                                                                        
                                                                                        ?></td>
                                                                                    <?php }?>



                                        <?php $doneeee="select * from ppms_ipc_billsummary where
                                          billsummary_id=$item->billsummary_id order by ipc_id asc";
                                           $done90=$this->db->query($doneeee)->result();
                                           foreach($done90 as $done900){
                                        $d=$done900->ipc_bs_amount;
                                                    ?>
                                                        <td align="center">

                                                                                            <?php 
                                                                            if($done900->ipc_bs_amount){
                                                                            echo $done900->ipc_bs_amount;
                                                                            }else{
                                                                                echo 0;
                                                                            }?>
                                                                                        </td>
                                                                                        <?php }?>


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

                                                                            <td>-</td>
                                                                            <td>
                                                                                <font color="black">
                                                                                    <h3>
                                                                                        <?php 
                                        $doneeee="select sum(ipc_bs_amount) as tot_amt from ppms_ipc_billsummary where  ipc_id=$ipc_iddd and subproject_id=$subID and sub_subproject_id=$main->sub_sub_project_id";
                                            $done=$this->db->query($doneeee)->row();
                                            echo number_format($done->tot_amt,2);
                                            ?>
                                                                                    </h3>
                                                                                </font>
                                                                            </td>
                                                                        </tr>

                                                                    </table>

                                                                    <?php }?>
                                                                    </tr>

                                                                    <table class="table">
                                                                        <tr style="background-color:#558ed5;color:#fff">
                                                                            <td>
                                                                                <h4>
                                                                                    Over All Amount(in PKR) Million
                                                                                </h4>
                                                                            </td>
                                                                            <td><?php 
                                        $doneeee1="select sum(ipc_bs_amount) as tot_amt1 from ppms_ipc_billsummary where  ipc_id=$ipc_iddd";
                                            $done1=$this->db->query($doneeee1)->row();
                                            echo "<h4>".number_format($done1->tot_amt1,2). "</h4>";
                                            ?> </td>
                                                                        </tr>

                                                                    </table>
                                                        </div>




                                                    </div>
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
                            //alert(fdate);
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
                                    //$('#bilo').value(1);
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

<style>
/* Table CSS */
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    border: 1px solid #000;
    padding: 8px;
    
}

/* Beveled Cell Data */
td {
    background-color: #fff;
    border-top: 1px solid #000;
    border-left: 1px solid #000;
    box-shadow: inset 0 0 5px #888;
    color:#000;
    text-align: left;
    vertical-align: middle;
}

/* Beveled Header Cells */
th {
    background-color: #218559;
    color: #fff;
    border-top: 1px solid #fff;
    border-left: 1px solid #fff;
    box-shadow: inset 0 0 5px #888;
    text-align: left;
    vertical-align: middle;
}



</style>
