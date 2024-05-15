
<?php

$empID=$this->session->userdata('empid');
$groupID=$this->session->userdata('groupid');
$cityID=$this->session->userdata('cityid');
error_reporting(0);

$orgee=$this->db->query("SELECT organization_name,e.city_id,d.organization_id,e.emp_id,e.designation_id
FROM
emp AS e,organization AS d
WHERE e.organization_id=d.organization_id and e.emp_id=$empID")->row();
///echo $this->db->last_query();
/////////////////////////////////
			     $result2="SELECT * FROM 
                 ppms_subproject AS psd,
                 ppms_project AS ps,
                 ppms_sector AS se,
                 ppms_output_list AS pol            
                 WHERE psd.project_id=ps.project_id
                 AND ps.`sector_id`=se.`sector_id`
                 AND se.`output_id`=pol.`output_id`
                 and psd.subproject_id=$id";
                  $result1=$this->db->query($result2)->row();
                  ///foreach($result1 as $item){?>
<div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                        <h4>CW-Physical-Progress</h4>
                                            <span>Sector/CW/Lot Physical Progress</span>
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
                                        <h5><?php echo $result1->sector_name."/".$result1->project_name;?>/<?php echo $result1->subproject_name;?></h5>
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
										
										 <!-- Documents card start -->
                                         <div class="col-md-6 col-xl-2">
                            <div class="card client-blocks dark-primary-border">
                                <div class="card-block">
                                    <h5>Total <br>IPC's</h5>
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
                                         ///echo $a=$tot_ipace->tot_ipac;
                                         ?>0
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

<!-- Documents card start -->
<div class="col-md-6 col-xl-2">
                                                <div class="card client-blocks success-border">
                                                    <div class="card-block">
                                                        <h5>Approved <br>IPC's</h5>
                                                        <ul>
                                                            <li>
                                                                <i class="icofont icofont-check"></i>
                                                            </li>
                                                            <li class="text-right">
        <?php 
        
        if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){
            $tot_approved=$this->db->query("SELECT COUNT(*) AS tot_approved FROM 
            ppms_ipac_forward 
            WHERE organization_id=4 AND status_id=4")->row();
        
        }else{
            if($orgee->designation_id==8){
                $tot_approved=$this->db->query("SELECT COUNT(*) AS tot_approved FROM 
                ppms_ipac_forward AS pif,ppms_ipac AS pic,ppms_subproject AS pps,assign_regional AS ar
                WHERE organization_id=4 AND status_id=4
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
//echo $tot_approved->tot_approved;
                                         ?>0
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
											
											
										     
										




                        <!-- Documents card start -->
                        <div class="col-md-6 col-xl-2">
                            <div class="card client-blocks success-border">
                                <div class="card-block">
                                    <h5>Paid <br>IPC's</h5>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-verification-check"></i>
                                        </li>
                                        <li class="text-right">
                                        <?php 
                                         if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){
                                        
                                        $paid_ipc=$this->db->query("select count(*) as paid_ipc 
                                        from ipc_payment where status_id=2")->row();
                                         
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
                                        // echo $b=$paid_ipc->paid_ipc;

                                         ?>0
                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-xl-2">
                            <div class="card client-blocks warning-border">
                                <div class="card-block">
                                    <a href="<?php echo base_url()?>">
                                        <h5>Un Paid <br>IPC's </h5>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-close-squared-alt text-warning"></i>
                                        </li>
                                        <li class="text-right text-warning">
                                        <?php 
                                         if($groupID == 5 or $groupID == 6 or $groupID == 1 or $groupID == 2){
                                        
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
                                         //echo $Un_paid_ipc->Un_paid_ipc;
                                         ?> 0
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
 <div class="col-md-6 col-xl-2">
												<div class="card client-blocks warning-border">
														<div class="card-block">
															<a href="ipc_detail.html"><h5>In - Progress <br>IPC's</h5></a>
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
                                         ///echo $tot_ipace->tot_ipac;
                                         ?>0
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

										
										 
                                       
                                        
                                   
                            <div class="row">
								 
                                 <div class="col-5">
                               
                                 
                                                             <div class="card">
                 <div class="card-block">
                  <!-------------------------New Graph----->
                                
                                <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/export-data.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

 <?php $gr1=$this->db->query("select sum(activity_amount) as tot_project_amt,project_activity_name
                  from ppms_project_activity as ppa,
                        activity_status as ass
                        where ppa.subproject_id=$id and ppa.status_id=activity_status_id group by project_activity_id")->result();
                        
                        ?>   
<figure class="highcharts-figure">
    <div id="container"></div>
   
</figure>
<script>
// Data retrieved from https://netmarketshare.com/
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
        text: ' <?php echo $result1->sector_name."/".$result1->project_name?>/<?php echo $result1->subproject_name?>',
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
                format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                connectorColor: 'silver'
            }
        }
    },
    series: [
        {
        name: ' <?php echo $result1->sector_name."/".$result1->sector_name?>',
        data: [
             <?php foreach($gr1 as $gr2222){?>
            { 
                name: '<?php echo $gr2222->project_activity_name?>', y: <?php 
                                             
                                         $toti_kifi=$gr2222->tot_project_amt;
                                        echo number_format((($toti_kifi/$result1->subproject_amount)*100),2);           ?> 
                
            },
            <?php }?>
            
          
        ]
    }]
});


</script>
<style>

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
                                
                                
                                
                                <!--------------------------------------->
                	
                            </div>
                        </div>
											
											                
											
											
											
											
											</div>
								            
											
											<div class="col-5">
											
											                            <div class="card">
                            <div class="card-block">
																	                 
																					 <figure class="highcharts-figure">
    <div id="grm_cont"></div>
    <p class="highcharts-description">
        A basic column chart..
    </p>
</figure>
<script>


Highcharts.chart('grm_cont', {
    chart: {
        type: 'column'
    },
    title: {
        text: 'GRM Complaints by CW-02-LOT-04'
    },
    subtitle: {
        text: ''
    },
    xAxis: {
        categories: [
            'Jan',
            'Feb',
            'Mar',
            'Apr',
            'May',
            'Jun'
            
        ],
        crosshair: true
    },
    yAxis: {
        min: 0,
        title: {
            text: ''
        }
    },
    tooltip: {
        headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
        pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
            '<td style="padding:0"><b>{point.y:.1f} </b></td></tr>',
        footerFormat: '</table>',
        shared: true,
        useHTML: true
    },
    plotOptions: {
        column: {
            pointPadding: 0.2,
            borderWidth: 0
        }
    },
    series: [{
        name: 'Total',
        data: [49, 71, 106, 129, 144, 176]

    }, {
        name: 'Closed',
        data: [83, 78, 98, 93, 106, 84]

    }, {
        name: 'Resolved',
        data: [48, 38, 39, 41, 47, 48]

    }, {
        name: 'In Progress',
        data: [42, 33, 34, 39, 52, 75]

    }]
});


</script>
											
											</div>
											</div>
											</div>
								 
								 
								            <div class="col-2">
									
									
									
									
									   <div class="card social-widget-card" style="height:100px">
														<center>	<div class="card-block-big bg-facebook">
																<h3> 
             <?php $tot_activity=$this->db->query("select count(*) as tot_activities from ppms_project_activity where subproject_id=$result1->subproject_id")->row();
                                         echo $tot_activity->tot_activities;
                                         ?></h3>
																<span class="m-t-10">Total Activities</span>
															</div>
															</center>
                                                      </div>
													  
													
												
											               <div class="card social-widget-card" style="height:100px">
                                                    <center><div class="card-block-big bg-linkein">
                                                        <h3><?php $tot_activity=$this->db->query("select count(*) as tot_activities
                                                         from ppms_project_activity where status_id=3 and subproject_id=$result1->subproject_id")->row();
                                         echo $tot_activity->tot_activities;
                                         ?></h3>
                                                        <span class="m-t-10">In Progress</span>
                                                        
                                                    </div></center>
                                                </div>
													  
													    
						<div class="card-block-big" style="height:120px;background-color:#2ecc71">
                                                       <center>
                                             <h3 style="color:white;">
                                                       <?php $tot_activityt=$this->db->query("select count(*) as tot_activitiesT
                                                         from ppms_project_activity where status_id=1  and subproject_id=$result1->subproject_id")->row();
                                         echo $tot_activityt->tot_activitiesT;
                                         ?></h3>
                                                        <span class="m-t-10" style="color:white;">Activities Started</span></center>
                                                    </div>
                                                    <br>
													  
													    <div class="card-block-big bg-google-plus" style="height:120px">
                                                       <center> <h3 style="color:white;">
                                                       <?php $tot_activityNot=$this->db->query("select count(*) as tot_activitiesNot
                                                         from ppms_project_activity where status_id=2  and subproject_id=$result1->subproject_id")->row();
                                         echo $tot_activityNot->tot_activitiesNot;
                                         ?></h3>
                                                        <span class="m-t-10" style="color:white;">Activities Not Started</span></center>
                                                    </div>
													  
											</div>
								 
								 
								           
								 
								 
								 </div>
								 </div>
								
        <div class="page-wrapper">
            <!-- Page header start -->
       
            <!-- Page header end -->
           
            <!-- Page body start -->
            <div class="page-body">
                <div class="row">
                    <div class="col-xl-4">
                        <!-- Overall Progress card start -->
                        <div class="card">
                            <div class="card-block">
                                <!-- <p>.col-sm-4</p> -->
                                <div class="issue-list-progress">
                                    <h5><?php echo $result1->sector_name."/".$result1->project_name;?>/<?php echo $result1->subproject_name;?></h5><br/>
                                    <span>Overall Progress</span>
                                    <div class="issue-progress">
                                        <div class="progress">
                                            <span class="issue-text1 txt-primary"></span>
                                            <div class="issue-bar1 bg-primary"></div>
                                        </div>
                                        <!-- end of progress -->
                                    </div>
                                    <!-- end of issue progress -->
                                </div>
                                <!-- end of issue list progress -->
                                <div class="row">
                                    <div class="col-md-12 matrics-issue">
                                        <h6 class="sub-title">matrics</h6>
                                        <div class="row">
                                            <div class="col-md-6 text-center">
                                                <span class="piechart1"></span>
                                                <h6></h6>
                                            </div>
                                            <div class="col-md-6 text-center">
                                                <span class="piechart2"></span>
                                                <h6></h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- end of row -->
                                </div>
                                <!-- end of matric progress -->
                                <table class="table matrics-table">
                                    <tbody>
                                        <tr>
                                            <td>
                                                <strong>Contract Amount</strong>
                                            </td>
                                            <td class="txt-primary"><?php echo $result1->subproject_amount;?> million</td>
                                        </tr>
										    <tr>
                                            <td>
                                                <strong>Contractor Name</strong>
                                            </td>
                                            <td class="txt-primary">
                                            <?php
			     $resultContrator="SELECT e.emp_name FROM `ppms_subproject_assign` AS psa1,`emp` AS e
                 WHERE psa1.`contractor_id`=e.`emp_id`
                 and psa1.subproject_id=$id";
                  $resultContrator=$this->db->query($resultContrator)->row();
                  echo $resultContrator->emp_name;
                  
                  ?>




                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Time Consumed</strong>
                                            </td>
                                            <td class="txt-danger">
                                            <?php 
                                            $tdate=date('Y-m-d');
                                            $date1 = $result1->subproject_start_date;
                                            $date2 =  $tdate;
                                            $d1=new DateTime($date2); 
                                            $d2=new DateTime($date1);                                  
                                            $Months = $d2->diff($d1); 
                                            echo $howeverManyMonths = (($Months->y) * 12) + ($Months->m);
                                            
                                            
                                            ?>    
                                            
                                         Months</td>
                                        </tr>
                                    
                                        <tr>
                                            <td>
                                                <strong>Mobilization Advance</strong>
                                            </td>
                                            <td class="txt-primary"><span class="label label-success">Released</span></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Physical Progress</strong>
                                            </td>
                                            <td class="txt-success">0</td>
                                        </tr>
										   <tr>
                                            <td>
                                                <strong>Financial Progress</strong>
                                            </td>
                                            <td class="txt-success">0</td>
                                        </tr>
                                        
                                      
                                        <tr>
                                            <td>
                                                <strong>Start Date</strong>
                                            </td>
                                            <td class="txt-info"><?php echo $result1->subproject_start_date;?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>End Date</strong>
                                            </td>
                                            <td class="txt-info"><?php echo $result1->subproject_end_date;?></td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Acceptance Date</strong>
                                            </td>
                                            <td class="txt-info"><?php echo $result1->subproject_acceptancedate;?></td>
                                        </tr>
										 <tr>
                                            <td>
                                                <strong>Commencement Date</strong>
                                            </td>
                                            <td class="txt-info"><?php echo $result1->subproject_commencedate;?></td>
                                        </tr>
										
                                    </tbody>
                                    <!-- end of tbody -->
                                </table>
                                <!-- end of table -->
                            </div>
                        </div>
                        <!-- Overall Progress card stendart -->
						
						
						
						
						
                    </div>
                    <div class="col-xl-8">
                        <!-- New ticket button card start -->

                                  <div>
								          
										 
                                           <?php /*?>  
                                             <figure class="highcharts-figure">
												<div id="ct_bar"></div>
												<p class="highcharts-description">
													
												</p>
											</figure>

<script>
											
											Highcharts.chart('ct_bar', {
    title: {
        text: 'Sales of petroleum products March, Norway',
        align: 'left'
    },
    xAxis: {
        categories: ['Jet fuel', 'Duty-free diesel', 'Petrol', 'Diesel', 'Gas oil']
    },
    yAxis: {
        title: {
            text: 'Million liters'
        }
    },
    tooltip: {
        valueSuffix: ' million liters'
    },
    series: [{
        type: 'column',
        name: '2020',
        data: [59, 83, 65, 228, 184]
    }, {
        type: 'column',
        name: '2021',
        data: [24, 79, 72, 240, 167]
    }, {
        type: 'column',
        name: '2022',
        data: [58, 88, 75, 250, 176]
    }, {
        type: 'spline',
        name: 'Average',
        data: [47, 83.33, 70.66, 239.33, 175.66],
        marker: {
            lineWidth: 2,
            lineColor: Highcharts.getOptions().colors[3],
            fillColor: 'white'
        }
    }, {
        type: 'pie',
        name: 'Total',
        data: [{
            name: '2020',
            y: 619,
            color: Highcharts.getOptions().colors[0], // 2020 color
            dataLabels: {
                enabled: true,
                distance: -50,
                format: '{point.total} M',
                style: {
                    fontSize: '15px'
                }
            }
        }, {
            name: '2021',
            y: 586,
            color: Highcharts.getOptions().colors[1] // 2021 color
        }, {
            name: '2022',
            y: 647,
            color: Highcharts.getOptions().colors[2] // 2022 color
        }],
        center: [75, 65],
        size: 100,
        innerSize: '70%',
        showInLegend: false,
        dataLabels: {
            enabled: false
        }
    }]
});
		<?php */?>
		  <figure class="highcharts-figure">
    <div id="containerNew"></div>
    <p class="highcharts-description">
       
    </p>
</figure>
<script>
    Highcharts.chart('containerNew', {
    chart: {
        zoomType: 'xy'
    },
    title: {
        text: 'Activity Status(Planned/Achieved)',
        align: 'left'
    },
    subtitle: {
        text: ' ' +
            '<a href="' +
            'target="_blank"></a>',
        align: 'left'
    },
    xAxis: [{
        categories: [
            
            <?php $actee = $this->db->query("SELECT * FROM ppms_project_activity where subproject_id=$id order by project_activity_id asc")->result();
foreach($actee as $actee){?>
         '<?php echo $actee->project_activity_name;?>',
<?php }?>
        
        ],
        crosshair: true
    }],
    yAxis: [{ // Primary yAxis
        labels: {
            format: '{value} Total',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        },
        title: {
            text: 'Planned',
            style: {
                color: Highcharts.getOptions().colors[1]
            }
        }
    }, { // Secondary yAxis
        title: {
            text: 'Achieved',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        labels: {
            format: '{value} Total',
            style: {
                color: Highcharts.getOptions().colors[0]
            }
        },
        opposite: true
    }],
    tooltip: {
        shared: true
    },
    legend: {
        align: 'left',
        x: 80,
        verticalAlign: 'top',
        y: 60,
        floating: true,
        backgroundColor:
            Highcharts.defaultOptions.legend.backgroundColor || // theme
            'rgba(255,255,255,0.25)'
    },
    series: [
        {
        name: 'Planned',
        type: 'column',
        yAxis: 1,
        data: [
            <?php $actee1 = $this->db->query("SELECT * FROM ppms_project_activity where subproject_id=$id order by project_activity_id asc")->result();
foreach($actee1 as $actee1){?>  
            <?php echo $actee1->project_planned;?><?php echo $actee1->planned_unit;?>,
            <?php }?>
        
        ],
        tooltip: {
            valueSuffix: ' Total'
        }

    }, {
        name: 'Achieved',
        type: 'spline',
        data: [
            <?php $actee2 = $this->db->query("SELECT * FROM ppms_project_activity where subproject_id=$id order by project_activity_id asc")->result();
foreach($actee2 as $actee2){?>  
          <?php echo $actee2->project_achieved;?>,
            <?php }?> 
        
        
        ],
        tooltip: {
            valueSuffix: ' Total'
        }
    }]
});
											
											</script>

											
										  
										 
										 
								  </div>
								  
								  
								  <div>
								  
								  </div>
								  
								  
                        <!-- New ticket button card end -->
                        <!-- bug list card start -->
                        <div class="card">
                            <div class="card-header">
                                <h5>Water Supply - Activities</h5>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="table-responsive">
                                    <table id="issue-list-table" class="table dt-responsive width-100">
                                        <thead class="text-left">
                                            <tr>
                                                <th>Sn#</th>
                                                <th>Activity Name</th>
                                                <th>Start date</th>
                                                <th>Status</th>
                                                <th>Planned</th>
                                                <th>Achieved</th>
                                                <th>GIS MAP</th>
                                            </tr>
                                        </thead>
                                        <tbody class="text-left">
                        <?php $tot_activity_detail=$this->db->query("select * from ppms_project_activity as ppa,
                        activity_status as ass
                        where ppa.subproject_id=$result1->subproject_id and ppa.status_id=activity_status_id ")->result();
                                         //echo $tot_activity->tot_activities;
                                         $d=1;
                                         foreach($tot_activity_detail as $tot_activity_detail){
                                         ?> 
                                            <tr>
                                    <td><?php echo $d;?></td>
                                    <td><?php echo $tot_activity_detail->project_activity_name;?> <br/>
                                    <span style="font-size:10px;"><?php echo $tot_activity_detail->suggestion_text;?></span></td>
                                                <td><?php echo $tot_activity_detail->project_activity_startdate;?></td>
                                                
                                                 <td>
                                                    <?php if($tot_activity_detail->activity_status_id==1){?>
                                    <span class="label label-success"><?php echo $tot_activity_detail->activity_status_name;?></span>
                                         <?php }else if($tot_activity_detail->activity_status_id==2){?> 
                                    <span class="label label-danger"><?php echo $tot_activity_detail->activity_status_name;?></span>
                                         
                                         <?php }else if($tot_activity_detail->activity_status_id==3){?> 
                                    <span class="label label-warning"><?php echo $tot_activity_detail->activity_status_name;?></span>
                                         
                                         <?php }?>
                                                    </td>
                                                
                                                
                                                <td><a href="#"><?php echo $tot_activity_detail->project_planned;?></a></td>
                                                <td>
                                                    <?php if($tot_activity_detail->activity_status_id==1){?>
                                    <span class="label label-success"><?php echo $tot_activity_detail->project_achieved;?></span>
                                         <?php }else if($tot_activity_detail->activity_status_id==2){?> 
                                    <span class="label label-danger"><?php echo $tot_activity_detail->project_achieved;?></span>
                                         
                                         <?php }else if($tot_activity_detail->activity_status_id==3){?> 
                                    <span class="label label-warning"><?php echo $tot_activity_detail->project_achieved;?></span>
                                         
                                         <?php }?>
                                                    </td>
                                               
                                                <td><a href="">Click</a></td>
                                            </tr>
                                            <?php 
                                        $d++;
                                        }?>
											
                                           
                                          
											
											
                                        </tbody>
                                    </table>
                                </div>
                                <!-- end of table -->
                            </div>
                        </div>
                        <!-- bug list card end -->
                    </div>
                </div>
            </div>
            <!-- Page body end -->
        </div>
    <!-- Main-body end -->
								
								
								
								
								
                            </div>

                            <div id="styleSelector"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
