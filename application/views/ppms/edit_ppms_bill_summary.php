<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4> Bill Summary </h4>

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
                                    <h5>Edit Records</h5>
                                    <a href="<?php echo base_url()?>Welcome/ppms_bill_summary/">
                                        <button class="btn btn-danger">Add New Records</button> </a>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="">


                                            <table class="table">
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select required class="form-control" name="output"
                                                            id="output_id">
                                                            <option value="">Select OutPut</option>
                                                            <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
                                                            <option value="<?php echo $outList->output_id?>">
                                                                <?php echo $outList->output_name?></option>
                                                            <?php }?>

                                                        </select>
                                                    </td>
                                                    <td>Sectors</td>
                                                    <td>
                                                        <select required class="form-control" name="sectors"
                                                            id="sectors_id">
                                                            <option value="">Select Sectors</option>
                                                            <?php /*$sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                            <option value="<?php echo $sectorss->sector_id?>">
                                                                <?php echo $sectorss->sector_name?></option>
                                                            <?php }*/?>

                                                        </select>



                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td>
                                                        <select required name="project_id" id="project_id"
                                                            class="form-control">

                                                            <option value="">Select Project</option>
                                                            <?php /*?><?php $done=$this->db->query("select project_id,project_name from ppms_project")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->project_id;?>">
                                                                <?php echo $desig->project_name;?></option>
                                                            <?php }?><?php */?>
                                                        </select>
                                                    </td>

                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select required name="sub_project_id" id="sub_project_idss"
                                                            class="form-control" onChange="display_data(this.value)">

                                                            <option value="">Select Sub Project List</option>
                                                        </select>
                                                    </td>



                                                </tr>
                                                <tr>
                                                    <td>Sub Sub Project</td>
                                                    <td>
                                                        <select required name="sub_sub_project_id"
                                                            id="sub_sub_project_id" class="form-control">

                                                            <option value="">Select Sub Sub Project List</option>
                                                        </select>
                                                    </td>



                                                </tr>
                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Search Record</button></td>
                                                </tr>
                                            </table>
                                        </form>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                            </div>

                        </div>
                        <?php 
