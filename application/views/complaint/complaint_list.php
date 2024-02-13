
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="container">
                                    <div class="row">
                                     <div class="col-9">
                                            <h4>Complaints List Tier 1</h4>
                                        </div>
                                        <div class="col-3">
                                        <a href="<?php echo base_url()?>Complaint/complaint" class="btn btn-primary">Add New Complaint</a>
                                        </div>
                                    </div>
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
                                            <h5>Complaint Records</h5>
                                            <span></span>
                                        
                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">

                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>Applicant Name</th>
                                                            <th>Applicant Address</th>
                                                            <th>Applicant Mobile</th>
                                                            <th>Applicant CNIC</th>
                                                            <th>Complaint Date</th>
                                                            <th>Complaint Category</th>
                                                            <th>Source</th>
                                                            <th>SubProject</th>
                                                            <th>Tehsil</th>
                                                            <th>Complaint Title</th>
                                                            <th>Complaint Detail</th>
                                                            <th>Tier</th>
                                                            <th>Status</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,tehsil AS th,grm_tier_tbl As t,grc_status_tbl As gs where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND th.tehsil_id=gcd.tehsil_id AND t.tier_id=gcd.tier_id AND gs.status_id=gcd.status_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>
                        <td><?php echo $item->applicant_name?></td>
                        <td><?php echo $item->applicant_address?></td>
                        <td><?php echo $item->applicant_mobile?></td>
                        <td><?php echo $item->applicant_cnic?></td>
                        <td><?php echo $item->complaint_date?></td>
                        <td><?php echo $item->cc_name?></td>
                        <td><?php echo $item->source_name?></td>
                        <td><?php echo $item->subproject_name?></td>
                        <td><?php echo $item->tehsil_name?></td>
                        <td><?php echo $item->complaint_title?></td>
                        <td><?php echo $item->complaint_detail?></td>
                        <td><?php echo $item->tier_name?></td>
                        <td><?php echo $item->status_name?></td>

        <td><a href="<?php echo base_url()?>Complaint/edit_complaint/<?php echo $item->complaint_detail_id;?>">
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
                        
	
	
	