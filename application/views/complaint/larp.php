                    <form method="POST" action="<?php echo base_url()?>Complaint/insert_larp" enctype="multipart/form-data">
                      <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>LARP</h4>
                                        </div>
                    <input type="hidden" name="category_id" value="<?php echo $category_id ?>">
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id=""
                                                    class="table">
                                                    <tbody>
                                                <tr>
                                                    <td>Sector:</td>
                                                    <td>
                                                        
                                                    <select name="sector_id" class="form-control" onChange="get_project(this.value)" id="sector_id">
                                                        <option>Select Sector</option>
                                                            <?php $sector=$this->db->query("select * from ppms_sector")->result();
            foreach($sector as $sector){
            ?>
                                                            <option value="<?php echo $sector->sector_id;?>">
                                                                <?php echo $sector->sector_name;?></option>
                                                            <?php }?>
                                                        </select>
                                              </td>
                                                    <td>Project:</td>
                                                    <td>
                                                        
                                                    <select name="project_id" id="project_id" class="form-control" onChange="get_subproject(this.value)">
                                                        <option>Select Project</option>
                                                    </select>
                                                            
                                              </td>
                                          </tr>
                                          <tr>
                                            <td>Subproject:</td>
                                                    <td>
                                                        
                                                    <select name="subproject_id" id="subproject_id" onChange="get_site(this.value)" class="form-control">
                    <option>Select Subproject</option>
                                                       
                                                        </select>
                                              </td>
                                              <td>Site:</td>
                                                    <td>
                        <select name="site_id" id="site_id" onChange="get_description(this.value)" class="form-control">
                                                        <option>Select Site</option>
                                                            
                                                        </select>
                                              </td>
                                            </tr>
                                                   </tbody>     
                                                    </table>
                                              
                                            </div>
                                        </div>


<div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>SECTION</h4>
                                        </div>
                                        
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="myTable"
                                                    class="table">
                                                    <tbody>
                                                <tr>
                                                    <td><label>Name:</label>
                                <input type="text" name="name[]" class="form-control" id="example-search-input">
                                              </td>
                                                    <td><label>Date:</label>
                                    <input type="date" name="date[]" class="form-control">
                                              </td>
                                            <td><label>file:</label>
                                    <input type="file" name="files[]" class="form-control">
                                              </td>
                                              <td><label>Remarks:</label>
                        <input type="text" name="remarks[]" class="form-control">
                                              </td>
                                              <td >
                                            <img src="<?php echo base_url('img/plus.png')?>" width="35px" height="35px" onClick="add_new_row()" style="margin-top: 25px;">
                                            </td>
                                            </tr>
                                                   </tbody>     
                                                    </table>
                                              
                                            </div>
                                        </div>


                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                
                                 <!-- Table -->
                            </div>
                            </div>
                              <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Add Land Record</h4>
                                        </div>
                                        
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="bor_Table"
                                                    class="table">
                                                    <tbody>
                                                <tr>
                                                    <td>Description:
                                <input type="text" name="add_land_record_description[]" class="form-control">
                                              </td>
                                              <td>Total Area(Marla):
                                <input type="text" name="d_total_area[]" class="form-control">
                                              </td>
                                              <td>Total Land Cost:
                                <input type="text" name="d_total_land_cost[]" class="form-control">
                                              </td>
                                              <td>Total No of Dp:
                                <input type="text" name="total_no_of_dp[]" class="form-control">
                                              </td>
                                                 
                                                <td align="right-end">
                                            <img src="<?php echo base_url('img/plus.png')?>" width="35px" height="35px" onClick="add_row()" style="margin-top: 23px;">
                                            </td><td></td>   
                                            </tr>
                                       
                                            
                                                   </tbody>     
                                                    </table>
                                                    <table id="bor_taxes"
                                                    class="table">
                                            <tbody>
                                            <tr><td><h5 class="text-underline">Taxes BOR</h5></td></tr>
                                         <tr><td>Add/less:
                                <select name="bor_tax_category[]" class="form-control" id="bor_tax_category">
                                                        <option>Select Category</option>
    <?php $category=$this->db->query("select * from ppms_land_category")->result();
            foreach($category as $category){
            ?>
                        <option value="<?php echo $category->category_id;?>">
                                                                <?php echo $category->category_name;?></option>
                                                            <?php }?>
                                                        </select>
                                              </td>
                                              <td>Tax Name:
                                <input type="text" name="bor_tax_name[]" class="form-control">
                                              </td>
                                              <td>Value:
                                <input type="text" name="bor_tax_value[]" class="form-control">
                                              </td>
                                              <td>
                                <input type="hidden" name="bor_source_category[]" class="form-control" value="BOR">
                                              </td>
                                              <td align="right-end">
                                            <img src="<?php echo base_url('img/plus.png')?>" width="35px" height="35px" onClick="bor_taxes()" style="margin-top: 23px;">
                                            </td>  
                                            </tr>
                                        </tbody>
                                    </table>
                                    <table id="ivs_taxes" class="table">
                                    <tbody>
                                             <tr><td><h5 class="text-underline">Taxes IVS</h5></td></tr>
                                            <tr>
                                               <td>Add/less:
                               <select name="ivs_tax_category[]" class="form-control" id="ivs_tax_category">
                                                        <option>Select Category</option>
    <?php $category=$this->db->query("select * from ppms_land_category")->result();
            foreach($category as $category){
            ?>
                        <option value="<?php echo $category->category_id;?>">
                                                                <?php echo $category->category_name;?></option>
                                                            <?php }?>
                                                        </select>
                                              </td>
                                              <td>Tax Name:
                                <input type="text" name="ivs_tax_name[]" class="form-control">
                                              </td>
                                              <td>Value:
                                <input type="text" name="ivs_tax_value[]" class="form-control">
                                              </td>
                                               <td>
                                <input type="hidden" name="ivs_source_category[]" class="form-control" value="IVS">
                                              </td>
                                              <td align="right-end">
                                            <img src="<?php echo base_url('img/plus.png')?>" width="35px" height="35px" onClick="ivs_taxes()" style="margin-top: 23px;">
                                            </td> 
                                            </tr>
                                        </tbody>     
                                                    </table>
                                                    <table>
                                                  <tr><td><button type="submit" class="btn btn-block btn-outline btn-primary" id="add" name="add" tabindex="2">Save Record</button></td></tr>
                                              </table>
                                            </div>
                                        </div>


                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                
                                 <!-- Table -->
                            </div>
                            </div>
                            </form>

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
    function get_project(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_project')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#project_id").html('<option value="">Select project</option');
                        $("#project_id").html(data);
                       

                    }
                }
                );
            }
   function get_subproject(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_subproject')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#subproject_id").html('<option value="">Select Subproject</option');
                        $("#subproject_id").html(data);
                       

                    }
                }
                );
            }
            function get_site(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_site')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#site_id").html('<option value="">Select Site</option');
                        $("#site_id").html(data);
                    }
                }
                );
            }