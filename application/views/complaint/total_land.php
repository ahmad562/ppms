           <style>
                table tr td{
        text-align: center;
    }
     table tr th{
        text-align: center;
    }
           </style>         
                      <div class="container">
                                 <div class="row">
                                    <div class="col-sm-12">
                                    <!-- Zero config.table start -->
                                    <div class="card">
                                        <div class="card-header">
                                            <h4>Total Result Found</h4>
                                        </div>
                                        <div class="card-block">
        <table class="table table-striped table-bordered nowrap">
                                                    <thead>
                                                        <tr>
                                                            <th>Serial No</th>
                                                            <th>Title </th>
                                                            <th>Description</th>
                                                            <th>Detail</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                  <tr>
                                                      <td>1</td>
                                                      <td>GREATER GRAVITY WATER SUPPLY SCHEME MINGORA</td>
                                                      <td>Pipeline</td>
                                                      <td><button onclick="total_land_table()" class="btn btn-primary">Detail</button></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>

                                                </div>
                                        </div>

                                        
                                        <div id="total_land_table">
                                            
                                        </div>
                                        <div id="load_land_detail">
                                            
                                        </div> 
                                            

                                    </div>
                                    <!--/row-->

                                </div>
                                <!-- Table -->
                                
                                 <!-- Table -->
                            </div>
                            

                            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<script>
 
            function total_land_table(){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/total_land_table')?>",
                    data: {
                       
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#total_land_table").html(data);
                       

                    }
                }
                );
            }
            function load_land_detail(){
                $.ajax(
                    {
                    method: "POST",
                    url: "<?php echo base_url('Complaint/load_land_detail')?>",
                    data: {
                       
                    },
                    datatype: "html",
                    success: function(data) {
                        $("#load_land_detail").html(data);
                       

                    }
                }
                );
            }
        </script>