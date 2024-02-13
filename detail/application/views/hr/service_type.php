
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">

                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>Display status</h4> -->


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
                                            <h5>Service Type</h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>SerialNo </th>
                                                            <th>Service Type</th>

                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_service_type_tbl")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
                        <td><?php echo $i;?></td>


        <td><?php echo $item->std_name;?></td>

        <td><a href="<?php echo base_url()?>complaint/edit_service_type/<?php echo $item->std_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
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
                                            <h5>Add Service Type</h5>


                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <form role="form" method="post" id="create_item"
                                                    enctype="multipart/form-data" action="<?php echo base_url()?>complaint/insert_std" autocomplete="off"
                                                    onsubmit="return confirm('Are you sure you want to submit this form?');">

                                                    <table class="table gridexample">
                                                        <tr>
                                                            <td>Service Type</td>
                                                            <td><input type="text" autofocus
                                                                    placeholder="Enter Service Type" required
                                                                    id="" class="form-control"
                                                                    name="std_name" tabindex="1"></td>
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
