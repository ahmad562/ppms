
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
<a href="<?php echo base_url('Covenant/create_covenant_detail')?>"><button class="btn btn-danger">
    Add New Covenant Detail</button></a>
                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body">
                            <div class="row">

                                                            <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Covenant Detail List</h5>
                                            <a href="<?php echo base_url('Covenant/report'); ?>">
    <button class="btn btn-primary">
    Covenant Report
    </button>
</a>

                                        </div>
                                        <div class="card-block">
      
        
                                        <div class="dt-responsive table-responsive">
<table id="simpletable" class="table  table-bordered  nowrap">
            <thead>
                <tr>
                 <?php /*?><th>ID.</th><?php */?>
                   <th>SNo.</th>
                    <th>Covenant</th>
                    <th>Category <br>Name</th>
                    <th>Reference</th>
                    <th>Status</th>
                    <th>Covenant <br> Detail</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php 
                $covenant_details=$this->db->query("
                SELECT * FROM covenant_detail AS sd,covenant_name AS cn
                WHERE sd.`covenant_id`=cn.`covenant_name_id`
                
                ")->result();
                foreach ($covenant_details as $covenant_detail) { ?>
                    <tr>
                        <?php /*?><td>
                    <?php echo $covenant_detail->covenant_detail_id; ?></td>
                    <?php */?>
                       <td><?php echo $covenant_detail->serial_no; ?>
                       
                    
                    </td>
                        <td><?php echo  wordwrap($covenant_detail->covenant_name,5,"<br>\n"); ?></td>
                        <td><?php echo wordwrap($covenant_detail->category_name,5,"<br>\n"); ?></td>
                        <td ><?php echo wordwrap($covenant_detail->reference,5,"<br>\n"); ?></td>
                        <td><?php echo wordwrap($covenant_detail->status_id,5,"<br>\n");; ?></td>
            <td>
        <?php echo wordwrap($covenant_detail->covenant_detail,15,"<br>\n");
                        ; ?></td>
                        <td>
                            <a class="btn btn-primary" href="<?php echo base_url('Covenant/edit_covenant/'.$covenant_detail->covenant_detail_id); ?>">Edit</a>
                            <a class="btn btn-danger" href="<?php echo base_url('Covenant/delete_covant_detail/' . $covenant_detail->covenant_detail_id); ?>" onclick="return confirm('Are you sure you want to delete this covenant detail?')">Delete</a>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    </div>
    </div>
    </div>
<style>

.table-fixed {
    background-color: #fbfbfb;
    width: 100%;
}
.table-fixed tbody {
    height: 200px;
    overflow-y: auto;
    width: 100%;
}
.table-fixed thead, .table-fixed tbody, .table-fixed tr, .table-fixed td, .table-fixed th {
    display: block;
}
.table-fixed tbody td {
    float: left;
}
.table-fixed thead tr th {
    background-color:#159bd0;
    border-color:#0881b1;
    float: left;
	  color:#fff;
}
.read_article{
	text-align:center;
}



</style>
