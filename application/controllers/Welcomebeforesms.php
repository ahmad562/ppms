<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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

	public function index()
	{
		///error_reporting(E_ALL);
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('body');
	$this->load->view('footer');
	}
	public function sample()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/sample');
		$this->load->view('footer');
	}
	public function sample_display()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/sample_display');
		$this->load->view('footer');
	}

	public function display_form()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/display_form');
		$this->load->view('footer');
	}
	public function groups()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/group');
		$this->load->view('footer');
	}

public function spare()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/spare');
		$this->load->view('footer');
	}
	
	public function user()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/user');
		$this->load->view('footer');
	}
	public function edit_user($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["uid"]=$id;
		$this->load->view('general/edit_user',$data);
		$this->load->view('footer');
	}
	

	public function insert_group(){
		extract($_POST);
$done=$this->db->query("insert into usr_group set group_name='$group_name'");
if($done){
	redirect(base_url('Welcome/groups'));
}
}
public function permission($id){
	error_reporting(0);
	$this->load->view('header');
	$this->load->view('menu');
	$data["PermID"]=$id;	
	$this->load->view('general/permission',$data);
	$this->load->view('footer');
		
	}



	public function insert_sub_menu(){
			
		extract($_POST);
		if($cont1==1){
			$done=$this->db->query("select * from permission where group_id=$grp and menu_id=$menuID")->row();
		   if($done){
				$done1=$this->db->query("update permission set flag_id=1
				where group_id=$grp and menu_id=$menuID");	
			///echo $this->db->last_query();
			}else{
			$done1=$this->db->query("insert into permission set group_id=$grp,menu_id=$menuID,flag_id=1");
			}
		 }else{
			$done1=$this->db->query("update permission set flag_id=0 where group_id=$grp and menu_id=$menuID");
			///$this->db->query("delete from usr_permission where GROUP_ID=$grp and MENU_ID=$menuID");
			}
		///echo $this->db->last_query();
		if($done1){
			
		echo 1;	
			
		}
	
		}

public function insert_main_menu(){
			extract($_POST);
			
	if($cont1==1){
			$done=$this->db->query("select * from permission where group_id=$grp and menu_id=$menuID")->row();
		   if($done){
				$done1=$this->db->query("update permission set flag_id=1 where group_id=$grp and menu_id=$menuID");	
			}else{
			$done1=$this->db->query("insert into permission set group_id=$grp,menu_id=$menuID,flag_id=1");
			}
		 }else{
			$done1=$this->db->query("update permission set flag_id=0 where group_id=$grp and menu_id=$menuID");
			///$this->db->query("delete from usr_permission where GROUP_ID=$grp and MENU_ID=$menuID");
			}
		///echo $this->db->last_query();
		if($done1){
			
		echo 1;	
			
		}
		}


		public function display_department()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/department');
		$this->load->view('footer');
	}
	public function edit_department($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('general/edit_department',$data);
		$this->load->view('footer');
	}

	public function display_designation()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/designation');
		$this->load->view('footer');
	}
	public function edit_designation($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('general/edit_designation',$data);
		$this->load->view('footer');
	}

	public function display_organization()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/organization');
		$this->load->view('footer');
	}
	public function edit_organization($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('general/edit_organization',$data);
		$this->load->view('footer');
	}
	public function edit_organization_record(){

		extract($_POST);
		
			///echo "kifayat";
	$done=$this->db->query("update organization set organization_name='$organization_name',city_id=$city_id,order_by=$order_by
	 where organization_id=$organization_id");	
		///}
			///echo $this->db->last_query();
			
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if($done){
		redirect(base_url('Welcome/display_organization'));
			}

	}
	public function ppms_sub_projects_area()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_sub_projects_area');
		$this->load->view('footer');
	}
	
	public function edit_sub_projects_area($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/edit_sub_projects_area',$data);
		$this->load->view('footer');
	}

	public function display_city()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('general/city');
		$this->load->view('footer');
	}
	public function edit_city($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('general/edit_city',$data);
		$this->load->view('footer');
	}
	public function edit_city_record(){

		extract($_POST);
		
			///echo "kifayat";
	$done=$this->db->query("update city set city_name='$city_name'
	 where city_id=$city_id");	
		///}
			//echo $this->db->last_query();
			
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if($done){
		redirect(base_url('Welcome/display_city'));
			}

	}
	//////////////////////////PPMS/////////////////////////////////////

	public function ppms()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms');
		$this->load->view('footer');
	}
	public function edit_ppms($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/edit_ppms',$data);
		
		$this->load->view('footer');
	}
	public function ppms_sectors()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_sectors');
		$this->load->view('footer');
	}
	public function edit_sectors($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/edit_sectors',$data);
		$this->load->view('footer');
	}
	public function ppms_projects()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_projects');
		$this->load->view('footer');
	}
	public function edit_project($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/edit_project',$data);
		$this->load->view('footer');
	}
	public function ppms_sub_projects()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_sub_projects');
		$this->load->view('footer');
	}
	public function ppms_bill_summary()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_bill_summary');
		$this->load->view('footer');
	}
	//////////////////////////////////////////////////////
	
	
	public function edit_ppms_bill_summary(){
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/edit_ppms_bill_summary');
		$this->load->view('footer');

}

