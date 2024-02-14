<div class="pcoded-content">
<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Display Groups</h4>
                  
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
                                <h5>Groups Records</h5>
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
                                                <th>Group Name</th>
                                                <th>Permission</th>
                                                <th>UserPermission</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $done=$this->db->query("select * from usr_group")->result();
                                            $i=1;
                                            foreach($done as $done){
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $done->group_name;?></td>
                     <td align="center"><a href="<?php echo base_url('Welcome/permission/')?><?php echo $done->group_id;?>">
                      <button class="btn btn-danger">Permissions </button></a>
                      
                       </td>

                       
                     <td align="center"><a href="<?php echo base_url('Welcome/user_permission/')?>">
                      <button class="btn btn-danger">Permissions </button></a>
                      
                       </td>
                       
                      <td align="center"><a href="" >
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
                                <h5>Add New Group</h5>
                               
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                <form method="post" action="<?php echo base_url('Welcome/insert_group')?>">               
                            
            <div class="row form-group">
                <div class="col-sm-3">
                    <label class="col-form-label">Group Name</label>
                </div>
                <div class="col-sm-9">
                    <input type="text" class="form-control" name="group_name">
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
