<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <?php 
                                            
                                            $done=$this->db->query("SELECT e.`emp_name`,e.`emp_id`,e.`phone`,e.`emp_curr_address`,e.`emp_per_address`,e.`email`,e.`organization_id`,e.`geneder`,
                                            e.`marital_status`,o.`organization_id`,o.`organization_name`,de.`designation_id`,de.`designation_name`,c.`city_id`,c.`city_name`,
                                            d.`department_id`,d.`department_name`,e.`marital_status`
                                             FROM emp AS e,city AS c,department AS d,
                                                                                        designation AS de,organization AS o
                                                                                        WHERE e.department_id=d.department_id
                                                                                        AND e.city_id=c.city_id
                                                                                        AND e.designation_id=de.designation_id
                                                                                        AND e.organization_id=o.organization_id
                                            and e.emp_id=$eid
                                            ")->row();
                                            
                                            
                                            ?>
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
                                        <form method="post" action="<?php echo base_url('Emp/edit_emp_record')?>"
                                            enctype="multipart/form-data">
                                            <input type="hidden" placeholder="Enter Phone" id="empID"
                                                                    value="<?php echo $done->emp_id;?>"
                                                                    class="form-control username" name="empID"
                                                                   required>
                                            <table class="table table-border">
                                                <tbody>
                                                    <tr>
                                                        <td>Emp Name</td>
                                                        <td>
                                                            <div class="form-group has-error">
                                                                <input type="text" placeholder="Enter Employee Name"
                                                                    value="<?php echo $done->emp_name;?>" id="emp_name"
                                                                    class="form-control " name="emp_name" autofocus
                                                                    tabindex="1" required>
                                                            </div>
                                                        </td>
                                                        <td>Designation</td>
                                                        <td>
                                                            <div class="form-group has-error">
                                                                <select name="designation_id" class="form-control">

                                                                    <option value="<?php echo $done->designation_id;?>">
                                                                        <?php echo $done->designation_name;?></option>
                                                                    <?php $done1=$this->db->query("select designation_id,designation_name from designation")->result();
			foreach($done1 as $desig){
			?>
                                                                    <option
                                                                        value="<?php echo $desig->designation_id;?>">
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
                                                                    value="<?php echo $done->phone;?>"
                                                                    class="form-control username" name="phone"
                                                                    tabindex="3" required>
                                                            </div>
                                                        </td>
                                                        <td>Email</td>
                                                        <td>
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Enter Email" id="email"
                                                                    value="<?php echo $done->email;?>"
                                                                    class="form-control username" name="email"
                                                                    tabindex="5" required>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <td>Gender</td>
                                                        <td>
                                                            <div class="form-group has-error">
                                                                <select name="gender" id="gender" class="form-control"
                                                                    tabindex="11">

                                                                    <option value="<?php echo $done->geneder;?>">
                                                                        <?php echo $done->geneder;?></option>
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
                                                                    <option value="<?php echo $done->marital_status;?>">
                                                                        <?php echo $done->marital_status;?></option>
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
                                                                <textarea name="caddress" id="caddress"
                                                                    class="form-control"
                                                                    tabindex="13"><?php echo $done->emp_curr_address;?></textarea>
                                                            </div>
                                                        </td>
                                                        <td>Permanent Address</td>
                                                        <td>
                                                            <div class="form-group has-error">

                                                                <textarea name="paddress" id="paddress"
                                                                    class="form-control"
                                                                    tabindex="14"><?php echo $done->emp_per_address;?></textarea>
                                                            </div>
                                                        </td>

                                                    </tr>
                                                    <tr>
                                                        <td>Picture</td>
                                                        <td><input type="file" name="Pict_upload" id="Pict_upload"
                                                                class="form-control" tabindex="10"
                                                                value="<?php echo $done->emp_pic;?>">


                                                        </td>
                                                        <td>Password</td>
                                                        <td><input type="password" placeholder="Enter Password" required
                                                                id="password" class="form-control" name="password"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Group</td>
                                                        <td>
                                                        <?php 
                                                         $empee="select * from user_new as un,usr_group as g
                                                        where un.group_id=g.group_id 
                                                        and un.emp_id=$done->emp_id
                                                        ";
                                                            $uid=$this->db->query($empee)->row();
                                                                
                                                                ?>
                                                            <select name="group" class="form-control">
                                                                
                                                                <option value="<?php echo $uid->group_id;?>">
                                                                    <?php echo $uid->group_name;?></option>
                                                                <?php $done2=$this->db->query("select * from usr_group")->result();
			foreach($done2 as $desig){
			?>
                                                                <option value="<?php echo $desig->group_id;?>">
                                                                    <?php echo $desig->group_name;?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>

                                                        <td>Organization</td>
                                                        <td>

                                                            <select name="organization_id" class="form-control">
                                                            <option
                                                                    value="<?php echo $done->organization_id;?>">
                                                                    <?php echo $done->organization_name;?>
                                                                </option>
                                                                <?php $organizations=$this->db->query("select * from organization")->result();
			foreach($organizations as $organizations){
			?>
                                                                <option
                                                                    value="<?php echo $organizations->organization_id;?>">
                                                                    <?php echo $organizations->organization_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>



                                                    </tr>
                                                    <tr>
                                                        <td>Department</td>
                                                        <td>
                                                            <select name="department_id" class="form-control">
                                                            <option
                                                                    value="<?php echo 1;?>">
                                                                    <?php echo $done->department_name;?>
                                                                </option>
                                                                
                                                                <?php $done3=$this->db->query("select * from department")->result();
			foreach($done3 as $desig){
			?>
                                                                <option value="<?php echo $desig->department_id;?>">
                                                                    <?php echo $desig->department_name;?></option>
                                                                <?php }?>
                                                            </select>
                                                        </td>
                                                        <td>City</td>
                                                        <td>
                                                            <select name="city_id" class="form-control">

                                                            <option
                                                                    value="<?php echo $done->city_id;?>">
                                                                    <?php echo $done->city_name;?>
                                                                </option>
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