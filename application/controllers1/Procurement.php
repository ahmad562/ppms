<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Procurement extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	 function __construct(){
		parent::__construct();
			ob_start();
		   $this->load->model('welcome_model');
		 
		   $userid=$this->session->userdata('userid');
		   if($userid){
		   ///echo 1;	
			   
		   }else{
			   
		   redirect(base_url() . 'Users/login');
		   
		   //echo 0;	
			   
		   }
		  ini_set("memory_limit","512M");
		  ini_set('max_execution_time', 120);
		  
	   }

       public function services()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('hr/service');
           $this->load->view('footer');
       }
	   public function services_report()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('hr/services_report');
           $this->load->view('footer');
       }
      
       public function goods()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('procurement/goods');
           $this->load->view('footer');
       }

       public function civil_works()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('Procurment/civil_works');
           $this->load->view('footer');
       }
public function gender()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('Procurment/gender');
		$this->load->view('footer');
	}

	public function insert_gender()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_gender_tbl set gender_name='$gender_name'");	

	redirect(base_url('Procurment/gender'));
	}

	public function edit_gender($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('Procurment/edit_gender',$data);
		$this->load->view('footer');
	}

	public function update_gender()
	{
		extract($_POST);
	
	$done=$this->db->query("update ppms_gender_tbl set gender_name='$gender_name' where gender_id=$gender_id");	

	redirect(base_url('Procurment/gender'));
	}


	public function service_type()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('hr/service_type');
		$this->load->view('footer');
	}

	public function insert_std()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_service_type_tbl set std_name='$std_name'");	

	redirect(base_url('Procurement/service_type'));
	}

	public function edit_service_type($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('Procurment/edit_service_type',$data);
		$this->load->view('footer');
	}

	public function update_std()
	{
		extract($_POST);
	
	$done=$this->db->query("update ppms_service_type_tbl set std_name='$std_name' where std_id=$std_id");	

	redirect(base_url('Procurment/service_type'));
	}

	public function service_designation()
	{
		///error_reporting(E_ALL);
		$this->load->view('header');
		$this->load->view('menu');
		///echo "kifayat";
		$this->load->view('hr/service_designation');
		$this->load->view('footer');
	}

	

	public function edit_service_designation($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('Procurment/edit_service_designation',$data);
		$this->load->view('footer');
	}
	public function insert_service_designation()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_service_designation_tbl set std_id=$std_id,organization_id=$organization_id,std_position='$std_position',designation_name='$sd_id'");	

	redirect(base_url('Procurement/service_designation'));
	}
	public function update_service_designation()
	{
		extract($_POST);
	
	$done=$this->db->query("update ppms_service_designation_tbl set std_id=$std_id,organization_id=$organization_id,std_position='$std_position',d_id=$sd_id where sd_id=$sd_id");	

	redirect(base_url('Procurement/service_designation'));
	}

	public function service()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('Procurment/service');
		$this->load->view('footer');
	}

	public function insert_service()
	{
		extract($_POST);
		$this->load->library('upload');
        $config['upload_path'] = 'img/emp/';
        $config['file_name'] = $_FILES["emp_pic"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if($this->upload->do_upload("emp_pic")) {
            $data_upload = $this->upload->data();
             $insert_image = $config['file_name'];
	$done=$this->db->query("insert into ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',address='$address',
	s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',email_id='$email',
	designation_name='$sd_id',organization_id=$organization_id,cnic='$cnic',gender_id='$gender_id',emp_pic='$file_picture',
	salary='$salary',std_id='$std_id',loan_grant='$loan_grant',marital_status='$marital_status',dob='$dob',father_name='$father_name'");	
		}else{
    $insert_image = $config['file_name'];
	$done=$this->db->query("insert into ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',address='$address',
	s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',email_id='$email',
	designation_name='$sd_id',organization_id=$organization_id,cnic='$cnic',gender_id='$gender_id',
	salary='$salary',std_id='$std_id',loan_grant='$loan_grant',marital_status='$marital_status',dob='$dob',father_name='$father_name'");	
}
$insert_id = $this->db->insert_id();

$this->db->query("insert into hr_consultancy_contracts set firm_indi_id='Individual',emp_id=$insert_id,contract_award='$cad',
completion_date ='$ced',status_id = 1");

	redirect(base_url('Procurement/services'));
	}

	public function edit_service($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('hr/edit_service',$data);
		$this->load->view('footer');
	}

	public function update_service()
	{
		
	
	/*$done=$this->db->query("update ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',
	s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',d_id=$sd_id,
	organization_id=$organization_id,cnic='$cnic',gender_id='$gender_id',salary='$salary',std_id='$std_id',loan_grant='$loan_grant'
	where service_id=$service_id");	
	*/


	extract($_POST);
	$this->load->library('upload');
	$config['upload_path'] = 'img/emp/';
	$config['file_name'] = $_FILES["emp_pic"]['name'];
	$file_picture = $config['upload_path'] . $config['file_name'];
	$config['overwrite'] = TRUE;
	$config['allowed_types'] = '*';
	$this->upload->initialize($config);
	
	if($this->upload->do_upload("emp_pic")) {
		$data_upload = $this->upload->data();
		 $insert_image = $config['file_name'];
$done=$this->db->query("update ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',address='$address',
s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',email_id='$email',
designation_name='$sd_id',organization_id=$organization_id,cnic='$cnic',gender='$gender_id',emp_pic='$file_picture',
salary='$salary',std_id='$std_id',loan_grant='$loan_grant',marital_status='$marital_status',dob='$dob',father_name='$father_name' where service_id=$service_id");	
	}else{

$done=$this->db->query("update ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',address='$address',
s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',email_id='$email',
designation_name='$sd_id',organization_id=$organization_id,cnic='$cnic',gender='$gender_id',
salary='$salary',std_id='$std_id',loan_grant='$loan_grant',marital_status='$marital_status',dob='$dob',father_name='$father_name' where service_id=$service_id");	
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
$done_exist=$this->db->query("select * from hr_consultancy_contracts where emp_id=$service_id ORDER BY hr_cid ASC LIMIT 1")->row();
if($done_exist){
	$this->db->query("update hr_consultancy_contracts set firm_indi_id='Individual',contract_award='$cad',
	completion_date ='$ced',status_id = 1 where emp_id=$service_id ORDER BY hr_cid ASC LIMIT 1");

}else{
	$this->db->query("insert into hr_consultancy_contracts set firm_indi_id='Individual',contract_award='$cad',
	completion_date ='$ced',status_id = 1,emp_id=$service_id");

}



redirect(base_url('Procurement/services'));
	}




      }