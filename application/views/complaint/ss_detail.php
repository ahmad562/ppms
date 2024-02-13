
<style type="text/css">
   
</style>
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>DPS Detail</h4> -->


                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body" style=" margin-top:-75px ;">
                          <!--   <div>
                                
                           
                            <table class="table nowrap" style="margin-bottom: -50px; margin-top:-50px ;">
                                            <tr>
                                                <td> -->
                            
                            
                            
                        <?php $row = $this->db->query("SELECT * FROM ppms_ss_document_detail as psdd,ppms_sector as ps,ppms_ss_category as psc ,ppms_project as pp,ppms_subproject as psp,ppms_subproject_site as pss where psdd.sector_id=ps.sector_id AND psdd.project_id=pp.project_id AND psdd.site_id=pss.sps_id AND psdd.subproject_id=psp.subproject_id AND psdd.ss_doc_category=psc.ss_category_id AND ss_doc_detail_id=$aid")->row(); ?>
                            <div class="container">
                                <div class="row">
                                   
                           <div class="col-sm-6">
                            <a href="#" onClick="larp(1)">
                               <div class="card gradient-1" style="background-color:blue; border-top: white;" >
                                <center>
                            <div class="card-body">
                                <h4 class="card-title text-danger" style="font-weight:bold;" >Sector</h4>
                                <h6 class="card-title text-white" style="font-weight:bold;" ><?php echo $row->sector_name ?></h6>
                                
                            </div>
                            </center>
                           
                            
                           </div>
                            </a>
                        </div>
                           <div class="col-sm-6">
                               <div class="card gradient-1" style="background-color:orange; border-top: white;">
                            <center>
                            <div class="card-body">
                                <h4 class="card-title text-danger" style="font-weight:bold;">Project</h4>
                                <h6 class="card-title text-white" style="font-weight:bold;"><?php echo $row->project_name ?></h6>
                                
                            </div>
                            </center>
                     
                           </div>
                           </div>
                           <div class="col-sm-6">
                            <div class="card gradient-1" style="background-color:green; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h4 class="card-title text-danger" style="font-weight:bold;">Subproject</h4>
                               <h6 class="card-title text-white" style="font-weight:bold;"><?php echo $row->subproject_name ?></h6>
                                
                            </div>
                            </center>
                           </div>
                       </div>
                           <div class="col-sm-6">
                            <div class="card gradient-1" style="background-color:dimgrey; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h4 class="card-title text-danger" style="font-weight:bold;">Site</h4>
                                <h6 class="card-title text-white" style="font-weight:bold;"><?php echo $row->site_name ?></h6>
                                
                            </div>
                            </center>
                           </div>
                           </div>
                           </div>
                           
                                 <div class="row">
                                    
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Section</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Name</th>
                                                            <th>Date</th>
                                                            <th>Remarks</th>
                                                            <th>File</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_section as psdd where ss_doc_detail_id=$aid")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_section_name;?></td>
        <td><?php echo $item->ss_section_date;?></td>
        <td><?php echo $item->ss_section_remarks;?></td>
        <td><a href="<?php echo base_url()?>img/<?php echo $item->ss_section_file_upload;?>"><img src="<?php echo base_url()?>img/down.PNG"
             width="40px" height="40px" /></a></td>
        
       <td><a href="<?php echo base_url()?>complaint/edit_section/<?php echo $item->ss_section_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a>
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
                                   <div class="row">
                                   <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Land Record</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Description</th>
                                                           
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result3 = $this->db->query("SELECT * FROM ppms_ss_land_detail as psld where psld.ss_doc_detail_id=$aid")->result();
                  foreach($result3 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_land_description;?></td>
        <td>
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a>
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


                                </div>
                                 
                            </div>
                        </div>
                                   
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                
                                 <!-- Table -->
                            </div>
                            </div>
                           
                        


   