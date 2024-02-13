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
	$done=$this->db->query("update organization set organization_name='$organization_name'
	 where organization_id=$organization_id");	
		///}
			echo $this->db->last_query();
			
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
		if($done){
		redirect(base_url('Welcome/display_organization'));
			}

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
	
	public function update_sub_project()
	{
	extract($_POST);
        $update="update ppms_project_activity set project_id=$project_id,project_activity_startdate='$start_date',project_activity_enddate='$end_date',project_activity_name='$activity_name',project_activity_text='$activity_detail',project_planned='$project_planned',project_achieved='$project_achieved',suggestion_text='$activity_suggestion',
		activity_amount=$activity_amount,status_id=$status_ids where project_activity_id=$project_activity_id ";
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

public function insert_ipac(){

	extract($_POST);
	error_reporting(E_ALL);
	$uid=$this->session->userdata('userid');
	$empID=$this->session->userdata('empid');
	//$this->load->library('upload');
	///$done=$this->db->query("select * from ppms_ipac where subproject_id=$project_id and contractor_id=$contractor_id")->row();
		//if($done){
	//$done=$this->db->query("update ppms_subproject_detail set city_id=$city_id,start_date='$start_date',end_date='$end_date',subproject_name='$sub_project_name',subproject_percentage='$percentage',subproject_amount='$project_amount' where subproject_name='$sub_project_name'");	
		//}else{
			////////ipac//////////////insertion code here//////////
		$done=$this->db->query("insert into ppms_ipac set subproject_id=$project_id,ipac_amount='$ipac_amount',
		ipac_submitted_date='$submitted_date'");	
		//}
		$last_id = $this->db->insert_id();
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

			if ( sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1 ) {

				$query_files = false;
				$arr = array();
				///////////////////////////////////////////////////////////////////////////////////////////
				   $config = array(
				  'upload_path' => 'img/upload_files/',
				  'allowed_types' => 'gif|jpeg|jpg|png|doc|docx|pdf|xlsx|csv|xls|ppt|pptx|zip',
				  'overwrite' => 1,
				  //'file_size' => '10000',
				);
		  /////////////////////////////////////////////////////////////////////////////////////////////////
				$this->load->library( 'upload', $config );
		  
				$imagesz = array();
				$files = $_FILES['images'];
		  
				foreach ( $files['name'] as $key => $image ) {
		  
				  $_FILES[ 'images[]' ][ 'name' ] = $files[ 'name' ][ $key ];
				  $_FILES[ 'images[]' ][ 'type' ] = $files[ 'type' ][ $key ];
				  $_FILES[ 'images[]' ][ 'tmp_name' ] = $files[ 'tmp_name' ][ $key ];
				  $_FILES[ 'images[]' ][ 'error' ] = $files[ 'error' ][ $key ];
				  $_FILES[ 'images[]' ][ 'size' ] = $files[ 'size' ][ $key ];
		  
				  $fileName = $image;
		  
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
			  }
	  
			////////////////////////////////////////////////

			$done=$this->db->query("insert into ppms_ipac_remarks set ipac_id=$last_id,ipac_remark='$remarks',
			ipac_remark_date='$submitted_date',ipac_remark_userid=$empID");

			$doneeee="insert into ppms_ipac_forward set status_id=0,ipac_id=$last_id,ipac_forward_date='$submitted_date',organization_id=1,flag_id=1,user_id=$empID";
			$done=$this->db->query($doneeee);	
		///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
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
//////////////////////////IPAC Detail///////////////////


public function ipac_detail()
{
	extract($_POST);
	$this->load->view('header');
	$this->load->view('menu');
	$this->load->view('ppms/ipac_detail');
	$this->load->view('footer');
}

public function pcp()
{
	extract($_POST);
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


}