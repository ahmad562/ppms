
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">
<?php $result = $this->db->query("SELECT * FROM ppms_service_tbl AS ps,ppms_service_designation_tbl AS psd,ppms_service_type_tbl AS pst,ppms_gender_tbl AS g,s_designation AS sd,organization AS o Where g.gender_id=ps.gender_id AND pst.std_id=ps.std_id AND sd.d_id=ps.d_id AND o.organization_id=ps.organization_id AND service_id=$aid")->row(); ?>
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
                                            <h5>Edit Service</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>complaint/update_service" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="hidden" autofocus value="<?php echo $result->service_id;?>"
             placeholder="Enter full Name" required
                                    id="" class="form-control"
                                                name="service_id" tabindex="1">
                                                    <table class="table gridexample">
                                                        <tr>

                                                            <td>Full Name</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter full Name" required value="<?php echo $result->s_fullname;?>"
                                                                    id="" class="form-control"
                                                                    name="full_name" tabindex="1"></td>
                                                        
                                                            <td>Employee No</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Employee No" required
                                                                    value="<?php echo $result->emp_no;?>"
                                                                    id="" class="form-control"
                                                                    name="emp_no" tabindex="1"></td>
                                                         </tr>
                                                        <tr>
                                                            <td>Contract Award Date</td>
                                                            <td><input type="date" autofocus
                                                                     required
                                                                    id="" value="<?php echo $result->s_contract_award_date;?>" class="form-control"
                                                                    name="cad" tabindex="1"></td>
                                                        
                                                            <td>Contract End Date</td>
                                                            <td><input type="date" autofocus
                                                                     required
                                                                     value="<?php echo $result->s_contract_end_date;?>"
                                                                    id="" class="form-control"
                                                                    name="ced" tabindex="1"></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Contact No</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter Student Name" required
                                                                    value="<?php echo $result->s_contact_no;?>"
                                                                    id="" class="form-control"
                                                                    name="contact_no" tabindex="1"></td>
                                                        <td>Service Designation</td>
                                                           <td>
                <select name="sd_id" class="form-control">
                <option value="<?php echo $result->d_id;?>"><?php echo $result->d_name;?></option>
                <option >Select Service Designation</option>
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
                                                            <td>Organization</td>
                                                           <td>
                <select name="organization_id" class="form-control">
                    <option value="<?php echo $result->organization_id;?>">
                                                                    <?php echo $result->organization_name;?>
                                                                </option>
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
                                                            <td><input type="text" autofocus
                                                                    placeholder="CNIC" required
                                                                    id="" value="<?php echo $result->cnic?>" class="form-control"
                                                                    name="cnic" tabindex="1"></td>
                                                         </tr>
                                                        <tr>
                                                           <td>Gender</td>
                                                           <td>
                <select name="gender_id" class="form-control">
                <option value="<?php echo $result->gender_id;?>">
                        <?php echo $result->gender_name;?>
                                                                </option>
                <option value="">Select Gender</option>
        <?php $gender=$this->db->query("select * from ppms_gender_tbl")->result();
            foreach($gender as $gender){
            ?>
                                                                <option
                                                                    value="<?php echo $gender->gender_id;?>">
                                                                    <?php echo $gender->gender_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                           </td>
                                                    
                                                            <td>Salary</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Salary" required value="<?php echo $result->salary;?>"
                                                                    id="" class="form-control"
                                                                    name="salary" tabindex="1"></td>
                                                         </tr>
                                                        <tr>
                                                            <td>Service Type</td>
                                                           <td>
                <select name="std_id" class="form-control">
                    <option value="<?php echo $result->std_id;?>">
                        <?php echo $result->std_name;?>
                     </option>
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


                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Service</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Employee No</th>
                                                            <th>Contract Award Date</th>
                                                            <th>Contract End Date</th>
                                                            <th>Contact No</th>
                                                            <th>Service Designation</th>
                                                            <th>Organization</th>
                                                            <th>CNIC</th>
                                                            <th>Gender</th>
                                                            <th>Salary</th>
                                                            <th>Service Type</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_service_tbl AS ps,ppms_service_type_tbl AS pst,s_designation AS sd,ppms_gender_tbl AS g,organization AS o Where  g.gender_id=ps.gender_id AND sd.d_id=ps.d_id AND pst.std_id=ps.std_id AND o.organization_id=ps.organization_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>
        <td><?php echo $item->s_fullname;?></td>
        <td><?php echo $item->emp_no;?></td>
        <td><?php echo $item->s_contract_award_date;?></td>
        <td><?php echo $item->s_contract_end_date;?></td>
        <td><?php echo $item->s_contact_no;?></td>
        <td><?php echo $item->d_name;?></td>
        <td><?php echo $item->organization_name;?></td>
        <td><?php echo $item->cnic;?></td>
        <td><?php echo $item->gender_name;?></td>
        <td><?php echo $item->salary;?></td>
        <td><?php echo $item->std_name;?></td>
        <td><a href="<?php echo base_url()?>complaint/edit_service/<?php echo $item->service_id;?>">
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
