
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
                                <h4>Safegaurd Report</h4>
                            </div>
                            <div class="page-header-breadcrumb">

                            </div>
                        </div>
                        <!-- Page-header end -->
                        <!-- Page-body start -->
                        <div class="page-body" >
                          <!--   <div>
                                
                           
                            <table class="table nowrap" style="margin-bottom: -50px; margin-top:-50px ;">
                                            <tr>
                                                <td> -->
                            
                            <div class="container">
                                <div class="row">
                                   
                           <div class="col-sm-4">
                            <a href="#" onClick="larp_detaill(1)">
                               <div class="card gradient-1" style="background-color:lime; border-top: white;" >
                                <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;" >LARP </h6>
                                
                            </div>
                            </center>
                        </div>
                            </a>
                            
                            
                           </div>
                            
                           <div class="col-sm-4">
                               <div class="card gradient-1" style="background-color:#336699; border-top: white;">
                            <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;">CAPS </h6>
                                
                            </div>
                            </center>
                     
                           </div>
                           </div>
                           <div class="col-sm-4">
                            <div class="card gradient-1" style="background-color:lightcoral; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;">RP </h6>
                               
                                
                            </div>
                            </center>
                           </div>
                       </div>
                        
                           </div>
                            </div>
                            <div id="larp_detail">
                                
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


    <script>
        function add_new_row(){


let table = document.getElementById("myTable");
let row = table.insertRow(); // creates a new row
let cell1 = row.insertCell(); // creates a new cell
let cell2 = row.insertCell(); // creates another new cell
let cell3 = row.insertCell(); // creates another new cell
let cell4 = row.insertCell(); // creates another new cell
let cell5 = row.insertCell(); // creates another new cell
cell1.innerHTML = '<td>Name:</td><td><input type="text" name="name[]" class="form-control"></td>'; // sets the content of the first cell
cell2.innerHTML = '<td>Date:</td><td><input type="date" name="date[]" class="form-control"></td>'; // sets the content of the second cell
cell3.innerHTML = '<td>file:</td><td><input type="file" name="files[]" class="form-control"></td>'; // sets the content of the third cell
cell4.innerHTML = '<td>Remarks:</td><td><input type="text" name="remarks[]" class="form-control"></td>'; // sets the content of the fourth cell
cell5.innerHTML = '<td><img src="<?php echo base_url('img/minus.png')?>" width="35px" height="35px" onClick="myDeleteFunction()" style="margin-top: 20px;"></td>';
    }</script>
    
            <script>
                function larp_detaill(category_id){
            $.ajax({
                url: "<?php echo base_url('Complaint/larp_detaill') ?>",
                method: "POST",
                datatype: "html",
                data : {
                       category_id : category_id,   
                    },
                success : function(data){
                $("#larp_detail").html(data);
                }
            });
         }
            </script>

            <script>

function myDeleteFunction() {
  document.getElementById("myTable").deleteRow(1);
}
</script>

<script>
    function add_row(){


let table1 = document.getElementById("bor_Table");
let row_n1 = table1.insertRow(); // creates a new row
let cell_n1 = row_n1.insertCell(); // creates a new cell
let cell_n2 = row_n1.insertCell(); // creates another new cell
let cell_n3 = row_n1.insertCell(); // creates another new cell
let cell_n4 = row_n1.insertCell(); // creates another new cell
let cell_n5 = row_n1.insertCell(); // creates another new cell


cell_n1.innerHTML = '<tr><td>Description:<input type="text" name="add_land_record_description[]" class="form-control"></td>'; // sets the content of the first cell
cell_n2.innerHTML = '<td>Total Area(Marla):<input type="text" name="d_total_area[]" class="form-control"></td>';
cell_n3.innerHTML = '<td>Total Land Cost:<input type="text" name="d_total_land_cost[]" class="form-control"></td>';
cell_n4.innerHTML = '<td>Total No of Dp:<input type="text" name="total_no_of_dp[]" class="form-control"></td>';
cell_n5.innerHTML = '<td><img src="<?php echo base_url('img/minus.png')?>" width="35px" height="35px" onClick="Deleteborivs()" style="margin-top: 23px;"></td>';


    }
function Deleteborivs() {
  document.getElementById("bor_Table").deleteRow(1);

}

</script>
