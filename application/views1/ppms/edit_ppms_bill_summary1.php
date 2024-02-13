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
                                    <a
                                                            href="<?php echo base_url()?>Welcome/ppms_bill_summary/">
                                                           <button class="btn btn-danger">Add New Records</button> </a>
                                                

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="">


                                            <table class="table">
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select required class="form-control" name="output" id="output_id">
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
                                                        <select required class="form-control" name="sectors" id="sectors_id">
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
                                                        <select required name="project_id" id="project_id" class="form-control">

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
                                                        <select required name="sub_sub_project_id" id="sub_sub_project_id"
                                                            class="form-control">

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
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>SNo. </th>
                                                    <th>OutPut </th>
                                                    <th>Sectors</th>

                                                    <th>Project</th>

                                                    <th>Sub <br>Project<br> Name</th>
                                                    <th>Sub Sub <br>Project <br> Name</th>
                                                    <th> Category<br> Name</th>
                                                    <th>BS<br>No</th>
                                                    <th> Description</th>
                                                    <th>Civil <br> Work</th>
                                                    
                                                    
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
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>

                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->project_name;?></td>

                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <td><?php echo $item->project_area_name;?></td>
                                                    <td><?php echo wordwrap($item->billsummary_category_name,10, "<br />\n");?></td>

                                                    <td><?php echo $item->billsummary_no;?></td>
                                                    <td><?php echo wordwrap($item->billsummary_desc,10, "<br />\n");
                                                    ?></td>
                                                    <td><?php if($item->billsummary_cw==1){
                                                        echo "Yes";
                                                    }else{
                                                        echo "No";
                                                    }
                                                        ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Amount</td>
                                                    <td><?php echo $item->billsummary_amt;?></td>
                                                   

<td colspan="3"><input type="text" placeholder="Enter More Amount" onBlur="add_amount(this.value,<?php echo $item->billsummary_id?>)"
                                                            required id="bs_amount" class="form-control"
                                                            name="bs_amount" tabindex="1">
                                                        <table class="table table-bordered">
                                                            <tr><td>SerialNo</td><td>Amount</td><td>Remove</td>
                                                        </tr>
                            <?php  $dipee = $this->db->query("select * from bill_summary_amount where billsummary_id=$item->billsummary_id")->result();
                           $x=1;
                           foreach($dipee as $dipee){
                            ?>
                 
<tr>
<td><?php echo $x?></td>
<td><?php echo $dipee->amount;?></td>
<td><a href="javascript:" onClick="delete_bill(<?php echo $dipee->bs_id;?>)">
    <img src="<?php echo base_url('img/delete.png')?>" width="30px" height="30px">
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
 
 function add_amount(amt,id)
 {
     ///alert(idd);
 
 //a//lert(s_qq);
 //alert(s_rr);
 $.post("<?php echo base_url()?>Welcome/add_amount_billsummary/",{amount:amt,id:id},function(page_response){
 
     if(page_response==1){
         
     	window.location.reload();
      
     }
      });
     
         }
         /////////////////////////////////////////

         function delete_bill(id)
 {
     ///alert(idd);
 
 //a//lert(s_qq);
 //alert(s_rr);
 $.post("<?php echo base_url()?>Welcome/delete_amount_billsummary/",{id:id},function(page_response){
 
     if(page_response==1){
         
     	window.location.reload();
      
     }
      });
     
         }

 </script> 
 