
<style type="text/css">
   
</style>
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>DPS Detail</h4> -->

                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body" style=" margin-top:-50px ;">
                          <!--   <div>
                                
                           
                            <table class="table nowrap" style="margin-bottom: -50px; margin-top:-50px ;">
                                            <tr>
                                                <td> -->
                            <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                    <?php if($this->session->flashdata('msg')){?>   
                                <div class="alert alert-primary border-0" role="alert" id="mydiv">
                                           <?php echo $this->session->flashdata('msg'); ?>
                                         </div>
                                         <?php } ?>
                                     </div>
                                 </div>
                             </div>
                      <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Add DP info</h4>
                                        </div>
                                        <form method="POST" action="<?php echo base_url() ?>Complaint/insert_ss">
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id=""
                                                    class="table">
                                                    <tbody>
                                                <tr>
                                                    <td>Full Name:</td>
                                                    <td><input type="text" name="full_name" class="form-control">
                                              </td>
                                                    <td>Full Name(urdu):</td>
                                                    <td><input type="text" name="fh_name" class="form-control"></td>
                                                    <td>CNIC:</td>
                                              <td><input type="text" name="cnic" class="form-control"></td>
                                          </tr>
                                          <tr>
                                             
                                                             <td>City:</td>
                                             <td><select name="city_id" class="form-control">
                <option value="">Select city</option>
        <?php $city=$this->db->query("select * from ppms_dp_city")->result();
            foreach($city as $city){
            ?>
                                                                <option
                                                                    value="<?php echo $city->city_id;?>">
                                                                    <?php echo $city->city_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select></td>   
                                                            <td>Address:</td>
                                             <td><textarea cols="3" name="address" class="form-control"></textarea></td>
                                            <td>Gender:</td>
                                             <td><select name="gender_id" class="form-control">
                <option value="">Select gender</option>
        <?php $gender=$this->db->query("select * from ss_dp_gender")->result();
            foreach($gender as $gender){
            ?>
                                                                <option
                                                                    value="<?php echo $gender->gender_id;?>">
                                                                    <?php echo $gender->gender_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select></td>
                                          </tr>
                                          <tr>
                                                
                                             <td>Phone:</td>
                                              <td><input type="text" name="phone" class="form-control"></td> 
                                          </tr>
                                          </tbody>     
                                                    </table>
                                                    <button class="btn btn-primary" name="submit">Submit</button>
                                              
                                            </div>
                                        </div>


                            </form>


                                   
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                

                                 <!-- Table -->
                            </div>
                            <div class="row">
                                <div class="col-12">
                                   <div class="card">
                                        <div class="card-header">
                                            <h4>Assign Dp List</h4>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
            <form method="POST">
                
            
                                            <div class="row">
        <div class="col-6" >
            <div class="form-group">
               <label>City</label>
                                             <select name="city_id" class="form-control">
                <option value="">Select city</option>
        <?php $city=$this->db->query("select * from ppms_dp_city")->result();
            foreach($city as $city){
            ?>
                                                                <option
                                                                    value="<?php echo $city->city_id;?>">
                                                                    <?php echo $city->city_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select></div>
            </div>
      
        <div class="col-6">
            <div style="margin-top: 27px;">
                <button class="btn btn-primary" name="search" class="form-control">Filter</button>
            </div>
        </div>
        </div> 
        </form>
    <div class="dt-responsive table-responsive">
<?php if(isset($_POST['search'])){
 extract($_POST); ?>
         <?php 
        if(!empty($city_id)){?>
        <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Full Name(urdu):</th>
                                                            <th>Address</th>
                                                            <th>Cnic</th>
                                                            <th>Gender</th>
                                                            <th>Phone</th>
                                                            <th>City</th>
                                                            <th>Action</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_db as psd,ppms_dp_city as pdc,ss_dp_gender as sg where pdc.city_id=psd.city_id AND psd.city_id=$city_id AND sg.gender_id=psd.ss_gender_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_dp_fullname;?></td>
        <td><?php echo $item->ss_dp_fh;?></td>
        <td><?php echo $item->ss_dp_address;?></td>
        <td><?php echo $item->ss_dp_cnic;?></td>
         <td><?php echo $item->gender_name;?></td>
        <td><?php echo $item->ss_phone;?></td>
        <td><?php echo $item->city_name;?></td>
        
        <td><a  data-toggle="modal" href="#myModal<?php echo $item->ss_dp_id;?>" class="btn btn-primary">Add Detail</a></td>
        <td><a href="<?php echo base_url()?>complaint/edit_ss/<?php echo $item->ss_dp_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a>
                                                            </td>
 <div class="modal fade" id="myModal<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      
      <h5 class="modal-title">DP Detail</h5>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
       
<!-- search    -->
<div class="row">
        <div class="col-6" >
            <div class="form-group">
               <label>CNIC:</label><input type="text" id="cnic<?php echo $item->ss_dp_id;?>" class="form-control">
               <input type="hidden" id="attern" class="form-control" value="<?php echo $item->ss_dp_id;?>"></div>
            </div>
        <div class="col-6">
            <div style="margin-top: 25px;margin-left: -20px;">
                <button class="btn btn-primary"  onclick="attorney()" class="form-control">Filter</button>
            </div>
        </div>
        </div> 
        
            <div class="col-12" style="padding-bottom: 5px;">
                <div id="attorney">
    
             </div>
            
        </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                                        </tr>

                                                        <?php
 $i++;
 } ?>
 
                                                    </tbody>
                                                    <tfoot>

                                                </table>
       <?php }else{

            ?>
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Full Name(urdu)</th>
                                                            <th>Address</th>
                                                            <th>Cnic</th>
                                                            <th>Gender</th>
                                                            <th>Phone</th>
                                                            <th>City</th>
                                                            
                                                            <th>Action</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_db as psd,ppms_dp_city as pdc,ss_dp_gender as sg where pdc.city_id=psd.city_id AND sg.gender_id=psd.ss_gender_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_dp_fullname;?></td>
        <td><?php echo $item->ss_dp_fh;?></td>
        <td><?php echo $item->ss_dp_address;?></td>
        <td><?php echo $item->ss_dp_cnic;?></td>
         <td><?php echo $item->gender_name;?></td>
        <td><?php echo $item->ss_phone;?></td>
        <td><?php echo $item->city_name;?></td>
        <td><a  data-toggle="modal" href="#myModal<?php echo $item->ss_dp_id;?>" class="btn btn-primary">Add Detail</a></td>
        <td><a href="<?php echo base_url()?>complaint/edit_ss/<?php echo $item->ss_dp_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a>
                                                            </td>
 <div class="modal fade" id="myModal<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      
      <h5 class="modal-title">DP Detail</h5>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
       
<!-- search    -->
<div class="row">
        <div class="col-6" >
            <div class="form-group">
               <label>CNIC:</label><input type="text" id="cnic" class="form-control">
               <input type="hidden" id="attern" class="form-control" value="<?php echo $item->ss_dp_id;?>"></div>
            </div>
        <div class="col-6">
            <div style="margin-top: 25px;margin-left: -20px;">
                <button class="btn btn-primary"  onclick="attorney()" class="form-control">Filter</button>
            </div>
        </div>
        </div> 
        
            <div class="col-12" style="padding-bottom: 5px;">
                <div id="attorney">
    
             </div>
            
        </div>

    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                                        </tr>

                                                        <?php
 $i++;
 } ?>
 
                                                    </tbody>
                                                    <tfoot>

                                                </table>
                                            <?php }

                                             } else {?>
                                               <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Full Name(urdu)</th>
                                                            <th>Address</th>
                                                            <th>Cnic</th>
                                                            <th>Gender</th>
                                                            <th>Phone</th>
                                                            <th>City</th>
                                                           
                                                            <th>Action</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_db as psd,ppms_dp_city as pdc,ss_dp_gender as sg where pdc.city_id=psd.city_id AND sg.gender_id=psd.ss_gender_id order by psd.ss_dp_id ASC")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_dp_fullname;?></td>
        <td><?php echo $item->ss_dp_fh;?></td>
        <td><?php echo $item->ss_dp_address;?></td>
        <td><?php echo $item->ss_dp_cnic;?></td>
         <td><?php echo $item->gender_name;?></td>
        <td><?php echo $item->ss_phone;?></td>
        <td><?php echo $item->city_name;?></td>
      
        <td><a  data-toggle="modal" href="#myModal<?php echo $item->ss_dp_id;?>" class="btn btn-primary">Add Detail</a></td>
        <td><a href="<?php echo base_url()?>complaint/edit_ss/<?php echo $item->ss_dp_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a>
                                            </td>
<div class="modal fade" id="myModal<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      
      <h5 class="modal-title">DP Detail</h5>
      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
       
<!-- search    -->
<div class="container">
<div class="row">
        <div class="col-6" >
            <div class="form-group">
               <label>CNIC:</label>
<input type="text" name="cnic" id="cnic<?php echo $item->ss_dp_id;?>" class="form-control">
<input type="hidden" id="attern" class="form-control" value="<?php echo $item->ss_dp_id;?>"></div>
            </div>
        <div class="col-6">
            <div style="margin-top: 25px;margin-left: -20px;">
                <button class="btn btn-primary"  onclick="attorney(<?php echo $item->ss_dp_id;?>)" class="form-control">Filter</button>
            </div>
        </div>
        <div class="col-12" style="padding-bottom: 5px;">
                <div id="attorneykif<?php echo $item->ss_dp_id;?>">
    
             </div>
            
        </div>
        </div> 
        </div>
            

    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
                                                        </tr>
 
                                                        <?php
 $i++;
 } ?>
 
                                                    </tbody>
                                                    <tfoot>

                                                </table>
                                              <?php } ?>
                                               

                                            </div>
                                        </div>
                                    </div>
                                    <!-- Zero config.table end --> 
                                </div>
                            </div>
                            </div>
                           
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
                function attorney(id){
                    var cnic = $("#cnic"+id).val();
                    var attern = $("#attern").val();
                    //alert(cnic);
                    
            $.ajax({
                url: "<?php echo base_url('Complaint/attorney') ?>",
                method: "POST",
                datatype: "html",
                data : {
                       cnic : cnic,
                       attern : attern
                          
                    },
                success : function(data){
                    //alert(data);
                $("#attorneykif"+id).html(data);
                }
            });
         }
            </script>
<script type="text/javascript">
    setTimeout(function() {
    $('#mydiv').fadeOut('fast');
}, 5000); // <-- time in milliseconds