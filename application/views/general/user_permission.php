<div class="pcoded-content">
<div class="pcoded-inner-content">

    <!-- Main-body start -->
    <div class="main-body">
        <div class="page-wrapper">
            <!-- Page-header start -->
            <div class="page-header">
                <div class="page-header-title">
                    <h4>Display Groups</h4>
                  
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
                                <h5>Groups Permissions</h5>
                                <span></span>
                                <div class="card-header-right">
                                    <i class="icofont icofont-rounded-down"></i>
                                    <i class="icofont icofont-refresh"></i>
                                    <i class="icofont icofont-close-circled"></i>
                                </div>
                            </div>
                            <div class="card-block">
                                <div class="dt-responsive table-responsive">
                                    
                                <table width="100%" border="1">
            <tr>
              <td><b>Designation:</b></td>
              <td><select name="group" id="group" class="form-control " placeholder="Enter Category" onChange="get_sub_category(this.value)" tabindex="9">
                  <?php 
                  $groups=$this->db->query("select * from designation")->result();
                  foreach($groups as $groups){
       ?>
                  <option value="<?php echo $groups->designation_id; ?>"> <?php echo $groups->designation_name; ?></option>
               <?php }?>
                </select></td>
            </tr>
          </table>
          <?php 
		  $x=1;
		  $parent=$this->db->query("SELECT * FROM menu_admin WHERE parent_id=0  order by sort_order asc")->result();
         foreach($parent as $parent){?>
          <?php 
				$grpID=$this->db->query("SELECT * FROM user_permission WHERE menu_id=$parent->menu_id and group_id=$PermID and flag_id=1")->row();?>
          <table width="100%" border="1">
            <tbody>
              <tr style="background-color:#000000; color:#fff">
                <td width="140"><?php echo $parent->menu_name?></td>
                <td width="141" align="center"><input type="checkbox" id="Main<?php echo $x;?>" onclick="get_main(<?php echo $x;?>)" onChange="insert_main_menu(<?php echo $x;?>,<?php echo $parent->menu_id?>)" <?php if($grpID){ echo "checked";}else{ echo "";}?>>
                  <input type="hidden" id="ckval_<?php echo $x;?>" value="<?php if($grpID){ echo 1;}else{ echo 0;}?>"></td>
              
                <td width="243" align="center">View </td>
               
              </tr>
            </tbody>
          </table>
          <?php $child=$this->db->query("SELECT * FROM menu_admin 
	          WHERE parent_id!=0 and parent_id=$parent->menu_id order by sort_order asc")->result();
         $i=1;
		 foreach($child as $child){?>
          <?php 
				$grpID1=$this->db->query("SELECT * FROM permission WHERE menu_id=$child->menu_id and group_id=$PermID and flag_id=1")->row();?>
          <table width="100%" border="1">
            <tr>
              <td width="30"><?php echo $i;?></td>
              <td width="196"><?php echo $child->menu_name?></td>
              <td width="196" align="center">
              
              <input type="checkbox"  id="insert1<?php echo $x;?><?php echo $i?>" onclick="get_sub_insert(<?php echo $x;?>,<?php echo $i;?>)" 
			  <?php if($grpID1->flag_id==1){ echo "checked";}else{ echo "";}?> onChange="insert_sub_menu(<?php echo $x;?>,<?php echo $i;?>,<?php echo $child->menu_id?>,<?php echo 2;?>)">
                <input type="hidden" id="sub_insert1<?php echo $x;?><?php echo $i;?>" value="<?php if($grpID1->flag_id==1){ echo 1;}else{ echo 0;}?>"></td>
                
             <?php /*?> <td width="196" align="center"><input type="checkbox"  id="view2<?php echo $x;?><?php echo $i?>" onclick="get_sub_view(<?php echo $x;?>,<?php echo $i;?>)" <?php if($grpID1->PER_SELECT==1){ echo "checked";}else{ echo "";}?> onChange="insert_sub_menu(<?php echo $x;?>,<?php echo $i;?>,<?php echo $child->MENU_ID?>,<?php echo 1;?>)">
                <input type="hidden" id="sub_view2<?php echo $x;?><?php echo $i;?>" value="<?php if($grpID1->PER_SELECT==1){ echo 1;}else{ echo 0;}?>"></td>
                
              <td width="196" align="center"><input type="checkbox"  id="update3<?php echo $x;?><?php echo $i?>" onclick="get_sub_update(<?php echo $x;?>,<?php echo $i;?>)" <?php if($grpID1->PER_UPDATE==1){ echo "checked";}else{ echo "";}?> onChange="insert_sub_menu(<?php echo $x;?>,<?php echo $i;?>,<?php echo $child->MENU_ID?>,<?php echo 3;?>)">
                <input type="hidden" id="sub_update3<?php echo $x;?><?php echo $i;?>" value="<?php if($grpID1->PER_UPDATE==1){ echo 1;}else{ echo 0;}?>"></td>
                
              <td width="196" align="center"><input type="checkbox"  id="delete4<?php echo $x;?><?php echo $i?>" onclick="get_sub_delete(<?php echo $x;?>,<?php echo $i;?>)" <?php if($grpID1->PER_DELETE==1){ echo "checked";}else{ echo "";}?> onChange="insert_sub_menu(<?php echo $x;?>,<?php echo $i;?>,<?php echo $child->MENU_ID?>,<?php echo 4;?>)">
                <input type="hidden" id="sub_delete4<?php echo $x;?><?php echo $i;?>" value="<?php if($grpID1->PER_DELETE==1){ echo 1;}else{ echo 0;}?>"></td><?php */?>
            </tr>
          </table>
          <?php 
	  $i++;
	  }?>
          <?php 
		  $x++;
		  }?>






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
<script>

function get_sub_delete(main,cont1){
	
var cont=main+""+cont1;
			///alert(cont);
			if (document.getElementById("delete4"+cont).checked) {
	             
	              $("#sub_delete4" + cont).val(1);
	              $("#delete4" + cont).prop('checked', true);
	        } else {
	        	
	        	$("#sub_delete4" + cont).val(0);
	        	$("#delete4" + cont).removeAttr('checked');
	        }
	}	
	
	
	

////////////////////////////////////////////////////
function get_sub_update(main,cont1) {
	
			var cont=main+""+cont1;
			///alert(cont);
			if (document.getElementById("update3"+cont).checked) {
	             
	              $("#sub_update3" + cont).val(1);
	              $("#update3" + cont).prop('checked', true);
	        } else {
	        	
	        	$("#sub_update3" + cont).val(0);
	        	$("#update3" + cont).removeAttr('checked');
	        }
	}


//////////////////////////////////////////////////////////////////////
function get_sub_view(main,cont1) {
	
			var cont=main+""+cont1;
			///alert(cont);
			if (document.getElementById("view2"+cont).checked) {
	             
	              $("#sub_view2" + cont).val(1);
	              $("#view2" + cont).prop('checked', true);
	        } else {
	        	
	        	$("#sub_view2" + cont).val(0);
	        	$("#view2" + cont).removeAttr('checked');
	        }
	}

////////////////////////////////////////////////////////////////////////////////
	function get_sub_insert(main,cont1) {
	//alert(main);
	//alert(cont1);
			///$("#myLabel_" + cont).html('');
			var cont=main+""+cont1;
			///alert(cont);
			if (document.getElementById("insert1"+cont).checked) {
	              //$("#myLabel_" + cont).html("Assigned");
	              //$("#myLabel_" + cont).css("color", "green");
	              $("#sub_insert1" + cont).val(1);
	              $("#insert1" + cont).prop('checked', true);
	        } else {
	        	//$("#myLabel_" + cont).html("Not Assiged");
	        	//$("#myLabel_" + cont).css("color","red");
	        	$("#sub_insert1" + cont).val(0);
	        	$("#insert1" + cont).removeAttr('checked');
	        }
	}
	///////////////////////////////////////////////////////////////////////
	function get_main(cont) {
		//var i;
		//for(i=1; i<=3; i++) {
			//alert(cont);
			//exit;
			$("#myLabel_" + cont).html('');
			if (document.getElementById("Main"+cont).checked) {
	              //$("#myLabel_" + cont).html("Assigned");
	              //$("#myLabel_" + cont).css("color", "green");
	              $("#ckval_" + cont).val(1);
	              $("#Main" + cont).prop('checked', true);
	        } else {
	        	//$("#myLabel_" + cont).html("Not Assiged");
	        	//$("#myLabel_" + cont).css("color","red");
	        	$("#ckval_" + cont).val(0);
	        	$("#Main" + cont).removeAttr('checked');
	        }
		//}
		
	}

		
	
</script> 
</script> 
<script>
function insert_sub_menu(val1,val2,menuID,fieldeee){
	var cont=val1+""+val2;
        var grp=$("#group").val();
		var cont1=$("#sub_insert1"+cont).val();
		////alert(cont1);
        $.post("<?php echo base_url()?>Welcome/insert_sub_menu/", {menuID:menuID,grp:grp,cont1:cont1,fieldeee:fieldeee}, function (result) {
            //alert(result);
            //exit;
			if(result==1){
			alert("Role Assigned");	
				
			}
         
        });	
	
	
	
}



</script> 
<script type="text/javascript">
    function insert_main_menu(cont,menuID) {
        var grp=$("#group").val();
		var cont1=$("#ckval_"+cont).val();
		///alert(cont1);
        $.post("<?php echo base_url()?>Welcome/insert_main_menu/", {CONTID: cont,menuID:menuID,grp:grp,cont1:cont1}, function (result) {
            //alert(result);
            //exit;
			if(result==1){
			alert("Role Assigned");	
				
			}
         
        });
    }

</script> 
