<div class="pcoded-content">
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
                                    <h5>Employee Report</h5>


                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                                    
                                        <form role="form" method="post" id="create_item" enctype="multipart/form-data"
                                            action=""
                                            autocomplete="off"
                                           >

                                            <table class="table gridexample">
                                                
                                                
                                                <tr>
                                                    <td>Contract Award Date</td>
                                                    <td><input type="date" autofocus  id="" class="form-control"
                                                            name="cad" tabindex="1"></td>

                                                            
                                               
                                                   

                                                    
                                               
                                                    <td>Gender</td>
                                                    <td>
                                                        <select name="gender_id" class="form-control">
                                                            <option value="">Select Gender</option>
        <?php $gender=$this->db->query("select distinct gender from ppms_service_tbl where gender!=''")->result();
            foreach($gender as $genders){
            ?>
                                                            <option value="<?php echo $genders->gender?>">
                                                                <?php echo $genders->gender?>
                                                            </option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
            </tr>
            <tr>
                                                      
                                                    <td>Service Type</td>
                                                    <td>
                                                        <select name="std_id" class="form-control">
                                                            <option value="">Select Service Type</option>
                                                            <?php $cc=$this->db->query("select * from ppms_service_type_tbl")->result();
            foreach($cc as $cc){
            ?>
                                                            <option value="<?php echo $cc->std_id;?>">
                                                                <?php echo $cc->std_name;?>
                                                            </option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                   

                                                
                                                    <td>Organization</td>
                                                    <td>
                                                        <select name="organization_id" class="form-control">
                                                            <option value="">Select Organization</option>
                    <?php $organization=$this->db->query("select * from organization")->result();
            foreach($organization as $organization){
            ?>
                                                            <option
                                                                value="<?php echo $organization->organization_id;?>">
                                                                <?php echo $organization->organization_name;?>
                                                            </option>
                                                            <?php }?>
                                                        </select>
                                                    </td>

                                                </tr>
                                                <td>Service Designation</td>
                                                    <td colspan="3">
                                                        <select name="designation" class="form-control">
                                                            <option value="">Select Service Designation</option>
                                                            <?php $designation=$this->db->query("select distinct designation_name from ppms_service_tbl")->result();
            foreach($designation as $designation){
            ?>
                                                            <option value="<?php echo $designation->designation_name;?>">
                                                                <?php echo $designation->designation_name;?>
                                                            </option>
                                                            <?php }?>
                                                        </select>
                                                    </td>
                                                <tr>
                                                    <td><button type="submit"
                                                            class="btn btn-block btn-outline btn-primary" id="add"
                                                            name="add" tabindex="2">Search
                                                            </button></td>
                                                </tr>
                                            </table>
                                        </form>

<?php 
if(isset($_POST['add'])){
    extract($_POST);
    if($cad !=""){
       $cad="and s_contract_award_date='$cad'";
    }
    if($gender_id !=""){
        $gender_id="and gender='$gender_id'";
     }
     
     if($organization_id !=""){
        $organization_id="and o.organization_id='$organization_id'";
     }
     if($designation !=""){
        $designation="and designation_name='$designation'";
     }
     if($std_id != ""){
      
        $std_id="and pst.`std_id`='$std_id'";
     }
    ?>
                                   <div class="dt-responsive table-responsive">
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

<figure class="highcharts-figure">
    <div id="container"></div>
    
</figure>

                                    <script>

// Data retrieved from https://www.ssb.no/en/transport-og-reiseliv/landtransport/statistikk/bilparken
// Radialize the colors
Highcharts.setOptions({
    colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
        return {
            radialGradient: {
                cx: 0.5,
                cy: 0.3,
                r: 0.7
            },
            stops: [
                [0, color],
                [1, Highcharts.color(color).brighten(-0.3).get('rgb')] // darken
            ]
        };
    })
});

// Build the chart
Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Hr Staff Detail',
        align: 'left'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    accessibility: {
        point: {
            valueSuffix: '%'
        }
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: true,
                format: '<span style="font-size: 1.2em"><b>{point.name}</b></span><br>' +
                    '<span style="opacity: 0.6">{point.percentage:.1f} %</span>',
                connectorColor: 'rgba(128,128,128,0.5)'
            }
        }
    },
    series: [
        {
        name: 'Total Emp',
        data: [
           <?php
         
           
          
              $resultG = $this->db->query("SELECT * FROM 
              organization
             ")->result();
              foreach($resultG as $resultGs){?> 
            { name: '<?php echo $resultGs->organization_name;?>', y: <?php 
            
             $resultGD = $this->db->query("SELECT count(*) as total
             FROM ppms_service_tbl 
              WHERE organization_id=$resultGs->organization_id
              $cad 
              $gender_id
              $organization_id
              $std_id
")->row();
            echo $resultGD->total;
            ?> },
            
           <?php }?> 
           
        ]
    }
    
    ]
});



                                    </script>
                                    <table  class="table  table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Serial No</th>
                                                <th>Service Designation</th>
                                                <th>Organization</th>
                                                <th>Full Name </th>
                                                
                                                <th>Contract Award Date</th>
                                                <th>Gender</th>
                                                <th>Service Type</th>
                                                <th>Contract End Date</th>
                                                <th>Contact No</th>
                                                <th>Employee No</th>
                                                
                                                <th>CNIC</th>
                                                
                                                <th>Salary</th>
                                                
                                                <th>Loan/Grant</th>
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
           error_reporting(0);
           
           $i=1; 
              $result1 = $this->db->query("SELECT * FROM ppms_service_tbl AS ps, ppms_service_type_tbl AS pst, 
              organization AS o 
              WHERE ps.`std_id`=pst.`std_id`
              AND ps.`organization_id`=o.`organization_id`
              $cad 
              $gender_id
              $organization_id
              $std_id


              ")->result();
              foreach($result1 as $item){?>
                                            <tr class="gradeX">
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $item->designation_name;?></td>
                                                <td><?php echo $item->organization_name;?></td>
                                                <td><?php echo $item->s_fullname;?></td>
                                               
                                                <td><?php echo $item->s_contract_award_date;?></td>
                                                <td><?php echo $item->gender;?></td>
                                                <td><?php echo $item->std_name;?></td>
                                                <td><?php echo $item->s_contract_end_date;?></td>
                                                <td><?php echo $item->s_contact_no;?></td>
                                                <td><?php echo $item->emp_no;?></td>
                                                
                                                <td><?php echo $item->cnic;?></td>
                                                
                                                <td><?php echo $item->salary;?></td>
                                                
                                                <td><?php echo $item->loan_grant;?></td>
                                              
                                            </tr>
                                            <?php
$i++;
} ?>
                                        </tbody>
                                        <tfoot>
                                    </table>

<?php }?>
                                    </div>
                                </div>


                                <!--/span-->
                            </div>
                            <!--/row-->

                        </div>`


                        