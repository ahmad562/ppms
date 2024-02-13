<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Complaint Category</h4>

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
                                    <h5> Complaint Category Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                
            <thead>
              <tr>
                <th>SerialNo </th>
                <th>CC Name</th>
                
                <th>Edit</th>
              </tr>
            </thead>
            <tbody>
              <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grm_complaint_category")->result();
                  foreach($result1 as $item){?>
              <tr class="gradeX">
                <td><?php echo $i;?></td>

                
                <td><?php echo $item->cc_name;?></td>
                
   <td><a href="<?php echo base_url()?>complaint/edit_cc/<?php echo $item->cc_id;?>">
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
                                <h5>Edit Complaint Category</h5>
                               
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                            <form role="form" method="post" id="create_item" enctype="multipart/form-data" action=""
                                    autocomplete="off"
                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
                                    <?php 
                    $result1 = $this->db->query("SELECT * FROM grm_complaint_category 
                    where cc_id=$aid")->row();

                    ?>
<input type="hidden" placeholder="Enter cc Name" required
                                        id="cc_id" class="form-control" name="cc_id"
                                        value="<?php echo $result1->cc_id;?>">
        <table class="table gridexample">
          <tr>
            <td>complaint category</td>
            <td>
        <input type="text" autofocus value="<?php echo $result1->cc_name;?>" placeholder="Enter cc Name" required id="country" class="form-control txt" name="cc_name" tabindex="1"></td>
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
    
$done=$this->db->query("update grm_complaint_category set cc_name='$cc_name' 
where cc_id=$cc_id");    
    
       
    if($done){
    redirect(base_url('complaint/cc'));
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


              