
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
                                    <div class="col-sm-2">
                                        <div class="card gradient-1" style="background-color:green; border-top: white;">
                                <center>
                            <div class="card-body" >
                                <h6 class="card-title text-white" style="font-weight:bold;">Total <br> Staff<br><br></h6>
                                <div class="d-inline-block text-white">
                                     142
                                </div>
                                
                            </div>
                            </center>
                           </div>
                       </div>
                           <div class="col-sm-2">
                               <div class="card gradient-1" style="background-color:blue; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;">Individual <br>Consultant<br><br></h6>
                                <div class="d-inline-block text-white">
                                     38
                                </div>
                            </div>
                            </center>
                            
                           </div>
                           </div>
                           <div class="col-sm-2">
                               <div class="card gradient-1" style="background-color:orange; border-top: white;">
                            <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;">Incremental <br>Staff<br><br></h6>
                                <div class="d-inline-block text-white">
                                    104
                                </div>
                            </div>
                            </center>
                     
                           </div>
                           </div>
                           <div class="col-sm-2">
                            <div class="card gradient-1" style="background-color:lightcoral; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;">Male <br> Staff<br><br></h6>
                                <div class="d-inline-block text-white">
                                     110
                                </div>
                                
                            </div>
                            </center>
                           </div>
                       </div>
                           <div class="col-sm-2">
                            <div class="card gradient-1" style="background-color:pink; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h6 class="card-title" style="font-weight:bold;">Female <br> Staff<br><br></h6>
                                <div class="d-inline-block">
                                    32
                                </div>
                                
                            </div>
                            </center>
                           </div>
                           </div>
                           <div class="col-sm-2">
                            <div class="card gradient-1" style="background-color:red; border-top: white;">
                            <center>
                            <div class="card-body">
                                <h6 class="card-title  text-white" style="font-weight:bold;">Vacant <br> Position<br><br></h6>
                                <div class="d-inline-block text-white">
                                    38
                                </div>
                                
                            </div>
                            </center>
                           </div>
                           </div>
                                </div>
                            </div>
                            
                                <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Filter</h4>
                                        </div>
                                        
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id=""
                                                    class="table table-striped">
                                                <tr>
                                                    <td>Employee ID:</td>
                                                    <td>
                                                        
                                                    <input type="text" name="emp_id" class="form-control" placeholder="Enter Emp ID">
                                              </td>
                                                    <td>Organization:</td>
                                                    <td>
                                                        
                                                    <select name="organization_id" class="form-control">
                                                        <option>Select Organization</option>
                                                            <?php $organizations=$this->db->query("select * from organization")->result();
            foreach($organizations as $organizations){
            ?>
                                                            <option value="<?php echo $organizations->organization_id;?>">
                                                                <?php echo $organizations->organization_name;?></option>
                                                            <?php }?>
                                                        </select>
                                              </td>
                                              <td>
                                                  <button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="search" tabindex="2">Search</button>
                                              </td>
                                                </tr>
                                                        
                                                    </table>
                                              
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
                            <div class="container">
                            <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Services</h4>
                                        </div>
                                        
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">

                                               <tr>
                                               <th>Serial No</th>
                                               <th>Empolyee ID</th>
                                               <th>Full Name</th>
                                               <th>Designation</th> 
                                               <th>organization</th>  
                                               <th>Contract Start</th>
                                               <th>Contract End</th>
                                               <th>CNIC</th>
                                               <th>Contact No</th> 
                                               <th>Edit</th>     
                                                                </tr>
                                                            <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>Haris jan</td>
                                            <td>Web Developer</td>
                                            <td>CEC</td>
                                            <td>2 May 2023</td>
                                            <td>30 Aug 2023</td>
                                            <td>123456789</td>
                                            <td>03109570106</td>
                                            <td>Edit</td>
                                            </tr>
                                            <tr>
                                            <td>1</td>
                                            <td>2</td>
                                            <td>Kifayatullah</td>
                                            <td>Web Developer</td>
                                            <td>CEC</td>
                                            <td>2 May 2023</td>
                                            <td>30 Aug 2023</td>
                                            <td>123456789</td>
                                            <td>03369570106</td>
                                            <td>Edit</td>
                                            </tr>
                                                    </table>
                                              
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
                                
                        </div>