if(isset($_POST['add'])){
    extract($_POST);

?>
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Bill Summary Records</h5>
                                    <span></span>

                                </div>
                                <?php
			   error_reporting(0);
			   
            
                  $item = $this->db->query("
                  SELECT * 
                  FROM 
                
                  ppms_subproject AS a,
                  ppms_subproject_area AS b,
                  ppms_project AS c,
                  ppms_sector AS d,
                  ppms_output_list AS e
                   WHERE a.`subproject_id`=b.`subproject_id` AND
                  a.`project_id`=c.`project_id` AND 
                  c.`sector_id`=d.`sector_id` AND 
                  d.`output_id`=e.`output_id`
                  and a.subproject_id=$sub_project_id
                  and b.project_area_id=$sub_sub_project_id
                  ")->row();
                 ?>
                 
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
    <tr><td><button type="button" class="btn btn-success" onClick="more_money(<?php echo $sub_project_id;?>,<?php echo $sub_sub_project_id;?>)">Add VO Amount</button></td>
                                                <tr>
                                                    <td><b>Project Name </b></td>
                                                    <td><b><?php echo $item->output_name;?>/

                                                            <?php echo $item->sector_name;?>/

                                                            <?php echo $item->project_name;?>/




                                                            <?php echo $item->subproject_name;?>/

                                                            <?php echo $item->project_area_name;?></b></td>
                                                </tr>
                                            </thead>
                                        </table>


                                        <?php 
                                                        
                                                        $main = $this->db->query("SELECT pb.sub_sub_project_id,project_area_name
                                                        FROM `ppms_billsummary` as pb,ppms_subproject_area as ps
                                                        WHERE pb.subproject_id=$sub_project_id
                                                        and ps.project_area_id=$sub_sub_project_id
                                                        and pb.sub_sub_project_id=ps.project_area_id
                                                        group by pb.sub_sub_project_id")->result();
                                        foreach($main as $main){
                                        ?>
                                        <h2><?php echo $main->project_area_name;?> </h2>
                                        <table width="100%" border="5" cellspacing="0" cellpadding="0">



                                            <tbody>


                                                <?php
                                        error_reporting(E_ALL);
                                        
                                        $i=1; 
                                        $result1 = $this->db->query("SELECT * FROM ppms_billsummary_category")->result();
                                        foreach($result1 as $item){?>
                                                <tr style="background-color:#000; color:#fff">
                                                    <td colspan="3">
                                                        <h4>
                                                            <font color="white">(<?php echo $i;?>)
                                                                <?php echo $item->billsummary_category_name;?>
                                                            </font>
                                                        </h4>
                                                    </td>



                                                </tr>
                                                <tr>
                                                    <td>
                                                        <table style="width:100%" cellpadding="0" cellspacing="0"
                                                            border="5">
                                                            <thead>
                                                                <tr style="background-color:#218559; color:#fff">
                                                                    <th style="width:10%">
                                                                        Bill# </th>
                                                                    <th style="width:30%">
                                                                        Bill Summary
                                                                        Description
                                                                    </th>
                                                                    <th style="width:10%">
                                                                        BOQ
                                                                    </th>
                                <th>
    <table class="table">
        <tr>
       <?php 
         
        $maxii="SELECT distinct(grp_id) as grppp  FROM `bill_summary_amount` WHERE `subproject_id`=$sub_project_id AND `sub_sub_project_id`=$sub_sub_project_id";
        $maxiii=$this->db->query($maxii)->result();
        foreach($maxiii as $maxiii){?>
<td>VO <?php echo $maxiii->grppp;?></td>
<?php }?>
        </table>
        </th>

                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <?php
                                        error_reporting(0);
                                        
                                        
                                        $result1 = $this->db->query("SELECT * FROM ppms_billsummary as a,ppms_billsummary_category as b
                                        where a.billsummary_category_id=b.billsummary_category_id
                                        and a.billsummary_category_id=$item->billsummary_category_id 
                                        and subproject_id=$sub_project_id and sub_sub_project_id=$main->sub_sub_project_id
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
                                                                                echo wordwrap($text, 50, "<br />\n");
                                                                                 //echo chunk_split ($str, 5, "\r\n");
                                                                                //echo preg_replace("/(.{10})/", "$1\n\r", $str);
                                                                                ?>
                                                                    </td>

                                    <td><b><?php echo number_format($item->billsummary_amt,2);?></b>
                        
                                           <?php /*?> <input type="text"
                                                                            placeholder="Enter More Amount"
                                                                            onBlur="add_amount(this.value,<?php echo $item->billsummary_id?>,<?php echo $sub_project_id;?>,<?php echo $main->sub_sub_project_id;?>)"
                                                                            required id="bs_amount" class="form-control"
                                                                            name="bs_amount" tabindex="1">
                                                                            <?php */?>

                                                                    </td>
                                                                    <td>
                     <table class="table">
                    <?php $dipee = $this->db->query("select * from bill_summary_amount where billsummary_id=$item->billsummary_id")->result();
                           ?>

                                                                            <tr>
                                                                                <?php $x=1;
                           foreach($dipee as $dipee){?>
                                                                                <td><b></b>
                                                                                <input type="text"
                                                                            placeholder="Enter More Amount"
                                                                            onBlur="add_amount(this.value,<?php echo $dipee->bs_id;?>)"
                                                                            required id="bs_amount" class="form-control" width="20px"
                                                                            name="bs_amount" tabindex="1" value="<?php echo $dipee->amount;?>">    
                                                                            
                                                                            
                                                                            </td>
                                                                               <?php /*?> <td><a href="javascript:"
                                                                                        onClick="delete_bill(<?php echo $dipee->bs_id;?>)">
                                                                                        <img src="<?php echo base_url('img/delete.png')?>"
                                                                                            width="30px" height="30px">
                                                                                    </a>
                                                                                </td>
                                                                                <?php */?>
                                                                                <?php 
$x++;
}?>
                                                                            </tr>

                                                                        </table>
                                                                    </td>

                                                                </tr>
                                                                <?php
                                                            
                                                         
                                        $j++;
                                        $d1=$d1+$d; 
                                        
                                        } 
                                         $totttt=$d1;
                                       
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




                                                <?php }?>
                                                </tr>



                                                <?php /*?>




                                                <table id="simpletable" class="table table-bordered ">
                                                    <thead>
                                                        <tr>

                                                            <th>No</th>
                                                            <th> Category</th>

                                                            <th> Description</th>
                                                            <th>Civil <br> Work</th>

                                                            <th>Amount</th>
                                                            <th>Add More <br>Amount</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("
                  SELECT 
                  * 
                  FROM 
                  ppms_billsummary AS a,
                  ppms_billsummary_category AS b,
                  ppms_subproject AS c,
                  ppms_subproject_area AS psa,
                  ppms_project AS pp,
                  ppms_sector AS ps,
                  ppms_output_list AS pol
                  

                  WHERE a.billsummary_category_id=b.billsummary_category_id
                  AND a.subproject_id=c.subproject_id
                  AND a.sub_sub_project_id=psa.project_area_id
                  AND c.`project_id`=pp.project_id
                  AND pp.sector_id=ps.sector_id
                  AND ps.`output_id`=pol.`output_id`
                  and a.subproject_id=$sub_project_id
                  and a.sub_sub_project_id=$sub_sub_project_id
                  order by a.sid asc
                  ")->result();
                  foreach($result1 as $item){?>
                                                        <tr class="gradeX">


                                                            <td><?php echo $item->billsummary_no;?></td>
                                                            <td><?php echo wordwrap($item->billsummary_category_name,10, "<br />\n");?>
                                                            </td>


                                                            <td><?php echo wordwrap($item->billsummary_desc,10, "<br />\n");
                                                    ?></td>

                                                            <td>Amount</td>
                                                            <td><?php echo $item->billsummary_amt;?></td>


                                                            <td colspan="3"><input type="text"
                                                                    placeholder="Enter More Amount"
                                                                    onBlur="add_amount(this.value,<?php echo $item->billsummary_id?>)"
                                                                    required id="bs_amount" class="form-control"
                                                                    name="bs_amount" tabindex="1">

                                                                <table class="table table-bordered">
                                                                    <tr>
                                                                        <td>SerialNo</td>
                                                                        <td>Amount</td>
                                                                        <td>Remove</td>
                                                                    </tr>
                                                                    <?php  $dipee = $this->db->query("select * from bill_summary_amount where billsummary_id=$item->billsummary_id")->result();
                           $x=1;
                           foreach($dipee as $dipee){
                            ?>

                                                                    <tr>
                                                                        <td><?php echo $x?></td>
                                                                        <td><?php echo $dipee->amount;?></td>
                                                                        <td><a href="javascript:"
                                                                                onClick="delete_bill(<?php echo $dipee->bs_id;?>)">
                                                                                <img src="<?php echo base_url('img/delete.png')?>"
                                                                                    width="30px" height="30px">
                                                                            </a>
                                                                        </td>
                                                                    </tr>
                                                                    <?php 
$x++;
}?>
                                                                </table>


                                                            </td>

                                                        </tr>
                                                        <?php
 $i++;
 } ?>
                                                    </tbody>
                                                    <tfoot>
                                                </table>
                                                <?php */?>
                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->





                        </div>

                        <?php }?>



                        <?php 
	if(isset($_POST['add_child'])){
		extract($_POST);
	$done=$this->db->query("select * from ppms_billsummary where billsummary_no='$bs_no' 
    and billsummary_category_id=$bill_cat and subproject_id=$sub_project_id and sub_sub_project_id=$sub_sub_project_id")->row();
	if($done){
$done=$this->db->query("update ppms_billsummary set billsummary_desc='$bs_desc',billsummary_amt=$bs_amount,subproject_id=$sub_project_id,sub_sub_project_id=$sub_sub_project_id,
billsummary_cw=$civil_work where billsummary_no='$bs_no' and billsummary_category_id=$bill_cat");	
	}else{
        $doneMaxi=$this->db->query("select ifnull(max(sid),0)+1 as sid from ppms_billsummary where subproject_id=$sub_project_id and sub_sub_project_id=$sub_sub_project_id")->row(); 
        $maxiiii=$doneMaxi->sid;
	$done=$this->db->query("insert into ppms_billsummary set billsummary_desc='$bs_desc',billsummary_amt=$bs_amount,sub_sub_project_id=$sub_sub_project_id,
    billsummary_cw=$civil_work,billsummary_no='$bs_no',billsummary_category_id=$bill_cat,subproject_id=$sub_project_id,sid=$maxiiii");	
	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/ppms_bill_summary'));
		}
	
	
	}
	
	
	
	?>
                        <script type="text/javascript">

                     function more_money(projectID,SubProjectID){

                        $.post("<?php echo base_url()?>Welcome/add_amount_billsummary_cells/", {
                               
                                projectID:projectID,
                                SubProjectID:SubProjectID

                            }, function(page_response) {

                                if (page_response == 1) {

                                    window.location.reload();

                                }
                            });





                     }




                        function add_amount(amt,psid) {
                            ///alert(idd);

                            //a//lert(s_qq);
                            //alert(s_rr);
                            $.post("<?php echo base_url()?>Welcome/add_amount_billsummary/", {
                                amount: amt,
                                psid:psid

                            }, function(page_response) {

                                if (page_response == 1) {

                                    window.location.reload();

                                }
                            });

                        }
                        /////////////////////////////////////////

                        function delete_bill(id) {
                            ///alert(idd);

                            //a//lert(s_qq);
                            //alert(s_rr);
                            $.post("<?php echo base_url()?>Welcome/delete_amount_billsummary/", {
                                id: id
                            }, function(page_response) {

                                if (page_response == 1) {

                                    window.location.reload();

                                }
                            });

                        }
                        </script>