
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
                                   <h4>Add Larp Detail</h4>

                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body">
                            
                            <div class="container">
                                <div class="row justify-content-end">
                                   
                                <!-- Table --> 
                                <div class="col-sm-2 text-right">
                                    <!-- Zero config.table start -->
                                    <button class="btn btn-primary mb-1"  onclick="dp_load()" class="form-control">Larp Files</button>
                                </div>
                            </div>
                                 <div class="row ">
                                   
                                <!-- Table -->
                                <div class="col-sm-12">
                                
                         <div id="dp_load">
                             
                         </div>
               
                                        </div>
                                    </div>
                                    <!-- Zero config.table end -->

                                </div>

                                 <!-- Table -->
                            </div>
                            
                           <div id="dp_list">
                               
                           </div>
                                   
                                        <!--/span-->
                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                
                                 <!-- Table -->
                            </div>
                            </div>
                           
                        </div>

                        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
                function dp_load(){
            $.ajax({
                url: "<?php echo base_url('Complaint/dp_load') ?>",
                method: "POST",
                datatype: "html",
                success : function(data){
                $("#dp_load").html(data);
                }
            });
         }
            </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
   function get_subproject(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_subproject')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#subproject_id").html('<option value="">Select Subproject</option');
                        $("#subproject_id").html(data);
                       

                    }
                }
                );
            }
            function get_site(iddd){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_site')?>",
                    data: {
                        id: iddd
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#site_id").html('<option value="">Select Site</option');
                        $("#site_id").html(data);
                    }
                }
                );
            }
            function get_description(iddd){
                var subproject_id = $("#subproject_id").val();
                var project_id = $("#project_id").val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/get_description')?>",
                    data: {
                        site_id: iddd,
                        subproject_id : subproject_id,
                        project_id : project_id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#description_id").html('<option value="">Select Description</option');
                        $("#description_id").html(data);
                       

                    }
                }
                );
            }

