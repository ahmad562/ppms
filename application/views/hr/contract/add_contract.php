<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">


                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-block">
<?php
error_reporting(0);
$doneNTP=$this->db->query("select * from hr_consultancy_files where emp_id=$id and file_name='ntp'")->row();
 
 $doneJOIN=$this->db->query("select * from hr_consultancy_files where emp_id=$id and file_name='join'")->row();
      
 $doneRenew=$this->db->query("select * from hr_consultancy_files where emp_id=$id and file_name='renewal'")->row(); 
 $doneResignation=$this->db->query("select * from hr_consultancy_files where emp_id=$id and file_name='resignation'")->row();
      


?>
                                    <div class="row">
                                        <!-- counter-card-1 start-->
                                        <div class="col-md-12 col-xl-3">
                                            <div class="card counter-card-1">
                                                <div class="card-block-big"
                                                    style="background: linear-gradient(135deg, #32E69B, #C5E3EC); color: #fff;">
                                                    <div>
                                                        <h4>NTP <br>Date </h4>
                                                        <p> <?php echo $doneNTP->file_date?><br>
                                                            <span class="f-right ">
                                                                <font color="white"><i
                                                                        class="icofont icofont-arrow-up"></i></font>
                                                        <a href="<?php echo base_url()?>img/emp_files/<?php echo $doneNTP->file_attached?>"> File upload</a>
                                                            </span>
                                                        </p>
                                                        <div class="progress">
                                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-pink"
                                                                role="progressbar" style="width: 70%" aria-valuenow="70"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <i class="icofont icofont-comment"></i>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- counter-card-1 end-->
                                        <!-- counter-card-2 start -->
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card counter-card-2">
                                                <div class="card-block-big"
                                                    style="background: linear-gradient(135deg, #D3BEDB, #05AFE2); color: #fff;">
                                                    <div>
                                                        <h4>
                                                            <font color="white"> Joining <br>Date
                                                        </h4>
                                                        <p><?php echo $doneJOIN->file_date?><br>
                                                            <span class="f-right">
                                                                <i class="icofont icofont-arrow-up"></i>
                                                                <a href="<?php echo base_url()?>img/emp_join/<?php echo $doneJOIN->file_attached?>"> File upload</a> 
                                                            </span>
                                                            </font>
                                                        </p>
                                                        <div class="progress ">
                                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-success"
                                                                role="progressbar" style="width: 50%" aria-valuenow="50"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <i class="icofont icofont-coffee-mug"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- counter-card-2 end -->
                                        <!-- counter-card-3 start -->
                                        <div class="col-md-6 col-xl-3">
                                            <div class="card counter-card-3">
                                                <div class="card-block-big"
                                                    style="background: linear-gradient(135deg, #F19F07, #A0E205); color: #fff;">

                                                    <div>
                                                        <h4>Resignation<br> Date</h4>
                                                        <p><?php if($doneResignation){
                                                            echo $doneResignation->file_date;
                                                        }else{
                                                            echo "No Given";

                                                            }?><br>
                                                            <span class="f-right">
                                                                <i class="icofont icofont-arrow-down"></i>
                                        <a href="<?php echo base_url()?>img/emp_resignation/<?php echo $doneResignation->file_attached?>"> File upload</a> 
                                                            </span>
                                                        </p>
                                                        <div class="progress ">
                                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-default"
                                                                role="progressbar" style="width: 90%" aria-valuenow="90"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <i class="icofont icofont-upload"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- counter-card-3 end -->

                                        <!-- counter-card-1 start-->
                                        <div class="col-md-12 col-xl-3">
                                            <div class="card counter-card-1">
                                                <div class="card-block-big"
                                                    style="background: linear-gradient(135deg, #F10707, #CCDBA8); color: #fff;">
                                                    <div>
                                                        <h4>Contract <br> Renewal</h4>
                                                        <p><?php echo $doneRenew->file_date?><br>
                                                            <span class="f-right">
                                                                <i class="icofont icofont-arrow-up"></i>
                                 <a href="<?php echo base_url()?>img/emp_renewal/<?php echo $doneRenew->file_attached?>"> File upload</a> 
                                                            </span>
                                                        </p>
                                                        <div class="progress ">
                                                            <div class="progress-bar progress-bar-striped progress-xs progress-bar-pink"
                                                                role="progressbar" style="width: 70%" aria-valuenow="70"
                                                                aria-valuemin="0" aria-valuemax="100"></div>
                                                        </div>
                                                    </div>
                                                    <i class="icofont icofont-comment"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- counter-card-1 end-->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="page-body">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card">
                                        <div class="card-block">

                                            <table id="simpletable" class="table table-striped table-bordered nowrap">

                                                <tbody>
                                                    <?php
			  
                  $item = $this->db->query("SELECT * FROM ppms_service_tbl AS ps, ppms_service_type_tbl AS pst, 
                  organization AS o 
                  WHERE ps.`std_id`=pst.`std_id`
                  AND ps.`organization_id`=o.`organization_id` and service_id=$id
                  ")->row();
                 ?>

                                                    <tr class="gradeX">
                                                        <td rowspan="6" valign="center">
                                                            <img src="<?php echo base_url('img/').$item->emp_pic; ?>"
                                                                alt="Employee Image" width="100%" height="300">
                                                        </td>
                                                        <th>Service Designation</th>
                                                        <td><?php echo $item->designation_name;?></td>
                                                        <th>Organization</th>
                                                        <td><?php echo $item->organization_name;?></td>

                                                    </tr>
                                                    <tr>


                                                        <th>Full Name </th>


                                                        <td><a
                                                                href="<?php echo base_url('Hr_consultancy_contracts/add_contract/'.$item->service_id)?>"><?php echo $item->s_fullname;?>
                                                        </td>
                                                       

                                                    </tr>
                                                  
                                                    <tr>
                                                        <th>Contact No</th>

                                                        <td><?php echo $item->s_contact_no;?></td>
                                                        <th>Employee No</th>
                                                        <td><?php echo $item->emp_no;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>CNIC</th>


                                                        <td><?php echo $item->cnic;?></td>
                                                        <th>Salary</th>
                                                        <td><?php echo $item->salary;?></td>
                                                    </tr>
                                                    <tr>
                                                        <th>Gender</th>
                                                        <td><?php echo $item->gender;?></td>
                                                        <th>Loan/Grant</th>
                                                        <td><?php echo $item->loan_grant;?></td>

                                                    </tr>
                                                    <tr>
                                                        <th>Service Type</th>

                                                        <td><?php echo $item->std_name;?></td>
                                                       
                                                    </tr>
                                                </tbody>
                                                <tfoot>
                                            </table>







                                        </div>
                                    </div>
                                </div>
                            </div>





                            <div class="page-body">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="card">
                                            <div class="card-block">

                                                <div class="row">


                                                    <table id="simpletable" class="table  table-bordered nowrap">
                                                        <tr style="background-color:#32E69B; color:#fff">


                                                            <th>Contract <br>Award</th>
                                                            <th>Completion <br> Date</th>
                                                            <th>Revised <br>Date</th>

                                                            <th>Original<br> Amount</th>
                                                            <th>Revised <br> Amount</th>
                                                            <th>Disbursement</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                        <?php  
        $this->db->select('*');
        $this->db->from('hr_consultancy_contracts');
        $this->db->join('ppms_service_tbl', 'hr_consultancy_contracts.emp_id = ppms_service_tbl.service_id');
        $this->db->where('ppms_service_tbl.service_id', $id);

        $result = $this->db->get()->result();
       
                                            foreach ($result as $contract) { ?>
                                                        <tr>



                                                            <td><?php echo $contract->contract_award; ?></td>
                                                            <td><?php echo $contract->completion_date; ?></td>
                                                            <td><?php echo $contract->revised_date; ?></td>

                                                            <td><?php echo $contract->cont_amt_orig; ?></td>
                                                            <td><?php echo $contract->cont_amt_revised; ?></td>
                                                            <td><?php echo $contract->disbursement; ?></td>
                                                            <td><?php if($contract->status_id==1){
                                                    echo "Active";
                                                 }else{
                                                    echo "In Active";
                                                 } ?></td>
                                                            <td>
                                                                <a href="javascript:"
                                                                    onClick="get_contracts(<?php echo $contract->hr_cid; ?>)">Edit</a>
                                                                <a
                                                                    href="<?php echo base_url('Hr_consultancy_contracts/delete/' . $contract->hr_cid); ?>">Delete</a>
                                                            </td>
                                                        </tr>
                                                        <?php } ?>
                                                    </table>


                                                    <form method="post" enctype="multipart/form-data" action="<?php echo base_url('Hr_consultancy_contracts/edit_new_hr'); ?>">
                                                        <tbody id="add_contract_new">

<table class="table">
   <tbody id="add_contract_new">



    </tbody>
</table>
    </form>

    <form enctype="multipart/form-data"
                                                                action="<?php echo base_url('Hr_consultancy_contracts/add_new_hr'); ?>"
                                                                method="post">
    <table class="table">
                                                        <tbody>
                                                            
                                                                <tr style="background-color:#000;color:#fff">
                                                                    <td colspan="5"><b>Add Record</b></td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label for="package">Package:</label>
                                                                        <input type="text" id="package" name="package"
                                                                            class="form-control" required>
                                                                    </td>

                                                                    <input type="hidden" id="firm_indi_id"
                                                                        name="firm_indi_id" class="form-control"
                                                                        required value="Individual">

                                                                    <input type="hidden" id="emp_id" name="emp_id"
                                                                        class="form-control" required
                                                                        value="<?php echo $item->service_id;?>">

                                                                    <td>
                                                                        <label for="contract_award">NTP Date:</label>
                                                                        <input type="date" id="ntp_date" name="ntp_date"
                                                                            class="form-control" required>
                                                                    </td>

                                                                    <td>
                                                                        <label for="contract_award">Contract
                                                                            Award:</label>
                                                                        <input type="date" id="contract_award"
                                                                            name="contract_award" class="form-control"
                                                                            required>
                                                                    </td>

                                                                    <td>
                                                                        <label for="completion_date">Completion
                                                                            Date:</label>
                                                                        <input type="date" id="completion_date"
                                                                            name="completion_date" class="form-control"
                                                                            required>
                                                                    </td>
                                                                    <td>
                                                                        <label for="revised_date">Revised Date:</label>
                                                                        <input type="date" id="revised_date"
                                                                            name="revised_date" class="form-control"
                                                                            required>
                                                                    </td>



                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <label for="revised_date">Resignation
                                                                            Date:</label>
                                                                        <input type="date" id="resignation_date"
                                                                            name="resignation_date" class="form-control"
                                                                            required>
                                                                    </td>
                                                                    <td>
                                                                        <label for="cont_amt_orig">Original
                                                                            Amount:</label>
                                                                        <input type="text" id="cont_amt_orig"
                                                                            name="cont_amt_orig" class="form-control"
                                                                            required>
                                                                    </td>

                                                                    <td>
                                                                        <label for="cont_amt_revised">Revised
                                                                            Amount:</label>
                                                                        <input type="text" id="cont_amt_revised"
                                                                            name="cont_amt_revised" class="form-control"
                                                                            required>
                                                                    </td>
                                                                    <td>
                                                                        <label for="disbursement">Disbursement:</label>
                                                                        <input type="text" id="disbursement"
                                                                            name="disbursement" class="form-control"
                                                                            required>
                                                                    </td>

                                                                    <input type="hidden" value="PKR Rs" id="currency"
                                                                        name="currency" class="form-control" required>

                                                                    <td>
                                                                        <label for="status_id">Status:</label>
                                                                        <select id="status_id" name="status_id"
                                                                            class="form-control" required>
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
                                                                        <input type="file" id="ntp_file" name="ntp_file"
                                                                            class="form-control">
                                                                    </td>

                                                                    <td>
                                                                        <label for="cont_amt_orig">Joining Date
                                                                            File:</label>
                                                                        <input type="file" id="join_file"
                                                                            name="join_file" class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <label for="disbursement">Contract Renewal
                                                                            File:</label>
                                                                        <input type="file" id="renewal_file"
                                                                            name="renewal_file" class="form-control">
                                                                    </td>
                                                                    <td>
                                                                        <label for="disbursement">Resignation
                                                                            File:</label>
                                                                        <input type="file" id="resignation_file"
                                                                            name="resignation_file"
                                                                            class="form-control">
                                                                    </td>
                                                                    <td>

                                                                        <input type="submit" name="submit"
                                                                            id="contractForm" value="Add Contract"
                                                                            class="btn btn-danger">
                                                                    </td>
                                                                </tr>
                                                        </tbody>
                                                    </table>
                                                    </form>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>







            </div>
        </div>
    </div>
</div>
</div>






</div>
</div>
</div>
</div>

<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
$(document).ready(function() {
    // Handle form submission
    $('#contractForm').submit(function(e) {
        e.preventDefault(); // Prevent the default form submission

        // Collect form data
        var formData = new FormData(this);

        // Perform AJAX request
        $.ajax({
            url: '<?php echo base_url('Hr_consultancy_contracts/add_new_hr'); ?>', // Adjust the URL based on your controller method
            type: 'POST',
            data: formData,
            processData: false,
            contentType: false,
            success: function(response) {
                // Handle success
                console.log(response);
                // You can perform additional actions on success, like showing a success message or redirecting.
            },
            error: function(error) {
                // Handle error
                console.log(error);
                // You can display an error message or perform other actions on error.
            }
        });
    });
});
</script>

<script type="text/javascript">
function get_contracts(val) {


    $.post("<?php echo base_url()?>Hr_consultancy_contracts/display_new_contract/", {
        id: val
    }, function(page_response) {
        //alert(page_response);
        $("#add_contract_new").html(page_response);

    });


}
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
</script>