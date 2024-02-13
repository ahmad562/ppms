<div class="pcoded-content">
    <div class="pcoded-inner-content">

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

                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Employee Details</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">

                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url()?>Procurement/insert_service"
                                            autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
                                            <div class="row">
                                                <div class="col-sm-9">
                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td>Full Name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter full Name" required id=""
                                                                    class="form-control" name="full_name" tabindex="1">
                                                            </td>
                                                            <td>Father Name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter Father Name" required id=""
                                                                    class="form-control" name="father_name" tabindex="1">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        <td>Date of Birth</td>
                                                            <td><input type="date" autofocus placeholder="Date of Birth"
                                                                     id="" class="form-control" name="dob"
                                                                    tabindex="1"></td>
                                                            <td>Employee No</td>
                                                            <td><input type="text" autofocus placeholder="Employee No"
                                                                     id="" class="form-control" name="emp_noy"
                                                                    tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contract Award Date</td>
                                                            <td><input type="date" autofocus required id=""
                                                                    class="form-control" name="cad" tabindex="1"></td>

                                                            <td>Contract End Date</td>
                                                            <td><input type="date" autofocus  id=""
                                                                    class="form-control" name="ced" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact No</td>
                                                            <td><input type="text"  placeholder="Contact No"
                                                                    required id="" class="form-control"
                                                                    name="contact_no" tabindex="1">
                                                            </td>

                                                            <td>Service Designation</td>
                                                            <td>
                                                               <?php /*?> <select name="sd_id" class="form-control">
                                                                    <option value="">Select Service Designation</option>
                                                                    <?php $designation=$this->db->query("select * from ppms_service_designation_tbl")->result();
            foreach($designation as $designation){
            ?>
                                                                    <option value="<?php echo $designation->sd_id;?>">
                                                                        <?php echo $designation->designation_name;?>
                                                                    </option>
                                                                    <?php }?>
                                                                </select>
                                                                <?php */?>

         <input list="sd_id" name="sd_id" id="sd_id" class="form-control">

<datalist id="sd_id">
<?php $designation=$this->db->query("select distinct designation_name from ppms_service_tbl")->result();
            foreach($designation as $designation){
            ?>
  <option value="<?php echo $designation->designation_name;?>">
 <?php }?>
