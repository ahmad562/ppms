<?php 
$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');
if($groupID > 1){
    $cityii="and c.city_id=$cityID";
   }
   if($groupID > 1){
    $cityoption="where city_id=$cityID";
   }

    $empID=$this->session->userdata('empid');
    $desig_emp=$this->db->query("SELECT designation_id,o.organization_id,o.order_by
    FROM
    emp as e,organization as o WHERE e.emp_id=$empID
    and e.organization_id=o.organization_id
    ")->row();
   if($desig_emp->designation_id==8){

    $doneSUB=$this->db->query("SELECT psp.subproject_id,subproject_name 
    FROM ppms_subproject AS psp,assign_regional AS ar
    WHERE psp.`subproject_id`=ar.`subproject_id`
    and ar.emp_id=$empID")->result();

   }else{
    if($groupID==1 or $groupID=2 or $groupID=5 or $groupID=6){
        $doneSUB=$this->db->query("select subproject_id,subproject_name from ppms_subproject")->result();
    }else{
    $doneSUB=$this->db->query("select subproject_id,subproject_name from ppms_subproject where city_id=$cityID")->result();
    }

   }
   ////////////////////////////////////////////////

?>
<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Enviromental Safeguard Report </h4>

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
                                    <h5>Filter Documents</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <form method="post" action=""">
                                    <div class=" dt-responsive table-responsive">

                                        <table class="table">
                                            <?php if($groupID == 1 or $groupID == 2 or $groupID == 5 or $groupID == 6){?>
                                            <tr>
                                                <?php /*?> <td>OutPut</td>
                                                <td> <select class="form-control" name="output" id="output_id">
                                                        <option value="">Select OutPut</option>
                                                        <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
                                                        <option value="<?php echo $outList->output_id?>">
                                                            <?php echo $outList->output_name?></option>
                                                        <?php }?>

                                                    </select>
                                                </td><?php */?>
                                                <td>Sectors</td>
                                                <td>
                                                    <select class="form-control" name="sectors" id="sectors_id">
                                                        <option value="">Select Sectors</option>
                                                        <?php $sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                        <option value="<?php echo $sectorss->sector_id?>">
                                                            <?php echo $sectorss->sector_name?></option>
                                                        <?php }?>

                                                    </select>



                                                </td>

                                                <td>Project</td>
                                                <td>
                                                    <select name="project_id" id="project_id" class="form-control">

                                                        <option value="">Select Project List</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <?php }?>
                                            <tr>

                                                <td>Sub Project</td>
                                                <td>
                                                    <select name="sub_project_id" id="sub_project_idss"
                                                        class="form-control">
                                                        <option value="">Select Sub Projects</option>
                                                        <?php 
foreach($doneSUB as $doneSUB){
?>
                                                        <option value="<?php echo $doneSUB->subproject_id;?>">
                                                            <?php echo $doneSUB->subproject_name;?></option>
                                                        <?php }?>

                                                    </select>
                                                </td>


                                                <td>Site Name</td>
                                                <td><select name="site_id" id="site_id" class="form-control">

                                                        <option value="">Select Site</option>

                                                    </select></td>
                                            </tr>
                                            <tr>
                                                <td>Module</td>
                                                <td><select name="modules" class="form-control">
                                                        <option value="">Select Module</option>
                                                        <option value="1">Construction Document</option>
                                                        <option value="2">Construction Lab Test</option>
                                                        <option value="3">External Monitoring</option>
                                                        <option value="4">Document Approval</option>
                                                        <option value="5">Saemer Document</option>



                                                        </option>

                                                    </select>
                                            <tr>
                                                <td><button type="submit" class="btn btn-block btn-outline btn-primary"
                                                        id="add" name="add" tabindex="2">Search Record</button></td>
                                            </tr>
                                        </table>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                </form>
                <?php 
                if(isset($_POST['add'])){
                    extract($_POST);
                    if($output){
                        $outputee="and f.`output_id`=$output";
                    }
                    if($sectors){
                        $sectorss="and e.`sector_id`=$sectors";
                    }
                    if($project_id){
                        $projectee="and d.`project_id`=$project_id";
                    }
                    if($sub_project_id){
                        $sub_project_idss="and c.`subproject_id`=$sub_project_id";
                    }
                    if($site_id){
                        $site_idss="and b.`sps_id`=$site_id";
                   }

                ?>
                <div class="col-sm-12">
                    <!-- Zero config.table start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Construction Documents</h5>
                            <span></span>

                        </div>
                        <div class="card-block">
                            <div class="dt-responsive table-responsive">
                                

                                <body>

                                    <h2>
                                        <center>Status of Environmental Safeguard Documents and Approvals- KPCIP
                                            (Updated July 21, 2023)</center>
                                    </h2>

                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-bordered nowrap table-striped">
                                            <tr style="background-color:#000;color:#fff">
                                                <th>S/No.</th>
                                                <th>Contract Name</th>
                                                <th>Environment  <br>Safeguards Category
                                                    ADB</th>
                                                <th>ADB & KPK  <br>EPA Clearance
                                                    Status</th>
                                                <th>Letter of Commencement Issued</th>
                                                <th>Start of Civil Works </th>
                                                <th>SSEMP Approval
                                                    Status</th>
                                                <th>SSHSMP Approval Status</th>
                                                <th>Action</th>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>KPCIP-CW-01: Lot 1: Pedestrianization of Market<br> in Old City Centre;
                                                    and Urban / Green Space Initiatives <br>
                                                    Sherwan Adventure Family Park, Abbottabad</td>
                                                <td>C
                                                    (EMP was prepared)</td>
                                                <td>ADB Clearance: Obtained<br>
                                                    KPK EPA NOC: NOC not required</td>
                                                <td>27 Oct, 2022</td>
                                                <td>Started</td>
                                                <td>
                                                    SSEMP has been approved.</td>
                                                <td>SSHSMPs has been approved</td>
                                                <td>
                                                    
                                                          <button type="button" class="btn btn-danger">
                                                         <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                         <font color="white">Click Here</font></a></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>KPCIP-CW-01: Lot 2: Urban / Green Space Initiatives Women’s
                                                <br> Business Development & Community Center; and<br>
                                                    Urban / Green Space Initiatives  <br> Sports Complex, Kohat</td>
                                                <td>C(EMP was prepared)<br>ADB Category  <br>of WBDC is changed to B.</td>
                                                <td>ADB Clearance: <br>
                                                    Obtained for Sports Complex. <br>


                                                    KPK EPA NOC: NOC not required
                                                </td>
                                                <td>27 Oct, 2022</td>
                                                <td>Started</td>
                                                <td>SSEMP of Kohat Sports Complex <br>has been approved.

                                                    SSEMP of WBDC is  <br>submitted to ADB<br> for further review on 21 June, 23.
                                                </td>
                                                <td>SSHSMP of Kohat Sports  <br>Complex approved.<br>

                                                    SSHSMP of WBDC is submitted to <br>ADB for further review on 21 June,
                                                    2023.</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>SSHSMP of Kohat Sports <br>Complex approved.

                                                    SSHSMP of WBDC is submitted <br>to ADB for
                                                    <br> further review on 21 June,
                                                    2023.

                                                </td>
                                                <td>C
                                                    (EMP was prepared
                                                </td>
                                                <td>ADB Clearance: Obtained<br>
                                                    KPK EPA NOC: NOC <br>not required
                                                </td>
                                                <td>NA</td>
                                                <td>NA</td>
                                                <td>NA</td>
                                                <td>NA</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>KPCIP-CW-01: Lot 4: Urban / Green Space Initiatives <br>Neighborhood
                                                    Park, Mingora

                                                </td>
                                                <td>C
                                                    (EMP was prepared)
                                                </td>
                                                <td>ADB Clearance: Obtained
                                                    KPK EPA</td>
                                                <td>8 Nov, 2022</td>
                                                <td>
                                                    Started
                                                </td>
                                                <td>SSEMP has been approved.</td>
                                                <td>SSHSMP has been approved</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td></td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>KPCIP-CW-01: Lot 5: Urban / Green initiatives <br> Besai Park Hayatabad
                                                    Peshawar; <br>Bagh-e-Naran Park <br>Extension,
                                                    Peshawar

                                                </td>
                                                <td>C
                                                    (EMP was prepared
                                                    )</td>
                                                <td>ADB Clearance: Obtained<br>
                                                    KPK EPA NOC: <br>NOC not required
                                                </td>
                                                <td>27 Oct, 2022

                                                </td>
                                                <td>Started</td>
                                                <td>SSEMP has been approved.</td>
                                                <td>SSHSMP has been approved</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>6</td>
                                                <td>KPCIP-CW-02: Lot 1:<br> Construction <br>of Abbottabad Water treatment plant
                                                </td>
                                                <td>B
                                                    (IEE was prepared)
                                                </td>
                                                <td>ADB Clearance: Obtained
                                                    KPK EPA NOC: NOC Issued
                                                </td>
                                                <td>Contractor no signed</td>
                                                <td>Not started yet</td>
                                                <td>SSEMP issubmitted by <br>PMCSC on 19 July,<br> 2023 however sent back to<br>
                                                    PMCSC for revision. Expected submission to<br>
                                                    ADB is on 25 July, 2023.</td>
                                                <td>SSHSMP issubmitted by<br> PMCSC on 23 June, 2023. <br>Expected submission to
                                                    ADB is on 25 July, 2023</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>7</td>
                                                <td>KPCIP-CW-02: Lot 2: Abbottabad Water<br> Distribution System</td>
                                                <td>B
                                                    (IEE was prepared)
                                                </td>
                                                <td>ADB Clearance: Obtained
                                                    KPK EPA NOC: NOC Issued
                                                </td>
                                                <td>June, 2023 (Tentative)</td>
                                                <td>Not started yet</td>
                                                <td>-do-</td>
                                                <td>-do-</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>

                                            </tr>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>KPCIP-CW-02: Lot 3: Construction of<br> Kohat water supply</td>
                                                <td>B
                                                    (IEE was prepared)
                                                </td>
                                                <td>ADB Clearance: Obtained
                                                    KPK EPA NOC: NOC not required
                                                </td>
                                                <td>
                                                    31 Jan, 2023
                                                </td>
                                                <td>Contractor mobilized <br>and joint assessment is initiated</td>
                                                <td>SSEMP issubmitted to ADB on 17 July, 2023</td>
                                                <td>SSHSMP approve by ADB.</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td>9</td>
                                                <td>KPCIP-CW-02: Construction of Peshawar Water Supply</td>
                                                <td>B
                                                    (IEE was prepared)
                                                </td>
                                                <td>ADB Clearance: Obtained
                                                    KPK EPA NOC: NOC not required

                                                </td>
                                                <td>31 Jan, 2023</td>
                                                <td>Contractor mobilized and joint <br>assessment is initiated.</td>
                                                <td>Revised SSEMP submitted to ADB on 27 <br>June for further review and
                                                    clearance</td>
                                                <td>SSHSMP approved by ADB.</td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>
                                            </tr>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>KPCIP-CW-03: Lot 1: </td>
                                                <td>B</td>
                                                <td>ADB </td>
                                                <td>31 Jan, 2023</td>
                                                <td>Contractor </td>
                                                <td>Revised SSEMP</td>
                                                <td>SSHSMP by </td>
                                                 <td>
                                                     <a href="<?php echo base_url('Enviroment/display_detail')?>">
                                                     <button type="button" class="btn btn-danger">Click Here</button>
                                                </td>
                                                </td>
                                            </tr>
                                            <tr>
  <td>11</td>
  <td>Construction of Kohat STP</td>
  <td>(IEE was prepared)</td>
  <td>Clearance: Obtained<br>
KPK EPA NOC: NOC is issued.
</td>
  <td></td>
  <td>mobilized and joint survey is in progress.</td>
  <td>submitted to ADB on 27 June for <br>further review<br> and clearance</td>
  <td>ADB.</td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>12</td>
  <td>KPCIP-CW-03: Lot 2: Construction of Mardan STP</td>
  <td>B
(IEE was prepared)
</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: NOC is issued.
</td>
  <td>
20 Dec, 2022
</td>
  <td>Contractor mobilized and joint <br>survey is in progress.</td>
  <td>Revised SSEMP submitted to ADB on<br> 27 June<br> for further review and clearance</td>
  <td>SSHSMP by ADB.</td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

  
</tr>
<tr>
  <td>13</td>
  <td>KPCIP-CW-04: Lot 1: Mingora Greater  <br>Water Supply Scheme 
    <br>including New Water Treatment Plant (WTP), <br> Intake Structure,<br> 
  Transmission, and Distribution  <br>Systems and SCADA:<br> Lot 1: Water Treatment Plant</td>
  <td>B
(IEE was prepared)
</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: NOC is issued.
</td>
  <td>No contract signed yet</td>
  <td>Not started yet</td>
  <td>-do-</td>
  <td>-do-</td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>14</td>
  <td>KPCIP-CW-04: Lot 2 Mingora Greater Water Supply <br>Scheme including New Water <br>Treatment Plant (WTP), 
  <br>Intake Structure, Transmission, and Distribution Systems <br> and SCADA: Lot 2:Water Distribution System, <br> Intake Structure and 
  <br>Transmission Main

</td>
  <td>B
(IEE was prepared)
</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: NOC is issued.
</td>
  <td>31 Jan, 2023</td>
  <td>Contractor mobilized and joint <br>survey is in progress.</td>
  <td>Revised SSEMP submitted to ADB on<br> 27 June for further review<br> and clearance</td>
  <td>SSHSMP by ADB.</td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>15</td>
  <td>KPCIP-CW-05: Procurement, Supply</td>
  <td>A
(EIA was</td>
  <td>ADB Clearance</td>
  <td>Not tendered yet, Expected </td>
  <td>Not started yet</td>
  <td></td>
  <td></td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>16</td>
  <td>Installation, Commissioning, and <br>Operations of <br>Solid Waste<br> Management System for Mardan</td>
  <td>prepared)</td>
  <td>Obtained
KPK EPA NOC: NOC is issued.
</td>
  <td>to start by Mid 2024</td>
  <td></td>
  <td></td>
  <td></td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>17</td>
  <td>KPCIP-CW-06: Construction of Urban / Green Spaces <br> Salhad Bagh, Abbottabad

</td>
  <td>C
(EMP was prepared)
</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: NOC not required
</td>
  <td>Not tendered yet, Expected to <br>start by Mid 2024</td>
  <td>Not started yet</td>
  <td></td>
  <td></td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>18</td>
  <td>KPCIP-CW-07: Procurement, Supply, Installation, 
    <br> Commissioning,<br> and Operations of  <br>Solid Waste Management System: 
Lot 1: Peshawar
</td>
  <td>A
(EIA was prepared)
</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: Issued
</td>
  <td>Not tendered yet, Expected to start by Mid 2024</td>
  <td>Not started yet</td>
  <td></td>
  <td></td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>19</td>
  <td>KPCIP-CW-07: Procurement, Supply, Installation,
    <br> Commissioning, and Operations 
    <br> of Solid Waste Management System: 
Lot 2: Kohat
</td>
  <td>B
(IEE was prepared
)</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: To be issued after public hearing.<br> Public hearing is expected in May, 2023.  
</td>
  <td>Not tendered yet, Expected to start by Mid 2024</td>
  <td>Not started yet</td>
  <td></td>
  <td></td>
  <td> <button type="button" class="btn-danger">Click Here</button></td> 

</tr>
<tr>
  <td>20</td>
  <td>KPCIP-CW-07: Procurement, Supply, Installation, <br>Commissioning, and Operations of Solid <br>Waste Management System: 
Lot 3: Mingora

</td>
  <td>A
(EIA was prepared)
</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: De-scoped
</td>
  <td>Not tendered yet, Expected to start by Mid 2024</td>

  <td>Not started yet</td>
  <td></td>
  <td></td>
  
  <td> <button type="button" class="btn-danger">Click Here</button></td> 
</tr>
<tr>
  <td>21</td>
  <td>KPCIP-CW-07: Procurement, Supply, Installation, <br>Commissioning, and Operations of Solid <br>Waste Management System:
Lot 4: Abbottabad
</td>
  <td>A
(EIA was prepared)
</td>
  <td>ADB Clearance: Obtained
KPK EPA NOC: issued 
</td>
  <td>Not tendered yet, Expected to start by Mid 2024</td>
  <td>Not started yet</td>
  <td></td>
  <td></td>
  
<td> <button type="button" class="btn-danger">Click Here</button></td> 
</tr>
</table>

                                </body>

                                </html>
                                <?php }?>