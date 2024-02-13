<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Social SafeGuard/SS Report </h4>
                    </div>
                    <div class="page-header-breadcrumb">
                        <ul class="breadcrumb-title">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i class="icofont icofont-home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Pages</a>
                            </li>
                            <li class="breadcrumb-item"><a href="#!">Dashboard</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="page-body">

                </div>
            </div>

            <div id="styleSelector"></div>
        </div>
    </div>


    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page header start -->
                <div class="page-header">

                    <!-- New ticket button card start -->
                    <div class="card">
                        <div class="card-header">
                            <h5>Filter</h5>
                            <span>By <code>SECTOR</code> or <code>CW</code> or <code>LOT</code></span>
                            <div class="card-header-right">
                                <i class="icofont icofont-rounded-down"></i>
                                <i class="icofont icofont-refresh"></i>
                                <i class="icofont icofont-close-circled"></i>
                            </div>
                        </div>
                        <form method="post" action="">
                            <div class="card-block">
                                <div class=" waves-effect waves-light m-r-10 v-middle issue-btn-group">
                                    <div class="row">
                                        <?php /*?> <div class="col-sm-3">
                                            <select class="form-control" name="output" id="output_id">
                                                <option value="">Select OutPut</option>
                                                <?php $outList=$this->db->query("select * from ppms_output_list")->result();
                                                             foreach($outList as $outList){?>
                                                <option value="<?php echo $outList->output_id?>">
                                                    <?php echo $outList->output_name?></option>
                                                <?php }?>

                                            </select>
                                        </div>
                                        <?php */?>

                                        <div class="col-sm-3">
                                            <select class="form-control" name="sectors" id="sectors_id">
                                                <option value="">Select Sectors</option>
                                                <?php $sectors=$this->db->query("select * from ppms_sector")->result();
                                                             foreach($sectors as $sectorss){?>
                                                <option value="<?php echo $sectorss->sector_id?>">
                                                    <?php echo $sectorss->sector_name?></option>
                                                <?php }?>

                                            </select>
                                        </div>
                                        <div class="col-sm-3">
                                            <select class="form-control" name="projects" id="projects">
                                                <option value="">Select Projects</option>

                                                <?php /*$projects=$this->db->query("select * from ppms_project")->result();
                                                             foreach($projects as $projectss){?>
                                                <option value="<?php echo $projectss->project_id?>">
                                                    <?php echo $projectss->project_name?></option>
                                                <?php }
                                                                            
                                                                            */?>

                                            </select>
                                        </div>


                                        <div class="col-sm-3">
                                            <select name="sub_project_id" id="sub_project_id" class="form-control">
                                                <option value="">Select Sub Projects</option>

                                                <?php 
