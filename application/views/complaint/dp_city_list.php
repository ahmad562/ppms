<?php if(!empty($city_id)){?>

        <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Full Name </th>
                                                            <th>Father Name</th>
                                                            <th>Address</th>
                                                            <th>Cnic</th>
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
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_db as psd,ppms_dp_status as pds,ppms_dp_city as pdc,ppms_dp_detail as pdd where pdd.dp_id=psd.ss_dp_id AND pdd.subproject_id=$subproject_id AND pdd.site_id=$site_id AND pdc.city_id=psd.city_id AND psd.city_id=$city_id AND pds.ss_dp_status_id=pdd.status_id")->result();
                    
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_dp_fullname;?></td>
        <td><?php echo $item->ss_dp_fh;?></td>
        <td><?php echo $item->ss_dp_address;?></td>
        <td><?php echo $item->ss_dp_cnic;?></td>
        <td><?php echo $item->city_name;?></td>
        <td><?php echo $item->ss_dp_status_name;?></td>
        <td><?php echo $item->dp_parent_id;?></td>
        <td>
        <?php 
         $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_land_record where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
        <a data-toggle="modal" href="#myModal_edit<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-primary btn-round">Edit Land Record</a>
        <?php }else{ ?>
            <a data-toggle="modal" href="#myModal<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-default btn-round">Add Land Record</a>
             
        <?php }
         $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_nonland_record where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
        <a  data-toggle="modal" href="#myModal1_edit<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-primary btn-round">Edit Non Land</a>
    <?php }else{?>
        <a  data-toggle="modal" href="#myModal1<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-default btn-round">Add Non Land</a>
    <?php }
      $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_allowances_detail where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
     <a  data-toggle="modal" href="#myModal_allowances_edit<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-primary btn-round">Edit Allowances</a>
     <?php }else{?>
     <a  data-toggle="modal" href="#myModal_allowances<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-default btn-round">Add Allowances</a>
 <?php } 
 $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_dp_payment_detail where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
 ?>
       <a  data-toggle="modal" href="#myModal_payment_edit<?php echo $item->ss_dp_id;?>" onclick="get_descr(<?php echo $item->ss_dp_id;?>)" class="btn btn-sm btn-primary btn-round">Edit Payment</a>
      <?php }else{?>
       <a  data-toggle="modal" href="#myModal_payment<?php echo $item->ss_dp_id;?>" onclick="get_descr(<?php echo $item->ss_dp_id;?>)" class="btn btn-sm btn-default btn-round">Add Payment</a>
   <?php } ?>
   </td>
        <td><a href="<?php echo base_url()?>complaint/edit_ss/<?php echo $item->ss_dp_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a></td>
                                                        </tr>
 <div class="modal fade" id="myModal<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-4">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
              <label>Type of Land</label>
                                              <select name="land_type_id" id="land_type_id<?php echo $item->ss_dp_id;?>" class="form-control">
                                                        <option>Select LandType</option>
                                                            <?php $landtype=$this->db->query("select * from ppms_ss_landtype")->result();
            foreach($landtype as $landtype){
            ?>
        <option value="<?php echo $landtype->landtype_id;?>">
                                                                <?php echo $landtype->landtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
           <div class="col-4">
              <label>Area Unit</label>
                                              <select name="area_unit_id" id="area_unit_id<?php echo $item->ss_dp_id;?>" class="form-control">
                                                        <option>Select LandType</option>
                                                            <?php $area_unit=$this->db->query("select * from ppms_ss_unit where ss_unit_id=2")->row();?>
                                                            <option value="<?php echo $area_unit->ss_unit_id;?>">
                                                                <?php echo $area_unit->ss_unit_name;?></option>
                                                           
                                                        </select>
          </div>
          <div class="col-4">
             <label>Khasra No</label>
              <input type="text" id="khasra_no<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
         </div>
          <div class="col-4">
              <label>Khasra Area(Marla)</label>
              <input type="text" id="total_area<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
          </div>
          <div class="col-4">
              <label>Total Area Affected(Marla)</label>
              <input type="text" id="area_affected<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
          </div>
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="bor_unit_rate<?php echo $item->ss_dp_id;?>" name="bor_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="bor_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_bortotalarea(<?php echo $item->ss_dp_id;?>)" name="bor_total_amount" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="ivs_unit_rate<?php echo $item->ss_dp_id;?>" name="ivs_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="ivs_total_amount" id="ivs_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_ivstotalarea(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-block btn-outline btn-primary" id="add" name="add" onclick="insert_land_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal_edit<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-4">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
            <?php $edit_land = $this->db->query("SELECT * FROM ppms_ss_land_record as pslr,ppms_ss_landtype as pslt,ppms_ss_unit as psu where pslr.ss_landtype_id=pslt.landtype_id AND pslr.ss_area_unit_id=psu.ss_unit_id AND ss_dp_id=$item->ss_dp_id")->row(); ?>
            <input type="hidden" id="lr_id<?php echo $item->ss_dp_id;?>" name="lr_id" class="form-control" value="<?php echo $edit_land->ss_lrecord_id?>">
              <label>Type of Land</label>
                                              <select name="land_type_id" id="land_type_idd<?php echo $item->ss_dp_id;?>" class="form-control">
                                                <option value="<?php echo $edit_land->landtype_id ?>"><?php echo $edit_land->landtype_name ?></option>
                                                        <option>Select LandType</option>
                                                            <?php $landtype=$this->db->query("select * from ppms_ss_landtype")->result();
            foreach($landtype as $landtype){
            ?>
        <option value="<?php echo $landtype->landtype_id;?>">
                                                                <?php echo $landtype->landtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
           <div class="col-4">
              <label>Area Unit</label>
                                              <select name="area_unit_idd" id="area_unit_idd<?php echo $item->ss_dp_id;?>" class="form-control">
                                                <option value="<?php echo $edit_land->ss_unit_id?>"><?php echo $edit_land->ss_unit_name?></option>
                                                        <option>Select LandType</option>
                                                            <?php $area_unit=$this->db->query("select * from ppms_ss_unit where ss_unit_id=2")->row();?>
                                                            <option value="<?php echo $area_unit->ss_unit_id;?>">
                                                                <?php echo $area_unit->ss_unit_name;?></option>
                                                           
                                                        </select>
          </div>
          <div class="col-4">
             <label>Khasra No</label>
              <input type="text" id="khasra_noo<?php echo $item->ss_dp_id;?>" name="khasra_no" class="form-control" value="<?php echo $edit_land->ss_khasra_no;?>">
         </div>
          <div class="col-4">
              <label>Khasra Area(Marla)</label>
              <input type="text" id="total_areaa<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control" value="<?php echo $edit_land->ss_totalqty;?>">
          </div>
          <div class="col-4">
              <label>Total Area Affected(Marla)</label>
              <input type="text" id="area_affectedd<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control" value="<?php echo $edit_land->ss_total_area_affected;?>">
          </div>
         
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="bor_unit_ratee<?php echo $item->ss_dp_id;?>" name="bor_unit_rate"  class="form-control" value="<?php echo $edit_land->ss_lrecord_bor_unitrate ?>">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="bor_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_bortotalareaa(<?php echo $item->ss_dp_id;?>)" name="bor_total_amount" class="form-control" value="<?php echo $edit_land->ss_lrecord_bor_totalamount ?>">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="ivs_unit_ratee<?php echo $item->ss_dp_id;?>" name="ivs_unit_rate" class="form-control" value="<?php echo $edit_land->ss_lrecord_ivs_unitrate ?>">
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="ivs_total_amount" id="ivs_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_ivstotalareaa(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_land->ss_lrecord_ivs_totalamount ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-block btn-outline btn-primary" id="add" name="add" onclick="update_land_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Update Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_edit -->

<div class="modal fade" id="myModal1<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-6">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
              <label>Type of Non Land</label>
                                              <select name="nonland_type_id" id="nonland_type_id<?php echo $item->ss_dp_id;?>" class="form-control">
                                                        <option>Select Non LandType</option>
                                                            <?php $nonlandtype=$this->db->query("select * from ppms_ss_nonlandtype")->result();
            foreach($nonlandtype as $nonlandtype){
            ?>
        <option value="<?php echo $nonlandtype->nonlandtype_id;?>">
                                                                <?php echo $nonlandtype->nonlandtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
          <div class="col-6">
              <label>Area/Quantity</label>
              <input type="text" id="nontotal_area<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
          </div>
         
         
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="non_bor_unit_rate<?php echo $item->ss_dp_id;?>" name="nonbor_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="nonbor_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_nonbortotalarea(<?php echo $item->ss_dp_id;?>)" name="nonbor_total_amount" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="nonivs_unit_rate<?php echo $item->ss_dp_id;?>" name="nonivs_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="nonivs_total_amount" id="nonivs_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_nonivstotalarea(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" onclick="insert_nonland_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal1 -->

<!-- /.modal1_edit -->
<div class="modal fade" id="myModal1_edit<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-6">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
            <?php $edit_nland_r = $this->db->query("SELECT * FROM ppms_ss_nonland_record as psnlr,ppms_ss_nonlandtype as psn where psnlr.ss_nonlandtype_id=psn.nonlandtype_id AND psnlr.ss_dp_id=$item->ss_dp_id")->row(); ?>
            <input type="hidden" id="n_lr_id<?php echo $item->ss_dp_id;?>" name="lr_id" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_id?>">
              <label>Type of Non Land</label>
                                              <select name="nonland_type_idd" id="nonland_type_idd<?php echo $item->ss_dp_id;?>" class="form-control">
                                                <option value="<?php echo $edit_nland_r->nonlandtype_id ?>"><?php echo $edit_nland_r->nonlandtype_name ?></option>
                                                        <option>Select Non LandType</option>
                                                            <?php $nonlandtype=$this->db->query("select * from ppms_ss_nonlandtype")->result();
            foreach($nonlandtype as $nonlandtype){
            ?>
        <option value="<?php echo $nonlandtype->nonlandtype_id;?>">
                                                                <?php echo $nonlandtype->nonlandtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
          <div class="col-6">
              <label>Area/Quantity</label>
              <input type="text" id="nontotal_areaa<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_totalqty ?>">
          </div>
         
         
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="non_bor_unit_ratee<?php echo $item->ss_dp_id;?>" name="nonbor_unit_rate" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_borunitrate ?>">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="nonbor_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_nonbortotalareaa(<?php echo $item->ss_dp_id;?>)" name="nonbor_total_amount" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_bortotalamount ?>">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="nonivs_unit_ratee<?php echo $item->ss_dp_id;?>" name="nonivs_unit_rate" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_ivsunitrate?>" >
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="nonivs_total_amount" id="nonivs_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_nonivstotalareaa(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_ivstotalamount?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" onclick="update_nonland_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal1_edit -->

<!-- modal_Allownces -->
<div class="modal fade" id="myModal_allowances<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-12">
            <h4>Add Allowances</h4>
      </div>
    </div>
</div>
<div class="modal-body">
 <div class="row">
                <div class="col-5">
                    <label>Severity Amount</label>
                    <input type="text" id="severity_amount<?php echo $item->ss_dp_id;?>" name="severity_amount" onblur="get_totalamount_s(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                  <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_s<?php echo $item->ss_dp_id;?>"  name="total_amount_s" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">

</div>
</div>
             
            <div class="row">
                 <div class="col-5">
                    <label>Vulnerability</label>
                    <input type="text" id="vulnerability<?php echo $item->ss_dp_id;?>" name="vulnerability" onblur="get_totalamount_v(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                   <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_v<?php echo $item->ss_dp_id;?>"  name="total_amount_v" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" onclick="insert_allowances(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_allowances -->

<!-- modal_Allownces_edit -->
<div class="modal fade" id="myModal_allowances_edit<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-12">
            <h4>Add Allowances</h4>
      </div>
    </div>
</div>
<div class="modal-body">
 <div class="row">
                <div class="col-5">
                    <?php $edit_allowances = $this->db->query("SELECT * FROM ppms_ss_allowances_detail where ss_dp_id=$item->ss_dp_id")->row(); ?>
            <input type="hidden" id="allowances_detail_id<?php echo $item->ss_dp_id;?>" name="allowances_detail_id" class="form-control" value="<?php echo $edit_allowances->allowances_detail_id?>">
                    <label>Severity Amount</label>
                    <input type="text" id="severity_amountt<?php echo $item->ss_dp_id;?>" name="severity_amount" onblur="get_totalamount_ss(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_allowances->severity_unit_amount?>">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                  <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_ss<?php echo $item->ss_dp_id;?>"  name="total_amount_s" class="form-control" value="<?php echo $edit_allowances->severity_total_amount?>">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">

</div>
</div>
             
            <div class="row">
                 <div class="col-5">
                    <label>Vulnerability</label>
                    <input type="text" id="vulnerabilityy<?php echo $item->ss_dp_id;?>" name="vulnerability" onblur="get_totalamount_vv(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_allowances->vulnerability_unit_amount?>">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                   <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_vv<?php echo $item->ss_dp_id;?>"  name="total_amount_v" class="form-control" value="<?php echo $edit_allowances->vulnerability_total_amount?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" 
                    onClick="update_allowances(<?php echo $item->ss_dp_id;?>)" tabindex="2">Update Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_edit_allowances -->

<!-- modal_payment -->
<div class="modal fade" id="myModal_payment<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-12">
            <h4>Add Payment</h4>
      </div>
    </div>
</div>
<div class="modal-body">
 <div class="row">
    <div class="col-8">
        <div id="load_desc<?php echo $item->ss_dp_id;?>">
                    
                </div>
                 
            </div>
        </div>
                <div class="row">
                    <div class="col-4">
                        <label>Cheque No</label>
                        <input type="text" name="cheque_no" id="cheque_no<?php echo $item->ss_dp_id;?>" class="form-control">
                    </div>
                    <div class="col-4">
                        <label>Amount</label>
                        <input type="text" name="payment_amount" id="payment_amount<?php echo $item->ss_dp_id;?>" class="form-control">
                    </div>
                    <div class="col-4">
                        <label>Type</label>
                        <select name="bor_type" id="bor_type_id<?php echo $item->ss_dp_id;?>" class="form-control">
                            <option>Select BOR Type</option>
                             <?php $bor_type= $this->db->query("SELECT * FROM ppms_ss_bortype")->result(); 
                             foreach($bor_type as $bor_type){?>
                             <option><?php echo $bor_type->ss_bortype_name; ?></option>
                             <?php } ?>
                            
                        </select>
                    </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                    <button  class="btn  btn-outline btn-primary" onclick="insert_payment(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_payment -->
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
                                                            <th>Father Name</th>
                                                            <th>Address</th>
                                                            <th>Cnic</th>
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
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_db as psd,ppms_dp_detail as pdd,ppms_dp_status as pds,ppms_dp_detail as pdd where pdd.dp_id=psd.ss_dp_id AND pdd.subproject_id=$subproject_id AND pdd.site_id=$site_id AND pdc.city_id=psd.city_id AND pds.ss_dp_status_id=pdd.status_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_dp_fullname;?></td>
        <td><?php echo $item->ss_dp_fh;?></td>
        <td><?php echo $item->ss_dp_address;?></td>
        <td><?php echo $item->ss_dp_cnic;?></td>
        <td><?php echo $item->city_name;?></td>
        <td><?php echo $item->ss_dp_status_name;?></td>
        <td><?php echo $item->dp_parent_id;?></td>
         <td>
        <?php 
         $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_land_record where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
        <a data-toggle="modal" href="#myModal_edit<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-primary btn-round">Edit Land Record</a>
        <?php }else{ ?>
            <a data-toggle="modal" href="#myModal<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-default btn-round">Add Land Record</a>
             
        <?php }
         $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_nonland_record where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
        <a  data-toggle="modal" href="#myModal1_edit<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-primary btn-round">Edit Non Land</a>
    <?php }else{?>
        <a  data-toggle="modal" href="#myModal1<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-default btn-round">Add Non Land</a>
    <?php }
      $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_allowances_detail where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
     <a  data-toggle="modal" href="#myModal_allowances_edit<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-primary btn-round">Edit Allowances</a>
     <?php }else{?>
     <a  data-toggle="modal" href="#myModal_allowances<?php echo $item->ss_dp_id;?>" class="btn btn-sm btn-default btn-round">Add Allowances</a>
 <?php } 
 $dp_land = $this->db->query("SELECT ss_dp_id FROM ppms_ss_dp_payment_detail where ss_dp_id=$item->ss_dp_id")->row();
             if($dp_land){ ?>
 ?>
       <a  data-toggle="modal" href="#myModal_payment_edit<?php echo $item->ss_dp_id;?>" onclick="get_descr(<?php echo $item->ss_dp_id;?>)" class="btn btn-sm btn-primary btn-round">Edit Payment</a>
      <?php }else{?>
       <a  data-toggle="modal" href="#myModal_payment<?php echo $item->ss_dp_id;?>" onclick="get_descr(<?php echo $item->ss_dp_id;?>)" class="btn btn-sm btn-default btn-round">Add Payment</a>
   <?php } ?>
   </td>
        <td><a href="<?php echo base_url()?>complaint/edit_ss/<?php echo $item->ss_dp_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a></td>
                                                        </tr>
 <div class="modal fade" id="myModal<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-4">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
              <label>Type of Land</label>
                                              <select name="land_type_id" id="land_type_id<?php echo $item->ss_dp_id;?>" class="form-control">
                                                        <option>Select LandType</option>
                                                            <?php $landtype=$this->db->query("select * from ppms_ss_landtype")->result();
            foreach($landtype as $landtype){
            ?>
        <option value="<?php echo $landtype->landtype_id;?>">
                                                                <?php echo $landtype->landtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
           <div class="col-4">
              <label>Area Unit</label>
                                              <select name="area_unit_id" id="area_unit_id<?php echo $item->ss_dp_id;?>" class="form-control">
                                                        <option>Select LandType</option>
                                                            <?php $area_unit=$this->db->query("select * from ppms_ss_unit where ss_unit_id=2")->row();?>
                                                            <option value="<?php echo $area_unit->ss_unit_id;?>">
                                                                <?php echo $area_unit->ss_unit_name;?></option>
                                                           
                                                        </select>
          </div>
          <div class="col-4">
             <label>Khasra No</label>
              <input type="text" id="khasra_no<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
         </div>
          <div class="col-4">
              <label>Khasra Area(Marla)</label>
              <input type="text" id="total_area<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
          </div>
          <div class="col-4">
              <label>Total Area Affected(Marla)</label>
              <input type="text" id="area_affected<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
          </div>
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="bor_unit_rate<?php echo $item->ss_dp_id;?>" name="bor_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="bor_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_bortotalarea(<?php echo $item->ss_dp_id;?>)" name="bor_total_amount" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="ivs_unit_rate<?php echo $item->ss_dp_id;?>" name="ivs_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="ivs_total_amount" id="ivs_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_ivstotalarea(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-block btn-outline btn-primary" id="add" name="add" onclick="insert_land_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal -->

<div class="modal fade" id="myModal_edit<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-4">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
            <?php $edit_land = $this->db->query("SELECT * FROM ppms_ss_land_record as pslr,ppms_ss_landtype as pslt,ppms_ss_unit as psu where pslr.ss_landtype_id=pslt.landtype_id AND pslr.ss_area_unit_id=psu.ss_unit_id AND ss_dp_id=$item->ss_dp_id")->row(); ?>
            <input type="hidden" id="lr_id<?php echo $item->ss_dp_id;?>" name="lr_id" class="form-control" value="<?php echo $edit_land->ss_lrecord_id?>">
              <label>Type of Land</label>
                                              <select name="land_type_id" id="land_type_idd<?php echo $item->ss_dp_id;?>" class="form-control">
                                                <option value="<?php echo $edit_land->landtype_id ?>"><?php echo $edit_land->landtype_name ?></option>
                                                        <option>Select LandType</option>
                                                            <?php $landtype=$this->db->query("select * from ppms_ss_landtype")->result();
            foreach($landtype as $landtype){
            ?>
        <option value="<?php echo $landtype->landtype_id;?>">
                                                                <?php echo $landtype->landtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
           <div class="col-4">
              <label>Area Unit</label>
                                              <select name="area_unit_idd" id="area_unit_idd<?php echo $item->ss_dp_id;?>" class="form-control">
                                                <option value="<?php echo $edit_land->ss_unit_id?>"><?php echo $edit_land->ss_unit_name?></option>
                                                        <option>Select LandType</option>
                                                            <?php $area_unit=$this->db->query("select * from ppms_ss_unit where ss_unit_id=2")->row();?>
                                                            <option value="<?php echo $area_unit->ss_unit_id;?>">
                                                                <?php echo $area_unit->ss_unit_name;?></option>
                                                           
                                                        </select>
          </div>
          <div class="col-4">
             <label>Khasra No</label>
              <input type="text" id="khasra_noo<?php echo $item->ss_dp_id;?>" name="khasra_no" class="form-control" value="<?php echo $edit_land->ss_khasra_no;?>">
         </div>
          <div class="col-4">
              <label>Khasra Area(Marla)</label>
              <input type="text" id="total_areaa<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control" value="<?php echo $edit_land->ss_totalqty;?>">
          </div>
          <div class="col-4">
              <label>Total Area Affected(Marla)</label>
              <input type="text" id="area_affectedd<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control" value="<?php echo $edit_land->ss_total_area_affected;?>">
          </div>
         
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="bor_unit_ratee<?php echo $item->ss_dp_id;?>" name="bor_unit_rate"  class="form-control" value="<?php echo $edit_land->ss_lrecord_bor_unitrate ?>">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="bor_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_bortotalareaa(<?php echo $item->ss_dp_id;?>)" name="bor_total_amount" class="form-control" value="<?php echo $edit_land->ss_lrecord_bor_totalamount ?>">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="ivs_unit_ratee<?php echo $item->ss_dp_id;?>" name="ivs_unit_rate" class="form-control" value="<?php echo $edit_land->ss_lrecord_ivs_unitrate ?>">
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="ivs_total_amount" id="ivs_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_ivstotalareaa(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_land->ss_lrecord_ivs_totalamount ?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-block btn-outline btn-primary" id="add" name="add" onclick="update_land_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Update Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_edit -->

<div class="modal fade" id="myModal1<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-6">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
              <label>Type of Non Land</label>
                                              <select name="nonland_type_id" id="nonland_type_id<?php echo $item->ss_dp_id;?>" class="form-control">
                                                        <option>Select Non LandType</option>
                                                            <?php $nonlandtype=$this->db->query("select * from ppms_ss_nonlandtype")->result();
            foreach($nonlandtype as $nonlandtype){
            ?>
        <option value="<?php echo $nonlandtype->nonlandtype_id;?>">
                                                                <?php echo $nonlandtype->nonlandtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
          <div class="col-6">
              <label>Area/Quantity</label>
              <input type="text" id="nontotal_area<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control">
          </div>
         
         
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="non_bor_unit_rate<?php echo $item->ss_dp_id;?>" name="nonbor_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="nonbor_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_nonbortotalarea(<?php echo $item->ss_dp_id;?>)" name="nonbor_total_amount" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="nonivs_unit_rate<?php echo $item->ss_dp_id;?>" name="nonivs_unit_rate" class="form-control">
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="nonivs_total_amount" id="nonivs_total_amount<?php echo $item->ss_dp_id;?>" onclick="get_nonivstotalarea(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" onclick="insert_nonland_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal1 -->

<!-- /.modal1_edit -->
<div class="modal fade" id="myModal1_edit<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-6">
            <input type="hidden" name="ss_dp_id" id="ss_dp_idpak<?php echo $item->ss_dp_id;?>" value="<?php echo $item->ss_dp_id;?>">
            <?php $edit_nland_r = $this->db->query("SELECT * FROM ppms_ss_nonland_record as psnlr,ppms_ss_nonlandtype as psn where psnlr.ss_nonlandtype_id=psn.nonlandtype_id AND psnlr.ss_dp_id=$item->ss_dp_id")->row(); ?>
            <input type="hidden" id="n_lr_id<?php echo $item->ss_dp_id;?>" name="lr_id" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_id?>">
              <label>Type of Non Land</label>
                                              <select name="nonland_type_idd" id="nonland_type_idd<?php echo $item->ss_dp_id;?>" class="form-control">
                                                <option value="<?php echo $edit_nland_r->nonlandtype_id ?>"><?php echo $edit_nland_r->nonlandtype_name ?></option>
                                                        <option>Select Non LandType</option>
                                                            <?php $nonlandtype=$this->db->query("select * from ppms_ss_nonlandtype")->result();
            foreach($nonlandtype as $nonlandtype){
            ?>
        <option value="<?php echo $nonlandtype->nonlandtype_id;?>">
                                                                <?php echo $nonlandtype->nonlandtype_name;?></option>
                                                            <?php }?>
                                                        </select>
          </div>
          <div class="col-6">
              <label>Area/Quantity</label>
              <input type="text" id="nontotal_areaa<?php echo $item->ss_dp_id;?>" name="total_area" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_totalqty ?>">
          </div>
         
         
      </div>
    </div>
<div class="modal-body">
 <div class="row">
                <div class="col-6">
<h5 class="text-underline">BOR</h5>
</div>
</div>      
            <div class="row">
                <div class="col-6">
                    <label>Bor Unit Rate:</label>
                    <input type="text" id="non_bor_unit_ratee<?php echo $item->ss_dp_id;?>" name="nonbor_unit_rate" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_borunitrate ?>">
                </div>
                <div class="col-6">
                    <label>Bor Total Amount:</label>
                  <input type="text" id="nonbor_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_nonbortotalareaa(<?php echo $item->ss_dp_id;?>)" name="nonbor_total_amount" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_bortotalamount ?>">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">
<h5 class="text-underline">IVS</h5>
</div>
</div>
             
            <div class="row">
                <div class="col-6">
                    <label>IVS Unit Rate:</label>
                    <input type="text" id="nonivs_unit_ratee<?php echo $item->ss_dp_id;?>" name="nonivs_unit_rate" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_ivsunitrate?>" >
                </div>
                <div class="col-6">
                     <label>IVS Total Amount:</label><input type="text" name="nonivs_total_amount" id="nonivs_total_amountt<?php echo $item->ss_dp_id;?>" onclick="get_nonivstotalareaa(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_nland_r->ss_nlrecord_ivstotalamount?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" onclick="update_nonland_record(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal1_edit -->

<!-- modal_Allownces -->
<div class="modal fade" id="myModal_allowances<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-12">
            <h4>Add Allowances</h4>
      </div>
    </div>
</div>
<div class="modal-body">
 <div class="row">
                <div class="col-5">
                    <label>Severity Amount</label>
                    <input type="text" id="severity_amount<?php echo $item->ss_dp_id;?>" name="severity_amount" onblur="get_totalamount_s(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                  <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_s<?php echo $item->ss_dp_id;?>"  name="total_amount_s" class="form-control">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">

</div>
</div>
             
            <div class="row">
                 <div class="col-5">
                    <label>Vulnerability</label>
                    <input type="text" id="vulnerability<?php echo $item->ss_dp_id;?>" name="vulnerability" onblur="get_totalamount_v(<?php echo $item->ss_dp_id;?>)" class="form-control">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                   <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_v<?php echo $item->ss_dp_id;?>"  name="total_amount_v" class="form-control">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" onclick="insert_allowances(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_allowances -->

<!-- modal_Allownces_edit -->
<div class="modal fade" id="myModal_allowances_edit<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-12">
            <h4>Add Allowances</h4>
      </div>
    </div>
</div>
<div class="modal-body">
 <div class="row">
                <div class="col-5">
                    <?php $edit_allowances = $this->db->query("SELECT * FROM ppms_ss_allowances_detail where ss_dp_id=$item->ss_dp_id")->row(); ?>
            <input type="hidden" id="allowances_detail_id<?php echo $item->ss_dp_id;?>" name="allowances_detail_id" class="form-control" value="<?php echo $edit_allowances->allowances_detail_id?>">
                    <label>Severity Amount</label>
                    <input type="text" id="severity_amountt<?php echo $item->ss_dp_id;?>" name="severity_amount" onblur="get_totalamount_ss(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_allowances->severity_unit_amount?>">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                  <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_ss<?php echo $item->ss_dp_id;?>"  name="total_amount_s" class="form-control" value="<?php echo $edit_allowances->severity_total_amount?>">
                </div>
            </div><br>
            <div class="row">
                <div class="col-6">

</div>
</div>
             
            <div class="row">
                 <div class="col-5">
                    <label>Vulnerability</label>
                    <input type="text" id="vulnerabilityy<?php echo $item->ss_dp_id;?>" name="vulnerability" onblur="get_totalamount_vv(<?php echo $item->ss_dp_id;?>)" class="form-control" value="<?php echo $edit_allowances->vulnerability_unit_amount?>">
                </div>
                <div class="col-2 text-center">
                    <label>Total Months</label>
                   <p>X &nbsp;&nbsp; 3</p>
                </div>
                 <div class="col-5">
                    <label>Total Amount</label>
                  <input type="text" id="total_amount_vv<?php echo $item->ss_dp_id;?>"  name="total_amount_v" class="form-control" value="<?php echo $edit_allowances->vulnerability_total_amount?>">
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-3">
                    <button  class="btn btn-block btn-outline btn-primary" 
                    onClick="update_allowances(<?php echo $item->ss_dp_id;?>)" tabindex="2">Update Record</button>
                </div>
            </div>                        
            
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_edit_allowances -->

<!-- modal_payment -->
<div class="modal fade" id="myModal_payment<?php echo $item->ss_dp_id;?>">
<div class="modal-dialog modal-lg">
  <div class="modal-content">
    <div class="modal-header">
      <div class="row">
          <div class="col-12">
            <h4>Add Payment</h4>
      </div>
    </div>
</div>
<div class="modal-body">
 <div class="row">
    <div class="col-8">
        <div id="load_desc<?php echo $item->ss_dp_id;?>">
                    
                </div>
                 
            </div>
        </div>
                <div class="row">
                    <div class="col-4">
                        <label>Cheque No</label>
                        <input type="text" name="cheque_no" id="cheque_no<?php echo $item->ss_dp_id;?>" class="form-control">
                    </div>
                    <div class="col-4">
                        <label>Amount</label>
                        <input type="text" name="payment_amount" id="payment_amount<?php echo $item->ss_dp_id;?>" class="form-control">
                    </div>
                    <div class="col-4">
                        <label>Type</label>
                        <select name="bor_type" id="bor_type_id<?php echo $item->ss_dp_id;?>" class="form-control">
                            <option>Select BOR Type</option>
                             <?php $bor_type= $this->db->query("SELECT * FROM ppms_ss_bortype")->result(); 
                             foreach($bor_type as $bor_type){?>
                             <option><?php echo $bor_type->ss_bortype_name; ?></option>
                             <?php } ?>
                            
                        </select>
                    </div>
            </div>
            <br>
            <div class="row">
                <div class="col-2">
                    <button  class="btn  btn-outline btn-primary" onclick="insert_payment(<?php echo $item->ss_dp_id;?>)" tabindex="2">Save Record</button>
                </div>
            </div>                        
    </div>
    <div class="modal-footer">
      <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
    </div>
</div>
</div><!-- /.modal-dialog -->
</div><!-- /.modal_payment -->
                                                        </tr>

                                                        <?php
 $i++;
 } ?>
 
                                                    </tbody>
                                                    <tfoot>

                                                </table>
                                            <?php 

                                            }?>