public function ppms_bill_summary_new()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_bill_summary_new');
		$this->load->view('footer');
	}
	//////////////////////////////////////////////////////
	public function ppms_bill_summary_new_insert()
	{
	
		extract($_POST);
		$done = $this->db->query("select * from ppms_billsummary where billsummary_no='$bs_no' 
and billsummary_category_id=$bill_cat and subproject_id=$sub_project_id and sub_sub_project_id=$sub_sub_project_id")->row();
		if ($done) {
			$done = $this->db->query("update ppms_billsummary set billsummary_desc='$bs_desc',billsummary_amt=$bs_amount,subproject_id=$sub_project_id,sub_sub_project_id=$sub_sub_project_id,
billsummary_cw=$civil_work where billsummary_no='$bs_no' and billsummary_category_id=$bill_cat");
		} else {
			$doneMaxi = $this->db->query("select ifnull(max(sid),0)+1 as sid from ppms_billsummary where subproject_id=$sub_project_id and sub_sub_project_id=$sub_sub_project_id")->row();
			$maxiiii = $doneMaxi->sid;
			$done = $this->db->query("insert into ppms_billsummary set billsummary_desc='$bs_desc',billsummary_amt=$bs_amount,sub_sub_project_id=$sub_sub_project_id,
billsummary_cw=$civil_work,billsummary_no='$bs_no',billsummary_category_id=$bill_cat,subproject_id=$sub_project_id,sid=$maxiiii");
		}

		//echo $this->db->last_query();
		//exit;
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if ($done) {
			echo 1;
		}

	}


//////////////////////////////////////////////////////////////////////////

public function add_amount_billsummary_cells(){

	extract($_POST);
	//projectID
	///SubProjectID
	$maxii="SELECT IFNULL(MAX(grp_id),0)+1 as maxiiii  FROM `bill_summary_amount` WHERE `subproject_id`=$projectID AND `sub_sub_project_id`=$SubProjectID";
	$maxiii=$this->db->query($maxii)->row();
	$newVAL=$maxiii->maxiiii;

	$lopoo="SELECT * FROM `ppms_billsummary` WHERE `subproject_id`=$projectID AND `sub_sub_project_id`=$SubProjectID";
	$lopoo1=$this->db->query($lopoo)->result();

	foreach($lopoo1 as $lopoo1){
    $done=$this->db->query("insert into bill_summary_amount set grp_id=$newVAL,billsummary_id=$lopoo1->billsummary_id,amount=0,subproject_id=$projectID,sub_sub_project_id=$SubProjectID");
	}
	if($done){
		echo 1;
	}else{
		echo 0;
	}
	
	}
public function add_amount_billsummary(){

extract($_POST);
//projectID
///SubProjectID
$done=$this->db->query("update bill_summary_amount set amount=$amount where bs_id=$psid");
if($done){
	echo 1;
}else{
	echo 0;
}

}


///////////////////////////////////////////////////////////////////////////
/*
public function add_amount_billsummary(){

extract($_POST);
$done=$this->db->query("insert into bill_summary_amount set billsummary_id=$id,amount=$amount");
if($done){
	echo 1;
}else{
	echo 0;
}

}
*/

public function delete_amount_billsummary(){

	extract($_POST);
	$done=$this->db->query("delete from bill_summary_amount where bs_id=$id");
	if($done){
		echo 1;
	}else{
		echo 0;
	}
	
	
	}


	
	
	
	
	
	
	///////////////////////////////////////////////////
	public function ppms_bill_category()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_bill_category');
		$this->load->view('footer');
	}
	public function edit_ppms_ipc($id)
	{
		extract($_POST);
		error_reporting(0);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		////echo $id;
		///exit;
		$this->load->view('ppms/edit_ppms_ipc',$data);
		$this->load->view('footer');
	}

	public function edit_sub_projects($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/edit_sub_projects',$data);
		$this->load->view('footer');
	}
	//////////////////////////////////////////////////////////////
	public function ppms_sub_projects_detail()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_sub_projects_detail');
		$this->load->view('footer');
	}
	public function edit_sub_projects_detail($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/edit_sub_projects',$data);
		$this->load->view('footer');
	}

	/////////////////////Project Activity////////////////
	public function ppms_sub_projects_acivity()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_sub_projects_activity');
		$this->load->view('footer');
	}
	public function edit_sub_projects_activity($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/edit_ppms_subproject_activity',$data);
		$this->load->view('footer');
	}
	public function new_ipc_detail_popup($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["id"]=$id;
		$this->load->view('ppms/new_ipc_detail_popup',$data);
		$this->load->view('footer');
	}
	
	public function update_sub_project_activity()
	{
		extract($_POST);
        $update="update ppms_project_activity set project_id=$project_id,project_activity_startdate='$start_date',project_activity_enddate='$end_date',project_activity_name='$activity_name',project_activity_text='$activity_detail',project_planned='$project_planned',project_achieved='$project_achieved',suggestion_text='$activity_suggestion',
		activity_amount=$activity_amount,status_id=$status_ids,planned_unit='$planned_unit',achieved_unit='$achieved_unit',subproject_id=$sub_project_id where project_activity_id=$project_activity_id ";
        $this->db->query($update);
        redirect(base_url('Welcome/ppms_sub_projects_acivity'));
	}
	///////////////////////////edit project activity///////////
	
	public function update_project_activity()
	{
		extract($_POST);
        $update="update ppms_project_activity set project_id=$project_id,project_activity_startdate='$start_date',project_activity_enddate='$end_date', project_activity_name='$activity_name',project_activity_text='$activity_detail',project_planned='$project_planned',project_achieved='$project_achieved' where project_activity_id=$project_activity_id";
        $this->db->query($update);
        redirect(base_url('Welcome/ppms_sub_projects_acivity'));
	}
	//////////////////////////////Projects Assigned///////////
	public function ppms_sub_projects_assign()
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$this->load->view('ppms/ppms_sub_projects_assign');
		$this->load->view('footer');
	}
	public function edit_sub_projects_assign($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('ppms/edit_ppms_subproject_assign',$data);
		$this->load->view('footer');
	}
	

	public function update_sub_project_assign()
	{
		extract($_POST);
         echo $update1="update ppms_subproject_assign set subproject_id=$subproject_id,subproject_assign_date='$assign_date',contractor_id=$contractor_id,subproject_assign_status=$status_id where subproject_assign_id=$subproject_assign_id";
        $update11=$this->db->query($update1);
        if($update11){


        redirect(base_url('Welcome/edit_sub_projects_assign/'.$subproject_assign_id));
         }
		}
		//////////////////////////Password Changed///////////////////////
		public function password_changed() {
			extract( $_POST );
			$this->load->view('header');
			$this->load->view( 'menu' );
			$this->load->view('password_changed');
			$this->load->view('footer' );
		  }
		  public function update_password() {
			extract( $_POST );
			$uid=$this->session->userdata('userid');
			$passwords = md5( $password );
			$done = $this->db->query( "update user_new set user_password='$passwords'
			where user_id=$uid" );
			if ( $done ) {
			  echo "<script>";
			  echo "alert('Password is Changed')";
			  echo "</script>";
			  $msgee = "Password is Changed";
			  $this->session->set_flashdata( 'msg', $msgee );
			  redirect( base_url( 'Welcome/password_changed' ) );
			}
		
		  }
//////////////////////////////Projects Assigned///////////
public function ppms_ipac()
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$this->load->view('ppms/ppms_ipac');
	$this->load->view('footer');
}
public function edit_ipac($id)
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$data["id"]=$id;
	$this->load->view('ppms/edit_ipac',$data);
	$this->load->view('footer');
}

