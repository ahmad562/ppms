<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Emp extends CI_Controller {

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
	public function __construct() {
        parent::__construct();
	ob_start();
		$this->load->database();
		//error_reporting(E_ALL);
	
		date_default_timezone_set('Asia/Karachi');
		set_time_limit(0);
		ini_set("memory_limit","512M");
		///////////////////////////////////////////
		if ($this->session->userdata('username')){
		
		
		}else{
			/*$this->load->view('header');
			$this->load->view('footer');*/
		}
		//
		
	 }
	 
	public function index()
	{
		
		if ($this->session->userdata('username')){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('employee/add_employee');
		$this->load->view('footer');
		}else{
			$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');	
		}
		
	}
	public function edit_emp($id)
	{
		$this->load->view('header');
		$this->load->view('menu');
		$data["edit_emp_id"]=$id;
		$this->load->view('complaints/edit_emp',$data);
		$this->load->view('footer');
	}
	///////////////////////////////////////////////
	public function get_circle(){
		extract($_POST);
	   $data["id"]=$id;
	$this->load->view('complaints/get_circle',$data);
	}
	public function get_circle_edit(){
		extract($_POST);
	   $data["id"]=$id;
	   $data["eid"]=$empID;
	$this->load->view('complaints/get_circle_edit',$data);
	}

	////////////////////////////////////
	public function messages(){
	    //$this->load->view('header');
		//$this->load->view('menu');
		$this->load->view('welcome_message');
		///$this->load->view('footer');	
		
		
	}
	public function get_balance_empNew()
	{
		 //$this->load->model('Main_model');
		 $clientID=$this->input->post('discountee');
		 $getAdvance=$this->db->query("SELECT (IFNULL(MAX(amount_paid),0)-IFNULL(MAX(amount_recieved),0)) AS tot_adv from emp_advance WHERE emp_id=$clientID")->row();
         $advanceee = $getAdvance->tot_adv;
		 //////////////////////////////////////////////////////
		$get_sal=$this->db->query("SELECT salary FROM emp WHERE emp_id=$clientID")->row();
        $getSal=$get_sal->salary;
		////////////////////////////////////////////////////////
		 $getAdvance=$this->db->query("SELECT (IFNULL(MAX(amount_payable),0)-IFNULL(MAX(amount_paid),0)) AS tot_arears from emp_salary_detail WHERE emp_id=$clientID")->row();
         $tot_arears = $getAdvance->tot_arears;
		 ////////////////////////////////////////////////////////////////////////////////////
         $r=array("getSal"=>"$getSal","advanceee"=>"$advanceee","tot_arears"=>"$tot_arears");
         echo json_encode($r);
}
public function calculate_all(){
	extract($_POST);
	///monthsss: monthsss,no_days:no_days,over_time:over_time,salary:salary
	/*if(($monthsss==1) or ($monthsss==3) or ($monthsss==5) or ($monthsss==7) or ($monthsss==8) or ($monthsss==10) or ($monthsss==12)) {
	$tot_days=31;
}else if($monthsss==2){
$tot_days=28;	
}else{*/
$tot_days=30;	
//}
///echo $tot_days;
///echo "<br>";
	 $per_day_salary=$salary/$tot_days;
	///echo "<br>";
	 $per_hr_salary=$per_day_salary / 8;
	//echo "<br>";
	 $tot_over_time_sal=$over_time * $per_hr_salary;
	///echo "<br>";
 $tot_bonus_salary=$per_day_salary * $bonus_days;
	///echo "<br>";
	 $r=array("tot_over_time_sal"=>"$tot_over_time_sal","tot_bonus_salary"=>"$tot_bonus_salary",);
         echo json_encode($r);
	
}
function insert_emp_salary(){
	$tdate=date('Y-m-d');
	extract($_POST);
         $cdate1 = str_replace('-', '-', $cash_date);
          $cdate1=date("Y-m-d",strtotime($cdate1));
		
		 
		$done=$this->db->query("select * from emp_salary_detail where emp_id=$emp_id and month_id=$monthsss")->row();
		if($done){
		$done1=$this->db->query("update emp_salary_detail SET salary_date='$cdate1',month_id=$monthsss,working_days=$no_days,tot_over_time=$over_time,bonus_days=$bonus_days,net_salary=$salary,tot_overtime_amt=$tot_over_time,tot_bonus_amt=$bonus_amt,
advance=$advance,salary_amount=$tot_amt,description='$detail' where emp_id=$emp_id and month_id=$monthsss"); 	
		}else{
	$done1=$this->db->query("INSERT INTO emp_salary_detail SET salary_date='$cdate1',month_id=$monthsss,emp_id=$emp_id,working_days=$no_days,tot_over_time=$over_time,bonus_days=$bonus_days,net_salary=$salary,tot_overtime_amt=$tot_over_time,tot_bonus_amt=$bonus_amt,
advance=$advance,salary_amount=$tot_amt,description='$detail'"); 
		}
		  
	//$insert_id = $this->db->insert_id();	
	//$this->db->query("insert into emp_detail set invoice_date='$cdate1',amount_paid=0,description='$detail',salary_id=$insert_id,emp_id=$emp_id"); 	  
	if($done1){
		
	   $this->session->set_flashdata('msg','Record Edited Successfully!!');	  
	 redirect(base_url().'Emp/view_emp_salry');
	}
	  
}
public function edit_emp_salary($empID){
		$this->load->view('header');
		$this->load->view('menu');
		$data["empIDD"]=$empID;
		$this->load->view('edit_salary',$data);
		$this->load->view('footer');
	
}
	/////////////////////////////////////////////////////////////////
	
	public function view_salary()
	{
		
		if ($this->session->userdata('username')){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('view_salary');
		$this->load->view('footer');
		}else{
			$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');	
		}
		
	}
	
	
	/////////////////////////////////////////////////////////
	
	public function edi_emp($id)
	{
		error_reporting(0);
		if ($this->session->userdata('username')){
		$this->load->view('header');
		$this->load->view('menu');
		$data["eid"]=$id;
		$this->load->view('employee/edit_emp',$data);
		$this->load->view('footer');
		}else{
			$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');	
		}
		
	}
	public function view_emp()
	{
		
		if ($this->session->userdata('username')){
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('employee/display_emp_records');
		$this->load->view('footer');
		}else{
			$this->load->view('header');
		$this->load->view('login');
		$this->load->view('footer');	
		}
		
	}
	
	
		
		public function update_emp(){
	    extract($_POST);
	    $this->load->library('upload');
        $config['upload_path'] = 'img/emp/';
        $config['file_name'] = $_FILES["Pict_upload"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
		
        if ($this->upload->do_upload("Pict_upload")) {
            $data_upload = $this->upload->data();	
			///,,,,,,,Guarantercnic,address,
	$done=$this->db->query("update hr_employees 
	set EMP_PIC='$file_picture',EMP_NAME='$emp_name',EMP_F_NAME='$father_name',CNIC_NO='$cnic',PHONE='$phone',EMAIL='$email' where EMP_NO=$emp_id");
		}else{
			
$done=$this->db->query("update hr_employees set EMP_NAME='$emp_name',EMP_F_NAME='$father_name',CNIC_NO='$cnic',PHONE='$phone',
	EMAIL='$email' where EMP_NO=$emp_id");	
	}
	if($done){
		
	   $this->session->set_flashdata('msg','Record Edited Successfully!!');
	   echo redirect(base_url('Emp'));	
		
	}
		
}
//////////////////////////////////////////////

public function insert_user(){
	extract($_POST);
	$paseee=md5($passwords);
	$done1=$this->db->query("select * from user_new where user_name='$user_name'")->row();
	if($done1){
	$done=$this->db->query("update user_new set user_password='$paseee',
	user_name='$user_name',group_id=$group_id,emp_id=$emp_id,city_id=$city_id  where user_name='$user_name'");	
	}else{
	$done=$this->db->query("insert into user_new set user_password='$paseee',
	user_name='$user_name',group_id=$group_id,emp_id=$emp_id,city_id=$city_id");	
	}
	
	if($done){
		
	   $this->session->set_flashdata('msg','Record Saved Successfully!!');
	   echo "<script>
		 alert('Users Record Added Successfully!');  
		 </script>";
	   echo redirect(base_url('Welcome/user'));	
		
	}
}
/////////////////////////////////////////////////////

public function update_user(){
	extract($_POST);
	$paseee=md5($passwords);
	if(!empty($paseee)){
	$done=$this->db->query("update user_new set user_password='$paseee',
	user_name='$user_name',group_id=$group_id,emp_id=$emp_id,city_id=$city_id  where user_id=$user_id");	
	}else{
		$done=$this->db->query("update user_new set 
		user_name='$user_name',group_id=$group_id,emp_id=$emp_id,city_id=$city_id  where user_id=$user_id");	

	}
	
	if($done){
		
	   $this->session->set_flashdata('msg','Record Updated Successfully!!');
	   echo "<script>
		 alert('Users Record Added Successfully!');  
		 </script>";
	   echo redirect(base_url('Welcome/user'));	
		
	}
}

////////////////////////////////////////////////

public function status_emp_new($id,$sid){
	extract($_POST);
	$done=$this->db->query("update emp 
	set emp_status_id=$sid where emp_id=$id");
	echo redirect(base_url('Emp/view_emp'));

}


///////////////////////////////////////////////////////////////////
	
	public function edit_emp_record(){
	    extract($_POST);
		error_reporting(E_ALL);
	    $this->load->library('upload');
        $config['upload_path'] = 'img/emp/';
        $config['file_name'] = $_FILES["Pict_upload"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
		
        if ($this->upload->do_upload("Pict_upload")) {
            $data_upload = $this->upload->data();	
			$abc="update emp 
			set emp_pic='$file_picture',emp_name='$emp_name',
			emp_curr_address='$caddress',emp_per_address='$paddress',department_id=$department_id,
			geneder='$gender',designation_id=$designation_id,organization_id=$organization_id,city_id=$city_id,
			phone='$phone',email='$email' where emp_id=$empID";
			$done=$this->db->query($abc);
		}else{
			echo $doneee="update emp 
			set emp_name='$emp_name',
			emp_curr_address='$caddress',emp_per_address='$paddress',department_id=$department_id,
			geneder='$gender',designation_id=$designation_id,organization_id=$organization_id,city_id=$city_id,
			phone='$phone',email='$email' where emp_id=$empID";
		    $done=$this->db->query($doneee);
			//exit;
	}

	if(!empty($password)){
		$passwords=md5($password);
$donePassword=$this->db->query("update user_new set user_password='$passwords',user_name='$email',
group_id=$group where emp_id=$empID");	
	}else{
	
$donePassword=$this->db->query("update user_new set user_name='$email',
group_id=$group where emp_id=$empID");	
	}
/////////////////////////////////////////////////////////////////////////////////////////////	


	if($done){
	  $this->session->set_flashdata('msg','Record Saved Successfully!!');
	 echo "<script>
	 alert('Employee Record Edited Successfully!');  
	 </script>";
	echo redirect(base_url('Emp'));	
		
	}
		
}
//////////////////////////////////////////////////////////////////


public function insert_emp(){
	extract($_POST);
	
	//exit;
	$this->load->library('upload');
	$config['upload_path'] = 'img/emp/';
	$config['file_name'] = $_FILES["Pict_upload"]['name'];
	$file_picture = $config['upload_path'] . $config['file_name'];
	$config['overwrite'] = TRUE;
	$config['allowed_types'] = 'jpg|png|jpeg';
	$this->upload->initialize($config);
	
	if ($this->upload->do_upload("Pict_upload")) {
		$data_upload = $this->upload->data();	
		///echo "pak";
		$done=$this->db->query("insert into emp 
set emp_pic='$file_picture',emp_name='$emp_name',
emp_curr_address='$caddress',emp_per_address='$paddress',department_id=$department_id,
geneder='$gender',designation_id=$designation_id,organization_id=$organization_id,city_id=$city_id,
phone='$phone',email='$email'");
	}else{
		///echo "No Picture";
		$abc="insert into emp
set emp_name='$emp_name',
emp_curr_address='$caddress',emp_per_address='$paddress',department_id=$department_id,designation_id=$designation_id,
geneder='$gender',organization_id=$organization_id,city_id=$city_id,phone='$phone',email='$email'";
	$done=$this->db->query($abc);
echo $this->db->last_query();
}
///exit;
$emp =$this->db->insert_id();
$passwords=md5($password);
$done1=$this->db->query("select * from user_new 
where user_name='$email'")->row();
if($done1){
$done=$this->db->query("update user_new set user_password='$passwords',
group_id=$group where user_name='$email'");	
}else{
$done1=$this->db->query("insert into user_new set user_password='$passwords',
user_name='$email',group_id=$group,emp_id=$emp,city_id=$city_id");	
}

if($done){
	
   $this->session->set_flashdata('msg','Record Saved Successfully!!');
   echo "<script>
	 alert('Employee Record Added Successfully!');  
	 </script>";
   echo redirect(base_url('Emp/view_emp'));	
	
}
	
}
//////////////////////////////////////////////////////////////
	
public function display_Emp(){
	
	$query = "SELECT * FROM hr_employees";
$statement = $this->db->query($query)->result();
if($statement)
{
	foreach($statement as $row)
	{
		$data[] = $row;
	}
	echo json_encode($data);
}	
		
	}
	/////////////////////////////////////////////////////////
	
	public function delete_emp(){
	
$info = json_decode(file_get_contents("php://input"));
if (count($info) > 0) {
	$pid     = $info->id;
$query = "delete from emp WHERE emp_id = $pid";
        if ($this->db->query($query)) {
            echo 'Data Deleted Successfully...';
        } else {
            echo 'Failed';
        	
}
	
}	
		
		
	}
	
	
}