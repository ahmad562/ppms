
<style type="text/css">
   
</style>
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper" >
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>DPS Detail</h4> -->
                                   <button class="btn btn-primary"><h4 class="text-white">Land Detail</h4></button>

                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body" id="larp_land_record">
                            
                            <div class="container">
                                <div class="card">
                                        <div class="card-block">
    <form method="POST">
<div class="row">
    
                   <div class="col-3">
                      <label>Project</label>
                                              <select name="project_id" id="project_id" class="form-control" onChange="get_subproject(this.value)" required>
                                                        <option>Select Project</option>
                                                            <?php $project=$this->db->query("select * from ppms_project")->result();
            foreach($project as $project){
            ?>
                                                            <option value="<?php echo $project->project_id;?>">
                                                                <?php echo $project->project_name;?></option>
                                                            <?php }?>
                                                        </select>
                </div>
                <div class="col-3">
               <label>Subproject</label>
                <select name="subproject_id" id="subproject_id" onChange="get_site(this.value)" class="form-control" required>
                    <option>Select Subproject</option>
                                                       
                                                        </select>
           </div>
                <div class="col-3">
               <label>Site</label>
                <select name="site_id" id="site_id" onChange="get_description(this.value)" class="form-control" required>
                                                        <option>Select Site</option>
                                                            
                                                        </select>
               </div>
                   <div class="col-3">
            <div style="margin-top: 27px;">
                <button class="btn btn-block btn-primary" name="search" class="form-control">Filter</button>
            </div>
               </div>
           </div>
       </form>
           <!-- end row -->

       </div>

       

                                </div>

                                 <!-- Table -->
                            </div>

                                          
                            
