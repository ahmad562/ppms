<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Certificate_tax') ?>">
                            <button class="btn btn-danger">View Certificate List</button>
                        </a>
                    </div>
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">



<?php 
$record=$this->db->query("select * from certificate_tax where ctp_id=$id")->row();
?>
<form action="<?php echo base_url('certificate_tax/update/'.$id); ?>" method="post">
    <table class="table">
       
        <tr>
            <th>Detail</th>
            <td>
                <textarea name="ctp_option" class="form-control"><?php echo $record->ctp_option; ?></textarea>
            </td>
        </tr>
       
       
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Edit Record" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>




                                </div></div></div></div></div>



