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
   
   $orgName=$this->db->query("SELECT e.emp_id,e.emp_name,o.organization_name,
   o.organization_id,o.order_by
   FROM
   emp AS e,organization AS o
   WHERE e.organization_id=o.organization_id 
   and e.emp_id=$empiD")->row();
  /// echo $this->db->last_query();
   ?>
        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                   
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
                                   
<h5>Add Social Safegaurd Status</h5>

                                </div>
                               
                        <!-- Zero config.table start -->
                        <div class="card">
                           
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">

                                            <table class="table gridexample">
                                                <tr>
                                                    <td>Document Name</td>
                                                    <td><input type="text" autofocus placeholder="Enter document "
                                                            required id="document" class="form-control"
                                                            name="document" tabindex="1"></td>
                                               
                                                    <td>status</td>
                                                    <td>
                                                        <select name="status" class="form-control">
                                          <option>Select Status</option>        <option>Submitted</option>        
                                        <option>Approved</option>                   
                                                            
                                                        </select>
                                                        
                                                    </td>
                                                </tr>

                                                
                                                     <tr>
                                                    <td>submited date</td>
                                                    <td><input type="date" placeholder="Enter submited Date"
                                                            required id="end_date" class="form-control"
                                                            name="end_date" tabindex="1"></td>
                                                            
                                         <td>Attached</td>
                                                    <td><input type="file" autofocus placeholder="Enter status "
                                                            required id="status" class="form-control"
                                                            name="status" tabindex="1"></td>                    
                                                </tr>
                                               <tr> 
                                               <td>Remarks</td>
                                               <td colspan="3"><textarea name="remarks" class="form-control"></textarea></td>                    
                                                </tr>
                                                   
                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Save Record</button></td>
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