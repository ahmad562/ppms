<?php //echo $description_id; ?>
                        <div class="page-body" >
                          <!--   <div>
                                
                           
                            <table class="table nowrap" style="margin-bottom: -50px; margin-top:-50px ;">
                                            <tr>
                                                <td> -->
                            
                            <div class="card">
    <div class="card-block">
       <div class="container" style="overflow:scroll;">
    <div class="row">
    <div class="col-12">
        
            
       
        <style>
    table tr td{
        text-align: center;
        padding: 2px;
    }
    table tr th{
        text-align: center;
        padding: 2px;
    }
</style>

<table border="1px" cellpadding="0" cellspacing="0" width="100%" id="simpletable">
    <tr>
        <td align="center" colspan="10" style="padding:10px;font-family: Jameel Noori Nastaleeq; font-size: 25px;font-weight: bold;">"عوضانہ تحت تحصیل خوازہ خیلہ  (GREATER GRAVITY WATER SUPPLY SCHEME MINGORA)گریٹر گریوٹی واٹر سپلائی سکیم مینگورہ"
            <br> Main Pipline
</td>
        
    </tr>
    <tr bgcolor="#89CFF0">
        <th>S#</th>
        <th>DP Name with Father/Husband Name</th>
        <th colspan="3" style="padding:0px;">
            <table align="center" ><tr><th>Payment details</th></tr></table>
            <table border="1px" cellpadding="0" cellspacing="0" width="100%"><tr><th style="width: 100%;"> &ensp; &ensp; BOR &ensp;&ensp;&ensp;</th>
        <th width="20%"> &ensp;&ensp;&ensp; &ensp; IVS &ensp;&ensp;&ensp; &ensp;</th>
        <th width="40%">Severity<br> and <br>vulnerability<br> Allowance</th></tr></table>
        </th>
        <!-- 
        <td></td>
        <td></td> -->
         
        <th>Total payment received</th>
        <th>% age Total payment received</th>
        <th>BOR Cheque Photo</th>
        <th>IVS Check Photo</th>
        <th>Remarks ( In case of <br>non-payment or any<br> impediments in payment</th>
        
    </tr>
    <?php
    error_reporting(0); 
$i=1;
    $land=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_land_record as lr where sd.ss_dp_id=lr.ss_dp_id AND lr.ss_doc_detail_id=$description_id")->result();
    foreach($land as $land){
    $non_land_1=$this->db->query("select * from ppms_ss_nonland_record where ss_doc_detail_id=$description_id AND ss_nonlandtype_id=1 AND ss_dp_id=$land->ss_dp_id")->row();
    $non_land_2=$this->db->query("select * from ppms_ss_nonland_record where ss_doc_detail_id=$description_id AND ss_nonlandtype_id=2 AND ss_dp_id=$land->ss_dp_id")->row();
    if($non_land_1==true){
        $bor_plus=$land->ss_lrecord_borpayableamount+$non_land_1->ss_nlrecord_bortotalamount+$non_land_2->ss_nlrecord_bortotalamount;
    $ivs_plus=$land->ss_lrecord_ivspayableamount+$non_land_1->ss_nlrecord_ivstotalamount+$non_land_2->ss_nlrecord_ivstotalamount;
    $recieved_amount=$land->ss_lrecord_bor_totalamount+$non_land_1->ss_nlrecord_bortotalamount+$non_land_2->ss_nlrecord_bortotalamount;
    $diff_plus= ($land->ss_lrecord_ivs_totalamount-$land->ss_lrecord_bor_totalamount)+($non_land_1->ss_nlrecord_ivstotalamount-$non_land_1->ss_nlrecord_bortotalamount)+($non_land_2->ss_nlrecord_ivstotalamount-$non_land_2->ss_nlrecord_bortotalamount);
}else{
    $bor_plus=$land->ss_lrecord_borpayableamount+$non_land_2->ss_nlrecord_bortotalamount;
    $ivs_plus=$land->ss_lrecord_ivspayableamount+$non_land_2->ss_nlrecord_ivstotalamount;
    $recieved_amount=$land->ss_lrecord_bor_totalamount+$non_land_2->ss_nlrecord_bortotalamount;
    $diff_plus= ($land->ss_lrecord_ivs_totalamount-$land->ss_lrecord_bor_totalamount)+($non_land_2->ss_nlrecord_ivstotalamount-$non_land_2->ss_nlrecord_bortotalamount);
}
     ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td> <?php echo $land->ss_dp_fullname; ?> </td>
        <td width="5%"> <?php echo $bor_plus; ?> </td>
        <td width="5%" style="padding-right:7px;padding-left: 5px"> <?php echo $diff_plus; ?> </td>
        <td></td>
        <td><?php echo $bor_plus+$diff_plus; ?></td>
        <?php  $percen=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_land_record as lr,ppms_ss_dp_payment_detail as psdp where psdp.ss_dp_id=$land->ss_dp_id AND sd.ss_dp_id=lr.ss_dp_id AND lr.ss_doc_detail_id=$description_id")->row(); ?>
        <?php  $bor_img=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_land_record as lr,ppms_ss_landtype as psl,ppms_ss_dp_payment_detail as ppd where
                  psl.landtype_id=lr.ss_landtype_id AND ppd.ss_dp_id=$land->ss_dp_id AND ppd.category_id=3 AND sd.ss_dp_id=lr.ss_dp_id")->row(); ?>
        <?php  $ivs_img=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_land_record as lr,ppms_ss_landtype as psl,ppms_ss_dp_payment_detail as ppd where
                  psl.landtype_id=lr.ss_landtype_id AND ppd.ss_dp_id=$land->ss_dp_id AND ppd.category_id=6 AND sd.ss_dp_id=lr.ss_dp_id")->row(); ?>
        <td><?php if($percen){
            if($percen->payment_status=="Paid"){
            echo "100%";
        }else{
            echo "0%";
        }
        }else{
            echo "0%";
        } ?></td>
        <td><img src="<?php echo base_url()?>img/down.png" width="30px" height="30px" onClick="window.open('<?php echo base_url()?><?php if($bor_img){ echo $bor_img->file;
        }else{
            echo " ";
        }?>')"></td>
        <td><img src="<?php echo base_url()?>img/down.png" width="30px" height="30px" onClick="window.open('<?php echo base_url()?><?php if($ivs_img){ echo $ivs_img->file;
        }else{
            echo " ";
        }?>')"></td>
        <td></td>
        
    </tr>
