<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>KPCIP Enviromental Safeguard Documents</h4>

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
                                    <h5>KPCIP Enviromental Safeguard Documents</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>Title</th>


                                                    <th>Type</th>
                                                    <th>Period</th>
                                                    <th>For The Period</th>
                                                    <th>File</th>
                                                    
                                                    <th>Edit</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
			   error_reporting(0);
			   
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM total_reports where flag_id=1")->result();
                  foreach($result1 as $item){?>
                                                <tr class="gradeX">
                                                    <td><?php echo $i;?></td>


                                                    <td><?php echo $item->title;?></td>
                                                    <td><?php echo $item->type;?></td>
                                                    
                                                    
                                                       <td><?php echo $item->period_type;?></td>
                                                       <td><?php echo $item->period;?></td>
                                                    <td>
                                                        <a href="<?php echo base_url().$item->file_attached?>">
                                                            File Attached</a>


                                                    </td>
                                                   <?php /*?> <td>
                                                    <?php if($item->flag_id==1){
echo "Enviromental Safeguard";                                                    
}else if($item->flag_id==2){
    echo "Social Safeguard";                                                   
     }else if($item->flag_id==3){
    echo "M&E Reports";                                                   
     }?></td>
     <?php */?>
 


                                                    <td align="center"><a
                                                            href="<?php echo base_url()?>Total_reports/edit/<?php echo $item->report_id;?>">
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
                                    <h5>Add New Enviromental Safeguard</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action="<?php echo base_url('Total_reports/store')?>" autocomplete="off"
                                            onsubmit="return confirm('Are you sure you want to submit this form?');">


                                            <table class="table">
                                                <tr>
                                                    <td>Title</td>
                                                    <td><input type="text" autofocus placeholder="Enter Title Name"
                                                            required id="title" class="form-control" name="title"
                                                            tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>Type</td>
                                                    <td><input type="text" placeholder="Enter Type Name" required
                                                            id="type" class="form-control" name="type" tabindex="2">
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>Period Type</td>
                                                    <td><select name="period_type"class="form-control">
                                                       <option value="">Select Option</option>
                                                       <option value="Monthly">Monthly</option>
                                                        <option value="Quarterly">Quarterly</option>
                                                        <option value="Semi-Annual">Semi-Annual</option>
                                                        <option value="Yearly">Yearly</option>
                                                    </select>
                                                    </td>
                                                </tr>

                                                <tr>
                                                    <td>For The Period </td>
                                                    <td><input type="text" placeholder="Enter Period Name" 
                                                            id="period" class="form-control" name="period" tabindex="2">
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>File</td>
                                                    <td><input type="file" placeholder="Enter File Name" required
                                                            id="Pict_upload" class="form-control" name="Pict_upload"
                                                            tabindex="3"></td>
                                                </tr>
                                                <input type="hidden" placeholder="Enter File Name" required value="1"
                                                    id="flag_id" class="form-control" name="flag_id" tabindex="4">
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