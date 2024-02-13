<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Display Organization</h4>

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
                                    <h5>Organization Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <td>Organization</td>
                                                    <td>City Name</td>
                                                    <td>order By</td>

                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM organization as o,city as c
                  where o.city_id=c.city_id
                  ")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>


                                                    <td><?php echo $item->organization_name;?></td>
                                                    <td><?php echo $item->city_name;?></td>
                                                    <td><?php echo $item->order_by;?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_Organization/<?php echo $item->organization_id;?>">
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
                            <!-- Zero config.table end -->





                        </div>
                        <div class="col-sm-6">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>Edit Organization</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Welcome/edit_organization_record')?>"
                                            autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">
                                            <?php 
                    $result1 = $this->db->query("SELECT * FROM organization as o,city as c
                    where o.city_id=c.city_id
                    and o.organization_id=$id")->row();

                    ?>

                                            <input type="hidden" placeholder="Enter Organization Name" required
                                                id="organization_id" class="form-control" name="organization_id"
                                                value="<?php echo $result1->organization_id;?>">
                                            <table class="table">
                                                <tr>
                                                    <td>Organization</td>
                                                    <td>
                                                        <input type="text" autofocus
                                                            placeholder="Enter Organization Name" required
                                                            id="organization_name" class="form-control"
                                                            name="organization_name" tabindex="1"
                                                            value="<?php echo $result1->organization_name;?>">
                                                    </td>

                                                </tr>


                                                <tr>
                                                    <td>City</td>
                                                    <td>
                                                        <select name="city_id" class="form-control" tabindex="2">

                                                            <option value="<?php echo $result1->city_id;?>">
                                                                <?php echo $result1->city_name;?></option>
                                                            <?php $cities=$this->db->query("select * from city")->result();
			foreach($cities as $citiess){
			?>
                                                            <option value="<?php echo $citiess->city_id;?>">
                                                                <?php echo $citiess->city_name;?></option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Order By</td>
                                                    <td>
                                                        <input type="text" placeholder="Enter Order By"
                                                            value="<?php echo $result1->order_by;?>" required
                                                            id="order_by" class="form-control" name="order_by"
                                                            tabindex="3">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Edit Record</button></td>
                                                </tr>
                                            </table>
                                        </form>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                            </div>

                        </div>


                        <?php 
	/*if(isset($_POST['add'])){
		extract($_POST);
	///$done=$this->db->query("select * from Organization where Organization_name='$Organization'")->row();
	//if($done){
$done=$this->db->query("update organization set organization_name='$organization'
 where organization_id=$organization_id");	
	///}
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/display_organization'));
		}
	
	
	}
	*/
	
	
	?>