<div class="pcoded-content">
                    <div class="pcoded-inner-content">

<!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Employees</h4>
                    <span></span>
                </div>
                <div class="page-header-breadcrumb">
                    <ul class="breadcrumb-title">
                        <li class="breadcrumb-item">
                            <a href="index.html">
                                <i class="icofont icofont-home"></i>
                            </a>
                        </li>
                       
                    </ul>
                </div>
            </div>
            <!-- Page header end -->
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                    <div class="card">
                  <?php if($this->session->flashdata('msg')){?>
                <div class="alert alert-success" role="alert">
                <?php echo $this->session->flashdata('msg');?>
                  </div>
                  <?php }?>
                        <!-- Date card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Add New Employee</h5>
                               
                            </div>
                            <div class="card-block">
                            <form method="post" action="<?php echo base_url('Emp/insert_emp')?>"
                                    enctype="multipart/form-data"> 
                            <table class="table table-border">
                                            <tbody>
                                                <tr>
                                                    <td>Emp Name</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <input type="text" placeholder="Enter Employee Name "
                                                                id="emp_name" class="form-control " name="emp_name"
                                                                autofocus tabindex="1" required>
                                                        </div>
                                                    </td>
                                                    <td>Designation</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <select name="designation_id" class="form-control">

                                                                <option value="">Select Designation</option>
                                                                <?php $done=$this->db->query("select designation_id,designation_name from designation")->result();
			foreach($done as $desig){
			?>
                                                                <option value="<?php echo $desig->designation_id;?>">
                                                                    <?php echo $desig->designation_name;?></option>
                                                                <?php }?>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Phone</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <input type="text" placeholder="Enter Phone" id="phone"
                                                                class="form-control username" name="phone" tabindex="3"
                                                                required>
                                                        </div>
                                                    </td>
                                                    <td>Email</td>
                                                    <td>
                                                        <div class="form-group">
                                                            <input type="text" placeholder="Enter Email" id="email"
                                                                class="form-control username" name="email" tabindex="5"
                                                                required>
                                                        </div>
                                                    </td>
                                                </tr>
                                               
                                                <tr>
                                                    <td>Gender</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <select name="gender" id="gender" class="form-control"
                                                                tabindex="11">
                                                                <option value="male">Male</option>
                                                                <option value="female">Female</option>
                                                                <option value="other">Other</option>

                                                            </select>
                                                        </div>
                                                    </td>
                                                    <td>Marrital Status</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <select name="marital_status" id="marital_status"
                                                                class="form-control" tabindex="12">
                                                                <option value="Married">Married</option>
                                                                <option value="UnMarried">UnMarried</option>


                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    <td>Current Address</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <textarea name="caddress" id="caddress" class="form-control"
                                                                tabindex="13"></textarea>
                                                        </div>
                                                    </td>
                                                    <td>Permanent Address</td>
                                                    <td>
                                                        <div class="form-group has-error">

                                                            <textarea name="paddress" id="paddress" class="form-control"
                                                                tabindex="14"></textarea>
                                                        </div>
                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Picture</td>
                                                    <td><input type="file" name="Pict_upload" id="Pict_upload"
                                                            class="form-control" tabindex="10"></td>
                                                    <td>Password</td>
                                                    <td><input type="password" placeholder="Enter Password" required
                                                            id="password" class="form-control" name="password"></td>

                                                </tr>
                                                <tr>
                                                    <td>Group</td>
                                                    <td>

                                                        <select name="group" class="form-control">
                                                            <?php $done=$this->db->query("select * from usr_group")->result();
			foreach($done as $desig){
			?>
                                                            <option value="<?php echo $desig->group_id;?>">
                                                                <?php echo $desig->group_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>

                                                    <td>Organization</td>
                                                    <td>
                                                        
                                                    <select name="organization_id" class="form-control">
                                                            <?php $organizations=$this->db->query("select * from organization")->result();
			foreach($organizations as $organizations){
			?>
                                                            <option value="<?php echo $organizations->organization_id;?>">
                                                                <?php echo $organizations->organization_name;?></option>
                                                            <?php }?>
                                                        </select>



                                                </tr>
                                                <tr>
                                                    <td>Department</td>
                                                    <td>
                                                        <select name="department_id" class="form-control">

                                                            <option value="">Select Department</option>
                                                            <?php $done=$this->db->query("select * from department")->result();
			foreach($done as $desig){
			?>
                                                            <option value="<?php echo $desig->department_id;?>">
                                                                <?php echo $desig->department_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                    <td>City</td>
                                                    <td>
                                                        <select name="city_id" class="form-control"
                                                           >

                                                            <option value="">Select City</option>
                                                            <?php $cities=$this->db->query("select * from city")->result();
			foreach($cities as $citiess){
			?>
                                                            <option value="<?php echo $citiess->city_id;?>">
                                                                <?php echo $citiess->city_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="table table-border">
                                            <tbody id="dis_circles">

                                            </tbody>



                                            <?php /*?>
                                            <td>Circle Office</td>

                                            <td>
                                                <select name="district" class="form-select shadow-none mt-3"
                                                    multiple="multiple" style="height: 36px; width: 100%">

                                                    <option value="">Select Circle Office</option>
                                                    <?php $done=$this->db->query("select * from district")->result();
			foreach($done as $desig){
			?>
                                                    <option value="<?php echo $desig->district_id;?>">
                                                        <?php echo $desig->district_name;?></option>
                                                    <?php }?>
                                                </select><?php */?>
                                            </td>
                                            </td>

                                            </tr>

                                            <tr>
                                                <td><input type="submit" class="btn btn-danger" value="Save Record"
                                                        name="add" tabindex="6"></td>
                                            </tr>
                                        </table>
                                </form>






                            </div>
                        </div>
                        <!-- Date card end -->
                    </div>
                   
                </div>
              
                
            </div>
            <!-- Page body end -->
        </div>
    </div>
    <!-- Main body end -->