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

                   $done=$this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,
                    ppms_project as ppp,ppms_subproject_area as ppsa

                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id
                    and ppsp.subproject_id=ppsa.subproject_id
                    and ppi.ipac_id=$id")->row();


   ?>
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>IPC Module</h4>

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
                            <div class="card">
                                <div class="card-header">
                                    <h5>Add New Record(IPC Entry)</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">


                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Welcome/update_ipac/'.$id)?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
                                            

                                            <table class="table">
                                                <?php if($groupID == 5 or $groupID == 6 or $groupID == 1){?>
                                                    <tr style="background-color:#1ABC9C;; color:#fff">
                                                    <td colspan="4"><font size="+1">Project & SubProject Detail</font></td>
                                                </tr>  
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

                    <option value="<?php echo $done->project_id?>"><?php echo $done->project_name?></option>
                                                            <?php /*?><?php $done=$this->db->query("select project_id,project_name from ppms_project")->result();
foreach($done as $desig){
?>
                                                            <option value="<?php echo $desig->project_id;?>">
                                                                <?php echo $desig->project_name;?></option>
                                                            <?php }?><?php */?>
                                                        </select>
                                                    </td>
                                                    <?php }?>
                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="sub_project_id" id="sub_project_idss"
                                                            class="form-control" required>

            <option value="<?php echo $done->subproject_id?>"><?php echo $done->subproject_name?></option>
            <?php 
            if($orgName->designation_id==8){
                $subProject=$this->db->query("SELECT * FROM ppms_subproject AS ps,assign_regional AS ar
                WHERE ps.`subproject_id`=ar.`subproject_id` and ar.emp_id=$empiD")->result();
            }else{
            $subProject=$this->db->query("select * from ppms_subproject where city_id=$cityID")->result();
            }
                                                             foreach($subProject as $subProject){?>
                                                            <option value="<?php echo $subProject->subproject_id?>">
                                                                <?php echo $subProject->subproject_name?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sub Sub Project</td>
                                                    <td>
                                                        <select name="sub_sub_project_id" id="sub_sub_project_id"
                                                            class="form-control" require
                                                            onChange="display_data(this.value)">

                                        <option value="<?php echo $done->project_area_id?>"><?php echo $done->project_area_name;?></option>
                                                        </select>
                                                    </td>

                                                    <td>Submitted Date</td>
                                                    <td><input type="date" placeholder="Enter Submitted Date" required
                                                            id="submitted_date" class="form-control"
                                                            name="submitted_date" tabindex="1" value="<?php echo $done->ipac_submitted_date;?>"></td>
                                                </tr>

                                                             </table>
                                                             <table class="table" id="file_displays">
                                                <tr style="background-color:#1ABC9C; color:#fff">
                                                    <td><font size="+1">Caption</font></td>
                                                    <td><font size="+1">Attached File</font></td>
                                                    <td><font size="+1">Action</font></td>
                                                </tr>

                                                <?php 
                                                                         $filee="SELECT ipac_file_id,ipac_file_name,ipac_file_url,file_name 
                                                                            FROM 
                                                                            ppms_ipac_file where ipac_id=$id";
 $filess = $this->db->query($filee)->result();?>
                                                            <tr>
                                                                <?php $f=1;
 foreach($filess as $filess){
 ?>
                                                                <td><?php echo $f;?></td>
                                                                <td><?php echo $filess->file_name;?></td>
                                                               
                                                                <td colspan="2" align="center">

                                                                    <a
                                                                        href="<?php echo base_url('img/upload_files/')?><?php echo $filess->ipac_file_url;?>">
                                                                        <img src="<?php echo base_url('img/download.jpg')?>"
                                                                            width="30px" height="30px">
                                                                    </a>

                           
<a href="javascript:" onClick="delete_files(<?php echo $filess->ipac_file_id?>)">
                                                                        <img src="<?php echo base_url('img/delete.png')?>"
                                                                            width="30px" height="30px">
                                                                    </a>


                                                                </td>
                                                            </tr>
                                                            <?php 
                                                                        $f++;
                                                                        }?>
                                                <tr>

                                                    <td><input type="text" name="filename[]" class="form-control"
                                                            placeholder="Enter Caption Here">


                                                    <td><input type="file" placeholder="Please Attached a File" 
                                                            id="images" class="form-control" name="files[]"
                                                            tabindex="6"></td>
                                                    <td><input type="button" class="btn btn-danger"
                                                            value="Attach More Files" onclick="addRow()"></td>


                                                </tr>


                                               

                                            </table>
                                               
                                               <table class="table">
                                               <tr style="background-color:#1ABC9C;; color:#fff">
                                                    <td colspan="4"><font size="+1">Remarks & Contractor Detail</font></td>
                                                </tr>
                                                <?php 
                                                    $abc_remarks="SELECT * FROM ppms_ipac_remarks
                                                   WHERE ipac_id=$id order by ipac_remarks_id asc limit 1";
            $abc_remarkss1=$this->db->query($abc_remarks)->row();
            ?>  
                                                    <tr>
                                                    <td>Remarks</td>
                                                    <td colspan="3">
                                                        <textarea placeholder="Enter Remarks" required
                                                            id="remarks" class="form-control" name="remarks_new"
                                                            tabindex="5">
                                                            
                <?php echo $abc_remarkss1->ipac_remark?>
</textarea>
                                                    </td>
                                                </tr>

                                              
                                                <tr>
                                                    <td>Contractor</td>
                                                    <td>
                                                       

                                                   
             <select name="contractor_id" id="contractor_id" class="form-control">
             <?php 
                                                    $abc="SELECT * FROM ppms_subproject_assign AS ps,emp AS ar 
                                                   WHERE ps.contractor_id=ar.emp_id AND ps.subproject_id=$done->subproject_id";
            $subProjects=$this->db->query($abc)->result();
            ?>
                <?php foreach($subProjects as $subProjects){?>
               <option value="<?php echo $subProjects->emp_id?>"><?php echo $subProjects->emp_name;?></option>
               <?php }?>


                                                        </select>


                                                    </td>
                                                        
                                                   
                                                           
                                                               
                                                         
        

                                                        
                                                    
                                                <td><b>
                    <font color="red">IPA Contractor Amount(In PKR) 
                    </b></td>
                                                    <td>
                                                        <input type="text" placeholder="Enter IPA Amount" required
                                                            id="ipc_amount" class="form-control" name="ipc_amount"
                                                            tabindex="1" value="<?php echo $done->ipa_amount?>">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>IPC No./EPC No.</td>
                                                    <td><input type="text" placeholder="Enter IPC#" required id="ipc_no"
                                                            class="form-control" name="ipc_no" tabindex="1" value="<?php echo $done->ipc_no?>"></td>

                                                            <td><b>
                    <font color="red">IPC Verified Amount(in PKR) </font>
                </b>
                                                             </td>
                                                             <td>
                <input type="text" name="ipac_amount420" value="<?php echo $done->ipac_amount?>" placeholder="Enter IPAC Amount" required id="ipac_amount"
                    class="form-control" >
            </td>
                                                </tr>

<tr><td>Certificate Type</td>
<td>
<select name="certificate_type" class="form-control">
<option value="<?php echo $done->certificate_type?>"><?php echo $done->certificate_type?></option>
<option value="IPA/IPC">IPA/IPC</option>

<option value="Mobilization">Mobilization</option>
<option value="EPC">EPC</option>

</select>


</td></tr>




                                            </table>



                                            <div id="display_data1">

                                            </div>





                                            <!--/span-->

                                    </div>
                                </div>
                            </div>
                            <!-- Zero config.table end -->





                        </div>




                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-block">


                                    <table class="table">
                                        <tr>
                                            <td>

                                                <input type="submit" class="btn btn-block btn-outline btn-primary"
                                                    id="add" name="add" value="Edit Record">
                                            </td>
                                        </tr>
                                    </table>




                                </div>
                            </div>
                        </div>
                        </form>
                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>IPC Records</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table  table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial No.</th>
                                                    <th>IPC No.</th>
                                                    <th>Package Name</th>
                                                    <th>Contractor Name</th>
                                                    <th>Remarks</th>
                                                    <th>Amount(in PKR)
                                                    </th>
                                                  
                                                    <th>Edit</th>
                                                    <th>Delete</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
                   
                   if($groupID == 5 or $groupID == 6){
                    $result1 = $this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id
                    order by ppi.ipac_id desc
                   ")->result();
                   }else{
                    if($orgName->designation_id==8){
                        $result1 = $this->db->query("SELECT * FROM 
                      ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp,assign_regional AS ar
                      where ppi.subproject_id=ppsp.subproject_id
                      and ppi.subproject_id=ar.subproject_id
                      and ppsp.project_id=ppp.project_id
                      and ar.emp_id=$empID
                      order by ppi.ipac_id desc
                      ")->result();
                       
                      }else{
                    $result1 = $this->db->query("SELECT * FROM 
                    ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                    where ppi.subproject_id=ppsp.subproject_id
                    and ppsp.project_id=ppp.project_id
                    and ppsp.city_id=$cityID
                    order by ppi.ipac_id desc
                   ")->result();
                   
                      }
                   }
                 

///echo $this->db->last_query();
$j=1;
                  foreach($result1 as $item){

                   $tracs = $this->db->query("SELECT * FROM 
                   ppms_ipac_forward as pif,organization as o
                   where ipac_id=$item->ipac_id and pif.organization_id=o.organization_id and pif.flag_id=1")->row();
                   
                   ?>
                                                <tr class="gradeX">
                                                   <td><?php echo $j;?></td>
                                                    <td><?php echo $item->ipc_no;?></td>
                                                    <td><?php echo $item->project_name."-".$item->subproject_name;?>
                                                    </td>

                                                    <?php 
 $cid = $this->db->query("SELECT emp_id,emp_name FROM ppms_subproject_assign AS psa,emp AS e
WHERE psa.`contractor_id`=e.`emp_id` and subproject_id=$item->subproject_id")->row();?>

                                                    <td><?php echo $cid->emp_name;?></td>


                                                    <td>
                                                        <?php 
                                                    $remarkss="SELECT ipac_remark
                                                       FROM 
                                                       ppms_ipac_remarks
                                                       where ipac_id=$item->ipac_id
                                                       order by ipac_id asc
                                                       limit 1
                                                       ";
$remarkss = $this->db->query($remarkss)->row();
echo $remarkss->ipac_remark;?>
                                                    </td>

                                                    <td><?php echo $item->ipac_amount;?></td>
                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_ppms_ipc/<?php echo $item->ipac_id;?>">
                                                            <img src="<?php echo base_url()?>img/edit.PNG" width="30px"
                                                                height="30px" />
                                                        </a>
                                                    </td>
                                                    <td class="action-icon">

                                                        <a href="#!" class="text-muted" data-toggle="tooltip"
                                                            data-placement="top" title=""
                                                            data-original-title="Delete"><i
                                                                class="icofont icofont-delete-alt"></i></a>


                                                    </td>

                                                </tr>
                                                <?php 
                                            $j++;
                                            }?>
                                            </tbody>
                                        </table>
                                                   
                       