
         <?php 
        if(!empty($city_id)){?>
        <table id="simpletable" class="table table-striped table-bordered nowrap">
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
                                                            <th>Status</th>
                                                            <th>Parent</th>
                                                            <th>Action</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_db as psd,ss_dp_gender as sg,ppms_dp_detail as pdd,ppms_dp_status as pds,ppms_dp_city as pdc where pdd.dp_id=psd.ss_dp_id AND pdc.city_id=psd.city_id AND pds.ss_dp_status_id=pdd.status_id AND psd.city_id=$city_id AND sg.gender_id=psd.ss_gender_id order by psd.ss_dp_id ASC")->result();
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
        <td><?php echo $item->ss_dp_status_name;?></td>
        <td><?php echo $item->ss_dp_parent_id;?></td>
        <td><button class="btn btn-primary">Project Assigned</button></td>
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
</div>                                                </tr>

                                                        <?php
 $i++;
 } ?>
 
                                                    </tbody>
                                                 
                                                </table>
       <?php }else{
        echo "Error";
} 
            ?>
                                                
                                    
                                               