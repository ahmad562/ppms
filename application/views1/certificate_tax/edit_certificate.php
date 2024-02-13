<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Add Award</h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <a href="<?php echo base_url('Certificate_tax/display_award_list') ?>">
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
            <th>Flag</th>
            <td>
                <select name="ctp_flag" class="form-control">
                    <option value="1" <?php if ($record->ctp_flag == 1) echo 'selected'; ?>>Engineer</option>
                    <option value="2" <?php if ($record->ctp_flag == 2) echo 'selected'; ?>>PMU</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Detail</th>
            <td>
                <textarea name="ctp_option" class="form-control"><?php echo $record->ctp_option; ?></textarea>
            </td>
        </tr>
        <tr>
            <th>Tax/DPR</th>
            <td>
                <input type="text" name="ctp_attribute" class="form-control" value="<?php echo $record->ctp_attribute; ?>" />
            </td>
        </tr>
        <tr>
            <th>Add/Less</th>
            <td>
                <select name="add_less" class="form-control">
                    <option value="add" <?php if ($record->add_less === 'add') echo 'selected'; ?>>Add</option>
                    <option value="less" <?php if ($record->add_less === 'less') echo 'selected'; ?>>Less</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>DPR</th>
            <td>
                <select name="dpr" class="form-control">
                    <option value="0" <?php if ($record->dpr == 0) echo 'selected'; ?>>No</option>
                    <option value="1" <?php if ($record->dpr == 1) echo 'selected'; ?>>Yes</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <input type="submit" name="submit" value="Save" class="btn btn-primary" />
            </td>
        </tr>
    </table>
</form>




                                </div></div></div></div></div>



