
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">
                <?php $result1 = $this->db->query("SELECT * FROM gre_applicant AS ga,grm_complaint_category As gcc,gre_complaint_detail As gcd,grm_source_tbl As s,ppms_subproject As ps,tehsil As th,grm_tier_tbl As t,grc_status_tbl As gs where ga.applicant_id=gcd.applicant_id AND gcc.cc_id=gcd.complaint_category_id AND s.source_id=gcd.source_id AND ps.subproject_id=gcd.sub_project_id AND th.tehsil_id=gcd.tehsil_id AND t.tier_id=gcd.tier_id AND gs.status_id=gcd.status_id AND gcd.complaint_detail_id=$aid")->row(); ?>
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <h4>Display Complaints</h4>


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
                                            <h5>Add New Complaint</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>Complaint/complaint_update" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
    <input type="hidden" autofocus placeholder="" required id="cc" class="form-control" name="applicant_id" value="<?php echo $result1->applicant_id; ?>" tabindex="1">
    <input type="hidden" autofocus placeholder="" required id="cc" class="form-control" name="complaint_detail_id" value="<?php echo $result1->complaint_detail_id; ?>" tabindex="1">

                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td>Applicant Name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant name" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_name" value="<?php echo $result1->applicant_name; ?>" tabindex="1"></td>
                                                        
                                                            <td>Applicant Address</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Address" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_address" tabindex="1" value="<?php echo $result1->applicant_address; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Mobile</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Mobile" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_mobile" tabindex="1" value="<?php echo $result1->applicant_mobile; ?>"></td>
                                                        
                                                            <td>Applicant CNIC</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant CNIC" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_cnic" tabindex="1" value="<?php echo $result1->applicant_cnic; ?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Complaint Date</td>
                                                            <td><input type="date" autofocus
                                                                    placeholder="" required
                                                                    id="cc" class="form-control"
                                                                    name="complaint_date" tabindex="1" value="<?php echo $result1->complaint_date; ?>"></td>
                                                        
                                                            <td>Complaint Category</td>
                                                           <td>
                <select name="cc_id" class="form-control">
                <option value="<?php echo $result1->cc_id;?>"><?php echo $result1->cc_name; ?></option>
                <option value="">Select Complaint Category</option>
        <?php $cc=$this->db->query("select * from grm_complaint_category")->result();
            foreach($cc as $cc){
            ?>
                                                                <option
                                                                    value="<?php echo $cc->cc_id;?>">
                                                                    <?php echo $cc->cc_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                        
                                                        <tr>
                                                            <td>Source</td>
                                                           <td>
                <select name="source_id" class="form-control">
                <option value="<?php echo $result1->source_id;?>"><?php echo $result1->source_name; ?></option>
                <option value="">Select Source</option>
        <?php $src=$this->db->query("select * from grm_source_tbl")->result();
            foreach($src as $src){
            ?>
                                                                <option
                                                                    value="<?php echo $src->source_id;?>">
                                                                    <?php echo $src->source_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        
                                                            <td>SubProject</td>
                                                           <td>
                <select name="subproject_id" class="form-control">
                <option value="<?php echo $result1->subproject_id;?>"><?php echo $result1->subproject_name; ?></option>
                <option value="">Select SubProject</option>
        <?php $ps=$this->db->query("select * from ppms_subproject")->result();
            foreach($ps as $ps){
            ?>
                                                                <option
                                                                    value="<?php echo $ps->subproject_id;?>">
                                                                    <?php echo $ps->subproject_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                         <tr>
                                                            <td>Tehsil</td>
                                                             <td>
                                                                 <select name="tehsil_id" class="form-control">
                                                                    <option value="<?php echo $result1->tehsil_id;?>"><?php echo $result1->tehsil_name; ?></option>
                                              <option>Select Tehsil</option>
                                                                <?php $tehsil=$this->db->query("select * from tehsil")->result();
                                               foreach($tehsil as $tehsil){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $tehsil->tehsil_id;?>">
                                                                    <?php echo $tehsil->tehsil_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                        
                                                            <td>Complaint Title</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Complaint Title" required
                                                                    id="cc" class="form-control"
                                                                    name="complaint_title" tabindex="1" value="<?php echo $result1->complaint_title;?>"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Complaint Detail</td>
                                                            <td colspan="3"><textarea name="complaint_detail" class="form-control" value=""><?php echo $result1->complaint_detail;?></textarea></td>
                                                         </tr>
                                                            <td><button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                       
                                                    </table>
                                                </form>
                                            </div>
                                        </div>


                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>





                            </div>

                        </div>
                        
	
	
	