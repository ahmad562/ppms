<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropdowns extends CI_Controller {
    
    function __construct() {
        parent::__construct();
        $this->load->model('dropdown');
    }
    
    public function index(){
        $data['countries'] = $this->dropdown->getCountryRows();
        $this->load->view('dropdowns/index', $data);
    }
    
    public function getStates(){
        //$states = array();
        $project_id = $this->input->post('project_id');
       /* if($project_id){
            $con['conditions'] = array('project_id'=>$project_id);
            $states = $this->dropdown->getStateRows($con);
        }
        echo json_encode($states);
        */

         // POST data 
    $postData = $this->input->post();
    
    // load model 
    $this->load->model('dropdown');
    
    // get data 
    $data = $this->dropdown->getCityDepartment($postData);
    echo json_encode($data); 
    }
    
    public function get_contractor(){
        $sub_project_idss = $this->input->post('sub_project_idss');
        $postData = $this->input->post();
        // load model 
        $this->load->model('dropdown');
        // get data 
        $data = $this->dropdown->getContractor($postData);
        echo json_encode($data); 
}
public function get_sectors(){
    $outputID = $this->input->post('outputID');
    $postData = $this->input->post();
    // load model 
    $this->load->model('dropdown');
    // get data 
    $data = $this->dropdown->getSectors($postData);
    echo json_encode($data); 
}
public function get_projects(){
    $sectors_id = $this->input->post('sectors_id');
    $postData = $this->input->post();
    // load model 
    $this->load->model('dropdown');
    // get data 
    $data = $this->dropdown->get_projects($postData);
    echo json_encode($data); 
}
/////////////////////////////////////////////////
public function display_log(){
   extract($_POST);
    
    $data["id"]=$id;
    $data["mid"]=$mid;
    $this->load->view('enviroment/display_log',$data);
}

public function display_data(){
    extract($_POST);
     $data["id"]=$id;
     $data["ssid"]=$ssid;
     $this->load->view('ppms/display_ipc_data',$data);
 }
/////////////////////////////////////////////
public function get_sub_projects(){
    $project_id = $this->input->post('project_id');
    $postData = $this->input->post();
    // load model 
    $this->load->model('dropdown');
    // get data 
    $data = $this->dropdown->get_sub_projects($postData);
    echo json_encode($data); 
}

public function get_sites(){
    $sub_project_id = $this->input->post('sub_project_id');
    $postData = $this->input->post();
    // load model 
    $this->load->model('dropdown');
    // get data 
    $data = $this->dropdown->get_sub_projects_sites($postData);
    echo json_encode($data); 
}
public function get_sub_sub_project(){
    $sub_project_id = $this->input->post('sub_project_id');
    $postData = $this->input->post();
    // load model 
    $this->load->model('dropdown');
    // get data 
    $data = $this->dropdown->get_sub_projects_sub($postData);
    echo json_encode($data); 
}

////////////////////////////////////////////////////////////////////////////
public function ipace_paid(){
extract($_POST);
$tdate=date('Y-m-d');
$done1="update ipc_payment set ipc_payment_date='$tdate',status_id=2 where ipac_id=$ipac_id";
$done2=$this->db->query($done1);

    if($done2){
        echo 1;
   }else{
echo 0;
 }



}

public function forward_internal(){
    error_reporting(0);
    $empID=$this->session->userdata('empid');
     $ipac_id = $this->input->post('ipac_id');
     $status_ids = $this->input->post('status_ids');
     $desig = $this->input->post('desig');
    
    $tdate=date('Y-m-d');
    $done1="update ppms_forward_internal set flag_id=0 where ipc_id=$ipac_id";
    $done2=$this->db->query($done1);
    $done1="insert into ppms_forward_internal set flag_id=1,ipc_id=$ipac_id,to_desig_id=$desig,forward_date='$tdate'";
    $done2=$this->db->query($done1);
if($done2){
    echo 1;
}
}

////////////////////////////////////////////////
    /*public function forward_ipace(){
        error_reporting(0);
        $empID=$this->session->userdata('empid');
         $ipac_id = $this->input->post('ipac_id');
          $oid = $this->input->post('oid');
         $status_ids = $this->input->post('status_ids');
        
        $tdate=date('Y-m-d');
        $done1="update ppms_ipac_forward set flag_id=0 where ipac_id=$ipac_id";
        $done2=$this->db->query($done1);
        //echo $this->db->last_query();

        $orgiii="select city_id,order_by from organization where organization_id=$oid";
        $orgiii1=$this->db->query($orgiii)->row();
        //echo $this->db->last_query();


         $ordereee=$orgiii1->order_by;
        //echo "<br>";
         $cityID=$orgiii1->city_id;
        ///exit;

         
if($ordereee==1){
       $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
       organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    echo $this->db->last_query();
    
    $nextorder=$ordereee+1;
    /////////////////////////////////////////////
    $nextOrg="select organization_id from organization where order_by=$nextorder and city_id=$cityID";
    $nextOrgg=$this->db->query($nextOrg)->row();
    //echo $this->db->last_query();
    $nextOrggg=$nextOrgg->organization_id;
   
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set flag_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
		//echo $this->db->last_query();
        // exit;

        $doneeeepayment="insert into ipc_payment set status_id=0,ipac_id=$ipac_id";
        $doneeeepayment1=$this->db->query($doneeeepayment);	


}else if($ordereee==2){

    $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
    organization_id=$oid,flag_id=0,user_id=$empID";
 $done3=$this->db->query($doneeee);
 ///echo $this->db->last_query();
 
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,flag_id=1,user_id=$empID";
 $done4=$this->db->query($doneeee4);	
      ///$done=$this->db->last_query();

}else if($ordereee==3){

    $preorder=$ordereee-1;
    ///////////////////////////////////
    echo $subProject="select city_id from ppms_ipac as ipp,ppms_subproject as pps where ipp.ipac_id=$ipac_id
    and ipp.subproject_id=pps.subproject_id";
    $subProjects=$this->db->query($subProject)->row();
    /////////////////////////////////////////////
    echo $preOrg="select organization_id from organization where order_by=$preorder and city_id=$subProjects->city_id";
    $preOrg=$this->db->query($preOrg)->row();
    //echo $this->db->last_query();
    $pOrggg=$preOrg->organization_id;

    echo $doneeeeP="select * from ppms_ipac_forward where ipac_id=$ipac_id and
    organization_id=$pOrggg";

    $preOrg=$this->db->query($doneeeeP)->row();
    //exit;
    if($preOrg){
        $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
        organization_id=3,flag_id=0,user_id=$empID";
     $done3=$this->db->query($doneeee);
     ///echo $this->db->last_query();
     
    
    $doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=4,flag_id=1,user_id=$empID";
     $done4=$this->db->query($doneeee4); 
    }else{

        
//////////////////////////////////////////////////////////////////////////

$doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
organization_id=$oid,flag_id=0,user_id=$empID";
$done3=$this->db->query($doneeee);
///echo $this->db->last_query();
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$pOrggg,flag_id=1,user_id=$empID";
$done4=$this->db->query($doneeee4);

     


    }

   	
      ///$done=$this->db->last_query();
}else if($ordereee==4){

    $doneeee="insert into ppms_ipac_forward set status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    ///echo $this->db->last_query();
    
    //$nextOID=$oid+1;
 $doneeee4="insert into ppms_ipac_forward set status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,flag_id=1,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
		/// $done=$this->db->last_query();

        $doneeeepaymentU="update ipc_payment set status_id=1,ipc_payment_date='$tdate' where ipac_id=$ipac_id";
        $doneeeepaymentU=$this->db->query($doneeeepaymentU);


}



         if($done4){
echo 1;

         }else{
            echo 0;
         }
      }
      */
      
       public function forward_ipace(){
        error_reporting(0);
        $empID=$this->session->userdata('empid');
         $ipac_id = $this->input->post('ipac_id');
          $oid = $this->input->post('oid');
         $status_ids = $this->input->post('status_ids');
        
        $tdate=date('Y-m-d');
        $done1="update ppms_ipac_forward set flag_id=0 where ipac_id=$ipac_id";
        $done2=$this->db->query($done1);
        //echo $this->db->last_query();

        $orgiii="select city_id,order_by from organization where organization_id=$oid";
        $orgiii1=$this->db->query($orgiii)->row();
        //echo $this->db->last_query();


         $ordereee=$orgiii1->order_by;
        //echo "<br>";
         $cityID=$orgiii1->city_id;
        ///exit;

         
if($ordereee==1){
       $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
       organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    echo $this->db->last_query();
    
    $nextorder=$ordereee+1;
    /////////////////////////////////////////////
    $nextOrg="select organization_id from organization where order_by=$nextorder and city_id=$cityID";
    $nextOrgg=$this->db->query($nextOrg)->row();
    //echo $this->db->last_query();
    $nextOrggg=$nextOrgg->organization_id;
   
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set flag_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=2,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
		//echo $this->db->last_query();
        // exit;

        $doneeeepayment="insert into ipc_payment set status_id=0,ipac_id=$ipac_id";
        $doneeeepayment1=$this->db->query($doneeeepayment);	


}else if($ordereee==2){

    $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
    organization_id=$oid,flag_id=0,user_id=$empID";
 $done3=$this->db->query($doneeee);
 ///echo $this->db->last_query();
 
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,flag_id=1,user_id=$empID";
 $done4=$this->db->query($doneeee4);	
      ///$done=$this->db->last_query();

}else if($ordereee==3){

   /* $preorder=$ordereee-1;
    ///////////////////////////////////
    echo $subProject="select city_id from ppms_ipac as ipp,ppms_subproject as pps where ipp.ipac_id=$ipac_id
    and ipp.subproject_id=pps.subproject_id";
    $subProjects=$this->db->query($subProject)->row();
    /////////////////////////////////////////////
    echo $preOrg="select organization_id from organization where order_by=$preorder and city_id=$subProjects->city_id";
    $preOrg=$this->db->query($preOrg)->row();
    //echo $this->db->last_query();
    $pOrggg=$preOrg->organization_id;

    echo $doneeeeP="select * from ppms_ipac_forward where ipac_id=$ipac_id and
    organization_id=$pOrggg";

    $preOrg=$this->db->query($doneeeeP)->row();
    //exit;
    if($preOrg){
        $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
        organization_id=3,flag_id=0,user_id=$empID";
     $done3=$this->db->query($doneeee);
     ///echo $this->db->last_query();
     
    
    $doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=4,flag_id=1,user_id=$empID";
     $done4=$this->db->query($doneeee4); 
    }else{
*/
        
////////////////////////////ipc move from pmu to ciu anf the pmu//////////////////////////////////////////////

/*$doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
organization_id=$oid,flag_id=0,user_id=$empID";
$done3=$this->db->query($doneeee);
///echo $this->db->last_query();
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$pOrggg,flag_id=1,user_id=$empID";
$done4=$this->db->query($doneeee4);
*/

       $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
        organization_id=3,flag_id=0,user_id=$empID";
     $done3=$this->db->query($doneeee);
     ///echo $this->db->last_query();
     
    
    $doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=4,flag_id=1,user_id=$empID";
     $done4=$this->db->query($doneeee4); 

     


    

   	
      ///$done=$this->db->last_query();
}else if($ordereee==4){

    $doneeee="insert into ppms_ipac_forward set status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    ///echo $this->db->last_query();
    
    //$nextOID=$oid+1;
 $doneeee4="insert into ppms_ipac_forward set status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,flag_id=1,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
		/// $done=$this->db->last_query();

        $doneeeepaymentU="update ipc_payment set status_id=1,ipc_payment_date='$tdate' where ipac_id=$ipac_id";
        $doneeeepaymentU=$this->db->query($doneeeepaymentU);


}



         if($done4){
echo 1;

         }else{
            echo 0;
         }
      }
////////////////////////////////////////////////////
public function forward_es_file_status(){
    error_reporting(0);
    $empID=$this->session->userdata('empid');
    $sid = $this->input->post('sid');
    $rid = $this->input->post('rid');
    $mid = $this->input->post('mid');
    
    $tdate=date('Y-m-d');
    $done1="update ppms_es_forward set es_flag=0 where id=$rid and es_module_id=$mid";
    $done2=$this->db->query($done1);
    ///////////////////////////////////////////////////////////////////

    $doneeee4="insert into ppms_es_forward set status_id=$sid,id=$rid,es_forwarded_date='$tdate',
organization_id=4,es_flag=1,es_userid=$empID,es_module_id=$mid";
$done4=$this->db->query($doneeee4);	
////////////////////////////////////////////////////////////////////
//echo $this->db->last_query();

if($done4){
if($sid==4){
echo 1;    
}

if($sid==4){
    echo 1;    
    }
    if($sid==5){
        echo 2;    
        }

}

}
public function forward_es_file(){
    error_reporting(0);
    $empID=$this->session->userdata('empid');
    $id = $this->input->post('id');
    $oid = $this->input->post('oid');
    $mid = $this->input->post('mid');
    
    $tdate=date('Y-m-d');
    $done1="update ppms_es_forward set es_flag=0 where id=$id and es_module_id=$mid";
    $done2=$this->db->query($done1);
    //echo $this->db->last_query();

    $orgiii="select city_id,order_by from organization where organization_id=$oid";
    $orgiii1=$this->db->query($orgiii)->row();
    //echo $this->db->last_query();

     $ordereee=$orgiii1->order_by;
    //echo "<br>";
     $cityID=$orgiii1->city_id;
    ///exit;

     
if($ordereee==1){
    $doneeee="insert into ppms_es_file set es_flag=1,id=$id,es_date='$tdate',
    organization_id=$oid,es_userid=$empID,es_module_id=$mid";
    $done1=$this->db->query($doneeee);
//////////////////////////////////////////////////////////////////////////////////////////////

   $doneeee="insert into ppms_es_forward set status_id=1,id=$id,es_forwarded_date='$tdate',
   organization_id=$oid,es_flag=0,es_userid=$empID,es_module_id=$mid";
$done3=$this->db->query($doneeee);
echo $this->db->last_query();

$nextorder=$ordereee+1;
/////////////////////////////////////////////
$nextOrg="select organization_id from organization where order_by=$nextorder and city_id=$cityID";
$nextOrgg=$this->db->query($nextOrg)->row();
//echo $this->db->last_query();
$nextOrggg=$nextOrgg->organization_id;

///////////////////////////////////////////
$doneeee4="insert into ppms_es_forward set  status_id=2,id=$id,es_forwarded_date='$tdate',
organization_id=$nextOrggg,es_flag=1,es_userid=$empID,es_module_id=$mid";
$done4=$this->db->query($doneeee4);	
    //echo $this->db->last_query();
    // exit;

}else if($ordereee==2){

$doneeee="insert into ppms_es_forward set status_id=1,id=$id,es_forwarded_date='$tdate',
organization_id=$oid,es_flag=0,es_userid=$empID,es_module_id=$mid";
$done3=$this->db->query($doneeee);
///echo $this->db->last_query();

///////////////////////////////////////////
$doneeee4="insert into ppms_es_forward set status_id=1,id=$id,es_forwarded_date='$tdate',
organization_id=3,es_flag=1,es_userid=$empID,es_module_id=$mid";
$done4=$this->db->query($doneeee4);	
  ///$done=$this->db->last_query();


}else if($ordereee==3){

$doneeee="insert into ppms_es_forward set status_id=1,id=$id,es_forwarded_date='$tdate',
organization_id=$oid,es_flag=0,es_userid=$empID,es_module_id=$mid";
$done3=$this->db->query($doneeee);
///echo $this->db->last_query();

///////////////////////////////////////////
$doneeee4="insert into ppms_es_forward set status_id=2,id=$id,es_forwarded_date='$tdate',
organization_id=4,es_flag=1,es_userid=$empID,es_module_id=$mid";
$done4=$this->db->query($doneeee4);	
  ///$done=$this->db->last_query();
}else if($ordereee==4){

$doneeee="insert into ppms_es_forward set status_id=1,id=$id,es_forwarded_date='$tdate',
organization_id=$oid,es_flag=0,es_userid=$empID,es_module_id=$mid";
$done3=$this->db->query($doneeee);
///echo $this->db->last_query();

//$nextOID=$oid+1;
$doneeee4="insert into ppms_es_forward set status_id=2,id=$id,es_forwarded_date='$tdate',
organization_id=3,es_flag=3,es_userid=$empID,es_module_id=$mid";
$done4=$this->db->query($doneeee4);	
    /// $done=$this->db->last_query();


}



     if($done4){
echo 1;

     }else{
        echo 0;
     }
  }
////////////////////////////////////////////////////

public function display_sub_sub_project_ipc(){
    extract($_POST);
    $tdate=date('Y-m-d');
    $done1="select detail from ppms_subproject where subproject_id=$id";
    $done2=$this->db->query($done1)->row();
    if($done2){
    echo $done2->detail; 
    } 
    
    
    
    }

    public function item_ipc_record_new(){
        extract($_POST);
        $groupID=$this->session->userdata('groupid');

        if($groupID==1){

        ///$done=$this->db->query("select * from ipc_items where item_id=$id")->row();
                    //if($done){
        if($item_status==1){
            $run = $this->db->query( "update items set ipc_id=$pid,status_id=1 where item_id=$id");
        }if($item_status==0){
            $run = $this->db->query( "update items set ipc_id=$pid,status_id=0 where item_id=$id");
        }
                    
       // echo $this->db->last_query();
       if($run){
        echo 1;
       }
         }else{
            if($item_status==1){
                $run = $this->db->query( "update items set ipc_id=$pid,status_id=1 where item_id=$id");
                if($run){
                    echo 1;
                   }
            }else{  
        echo 0;
            }
    }

}


public function edit_itemName(){
    extract($_POST);
    $groupID=$this->session->userdata('groupid');

    if($groupID==1){

    
    
        $run = $this->db->query( "update items set item_name='$Itemname' where item_id=$id");
   
                
   // echo $this->db->last_query();
   if($run){
    echo 1;
   }
     }else{
    echo 0;
}

}


public function delete_item(){
    extract($_POST);
    $groupID=$this->session->userdata('groupid');

    if($groupID==1){

    
    
        $run = $this->db->query( "delete from items where item_id=$id");
   
                
   // echo $this->db->last_query();
   if($run){
    echo 1;
   }
     }else{
    echo 0;
}

}


}