<?php $i++; } ?>
<!-- <tr>
 <?php $land=$this->db->query("select sum(ss_lrecord_borpayableamount) as borpayable,sum(ss_lrecord_bor_totalamount) as bortotal,sum(ss_lrecord_ivs_totalamount) as ivstotal,sd.ss_dp_id,lr.ss_dp_id from ppms_ss_db as sd,ppms_ss_land_record as lr where sd.ss_dp_id=lr.ss_dp_id AND lr.ss_doc_detail_id=$description_id")->row();
 $non_land_1=$this->db->query("select sum(ss_nlrecord_bortotalamount) as bortotal,sum(ss_nlrecord_ivstotalamount) as ivstotal from ppms_ss_nonland_record where ss_doc_detail_id=$description_id AND ss_nonlandtype_id=1 AND ss_dp_id=$land->ss_dp_id")->row();
    $non_land_2=$this->db->query("select sum(ss_nlrecord_bortotalamount) as bortotal,sum(ss_nlrecord_ivstotalamount) as ivstotal from ppms_ss_nonland_record where ss_doc_detail_id=$description_id AND ss_nonlandtype_id=2 AND ss_dp_id=$land->ss_dp_id")->row();
  ?>
        <td></td>
        <td> total </td>
        <td width="5%"> <?php //echo $land->borpayable+$non_land_1->bortotal+$non_land_2->bortotal; ?> </td>
        <td width="5%" style="padding-right:7px;padding-left: 5px"> <?php //echo $land->ivstotal+$non_land_1->ivstotal+$non_land_2->ivstotal; ?> </td>
        <td></td>
        <td><?php //echo $land->bortotal+$non_land_1->bortotal+$non_land_2->bortotal; ?></td>
        <td>100%</td>
        <td></td>
        <td></td>
        <td></td>
        
    </tr> -->
    </table>
 </div>
    </div>
</div> 
    </div>
</div>

                           
                                   
                                        <!--/span-->
                                    </div>
                                    <!--/row-->



    <script>
        function add_new_row(){


let table = document.getElementById("myTable");
let row = table.insertRow(); // creates a new row
let cell1 = row.insertCell(); // creates a new cell
let cell2 = row.insertCell(); // creates another new cell
let cell3 = row.insertCell(); // creates another new cell
let cell4 = row.insertCell(); // creates another new cell
let cell5 = row.insertCell(); // creates another new cell
cell1.innerHTML = '<td>Name:</td><td><input type="text" name="name[]" class="form-control"></td>'; // sets the content of the first cell
cell2.innerHTML = '<td>Date:</td><td><input type="date" name="date[]" class="form-control"></td>'; // sets the content of the second cell
cell3.innerHTML = '<td>file:</td><td><input type="file" name="files[]" class="form-control"></td>'; // sets the content of the third cell
cell4.innerHTML = '<td>Remarks:</td><td><input type="text" name="remarks[]" class="form-control"></td>'; // sets the content of the fourth cell
cell5.innerHTML = '<td><img src="<?php echo base_url('img/minus.png')?>" width="35px" height="35px" onClick="myDeleteFunction()" style="margin-top: 20px;"></td>';
    }</script>
    
            <script>
                function larp_detaill(category_id){
            $.ajax({
                url: "<?php echo base_url('Complaint/larp_detaill') ?>",
                method: "POST",
                datatype: "html",
                data : {
                       category_id : category_id,   
                    },
                success : function(data){
                $("#larp_detail").html(data);
                }
            });
         }
            </script>

            <script>

function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(1);
}
</script>

<script>
    function add_row(){


let table1 = document.getElementById("bor_Table");
let row_n1 = table1.insertRow(); // creates a new row
let cell_n1 = row_n1.insertCell(); // creates a new cell
let cell_n2 = row_n1.insertCell(); // creates another new cell
let cell_n3 = row_n1.insertCell(); // creates another new cell
let cell_n4 = row_n1.insertCell(); // creates another new cell
let cell_n5 = row_n1.insertCell(); // creates another new cell


cell_n1.innerHTML = '<tr><td>Description:<input type="text" name="add_land_record_description[]" class="form-control"></td>'; // sets the content of the first cell
cell_n2.innerHTML = '<td>Total Area(Marla):<input type="text" name="d_total_area[]" class="form-control"></td>';
cell_n3.innerHTML = '<td>Total Land Cost:<input type="text" name="d_total_land_cost[]" class="form-control"></td>';
cell_n4.innerHTML = '<td>Total No of Dp:<input type="text" name="total_no_of_dp[]" class="form-control"></td>';
cell_n5.innerHTML = '<td><img src="<?php echo base_url('img/minus.png')?>" width="35px" height="35px" onClick="Deleteborivs()" style="margin-top: 23px;"></td>';


    }
function Deleteborivs() {
  document.getElementById("bor_Table").deleteRow(1);

}

</script>
