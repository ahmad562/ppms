<?php $result = $this->db->query("SELECT * FROM ppms_ss_section where ss_section_id=$aid")->row(); ?>
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
                                        <form method="POST" action="<?php echo base_url() ?>Complaint/update_section">
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id=""
                                                    class="table">
                                                    <tbody>
    <input type="hidden" name="ss_section_id" class="form-control" value="<?php echo $result->ss_section_id ?>">
                                                <tr>
                                                     <td><label>Name:</label>
                                <input type="text" name="name[]" class="form-control" id="example-search-input" value="<?php echo $result->ss_section_name ?>">
                                              </td>
                                                    <td><label>Date:</label>
                                    <input type="date" name="date[]" value="<?php echo $result->ss_section_date ?>" class="form-control">
                                              </td>
                                         </tr>
                                          <tr>
                                              <td><label>file:</label>
                                    <input type="file" name="files" class="form-control" ><img src='<?php echo base_url()?>img/<?php echo $result->ss_section_file_upload ?>' width='150px' height='150px'>
                                              </td>
                                          
                                               <td><label>Remarks:</label>
                        <input type="text" name="remarks[]" value="<?php echo $result->ss_section_remarks ?>" class="form-control">
                                              </td>
                                             
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
