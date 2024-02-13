<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Assign tier</h4>

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
                                    <h5>Assign Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    
                                                    <th>tier id</th>
                                                    <th>zone id</th>
                                                    <th>user id</th>
                                        
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grm_assign_tier_tbl as g,grm_tier_tbl as t,grc_zone_tbl as z,emp as e where g.tier_id=t.tier_id AND g.zone_id=z.zone_id AND g.emp_id=e.emp_id")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>


                                                    <td><?php echo $item->tier_name;?></td>
                                                    <td><?php echo $item->zone_name;?></td>
                                                    <td><?php echo $item->emp_name;?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_assigntier/<?php echo $item->id;?>">
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
                           </div>



                
                                <div class="col-sm-5">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Add New assign</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">

                                                    <table class="table gridexample">
                                                        <tr>
                                                            
                                                    <td>tier</td>
                                                    <td>
                                                        <select name="tier_id" class="form-control">


                                                            <option value="">Select tier</option>
                         <?php 
                          
                         $donegrm_tier_tbl=$this->db->query("select * from grm_tier_tbl")->result();
foreach($donegrm_tier_tbl as $donegrm_tier_tbl){
?>

        <option value="<?php echo $donegrm_tier_tbl->tier_id;?>">
        <?php echo $donegrm_tier_tbl->tier_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                        </tr>

 
                                                        <tr>
                                                           
                                                    <td>zone</td>
                                                    <td>
                                                        <select name="zone_id" class="form-control">


                                                            <option value="">Select zone</option>
                         <?php 
                          
                         $donegrc_zone_tbl=$this->db->query("select * from grc_zone_tbl")->result();
foreach($donegrc_zone_tbl as $donegrc_zone_tbl){
?>

        <option value="<?php echo $donegrc_zone_tbl->zone_id;?>">
        <?php echo $donegrc_zone_tbl->zone_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                        </tr>

                                                        <tr>
                                                           
                                            <td>user</td>
                                                    <td>
                                                        <select name="emp_id" class="form-control">


                                                <option value="">Select user</option>
                         <?php 
                          
                         $doneemp=$this->db->query("select * from emp")->result();
foreach($doneemp as $doneemp){
?>

        <option value="<?php echo $doneemp->emp_id;?>">
        <?php echo $doneemp->emp_name;?></option>
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
                            </div>
                        </div>
                        <?php 
    if(isset($_POST['add'])){
        extract($_POST);
   $done=$this->db->query("insert into grm_assign_tier_tbl set tier_id=$tier_id,zone_id=$zone_id,emp_id=$emp_id");   
    if($done){

    }else{
   $done=$this->db->query("insert into grm_assign_tier_tbl set tier_id=$tier_id,zone_id=$zone_id,emp_id=$emp_id");   
    }
        
        //echo $this->db->last_query();
        //exit;
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if($done){
    redirect(base_url('Welcome/assigntier'));
        }
    
    
    }
    
    
    
    ?>
	
	
	
	
	
	
	?>