<?php $result = $this->db->query("SELECT * FROM ppms_ss_db as psd,ppms_dp_status as pds,ppms_dp_city as pdc where pdc.city_id=psd.city_id AND pds.ss_dp_status_id=psd.ss_dp_status_id And psd.ss_dp_id=$aid")->row(); ?>
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
                        <div class="page-body" style=" margin-top:-50px ;">
                          <!--   <div>
                                
                           
                            <table class="table nowrap" style="margin-bottom: -50px; margin-top:-50px ;">
                                            <tr>
                                                <td> -->
                           
                    
                      <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Edit DP info</h4>
                                        </div>
                                        <form method="POST" action="<?php echo base_url() ?>Complaint/update_ss">
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id=""
                                                    class="table">
                                                    <tbody>
    <input type="hidden" name="ss_dp_id" class="form-control" value="<?php echo $result->ss_dp_id ?>">
                                                <tr>
                                                    <td>Full Name:</td>
                                                    <td><input type="text" name="full_name" class="form-control" value="<?php echo $result->ss_dp_fullname ?>">
                                              </td>
                                                    <td>Father/husband Name:</td>
                                                    <td><input type="text" name="fh_name" class="form-control" value="<?php echo $result->ss_dp_fh ?>"></td>
                                         
                                              <td>CNIC:</td>
                                              <td><input type="text" name="cnic" class="form-control" value="<?php echo $result->ss_dp_cnic ?>"></td>
                                          </tr>
                                          <tr>
                                              <td>City:</td>
                                             <td><select name="city_id" class="form-control">
                    <option value="<?php echo $result->city_id;?>"><?php echo $result->city_name;?></option>
                <option value="">Select city</option>
        <?php $city=$this->db->query("select * from ppms_dp_city")->result();
            foreach($city as $city){
            ?>
                                                                <option
                                                                    value="<?php echo $city->city_id;?>">
                                                                    <?php echo $city->city_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select></td>
                                              <td>Status:</td>
                                             <td>
                                                <select name="status_id" class="form-control">
                <option value="<?php echo $result->ss_dp_status_id;?>"><?php echo $result->ss_dp_status_name;?></option>
                <option value="">Select Status</option>
        <?php $ps=$this->db->query("select * from ppms_dp_status")->result();
            foreach($ps as $ps){
            ?>
                                                                <option
                                                                    value="<?php echo $ps->ss_dp_status_id;?>">
                                                                    <?php echo $ps->ss_dp_status_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select></td> 
                                          
                                             <td>Address:</td>
                                             <td><textarea cols="3" name="address" class="form-control"><?php echo $result->ss_dp_address?></textarea></td>
                                             <td></td>
                                          </tr>
                                          </tbody>     
                                                    </table>
                                                    <button class="btn btn-primary" name="submit">Submit</button>
                                              
                                            </div>
                                        </div>


                            </form>


                                   
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                
                                 <!-- Table -->
                            </div>
                            </div>
                           
                        </div>
