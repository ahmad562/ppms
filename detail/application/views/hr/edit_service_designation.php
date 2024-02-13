
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">
<?php $result = $this->db->query("SELECT * FROM ppms_service_designation_tbl AS psd, s_designation AS sd,ppms_service_type_tbl AS pst,organization AS o Where psd.std_id=pst.std_id AND sd.d_id=psd.d_id AND psd.organization_id=o.organization_id AND sd_id=$aid")->row();
                   ?>
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>Display status</h4> -->


                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Service Desigantion</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>Service Type</th>
                                                            <th>Organization</th>
                                                            <th>Service Type Position</th>
                                                            <th>Service Designation</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_service_designation_tbl AS psd,ppms_service_type_tbl AS pst,s_designation AS sd,organization AS o Where pst.std_id=psd.std_id AND sd.d_id=psd.d_id AND o.organization_id=psd.organization_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>


        <td><?php echo $item->std_name;?></td>
        <td><?php echo $item->organization_name;?></td>
        <td><?php echo $item->std_position;?></td>
        <td><?php echo $item->d_name;?></td>
        <td><a href="<?php echo base_url()?>complaint/edit_service_designation/<?php echo $item->sd_id;?>">
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



                                <div class="col-sm-6">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Edit Service designation</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>complaint/update_service_designation" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="hidden" autofocus
placeholder="" value="<?php echo $result->sd_id;?>"
                                                                    class="form-control"
                                                                    name="sd_id" tabindex="1">
                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td>Service Type</td>
                                                           <td>
                <select name="std_id" class="form-control">
                    <option value="<?php echo $result->std_id;?>"><?php echo $result->std_name;?></option>
                <option value="">Select Service Type</option>
        <?php $cc=$this->db->query("select * from ppms_service_type_tbl")->result();
            foreach($cc as $cc){
            ?>
                                                                <option
                                                                    value="<?php echo $cc->std_id;?>">
                                                                    <?php echo $cc->std_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                            <tr>
                                                            <td>Organization</td>
                                                           <td>
                <select name="organization_id" class="form-control">
                    <option value="<?php echo $result->organization_id;?>"><?php echo $result->organization_name;?></option>
                <option value="">Select Service Type</option>
        <?php $organization=$this->db->query("select * from organization")->result();
            foreach($organization as $organization){
            ?>
                                                                <option
                                                                    value="<?php echo $organization->organization_id;?>">
                                                                    <?php echo $organization->organization_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                        <tr>

                                                            <td>Service Type Position</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter Service Type" value="<?php echo $result->std_position;?>" required
                                                                    id="" class="form-control"
                                                                    name="std_position" tabindex="1"></td>
                                                        </tr>
                                                        <tr>

                                                            <td>Service Designation</td>
                                                           <td>
                <select name="sd_id" class="form-control">
                <option value="<?php echo $result->d_id;?>"><?php echo $result->d_name;?></option>
                <option value="">Select Service Designation</option>
        <?php $designation=$this->db->query("select * from s_designation")->result();
            foreach($designation as $designation){
            ?>
                                                                <option
                                                                    value="<?php echo $designation->d_id;?>">
                                                                    <?php echo $designation->d_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                        </tr>
                                                        <tr>
                                                            <td><button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                        </tr>
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
