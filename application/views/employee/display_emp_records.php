<div class="pcoded-content">
<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Display Epmloyees</h4>
                   
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
                                
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    <table id="simpletable" class="table table-striped table-bordered nowrap">
                                        <thead>
                                            <tr>
                                                <th>Emp Name</th>
                                                <th>Designation</th>
                                                <th>Phone</th>
                                                <th>Email</th>
                                                <th>Department</th>
                                                <th>Organization</th>
                                                <th>Edit</th>
                                                <th>Delete</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php 
                                            
                                            $done=$this->db->query("select * from emp as e,city as c,department as d,designation as de,organization as o
                                            where e.department_id=d.department_id
                                            and e.city_id=c.city_id
                                            and e.designation_id=de.designation_id
                                            and e.organization_id=o.organization_id
                                            ")->result();
                                            foreach($done as $done){
                                            
                                            ?>
                                            <tr>
                                                <td><?php echo $done->emp_name;?></td>
                                                <td><?php echo $done->designation_name;?></td>
                                                <td><?php echo $done->phone;?></td>
                                                <td><?php echo $done->email;?></td>
                                                <td><?php echo $done->department_name;?></td>
                                                <td><?php echo $done->organization_name;?></td>

                                                

                                                <td align="center"><a href="<?php echo base_url()?>Emp/edi_emp/<?php echo $done->emp_id;?>" >
                       <img src="<?php echo base_url()?>img/edit.PNG" width="30px" height="30px"/> </button>
                      
                       </td>
                       <td align="center"><a href="<?php echo base_url()?>Emp/delete_emp/<?php echo $done->emp_id;?>" >
                       <img src="<?php echo base_url()?>img/delete.jpg" width="30px" height="30px"/> </button>
                      
                       </td>


                                            </tr>
                                           
                                           <?php }?>
                                           
                                           
                                           
                                           
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
