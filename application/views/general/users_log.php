<div class="pcoded-content">
<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Display Users</h4>
                  
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
                                <h5>Users Log Records</h5>
                                <span></span>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Serial#</th>
                                                <th>Emp Name</th>
                                                <th>User Name</th>
                                                <th>Login Time</th>
                                                <th>Logout Time</th>
                                                <th>IP Address</th>
                                               
                                               
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $done=$this->db->query("select * from
                                             login_logs as ul,user_new as un,emp as e
                                            where ul.user_id=un.user_id
                                            and un.emp_id=e.emp_id
                                            

                                            ")->result();
                                            $i=1;
                                            foreach($done as $done){
                                            ?>
                                            <tr>
                                                <td><?php echo $i;?></td>
                                                <td><?php echo $done->emp_name;?></td>
                                                <td><?php echo $done->user_name;?></td>
                                                <td><?php echo $done->timestamp_login;?></td>
                                                <td><?php echo $done->timestamp_logout;?></td>
                                                <td><?php echo $done->ip_address;?></td>
                                            </tr>
                                          
                                           
                                           <?php  $i++;
                                        }?>
                                        </tbody>
                                       
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- Zero config.table end -->
                      
                    
                        
                       
                      
                    </div>

                   


                </div>
            </div>
            <!-- Page-body end -->
        </div>
    </div>
    <!-- Main-body end -->
    <div id="styleSelector">

    </div>
</div>
</div>
</div>
</div>
</div>
</div>