public function delete_file_ppms_edit(){
	extract($_POST);
	 $filee="delete FROM ppms_ipac_file where ipac_file_id=$id";
	 $filee=$this->db->query($filee);
	if($filee){
		echo 1;
	}else{
		echo 0;
	}

}
///////////////////////////////////////////
public function update_ipac($id){
extract($_POST);
	///error_reporting(E_ALL);
	$uid=$this->session->userdata('userid');
	$empID=$this->session->userdata('empid');
////////////////////////////////////////////////////////////

	$ipac_amount420 = $this->input->post('ipac_amount420');

$done=$this->db->query("update ppms_ipac set subproject_id=$sub_project_id,ipac_amount=$ipac_amount420,ipa_amount=$ipc_amount,
	ipac_submitted_date='$submitted_date',ipc_no='$ipc_no',certificate_type='$certificate_type' where ipac_id=$id");	
////////////////////////////////////////////////////////////////////////////////////////

$done=$this->db->query("UPDATE `ppms_ipac_remarks`
SET ipac_remark='$remarks_new'
WHERE ipac_id = $id
ORDER BY ipac_remarks_id asc
LIMIT 1");

extract($_POST);
			  //////////////////////////////////////////////////////////
			  //echo $countss = count($filename);
			  $data = [];

   

		  $count = count($_FILES['files']['name']);
		
			
		
			  for($i=0;$i<$count;$i++){
		
			
		
				if(!empty($_FILES['files']['name'][$i])){
		
			
		
				  $_FILES['file']['name'] = $_FILES['files']['name'][$i];
		
				  $_FILES['file']['type'] = $_FILES['files']['type'][$i];
		
				  $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
		
				  $_FILES['file']['error'] = $_FILES['files']['error'][$i];
		
				  $_FILES['file']['size'] = $_FILES['files']['size'][$i];
		
		  
		
				  $config['upload_path'] = 'img/upload_files/'; 
		
				  $config['allowed_types'] = 'jpg|jpeg|png|gif';
		
				  $config['max_size'] = '5000';
		
				  $config['file_name'] = $_FILES['files']['name'][$i];
		
		   
		
				  $this->load->library('upload',$config); 
		
			
		
				  if($this->upload->do_upload('file')){
		
					$uploadData = $this->upload->data();
		
					$insert_image = $uploadData['file_name'];
		
					echo $donee="insert into ppms_ipac_file set ipac_id=$id,ipac_file_url='$insert_image',
					ipac_file_name='$insert_image',ipac_user_id=$empID,file_name='$filename[$i]'";
			        $done=$this->db->query($donee);

		
					//$data['totalFiles'][] = $filename;
		
				  }
		
				}
		
		   
		
			  }
		
		   
		
			 
		
		   
			 
	  ///////////////////////////////////////////////////////////////
		if($done){
			echo "<script>alert('Record Inserted Successfully!')</script>";
			$this->session->set_flashdata('msg','Record Saved Successfully!!');
		redirect(base_url('Welcome/ppms_ipac'));
			}






}

//////////////////////////////////////////////////


public function insert_ipac(){

	extract($_POST);
	///error_reporting(E_ALL);
	$uid=$this->session->userdata('userid');
	$empID=$this->session->userdata('empid');
////////////////////////////////////////////////////////////

	$orgID=$this->db->query("SELECT organization_id
	FROM emp 
	WHERE emp_id=$empID")->row();
	$orgid=$orgID->organization_id;

/////////////////////////////////////////////////////////
	$ipac_amount420 = $this->input->post('ipac_amount420');

	//echo $ipac_amount1;
	//echo "<hr>";
	 $ipac_amount420;
	///echo "sid".$sid_tot1;
	//$this->load->library('upload');
	///$done=$this->db->query("select * from ppms_ipac where subproject_id=$project_id and contractor_id=$contractor_id")->row();
		//if($done){
	//$done=$this->db->query("update ppms_subproject_detail set city_id=$city_id,start_date='$start_date',end_date='$end_date',subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
		//}else{
			////////ipac//////////////insertion code here//////////
		$done=$this->db->query("insert into ppms_ipac set subproject_id=$sub_project_id,ipac_amount=$ipac_amount420,ipa_amount=$ipc_amount,
		ipac_submitted_date='$submitted_date',ipc_no='$ipc_no',certificate_type='$certificate_type'");	
		//}
		$last_id = $this->db->insert_id();
//////echo $this->db->last_query();,sub_sub_project_id=$sub_sub_project_id
/////////////////////////////////////////////////////////////////////////

	$done=$this->db->query("insert into ppms_ipac_remarks set ipac_id=$last_id,ipac_remark='$remarks_new',
			ipac_remark_date='$submitted_date',ipac_remark_userid=$empID");

			$doneeee="insert into ppms_ipac_forward set status_id=0,ipac_id=$last_id,ipac_forward_date='$submitted_date',organization_id=$orgid,flag_id=1,user_id=$empID";
			$done=$this->db->query($doneeee);	


///////////////////////bill summary amount/////////////////////////////////////////////////

	/*	$x=0;
		foreach($billsummary_amount as $billsummary_amount){
			if($billsummary_amount >=1){
			$doneeee="insert into ppms_ipc_billsummary set billsummary_id=$billsummary_id[$x],ipc_id=$last_id,ipc_bs_amount=$billsummary_amount";
			$done=$this->db->query($doneeee);
			}	
$x++;

		}
		*/
		
		///echo $this->db->last_query();
		///exit;
		///////////////Single File uploading////////////

		/*$config['upload_path'] = 'img/upload_files/';
		$config['file_name'] = $_FILES["attach_file"]['name'];
		$file_picture = $config['upload_path'] . $config['file_name'];
		$config['overwrite'] = TRUE;
		$config['allowed_types'] = '*';
		$this->upload->initialize($config);
		
		if ($this->upload->do_upload("attach_file")) {
			$data_upload = $this->upload->data();
			$last_id = $this->db->insert_id();
			$fileName=$config['file_name'];
		   echo $donee="insert into ppms_ipac_file set ipac_id=$last_id,ipac_file_url='$file_picture',
			ipac_file_name='$fileName',ipac_user_id=1";
	
			$done=$this->db->query($donee);
			 }	
			 */
			//exit;
			///////////////////////Multiple files Uploading//////////////////

			/*if ( sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1 ) {

				$query_files = false;
				$arr = array();
				
				   $config = array(
				  'upload_path' => 'img/upload_files/',
				  'allowed_types' => 'gif|jpeg|jpg|png|doc|docx|pdf|xlsx|csv|xls|ppt|pptx|zip',
				  'overwrite' => 1,
				  //'file_size' => '10000',
				);
		 
				$this->load->library( 'upload', $config );
		  
				$imagesz = array();
				$files = $_FILES['images'];
		  
				foreach ( $files['name'] as $key => $image ) {
		  
				  $_FILES[ 'images[]' ][ 'name' ] = $files[ 'name' ][ $key ];
				  $_FILES[ 'images[]' ][ 'type' ] = $files[ 'type' ][ $key ];
				  $_FILES[ 'images[]' ][ 'tmp_name' ] = $files[ 'tmp_name' ][ $key ];
				  $_FILES[ 'images[]' ][ 'error' ] = $files[ 'error' ][ $key ];
				  $_FILES[ 'images[]' ][ 'size' ] = $files[ 'size' ][ $key ];
		  
				  echo $fileName = $image;
				  echo "<br>";
		  
				  $imagesz[] = $fileName;
		  
				  $config[ 'file_name' ] = $fileName;
		  
				  $this->upload->initialize( $config );
		  
				  if ( $this->upload->do_upload( 'images[]' ) ) {
					$pic_data = $this->upload->data();
		  
					$insert_image = $pic_data[ 'file_name' ];
		  
					echo $donee="insert into ppms_ipac_file set ipac_id=$last_id,ipac_file_url='$insert_image',
					ipac_file_name='$insert_image',ipac_user_id=$empID";
			        $done=$this->db->query($donee);

				  }
				  
				}
			  }*/


			  extract($_POST);
			  //////////////////////////////////////////////////////////
			  //echo $countss = count($filename);
			  $data = [];

   

		  $count = count($_FILES['files']['name']);
		
			
		
			  for($i=0;$i<$count;$i++){
		
			
		
				if(!empty($_FILES['files']['name'][$i])){
		
			
		
				  $_FILES['file']['name'] = $_FILES['files']['name'][$i];
		
				  $_FILES['file']['type'] = $_FILES['files']['type'][$i];
		
				  $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
		
				  $_FILES['file']['error'] = $_FILES['files']['error'][$i];
		
				  $_FILES['file']['size'] = $_FILES['files']['size'][$i];
		
		  
		
				  $config['upload_path'] = 'img/upload_files/'; 
		
				  $config['allowed_types'] = 'jpg|jpeg|png|gif';
		
				  $config['max_size'] = '5000';
		
				  $config['file_name'] = $_FILES['files']['name'][$i];
		
		   
		
				  $this->load->library('upload',$config); 
		
			
		
				  if($this->upload->do_upload('file')){
		
					$uploadData = $this->upload->data();
		
					$insert_image = $uploadData['file_name'];
		
					echo $donee="insert into ppms_ipac_file set ipac_id=$last_id,ipac_file_url='$insert_image',
					ipac_file_name='$insert_image',ipac_user_id=$empID,file_name='$filename[$i]'";
			        $done=$this->db->query($donee);

		
					//$data['totalFiles'][] = $filename;
		
				  }
		
				}
		
		   
		
			  }
		
		   ///////////////////////////sms integration/////////////////////////
		   
		   
		   /////////////////////sms integration///////////////////////////
		   $this->db->from('hr_ipc_sms');
		   $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
		   $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
		   
		   $this->db->where('hr_ipc_sms.org_id', $orgid);
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
						   $complaint_user_msg = "Dear ".$sms->designation_name." New IPC is Submited. The No of IPC is:  ".$ipc_no;
						   //echo $date;exit;
						   /*$number_list = '3335965225,3005888936,3005888936,3313536909,3335200071,3005859786,3005930021,3369222280,3429780078,3049002589,3355531565,3339267672,3329230940,3339266708,3009393343,3448960628,
								   3456897453,3005915005,3005967076,3155068666,3471195505,3459373729,3453992590,3349074118,3339116396,3009016466,3455255310,3335012044,3339671723,3459060134,3149774287,3219337133,
								   3345424030,3005963868,3349133760,3459193545,3456012210,3449859833,3339701670,3139209052,3035252162,3339293263,3152244336,3479595954,3325897557,3135660004,3459582423,3005879479,
								   3073983023,938221205,3005914682,3459357779,3009801249,3345783237,3345120567,3339656166,3469402575,3339316062,3160190451,03318221355,034585816293459023880,3219054021,3469333775,
								   3339130956,3119490820,3059121833,3459164665';*/
								   
						   //echo $number_list = $mobileNumber1;	
		   
		   
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
						   //echo "<pre>";
						   //echo "<br>REQUEST:\n" . htmlentities($client->__getLastRequest()) . "\n"; 
					   //	print_r($resultBulkSMS);
					   
					   //exit;
		
			 
		   }
		   
			 
	  ///////////////////////////////////////////////////////////////
		if($done){
			echo "<script>alert('Record Inserted Successfully!')</script>";
			$this->session->set_flashdata('msg','Record Saved Successfully!!');
		redirect(base_url('Welcome/ppms_ipac'));
			}
			


}

////////////////////////////////Project IPAC Forward/////////////////////

//////////////////////////////Projects Assigned///////////
public function ipac_forward($id)
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$data["id"]=$id;
	$this->load->view('ppms/ipac_forward',$data);
	$this->load->view('footer');
}
public function edit_ipac_forward($id)
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$data["id"]=$id;
	$this->load->view('ppms/edit_ipac_forward',$data);
	$this->load->view('footer');
}
public function payment_certificat($id)
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$data["id"]=$id;
	$this->load->view('ppms/payment_certificat',$data);
	$this->load->view('footer');
}
//////////////////////////IPAC Detail///////////////////

public function display_ipc_detail(){

	extract($_POST);
	//echo $sectors_id;
	//exit;
	$data['sectors_id']=$sectors_id;
	$data['project_id']=$project_id;
	$data['sub_project_id']=$sub_project_id;
	$data['certificate_type']=$certificate_type;
	$this->load->view('header');
	$this->load->view('menu');
	
	$this->load->view('ppms/display_ipc_detail',$data);
	$this->load->view('footer');


}


///////////////////////////////////////////////
public function ipac_detail()
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$this->load->view('ppms/ipac_detail');
	$this->load->view('footer');
}
public function add_item($id=NULL)
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$data["id"]=$id;
	$this->load->view('general/add_item',$data);
	$this->load->view('footer');
}
public function edit_item($id)
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$data["id"]=$id;
	$this->load->view('general/edit_item',$data);
	$this->load->view('footer');
}
public function item_ipc_record(){

	
		extract($_POST);
        $tdate=date('Y-m-d');
	////////////////////////////////////////////////////////
    if(!empty($_POST['item_id'])) {
		$i=0;
		foreach($_POST['item_id'] as $oid){
			$done=$this->db->query("select * from ipc_items where item_id=$oid and ipc_id=$ipac_id")->row();
			if($done){

			}else{
		$run = $this->db->query( "insert into ipc_items set item_id=$oid,ipc_id=$ipac_id");
			}
			$i++;
			//echo $this->db->last_query();
		}
		
	}
	if($run){
		redirect(base_url('Welcome/new_ipc_detail_popup/').$ipac_id);
			}

}
/////////////////////////////////////////////////////

