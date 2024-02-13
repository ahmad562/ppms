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
                                    <h5>Add New Record</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">


                                            <table class="table">
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select class="form-control" name="output" id="output_id">
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
                                                        <select class="form-control" name="sectors" id="sectors_id">
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
                                                        <select name="project_id" id="project_id" class="form-control">

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
                                                        <select name="sub_project_id" id="sub_project_idss"
                                                            class="form-control" onChange="display_data(this.value)">

                                                            <option value="">Select Sub Project List</option>
                                                        </select>
                                                    </td>



                                                </tr>
                                                <tr>
                                                    <td>Sub Sub Project</td>
                                                    <td>
                                                        <select name="sub_sub_project_id" id="sub_sub_project_id"
                                                            class="form-control">

                                                            <option value="">Select Sub Sub Project List</option>
                                                        </select>
                                                    </td>
                                                    <td>Bill Summary No</td>
                                                    <td><input type="text" autofocus placeholder="Enter Bill Summary#"
                                                            required id="bs_no" class="form-control" name="bs_no"
                                                            tabindex="1"></td>


                                                </tr>
                                                <tr>
                                                    <td>Bill Summary Description</td>
                                                    <td><input type="text" autofocus
                                                            placeholder="Enter Bill Description" required id="bs_desc"
                                                            class="form-control" name="bs_desc" tabindex="1"></td>

                                                    <td>Bill Summary Amount</td>
                                                    <td><input type="text" placeholder="Enter Bill Summary Amount"
                                                            required id="bs_amount" class="form-control"
                                                            name="bs_amount" tabindex="1"></td>


                                                </tr>
                                                <tr>
                                                    <td>Bill Summary Civil Work</td>
                                                    <td>
                                                        <select name="civil_work" id="civil_work" class="form-control">
                                                            <option value="">Select Civil Work</option>
                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>

                                                        </select>

                                                    </td>
                                                    <td>Bill Summary Category</td>
                                                    <td>
                                                        <select name="bill_cat" id="bill_cat" class="form-control">
                                                            <option value="">Select Bill Summary Category</option>
                                                            <?php  
                        $ccc = $this->db->query("SELECT * FROM ppms_billsummary_category")->result();
                  foreach($ccc as $ccc){?>
                                                            <option value="<?php echo $ccc->billsummary_category_id?>">
                                                                <?php echo $ccc->billsummary_category_name?></option>
                                                            <?php }?>


                                                        </select>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Save Record</button></td>
                                                </tr>
                                            </table>
                                        </form>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>PPMS Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>OutPut </th>
                                                    <th>Sectors</th>

                                                    <th>Project</th>

                                                    <th>Sub Project Name</th>
                                                    <th>Sub Sub Project Name</th>
                                                    <th>Bill Summary Category Name</th>
                                                    <th>Bill Summary No</th>
                                                    <th>Bill Summary Description</th>
                                                    <th>Bill Summary Amount</th>
                                                    <th>Bill Summary Civil Work</th>

                                                    <th>Edit</th>
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
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>

                                                    <td><?php echo $item->output_name;?></td>
                                                    <td><?php echo $item->sector_name;?></td>
                                                    <td><?php echo $item->project_name;?></td>

                                                    <td><?php echo $item->subproject_name;?></td>

                                                    <td><?php echo $item->project_area_name;?></td>
                                                    <td><?php echo $item->billsummary_category_name;?></td>

                                                    <td><?php echo $item->billsummary_no;?></td>
                                                    <td><?php echo $item->billsummary_desc;?></td>
                                                    <td><?php echo $item->billsummary_amt;?></td>
                                                    <td><?php if($item->billsummary_cw==1){
                                                        echo "Yes";
                                                    }else{
                                                        echo "No";
                                                    }
                                                        ?></td>


                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_ppms/<?php echo $item->billsummary_id;?>">
                                                            <img src="<?php echo base_url()?>img/edit.PNG" width="30px"
                                                                height="30px" /> </a>
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





                        <?php 
	if(isset($_POST['add'])){
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