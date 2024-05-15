<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Welcome to <?php 
                         $empID=$this->session->userdata('empid');
                         $groupID=$this->session->userdata('groupid');
                         $cityID=$this->session->userdata('cityid');
error_reporting(0);
    
    $orgee=$this->db->query("SELECT organization_name,e.city_id,d.organization_id,e.emp_id,e.designation_id
    FROM
    emp AS e,organization AS d
    WHERE e.organization_id=d.organization_id and e.emp_id=$empID")->row();
   ///echo $this->db->last_query();
   /////////////////////////////////////////////////////////////////////////////////////////////
   $citi=$this->db->query("SELECT city_name
   FROM
   city 
   WHERE city_id=$orgee->city_id")->row();
   /////////////////////////////////////////////////////////////////////////////////////////
   if($orgee){

    if($orgee->organization_id==1 or $orgee->organization_id==2){
    echo $orgee->organization_name."(".$citi->city_name.")";
    }else{
        if($orgee->emp_id > 1){   
        echo $orgee->organization_name;
        }else{
            echo "Admin";  
        }

    }
   }else{
    echo "Admin";
   }
    
    ?> Dashboard !</h4>
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

                <div class="page-body">

                    <div class="row">
                        <div class="col-md-12 col-xl-12">
                        <h3 >
    <span style="border-bottom: 3px solid #17a689;">
        Total IPC's/EPC's/Mobilization Advance
    </span>
</h3>
            </div>
                    </div>
                    &nbsp;
                    &nbsp;
                    &nbsp;
                        <div class="row">
                        <!-- Documents card start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card client-blocks dark-primary-border">
                                <div class="card-block">
                                    <h5>Total</h5>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-document-folder"></i>
                                        </li>
                                        <li class="text-right">
                                            <?php 
                                            
                                            if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){

                                             $tot_ipace = $this->db->query("SELECT count(*) as tot_ipac FROM 
                                             ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                                             where ppi.subproject_id=ppsp.subproject_id
                                             and ppsp.project_id=ppp.project_id
                                            ")->row();

                                            }else{
                                             if($orgee->designation_id==8){
                                                //echo "pakistan";
                                                 $tot_ipace = $this->db->query("SELECT count(*) as tot_ipac FROM 
                                               ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp,assign_regional AS ar
                                               where ppi.subproject_id=ppsp.subproject_id
                                               and ppi.subproject_id=ar.subproject_id
                                               and ppsp.project_id=ppp.project_id
                                               and ar.emp_id=$empID
                                               ")->row();
                                                
                                               }else{
                                             $tot_ipace = $this->db->query("SELECT count(*) as tot_ipac FROM 
                                             ppms_ipac as ppi,ppms_subproject as ppsp,ppms_project as ppp
                                             where ppi.subproject_id=ppsp.subproject_id
                                             and ppsp.project_id=ppp.project_id
                                             and ppsp.city_id=$cityID
                                            ")->row();
                                               }
                                            }
                                          /// echo $this->db->last_query();

                                           
                                            //$tot_ipace=$this->db->query("select count(*) as tot_ipac from ppms_ipac")->row();
                                         echo $a=$tot_ipace->tot_ipac;
                                         ?>
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>

                        <!-- Documents card start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card client-blocks success-border">
                                <div class="card-block">
                                    <h5>Approved</h5>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-check"></i>
                                        </li>
                                        <li class="text-right">
                                            <?php 
        
        if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){
            $tot_approved=$this->db->query("SELECT COUNT(*) AS tot_approved FROM 
            ppms_ipac_forward 
            WHERE organization_id=3 AND status_id=4")->row();
        
        }else{
            if($orgee->designation_id==8){
                $tot_approved=$this->db->query("SELECT COUNT(*) AS tot_approved FROM 
                ppms_ipac_forward AS pif,ppms_ipac AS pic,ppms_subproject AS pps,assign_regional AS ar
                WHERE organization_id=3 AND status_id=4
                 AND pif.ipac_id=pic.ipac_id
                 AND pic.`subproject_id`=pps.subproject_id
                 and pps.subproject_id=ar.subproject_id
                 and ar.emp_id=$empID
                  ")->row();

            }else{
            $tot_approved=$this->db->query("SELECT COUNT(*) AS tot_approved FROM 
            ppms_ipac_forward AS pif,ppms_ipac AS pic,ppms_subproject AS pps
            WHERE organization_id=4 AND status_id=4
             AND pif.ipac_id=pic.ipac_id
             AND pic.`subproject_id`=pps.subproject_id
             and pps.city_id=$cityID
             ")->row();
            }
}
echo $tot_approved->tot_approved;
                                         ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>








                        <!-- Documents card start -->
                        <div class="col-md-6 col-xl-3">
                            <div class="card client-blocks success-border">
                                <div class="card-block">
                                    <h5>Paid</h5>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-verification-check"></i>
                                        </li>
                                        <li class="text-right">
                                            <?php 
                                         if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){
                                        
                                        $paid_ipc=$this->db->query("SELECT COUNT(*) AS paid_ipc
                                        FROM ipc_payment AS ip,ppms_ipac AS ppi 
                                        WHERE status_id=2 
                                        AND ip.`ipac_id`=ppi.`ipac_id`")->row();
                                         
                                         }else{

                                            if($orgee->designation_id==8){

                                                $paid_ipc=$this->db->query("SELECT COUNT(*) AS paid_ipc FROM ipc_payment AS ipp,
                                                `ppms_ipac` AS ppi,
                                                `ppms_subproject` AS pps,assign_regional AS ar

                                                WHERE ipp.`ipac_id`=ppi.`ipac_id`
                                                AND ppi.`subproject_id`=pps.`subproject_id`
                                                and pps.subproject_id=ar.subproject_id
                                                and ar.emp_id=$empID
                                                and ipp.status_id=2
                                               
                                                ")->row();

                                            }else{

                $paid_ipc=$this->db->query("SELECT COUNT(*) AS paid_ipc FROM ipc_payment AS ipp,
                `ppms_ipac` AS ppi,
                `ppms_subproject` AS pps
                WHERE ipp.`ipac_id`=ppi.`ipac_id`
                AND ppi.`subproject_id`=pps.`subproject_id`
                and ipp.status_id=2
                and pps.city_id=$cityID
                ")->row();
                                            }

                                         }
                                         echo $b=$paid_ipc->paid_ipc;

                                         ?>

                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-xl-3">
                            <div class="card client-blocks warning-border">
                                <div class="card-block">
                                    <a href="<?php echo base_url()?>">
                                        <h5>Un Paid</h5>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-close-squared-alt text-warning"></i>
                                        </li>
                                        <li class="text-right text-warning">
                                            <?php 
                                         /*if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){
                                        
                                        $Un_paid_ipc=$this->db->query("select count(*) as Un_paid_ipc 
                                        from ipc_payment where (status_id=1 or status_id=0)")->row();
                                         }else{

                                            if($orgee->designation_id==8){

                                            $Un_paid_ipc=$this->db->query("SELECT COUNT(*) AS Un_paid_ipc FROM ipc_payment AS ipp,
                                            `ppms_ipac` AS ppi,
                                            `ppms_subproject` AS pps,assign_regional AS ar

                                            WHERE ipp.`ipac_id`=ppi.`ipac_id`
                                            AND ppi.`subproject_id`=pps.`subproject_id`

                                            and (ipp.status_id=1 or ipp.status_id=0)
                                            and pps.subproject_id=ar.subproject_id
                                            and ar.emp_id=$empID")->row();
                                            }else{
                                        
                                            $Un_paid_ipc=$this->db->query("SELECT COUNT(*) AS Un_paid_ipc FROM ipc_payment AS ipp,
                                            `ppms_ipac` AS ppi,
                                            `ppms_subproject` AS pps

                                            WHERE ipp.`ipac_id`=ppi.`ipac_id`
                                            AND ppi.`subproject_id`=pps.`subproject_id`
                                            and (ipp.status_id=1 or ipp.status_id=0)
                                            and pps.city_id=$cityID")->row();

                                         }
                                        }
                                         //echo $this->db->last_query();
                                         echo $Un_paid_ipc->Un_paid_ipc;
                                         */
                                        echo $a-$b;
                                         ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <?php /*?><div class="col-md-6 col-xl-2">
                            <div class="card client-blocks warning-border">
                                <div class="card-block">
                                    <a href="ipc_detail.html">
                                        <h5>In - Progress <br>IPC's</h5>
                                    </a>
                                    <ul>
                                        <li>

                                            <i class="icofont icofont-gear text-warning"></i>
                                        </li>
                                        <li class="text-right text-warning">
                                            <?php 
                                        
                                        if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){
                                        $tot_ipace=$this->db->query("
                                        SELECT COUNT(*) AS tot_ipac FROM ppms_ipac AS pii,ppms_ipac_forward AS pif 
WHERE pii.ipac_id=pif.ipac_id AND pif.ipac_forward_id =
                                         (
                                            SELECT MAX(ipac_forward_id)FROM ppms_ipac_forward AS dd
                                            WHERE dd.`ipac_id`=pii.`ipac_id`
                                            AND dd.`ipac_id`=pif.`ipac_id`
                                            AND dd.flag_id=1
                                            AND dd.`status_id` IN (0,1,2)
                                          )"
                                            )->row();

                                         }else{
                                            if($orgee->designation_id==8){

                                                $tot_ipace=$this->db->query("
                                            
                                                SELECT COUNT(*) AS tot_ipac 
                                                FROM ppms_ipac AS pii,
                                                ppms_ipac_forward AS pif,
                                                ppms_subproject AS pps,assign_regional AS ar
                                                
                                                WHERE pii.ipac_id=pif.ipac_id 
                                                AND pii.subproject_id=pps.subproject_id
                                                and pps.subproject_id=ar.subproject_id
                                                and ar.emp_id=$empID
                                                
                                                and  pii.ipac_id=pif.ipac_id AND pif.ipac_forward_id =
                                                                                            (
                                                                                               SELECT MAX(ipac_forward_id)FROM ppms_ipac_forward AS dd
                                                                                               WHERE dd.`ipac_id`=pii.`ipac_id`
                                                                                               AND dd.`ipac_id`=pif.`ipac_id`
                                                                                               AND dd.flag_id=1
                                                                                               AND dd.`status_id` IN (0,1,2)
                                                                                             )"
                                                                                             
                                                                                               )->row();
                                               

                                            }else{
                                            $tot_ipace=$this->db->query("
                                            
 SELECT COUNT(*) AS tot_ipac 
 FROM ppms_ipac AS pii,
 ppms_ipac_forward AS pif,
 ppms_subproject AS pps
 
 WHERE pii.ipac_id=pif.ipac_id 
 AND pii.subproject_id=pps.subproject_id
 AND pps.city_id=$cityID
 and  pii.ipac_id=pif.ipac_id AND pif.ipac_forward_id =
                                             (
                                                SELECT MAX(ipac_forward_id)FROM ppms_ipac_forward AS dd
                                                WHERE dd.`ipac_id`=pii.`ipac_id`
                                                AND dd.`ipac_id`=pif.`ipac_id`
                                                AND dd.flag_id=1
                                                AND dd.`status_id` IN (0,1,2)
                                              )"
                                              
                                                )->row();

                                         }
                                        }
                                         //echo $this->db->last_query();
                                         echo $tot_ipace->tot_ipac;
                                         ?>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6 col-xl-2">
                            <div class="card client-blocks bg-danger ">
                                <div class="card-block">
                                    <h5 style="color:white;">Returned <br> IPC's</h5>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-code-alt text-warning"></i>
                                        </li>
                                        <li class="text-right text-warning">
                                            0

                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>


                    </div>
                </div>
            </div>
            <?php */?>
<?php 
if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){?>
            <div class="row">
                <script src="https://code.highcharts.com/highcharts.js"></script>
                <script src="https://code.highcharts.com/modules/data.js"></script>
                <script src="https://code.highcharts.com/modules/drilldown.js"></script>
                <script src="https://code.highcharts.com/modules/exporting.js"></script>
                <script src="https://code.highcharts.com/modules/export-data.js"></script>
                <script src="https://code.highcharts.com/modules/accessibility.js"></script>

                <div class="col-12">
                     <div class="card">
                     <table class="table table-bordered table-striped">
<tr style="background-color:#558ed5; color:#fff"><td colspan="2" align="center"><h2>Compliance with Covenants</h2></td></tr></table>
 
                     <table class="table table-bordered ">
                        <tr>
                            <td valign="middle">
                            &nbsp;
  
<table class="table table-bordered table-striped" style="margin-top:30px">
<tr style="background-color:#558ed5; color:#fff"><td><b>Covenant <br>in <br>Agreement</b></td><td><b>Complied</b></td>
<td><b>On Going</b></td>
<td><b>Partly Complied</b></td>
<td><b>Not Yet Due</b></td>
<td><b>Total</b></td></tr>
<?php $covenats = $this->db->query("SELECT * FROM covenant_name")->result();
$g=0;
$h=0;
$i=0;
$j=0;
$k=0;
                  foreach($covenats as $covenats){?>
<tr>
<td style="background-color:#558ed5; color:#fff">
<b><?php echo $covenats->covenant_name;?></b>
                  </td>




                  <td align="center">
 <?php $complied = $this->db->query("SELECT count(*) as tot_com FROM covenant_detail where status_id='complied' and covenant_id=$covenats->covenant_name_id")->row();
                  $g1=$complied->tot_com;?>
    <a href="<?php echo base_url('Covenant/reportNew/1/'.$covenats->covenant_name_id)?>" style="color: inherit;"><?php echo $g1;?> </a>
                
                  </td>


                 
                  <td align="center">
 <?php $complied = $this->db->query("SELECT count(*) as tot_com FROM covenant_detail where status_id='Ongoing' and covenant_id=$covenats->covenant_name_id")->row();
                  $h1=$complied->tot_com;?>
<a href="<?php echo base_url('Covenant/reportNew/2/'.$covenats->covenant_name_id)?>" style="color: inherit;"><?php echo $h1;?> </a>
                  </td>


                
                  <td align="center">
 <?php $complied = $this->db->query("SELECT count(*) as tot_com FROM covenant_detail where status_id='Partialy Complied' and covenant_id=$covenats->covenant_name_id")->row();
                   $i1=$complied->tot_com;?>
    <a href="<?php echo base_url('Covenant/reportNew/3/'.$covenats->covenant_name_id)?>" style="color: inherit;"><?php echo $i1;?> </a>
                  </td>
                 
                  <td align="center">
 <?php $complied = $this->db->query("SELECT count(*) as tot_com FROM covenant_detail where status_id='Not due yet' and covenant_id=$covenats->covenant_name_id")->row();
                   $j1=$complied->tot_com;?>

<a href="<?php echo base_url('Covenant/reportNew/4/'.$covenats->covenant_name_id)?>" style="color: inherit;"><?php echo $j1;?> </a> 
                  </td>
                 
                  <td align="center">
 <?php echo $g1+$h1+$i1+$j1?>
                  </td>

</tr>
<?php 
$g=$g+$g1;
$h=$h+$h1;
$i=$i+$i1;
$j=$j+$j1;
$k=$k+$k1;
}?>
                                    </tr>

                                    <tr>
                                        <td style="background-color:#558ed5; color:#fff"><b>Total</b></td>
                                    <td align="center"><?php echo $g;?></td>
                                    <td align="center"><?php echo $h;?></td>
                                    <td align="center"><?php echo $i;?></td>
                                    <td align="center"><?php echo $j;?></td>
                                    <td align="center"><?php echo $g+$h+$i+$j;?></td>
</table>
</td>
<td>
                    
                    
                     <div id="containerK"></div>
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
Highcharts.chart('containerK', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: true,
        type: 'pie'
    },
    title: {
        text: '',
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
    series: [{
        name: 'Share',
        data: [
            <?php 
                $covenatsG = $this->db->query("SELECT distinct(status_id) as nameee FROM covenant_detail")->result();
            foreach($covenatsG as $covenatsG){?>

            { name: '<?php echo $covenatsG->nameee?>', y: <?php $compliedG = $this->db->query("SELECT count(*) as tot_com FROM covenant_detail where status_id='$covenatsG->nameee'")->row();
                  echo $compliedG->tot_com;?> },

<?php }?>
            

            
        ]
    }]
});


</script>

</td>
</tr>
</table>





                     </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">
                        <figure class="highcharts-figure">
                            <div id="containerMM"></div>

                        </figure>
                        <script>
                       Highcharts.chart('containerMM', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Total Employees <?php echo date('Y')?>'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        type: 'category',
        labels: {
            autoRotation: [-45, -90],
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Total Employees (Nos)'
        }
    },
    legend: {
        enabled: false
    },
    tooltip: {
        pointFormat: 'Total Employees <?php echo date('Y')?>: <b>{point.y:.1f} Nos</b>'
    },
    series: [{
        name: 'Employees',
        colors: [
            '#9b20d9', '#9215ac', '#861ec9', '#7a17e6', '#10F9E5', '#691af3',
            '#6225ed', '#5b30e7', '#533be1', '#4c46db', '#4551d5', '#3ECF5E',
            '#3667c9', '#2f72c3', '#383E42', '#1f88b7', '#1693b1', '#0a9eaa',
            '#03c69b',  '#00f194'
        ],
        colorByPoint: true,
        groupPadding: 0,
        data: [
            <?php $res = $this->db->query("SELECT * FROM organization WHERE `organization_id` IN(3,2,7,11,13,15)")->result();
                  foreach($res as $res1){?>
            ['<?php echo $res1->organization_name;?>', 
        
            <?php $pppp1=$this->db->query("SELECT COUNT(*) AS total_emp FROM `ppms_service_tbl`
WHERE organization_id=$res1->organization_id")->row();
echo $pppp1->total_emp;
                                    
                                    ?>
        ],

            <?php }?>


            
        ],
        dataLabels: {
            enabled: true,
            rotation: -90,
            color: '#FFFFFF',
            align: 'right',
            format: '{point.y:.1f}', // one decimal
            y: 10, // 10 pixels down from the top
            style: {
                fontSize: '13px',
                fontFamily: 'Verdana, sans-serif'
            }
        }
    }]
});

                      
                        </script>

                    </div>


                </div>



                <div class="col-xl-6">
                    <div class="card">
                        <figure class="highcharts-figure">
                            <div id="containerMMM"></div>

                        </figure>
                        <script>
                       Highcharts.chart('containerMMM', {

chart: {
    type: 'column',
    styledMode: true
},

title: {
    text: 'Total Employees(Incremental,Consultants)',
    align: 'left'
},

subtitle: {
    text: ' ' +
        '',
    align: 'left'
},

xAxis: {
    categories: [
        <?php $res2 = $this->db->query("SELECT * FROM organization WHERE `organization_id` IN(3,2,7,11,13,15)")->result();
                  foreach($res2 as $res12){?>
        '<?php echo $res12->organization_name;?>',
                  <?php } ?>
    
    ]
},

yAxis: [{ // Primary axis
    className: 'highcharts-color-0',
    title: {
        text: 'Incremental'
    }
}, { // Secondary axis
    className: 'highcharts-color-1',
    opposite: true,
    title: {
        text: 'Individual'
    }
}],

plotOptions: {
    column: {
        borderRadius: 20
    }
},

series: [{
    name: 'Incremental',
    data: [
        <?php $res2I = $this->db->query("
        SELECT COUNT(*) tot_position 
FROM ppms_service_tbl 
WHERE `organization_id` IN(3,2,7,11,13,15)
AND std_id=1 GROUP BY organization_id")->result();
foreach($res2I as $res3I){?>
        <?php echo $res3I->tot_position?>, 
    <?php }?>
    ],
    tooltip: {
        valueSuffix: ' Nos'
    }
}, {
    name: 'Consultants',
    data: [
        <?php $res2d = $this->db->query("
        SELECT COUNT(*) tot_positions 
FROM ppms_service_tbl 
WHERE `organization_id` IN(3,2,7,11,13,15)
AND std_id=2 GROUP BY organization_id")->result();
foreach($res2d as $res3d){?>

<?php echo $res3d->tot_positions?>,
<?php }?>
    
    ],
    yAxis: 1
}]

});

                      
                        </script>

                    </div>


                </div>



                <style>

@import url("https://code.highcharts.com/css/highcharts.css");

.highcharts-figure,
.highcharts-data-table table {
    min-width: 310px;
    max-width: 800px;
    margin: 1em auto;
}

.highcharts-data-table table {
    font-family: Verdana, sans-serif;
    border-collapse: collapse;
    border: 1px solid #ebebeb;
    margin: 10px auto;
    text-align: center;
    width: 100%;
    max-width: 500px;
}

.highcharts-data-table caption {
    padding: 1em 0;
    font-size: 1.2em;
    color: #555;
}

.highcharts-data-table th {
    font-weight: 600;
    padding: 0.5em;
}

.highcharts-data-table td,
.highcharts-data-table th,
.highcharts-data-table caption {
    padding: 0.5em;
}

.highcharts-data-table thead tr,
.highcharts-data-table tr:nth-child(even) {
    background: #f8f8f8;
}

.highcharts-data-table tr:hover {
    background: #f1f7ff;
}

.highcharts-yaxis .highcharts-axis-line {
    stroke-width: 2px;
}

/* Link the series colors to axis colors */
.highcharts-color-0 {
    fill: #7cb5ec;
    stroke: #7cb5ec;
}

.highcharts-axis.highcharts-color-0 .highcharts-axis-line {
    stroke: #7cb5ec;
}

.highcharts-axis.highcharts-color-0 text {
    fill: #7cb5ec;
}

.highcharts-color-1 {
    fill: #90ed7d;
    stroke: #90ed7d;
}

.highcharts-axis.highcharts-color-1 .highcharts-axis-line {
    stroke: #90ed7d;
}

.highcharts-axis.highcharts-color-1 text {
    fill: #90ed7d;
}



                .highcharts-figure,
                .highcharts-data-table table {
                    min-width: 320px;
                    max-width: 660px;
                    margin: 1em auto;
                }

                .highcharts-data-table table {
                    font-family: Verdana, sans-serif;
                    border-collapse: collapse;
                    border: 1px solid #ebebeb;
                    margin: 10px auto;
                    text-align: center;
                    width: 100%;
                    max-width: 500px;
                }

                .highcharts-data-table caption {
                    padding: 1em 0;
                    font-size: 1.2em;
                    color: #555;
                }

                .highcharts-data-table th {
                    font-weight: 600;
                    padding: 0.5em;
                }

                .highcharts-data-table td,
                .highcharts-data-table th,
                .highcharts-data-table caption {
                    padding: 0.5em;
                }

                .highcharts-data-table thead tr,
                .highcharts-data-table tr:nth-child(even) {
                    background: #f8f8f8;
                }

                .highcharts-data-table tr:hover {
                    background: #f1f7ff;
                }
                </style>
                <div class="col-xl-6">
                    <div class="card">



                        <figure class="highcharts-figure">
                            <div id="container"></div>

                        </figure>
                        <script>
                        // Create the chart
                        Highcharts.chart('container', {
                            chart: {
                                type: 'pie'
                            },
                            title: {
                                text: 'Sector Wise Projects',
                                align: 'left'
                            },
                            subtitle: {
                                text: 'Sector Wise Projects Detail',
                                align: 'left'
                            },

                            accessibility: {
                                announceNewData: {
                                    enabled: true
                                },
                                point: {
                                    valueSuffix: ''
                                }
                            },

                            plotOptions: {
                                series: {
                                    borderRadius: 5,
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}: {point.y:1f} '
                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b> Million<br/>'
                            },

                            series: [{
                                name: 'Sectors',
                                colorByPoint: true,
                                data: [
                                    <?php $sectors=$this->db->query("select * from ppms_sector")->result();
                                    foreach($sectors as $sectors){
                                    ?>

                                    {
                                        name: '<?php echo $sectors->sector_name?>',
                                        y: <?php 
                //$projects_tot=$this->db->query("select sum(project_amount) as tot
                 //from ppms_project where sector_id=$sectors->sector_id")->row();
                     echo  $sectors->sector_amount;            
                                    ?>,
                                        drilldown: '<?php echo $sectors->sector_name?>'
                                    },
                                    <?php }?>

                                ]
                            }],
                            drilldown: {
                                series: [
                                    <?php $sectors1=$this->db->query("select * from ppms_sector")->result();
                                    foreach($sectors1 as $sectors1){
                                    ?> {
                                        name: '<?php echo $sectors1->sector_name?>',
                                        id: '<?php echo $sectors1->sector_name?>',
                                        data: [
                                            <?php $projects=$this->db->query("select * from ppms_project where sector_id=$sectors1->sector_id")->result();
                                    foreach($projects as $projects){
                                    ?>[
                                                '<?php echo $projects->project_name?>',
                                                <?php echo $projects->project_amount?>
                                            ],

                                            <?php }?>


                                        ]
                                    },
                                    <?php }?>

                                ]
                            }
                        });
                        </script>

                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card">




                        <?php /*?> <script>
                        // Create the chart
                        Highcharts.chart('containerM1', {
                            chart: {
                                type: 'pie'
                            },
                            title: {
                                text: 'Projects/Subprojects Detail',
                                align: 'left'
                            },
                            subtitle: {
                                text: 'Projects/Subprojects Detail',
                                align: 'left'
                            },

                            accessibility: {
                                announceNewData: {
                                    enabled: true
                                },
                                point: {
                                    valueSuffix: 'Million'
                                }
                            },

                            plotOptions: {
                                series: {
                                    borderRadius: 5,
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}: {point.y:1f}'
                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:}</b> Million<br/>'
                            },

                            series: [


                                {
                                    name: 'Projcts',
                                    colorByPoint: true,
                                    data: [
                                        <?php $projectss=$this->db->query("select * from ppms_project")->result();
            foreach($projectss as $projectsss){
            ?>

                                        {
                                            name: '<?php echo $projectsss->project_name?>',
                                            y: <?php echo $projectsss->project_amount?>,
                                            drilldown: '<?php echo $projectsss->project_name?>'
                                        },
                                        <?php }?>
                                    ]
                                }


                            ],
                            drilldown: {
                                series: [
                                    <?php $projectss1=$this->db->query("select * from ppms_project")->result();
            foreach($projectss1 as $projectsss1){
            ?> {
                                        name: '<?php echo $projectsss1->project_name?>',
                                        id: '<?php echo $projectsss1->project_name?>',
                                        data: [
                                            <?php $Subprojectss1=$this->db->query("select * from ppms_subproject where subproject_id=$projectsss1->project_id")->result();
            foreach($Subprojectss1 as $Subprojectss1){
            ?>

                                            [
                                                '<?php echo $Subprojectss1->subproject_name?>',
                                                <?php echo $Subprojectss1->subproject_amount?>
                                            ],
                                            <?php }?>
                                        ]
                                    },

                                    <?php }?>

                                ]
                            }
                        });
                        </script>
                        <?php */?>
                        <figure class="highcharts-figure">
                            <div id="containerM1"></div>

                        </figure>
                        <script>
                        // Create the chart
                        Highcharts.chart('containerM1', {
                            chart: {
                                type: 'pie'
                            },
                            title: {
                                text: 'Projects/Sub Projects',
                                align: 'left'
                            },
                            subtitle: {
                                text: 'Projects/Sub Projects Detail',
                                align: 'left'
                            },

                            accessibility: {
                                announceNewData: {
                                    enabled: true
                                },
                                point: {
                                    valueSuffix: ''
                                }
                            },

                            plotOptions: {
                                series: {
                                    borderRadius: 5,
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.name}: {point.y:1f} '
                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:2f}</b> Million<br/>'
                            },

                            series: [{
                                name: 'Project',
                                colorByPoint: true,
                                data: [
                                    <?php $pppp=$this->db->query("select * from ppms_project")->result();
                                    foreach($pppp as $pppp){
                                    ?>

                                    {
                                        name: '<?php echo $pppp->project_name?>',
                                        y: <?php 
                //$projects_tot=$this->db->query("select sum(project_amount) as tot
                 //from ppms_project where sector_id=$sectors->sector_id")->row();
                     echo  $pppp->project_amount;            
                                    ?>,
                                        drilldown: '<?php echo $pppp->project_name?>'
                                    },
                                    <?php }?>

                                ]
                            }],
                            drilldown: {
                                series: [
                                    <?php $pppp1=$this->db->query("select * from ppms_project")->result();
                                    foreach($pppp1 as $pppp1){
                                    ?> {
                                        name: '<?php echo $pppp1->project_name?>',
                                        id: '<?php echo $pppp1->project_name?>',
                                        data: [
                                            <?php $pppp2=$this->db->query("select * from ppms_subproject where project_id=$pppp1->project_id")->result();
                                    foreach($pppp2 as $pppp2){
                                    ?>[
                                                '<?php echo $pppp2->subproject_name?>',
                                                <?php echo $pppp2->subproject_amount?>
                                            ],

                                            <?php }?>


                                        ]
                                    },
                                    <?php }?>

                                ]
                            }
                        });
                        </script>

                    </div>
                </div>



                    <div class="col-xl-12">
                    <div class="card">
                        <figure class="highcharts-figure">
                            <div id="containerM"></div>

                        </figure>
                        <script>
                        // Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

                        // Create the chart
                        Highcharts.chart('containerM', {
                            chart: {
                                type: 'column'
                            },
                            title: {
                                align: 'left',
                                text: 'Total SubProjects(City Wise)'
                            },
                            subtitle: {
                                align: 'left',
                                text: ''
                            },
                            accessibility: {
                                announceNewData: {
                                    enabled: true
                                }
                            },
                            xAxis: {
                                type: 'category'
                            },
                            yAxis: {
                                title: {
                                    text: 'Sub Projects City Wise(in Million)'
                                }

                            },
                            legend: {
                                enabled: false
                            },
                            plotOptions: {
                                series: {
                                    borderWidth: 0,
                                    dataLabels: {
                                        enabled: true,
                                        format: '{point.y:}'
                                    }
                                }
                            },

                            tooltip: {
                                headerFormat: '<span style="font-size:12px">{series.name}</span><br>',
                                pointFormat: '<span style="color:{point.color}">{point.name}</span>: '
                            },

                            series: [{
                                name: 'Sub Projects',
                                colorByPoint: true,
                                data: [
                                    <?php $result1 = $this->db->query("SELECT * FROM 
                  city")->result();
                  foreach($result1 as $result2){?> {
                                        name: '<?php echo $result2->city_name?>',
                                        y: <?php $pp = $this->db->query("SELECT count(*) as tot_project FROM 
                  ppms_subproject where city_id=$result2->city_id")->row();
                  echo $pp->tot_project;?>,
                                        drilldown: '<?php echo $result2->city_name?>'
                                    },
                                    <?php }?>

                                ]
                            }],
                            drilldown: {
                                breadcrumbs: {
                                    position: {
                                        align: 'right'
                                    }
                                },
                                series: [
                                    <?php $res = $this->db->query("SELECT * FROM 
                  city
                  ")->result();
                  foreach($res as $res1){?> {

                                        name: '<?php echo $res1->city_name?>',
                                        id: '<?php echo $res1->city_name?>',
                                        data: [
                                            <?php $res2 = $this->db->query("SELECT * FROM ppms_subproject
                  where city_id=$res1->city_id
                  ")->result();
                  foreach($res2 as $res3){?>[
                                                '<?php echo $res3->subproject_name?>',
                                                <?php echo $res3->subproject_amount?>
                                            ],
                                            <?php }?>

                                        ]
                                    },
                                    <?php }?>





                                ]
                            }
                        });
                        </script>

                    </div>


                </div>
                
                <div class="col-xl-6">
                    <div class="card">
                    <div class="dt-responsive table-responsive">



<table id="simpletable" class="table  table-bordered  nowrap">
    <tr><td colspan="5" align="center"><b>Summary Staff Position<br>
Incremental Staff
</b>

</td></tr>
    <tr>
    <th>S#</th>
        <th>Name Of Entity</th>
        <th>Total Positions<br>
    per PAM</th>
        <th>
            <table width="100%">
                <tr><td colspan="3" align="center">Filled Positions</td></tr>
                <tr><td>Total</td><td>Male</td><td>Female</td></tr>
            </table>
    
    </th>
   
        <th>Remaining Positions</th>
       
    </tr>
    <?php 
    $x=1;
    $a1=0;
    $b1=0;
    $c1= 0;
    $d1=0;
    $e1=0;
    $this->db->select('*');
    $this->db->from('hr_staff_position');
    $this->db->join('organization', 'hr_staff_position.organization_id = organization.organization_id');
    $positions=$this->db->get()->result();
    foreach ($positions as $position) { ?>
        <tr>
        <td><?php echo $x; ?></td>
            <td><?php echo $position->organization_name; ?></td>
            <td>
              
            <?php echo $a=$position->total_position; ?></td>
            <td valign="top">
            <table  width="100%">
                
                <tr><td><?php echo $b=$position->filled_total; ?></td>
                <td><?php echo $c=$position->male; ?></td>
                <td><?php echo $d=$position->female; ?></td>
            </tr>
            </table>    
            
            </td>
           
            <td><?php echo $e=$position->remaining; ?></td>
           
        </tr>
       
    <?php 
    $a1=$a1+$a;
    $b1=$b1+$b;
    $c1=$c1+$c;
    $d1=$d1+$d;
    $e1=$e1+$e;
$x++;
} ?>
 <tr><th></th>
 <th>Total</th>
 <th><?php echo $a1;?></th>
 
 <th valign="top"><table  width="100%">
                
                <tr><td><?php echo $b1; ?></td>
                <td><?php echo $c1; ?></td>
                <td><?php echo $d1; ?></td>
            </tr>
            </table></th><th><?php echo $e1;?></th>
</table>

</div>


                    </div>
                    </div>





                     <div class="col-xl-6">
                     <div class="card">
                    
                     <div id="containerMMMM"></div>
<script>
                     // Data retrieved from:
// - https://en.as.com/soccer/which-teams-have-won-the-premier-league-the-most-times-n/
// - https://www.statista.com/statistics/383679/fa-cup-wins-by-team/
// - https://www.uefa.com/uefachampionsleague/history/winners/
Highcharts.chart('containerMMMM', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'Summary Staff Position Incremental Staff ',
        align: 'left'
    },
    xAxis: {
        categories: [
            <?php $rowss = $this->db->query("SELECT * FROM organization WHERE `organization_id` IN(3,2,7,11,13,15)")->result();
                  foreach($rowss as $rowsss){?>  
            '<?php echo $rowsss->organization_name;?>', 
        <?php }?>
        ]
    },
    yAxis: {
        min: 0,
        title: {
            text: 'Positions'
        },
        stackLabels: {
            enabled: true
        }
    },
    legend: {
        align: 'left',
        x: 70,
        verticalAlign: 'top',
        y: 70,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || 'white',
        borderColor: '#CCC',
        borderWidth: 1,
        shadow: false
    },
    tooltip: {
        headerFormat: '<b>{point.x}</b><br/>',
        pointFormat: '{series.name}: {point.y}<br/>Total: {point.stackTotal}'
    },
    plotOptions: {
        column: {
            stacking: 'normal',
            dataLabels: {
                enabled: true
            }
        }
    },
    series: [
    {
        name: 'Yet to Advertised',
        data: [
            <?php $totiii = $this->db->query("
        SELECT (total_position-(male+female)) as total_positions FROM hr_staff_position order by organization_id asc")->result();
foreach($totiii as $totiiii){?>
            <?php echo $totiiii->total_positions?>,
        <?php }?>
        ]
    }, {
        name: 'Male',
        data: [
            <?php $totiiiM = $this->db->query("
        SELECT male FROM hr_staff_position order by organization_id asc")->result();
foreach($totiiiM as $totiiiM){?>
            <?php echo $totiiiM->male?>, 
        <?php }?>
        
        ]
    }, {
        name: 'Female',
        data: [
            <?php $totiiiF = $this->db->query("
        SELECT female FROM hr_staff_position order by organization_id asc")->result();
foreach($totiiiF as $totiiiF){?> 
            <?php echo $totiiiF->female?>,
            <?php }?>
        
        ]
    }]
});
</script>

<?php }?>
                    </div></div>
            <div id="styleSelector"></div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>