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


public function get_sub_projects(){
    $project_id = $this->input->post('project_id');
    $postData = $this->input->post();
    // load model 
    $this->load->model('dropdown');
    // get data 
    $data = $this->dropdown->get_sub_projects($postData);
    echo json_encode($data); 
}

////////////////////////////////////////////////
    public function forward_ipace(){
        $empID=$this->session->userdata('empid');
         $ipac_id = $this->input->post('ipac_id');
         $oid = $this->input->post('oid');
         $status_ids = $this->input->post('status_ids');
        
        $tdate=date('Y-m-d');
        $done1="update ppms_ipac_forward set flag_id=0 where ipac_id=$ipac_id";
        $done2=$this->db->query($done1);
        //echo $this->db->last_query();
         
if($oid==1 or $oid==2 or $oid==3){
       $doneeee="insert into ppms_ipac_forward set status_id=1,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    ///echo $this->db->last_query();
    
    $nextOID=$oid+1;
 $doneeee4="insert into ppms_ipac_forward set status_id=2,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$nextOID,flag_id=1,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
		 ///$done=$this->db->last_query();
}else if($oid==4){

    $doneeee="insert into ppms_ipac_forward set status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=$oid,flag_id=0,user_id=$empID";
    $done3=$this->db->query($doneeee);
    echo $this->db->last_query();
    
    //$nextOID=$oid+1;
 $doneeee4="insert into ppms_ipac_forward set status_id=$status_ids,ipac_id=$ipac_id,ipac_forward_date='$tdate',organization_id=3,flag_id=1,user_id=$empID";
    $done4=$this->db->query($doneeee4);	
		 $done=$this->db->last_query();


}



         if($done4){
echo 1;

         }else{
            echo 0;
         }
      }
////////////////////////////////////////////////////



}