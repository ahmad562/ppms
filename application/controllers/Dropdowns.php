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

public function display_sub_project_city_wise(){
    $city_id = $this->input->post('city_id');
    $postData = $this->input->post();
    // load model 
    $this->load->model('dropdown');
    // get data 
    $data = $this->dropdown->get_sub_project_city_wise($postData);
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
//////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$doneROW="select * from emp where designation_id=$desig and organization_id=3";
$doneROW1=$this->db->query($doneROW)->row();
////////////////////////////////////////////////////////////////////////

$doneeee4="insert into ppms_ipac_forward set designation_id=$desig,flag_id=0,status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,user_id=$doneROW1->emp_id,file_type_id=0";
    $done4=$this->db->query($doneeee4);

$doneeee4="insert into ppms_ipac_forward set designation_id=$desig,flag_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,user_id=$doneROW1->emp_id,file_type_id=0";
    $done4=$this->db->query($doneeee4);	

/////////////////////////////////////////////////////////////////////////////////////////////////////

if($done2){
    echo 1;
}
}
public function get_ipc_already(){
extract($_POST);
    $query1 = "SELECT * FROM ppms_ipac WHERE certificate_type = '$certificate_type' and subproject_id=$sub_project_idss"; 
    $result = $this->db->query($query1)->result(); 
     
    
   
        echo '<option value="">Select IPC</option>'; 
      foreach($result as $row){
            echo '<option value="'.$row->ipc_no.'">'.$row->ipc_no.'</option>'; 
        } 
    }
    public function get_ipc_already_no(){
        extract($_POST);
            $query1 = "SELECT * FROM ppms_ipac WHERE subproject_id=$sub_project_idss order by ipac_id desc"; 
            $result = $this->db->query($query1)->result(); 
            foreach($result as $row){
                    echo '<option value="'.$row->ipc_no.'">'.$row->ipc_no.'</option>'; 
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
    //echo $this->db->last_query();
    
    $nextorder=$ordereee+1;
    /////////////////////////////////////////////
    $nextOrg="select organization_id from organization where order_by=$nextorder and city_id=$cityID";
    $nextOrgg=$this->db->query($nextOrg)->row();
    //echo $this->db->last_query();
    $nextOrggg=$nextOrgg->organization_id;
   
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set flag_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$nextOrggg,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
		//echo $this->db->last_query();
        // exit;

        $doneeeepayment="insert into ipc_payment set status_id=0,ipac_id=$ipac_id";
        $doneeeepayment1=$this->db->query($doneeeepayment);	
        
        //////////////////////////////sms for //////////////////////////////
 /////////////////////sms integration///////////////////////////
 $SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();

 $SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();

 $subProjectName=$SubprojectsIDs->subproject_name;

 $projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
 $projectName=$projectsID->project_name;

 $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();


 $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();

 $this->db->from('hr_ipc_sms');
 $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
 $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
 $this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
 $this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
 $sms=$this->db->get()->result();
 foreach($sms as $sms){

 $mobileNumber = $sms->phone_no;
 $email_id = $sms->hr_email_id;

 // Remove leading zeros
 $mobileNumber = ltrim($mobileNumber, '0');
 
 // Output the modified mobile number
  $mobileNumber1="92".$mobileNumber;
 //echo 92.$mobileNumber;
                 $management_mobile_numbers = "";
 
                 $date = date('m/d/Y h:i:s a', time());
                 //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
                 $date = date('m/d/Y h:i:s a', time());
$complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To CIU" ;
						
 
 
                 ini_set("soap.wsdl_cache_enabled", 0);
                 $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
                 $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
                  
                 $resultBulkSMS = $client->BulkSmsv2(
                                 array('objBulkSms' => 
                                                 array(	'LoginId'=>  '923159749585', //here type your account name
                                                         'LoginPassword'=>'Hen@9598', //here type your password
                                                         'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                         'Message'=> $complaint_user_msg,
                                                         'UniCode'=>'0',
                                                         'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                         'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                         'ShortCodePrefered'=>'n',
                                                         'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                     )));
   ////////////////////////////////////////////////////////////////////////////
   
   $subject = "IPC Forward to CIU";

$message = "IPC Forward So please Check it and Take Necessary Action.";

// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// More headers
$headers .= 'From: <mis@kpcip.pk>' . "\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($email_id,$subject,$message,$headers);


   ////////////////////////////////////////////////////////////////////
   
                                                  }





        /////////////////////////////////////////////////////////


}else if($ordereee==2){

    $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
    organization_id=$oid,flag_id=0,user_id=$empID";
 $done3=$this->db->query($doneeee);
 ///echo $this->db->last_query();
 
///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,flag_id=1,user_id=$empID";
 $done4=$this->db->query($doneeee4);	
      ///$done=$this->db->last_query();

//////////////////////////////////////////////////////////////////////////////////

/////////////////////sms integration///////////////////////////
$SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();

 $SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();

 $subProjectName=$SubprojectsIDs->subproject_name;

 $projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
 $projectName=$projectsID->project_name;

 $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();


 $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();

 $this->db->from('hr_ipc_sms');
 $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
 $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
 $this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
 $this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
 $sms=$this->db->get()->result();
 foreach($sms as $sms){

 $mobileNumber = $sms->phone_no;

 // Remove leading zeros
 $mobileNumber = ltrim($mobileNumber, '0');
 
 // Output the modified mobile number
  $mobileNumber1="92".$mobileNumber;
 //echo 92.$mobileNumber;
                 $management_mobile_numbers = "";
 
                 $date = date('m/d/Y h:i:s a', time());
                 //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
                 $date = date('m/d/Y h:i:s a', time());
$complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To PMU" ;
						
 
 
                 ini_set("soap.wsdl_cache_enabled", 0);
                 $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
                 $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
                  
                 $resultBulkSMS = $client->BulkSmsv2(
                                 array('objBulkSms' => 
                                                 array(	'LoginId'=>  '923159749585', //here type your account name
                                                         'LoginPassword'=>'Hen@9598', //here type your password
                                                         'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                         'Message'=> $complaint_user_msg,
                                                         'UniCode'=>'0',
                                                         'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                         'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                         'ShortCodePrefered'=>'n',
                                                         'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                     )));
                
   
                                                  }





///////////////////////////////////////////////////////////////////////////////////



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
     //////////////////////////////////////////////////////////////////
    if($status_ids==4){
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

/////////////////////sms integration///////////////////////////////////////////////////

$SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();

 $SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();

 $subProjectName=$SubprojectsIDs->subproject_name;

 $projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
 $projectName=$projectsID->project_name;

 $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();


 $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();

 $this->db->from('hr_ipc_sms');
 $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
 $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
 $this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
 $this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
 $sms=$this->db->get()->result();
 foreach($sms as $sms){

 $mobileNumber = $sms->phone_no;

 // Remove leading zeros
 $mobileNumber = ltrim($mobileNumber, '0');
 
 // Output the modified mobile number
  $mobileNumber1="92".$mobileNumber;
 //echo 92.$mobileNumber;
                 $management_mobile_numbers = "";
 
                 $date = date('m/d/Y h:i:s a', time());
                 //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
                 $date = date('m/d/Y h:i:s a', time());
$complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To ADB" ;
						
 
 
                 ini_set("soap.wsdl_cache_enabled", 0);
                 $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
                 $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
                  
                 $resultBulkSMS = $client->BulkSmsv2(
                                 array('objBulkSms' => 
                                                 array(	'LoginId'=>  '923159749585', //here type your account name
                                                         'LoginPassword'=>'Hen@9598', //here type your password
                                                         'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                         'Message'=> $complaint_user_msg,
                                                         'UniCode'=>'0',
                                                         'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                         'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                         'ShortCodePrefered'=>'n',
                                                         'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                     )));
                
   
                                                  }




    

 ///////////////////////////////////////////////////////////////////////////////////  	
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
////////////////11-01-2024////////////////////////////////////////////


public function forward_ipc_new(){
    error_reporting(0);
    $empID=$this->session->userdata('empid');
     $ipac_id = $this->input->post('ipac_id');
      $oid = $this->input->post('oid');
     $status_ids = $this->input->post('status_ids');
     $org_id = $this->input->post('org_id');
    
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
//echo $this->db->last_query();

$nextorder=$ordereee+1;
/////////////////////////////////////////////
$nextOrg="select organization_id from organization where order_by=$nextorder and city_id=$cityID";
$nextOrgg=$this->db->query($nextOrg)->row();
//echo $this->db->last_query();
$nextOrggg=$nextOrgg->organization_id;

///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set file_type_id=1,flag_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,user_id=$empID";
$done4=$this->db->query($doneeee4);	
    //echo $this->db->last_query();
    // exit;

    $doneeeepayment="insert into ipc_payment set status_id=0,ipac_id=$ipac_id";
    $doneeeepayment1=$this->db->query($doneeeepayment);	
    
    //////////////////////////////sms for //////////////////////////////
/////////////////////sms integration///////////////////////////
$SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();

$SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();

$subProjectName=$SubprojectsIDs->subproject_name;

$projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
$projectName=$projectsID->project_name;

$doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();


$doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();

$this->db->from('hr_ipc_sms');
$this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
$this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
$this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
$this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
$sms=$this->db->get()->result();
foreach($sms as $sms){

$mobileNumber = $sms->phone_no;

// Remove leading zeros
$mobileNumber = ltrim($mobileNumber, '0');

// Output the modified mobile number
$mobileNumber1="92".$mobileNumber;
//echo 92.$mobileNumber;
             $management_mobile_numbers = "";

             $date = date('m/d/Y h:i:s a', time());
             //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
             $date = date('m/d/Y h:i:s a', time());
$complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To CIU" ;
                    


             ini_set("soap.wsdl_cache_enabled", 0);
             $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
             $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
              
             $resultBulkSMS = $client->BulkSmsv2(
                             array('objBulkSms' => 
                                             array(	'LoginId'=>  '923159749585', //here type your account name
                                                     'LoginPassword'=>'Hen@9598', //here type your password
                                                     'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                     'Message'=> $complaint_user_msg,
                                                     'UniCode'=>'0',
                                                     'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                     'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                     'ShortCodePrefered'=>'n',
                                                     'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                 )));
            

                                              }





    /////////////////////////////////////////////////////////


}else if($ordereee==2){
///////////////////////////////////////////////
$done1="update ppms_forward_internal set flag_id=0 where ipc_id=$ipac_id";
$done2=$this->db->query($done1);

$done1="insert into ppms_forward_internal set flag_id=1,ipc_id=$ipac_id,to_desig_id=10,forward_date='$tdate'";
$done2=$this->db->query($done1);


/////////////////////////////////////
$doneeee="insert into ppms_ipac_forward set file_type_id=1,status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
organization_id=$oid,flag_id=0,user_id=$empID";
$done3=$this->db->query($doneeee);
///echo $this->db->last_query();

///////////////////////////////////////////
$doneeee4="insert into ppms_ipac_forward set designation_id=10,file_type_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,flag_id=1,user_id=$empID";
$done4=$this->db->query($doneeee4);	
  ///$done=$this->db->last_query();

//////////////////////////////////////////////////////////////////////////////////

/////////////////////sms integration///////////////////////////
$SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();

$SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();

$subProjectName=$SubprojectsIDs->subproject_name;

$projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
$projectName=$projectsID->project_name;

$doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();


$doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();

$this->db->from('hr_ipc_sms');
$this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
$this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
$this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
$this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
$sms=$this->db->get()->result();
foreach($sms as $sms){

$mobileNumber = $sms->phone_no;

// Remove leading zeros
$mobileNumber = ltrim($mobileNumber, '0');

// Output the modified mobile number
$mobileNumber1="92".$mobileNumber;
//echo 92.$mobileNumber;
             $management_mobile_numbers = "";

             $date = date('m/d/Y h:i:s a', time());
             //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
             $date = date('m/d/Y h:i:s a', time());
$complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To PMU" ;
                    


             ini_set("soap.wsdl_cache_enabled", 0);
             $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
             $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
              
             $resultBulkSMS = $client->BulkSmsv2(
                             array('objBulkSms' => 
                                             array(	'LoginId'=>  '923159749585', //here type your account name
                                                     'LoginPassword'=>'Hen@9598', //here type your password
                                                     'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                     'Message'=> $complaint_user_msg,
                                                     'UniCode'=>'0',
                                                     'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                     'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                     'ShortCodePrefered'=>'n',
                                                     'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                 )));
            

                                              }





///////////////////////////////////////////////////////////////////////////////////



}else if($ordereee==3){

    $doneeee="insert into ppms_ipac_forward set file_type_id=1,status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
    organization_id=3,flag_id=0,user_id=$empID";
 $done3=$this->db->query($doneeee);
 ///echo $this->db->last_query();
 

$doneeee4="insert into ppms_ipac_forward set file_type_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,flag_id=1,user_id=$empID";
 $done4=$this->db->query($doneeee4); 
/////////////////////sms integration///////////////////////////////////////////////////

$SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();

$SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();

$subProjectName=$SubprojectsIDs->subproject_name;

$projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
$projectName=$projectsID->project_name;

$doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();


$doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();

$this->db->from('hr_ipc_sms');
$this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
$this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
$this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
$this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
$sms=$this->db->get()->result();
foreach($sms as $sms){

$mobileNumber = $sms->phone_no;

// Remove leading zeros
$mobileNumber = ltrim($mobileNumber, '0');

// Output the modified mobile number
$mobileNumber1="92".$mobileNumber;
//echo 92.$mobileNumber;
             $management_mobile_numbers = "";

             $date = date('m/d/Y h:i:s a', time());
             //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
             $date = date('m/d/Y h:i:s a', time());
$complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To ADB" ;
                    


             ini_set("soap.wsdl_cache_enabled", 0);
             $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
             $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
              
             $resultBulkSMS = $client->BulkSmsv2(
                             array('objBulkSms' => 
                                             array(	'LoginId'=>  '923159749585', //here type your account name
                                                     'LoginPassword'=>'Hen@9598', //here type your password
                                                     'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                     'Message'=> $complaint_user_msg,
                                                     'UniCode'=>'0',
                                                     'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                     'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                     'ShortCodePrefered'=>'n',
                                                     'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                 )));
            

                                              }






///////////////////////////////////////////////////////////////////////////////////  	
  ///$done=$this->db->last_query();
}else if($ordereee==4){

$doneeee="insert into ppms_ipac_forward set file_type_id=1,status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$oid,flag_id=0,user_id=$empID";
$done3=$this->db->query($doneeee);
///echo $this->db->last_query();

//$nextOID=$oid+1;
$doneeee4="insert into ppms_ipac_forward set file_type_id=1,status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,flag_id=1,user_id=$empID";
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
    $done1="select detail,city_name from ppms_subproject as ps,city as c
     where ps.subproject_id=$id and ps.city_id=c.city_id";
    $done2=$this->db->query($done1)->row();
    if($done2){
    echo $done2->detail." ".$done2->city_name; 
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
///////////////////////////////////////////////////////


    public function items_new_ipc(){
        extract($_POST);



        $done = $this->db->query( "select * from items_ipc where ipc_id=$pid and item_id=$id")->row();
        if($done){
            $run = $this->db->query( "update items_ipc set status_id=$item_status where ipc_id=$pid and item_id=$id");
        }else{
            $run = $this->db->query( "insert into items_ipc set ipc_id=$pid,status_id=1,item_id=$id");
        }
        if($run){

       echo 1;

        }else{

            echo 0;
        }

    }



/////////////////////////////////////////////

public function delete_item(){
    extract($_POST);
    $groupID=$this->session->userdata('groupid');

    if($groupID==1){

    
    
       // $run = $this->db->query( "delete from items where item_id=$id");
   $run = $this->db->query( "delete from items_ipc where ipc_item_id=$id");
                
   // echo $this->db->last_query();
   if($run){
    echo 1;
   }
     }else{
    echo 0;
}

}
/////////////////////send file backward/////////////////////
public function back_ward_file_remarks(){
    extract($_POST);
    $this->load->library('upload');
    $empID=$this->session->userdata('empid');
    $submitted_date=date('Y-m-d');

    $doneAL=$this->db->query("select * from ppms_ipac_remarks where ipac_id=$ipac_id and 
    ipac_remark_date='$submitted_date' and ipac_remark_userid=$empID and flag_id=0 and from_org_id=$oid and to_org_id=$org_id")->row();
    if($doneAL){
        $remarksID=$doneAL->ipac_remarks_id;
    }else{

	$done=$this->db->query("insert into ppms_ipac_remarks set ipac_id=$ipac_id,ipac_remark='$remarks_kifi',
			ipac_remark_date='$submitted_date',ipac_remark_userid=$empID,flag_id=0,from_org_id=$oid,to_org_id=$org_id");
            $remarksID=$this->db->insert_id();
        }

            //////////////////////files uploading////////////////////////
$config['upload_path'] = 'img/upload_files/';
		$config['file_name'] = $_FILES["attach_file"]['name'];
		$file_picture = $config['upload_path'] . $config['file_name'];
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = '*';
        

		$this->upload->initialize($config);
		
		if ($this->upload->do_upload("attach_file")) {
			$data_upload = $this->upload->data();
			
			$fileName=$config['file_name'];
		    $donee="insert into ppms_ipac_file set ipac_id=$ipac_id,ipac_file_url='$file_picture',
			ipac_file_name='$fileName',ipac_user_id=1,ipac_remarks_id=$remarksID,file_name='$caption'";
	
			$done=$this->db->query($donee);
			 }	



///////////////////////////////////////////////

            if($done){
$data['ipc_iddd']=$ipac_id;
$data['rid']=$remarksID;
$this->load->view('ppms/file_back_ward',$data);

}else{
    echo "Error or Something Wrong";
}


}

public function back_ward_file(){

    extract($_POST);
    error_reporting(0);
      $empID=$this->session->userdata('empid');
      $ipac_id = $bacward_ipc; 
      //$this->input->post('ipac_id');
      $oid = $bacward_oid;
      ///$this->input->post('ooid');
      $status_ids = $bacward_status_id;
      ///$this->input->post('status_ids');
      $org_id = $this->input->post('fid');
    
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
    
     
    /*if($ordereee==1){
    
    $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
    organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    //echo $this->db->last_query();
    
    $nextorder=$ordereee+1;
    /////////////////////////////////////////////
    $nextOrg="select organization_id from organization where order_by=$nextorder and city_id=$cityID";
    $nextOrgg=$this->db->query($nextOrg)->row();
    //echo $this->db->last_query();
    $nextOrggg=$nextOrgg->organization_id;
    
    ///////////////////////////////////////////
    $doneeee4="insert into ppms_ipac_forward set file_type_id=1,flag_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
    //echo $this->db->last_query();
    // exit;
    
    $doneeeepayment="insert into ipc_payment set status_id=0,ipac_id=$ipac_id";
    $doneeeepayment1=$this->db->query($doneeeepayment);	
    
    //////////////////////////////sms for //////////////////////////////
    /////////////////////sms integration///////////////////////////
    $SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();
    
    $SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();
    
    $subProjectName=$SubprojectsIDs->subproject_name;
    
    $projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
    $projectName=$projectsID->project_name;
    
    $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();
    
    
    $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();
    
    $this->db->from('hr_ipc_sms');
    $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
    $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
    $this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
    $this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
    $sms=$this->db->get()->result();
    foreach($sms as $sms){
    
    $mobileNumber = $sms->phone_no;
    
    // Remove leading zeros
    $mobileNumber = ltrim($mobileNumber, '0');
    
    // Output the modified mobile number
    $mobileNumber1="92".$mobileNumber;
    //echo 92.$mobileNumber;
             $management_mobile_numbers = "";
    
             $date = date('m/d/Y h:i:s a', time());
             //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
             $date = date('m/d/Y h:i:s a', time());
    $complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To CIU" ;
                    
    
    
             ini_set("soap.wsdl_cache_enabled", 0);
             $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
             $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
              
             $resultBulkSMS = $client->BulkSmsv2(
                             array('objBulkSms' => 
                                             array(	'LoginId'=>  '923159749585', //here type your account name
                                                     'LoginPassword'=>'Hen@9598', //here type your password
                                                     'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                     'Message'=> $complaint_user_msg,
                                                     'UniCode'=>'0',
                                                     'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                     'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                     'ShortCodePrefered'=>'n',
                                                     'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                 )));
            
    
                                              }
    
    
    
    
    
    /////////////////////////////////////////////////////////
    
    
    }else 
    */
    if($ordereee==2){
    ///////////////////////////////////////////////
   

    $doneeee="insert into ppms_ipac_forward set file_type_id=1,status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
    organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    ///echo $this->db->last_query();
    
    ///////////////////////////////////////////
    $doneeee4="insert into ppms_ipac_forward set designation_id=10,file_type_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,flag_id=1,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
    ///$done=$this->db->last_query();
    
    //////////////////////////////////////////////////////////////////////////////////
    
    /////////////////////sms integration///////////////////////////
    $SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();
    
    $SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();
    
    $subProjectName=$SubprojectsIDs->subproject_name;
    
    $projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
    $projectName=$projectsID->project_name;
    
    $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();
    
    
    $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();
    
    $this->db->from('hr_ipc_sms');
    $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
    $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
    $this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
    $this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
    $sms=$this->db->get()->result();
    foreach($sms as $sms){
    
    $mobileNumber = $sms->phone_no;
    
    // Remove leading zeros
    $mobileNumber = ltrim($mobileNumber, '0');
    
    // Output the modified mobile number
    $mobileNumber1="92".$mobileNumber;
    //echo 92.$mobileNumber;
             $management_mobile_numbers = "";
    
             $date = date('m/d/Y h:i:s a', time());
             //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
             $date = date('m/d/Y h:i:s a', time());
    $complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To PMU" ;
                    
    
    
             ini_set("soap.wsdl_cache_enabled", 0);
             $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
             $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
              
             $resultBulkSMS = $client->BulkSmsv2(
                             array('objBulkSms' => 
                                             array(	'LoginId'=>  '923159749585', //here type your account name
                                                     'LoginPassword'=>'Hen@9598', //here type your password
                                                     'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                     'Message'=> $complaint_user_msg,
                                                     'UniCode'=>'0',
                                                     'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                     'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                     'ShortCodePrefered'=>'n',
                                                     'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                 )));
            
    
                                              }
    
    
    
    
    
    ///////////////////////////////////////////////////////////////////////////////////
    
    
    
    }else if($ordereee==3){
    
    $doneeee="insert into ppms_ipac_forward set file_type_id=1,status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',
    organization_id=3,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    ///echo $this->db->last_query();
    
    
    $doneeee4="insert into ppms_ipac_forward set file_type_id=1,status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,flag_id=1,user_id=$empID";
    $done4=$this->db->query($doneeee4); 
    /////////////////////sms integration///////////////////////////////////////////////////
    
    $SubprojectsID=$this->db->query("select subproject_id from ppms_ipac where ipac_id=$ipac_id")->row();
    
    $SubprojectsIDs=$this->db->query("select subproject_name,project_id from ppms_subproject where subproject_id=$SubprojectsID->subproject_id")->row();
    
    $subProjectName=$SubprojectsIDs->subproject_name;
    
    $projectsID=$this->db->query("select project_name from ppms_project where project_id=$SubprojectsIDs->project_id")->row();
    $projectName=$projectsID->project_name;
    
    $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();
    
    
    $doneee=$this->db->query("select * from sms_group where organization_id=$oid")->row();
    
    $this->db->from('hr_ipc_sms');
    $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
    $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
    $this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
    $this->db->where('hr_ipc_sms.sms_group_id', $doneee->sms_group_id);
    $sms=$this->db->get()->result();
    foreach($sms as $sms){
    
    $mobileNumber = $sms->phone_no;
    
    // Remove leading zeros
    $mobileNumber = ltrim($mobileNumber, '0');
    
    // Output the modified mobile number
    $mobileNumber1="92".$mobileNumber;
    //echo 92.$mobileNumber;
             $management_mobile_numbers = "";
    
             $date = date('m/d/Y h:i:s a', time());
             //$complaint_user_msg = "Dear ".$sms->designation_name." IPC is Generated The No of IPC is:  ".$ipc_no;
             $date = date('m/d/Y h:i:s a', time());
    $complaint_user_msg = "Dear ".$sms->designation_name. " " .$projectName ."-".$subProjectName. " Has Been Forwarded From:  ".$sms->organization_name." On Date :".$date . " To ADB" ;
                    
    
    
             ini_set("soap.wsdl_cache_enabled", 0);
             $url         = 'http://cbs.zong.com.pk/ReachCWSv2/CorporateSmsV2.svc?wsdl';
             $client     = new SoapClient($url, array("trace" => 1, "exception" => 0)); 
              
             $resultBulkSMS = $client->BulkSmsv2(
                             array('objBulkSms' => 
                                             array(	'LoginId'=>  '923159749585', //here type your account name
                                                     'LoginPassword'=>'Hen@9598', //here type your password
                                                     'Mask'=>'KPCIP', //here set allowed mask against your account or you will get invalid mask
                                                     'Message'=> $complaint_user_msg,
                                                     'UniCode'=>'0',
                                                     'CampaignName'=>uniqid(), // Any random name or type uniqid() to generate random number, you can also specify campaign name here if want to send no to any existing campaign, numberCSV parameter will be ignored
                                                     'CampaignDate'=> $date, // data from where sms will start sending, if not sure type current date in m/d/y hh:mm:ss tt format.
                                                     'ShortCodePrefered'=>'n',
                                                     'NumberCsv'=>'923369205958,'.$mobileNumber1.''
                                                 )));
            
    
                                              }
    
    
    
    
    
    
    ///////////////////////////////////////////////////////////////////////////////////  	
    ///$done=$this->db->last_query();
    }else if($ordereee==4){
    
    $doneeee="insert into ppms_ipac_forward set file_type_id=1,status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    ///echo $this->db->last_query();
    
    //$nextOID=$oid+1;
    $doneeee4="insert into ppms_ipac_forward set file_type_id=1,status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$org_id,flag_id=1,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
    /// $done=$this->db->last_query();
    
    $doneeeepaymentU="update ipc_payment set status_id=1,ipc_payment_date='$tdate' where ipac_id=$ipac_id";
    $doneeeepaymentU=$this->db->query($doneeeepaymentU);
    
    
    }
    
    
    
     if($done4){
    redirect(base_url('Welcome/new_ipc_detail_popup/'.$ipac_id));
    
     }else{
        echo 0;
     }
    
    
        }


}