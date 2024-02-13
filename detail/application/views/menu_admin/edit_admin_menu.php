<div class="pcoded-content">
                    <div class="pcoded-inner-content">
                        <?php 
                                            
                                            $done=$this->db->query("SELECT * from menu_admin WHERE menu_id=$menu_id
                                            ")->row();
                                            
                                            
                                            ?>

<!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Admin Menu</h4>
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
                                <h5>Edit Admin</h5>
                               
                            </div>
                            <div class="card-block">
                            <form method="post" action="<?php echo base_url('Users/update_admin_menu')?>"
                                    enctype="multipart/form-data">
                                    <input type="hidden" value="<?php echo $done->menu_id;?>" class="form-control" name="menu_id"> 

                            <table class="table table-border">
                                            <tbody>
                                                <tr>
                                                    <td>Menu Name</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <input type="text" 
                                                                class="form-control " name="menu_name" value="<?php echo $done->menu_name;?>"
                                                                autofocus tabindex="1" required>
                                                        </div>
                                                    </td>
                                                    <td>Menu Url</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <input type="text" 
                                                                class="form-control " name="menu_url" value="<?php echo $done->menu_url;?>"
                                                                autofocus tabindex="1" required>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Parent</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            

                                                                <select name="parent_id" class="form-control">
                     <?php $doneMenu=$this->db->query("select menu_id,menu_name from menu_admin where menu_id=$done->parent_id")->row();?>    
                                                                <option value="<?php echo $doneMenu->menu_id;?>"><?php echo $doneMenu->menu_name;?></option>
                                                        <?php 
                                                        $doneee=$this->db->query("select menu_id,menu_name from menu_admin where parent_id=0")->result();?>
                                                           
<?php foreach($doneee as $doneeee){?>
                            <option value="<?php echo $doneeee->menu_id;?>"><?php echo $doneeee->menu_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                        </div>
                                                    </td>
                                                   
                                                </tr>
                                               
                                                <tr>
                                                    <td>Sort Order</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                           <input type="text" 
                                                                class="form-control " name="sort_order" value="<?php echo $done->sort_order;?>"
                                                                autofocus tabindex="1" required> 
                                                        </div>
                                                    </td>
        
                                                    <td>Group</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                        <select name="group_id" class="form-control">

                                                        <?php 
                                                        $doneGroupedit=$this->db->query("select group_id,group_name 
                                                        from usr_group where group_id=$done->group_id")->row();?>

            <option value="<?php echo $doneGroupedit->group_id;?>"><?php echo $doneGroupedit->group_name;?></option>
                                                        <?php 
                                                        $doneGroup=$this->db->query("select group_id,group_name 
                                                        from usr_group")->result();?>
                                                          
<?php foreach($doneGroup as $doneGroup){?>
                            <option value="<?php echo $doneGroup->group_id;?>"><?php echo $doneGroup->group_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                  

                                                    <td>Module</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                        <?php 
                                                        $doneModuleEdit=$this->db->query("select module_id,module_name 
                                                        from module where module_id=$done->module_id")->row();?>
                                                        <select name="module_id" class="form-control">
                             <option value="<?php echo $doneModuleEdit->module_id?>"><?php echo $doneModuleEdit->module_name;?></option>
                                                        <?php 
                                                        $doneModule=$this->db->query("select module_id,module_name 
                                                        from module")->result();?>
                                                          
<?php foreach($doneModule as $doneModule){?>
                            <option value="<?php echo $doneModule->module_id;?>"><?php echo $doneModule->module_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                        </div>
                                                    </td>  

                                            </tr>

                                            <tr>
                                                <td><input type="submit" class="btn btn-danger" value="Update"
                                                        name="add" tabindex="1"></td>
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