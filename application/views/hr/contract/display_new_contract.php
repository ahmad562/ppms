<?php 
$done=$this->db->query("select * from hr_consultancy_contracts where hr_cid=$id")->row();


?>
 
    <tr style="background-color:#000;color:#fff">
        <td colspan="5"><b>Edit Record</b></td>
    </tr>
    <tr>
        <td>
            <label for="package">Package:</label>
            <input type="text" id="package" name="package" class="form-control" 
                value="<?php echo $done->package?>">
        </td>

        <input type="hidden" id="firm_indi_id" name="firm_indi_id" class="form-control" required value="Individual">

        <input type="hidden" id="hid" name="id" class="form-control" required value="<?php echo $id;?>">

        <input type="hidden" id="emp_id" name="emp_id" class="form-control" required
            value="<?php echo $done->emp_id;?>">

        <td>
            <label for="contract_award">NTP Date:</label>
            <input type="date" id="ntp_date" name="ntp_date" class="form-control" 
                value="<?php echo $done->ntp_date;?>">
        </td>

        <td>
            <label for="contract_award">Contract
                Award:</label>
            <input type="date" value="<?php echo $done->contract_award;?>" id="contract_award" name="contract_award"
                class="form-control" required>
        </td>

        <td>
            <label for="completion_date">Completion
                Date:</label>
            <input type="date" value="<?php echo $done->completion_date;?>" id="completion_date" name="completion_date"
                class="form-control" required>
        </td>
        <td>
            <label for="revised_date">Revised Date:</label>
            <input type="date" value="<?php echo $done->revised_date;?>" id="revised_date" name="revised_date"
                class="form-control" >
        </td>



    </tr>
    <tr>
        <td>
            <label for="revised_date">Resignation
                Date:</label>
            <input type="date" value="<?php echo $done->resignation_date;?>" id="resignation_date"
                name="resignation_date" class="form-control" >
        </td>
        <td>
            <label for="cont_amt_orig">Original
                Amount:</label>
            <input type="text" value="<?php echo $done->cont_amt_orig;?>" id="cont_amt_orig" name="cont_amt_orig"
                class="form-control" >
        </td>

        <td>
            <label for="cont_amt_revised">Revised
                Amount:</label>
            <input type="text" value="<?php echo $done->cont_amt_revised;?>" id="cont_amt_revised"
                name="cont_amt_revised" class="form-control" >
        </td>
        <td>
            <label for="disbursement">Disbursement:</label>
            <input type="text" value="<?php echo $done->disbursement;?>" id="disbursement" name="disbursement"
                class="form-control" >
        </td>

        <input type="hidden" value="PKR Rs" id="currency" name="currency" class="form-control" required>

        <td>
            <label for="status_id">Status:</label>
            <select id="status_id" name="status_id" class="form-control" required>
                <?php if($done->status_id==1){?>
                <option value="1">Active</option>
                <?php }else if($done->status_id==0){?>
                <option value="0">Inactive</option>
                <?php }elseif($done->status_id==2){?>

                <option value="2">Resignation</option>

                <?php }?>

                <option value="1">Active</option>
                <option value="0">Inactive</option>
                <option value="2">Resignation</option>
                <!-- Add options dynamically if needed -->
            </select>
        </td>
    </tr>

    <tr>

        <td>
            <label for="cont_amt_orig">NTP File:</label>
            <input type="file" id="ntp_file" value="<?php echo $done->ntp_file;?>" name="ntp_file" class="form-control">
        </td>

        <td>
            <label for="cont_amt_orig">Joining Date
                File:</label>
            <input type="file" id="join_file" value="<?php echo $done->join_date_file;?>" name="join_file"
                class="form-control">
        </td>
        <td>
            <label for="disbursement">Contract Renewal
                File:</label>
            <input type="file" id="renewal_file" value="<?php echo $done->renewal_file;?>" name="renewal_file"
                class="form-control">
        </td>
        <td>
            <label for="disbursement">Resignation
                File:</label>
            <input type="file" id="resignation_file" value="<?php echo $done->resignation_file;?>"
                name="resignation_file" class="form-control">
        </td>
        <td>
            <input type="submit" name="submit" id="contractForm" value="Edit Contract" class="btn btn-danger">
        </td>
    </tr>
</form>