<div class="pcoded-content">
                    <div class="pcoded-inner-content">

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
                            <a href="<?php echo base_url('Users/view_admin_menu')?>"><h5>
                                                            <button class="btn btn-danger">View Menus</button></h5></a>
                               
                            </div>
                            <div class="card-block">
                            <form method="post" action="<?php echo base_url('Users/insert_menu_admin')?>"
                                    enctype="multipart/form-data"> 
                            <table class="table table-border">
                                            <tbody>
                                                <tr>
                                                    <td>Menu Name</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <input type="text" 
                                                                class="form-control " name="menu_name"
                                                                autofocus tabindex="1" required>
                                                        </div>
                                                    </td>
                                                    <td>Menu Url</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <input type="text" 
                                                                class="form-control " name="menu_url"
                                                                autofocus tabindex="1" required>
                                                        </div>
                                                    </td>
                                                </tr>
                                                    <tr>
                                                   
                                                    <td>
                                                        <div class="form-group has-error">
                                                        Parent Menu</td>
                                                    <td>
                                                        <select name="parent_id" class="form-control">
                                                        <?php 
                                                        $done=$this->db->query("select menu_id,menu_name from menu_admin where parent_id=0")->result();?>
                                                            <option value="">Select Parent</option>
<?php foreach($done as $done1){?>
                            <option value="<?php echo $done1->menu_id;?>"><?php echo $done1->menu_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                        </div>
                                                    
                                                    
                                                    <td>Show in Menu</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                            <input type="text" 
                                                                class="form-control " name="show_in_menu"
                                                                autofocus tabindex="1" required>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Sort Order</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                           <input type="text" 
                                                                class="form-control " name="sort_order"
                                                                autofocus tabindex="1" required> 
                                                        </div>
                                                    </td>
                                               <td>Group</td>
                                                    <td>
                                                    <select name="group_id" class="form-control">
                                                        
                                                            <option value="">Select Group</option>
<?php 

$doneGroup=$this->db->query("select group_id,group_name from usr_group")->result();
foreach($doneGroup as $doneGroup){?>
                            <option value="<?php echo $doneGroup->group_id;?>"><?php echo $doneGroup->group_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>



                                                <tr>
                                                    
                                                  
                                                    <td>Module</td>
                                                    <td>
                                                        <div class="form-group has-error">
                                                        <select name="module_id" class="form-control">
                                                        <?php 
                                                        $doneModule=$this->db->query("select module_id,module_name 
                                                        from module")->result();?>
                                                            <option value="">Select Module</option>
<?php foreach($doneModule as $doneModule){?>
                            <option value="<?php echo $doneModule->module_id;?>"><?php echo $doneModule->module_name;?></option>
                                                            <?php }?>
                                                        </select>
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