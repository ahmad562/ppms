
<style type="text/css">
   
</style>
        <div class="pcoded-content" >
            <div class="pcoded-inner-content">
                <!-- Main-body start -->
                <div class="main-body">
                    <div class="page-wrapper">
                        <!-- Page-header start -->
                        <div class="page-header">
                            <div class="page-header-title">
                                <!-- <h4>DPS Detail</h4> -->


                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body" style=" margin-top:-50px ;">
                        <div class="container">
                                <div class="row">
                                   
                                <!-- Table --> 
                                <div class="col-6">
                                    <!-- Zero config.table start -->
                                    <button class="btn btn-primary mb-1"  onclick="all_dp_list()" class="form-control">All Dp List</button>

                                    <!-- Zero config.table start -->
                                    <button class="btn btn-primary mb-1"  onclick="assigned_dp_list()" class="form-control">Assigned DP List</button>
                                </div>
                            </div>
                        </div>
                           <div id="all_dp_list">
                               
                           </div>
                        </div>
                        </div>
                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<script>
                function attorney(id){
                    var cnic = $("#cnic"+id).val();
                    var attern = $("#attern").val();
                    //alert(cnic);
                    
            $.ajax({
                url: "<?php echo base_url('Complaint/attorney') ?>",
                method: "POST",
                datatype: "html",
                data : {
                       id : id,

                       cnic : cnic,
                       attern : attern
                          
                    },
                success : function(data){
                    //alert(data);
                $("#attorneykif"+id).html(data);
                }
            });
         }
                                                            
          
    function get_project(iddd_p,id_p){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_project')?>",
                    data: {
                        id: iddd_p
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#project_id"+id_p).html('<option value="">Select project</option');
                        $("#project_id"+id_p).html(data);
                       

                    }
                }
                );
            }
            function get_subproject(idddd,id_sp){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_subproject')?>",
                    data: {
                        id: idddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#subproject_id"+id_sp).html('<option value="">Select Subproject</option');
                        $("#subproject_id"+id_sp).html(data);
                       

                    }
                }
                );
            }
            function get_site(iddd_s,id_s){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_site')?>",
                    data: {
                        id: iddd_s
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#site_id"+id_s).html('<option value="">Select Site</option');
                        $("#site_id"+id_s).html(data);
                    }
                }
                );
            }
            function get_status(status_id,dp_id){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_status')?>",
                    data: {
                        status_id : status_id,
                        dp_id :dp_id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#status_id"+dp_id).val();
                        $("#filter_cnic"+dp_id).html(data);

                    }
                }
                );
            }
            function insert_dp_detail(id){
                var project_id = $("#project_id"+id).val();
                var subproject_id = $("#subproject_id"+id).val();
                var site_id = $("#site_id"+id).val();
                var parentt = $("#parentt"+id).val();
                var status_id = $("#status_id"+id).val();
                var dp_id = $("#ss_dp"+id).val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/insert_dp_detail')?>",
                    data: {
                        dp_id : dp_id,
                        subproject_id : subproject_id,
                        site_id : site_id,
                        status_id : status_id,
                        parentt : parentt
                        },
                    datatype: "html",
                    success: function(data) {
                    location.reload();
                    }
                }
                );
                
            }
            function all_dp_list(){     
            $.ajax({
                url: "<?php echo base_url('Complaint/all_dp_list') ?>",
                method: "POST",
                datatype: "html",
                success : function(data){
                $("#all_dp_list").html(data);
                }
            });
         }
         function assigned_dp_list(){     
            $.ajax({
                url: "<?php echo base_url('Complaint/assigned_dp_list') ?>",
                method: "POST",
                datatype: "html",
                success : function(data){
                $("#all_dp_list").html(data);
                }
            });
         }

</script>
    