<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4> Bill Summary </h4>

                    </div>
                    <div class="page-header-breadcrumb">

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
                                    <h5>Add New Records</h5>
                                    <a href="<?php echo base_url() ?>Welcome/edit_ppms_bill_summary/">
                                        <button class="btn btn-danger">Edit Bill Summary Records</button> </a>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
<form role="form" method="post" id="create_item" enctype="multipart/form-data" action="" autocomplete="off">


                                            <table class="table">
                                                <tr>
                                                    <td>OutPut</td>
                                                    <td> <select class="form-control" name="output" id="output_id">
                                                            <option value="">Select OutPut</option>
                                                            <?php $outList = $this->db->query("select * from ppms_output_list")->result();
                                                            foreach ($outList as $outList) { ?>
                                                                <option value="<?php echo $outList->output_id ?>">
                                                                    <?php echo $outList->output_name ?>
                                                                </option>
                                                            <?php } ?>

                                                        </select>
                                                    </td>
                                                    <td>Sectors</td>
                                                    <td>
                                                        <select class="form-control" name="sectors" id="sectors_id">
                                                            <option value="">Select Sectors</option>
                                                            <?php /*$sectors=$this->db->query("select * from ppms_sector")->result();
                                                        foreach($sectors as $sectorss){?>
                                                       <option value="<?php echo $sectorss->sector_id?>">
                                                           <?php echo $sectorss->sector_name?></option>
                                                       <?php }*/?>

                                                        </select>



                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td>Projects</td>
                                                    <td>
                                                        <select name="project_id" id="project_id" class="form-control">

                                                            <option value="">Select Project</option>
                                                            <?php /*?><?php $done=$this->db->query("select project_id,project_name from ppms_project")->result();
foreach($done as $desig){
?>
                                                       <option value="<?php echo $desig->project_id;?>">
                                                           <?php echo $desig->project_name;?></option>
                                                       <?php }?><?php */?>
                                                        </select>
                                                    </td>

                                                    <td>Sub Project</td>
                                                    <td>
                                                        <select name="sub_project_id" id="sub_project_idss"
                                                            class="form-control" onChange="display_data(this.value)">

                                                            <option value="">Select Sub Project List</option>
                                                        </select>
                                                    </td>



                                                </tr>
                                                <tr>
                                                    <td>Sub Sub Project</td>
                                                    <td colspan="3">
                                                        <select name="sub_sub_project_id" id="sub_sub_project_id"
                                                            class="form-control">

                                                            <option value="">Select Sub Sub Project List</option>
                                                        </select>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td>Bill Summary Civil Work</td>
                                                    <td>
                                                        <select name="civil_work" id="civil_work" class="form-control">

                                                            <option value="1">Yes</option>
                                                            <option value="2">No</option>

                                                        </select>

                                                    </td>


                                                    <td>Bill Summary Category</td>
                                                    <td>
                                                        <select name="bill_cat" id="bill_cat" class="form-control">

                                                            <?php
                                                            $ccc = $this->db->query("SELECT * FROM ppms_billsummary_category")->result();
                                                            foreach ($ccc as $ccc) { ?>
                                                                <option value="<?php echo $ccc->billsummary_category_id ?>">
                                                                    <?php echo $ccc->billsummary_category_name ?>
                                                                </option>
                                                            <?php } ?>


                                                        </select>

                                                    </td>

                                                </tr>
                                                <tr>
                                                    <td>Bill Summary No</td>
                                                    <td><input type="text" placeholder="Enter Bill Summary#" required
                                                            id="bs_no" class="form-control" name="bs_no" tabindex="1">
                                                    </td>

                                                    <td>Bill Summary Amount</td>
                                                    <td> <input type="text" placeholder="Enter Bill Summary Amount"
                                                            required id="bs_amount" class="form-control"
                                                            name="bs_amount" tabindex="1"></td>
                                                </tr>
                                                <tr>
                                                    <td>Bill Summary Description</td>
                                                    <td colspan="3"><input type="text"
                                                            placeholder="Enter Bill Description" required id="bs_desc"
                                                            class="form-control" name="bs_desc" tabindex="1"></td>




                                                </tr>

                                                <tr>
                                                    <td>
        <button type="submit" class="btn btn-block btn-outline btn-primary" id="add" name="add" tabindex="2">Save Record</button>

                                                </tr>
                                            </table>
                                        </form>
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                            </div>

                        </div>

                        <div class="col-sm-12">
                            <!-- Zero config.table start -->
                            <div class="card">
                                <div class="card-header">
                                    <h5>PPMS Records</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                        <table id="simpletable" class="table table-striped table-bordered nowrap">
                                            <thead>
                                                <tr>
                                                    <th>Serial# </th>
                                                    <th>OutPut </th>
                                                    <th>Sectors</th>

                                                    <th>Project</th>

                                                    <th>Sub Project Name</th>
                                                    <th>Sub Sub Project Name</th>
                                                    <th>Bill Summary Category Name</th>
                                                    <th>Bill Summary No</th>
                                                    <th>Bill Summary Description</th>
                                                    <th>Bill Summary Amount</th>
                                                    <th>Bill Summary Civil Work</th>


                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                error_reporting(0);

                                                $i = 1;
                                                $result1 = $this->db->query("
                  SELECT 
                  * 
                  FROM 
                  ppms_billsummary AS a,
                  ppms_billsummary_category AS b,
                  ppms_subproject AS c,
                  ppms_subproject_area AS psa,
                  ppms_project AS pp,
                  ppms_sector AS ps,
                  ppms_output_list AS pol
                  

                  WHERE a.billsummary_category_id=b.billsummary_category_id
                  AND a.subproject_id=c.subproject_id
                  AND a.sub_sub_project_id=psa.project_area_id
                  AND c.`project_id`=pp.project_id
                  AND pp.sector_id=ps.sector_id
                  AND ps.`output_id`=pol.`output_id`
                  ")->result();
                                                foreach ($result1 as $item) { ?>
                                                    <tr class="gradeX">
                                                        <td>
                                                            <?php echo $i; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $item->output_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item->sector_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item->project_name; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $item->subproject_name; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $item->project_area_name; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item->billsummary_category_name; ?>
                                                        </td>

                                                        <td>
                                                            <?php echo $item->billsummary_no; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item->billsummary_desc; ?>
                                                        </td>
                                                        <td>
                                                            <?php echo $item->billsummary_amt; ?>
                                                        </td>
                                                        <td>
                                                            <?php if ($item->billsummary_cw == 1) {
                                                                echo "Yes";
                                                            } else {
                                                                echo "No";
                                                            }
                                                            ?>
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



    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
    $(document).ready(function () {
        $('#create_item').submit(function (e) {
            e.preventDefault(); // prevent default form submission

            // Get form data
            var formData = new FormData($(this)[0]);

            // Send AJAX request
            $.ajax({
                url: '<?php echo base_url('Welcome/ppms_bill_summary_new_insert')?>', // Update this with the actual URL where your PHP code is
                type: 'POST',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    // Handle the success response (e.g., show a success message)
                    console.log(response);
                    alert('Record saved successfully!');
                },
                error: function (xhr, status, error) {
                    // Handle errors (e.g., show an error message)
                    console.error(xhr.responseText);
                    alert('Error saving record. Please try again.');
                }
            });
        });
    });
</script>


                       