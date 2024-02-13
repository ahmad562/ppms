
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<div class="pcoded-content">
    <div class="pcoded-inner-content">
        <div class="main-body">
            <div class="page-wrapper">
                <div class="page-header">
                    <div class="page-header-title">
                        <!-- <h4>Display status</h4> -->
                    </div>
                   
                </div>
                <div class="page-body">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-header">
                                    <h1>Dashboard(Staff Entry Forms)</h1>
                                </div>
    <div class="card-block">
        <div class="row">
            <div class="col-md-3">
                <button class="btn btn-danger btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Hr_staff_position')?>">
                <font color="white"> View Positions</font></a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning btn-block">
                    <i class="fas fa-edit"></i><a href="<?php echo base_url('Hr_staff_plan')?>"><font color="white">
                         View Staff Recruitment Plan</font></a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-success btn-block">
                    <i class="fas fa-table"></i><a href="<?php echo base_url('Hr_consulting_firms')?>">
                    <font color="white"> Consulting Firms</font></a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block">
                    <i class="fas fa-plus-circle"></i><a href="<?php echo base_url('Hr_qcbs')?>"> 
                    <font color="white"> QCBS </font></a>
                </button>
            </div>
        </div>

        <div class="row">
           <?php /*?> <div class="col-md-3">
                <button class="btn btn-primary btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Hr_qcbs/display_award_list')?>"><font color="white"> QCBS Awarded</font></a>
                </button>
            </div>
            <?php */?>
            <div class="col-md-3">
                <button class="btn btn-success btn-block">
                    <i class="fas fa-edit"></i>
                          <a href="<?php echo base_url('Hr_qcbs/package_list')?>">
                          <font color="white">
                         Packages</font>
                        </a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning btn-block">
                    <i class="fas fa-table"></i><a href="<?php echo base_url('Hr_qcbs/display_icrm')?>">
                    <font color="white"> ICRM Records</font></a>
                </button>
            </div>
            <?php /*?><div class="col-md-3">
                <button class="btn btn-danger btn-block">
                    <i class="fas fa-plus-circle"></i><a href="<?php echo base_url('Hr_qcbs/display_icrms_award')?>"> 
                    <font color="white"> ICRM Awarded </font></a>
                </button>
            </div>
            <?php */?>
              <div class="col-md-3">
                <button class="btn btn-success btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Loan')?>">
                <font color="white"> Loan Detail</font></a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-danger btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Hr_ipc_sms')?>">
                <font color="white"> SMS Group </font></a>
                </button>
            </div>

        </div>


        <div class="row">
          
            <div class="col-md-3">
                <button class="btn btn-danger btn-block">
                    <i class="fas fa-edit"></i>
                          <a href="<?php echo base_url('Loan/grant_view')?>">
                          <font color="white">
                         Grant Detail</font>
                        </a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-warning btn-block">
                    <i class="fas fa-table"></i><a href="<?php echo base_url('Hr_consultancy_contracts')?>">
                    <font color="white"> Consul Contracts Awarded</font></a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-primary btn-block">
                    <i class="fas fa-plus-circle"></i><a href="<?php echo base_url('Hr_non_consulting_services')?>"> 
                    <font color="white"> Non Consultancy </font></a>
                </button>
            </div>
            <div class="col-md-3">
                <button class="btn btn-danger btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Hr_pipeline')?>">
                <font color="white"> Pipeline Contracts</font></a>
                </button>
            </div>
        </div>


       


    <div class="card-header">
                                    <h1>Dashboard(Staff Reports)</h1>
                                </div>

    <div class="card-block">
        <div class="row">
            <div class="col-md-4">
                <button class="btn btn-danger btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Hr_staff_position/view_positions_report')?>">
                <font color="white"> Positions </font></a>
                </button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-warning btn-block">
                    <i class="fas fa-edit"></i><a href="<?php echo base_url('Hr_staff_plan/report')?>"><font color="white">
                         Staff Recruitment Plan </font></a>
                </button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-success btn-block">
                    <i class="fas fa-table"></i><a href="<?php echo base_url('Hr_consulting_firms/qcbs_report')?>">
                    <font color="white"> Consulting Firms(QCBS) </font></a>
                </button>
            </div>
           
        </div>
       
          
           
        </div>
        <div class="row">
           
            
            <div class="col-md-4">
                <button class="btn btn-primary btn-block">
                    <i class="fas fa-plus-circle"></i><a href="<?php echo base_url('Hr_qcbs/icrm_report')?>"> 
                    <font color="white"> ICRM  Report</font></a>
                </button>
            </div>
            <div class="col-md-4">
                <button class="btn btn-success btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Hr_qcbs/awarded_contract_report')?>">
                <font color="white">Consultancy Contract Awarded</font></a>
                </button>
            </div>
            <div class="col-md-4">
            <button class="btn btn-danger btn-block">
                    <i class="fas fa-edit"></i>
                          <a href="<?php echo base_url('Hr_qcbs/non_consulting_contract')?>">
                          <font color="white">
                         Non-Consulting Service Contracts</font>
                        </a>
                </button>
                </div>

                <div class="col-md-4">
                <button class="btn btn-warning btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Hr_qcbs/pipeline_contract')?>">
                <font color="white"> Pipeline Contracts</font></a>
                </button>
            </div>

            <div class="col-md-4">
                <button class="btn btn-danger btn-block">
                <i class="fas fa-plus"></i><a href="<?php echo base_url('Enviroment/es_file_old')?>">
                <font color="white"> Enviromental Safeguard</font></a>
                </button>
            </div>
        </div>


       


     



    </div>

    <style>
        .btn-container {
            margin-top: 50px;
        }
        .btn {
            margin: 10px;
            padding: 10px 20px;
        }
        .btn-cart {
            display: flex;
            flex-wrap: wrap;
        }
        .btn-cart .col-md-3 {
            padding: 0 10px;
        }
        .btn-cart .btn {
            width: 100%;
            margin-bottom: 10px;
        }
        .btn-cart .btn i {
            margin-right: 10px;
        }
    </style>




