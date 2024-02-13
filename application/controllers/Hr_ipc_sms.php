<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
class Hr_ipc_sms extends CI_Controller {
function __construct(){
		parent::__construct();
		ob_start();
		error_reporting(0);
		   $this->load->model('hr_ipc_sms_model');
		 
		   $userid=$this->session->userdata('userid');
		   if($userid){
		   ///echo 1;	
			   
		   }else{
			   
		   redirect(base_url() . 'Users/login');
		   
		   //echo 0;	
			   
		   }
		  ini_set("memory_limit","512M");
		  ini_set('max_execution_time', 120);
          $this->load->helper('form');
          $this->load->library('form_validation');
		  
	   }
	

	 
    // List all records
    public function index(){
     $this->load->view('header');
        $this->load->view('menu');
        $data['records'] = $this->hr_ipc_sms_model->get_all();
        $this->load->view('hr/hr_ipc_sms/list', $data);
        $this->load->view('footer');
    }
    public function sms_group(){
    $this->load->view('hr/hr_ipc_sms/sms_group');
    }

    // Add new record
    public function add() {
      
            $data = array(
                 'emp_id' => $this->input->post('emp_id'),
                 'hr_email_id' => $this->input->post('email_id'),
                 'phone_no' => $this->input->post('phone_no'),
                 'sms_group_id' => $this->input->post('sms_group_id')
            );
            $this->hr_ipc_sms_model->insert($data);
            redirect(base_url('Hr_ipc_sms'));
         
    }
   

    // Edit record
    public function edit($id) {
        if ($_POST) {
            $data = array(
                'emp_id' => $this->input->post('emp_id'),
                'org_id' => $this->input->post('org_id'),
                'phone_no' => $this->input->post('phone_no')
            );
            $this->hr_ipc_sms_model->update($id, $data);
            redirect('hr_ipc_sms');
        } else {
             $this->load->view('header');
             $this->load->view('menu');
            $data['record'] = $this->hr_ipc_sms_model->get_all();
            $data['id'] = $id;
            $this->load->view('hr/hr_ipc_sms/edit', $data);
            $this->load->view('footer');
        }
    }

    // Delete record
    public function delete($id) {
        $this->hr_ipc_sms_model->delete($id);
        redirect('hr_ipc_sms');
    }
/////////////////////////////////////////////////

public function add_more_sms_record(){
    extract($_POST);
$done=$this->db->query("insert into sms_group set sms_group_name='$sms_group_name',organization_id=$org_id");
if($done){

redirect(base_url('Hr_ipc_sms'));

}
}



}
?>