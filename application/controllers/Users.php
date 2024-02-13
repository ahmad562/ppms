<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	 
	 function __construct(){
	 parent::__construct();
	 	ob_start();
       $this->load->model('welcome_model');
	  
	   //error_reporting(E_ALL);
	   ob_start();
	   
    }
	
	
	public function login(){
		
		$this->load->view('login');
		
    
	//echo "kifayat";	
    }

	/*public function checkUsers(){
	  extract($_POST);
	 $PASSWORD=md5($password);
	 $data=$this->db->query("select * from user_new where user_new_name='$username' and user_password='$PASSWORD'")->row();
	 /////exit;
	 if($data){
		  $this->session->set_userdata('username', $data->user_new_name);
		  $this->session->set_userdata('userid', $data->user_new_id);
		  $this->session->set_userdata('groupid', $data->group_id);
		  $this->session->set_userdata('disid', $data->dist_id);
		   
		  redirect(base_url('Welcome'));
	  }else{
	 redirect(base_url());
	 }
	 	
}*/
////////////////////////////////////////////////////////////////////////////
public function checkUsers()
 {
	 extract($_POST);
	 
/////////////////////////////////////////////////////////////////////////////////////////

        $this->form_validation->set_rules('username', 'username', 'required');
        $this->form_validation->set_rules('password', 'password', 'required');
 
        $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
        $this->form_validation->set_message('required', 'Enter %s');
 
        if ($this->form_validation->run() === FALSE)
        {  
            ///$this->load->view('login');
        }
        else
        {   
		   $passee =$this->input->post('password');
		   ///echo md5;
		   ///echo $passee;
		   ///exit;
		  $passee1=md5($passee);
            $data = array(
               'user_name' => $this->input->post('username'),
               'user_password' => $passee1,
 
             );
   
            $check = $this->welcome_model->auth_check($data);
            //print_r($check);
			//exit;
            /// $this->load->view('login');
			 if($check){
		  $this->session->set_userdata('username', $check->user_name);
		  $this->session->set_userdata('userid', $check->user_id);
		  $this->session->set_userdata('empid', $check->emp_id);
		  
		  $this->session->set_userdata('groupid', $check->group_id);
		  $this->session->set_userdata('cityid', $check->city_id);
		  
		  date_default_timezone_set("Asia/Karachi");
		  $login_date=date('Y-m-d H:i:s');
		  //$logout_date=date('Y-m-d H:S:I');
		  $user_ip = $_SERVER['REMOTE_ADDR'];
$this->db->query("insert into login_logs set user_id=$check->user_id,ip_address='$user_ip',flag_id=1,timestamp_login='$login_date'");
$last_insert_id = $this->db->insert_id();
$this->session->set_userdata('login_id', $last_insert_id);

		  
		   ///echo 1;
		  redirect(base_url('Welcome'));
	}else{
		///echo 0;
	redirect(base_url());
	 }
        }	 
	 
	 //////////////////////////////////////////////////////////////////////////////////////////////////
	
	
	 
 }

	
	////////////////////logout///////////////////////////////
	public function logout()
 {
     $id=$this->session->userdata('login_id');
	 date_default_timezone_set("Asia/Karachi");
		  $login_date=date('Y-m-d H:i:s');
	 if($id){	  
	$this->db->query("update login_logs set flag_id=0,timestamp_logout='$login_date' where id=$id");
	 }
    
	
	 $this->session->sess_destroy();
	 redirect(base_url());
	 
 }	
 //////////////////////////
 public function view_admin_menu()
 {
	 $this->load->view('header');
	 $this->load->view('menu');
	 $this->load->view('menu_admin/display_admin_menu');
	 $this->load->view('footer');
 }
 public function add_admin_menu()
 {
	 $this->load->view('header');
	 $this->load->view('menu');
	 $this->load->view('menu_admin/add_admin_menu');
	 $this->load->view('footer');
 }

 public function insert_menu_admin(){
	 extract($_POST);
	 echo $done="insert into menu_admin set menu_name='$menu_name',menu_url='$menu_url',parent_id='$parent_id',show_in_menu='$show_in_menu',sort_order='$sort_order',group_id='$group_id',is_admin=1,module_id='$module_id'";
	 $this->db->query($done);
	 redirect(base_url('Users/view_admin_menu'));	
}

public function edit_admin_menu($menu_id)
 {
	 error_reporting(0);
	 if ($this->session->userdata('username')){
	 $this->load->view('header');
	 $this->load->view('menu');
	 $data["menu_id"]=$menu_id;
	 $this->load->view('menu_admin/edit_admin_menu',$data);
	 $this->load->view('footer');
	 }else{
		 $this->load->view('header');
	 $this->load->view('login');
	 $this->load->view('footer');	
	 }
	 
 }


public function update_admin_menu(){
	 extract($_POST);

	 $done="update menu_admin set menu_name='$menu_name',menu_url='$menu_url',parent_id='$parent_id',show_in_menu='$show_in_menu',sort_order='$sort_order',group_id='$group_id',is_admin='$is_admin',module_id='$module_id' where menu_id='$menu_id'";
	 $this->db->query($done);
	 redirect(base_url('Users/show_udpate_admin_menu'));

	 
}
public function show_udpate_admin_menu(){
		
	 
	 if ($this->session->userdata('username')){
	 $this->load->view('header');
	 $this->load->view('menu');
	 $this->load->view('menu_admin/display_admin_menu');
	 $this->load->view('footer');
	 }else{
		 $this->load->view('header');
	 $this->load->view('login');
	 $this->load->view('footer');	
	 }
	 
}

	
}