<?php if(isset($_POST['search'])){
 extract($_POST); ?>
         <?php 
        if(!empty($site_id)){
            $descr=$this->db->query("select * from ppms_ss_document_detail as dd,ppms_ss_land_detail as ld where dd.ss_doc_detail_id=ld.ss_doc_detail_id AND dd.project_id=$project_id AND dd.subproject_id=$subproject_id AND dd.site_id=$site_id")->result();?>
            <div class="container">
                                 <div class="row">
            <?php $cat=$this->db->query("select * from ppms_ss_document_detail as dd,ppms_ss_category as cd,ppms_project as pp,ppms_subproject as psp,ppms_subproject_site as pss where pp.project_id=$project_id AND pss.sps_id=$site_id AND psp.subproject_id=$subproject_id AND dd.ss_doc_category=cd.ss_category_id AND dd.project_id=$project_id AND dd.subproject_id=$subproject_id AND dd.site_id=$site_id")->row(); ?>
                                <!-- Table -->
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <div class="row">
                                                <div class="col-10">
                                                    <h4><?php echo $cat->project_name." ".$cat->subproject_name." "?></h4><h6><?php echo $cat->detail ?></h6>
                                                </div>
                                                <div class="col-2">
                                                    <button class="btn btn-primary" onclick="detail(<?php echo $cat->ss_doc_detail_id ?>)">Detail</button>
                                                </div>
                                            </div>
                                            
                                          
                                        </div>
                                        <div class="card-block">
                                            <h2 class="btn btn-lg btn-primary font-weight-bold">Document Type: <?php echo $cat->ss_category_name ?></h2>
                                        <h4 class="text-bold">Section</h4>
                                        <?php  
                                         
                  $sect = $this->db->query("SELECT * FROM ppms_ss_section as psdd,ppms_ss_document_detail as dd where dd.ss_doc_detail_id=psdd.ss_doc_detail_id AND dd.project_id=$project_id AND dd.subproject_id=$subproject_id AND dd.site_id=$site_id")->result(); 
                  $sec=1;
            foreach($sect as $section){?>
    <div class="dt-responsive table-responsive">
        <table id="simpletable"
                                                    class="table  nowrap w-75">
                                                    
                                                        <tr>
                                                            <th>Section Name</th>
                                                            <td><?php echo $section->ss_section_name ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Date</th>
                                                            <td><?php echo $section->ss_section_date ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>Remarks</th>
                                                            <td><?php echo $section->ss_section_remarks ?></td>
                                                        </tr>
                                                        <tr>
                                                            <th>File</th>
                                                            <td><a href="<?php echo base_url()?>img/<?php echo $section->ss_section_file_upload;?>"><img src="<?php echo base_url()?>img/down.png"
             width="30px" height="30px" /></a></td>
                                                        </tr>
                                                   
                                                    <tbody>
                                                        <?php
               error_reporting(0);?>
               
                 <tr class="gradeX">
        
                                                             </tr>
                                                         </tbody>
                                                        
</table>
                                            </div>
                                        <?php $sec++; } ?>
                                        </div>
                                    </div>
                                      </div>

                                 <!-- Table -->
                            </div>
                            </div>

              <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>DPS Detail</h4> -->
                                   <button class="btn btn-warning"><h4 class="text-white">Land</h4></button>

                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
            <?php $i=1;
            foreach($descr as $res){?>
                  <div class="container">
                                 <div class="row">
                                   
                                <!-- Table -->
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4><?php echo $res->ss_land_description ?></h4>
                                            <span></span>

                                        </div>
                                        <div class="card-block">

    <div class="dt-responsive table-responsive">
        <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Land Type</th>
                                                            <th>Khasra No</th>
                                                            <th>Kharsa Marla</th>
                                                            <th>Affected Marla</th>
                                                            <th>BOR unit rate</th>
                                                            <th>Kharsa Land</th>
                                                            <th>BOR Taxes</th>
                                                            <th>BOR Total Amount</th>
                                                            <th>BOR Payable Amount</th>
                                                            
                                                            <th>IVS unit rate</th>
                                                            <th>IVS Total Amount</th>
                                                            <th>IVS Payable Amount</th>
                                                            <th>Affected Land rate</th>
                                                            <th>IVS taxes</th>
                                                            
                                                            <th>Differential</th>
                                                            <th>BOR Cheque No</th>
                                                            <th>BOR Cheque Photo</th>
                                                            <th>IVS Cheque No</th>
                                                            <th>IVS Cheque Photo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $d=1; 
                  $dp=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_land_record as lr,ppms_ss_landtype as psl where
                  psl.landtype_id=lr.ss_landtype_id AND sd.ss_dp_id=lr.ss_dp_id AND lr.ss_landdetail_id=$res->ss_land_detail_id")->result();
                  $bor_taxes=$this->db->query("select * from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='BOR'")->result();
                  
                  foreach($dp as $result){
                     $ivs_ch=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_land_record as lr,ppms_ss_landtype as psl,ppms_ss_dp_payment_detail as ppd where
                  psl.landtype_id=lr.ss_landtype_id AND ppd.ss_dp_id=$result->ss_dp_id AND ppd.category_id=6 AND sd.ss_dp_id=lr.ss_dp_id AND lr.ss_landdetail_id=$res->ss_land_detail_id")->row();
                      $bor_ch=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_land_record as lr,ppms_ss_landtype as psl,ppms_ss_dp_payment_detail as ppd where
                  psl.landtype_id=lr.ss_landtype_id AND ppd.ss_dp_id=$result->ss_dp_id AND ppd.category_id=3 AND sd.ss_dp_id=lr.ss_dp_id AND lr.ss_landdetail_id=$res->ss_land_detail_id")->row();

                    ?>
                 <tr class="gradeX">
        <td><?php echo $d;?></td>
        <td><?php echo $result->ss_dp_fullname;?></td>
        <td><?php echo $result->landtype_name;?></td>
        <td><?php echo $result->ss_khasra_no;?></td>
        <td><?php echo $result->ss_totalqty;?></td>
        <td><?php echo $result->ss_total_area_affected;?></td>

        <td><?php echo $result->ss_lrecord_bor_unitrate;?></td>
       
        <!-- kharsa land -->
        <?php $bor_tax_percentage_2=$this->db->query("select *,sum(land_tax_percentage) as tot_land_percentage from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='BOR'")->row();
        if($bor_tax_percentage_2->tot_land_percentage>10){
                    $bor_percentage_2="1.".$bor_tax_percentage_2->tot_land_percentage;
                }else{
                    $bor_percentage_2="1.0".$bor_tax_percentage_2->tot_land_percentage;
              } 
        $x_bor_percentage=$result->ss_lrecord_bor_totalamount/$bor_percentage_2;
              echo "<td>".$x_bor_percentage."</td>";?>
        <td>
            <table class="table">
                <tr>
            <?php
             foreach($bor_taxes as $taxes){
                echo "<th>".$taxes->land_tax_name." ".$taxes->land_tax_percentage."</th>";
                 }?>
                 </tr>
             <tr>
                <!-- taxes -->
            <?php
    $bor_tax=$this->db->query("select * from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='BOR'")->result();
    $bor_tax_percentage=$this->db->query("select *,sum(land_tax_percentage) as tot_land_percentage from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='BOR'")->row();
             foreach($bor_tax as $bor_tax){
                if($bor_tax_percentage->tot_land_percentage>10){
                    $bor_percentage="1.".$bor_tax_percentage->tot_land_percentage;
                }else{
                    $bor_percentage="1.0".$bor_tax_percentage->tot_land_percentage;
              }
              $x_bor_percentage=$result->ss_lrecord_bor_totalamount/$bor_percentage;
               $l_value = ($x_bor_percentage * $bor_tax->land_tax_percentage)/100;
             echo "<td>".$l_value."</td>";
              }
             ?>
             </tr>
        </table></td>
         <td><?php echo $result->ss_lrecord_bor_totalamount;?></td>
        <td><?php echo $result->ss_lrecord_borpayableamount;?></td>
        <td><?php echo $result->ss_lrecord_ivs_unitrate;?></td>
        <td><?php echo $result->ss_lrecord_ivs_totalamount;?></td>
        <td><?php echo $result->ss_lrecord_ivspayableamount;?></td>
        
        <?php $ivs_tax_percentage_2=$this->db->query("select land_detail_id,doc_id,source_category,sum(land_tax_percentage) as tot_land_percentage from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='IVS'")->row();
                if($ivs_tax_percentage_2->tot_land_percentage>10){
                    $ivs_percentage_2="1.".$ivs_tax_percentage_2->tot_land_percentage;
                }else{
                    $ivs_percentage_2="1.0".$ivs_tax_percentage_2->tot_land_percentage;
              }
              $x_ivs_percentage_2=$result->ss_lrecord_ivs_totalamount/$ivs_percentage_2;
              echo "<td>".$x_ivs_percentage_2."</td>";?>
        <td>
            <table class="table">
                <tr>
            <?php
            $ivs_taxes=$this->db->query("select * from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='IVS'")->result();
             foreach($ivs_taxes as $ivs_taxes){
                echo "<th>".$ivs_taxes->land_tax_name." ".$ivs_taxes->land_tax_percentage."</th>";
                 }?>
                 </tr>
             <tr>
            <?php
    $ivs_tax=$this->db->query("select * from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='IVS'")->result();
    $ivs_tax_percentage=$this->db->query("select land_detail_id,doc_id,source_category,sum(land_tax_percentage) as tot_land_percentage from ppms_land_taxes where land_detail_id=$res->ss_land_detail_id AND doc_id=$cat->ss_doc_detail_id AND source_category='IVS'")->row();
             foreach($ivs_tax as $ivs_tax){
                if($ivs_tax_percentage->tot_land_percentage>10){
                    $ivs_percentage="1.".$ivs_tax_percentage->tot_land_percentage;
                }else{
                    $ivs_percentage="1.0".$ivs_tax_percentage->tot_land_percentage;
              }
              $x_ivs_percentage=$result->ss_lrecord_ivs_totalamount/$ivs_percentage;
               $v_value = ($x_ivs_percentage * $ivs_tax->land_tax_percentage)/100;
             echo "<td>".$v_value."</td>";
              }
              
             ?>
             </tr>
        </table></td>
        
        <td><?php echo ($result->ss_lrecord_ivs_totalamount - $result->ss_lrecord_bor_totalamount);?></td>
        <td><?php echo $bor_ch->cheque_no ?></td>
        <td><img src="<?php echo base_url()?>img/down.png"
             width="30px" height="30px" onClick="window.open('<?php echo base_url()?><?php echo $bor_ch->file;?>')" /></td>
              <td><?php echo $ivs_ch->cheque_no ?></td>
        <td><img src="<?php echo base_url()?>img/down.png"
             width="30px" height="30px" onClick="window.open('<?php echo base_url()?><?php echo $ivs_ch->file;?>')" /></td>
                                                             </tr>
                                                         </tbody>
                                                        <?php
                                                        $d++;
 
 }
  ?>
</table>
                                            </div>
                                        
                                        </div>
                                    </div>
                                      </div>

                                 <!-- Table -->
                            </div>
                            </div>

                  
            <?php
            $i++; 
        }
         
        $non_land=$this->db->query("select * from ppms_ss_document_detail as dd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as sn where dd.ss_doc_detail_id=non_lr.ss_doc_detail_id AND non_lr.ss_nonlandtype_id=sn.nonlandtype_id AND non_lr.ss_nonlandtype_id=1")->row();
        ?>

            <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>DPS Detail</h4> -->
                                   <button class="btn btn-warning"><h4 class="text-white">Non Land</h4></button>

                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                  <div class="container">
                                 <div class="row">
                                   
                                <!-- Table -->
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4><?php echo $non_land->nonlandtype_name ?></h4>
                                            <span></span>

                                        </div>
                                        <div class="card-block">

    <div class="dt-responsive table-responsive">
        <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Land Type</th>
                                                            <th>Affected Marla</th>
                                                            <th>BOR unit rate</th>
                                                            <th>BOR Total Amount</th>
                                                            <th>IVS unit rate</th>
                                                            <th>IVS Total Amount</th>
                                                            <th>Differential</th>
                                                            <th>BOR Cheque No</th>
                                                            <th>BOR Cheque Photo</th>
                                                            <th>IVS Cheque No</th>
                                                            <th>IVS Cheque Photo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

               error_reporting(0);
               $n=1; 
                  $dp_non=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as snl where sd.ss_dp_id=non_lr.ss_dp_id AND non_lr.ss_nonlandtype_id=snl.nonlandtype_id AND non_lr.ss_nonlandtype_id=1")->result();
                  foreach($dp_non as $result){
                    $bor_ch_n=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as snl,ppms_ss_dp_payment_detail as psdp where sd.ss_dp_id=non_lr.ss_dp_id AND psdp.ss_dp_id=$result->ss_dp_id AND psdp.category_id=3 AND non_lr.ss_nonlandtype_id=snl.nonlandtype_id AND non_lr.ss_nonlandtype_id=1")->row();
                    $ivs_ch_n=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as snl,ppms_ss_dp_payment_detail as psdp where sd.ss_dp_id=non_lr.ss_dp_id AND psdp.ss_dp_id=$result->ss_dp_id AND psdp.category_id=6 AND non_lr.ss_nonlandtype_id=snl.nonlandtype_id AND non_lr.ss_nonlandtype_id=1")->row();
                    ?>

                 <tr class="gradeX">
            <td><?php echo $n;?></td>
        <td><?php echo $result->ss_dp_fullname;?></td>
        <td><?php echo $result->nonlandtype_name;?></td>
        <td><?php echo $result->ss_nlrecord_totalqty;?></td>
        <td><?php echo $result->ss_nlrecord_borunitrate;?></td>
        <td><?php echo $result->ss_nlrecord_bortotalamount;?></td>
        <td><?php echo $result->ss_nlrecord_ivsunitrate;?></td>
        <td><?php echo $result->ss_nlrecord_ivstotalamount;?></td>
        <td><?php echo ($result->ss_nlrecord_ivstotalamount - $result->ss_nlrecord_bortotalamount );?></td>
        <td><?php echo $bor_ch_n->cheque_no ?></td>
        <td><a href="<?php echo base_url()?><?php echo $bor_ch_n->file;?>"><img src="<?php echo base_url()?>img/down.png"
             width="30px" height="30px" /></a></td>
              <td><?php echo $ivs_ch_n->cheque_no ?></td>
        <td><a href="<?php echo base_url()?><?php echo $ivs_ch_n->file;?>"><img src="<?php echo base_url()?>img/down.png"
             width="30px" height="30px" /></a></td>
                                                             </tr>
                                                         </tbody>
                                                        <?php
                                                        $n++;
 
 }
  ?>
</table>
                                            </div>
                                        
                                        </div>
                                    </div>
                                      </div>

                                 <!-- Table -->
                            </div>
          
                            </div>

                            <?php $non_land=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as snl where sd.ss_dp_id=non_lr.ss_dp_id AND non_lr.ss_nonlandtype_id=snl.nonlandtype_id AND non_lr.ss_nonlandtype_id=2")->row(); ?>
                            <div class="container">
                                 <div class="row">
                                   
                                <!-- Table -->
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4><?php echo $non_land->nonlandtype_name ?></h4>
                                            <span></span>

                                        </div>
                                        <div class="card-block">

    <div class="dt-responsive table-responsive">
        <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Land Type</th>
                                                            <th>Affected Marla</th>
                                                            <th>BOR unit rate</th>
                                                            <th>BOR Total Amount</th>
                                                            <th>IVS unit rate</th>
                                                            <th>IVS Total Amount</th>
                                                            <th>Total Land</th>
                                                            <th>BOR Cheque No</th>
                                                            <th>BOR Cheque Photo</th>
                                                            <th>IVS Cheque No</th>
                                                            <th>IVS Cheque Photo</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php

               error_reporting(0);
               $n=1; 
                  $dp_non=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as snl where sd.ss_dp_id=non_lr.ss_dp_id AND non_lr.ss_nonlandtype_id=snl.nonlandtype_id AND non_lr.ss_nonlandtype_id=2")->result();
                  foreach($dp_non as $result){
            $bor_ch_n_f=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as snl,ppms_ss_dp_payment_detail as psdp where sd.ss_dp_id=non_lr.ss_dp_id AND psdp.ss_dp_id=$result->ss_dp_id AND psdp.category_id=3 AND non_lr.ss_nonlandtype_id=snl.nonlandtype_id AND non_lr.ss_nonlandtype_id=2")->row();
        $ivs_ch_n_f=$this->db->query("select * from ppms_ss_db as sd,ppms_ss_nonland_record as non_lr,ppms_ss_nonlandtype as snl,ppms_ss_dp_payment_detail as psdp where sd.ss_dp_id=non_lr.ss_dp_id AND psdp.ss_dp_id=$result->ss_dp_id AND psdp.category_id=6 AND non_lr.ss_nonlandtype_id=snl.nonlandtype_id AND non_lr.ss_nonlandtype_id=2")->row();

                    ?>
                 <tr class="gradeX">
        <td><?php echo $n;?></td>
        <td><?php echo $result->ss_dp_fullname;?></td>
        <td><?php echo $result->nonlandtype_name;?></td>
        <td><?php echo $result->ss_nlrecord_totalqty;?></td>
        <td><?php echo $result->ss_nlrecord_borunitrate;?></td>
        <td><?php echo $result->ss_nlrecord_bortotalamount;?></td>
        <td><?php echo $result->ss_nlrecord_ivsunitrate;?></td>
        <td><?php echo $result->ss_nlrecord_ivstotalamount;?></td>
        <td><?php echo ($result->ss_nlrecord_ivstotalamount - $result->ss_nlrecord_bortotalamount);?></td>
        <td><?php echo $bor_ch_n_f->cheque_no ?></td>
        <td><a href="<?php echo base_url()?><?php echo $bor_ch_n_f->file;?>"><img src="<?php echo base_url()?>img/down.png"
             width="30px" height="30px" /></a></td>
              <td><?php echo $ivs_ch_n_f->cheque_no ?></td>
        <td><a href="<?php echo base_url()?><?php echo $ivs_ch_n_f->file;?>"><img src="<?php echo base_url()?>img/down.png"
             width="30px" height="30px" /></a></td>
                                                             </tr>
                                                         </tbody>
                                                        <?php
                                                        $n++;
 
 }
  ?>
</table>
                                            </div>
                                        
                                        </div>
                                    </div>
                                      </div>

                                 <!-- Table -->
                            </div>
          
                            </div>
                            
             <?php
              $allowances=$this->db->query("select * from ppms_ss_document_detail as dd,ppms_ss_allowances_detail as ad,ppms_ss_db as sd where ad.ss_dp_id=sd.ss_dp_id AND dd.ss_doc_detail_id=ad.ss_doc_detail_id AND dd.project_id=$project_id AND dd.subproject_id=$subproject_id AND dd.site_id=$site_id")->result();?>
                  <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>DPS Detail</h4> -->
                            <button class="btn btn-warning"><h4 class="text-white">Allowances</h4></button>
                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                  <div class="container">
                                 <div class="row">
                                   
                                <!-- Table -->
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Allowances</h4>
                                            <span></span>

                                        </div>
                                        <div class="card-block">

    <div class="dt-responsive table-responsive">
        <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Severity</th>
                                                            <th>Vulnerability</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               $d=1;
            foreach($allowances as $allowances){?>
         <tr class="gradeX">
        <td><?php echo $d;?></td>
        <td><?php echo $allowances->ss_dp_fullname;?></td>
        <td><?php echo $allowances->severity_total_amount;?></td>
        <td><?php echo $allowances->vulnerability_total_amount;?></td>
        
                                                             </tr>
                                                         </tbody>
                                                        <?php
                                                        $d++;
 
 }
  ?>
</table>
                                            </div>
                                        
                                        </div>
                                    </div>
                                      </div>

                                 <!-- Table -->
                            </div>
                            </div>

                  
            
                  
            <?php
            
                             }else{
                   echo "Error";
                                              } }else{
                          echo "Not found";
                                              }?>
                                             

                                   
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                
                                 <!-- Table -->
                            </div>
                            </div>
                           
                        </div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
   function get_subproject(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_subproject')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#subproject_id").html('<option value="">Select Subproject</option');
                        $("#subproject_id").html(data);
                       

                    }
                }
                );
            }
            function detail(id){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/larp_land_record')?>",
                    data: {
                        id: id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#larp_land_record").html(data); 
                    }
                }
                );
            }
            function get_site(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_site')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#site_id").html('<option value="">Select Site</option');
                        $("#site_id").html(data);
                    }
                }
                );
            }
            function get_description(iddd){
                var subproject_id= $("#subproject_id").val();
                var project_id = $("#project_id").val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_description')?>",
                    data: {
                        site_id: iddd,
                        subproject_id : subproject_id,
                        project_id : project_id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#description_id").html('<option value="">Select Description</option');
                        $("#description_id").html(data);
                       

                    }
                }
                );
            }

</script>

   

