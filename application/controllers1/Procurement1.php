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
           $this->load->view('procurement/services');
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
           $this->load->view('hr/civil_works');
           $this->load->view('footer');
       }
public function gender()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('hr/gender');
		$this->load->view('footer');
	}

	public function insert_gender()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_gender_tbl set gender_name='$gender_name'");	

	redirect(base_url('hr/gender'));
	}

	public function edit_gender($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('hr/edit_gender',$data);
		$this->load->view('footer');
	}

	public function update_gender()
	{
		extract($_POST);
	
	$done=$this->db->query("update ppms_gender_tbl set gender_name='$gender_name' where gender_id=$gender_id");	

	redirect(base_url('complaint/gender'));
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

	redirect(base_url('complaint/service_type'));
	}

	public function edit_service_type($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('hr/edit_service_type',$data);
		$this->load->view('footer');
	}

	public function update_std()
	{
		extract($_POST);
	
	$done=$this->db->query("update ppms_service_type_tbl set std_name='$std_name' where std_id=$std_id");	

	redirect(base_url('complaint/service_type'));
	}

	public function service_designation()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('hr/service_designation');
		$this->load->view('footer');
	}

	public function insert_service_designation()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_service_designation_tbl set std_id=$std_id,organization_id=$organization_id,std_position='$std_position',d_id=$sd_id");	

	redirect(base_url('Procurement/service_designation'));
	}

	public function edit_service_designation($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('hr/edit_service_designation',$data);
		$this->load->view('footer');
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
		$this->load->view('hr/service');
		$this->load->view('footer');
	}

	public function insert_service()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',d_id=$sd_id,organization_id=$organization_id,cnic='$cnic',gender_id='$gender_id',salary='$salary',std_id='$std_id'");	

	redirect(base_url('complaint/service'));
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
		extract($_POST);
	
	$done=$this->db->query("update ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',d_id=$sd_id,organization_id=$organization_id,cnic='$cnic',gender_id='$gender_id',salary='$salary',std_id='$std_id' where service_id=$service_id");	

	redirect(base_url('Procurement/service'));
	}




      }