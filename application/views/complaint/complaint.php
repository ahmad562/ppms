
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <a href="<?php echo base_url()?>complaint/service_designation"><h4>Complaint</h4></a>


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
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>Complaint/complaint_insert" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">

                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td>Applicant Name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant name" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_name" tabindex="1"></td>
                                                        
                                                            <td>Applicant Address</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Address" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_address" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Applicant Mobile</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant Mobile" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_mobile" tabindex="1"></td>
                                                        
                                                            <td>Applicant CNIC</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Applicant CNIC" required
                                                                    id="cc" class="form-control"
                                                                    name="applicant_cnic" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Complaint Date</td>
                                                            <td><input type="date" autofocus
                                                                    placeholder="" required
                                                                    id="cc" class="form-control"
                                                                    name="complaint_date" tabindex="1"></td>
                                                        
                                                            <td>Complaint Category</td>
                                                           <td>
                <select name="cc_id" class="form-control">
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
                                                                    name="complaint_title" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td >Complaint Detail</td>
                                                            <td colspan="3"><textarea name="complaint_detail" class="form-control" ></textarea></td>
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
                        
	
	
	