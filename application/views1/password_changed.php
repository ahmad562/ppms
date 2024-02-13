<div class="pcoded-content">
    <div class="pcoded-inner-content">

        <!-- Main-body start -->
        <div class="main-body">
            <div class="page-wrapper">
                <!-- Page-header start -->
                <div class="page-header">
                    <div class="page-header-title">
                        <h4>Password Change</h4>

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
                                    <h5>Password Change</h5>
                                    <span></span>

                                </div>
                                <div class="card-block">
                                    <div class="dt-responsive table-responsive">
                            <?php 
                     $UserID=$this->session->userdata('empid');
					 $a="SELECT * FROM `emp` where emp_id=$UserID";
	                 $done=$this->db->query($a)->row();?>
                                <div class="table-responsive">
                                
                                <form method="post" action="<?php echo base_url('Welcome/update_password')?>" onSubmit="return validate();">
		  
          <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="true" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-show-export="true" data-click-to-select="true" data-toolbar="#toolbar">
             <tr>
               <td>Name</td><td>
               <input type="hidden" name="uidsss" id="uid" value="<?php echo $done->emp_id;?>">
               <input type="text" value="<?php echo $done->emp_name;?>" name="user_name" class="form-control"></td>
               <td>Email</td><td><?php echo $done->email;?></td>
               </tr>
              
                 
                 <tr>
                 <td>Enter New Password</td>
                 <td>
                 <input type="password" placeholder="" maxlength="100"  value="" name="password" id="password" class="form-control"></td>
                 </td>
                 <td>Confirm Password</td>
                 <td>
                 <input type="password" placeholder="" maxlength="100"  value="" name="cpassword" id="cpassword" class="form-control"></td>
                 </td>
                 </tr>
                 <tr><td>
         <input type="submit" id="save" name="save" class="btn btn-danger" value="Change Password">
                 
                 </td></tr>
                 
               
             
             </form>
 
           </table>




                                </div>



                            </div>
                            <!--/span-->
                            
      </div>
    </div>
	
	
                            </div>
                            <!--/row-->

                        </div>
                    </div>

                </div>


                <script>
        function validate(){

            var a = document.getElementById("password").value;
            var b = document.getElementById("cpassword").value;
            if (a!=b) {
               alert("Passwords do no match");
               return false;
            }
        }
     </script>