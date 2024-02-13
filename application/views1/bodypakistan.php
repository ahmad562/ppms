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
    
    $orgee=$this->db->query("SELECT organization_name,e.city_id,d.organization_id,e.emp_id
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
                                             if($desig_emp->designation_id==8){
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
<div class="col-md-6 col-xl-2">
                                                <div class="card client-blocks success-border">
                                                    <div class="card-block">
                                                        <h5>Approved <br>IPC's</h5>
                                                        <ul>
                                                            <li>
                                                                <i class="icofont icofont-check"></i>
                                                            </li>
                                                            <li class="text-right">
                <?php $tot_ipace=$this->db->query("select count(*) as tot_ipac from ppms_ipac")->row();
                                         echo 0;
                                         ?>
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

                                        
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6 col-xl-2">
                            <div class="card client-blocks warning-border">
                                <div class="card-block">
                                    <a href="ipc_detail.html">
                                        <h5>Un Paid <br>IPC's </h5>
                                    </a>
                                    <ul>
                                        <li>
                                            <i class="icofont icofont-close-squared-alt text-warning"></i>
                                        </li>
                                        <li class="text-right text-warning">
                                        <?php //echo $a-$b;
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
                                        <?php $tot_ipace=$this->db->query("select count(*) as tot_ipac from ppms_ipac")->row();
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


            <div class="row">
                        <script src="https://code.highcharts.com/highcharts.js"></script>
                        <script src="https://code.highcharts.com/modules/data.js"></script>
                        <script src="https://code.highcharts.com/modules/drilldown.js"></script>
                        <script src="https://code.highcharts.com/modules/exporting.js"></script>
                        <script src="https://code.highcharts.com/modules/export-data.js"></script>
                        <script src="https://code.highcharts.com/modules/accessibility.js"></script>
               

                <div class="col-xl-12">
                    <div class="card">
                    <figure class="highcharts-figure">
                            <div id="containerM"></div>
                          
                        </figure>
                        <script>// Data retrieved from https://gs.statcounter.com/browser-market-share#monthly-202201-202201-bar

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

    series: [
        {
            name: 'Sub Projects',
            colorByPoint: true,
            data: [
                <?php $result1 = $this->db->query("SELECT * FROM 
                  city")->result();
                  foreach($result1 as $result2){?>
                {
                    name: '<?php echo $result2->city_name?>',
                    y:  <?php $pp = $this->db->query("SELECT count(*) as tot_project FROM 
                  ppms_subproject where city_id=$result2->city_id")->row();
                  echo $pp->tot_project;?>,
                    drilldown: '<?php echo $result2->city_name?>'
                },
                <?php }?>
               
            ]
        }
    ],
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
                  foreach($res as $res1){?> 
            {
                
                name: '<?php echo $res1->city_name?>',
                id: '<?php echo $res1->city_name?>',
                data: [
                    <?php $res2 = $this->db->query("SELECT * FROM ppms_subproject
                  where city_id=$res1->city_id
                  ")->result();
                  foreach($res2 as $res3){?> 
                    [
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
                                    ?>
                                    {
                                        name: '<?php echo $sectors1->sector_name?>',
                                        id: '<?php echo $sectors1->sector_name?>',
                                        data: [
                        <?php $projects=$this->db->query("select * from ppms_project where sector_id=$sectors1->sector_id")->result();
                                    foreach($projects as $projects){
                                    ?>    
                                            [
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
            ?>   
                                    {
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
                                    ?>
                                    {
                                        name: '<?php echo $pppp1->project_name?>',
                                        id: '<?php echo $pppp1->project_name?>',
                                        data: [
                        <?php $pppp2=$this->db->query("select * from ppms_subproject where project_id=$pppp1->project_id")->result();
                                    foreach($pppp2 as $pppp2){
                                    ?>    
                                            [
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






</div>

<div id="styleSelector"></div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

