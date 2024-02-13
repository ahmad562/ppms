<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Checklist Items</h4>

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
                                    <h5>Checklist Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>Item Name</th>
                                                    <th>Organization</th>
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
               $result1 = $this->db->query("SELECT * FROM items ")->result();
               foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>


                                                    <td><?php echo $item->item_name;?></td>
                                                    <td><?php if($item->organization_id==1){
                                                        
                                                        echo "PMCSC";
                                                    }else if($item->organization_id==2){

echo "CIU";

                                                    }else if($item->organization_id==3){

echo "PMU";

                                                    }
                                                        

                                                        
                                                        
                                                    ?></td>

                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Welcome/edit_item/<?php echo $item->item_id;?>">
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
                                    <h5>Edit Checklist</h5>
<?php $rowss = $this->db->query("SELECT * FROM items where item_id=$id")->row();?>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">


                                            <table class="table">
                                                <tr>
                                                    <td>Checklist Name</td>
                                                    <td><textarea type="text" autofocus placeholder="Enter Item Name"
                                                            required id="item" class="form-control" name="item"
                                                            tabindex="1" >
                                                            <?php echo $rowss->item_name;?>
                                                        
                                                        </textarea>
                                                        
                                                            <input type="hidden" autofocus placeholder="Enter Item Name"
                                                            required id="item_id" class="form-control" name="item_id"
                                                            tabindex="1" value="<?php echo $rowss->item_id;?>">
                                                        
                                                        </td>
                                                </tr>

                                                <tr> 
                                                    <td>Organization</td>
                                                    <td>
                                                        
                                                    <select name="organization_id" class="form-control">
           
                                    <option value="<?php echo $organizations->organization_id;?>">
                                                                <?php if($item->organization_id==1){
                                                        
                                                        echo "PMCSC";
                                                    }else if($item->organization_id==2){

echo "CIU";

                                                    }else if($item->organization_id==3){

echo "PMU";

                                                    }
                                                        

                                                        
        ?></option>
         <option value="1">
                                                                 PMCSC</option>

                                                                 <option value="2">
                                                                 CIU</option>

                                                                 <option value="3">
                                                                 PMU</option>
                                                           
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Save Record</button></td>
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
	if(isset($_POST['add'])){
		extract($_POST);
	
$done=$this->db->query("update items set item_name='$item' where item_id=$item_id");	
	
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Welcome/add_item'));
		}
    }
	
	
	
	
	
	?>