public function pcp()
{
	extract($_POST);
	error_reporting(0);
	$this->load->view('header');
	$this->load->view('menu');
	$this->load->view('pcp/body');
	$this->load->view('footer');
}

public function diplay_dashborad($id){
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$data['id']=$id;
	$this->load->view('pcp/diplay_dashborad',$data);
	$this->load->view('footer');

}
public function change_date(){
	extract($_POST);
	$doneCheck=$this->db->query("select * from ppms_ipac_forward where ipac_id=$ipcid order by ipac_forward_id asc limit 1")->row();

	if($doneCheck->ipac_forward_id==$id){
	$done=$this->db->query("update ppms_ipac set ipac_submitted_date='$fdate' where ipac_id=$ipcid");
	$done=$this->db->query("update ppms_ipac_forward set ipac_forward_date='$fdate' where ipac_forward_id=$id");
	}else{
	$done=$this->db->query("update ppms_ipac_forward set ipac_forward_date='$fdate' where ipac_forward_id=$id");
    }
	if($done==1){
		echo 1;
	}else{
		echo 0;
	}



}
//////////////////////////////////////////////////////
public function more_file_uploading(){
	$empID=$this->session->userdata('empid');
	extract($_POST);

	$this->load->library('upload');
	$config['upload_path'] = 'img/upload_files/';
	$config['file_name'] = $_FILES["Pict_upload"]['name'];
	$file_picture = $config['upload_path'] . $config['file_name'];
	$config['overwrite'] = TRUE;
	$config['allowed_types'] = '*';
	$this->upload->initialize($config);
	
	if ($this->upload->do_upload("Pict_upload")) {
		$data_upload = $this->upload->data();
		echo $insert_image = $config['file_name'];
       echo $donee="insert into ppms_ipac_file set ipac_id=$ipc_id,ipac_file_url='$insert_image',
		ipac_file_name='$insert_image',ipac_user_id=$empID,file_name='$file_name'";
         $done=$this->db->query($donee);
		//exit;
		
		
		

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

	}
	if($done){
		redirect(base_url('Welcome/new_ipc_detail_popup/'.$ipc_id));
			}

}