</script>
<script>
                                        function get_bortotalarea(id) {
                                            var area_affected = $("#area_affected"+id).val();
                                var bor_unit_rate = $("#bor_unit_rate"+id).val();
                                            
                            var total = ((area_affected * 1) * (bor_unit_rate * 1) );

                                $("#bor_total_amount"+id).val(total);

                                            
                                    }

                                        function get_ivstotalarea(id) {
                                var area_affected = $("#area_affected"+id).val();
                                var ivs_unit_rate = $("#ivs_unit_rate"+id).val();
                                
                            var total = ((area_affected * 1) * (ivs_unit_rate * 1) );

                                $("#ivs_total_amount"+id).val(total);

                                            


                                        }

                                        function get_bortotalareaa(id) {
                                            var total_areaa = $("#total_areaa"+id).val();
                                var bor_total_amountt = $("#bor_unit_ratee"+id).val();
                                            
                            var total = ((total_areaa * 1) * (bor_total_amountt * 1) );

                                $("#bor_total_amountt"+id).val(total);

                                            
                                    }

                                        function get_ivstotalareaa(id) {
                                var total_areaa = $("#total_areaa"+id).val();
                                var ivs_unit_ratee = $("#ivs_unit_ratee"+id).val();
                                
                            var total = ((total_areaa * 1) * (ivs_unit_ratee * 1) );

                                $("#ivs_total_amountt"+id).val(total);

                                            


                                        }

            function insert_land_record(id){
                var project_id = $("#project_id").val();
                var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
                var description_id = $("#description_id").val();
                var total_area = $("#total_area"+id).val();
                var land_type_id = $("#land_type_id"+id).val();
                var area_unit_id = $("#area_unit_id"+id).val();
                var bor_unit_rate = $("#bor_unit_rate"+id).val();
                var bor_total_amount = $("#bor_total_amount"+id).val();
                var bor_l_payable_amount = $("#bor_l_payable_amount"+id).val();
                var ivs_unit_rate = $("#ivs_unit_rate"+id).val();
                var ivs_total_amount = $("#ivs_total_amount"+id).val();
                var ivs_l_payable_amount = $("#ivs_l_payable_amount"+id).val();
                var khasra_no = $("#khasra_no"+id).val();
                var area_affected = $("#area_affected"+id).val();
                var ss_dp_id = $("#ss_dp_idpak"+id).val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/insert_land_record')?>",
                    data: {
                        total_area : total_area,
                        land_type_id :land_type_id,
                        area_unit_id: area_unit_id,
                        bor_unit_rate : bor_unit_rate,
                        bor_total_amount : bor_total_amount,
                        ivs_l_payable_amount : ivs_l_payable_amount,
                        ivs_unit_rate : ivs_unit_rate,
                        ivs_total_amount : ivs_total_amount,
                        bor_l_payable_amount : bor_l_payable_amount,
                        ss_dp_id : ss_dp_id,
                        project_id : project_id,
                        subproject_id : subproject_id,
                        site_id : site_id,
                        description_id : description_id,
                        khasra_no : khasra_no,
                        area_affected : area_affected
                        },
                    datatype: "html",
                    success: function(data) {
                    $("#total_area"+id).val("");
                    $("#land_type_id"+id).val("");
                    $("#area_unit_id"+id).val("");
                    $("#bor_unit_rate"+id).val("");
                    $("#bor_total_amount"+id).val("");
                    $("#ivs_unit_rate"+id).val("");
                    $("#bor_l_payable_amount"+id).val("");
                    $("#ivs_l_payable_amount"+id).val("");
                    $("#ivs_total_amount"+id).val("");
                    $("#khasra_no"+id).val("");
                    $("#area_affected"+id).val("");
                    window.location.reload();
                    Swal.fire({
                           position: 'bottom',
                           icon: 'success',
                           text: 'Land Record saved successfully',
                           showConfirmButton: false,
                           timer: 2000,
                         }); 
                    
                    }
                }
                );
                
            }
            function update_land_record(id){
                var project_id = $("#project_id").val();
                var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
                var description_id = $("#description_id").val();
                var lr_id = $("#lr_id"+id).val();
                var total_area = $("#total_areaa"+id).val();
                var land_type_id = $("#land_type_idd"+id).val();
                var area_unit_id = $("#area_unit_idd"+id).val();
                var bor_unit_rate = $("#bor_unit_ratee"+id).val();
                var bor_total_amount = $("#bor_total_amountt"+id).val();
                var ivs_unit_rate = $("#ivs_unit_ratee"+id).val();
                var ivs_total_amount = $("#ivs_total_amountt"+id).val();
                var khasra_no = $("#khasra_noo"+id).val();
                var area_affected = $("#area_affectedd"+id).val();
                var ss_dp_id = $("#ss_dp_idpak"+id).val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/update_land_record')?>",
                    data: {
                        total_area : total_area,
                        land_type_id :land_type_id,
                        area_unit_id: area_unit_id,
                        bor_unit_rate : bor_unit_rate,
                        bor_total_amount : bor_total_amount,
                        ivs_unit_rate : ivs_unit_rate,
                        ivs_total_amount : ivs_total_amount,
                        ss_dp_id : ss_dp_id,
                        project_id : project_id,
                        subproject_id : subproject_id,
                        site_id : site_id,
                        description_id : description_id,
                        lr_id : lr_id,
                        khasra_no : khasra_no,
                        area_affected : area_affected
                        },
                    datatype: "html",
                    success: function(data) {
                    $("#total_areaa"+id).val("");
                    $("#land_type_idd"+id).val("");
                    $("#area_unit_idd"+id).val("");
                    $("#bor_unit_ratee"+id).val("");
                    $("#bor_total_amountt"+id).val("");
                    $("#ivs_unit_ratee"+id).val("");
                    $("#ivs_total_amountt"+id).val("");
                    $("#lr_id"+id).val("");
                    $("#khasra_noo"+id).val("");
                    $("#area_affectedd"+id).val("");
                    window.location.reload();
                    Swal.fire({
                           position: 'bottom',
                           icon: 'success',
                           text: 'Land Record updated successfully',
                           showConfirmButton: false,
                           timer: 2000,
                         }); 
                    
                    }
                }
                );
                
            }
                                        </script>

                                        <script>
                                        function get_nonbortotalarea(id) {
                                var nontotal_area = $("#nontotal_area"+id).val();
                                var nonbor_unit_rate = $("#non_bor_unit_rate"+id).val();
                                            
                            var total = ((nontotal_area * 1)*(nonbor_unit_rate * 1) );

                                $("#nonbor_total_amount"+id).val(total);

                                            
                                    }

                                        function get_nonivstotalarea(id) {
                                var nontotal_area = $("#nontotal_area"+id).val();
                                var nonivs_unit_rate = $("#nonivs_unit_rate"+id).val();
                               
                            var total = ((nontotal_area * 1)*(nonivs_unit_rate * 1) );

                                $("#nonivs_total_amount"+id).val(total);

                                            


                                        }

                                        function get_nonbortotalareaa(id) {
                                var nontotal_areaa = $("#nontotal_areaa"+id).val();
                                var nonbor_unit_ratee = $("#non_bor_unit_ratee"+id).val();
                                            
                            var total = ((nontotal_areaa * 1)*(nonbor_unit_ratee * 1) );

                                $("#nonbor_total_amountt"+id).val(total);

                                            
                                    }

                                        function get_nonivstotalareaa(id) {
                                var nontotal_areaa = $("#nontotal_areaa"+id).val();
                                var nonivs_unit_ratee = $("#nonivs_unit_ratee"+id).val();
                                
                            var total = ((nontotal_areaa * 1)*(nonivs_unit_ratee * 1) );

                                $("#nonivs_total_amountt"+id).val(total);

                                            


                                        }

            function insert_nonland_record(id){
                var project_id = $("#project_id").val();
                var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
                var description_id = $("#description_id").val();
                var nontotal_area = $("#nontotal_area"+id).val();
                var nonland_type_id = $("#nonland_type_id"+id).val();
                var nonbor_unit_rate = $("#non_bor_unit_rate"+id).val();
                var nonbor_total_amount = $("#nonbor_total_amount"+id).val();
                var nonivs_unit_rate = $("#nonivs_unit_rate"+id).val();
                var nonivs_total_amount = $("#nonivs_total_amount"+id).val();
                var ss_nlrecord_borpayableamount = $("#ss_nlrecord_borpayableamount"+id).val();
                var ss_nlrecord_ivspayableamount = $("#ss_nlrecord_ivspayableamount"+id).val();
                var ss_dp_id = $("#ss_dp_idpak"+id).val();
                window.location.reload();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/insert_nonland_record')?>",
                    data: {
                        nontotal_area : nontotal_area,
                        nonland_type_id :nonland_type_id,
                        nonbor_unit_rate : nonbor_unit_rate,
                        nonbor_total_amount : nonbor_total_amount,
                        nonivs_unit_rate : nonivs_unit_rate,
                        nonivs_total_amount : nonivs_total_amount,
                        ss_nlrecord_borpayableamount : ss_nlrecord_borpayableamount,
                         ss_nlrecord_ivspayableamount : ss_nlrecord_ivspayableamount,
                        ss_dp_id : ss_dp_id,
                        project_id : project_id,
                        subproject_id : subproject_id,
                        site_id : site_id,
                        description_id : description_id
                        },
                    datatype: "html",
                    success: function(data) {
                    $("#nontotal_area"+id).val("");
                    $("#nonland_type_id"+id).val("");
                    $("#nonbor_unit_rate"+id).val("");
                    $("#nonbor_total_amount"+id).val("");
                    $("#nonivs_unit_rate"+id).val("");
                    $("#nonivs_total_amount"+id).val("");
                    $("#ss_nlrecord_borpayableamount"+id).val("");
                    $("#ss_nlrecord_ivspayableamount"+id).val("");
                    window.location.reload();
                    Swal.fire({
                           position: 'bottom',
                           icon: 'success',
                           text: 'Non-Land Record saved successfully',
                           showConfirmButton: false,
                           timer: 2000,
                           
                         }); 

                    }
                }
                );
                
            }

            function update_nonland_record(id){
                var project_id = $("#project_id").val();
                var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
                var description_id = $("#description_id").val();
                var n_lr_id = $("#n_lr_id"+id).val();
                var nontotal_area = $("#nontotal_areaa"+id).val();
                var nonland_type_id = $("#nonland_type_idd"+id).val();
                var nonbor_unit_rate = $("#non_bor_unit_ratee"+id).val();
                var nonbor_total_amount = $("#nonbor_total_amountt"+id).val();
                var nonivs_unit_rate = $("#nonivs_unit_ratee"+id).val();
                var nonivs_total_amount = $("#nonivs_total_amountt"+id).val();
                var ss_dp_id = $("#ss_dp_idpak"+id).val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/update_nonland_record')?>",
                    data: {
                        nontotal_area : nontotal_area,
                        nonland_type_id :nonland_type_id,
                        nonbor_unit_rate : nonbor_unit_rate,
                        nonbor_total_amount : nonbor_total_amount,
                        nonivs_unit_rate : nonivs_unit_rate,
                        nonivs_total_amount : nonivs_total_amount,
                        ss_dp_id : ss_dp_id,
                        project_id : project_id,
                        subproject_id : subproject_id,
                        site_id : site_id,
                        description_id : description_id,
                        n_lr_id : n_lr_id
                        },
                    datatype: "html",
                    success: function(data) {
                    $("#nontotal_areaa"+id).val("");
                    $("#nonland_type_idd"+id).val("");
                    $("#nonbor_unit_ratee"+id).val("");
                    $("#nonbor_total_amountt"+id).val("");
                    $("#nonivs_unit_ratee"+id).val("");
                    $("#n_lr_id"+id).val("");
                    window.location.reload();
                    Swal.fire({
                           position: 'bottom',
                           icon: 'success',
                           text: 'Non-Land Record updated successfully',
                           showConfirmButton: false,
                           timer: 2000,
                           
                         }); 

                    }
                }
                );
                
            }

            function insert_allowances(id){
                var project_id = $("#project_id").val();
                var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
                var description_id = $("#description_id").val();
                var severity_amount = $("#severity_amount"+id).val();
                var total_amount_s = $("#total_amount_s"+id).val();
                var vulnerability = $("#vulnerability"+id).val();
                var total_amount_v = $("#total_amount_v"+id).val();
                var ss_allowances_borpayableamount = $("#ss_allowances_borpayableamount"+id).val();
                var ss_allowances_ivspayableamount = $("#ss_allowances_ivspayableamount"+id).val();
                var ss_dp_id = $("#ss_dp_idpak"+id).val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/insert_allowances')?>",
                    data: {
                        severity_amount : severity_amount,
                        total_amount_s :total_amount_s,
                        vulnerability : vulnerability,
                        total_amount_v : total_amount_v,
                        ss_allowances_borpayableamount :ss_allowances_borpayableamount,
                        ss_allowances_ivspayableamount :ss_allowances_ivspayableamount,
                        ss_dp_id : ss_dp_id,
                        project_id : project_id,
                        subproject_id : subproject_id,
                        site_id : site_id,
                        description_id : description_id
                        },
                    datatype: "html",
                    success: function(data) {
                    $("#severity_amount"+id).val("");
                    $("#total_amount_s"+id).val("");
                    $("#vulnerability"+id).val("");
                    $("#total_amount_v"+id).val("");
                     $("#ss_allowances_borpayableamount"+id).val("");
                    $("#ss_allowances_ivspayableamount"+id).val("");
                    window.location.reload();
                    Swal.fire({
                           position: 'bottom',
                           icon: 'success',
                           text: 'Allowance Record saved successfully',
                           showConfirmButton: false,
                           timer: 2000,
                           
                         }); 

                    }
                }
                );
                
            }
        </script>
        <script>


                            function get_totalamount_s(id) {
                                var severity_amount = $("#severity_amount"+id).val();
                                
                                var total = severity_amount * 3;
                                $("#total_amount_s"+id).val(total);

                                            
                                    }

                             function get_totalamount_v(id) {
                                var vulnerability = $("#vulnerability"+id).val();
                                
                            var total = vulnerability * 3;
                                $("#total_amount_v"+id).val(total);

                                            


                                        }

                function update_allowances(id){
                var project_id = $("#project_id").val();
                var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
                var description_id = $("#description_id").val();
                var allowances_detail_id = $("#allowances_detail_id"+id).val();
                var severity_amount = $("#severity_amountt"+id).val();
                var total_amount_s = $("#total_amount_ss"+id).val();
                var vulnerability = $("#vulnerabilityy"+id).val();
                var total_amount_v = $("#total_amount_vv"+id).val();
                var ss_allowances_borpayableamount = $("#ss_allowances_borpayableamount"+id).val();
                var ss_allowances_ivspayableamount = $("#ss_allowances_ivspayableamount"+id).val();
                var ss_dp_id = $("#ss_dp_idpak"+id).val();
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/update_allowances')?>",
                    data: {
                        severity_amount : severity_amount,
                        total_amount_s :total_amount_s,
                        vulnerability : vulnerability,
                        total_amount_v : total_amount_v,
                        ss_dp_id : ss_dp_id,
                        project_id : project_id,
                        subproject_id : subproject_id,
                        ss_allowances_borpayableamount :ss_allowances_borpayableamount,
                        ss_allowances_ivspayableamount :ss_allowances_ivspayableamount,
                        site_id : site_id,
                        description_id : description_id,
                        allowances_detail_id : allowances_detail_id
                        },
                    datatype: "html",
                    success: function(data) {
                    $("#severity_amountt"+id).val("");
                    $("#total_amount_ss"+id).val("");
                    $("#vulnerabilityy"+id).val("");
                    $("#total_amount_vv"+id).val("");
                    $("#ss_allowances_borpayableamount"+id).val("");
                    $("#ss_allowances_ivspayableamount"+id).val("");
                    $("#allowances_detail_id"+id).val("");
                    window.location.reload();
                    Swal.fire({
                           position: 'bottom',
                           icon: 'success',
                           text: 'Allowances Record updated successfully',
                           showConfirmButton: false,
                           timer: 2000,
                           
                         }); 

                    }
                }
                );
                
            }
        </script>
        <script>


                            function get_totalamount_ss(id) {
                                var severity_amountt = $("#severity_amountt"+id).val();
                                
                                var total = severity_amountt * 3;
                                $("#total_amount_ss"+id).val(total);

                                            
                                    }

                             function get_totalamount_vv(id) {
                                var vulnerabilityy = $("#vulnerabilityy"+id).val();
                                
                            var total = vulnerabilityy * 3;
                                $("#total_amount_vv"+id).val(total);
  }

                
    function insert_payment(id){
    var cheque_no = $("#cheque_no"+id).val();
    var payment_amount = $("#payment_amount"+id).val();
    var bor_type_id = $("#bor_type_id"+id).val();
    var status = $("#status"+id).val();
    var date = $("#date"+id).val();
    var ss_dp_id = $("#ss_dp_id"+id).val();
    var description_id = $("#description_id").val();
    var fileInput = document.getElementById('file'+id);
    var file = fileInput.files[0];
    var formData = new FormData();
    formData.append("cheque_no", cheque_no);
    formData.append("payment_amount", payment_amount);
    formData.append("bor_type_id", bor_type_id);
    formData.append("status", status);
    formData.append("date", date);
    formData.append("file", file);
    formData.append("ss_dp_id", ss_dp_id);
    formData.append("description_id", description_id);
    $.ajax({
        url: '<?php echo base_url('Complaint/insert_payment')?>',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(data) {
          $("#cheque_no"+id).val("");
                    $("#date"+id).val("");
                    $("#status"+id).val("");
                    $("#payment_amount"+id).val("");
                    $("#file"+id).val("");
                    $("#bor_type_id"+id).val("");
                     
        },
        error: function(error) {
            console.log(error);
        }
    });
}

                    function get_descr(id) {
                      var description_id=$("#description_id").val();
                      
                  $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/load_desc')?>",
                    data: {
                        ss_dp_id : id,
                        description_id: description_id
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#load_desc"+id).html(data);
                     
                    }
                }
                );
                                            }
        function dp_list(){
               var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
            $.ajax({
                url: "<?php echo base_url('Complaint/dp_list') ?>",
                method: "POST",
                datatype: "html",
                data: {
                        subproject_id : subproject_id,
                        site_id : site_id
                    },
                success : function(data){
                $("#dp_list").html(data);
                }
            });
         }
          function dp_city_list(city_id){
               var subproject_id = $("#subproject_id").val();
                var site_id = $("#site_id").val();
            $.ajax({
                url: "<?php echo base_url('Complaint/dp_city_list') ?>",
                method: "POST",
                datatype: "html",
                data: {
                        city_id : city_id,
                        subproject_id : subproject_id,
                        site_id : site_id
                    },
                success : function(data){
                $("#dp_city_list").html(data);
                }
            });
         }
                                        </script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>