foreach($doneSUB as $doneSUB){
?>
                                                <option value="<?php echo $doneSUB->subproject_id;?>">
                                                    <?php echo $doneSUB->subproject_name;?></option>
                                                <?php }?>
                                            </select>


                                        </div>

                                        <div class="col-sm-3">
                                            <select name="site_id" id="site_id" class="form-control">

                                                <option value="">Select Site</option>

                                            </select>


                                        </div>

                                        <div class="col-sm-3">
                                            <input type="submit" name="search" class="btn btn-primary btn-block"
                                                value="Filter">
                                        </div>


                                    </div>

                        </form>
                    </div>
                </div>
            </div>
            <!-- New ticket button card end -->



        </div>
        <?php 
            if(isset($_POST['search'])){
                //error_reporting(0);
           extract($_POST);
          /* echo $output_id = $this->input->post('output_id');
            ////////////////////////////////////////////////////////
            echo "pakistan".$output_id."No data";
            echo $sectors_id;
           echo $projects;
          
            if($output){
                //echo "kifayat";
                $outputs="and pol.output_id=$output";
            } */
            if($sectors){
                 $sectorss="and se.sector_id=$sectors";
            }
            if($projects){
                $projectss="and ps.project_id=$projects";
            }
           /* if($sub_project_id){
                //echo "kifayat";
                $outputs="and pol.output_id=$output";
            }
            if($output){
                //echo "kifayat";
                $outputs="and pol.output_id=$output";
            }
            */
?>

        <!-- Page header end -->
        <!-- Page body start -->
        <div class="page-body">
            <div class="row">

                <div class="col-xl-12">

                    <!-- New ticket button card end -->
                    <!-- bug list card start -->
                    <div class="card">
                        <div class="card-header">
                            <h3><?php 
                                 /* $res="SELECT * FROM 
                                  ppms_project AS ps,
                                  ppms_sector AS se
                                  WHERE  ps.`sector_id`=se.`sector_id`
                                  $sectorss
                                  $projectss";
                                       $reseee = $this->db->query($res)->row();
                                echo $reseee->sector_name."/".$reseee->project_name;
                                */
                                ?><label class="label label-success">Social Safegaurd Status </lable>
                            </h3>


                        </div>
                        <div class="card-block">
                            <div class="table-responsive">
                                <table id="issue-list-table" class="table dt-responsive width-100">
                                    <tr>
                                        <td>Document</td>
                                        <td align="left">LARP</td>
                                        <td><label class="label label-danger">
                                                <a href="<?php echo base_url('img/blogg.docx')?>">
                                                    <font color="white">Attached File</font>
                                                </a></lable>
                                        </td>
                                    </tr>

                                    <tr>
                                        <td>Status</td>
                                        <td align="left">Submitted<br>ADB</td>
                                    </tr>
                                    <tr>
                                        <td>Submited Date</td>
                                        <td align="left">19-06-2023</td>
                                    </tr>
                                    <tr>
                                        <td>Remarks</td>
                                        <td align="left">Please Solve the Problem as soon as poosible soon as
                                            poosiblesoon as poosible soon as
                                            poosible<br> soon as poosible soon as poosible....<br>


                                            <a data-toggle="modal" href="#myModal2"><label
                                                    class="label label-danger">Read More....</lable></a>
                                        </td>
                                    </tr>
                                </table>

                            </div>
                            <!-- end of table -->
                        </div>
                    </div>
                    <div class="modal fade" id="myModal2">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title">Remarks</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">×</button>
                                </div>
                                <div class="container"></div>
                                <div class="modal-body">Content for the dialog / modal goes here.
                                    <p class="p-t-30 p-b-40">Please Solve the Problem as soon as poosible soon as
                                        poosiblesoon as poosible soon as
                                        poosible<br> soon as poosible soon as poosible Please Solve the Problem as soon
                                        as poosible soon as poosiblesoon as poosible soon as
                                        poosible<br> soon as poosible soon as poosible Please Solve the Problem as soon
                                        as poosible soon as poosiblesoon as poosible soon as
                                        poosible<br> soon as poosible soon as poosible</p>

                                </div>
                                <div class="modal-footer"> <a href="#" data-dismiss="modal" class="btn">Close</a>

                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="card">
                        <div class="card-header">
                        <div width="100%"><h3><?php 
                                 /* $res="SELECT * FROM 
                                  ppms_project AS ps,
                                  ppms_sector AS se
                                  WHERE  ps.`sector_id`=se.`sector_id`
                                  $sectorss
                                  $projectss";
                                       $reseee = $this->db->query($res)->row();
                                echo $reseee->sector_name."/".$reseee->project_name;
                                */
                                ?>
                               
                     <div style="width:50%;float:left;margin-top:0px"><label class="label label-success">Implementation Status</lable></div>

                    <div style="width:50%;float:right;margin-top:0px;margin-right:-250px">
                    <img src="<?php echo base_url('img/excel.png')?>"  width="50px" height="50px"> || <img src="<?php echo base_url('img/pdf.png')?>" width="50px" height="50px"> || <img src="<?php echo base_url('img/doc.png')?>"  width="50px" height="50px"></div>
                            </h3>
        </div>
                            <?php /*?><label class="label label-warning">Approval</lable>
                                <label class="label label-success">Submit</lable>
                                    <label class="label label-danger">Implement</lable>
                                        <?php */?>
                        </div>
                        <div class="card-block">
                            <div class="table-responsive">


                            <table border="1" width="100%" cellspacing="0" cellpadding="0">
                            <tr>
                                <td colspan="3" rowspan="3">List of DPS</td>
                                <td colspan="6">BOR Assesments</td>
                                <td colspan="6">Resettlment Budget</td>
                               
                          </tr>
                            <tr>
                               
                                <td colspan="2">Total Land</td>
                                <td colspan="2">Total Payment</td>
                                <td colspan="2">Total Disbursments</td>
                                <td colspan="2">IVS Differential</td>
                                <td colspan="2">Total Disbursments</td>
                                <td colspan="2">Allownces</td>
                          </tr>
<tr>
    <td>Total</td><td>Male</td><td>Female</td>
    <td>Kanals</td><td>Marlas</td><td>Land</td>
    <td>Non Land</td>
    <td>Land</td><td>Non Land</td>

    <td>Land</td><td>Non Land</td>
    <td>Land</td><td>Non Land</td>
    <td>Vulnerability</td><td>Severity</td>

</tr>
<tr><td>2505</td><td>1800</td><td>705</td>
    <td>340</td><td>12</td><td>750,000</td>
    <td>100,000</td>
    <td>550,000</td><td>750,000</td>

    <td>250,000</td>
    <td>75000</td><td>150,000</td>
    <td>65000</td>
    <td>75000</td>
    <td>75000</td>

</tr>



</table>
                               
                            </div>
                            <!-- end of table -->
                        </div>
                    </div>
                    <!-- bug list card end -->
                </div>


                <div class="col-xl-4">
                    <!-- Overall Progress card start -->

                </div>
            </div>
        </div>
        <!-- Page body end -->
    </div>
</div>
<!-- Main-body end -->

<?php }?>



</div>

<div id="styleSelector"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script type='text/javascript'>
// baseURL variable
var baseURL = "<?php echo base_url();?>";

$(document).ready(function() {

    // City change
    $('#output_id').change(function() {
        var output = $(this).val();

        // AJAX request
        $.ajax({
            url: '<?=base_url()?>Dropdowns/get_sectors',
            method: 'post',
            data: {
                outputID: output
            },
            dataType: 'json',
            success: function(response) {

                // Remove options 

                $('#sectors_id').find('option').not(':first')
                    .remove();

                // Add options
                $.each(response, function(index, data) {
                    $('#sectors_id').append(
                        '<option value="' + data[
                            'sector_id'] + '">' +
                        data['sector_name'] +
                        '</option>');
                });
            }
        });
    });

    // Department change
    $('#sectors_id').change(function() {
        var sectors_id = $(this).val();

        // AJAX request
        $.ajax({
            url: '<?=base_url()?>Dropdowns/get_projects',
            method: 'post',
            data: {
                sectors_id: sectors_id
            },
            dataType: 'json',
            success: function(response) {

                // Remove options
                $('#projects').find('option').not(':first')
                    .remove();

                // Add options
                $.each(response, function(index, data) {
                    $('#projects').append(
                        '<option value="' + data[
                            'project_id'] + '">' + data[
                            'project_name'] + '</option>');
                });
            }
        });
    });

});

setTimeout(function() {
    $('#display_msg').fadeOut('fast');
}, 30000); // <-- time in milli
</script>