</datalist>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Organization</td>
                                                            <td>
                                                                <select name="organization_id" class="form-control">
                                                                    <option value="">Select Organization</option>
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

                                                            <td>CNIC</td>
                                                            <td><input type="text" autofocus placeholder="CNIC" required
                                                                    id="" class="form-control" name="cnic" tabindex="1">
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td>Gender</td>
                                                            <td>
                                                                <select name="gender_id" class="form-control">
                                                                    <option value="">Select Gender</option>
                                                                    <?php $gender=$this->db->query("select * from ppms_gender_tbl")->result();
            foreach($gender as $gender){
            ?>
                                                                    <option value="<?php echo $gender->gender_name;?>">
                                                                        <?php echo $gender->gender_name;?>
                                                                    </option>
                                                                    <?php }?>
                                                                </select>
                                                            </td>

                                                            <td>Salary</td>
                                                            <td><input type="text" autofocus placeholder="Salary"
                                                                    required id="" class="form-control" name="salary"
                                                                    tabindex="1" value="0"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Service Type</td>
                                                            <td>
                                                                <select name="std_id" class="form-control">
                                                                    <option value="">Select Service Type</option>
                                                                    <?php $cc=$this->db->query("select * from ppms_service_type_tbl")->result();
            foreach($cc as $cc){
            ?>
                                                                    <option value="<?php echo $cc->std_id;?>">
                                                                        <?php echo $cc->std_name;?>
                                                                    </option>
                                                                    <?php }?>
                                                                </select>
                                                            </td>
                                                            <td>Loan/Grant</td>
                                                            <td>
                                                                <select name="loan_grant" class="form-control">
                                                                  

                                                                    <option value="Loan" selected>
                                                                        Loan
                                                                    </option>
                                                                    <option value="Grant">
                                                                        Grant
                                                                    </option>
                                                                </select>
                                                            </td>

                                                        </tr>
                                                        <tr>
                                                            <td>Email</td>
                                                            <td><input type="text" autofocus placeholder="Email"
                                                                    required id="" class="form-control" name="email"
                                                                    tabindex="1"></td>
                                                            <td>Marital Status</td>
                                                            <td>
                                                            <select name="marital_status" class="form-control">
                                                            <option value="UnMarried" selected>
                                                                    UnMarried
                                                                    </option>

                                                                    <option value="Married">
                                                                    Married
                                                                    </option>
                                                                    
                                                                </select>


                                                            </td>
                                                        </tr>
                                                        <tr>
                                                        <td>Address</td>
                                                            <td cospan="3"><textarea name="address" placeholder="Type address"
                                                                    class="form-control"></textarea></td>
                                                        </tr>
                                                        <tr>
                                                            <td><button type="submit"
                                                                    class="btn btn-block btn-outline btn-primary"
                                                                    id="add" name="add" tabindex="2">Save
                                                                    Record</button></td>
                                                        </tr>
                                                    </table>
                                                </div>
                                                <div class="col-sm-3">
                                                    Upload Picture
                                                    <img id="blah"
                                                        src="<?php echo base_url() ?>img/emp/avatar.jpg"
                                                        width="225" height="225px"
                                                        style="border: 1px solid black; margin-bottom: 1px;"
                                                        class="rounded" />
                                                    <input accept="image/*" type='file' id="imgInp" name="emp_pic" />

                                                </div>
                                            </div>

                                        </form>
                                    </div>
                                </div>


                                <!--/span-->
                            </div>
                            <!--/row-->

                        </div>`


                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Employees List <button class="btn btn-danger btn-block">
                                            <i class="fas fa-plus"></i><a
                                                href="<?php echo base_url('Procurement/services_report')?>">
                                                <font color="white"> View Report</font>
                                            </a>
                                        </button></h5>
                                    <span>


                                    </span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">

                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial No</th>
                                                    <th>Service Designation</th>
                                                    <th>Organization</th>
                                                    <th>Full Name </th>
                                                    <th>Gender</th>
                                                    <th>Marital Status</th>
                                                    <th>Contract Award Date</th>
                                                    <th>Contract End Date</th>
                                                    <th>Service Type</th>
                                                    
                                                    <th>Contact No</th>
                                                    <th>Employee No</th>

                                                    <th>CNIC</th>

                                                    <th>Salary</th>

                                                    <th>Loan/Grant</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_service_tbl AS ps, ppms_service_type_tbl AS pst, 
                  organization AS o 
                  WHERE ps.`std_id`=pst.`std_id`
                  AND ps.`organization_id`=o.`organization_id`
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>
                                                    <td><?php echo $item->designation_name;?></td>
                                                    <td><?php echo $item->organization_name;?></td>
                                                    <td>
<a href="<?php echo base_url('Hr_consultancy_contracts/add_contract/')?><?php echo $item->service_id;?>">
<?php echo $item->s_fullname;?></a></td>

                                                    
                                                    <td><?php echo $item->gender;?></td>
                                                    <td><?php echo $item->marital_status;?></td>
                                                    <td><?php echo $item->s_contract_award_date;?></td>
                                                    <td><?php echo $item->s_contract_end_date;?></td>
                                                    <td><?php echo $item->std_name;?></td>
                                                    
                                                    <td><?php echo $item->s_contact_no;?></td>
                                                    <td><?php echo $item->emp_no;?></td>

                                                    <td><?php echo $item->cnic;?></td>

                                                    <td><?php echo $item->salary;?></td>

                                                    <td><?php echo $item->loan_grant;?></td>
                                                    <td><a
                                                            href="<?php echo base_url()?>Procurement/edit_service/<?php echo $item->service_id;?>">
                                                            <img src="<?php echo base_url()?>img/edit.PNG" width="30px"
                                                                height="30px" /> </a>
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

                <script>
                imgInp.onchange = evt => {
                    const [file] = imgInp.files
                    if (file) {
                        blah.src = URL.createObjectURL(file)
                    }
                }
                </script>