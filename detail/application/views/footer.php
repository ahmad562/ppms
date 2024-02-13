<script type="text/javascript" src="<?php echo base_url()?>bower_components/jquery/js/jquery.min.js"></script>
<script src="<?php echo base_url()?>bower_components/jquery-ui/js/jquery-ui.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>bower_components/popper.js/js/popper.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>bower_components/bootstrap/js/bootstrap.min.js"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="<?php echo base_url()?>bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
<!-- modernizr js -->
<script type="text/javascript" src="<?php echo base_url()?>bower_components/modernizr/js/modernizr.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>bower_components/modernizr/js/css-scrollbars.js"></script>
<!-- classie js -->
<script type="text/javascript" src="<?php echo base_url()?>bower_components/classie/js/classie.js"></script>
<!-- Rickshow Chart js -->
<script src="<?php echo base_url()?>bower_components/d3/js/d3.js"></script>
<script src="<?php echo base_url()?>bower_components/rickshaw/js/rickshaw.js"></script>
<!-- Morris Chart js -->
<script src="<?php echo base_url()?>bower_components/raphael/js/raphael.min.js"></script>
<script src="<?php echo base_url()?>bower_components/morris.js/js/morris.js"></script>
<!-- Horizontal-Timeline js -->
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/horizontal-timeline/js/main.js"></script>
<!-- amchart js -->
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/amcharts.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/serial.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/light.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/amchart/js/custom-amchart.js"></script>
<!-- data-table js -->
<script src="<?php echo base_url()?>bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="<?php echo base_url()?>assets/pages/data-table/js/jszip.min.js"></script>
    <script src="<?php echo base_url()?>assets/pages/data-table/js/pdfmake.min.js"></script>
    <script src="<?php echo base_url()?>assets/pages/data-table/js/vfs_fonts.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="<?php echo base_url()?>bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
       <!-- Custom js -->
       <script src="<?php echo base_url()?>assets/pages/data-table/js/data-table-custom.js"></script>


<!-- i18next.min.js -->
<script type="text/javascript" src="<?php echo base_url()?>bower_components/i18next/js/i18next.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
<!-- Custom js -->
<script type="text/javascript" src="<?php echo base_url()?>assets/pages/dashboard/custom-dashboard.js"></script>
<script type="text/javascript" src="<?php echo base_url()?>assets/js/script.js"></script>

<!-- pcmenu js -->
<script src="<?php echo base_url()?>assets/js/pcoded.min.js"></script>
<script src="<?php echo base_url()?>assets/js/demo-12.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url()?>assets/js/jquery.mousewheel.min.js"></script>



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
                                        $('#project_id').find('option').not(':first')
                                            .remove();

                                        // Add options
                                        $.each(response, function(index, data) {
                                            $('#project_id').append(
                                                '<option value="' + data[
                                                    'project_id'] + '">' + data[
                                                    'project_name'] + '</option>');
                                        });
                                    }
                                });
                            });
                            ///////////////////////////////get sub projects///////////////

                            $('#project_id').change(function() {
                                var project_id = $(this).val();

                                // AJAX request
                                $.ajax({
                                    url: '<?=base_url()?>Dropdowns/get_sub_projects',
                                    method: 'post',
                                    data: {
                                        project_id: project_id
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                        // Remove options
                                        $('#sub_project_idss').find('option').not(':first')
                                            .remove();

                                        // Add options
                                        $.each(response, function(index, data) {
                                            $('#sub_project_idss').append(
                                                '<option value="' + data[
                                                    'subproject_id'] + '">' + data[
                                                    'subproject_name'] + '</option>');
                                        });
                                    }
                                });
                            });

                            ///////////////////////////////get Site projects///////////////

                            $('#sub_project_idss').change(function() {
                                var sub_project_id = $(this).val();

                                // AJAX request
                                $.ajax({
                                    url: '<?=base_url()?>Dropdowns/get_sites',
                                    method: 'post',
                                    data: {
                                        sub_project_id: sub_project_id
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                        // Remove options
                                        $('#site_id').find('option').not(':first')
                                            .remove();

                                        // Add options
                                        $.each(response, function(index, data) {
                                            $('#site_id').append(
                                                '<option value="' + data[
                                                    'sps_id'] + '">' + data[
                                                    'site_name'] + '</option>');
                                        });
                                    }
                                });
                            });

//////////////////////////////////////////////////////////////////////////////


/////////////////////////////////////////////////////////////////////////////////////////////////
$('#sub_project_idss').change(function() {
                                var sub_project_id = $(this).val();

                                // AJAX request
                                $.ajax({
                                    url: '<?=base_url()?>Dropdowns/get_sub_sub_project',
                                    method: 'post',
                                    data: {
                                        sub_project_id: sub_project_id
                                    },
                                    dataType: 'json',
                                    success: function(response) {

                                        // Remove options
                                        $('#sub_sub_project_id').find('option').not(':first')
                                            .remove();

                                        // Add options
                                        $.each(response, function(index, data) {
                                            $('#sub_sub_project_id').append(
                                                '<option value="' + data[
                                                    'project_area_id'] + '">' + data[
                                                    'project_area_name'] + '</option>');
                                        });
                                    }
                                });
                            });




                        });




                       
                        setTimeout(function() {
                            $('#display_msg').fadeOut('fast');
                          }, 30000); // <-- time in milli

                          </script>
                          
                          <script type="text/javascript">
 
 function display_subprject(id)
 {
     ///alert(idd);
 //var unit_qty_old=$("#unit_qty_old"+id).val();
 
 //a//lert(s_qq);
 //alert(s_rr);
 $.post("<?php echo base_url()?>Dropdowns/display_sub_sub_project_ipc/",{id:id},function(page_response){
 //$.post("view/get_inst.php",{inst:cont},function(rep3)
 ///alert(page_response);
     if(page_response){
         
     $("#display_sub_sub_project_ipc").html(page_response);	
     
     }
      });
     
         }
 </script> 

<script type="text/javascript">
 
 function get_checkbox(id,pid)
 {
     ///alert(id);
     if( $('#item_ids'+id).is(':checked') ){
    
    var item_status=1;
   // alert("Checkbox Is checked n value"+item_status);
}
else{
    
    var item_status=0;
    //alert("Checkbox Is not checked"+item_status);
}
 //exit;
 ///alert(item_status);

 $.post("<?php echo base_url()?>Dropdowns/item_ipc_record_new/",{id:id,item_status:item_status,pid:pid},function(page_response){
 
 ///alert(page_response);
     if(page_response==1){
         
     ///$("#display_sub_sub_project_ipc").html(page_response);	
     //alert(page_response);
     alert("Item Status Changed");
     
     }else if(page_response==0){
        alert("You are Not Authorized to Change This Item");

     }
      });
     
         }
 
 
 function edit_itemName(Itemname,id)
 {
   
 $.post("<?php echo base_url()?>Dropdowns/edit_itemName/",{Itemname:Itemname,id:id},function(page_response){
 
 ///alert(page_response);
     if(page_response==1){
     alert("Record Edited");
     }else if(page_response==0){
     alert("You are Not Authroized to edit ItemName");
     }
      }
      );
     
    }
    function delete_item(id)
 {
   
 $.post("<?php echo base_url()?>Dropdowns/delete_item/",{id:id},function(page_response){
 
 ///alert(page_response);
     if(page_response==1){
     alert("Item Deleted");
     window.location.reload();
     }else if(page_response==0){
     alert("You are Not Authroized to Delete Item");
     }
      }
      );
     
    }


</script>

</body>

</html>
