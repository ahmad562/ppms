
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
                          <!--   <div>
                                
                           
                            <table class="table nowrap" style="margin-bottom: -50px; margin-top:-50px ;">
                                            <tr>
                                                <td> -->
                            
                            <div class="container">
                                <div class="row">
                                   
                           <div class="col-sm-3">
                            <a href="#" onClick="larp(1)">
                               <div class="card gradient-1" style="background-color:blue; border-top: white;" >
                                <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;" >LARP </h6>
                                
                            </div>
                            </center>
                        </div>
                            </a>
                            
                            
                           </div>
                            
                           <div class="col-sm-3">
                               <div class="card gradient-1" style="background-color:orange; border-top: white;">
                            <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;">CAPS </h6>
                                
                            </div>
                            </center>
                     
                           </div>
                           </div>
                           <div class="col-sm-3">
                            <div class="card gradient-1" style="background-color:lightcoral; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h6 class="card-title text-white" style="font-weight:bold;">RP </h6>
                               
                                
                            </div>
                            </center>
                           </div>
                       </div>
                           <div class="col-sm-3">
                            <div class="card gradient-1" style="background-color:pink; border-top: white;">
                                <center>
                            <div class="card-body">
                                <h6 class="card-title" style="font-weight:bold;">NS </h6>
                                
                                
                            </div>
                            </center>
                           </div>
                           </div>
                           </div>
                            </div>
                            <div id="larp">
                                
                            </div>
                            <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h5>Larp </h5>
                                            <span></span>

                                        </div>
                                        <div class="card-block">
                                            <div class="dt-responsive table-responsive">
                                                <table id="simpletable"
                                                    class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Category</th>
                                                            <th>Sector</th>
                                                            <th>Project</th>
                                                            <th>Subproject</th>
                                                            <th>Site</th>
                                                            <th>Action</th>
                                                            <th>Edit</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
               error_reporting(0);
               
               $i=1; 
                  $result1 = $this->db->query("SELECT * FROM ppms_ss_document_detail as psdd,ppms_sector as ps,ppms_ss_category as psc ,ppms_project as pp,ppms_subproject as psp,ppms_subproject_site as pss where psdd.sector_id=ps.sector_id AND psdd.project_id=pp.project_id AND psdd.subproject_id=psp.subproject_id AND psdd.site_id=pss.sps_id AND psdd.ss_doc_category=psc.ss_category_id order by psdd.ss_doc_detail_id ASC")->result();
                  foreach($result1 as $item){?>
                 <tr class="gradeX">
        <td><?php echo $i;?></td>
        <td><?php echo $item->ss_category_name;?></td>
        <td><?php echo $item->sector_name;?></td>
        <td><?php echo $item->project_name;?></td>
        <td><?php echo $item->subproject_name;?></td>
        <td><?php echo $item->site_name;?></td>
        <td><a href="<?php echo base_url()?>complaint/ss_detail/<?php echo $item->ss_doc_detail_id;?>" class="btn btn-primary">Detail</a></td>
        <td><a href="<?php echo base_url()?>complaint/edit_ss/<?php echo $item->ss_doc_detail_id;?>">
       <img src="<?php echo base_url()?>img/edit.PNG"
             width="30px" height="30px" /> </a>
                                                            </td>
                                                        </tr>
                                                        <?php
 $i++;
 } ?>
                                                    </tbody>
                                                    <tfoot>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Zero config.table end -->





                                </div>
                            </div>
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
                function larp(category_id){
            $.ajax({
                url: "<?php echo base_url('Complaint/larp') ?>",
                method: "POST",
                datatype: "html",
                data : {
                       category_id : category_id,   
                    },
                success : function(data){
                $("#larp").html(data);
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
      function bor_taxes(){
let table1 = document.getElementById("bor_taxes");
let row_n1 = table1.insertRow(); // creates a new row
let cell_n1 = row_n1.insertCell(); // creates a new cell
let cell_n2 = row_n1.insertCell(); // creates another new cell
let cell_n3 = row_n1.insertCell(); // creates another new cell
let cell_n4 = row_n1.insertCell(); // creates another new cell
let cell_n5 = row_n1.insertCell(); // creates another new cell
let cell_n6 = row_n1.insertCell(); // creates another new cell

cell_n1.innerHTML = '<tr><td>Add/less:<select name="bor_tax_category[]" class="form-control" id="bor_tax_category"><option>Select Category</option><?php $category=$this->db->query("select * from ppms_land_category")->result();
            foreach($category as $category){
            ?>
                        <option value="<?php echo $category->category_id;?>"><?php echo $category->category_name;?></option><?php }?>
                                                        </select></td>'; // sets the content of the first cell
cell_n2.innerHTML = '<td>Tax Name:<input type="text" name="bor_tax_name[]" class="form-control"></td>';
cell_n3.innerHTML = '<td>Value:<input type="text" name="bor_tax_value[]" class="form-control"></td>';
cell_n4.innerHTML = '<td></td>';
cell_n6.innerHTML = '<td><input type="hidden" name="bor_source_category[]" class="form-control" value="BOR"></td>';
cell_n5.innerHTML = '<td align="right-end"><img src="<?php echo base_url('img/minus.png')?>" width="35px" height="35px" onClick="Deletebor()" style="margin-top: 23px;"></td></tr>';

    }
     function ivs_taxes(){


let table1 = document.getElementById("ivs_taxes");
let row_n1 = table1.insertRow(); // creates a new row
let cell_n1 = row_n1.insertCell(); // creates a new cell
let cell_n2 = row_n1.insertCell(); // creates another new cell
let cell_n3 = row_n1.insertCell(); // creates another new cell
let cell_n4 = row_n1.insertCell(); // creates another new cell
let cell_n5 = row_n1.insertCell(); // creates another new cell
let cell_n6 = row_n1.insertCell(); // creates another new cell

cell_n1.innerHTML = '<tr><td>Add/less:<select name="ivs_tax_category[]" class="form-control" id="ivs_tax_category"><option>Select Category</option><?php $category=$this->db->query("select * from ppms_land_category")->result();
            foreach($category as $category){?><option value="<?php echo $category->category_id;?>"><?php echo $category->category_name;?></option><?php }?></select></td>'; // sets the content of the first cell
cell_n2.innerHTML = '<td>Tax Name:<input type="text" name="ivs_tax_name[]" class="form-control"></td>';
cell_n3.innerHTML = '<td>Value:<input type="text" name="ivs_tax_value[]" class="form-control"></td>';
cell_n4.innerHTML = '<td></td>';
cell_n6.innerHTML = '<td><input type="hidden" name="ivs_source_category[]" class="form-control" value="IVS"></td>';
cell_n5.innerHTML = '<td align="right-end"><img src="<?php echo base_url('img/minus.png')?>" width="35px" height="35px" onClick="Deleteivs()" style="margin-top: 23px;"></td></tr>';

    }
function Deleteborivs() {
  document.getElementById("bor_Table").deleteRow(1);

}
function Deletebor() {
  document.getElementById("bor_taxes").deleteRow(2);

}
function Deleteivs() {
  document.getElementById("ivs_taxes").deleteRow(2);

}
</script>
