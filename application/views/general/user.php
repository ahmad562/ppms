<div class="pcoded-content">
<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Display Users</h4>
                  
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
                                <h5>Users Records</h5>
                                <span></span>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Serial#</th>
                                                <th>Emp Name</th>
                                                <th>UserName</th>
                                                <th>City</th>
                                                <th>Group</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $done=$this->db->query("select * from
                                             user_new as un,
                                            usr_group as ug,emp as e,city as c
                                            where un.group_id=ug.group_id
                                            and un.emp_id=e.emp_id
                                            and un.city_id=c.city_id

                                            ")->result();
                                            $i=1;
                                            foreach($done as $done){
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $done->emp_name;?></td>
                                                <td><?php echo $done->user_name;?></td>
                                                <td><?php echo $done->group_name;?></td>
                                                <td><?php echo $done->city_name;?></td>
                    
                       
                      <td align="center"><a href="<?php echo base_url('Welcome/edit_user/').$done->user_id?>" >
                       <img src="<?php echo base_url()?>img/edit.PNG" width="30px" height="30px"/> </button>
                      
                       </td>
                       <td align="center"><a href="" >
                       <img src="<?php echo base_url()?>img/delete.jpg" width="30px" height="30px"/> </button>
                      
                       </td>
                                            </tr>
                                          
                                           
                                           <?php  $i++;
                                        }?>
                                        </tbody>
                                       
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
                                <h5>Add New User (<a href="<?php echo base_url('Welcome/users_log')?>">show User Log</a>)</h5>
                               
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                <form method="post" action="<?php echo base_url('Emp/insert_user')?>">               
                            
            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">Emp Name</label>
                </div>
                <div class="col-sm-9">
<select name="emp_id" id="emp_id" class="form-control">
    <option value="">Select Emp</option>
<?php 
$empID=$this->db->query("select emp_id,emp_name from emp")->result();
foreach($empID as $empID){?>
    <option value="<?php echo $empID->emp_id?>"><?php echo $empID->emp_name?></option>
<?php }?>


</select>
</div>
            </div>
            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">User Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="email" class="form-control" name="user_name">
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">Group Name</label>
                </div>
                <div class="col-sm-9">
                <select name="group_id" id="group_id" class="form-control">
    <option value="">Select Group</option>
<?php 
$groupID=$this->db->query("select group_id,group_name from usr_group")->result();
foreach($groupID as $groupID){?>
    <option value="<?php echo $groupID->group_id?>"><?php echo $groupID->group_name?></option>
<?php }?>


</select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">City Name</label>
                </div>
                <div class="col-sm-9">
                <select name="city_id" id="city_id" class="form-control">
    <option value="">Select City</option>
<?php 
$cityID=$this->db->query("select city_id,city_name from city")->result();
foreach($cityID as $cityID){?>
    <option value="<?php echo $cityID->city_id?>"><?php echo $cityID->city_name?></option>
<?php }?>


</select>
                </div>
            </div>
            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">Password</label>
                </div>
                <div class="col-sm-9">
                    <input type="password" class="form-control" name="passwords">
                </div>
            </div>
                
                <div class="col-sm-12">
                <button type="submit" name="insert" class="btn btn-danger" tabindex="2">Save Record</button>
          
               
            </div>
        </form>


                                </div>
                            </div>
                        </div>
                        
                    </div>


                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>
</div>
</div>
</div>
</div>
</div>
</div>
