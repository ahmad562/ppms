 <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <!-- Main-body start -->
                            <div class="main-body">
                                <div class="page-wrapper">
                                    <!-- Page-header start -->
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Admin Menu</h4>
                                        </div>
                                    </div>
                                    <!-- Page-header end -->
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <div class="row">
                                            <div class="col-lg-12">
                                                <!-- Zero config.table start -->
                                                <div class="card">
                                                    <div class="card-header">
                                                        <a href="<?php echo base_url('Users/add_admin_menu')?>"><h5>
                                                            <button class="btn btn-danger">Add New Menu</button></h5></a>
                                                        <div class="card-header-right">
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        <div class="dt-responsive table-responsive">
                                                            <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Menu Name</th>
                                                <th>Menu Url</th>
                                                <th>Parent</th>
                                               
                                                <th>Sort Order</th>
                                                <th>Group</th>
                                               
                                                <th>Module</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            
                                            $done=$this->db->query("select * from menu_admin
                                            ")->result();
                                            foreach($done as $done){
                                            
                                            ?>
                                            <tr>
                                                
                                                <td><?php echo $done->menu_name;?></td>
                                                <td><?php echo $done->menu_url;?></td>
                                                <td><?php 
                                                 $doneParent=$this->db->query("select menu_name from menu_admin
                                                 where parent_id=$done->parent_id")->row();

                                                
                                                echo $doneParent->menu_name;?></td>
                                               <?php /*?>  <td><?php echo $done->show_in_menu;?></td><?php */?>
                                                <td><?php echo $done->sort_order;?></td>
                                                <td><?php 
                                                $doneGroup=$this->db->query("select group_name from usr_group
                                                where group_id=$done->group_id")->row();
                                                
                                                echo $doneGroup->group_name;?></td>
                                                 <?php /*?>   <td><?php echo $done->is_admin;?></td><?php */?>
                                                 <td><?php 
                                                  if($done->module_id){
                                                    $doneModules=$this->db->query("select module_name from module
                                                    where module_id=$done->module_id")->row();
                                                    echo $doneModules->module_name;
                                                    }else{
  echo "No Module";
                                                    }
                                                  
                                                // echo $done->module_id;?></td>
                                                <td><a href="<?php echo base_url()?>Users/edit_admin_menu/<?php echo $done->menu_id;?>">Edit</a></td>
                                                <td><a href="<?php echo base_url()?>Users/edit_admin_menu/<?php echo $done->menu_id;?>">Delete</a></td>
                                            </tr>
                                           
                                           <?php }?>
                                           
                                           
                                           
                                           
                                        </tbody>
                                        
                                    </table>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!-- Zero config.table end -->
                                              
                                            
                                                
                                               
                                              
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