////////////////////////////////remarks with file uploading///////////////
public function remarks_file_uploading(){
	$empID=$this->session->userdata('empid');
	extract($_POST);
$tdate=date('Y-m-d');
	$this->load->library('upload');
	$config['upload_path'] = 'img/upload_files/';
	$config['file_name'] = $_FILES["Pict_upload"]['name'];
	$file_picture = $config['upload_path'] . $config['file_name'];
	$config['overwrite'] = TRUE;
	$config['allowed_types'] = '*';
	$this->upload->initialize($config);
	
	if ($this->upload->do_upload("Pict_upload")) {
		$data_upload = $this->upload->data();
		 $insert_image = $config['file_name'];
		 
      
		//exit;
		$done=$this->db->query("insert into ppms_ipac_remarks set ipac_id=$ipc_id,ipac_remark='$remarks',ipac_remark_date='$tdate',ipac_remark_userid=$empID");
		$insertId = $this->db->insert_id();
		
		 $donee="insert into ppms_ipac_file set ipac_id=$ipc_id,ipac_file_url='$insert_image',
		ipac_file_name='$insert_image',ipac_user_id=$empID,file_name='$file_name',ipac_remarks_id=$insertId";
         $done=$this->db->query($donee);
		
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
}else{

	$done=$this->db->query("insert into ppms_ipac_remarks set ipac_id=$ipc_id,ipac_remark='$remarks',ipac_remark_date='$tdate',ipac_remark_userid=$empID");	

	}
	if($done){
		redirect(base_url('Welcome/new_ipc_detail_popup/'.$ipc_id));
			}

}
public function insert_amt(){
extract($_POST);
$doneCheck="select * from ppms_ipc_billsummary where billsummary_id=$sid";
$doneCheck1=$this->db->query($doneCheck)->row();
if($doneCheck1){
	$doneeee="update ppms_ipc_billsummary set ipc_bs_amount=$amt where billsummary_id=$sid";
	$done=$this->db->query($doneeee);
}else{
	$doneeee="insert into ppms_ipc_billsummary set billsummary_id=$sid,ipc_id=$ipcid,ipc_bs_amount=$amt,subproject_id=$sprojectID,sub_subproject_id=$subprojectID";
	$done=$this->db->query($doneeee);
}
	if($done){
		$this->session->set_userdata('bilo', 420);
	echo 1;	
	}else{
		echo 0;
	}


}
////////////////////////////////////////////////////
/////////////////////////////database backup///////////////////////////////
function take_backup(){
	$this->load->dbutil();

		   $prefs = array(     
				   'format'      => 'sql',             
				   'filename'    => 'ppms.sql'
				 );
   
   
		   $backup =$this->dbutil->backup($prefs); 
   
		   $db_name = 'backup-on-'. date("d-m-Y-H-i-s") .'.sql';
		   $save = 'db_backups/'.$db_name;
   
		   $this->load->helper('file');
		   if(write_file($save, $backup)): 
		   
		   $backup_data = array(
		   'backup_file' => $db_name,
		   'backup_date' => date('Y-m-d'),
		   'user_id' => $this->session->userdata('empid')
		   );
		   
		   $this->db->insert('db_backups',$backup_data);
		   
		   $this->session->set_flashdata('msg','Backup has been taken');
		   redirect('Welcome/backups');
		   else:
		   redirect('Welcome/backups');
			 endif;
}	
function backups(){
	$this->load->view('header');
	$this->load->view('menu');	
	$data['db_backups'] = $this->db->get('db_backups')->result();
	$data['title'] = 'Database Backups';
	$data['page'] = 'backups';
	$this->load->view('backup',$data);
	$this->load->view('footer');
}
	


}