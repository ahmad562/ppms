

                          <!--   <div>
                                
                           
                            <table class="table nowrap" style="margin-bottom: -50px; margin-top:-50px ;">
                                            <tr>
                                                <td> -->
                           
                    
                      <div class="container">
                                 <div class="row">
                                   
                                <!-- Table -->
                                <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>All Dp List</h4>
                                            <?php $count=$this->db->query("select count(ss_dp_id) as dp from ppms_ss_db")->row();
                                    echo "Total"." ".$count->dp." "." Assigned Dps"; ?>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
            <form method="POST">
                
            
                                            <div class="row">
        <div class="col-6" >
            <div class="form-group">
               <label>City</label>
                                             <select name="city_id" id="city_id" class="form-control" onChange="all_city_dp(this.value)">
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
    <div class="dt-responsive table-responsive" id="all_city_dp">

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
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_db as psd,ppms_dp_city as pdc,ss_dp_gender as sg where pdc.city_id=psd.city_id  AND sg.gender_id=psd.ss_gender_id order by psd.ss_dp_id ASC")->result();
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
        
        <td><a  data-toggle="modal" href="#myModal<?php echo $item->ss_dp_id;?>" class="btn btn-primary">Assign Project</a></td>
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
    <?php $row = $this->db->query("SELECT * FROM ppms_ss_db where ss_dp_id=$item->ss_dp_id")->row(); ?>
    <div class="row">
        <div class="col-6" >
           <label>Full Name:</label>  <?php echo $row->ss_dp_fullname;?>
           </div>  
        <div class="col-6">
           <label>CNIC:</label>   <?php echo $row->ss_dp_cnic;?>
        </div>
        </div>
        
            <div class="card">
                <div class="card-header">
                     <h5>Assign Project</h5></div> 
                
                <div class="card-body">
                    <div class="row">
                    <div class="col-3">
                        <input type="hidden" name="" id="ss_dp<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
                    <label>Sector</label>
                     <select name="sector_id" class="form-control" onChange="get_project(this.value,<?php echo $item->ss_dp_id;?>)" id="sector_id">
                                                        <option>Select Sector</option>
                                                            <?php $sector=$this->db->query("select * from ppms_sector")->result();
            foreach($sector as $sector){
            ?>
                                                            <option value="<?php echo $sector->sector_id;?>">
                                                                <?php echo $sector->sector_name;?></option>
                                                            <?php }?>
                                                        </select>
                </div>  
                        <div class="col-3">
                            <label>Project</label>
                            <select name="project_id" id="project_id<?php echo $item->ss_dp_id;?>" class="form-control" onChange="get_subproject(this.value,<?php echo $item->ss_dp_id;?>)">
                                                        <option>Select Project</option>
                                                    </select>
                        </div>
                        <div class="col-3">
                            <label>Subproject</label>
    
                                                    <select name="subproject_id" id="subproject_id<?php echo $item->ss_dp_id;?>" onChange="get_site(this.value,<?php echo $item->ss_dp_id;?>)" class="form-control">
                                              <option>Select Subproject</option>
                                                   </select>
                                                   </div>
                                                   <div class="col-3">
                                                        <label>Site</label>
                        <select name="site_id" id="site_id<?php echo $item->ss_dp_id;?>"  class="form-control">
                                                        <option>Select Site</option>
                                                            
                                                        </select>
                                                   </div> </div>
                </div>
            </div>

        <div class="row">
        <div class="col-6" >
            <label>Status</label>
            <select name="status_id" id="status_id<?php echo $item->ss_dp_id;?>" class="form-control" onChange="get_status(this.value,<?php echo $item->ss_dp_id;?>)">
                <option value="">Select Status</option>
        <?php $ps=$this->db->query("select * from ppms_dp_status")->result();
            foreach($ps as $ps){
            ?>
                                                                <option
                                                                    value="<?php echo $ps->ss_dp_status_id;?>">
                                                                    <?php echo $ps->ss_dp_status_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
</div>
</div>
<div class="row" id="filter_cnic<?php echo $item->ss_dp_id;?>">
    
        </div>
        <div class="row">
        <div class="col-12" style="padding-bottom: 5px;">
                <div id="attorneykif<?php echo $item->ss_dp_id;?>">
    
             </div>
            
        </div>
        <div class="col-12">
            <button class="btn btn-primary mb-2" onclick="insert_dp_detail(<?php echo $item->ss_dp_id; ?>)">Assign Attorney</button>
        </div>
        </div> 
        </div>
            

    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
  </div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->
</div>
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

                                 <!-- Table -->
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
                       id : id,

                       cnic : cnic,
                       attern : attern
                          
                    },
                success : function(data){
                    //alert(data);
                $("#attorneykif"+id).html(data);
                }
            });
         }
                                                            
          
    function get_project(iddd_p,id_p){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_project')?>",
                    data: {
                        id: iddd_p
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#project_id"+id_p).html('<option value="">Select project</option');
                        $("#project_id"+id_p).html(data);
                       

                    }
                }
                );
            }
            function get_subproject(idddd,id_sp){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_subproject')?>",
                    data: {
                        id: idddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#subproject_id"+id_sp).html('<option value="">Select Subproject</option');
                        $("#subproject_id"+id_sp).html(data);
                       

                    }
                }
                );
            }
            function get_site(iddd_s,id_s){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_site')?>",
                    data: {
                        id: iddd_s
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#site_id"+id_s).html('<option value="">Select Site</option');
                        $("#site_id"+id_s).html(data);
                    }
                }
                );
            }
            function get_status(status_id,dp_id){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_status')?>",
                    data: {
                        status_id : status_id,
                        dp_id :dp_id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#status_id"+dp_id).val();
                        $("#filter_cnic"+dp_id).html(data);

                    }
                }
                );
            }
            function insert_dp_detail(id){
                var project_id = $("#project_id"+id).val();
                var subproject_id = $("#subproject_id"+id).val();
                var site_id = $("#site_id"+id).val();
                var parentt = $("#parentt"+id).val();
                var status_id = $("#status_id"+id).val();
                var dp_id = $("#ss_dp"+id).val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/insert_dp_detail')?>",
                    data: {
                        dp_id : dp_id,
                        subproject_id : subproject_id,
                        site_id : site_id,
                        status_id : status_id,
                        parentt : parentt
                        },
                    datatype: "html",
                    success: function(data) {
                    location.reload();
                    }
                }
                );
                
            }
            function all_city_dp(city_id){
            $.ajax({
                url: "<?php echo base_url('Complaint/all_city_dp') ?>",
                method: "POST",
                datatype: "html",
                data: {
                        city_id : city_id
                    },
                success : function(data){
                $("#all_city_dp").html(data);
                }
            });
         }
</script>
    