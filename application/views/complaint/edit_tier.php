<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Tier</h4>

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
                                    <h5>Tier Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                
            <thead>
              <tr>
                <th>SerialNo </th>
                <th>tier name</th>
                <th>tier days</th>
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grm_tier_tbl")->result();
                  foreach($result1 as $item){?>
              <tr class="gradeX">
                <td><?php echo $i;?></td>
                <td><?php echo $item->tier_name;?></td>
                <td><?php echo $item->tier_days;?></td>
                
   <td><a href="<?php echo base_url()?>complaint/edit_tier/<?php echo $item->tier_id;?>">
   <img src="<?php echo base_url()?>img/edit.PNG" width="30px" height="30px"/> </a>
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

          <div class="col-sm-6">
                        <!-- Zero config.table start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Edit tier</h5>
                               
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                            <form role="form" method="post" id="create_item" enctype="multipart/form-data" action=""
                                    autocomplete="off"
                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
                                    <?php 
                    $result1 = $this->db->query("SELECT * FROM grm_tier_tbl
                    where tier_id=$aid")->row();

                    ?>
<input type="hidden" placeholder="Enter tier Name" required
                                        id="tier_id" class="form-control" name="tier_id"
                                        value="<?php echo $result1->tier_id;?>">
        <table class="table gridexample">
          <tr>
            <td>Tier</td>
            <td>
        <input type="text" autofocus value="<?php echo $result1->tier_name;?>" placeholder="Enter tier Name" required id="tier" class="form-control txt" name="tier_name" tabindex="1"></td>
             </tr>
             <tr>
            <td>Tier</td>
            <td>
        <input type="text" autofocus value="<?php echo $result1->tier_days;?>" placeholder="Enter tier Name" required id="tier" class="form-control txt" name="tier_days" tabindex="1"></td>
             </tr>
          <tr>
            <td><button type="submit" class="btn btn-block btn-outline btn-primary" id="add" name="add" tabindex="2">Save Record</button></td>
          </tr>
        </table>
      </form>
      </div>
    </div>
    
    <?php 
    if(isset($_POST['add'])){
        extract($_POST);
    
$done=$this->db->query("update grm_tier_tbl set tier_name='$tier_name',tier_days='$tier_days' 
where tier_id=$tier_id");    
    
       
    if($done){
    redirect(base_url('complaint/tier'));
        }
    
    
    }
    
    
    
    ?>
      </div>
    </div>
    
    
                            </div>
                            <!--/row-->

                        </div>
                    </div>

                </div>


              