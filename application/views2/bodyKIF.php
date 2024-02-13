
                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">

                            <div class="main-body">
                                <div class="page-wrapper">
                                    <div class="page-header">
                                        <div class="page-header-title">
                                            <h4>Welcome to  <?php 
    $empID=$this->session->userdata('empid');
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
    echo $orgee->organization_name;
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
                                            <div class="col-md-6 col-xl-3">
                                                <div class="card client-blocks dark-primary-border">
                                                    <div class="card-block">
                                                        <h5>Total IPC's</h5>
                                                        <ul>
                                                            <li>
                                                                <i class="icofont icofont-document-folder"></i>
                                                            </li>
                                                            <li class="text-right">
                                         <?php $tot_ipace=$this->db->query("select count(*) as tot_ipac from ppms_ipac")->row();
                                         echo $tot_ipace->tot_ipac;
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
                                                        <h5>Approved IPC's</h5>
                                                        <ul>
                                                            <li>
                                                                <i class="icofont icofont-document-folder"></i>
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
											
											
										      <div class="col-md-6 col-xl-3">
												<div class="card client-blocks warning-border">
														<div class="card-block">
															<a href="ipc_detail.html"><h5>In - Progress IPC's</h5></a>
															<ul>
																<li>
																	<i class="icofont icofont-ui-user-group text-warning"></i>
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
												  
												    <div class="col-md-6 col-xl-3">
												<div class="card client-blocks bg-danger ">
														<div class="card-block">
															<h5 style="color:white;">Returned IPC's</h5>
															<ul>
																<li>
																	<i class="icofont icofont-code-alt text-warning"></i>
																	</li>
																	<li class="text-right text-warning">
                                                                    <?php $tot_ipace=$this->db->query("select count(*) as tot_ipac from ppms_ipac")->row();
                                         echo 0;
                                         ?>
																	</li>
																</ul>
															</div>
														</div>
										
                                                  </div>
                                       
                                        
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

<!-- Older IE warning message -->
    <!--[if lt IE 9]>
<div class="ie-warning">
    <h1>Warning!!</h1>
    <p>You are using an outdated version of Internet Explorer, please upgrade <br/>to any of the following web browsers to access this website.</p>
    <div class="iew-container">
        <ul class="iew-download">
            <li>
                <a href="http://www.google.com/chrome/">
                    <img src="assets/images/browser/chrome.png" alt="Chrome">
                    <div>Chrome</div>
                </a>
            </li>
            <li>
                <a href="https://www.mozilla.org/en-US/firefox/new/">
                    <img src="assets/images/browser/firefox.png" alt="Firefox">
                    <div>Firefox</div>
                </a>
            </li>
            <li>
                <a href="http://www.opera.com">
                    <img src="assets/images/browser/opera.png" alt="Opera">
                    <div>Opera</div>
                </a>
            </li>
            <li>
                <a href="https://www.apple.com/safari/">
                    <img src="assets/images/browser/safari.png" alt="Safari">
                    <div>Safari</div>
                </a>
            </li>
            <li>
                <a href="http://windows.microsoft.com/en-us/internet-explorer/download-ie">
                    <img src="assets/images/browser/ie.png" alt="">
                    <div>IE (9 & above)</div>
                </a>
            </li>
        </ul>
    </div>
    <p>Sorry for the inconvenience!</p>
</div>
<![endif]-->
<!-- Warning Section Ends -->