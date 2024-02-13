<?php $result2 = $this->db->query("SELECT * FROM grm_nc_tbl AS gnt,grm_uc_tbl AS gut where gnt.nc_id=$aid")->row(); ?>
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <h4>Display NC</h4>


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
                                            <h5>NC Records</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>NC Name</th>
                                                            <th>UC Name</th>
                                                            <th>Area</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM grm_nc_tbl AS gnt,grm_uc_tbl AS gut Where gnt.uc_id=gut.uc_id")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>
                        <td><?php echo $item->nc_name;?></td>
                        <td><?php echo $item->uc_name;?></td>
                        <td><?php echo $item->area;?></td>

        <td><a href="<?php echo base_url()?>complaint/edit_nc/<?php echo $item->nc_id;?>">
       <img src="<?php echo base_url()?>img/edit.png"
             width="30px" height="30px" /> </a>
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
                                            <h5>Add NC</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>Complaint/update_nc" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">
<input type="hidden" name="nc_id" class="form-control" value="<?php echo $result2->nc_id ?>">
                                                    <table class="table gridexample">
                                                                    <tr>
                                                                    <td>NC</td>
                                                            <td><input type="text" name="nc_name" class="form-control" value="<?php echo $result2->nc_name ?>"></td>
                                                         </tr>
                                                           <tr>
                                                                    <td>UC</td>
                                                             <td>
                                                                 <select name="uc_id" class="form-control">
                                               <option value="<?php echo $result2->uc_id ?>"><?php echo $result2->uc_name ?></option>           <option>Select UC</option>
                                                                <?php $uc=$this->db->query("select * from grm_uc_tbl")->result();
                                               foreach($uc as $uc){
                                                                ?>
                                                                <option
                                                                    value="<?php echo $uc->uc_id;?>">
                                                                    <?php echo $uc->uc_name;?>
                                                                </option>
                                                                <?php }?>
                                                            </select>
                                                             </td>
                                                         </tr>
                                                         <tr>
                                                                    <td>Area</td>
                                                            <td><input type="text" name="area" class="form-control" value="<?php echo $result2->area ?>"></td>
                                                         </tr>
                                                           <tr>
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
                                <!-- Table -->
                                                               
                                 <!-- Table -->
                            </div>

                        </div>
                      