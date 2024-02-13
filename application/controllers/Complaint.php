<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Complaint extends CI_Controller {

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
		   error_reporting(0);
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
		error_reporting(E_ALL);
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
    

    public function cc()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/cc');
		$this->load->view('footer');
	}
    public function tier()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/tier');
		$this->load->view('footer');
	}

    public function source()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/source');
		$this->load->view('footer');
	}
    public function status()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/status');
		$this->load->view('footer');
	}

    public function zone()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/zone');
		$this->load->view('footer');
	}



	public function edit_cc($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_cc',$data);
		$this->load->view('footer');
	}



	public function edit_source($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_source',$data);
		$this->load->view('footer');
	}

public function UC()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/uc');
		$this->load->view('footer');
	}
	public function NC()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/nc');
		$this->load->view('footer');
	}
	public function l_detail()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/l_detail');
		$this->load->view('footer');
	}
	public function insert_uc()
	{
		extract($_POST);
	$done=$this->db->query("insert into grm_uc_tbl set uc_name='$uc_name',zone_id=$zone_id");
	redirect(base_url('complaint/uc'));
	}
	public function insert_nc()
	{
		extract($_POST);
	$done=$this->db->query("insert into grm_nc_tbl set nc_name='$nc_name',uc_id=$uc_id,area='$area'");
	redirect(base_url('complaint/nc'));
	}
	public function update_uc()
	{
		extract($_POST);
	$done=$this->db->query("update grm_uc_tbl set uc_name='$uc_name',zone_id=$zone_id where uc_id=$uc_id");
	redirect(base_url('complaint/uc'));
	}
	public function update_nc()
	{
		extract($_POST);
	$done=$this->db->query("update grm_nc_tbl set nc_name='$nc_name',uc_id=$uc_id,area='$area' where nc_id=$nc_id");
	redirect(base_url('complaint/nc'));
	}
	public function edit_uc($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_uc',$data);
		$this->load->view('footer');
	}
	public function edit_nc($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_nc',$data);
		$this->load->view('footer');
	}
	public function edit_Status($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_Status',$data);
		$this->load->view('footer');
	}



	public function edit_zone($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_zone',$data);
		$this->load->view('footer');
	}

public function edit_tier($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_tier',$data);
		$this->load->view('footer');
	}
	public function modal(){
		$this->load->view('complaint/modal1');
	}
	 public function complaint()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/complaint');
		$this->load->view('footer');
	}
	public function complaint_tier()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/complaint_tier');
		$this->load->view('footer');
	}
    public function tier_one()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/tier_one');
		$this->load->view('footer');
	}
	public function tier_two()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/tier_two');
		$this->load->view('footer');
	}
	public function tier_three()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/tier_three');
		$this->load->view('footer');
	}
    public function complaint_list()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/complaint_list');
		$this->load->view('footer');
	}
public function complaint_insert()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into gre_applicant set applicant_name='$applicant_name', applicant_address='$applicant_address',applicant_mobile='$applicant_mobile',applicant_cnic='$applicant_cnic'");	
	$id = $this->db->insert_id();
	$done1=$this->db->query("insert into gre_complaint_detail set applicant_id=$id, complaint_date='$complaint_date',complaint_category_id=$cc_id,source_id=$source_id,sub_project_id=$subproject_id,tehsil_id=$tehsil_id,complaint_title='$complaint_title',complaint_detail='$complaint_detail',tier_id=1,status_id=1");
	redirect(base_url('complaint/complaint_list'));
	}
	public function edit_complaint($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_complaint',$data);
		$this->load->view('footer');
	}

	public function complaint_update()
	{
		extract($_POST);
	
	$done=$this->db->query("update gre_applicant set applicant_name='$applicant_name', applicant_address='$applicant_address',applicant_mobile='$applicant_mobile',applicant_cnic='$applicant_cnic' where applicant_id=$applicant_id");	

	$done1=$this->db->query("update gre_complaint_detail set applicant_id=$applicant_id, complaint_date='$complaint_date',complaint_category_id=$cc_id,source_id=$source_id,sub_project_id=$subproject_id,tehsil_id=$tehsil_id,complaint_title='$complaint_title',complaint_detail='$complaint_detail',tier_id=1,status_id=1 where complaint_detail_id=$complaint_detail_id");
	redirect(base_url('complaint/complaint_list'));
	}

	public function sir1()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/sir1');
		$this->load->view('footer');
	}
	public function gender()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/gender');
		$this->load->view('footer');
	}

	public function insert_gender()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_gender_tbl set gender_name='$gender_name'");	

	redirect(base_url('complaint/gender'));
	}

	public function edit_gender($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_gender',$data);
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
		$this->load->view('complaint/service_type');
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
		$this->load->view('complaint/edit_service_type',$data);
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
		$this->load->view('complaint/service_designation');
		$this->load->view('footer');
	}

	public function insert_service_designation()
	{
		extract($_POST);
	
	$done=$this->db->query("insert into ppms_service_designation_tbl set std_id=$std_id,organization_id=$organization_id,std_position='$std_position',d_id=$sd_id");	

	redirect(base_url('complaint/service_designation'));
	}

	public function edit_service_designation($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_service_designation',$data);
		$this->load->view('footer');
	}

	public function update_service_designation()
	{
		extract($_POST);
	
	$done=$this->db->query("update ppms_service_designation_tbl set std_id=$std_id,organization_id=$organization_id,std_position='$std_position',d_id=$sd_id where sd_id=$sd_id");	

	redirect(base_url('complaint/service_designation'));
	}

	public function service()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/service');
		$this->load->view('footer');
	}
	public function sidebar()
	{

		$this->load->view('complaint/sidebar2');
		$this->load->view('complaint/header');
		$this->load->view('complaint/section');
		$this->load->view('complaint/footer');

		
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
		$this->load->view('complaint/edit_service',$data);
		$this->load->view('footer');
	} 
    public function ss_detail($id)
	{
		extract($_POST);
        $this->load->view('header');
        $this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('Complaint/ss_detail',$data);
		$this->load->view('footer');
	}
	public function update_service()
	{
		extract($_POST);
	
	$done=$this->db->query("update ppms_service_tbl set s_fullname='$full_name',emp_no='$emp_no',s_contract_award_date='$cad',s_contract_end_date='$ced',s_contact_no='$contact_no',d_id=$sd_id,organization_id=$organization_id,cnic='$cnic',gender_id='$gender_id',salary='$salary',std_id='$std_id' where service_id=$service_id");	

	redirect(base_url('complaint/service'));
	}

	public function boxes()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/boxes');
		$this->load->view('footer');
	}
	
	public function larp()
	{
	    extract($_POST);
	    $data["category_id"]=$category_id;
		$this->load->view('complaint/larp',$data);	
	}
	public function insert_larp()
	{
    	extract($_POST);
    	$done=$this->db->query("insert into ppms_ss_document_detail set subproject_id=$subproject_id,project_id=$project_id,sector_id=$sector_id,site_id=$site_id,ss_doc_category='$category_id'");
	$last_id=$this->db->insert_id();
	// ss_doc_category=$category_id,
    
	
		$data = [];

   

		  $count = count($_FILES['files']['name']);
		
			
		
			  for($i=0;$i<$count;$i++){
		
			
		
				if(!empty($_FILES['files']['name'][$i])){
		
			
		
				  $_FILES['file']['name'] = $_FILES['files']['name'][$i];
		
				  $_FILES['file']['type'] = $_FILES['files']['type'][$i];
		
				  $_FILES['file']['tmp_name'] = $_FILES['files']['tmp_name'][$i];
		
				  $_FILES['file']['error'] = $_FILES['files']['error'][$i];
		
				  $_FILES['file']['size'] = $_FILES['files']['size'][$i];
		
		  
		
				  $config['upload_path'] = 'img/'; 
		
				  $config['allowed_types'] = 'jpg|jpeg|png|gif';
		
				  $config['max_size'] = '5000';
		
				  $config['file_name'] = $_FILES['files']['name'][$i];
		
		   
		
				  $this->load->library('upload',$config); 
		
			
		
				  if($this->upload->do_upload('file')){
		
					$uploadData = $this->upload->data();
		
					$insert_image = $uploadData['file_name'];
					
				}
		
		   $done1=$this->db->query("insert into ppms_ss_section set ss_doc_detail_id=$last_id,ss_section_name='$name[$i]',ss_section_date='$date[$i]',ss_section_remarks='$remarks[$i]',ss_section_file_upload='$insert_image'");
		
			  }	
	}
	
$y=0;
foreach ($add_land_record_description as $val) {
$done2=$this->db->query("insert into ppms_ss_land_detail set ss_land_description='$val',ss_total_area='$d_total_area[$y]',ss_total_land_cost='$d_total_land_cost[$y]',ss_total_no_of_dp='$total_no_of_dp[$y]',ss_doc_detail_id=$last_id");
	$y++;
}
$z=0;
foreach ($bor_tax_category as $val) {
$done2=$this->db->query("insert into ppms_land_taxes set land_taxes_category='$val',land_tax_name='$bor_tax_name[$z]',land_tax_percentage='$bor_tax_value[$z]',source_category='$bor_source_category[$z]',doc_id='$last_id'");
$done3=$this->db->query("insert into ppms_land_taxes set land_taxes_category='$ivs_tax_category[$z]',land_tax_name='$ivs_tax_name[$z]',land_tax_percentage='$ivs_tax_value[$z]',source_category='$ivs_source_category[$z]',doc_id=$last_id");

	$z++;

}

	redirect(base_url('complaint/boxes'));
}
public function ss()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/ss');
		$this->load->view('footer');
	}
	public function dp_detail()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/dp_detail');
		$this->load->view('footer');
	}
	public function insert_ss()
	{
		extract($_POST);
	$done=$this->db->query("insert into ppms_ss_db set ss_dp_fullname='$full_name',ss_dp_address='$address',ss_dp_fh='$fh_name',ss_dp_cnic='$cnic',city_id=$city_id,ss_gender_id='$gender_id',ss_phone='$phone'");
	$this->session->set_flashdata('msg','<i>'.'Record Saved Successfully!!'.'</i>');
	redirect(base_url('complaint/ss',$data));
	}
    public function edit_ss($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_ss',$data);
		$this->load->view('footer');
	}
	public function update_ss()
	{
		extract($_POST);
	$done=$this->db->query("update ppms_ss_db set ss_dp_fullname='$full_name',ss_dp_address='$address',ss_dp_fh='$fh_name',ss_dp_cnic='$cnic',city_id=$city_id where ss_dp_id=$ss_dp_id");
	redirect(base_url('complaint/dp_detail'));
	}
	public function attorney()
	{
	    extract($_POST);
	    $data["cnic"]=$cnic;
	    $data["attern"]=$attern;
		$this->load->view('complaint/attorney',$data);	
	}
	public function insert_dp_detail()
	{
		extract($_POST);
		if($parentt){
			$done=$this->db->query("insert ppms_dp_detail set dp_parent_id=$parentt,
		dp_id=$dp_id,subproject_id=$subproject_id,site_id=$site_id,status_id=$status_id");
		}else{
	$done=$this->db->query("insert ppms_dp_detail set dp_parent_id=0,
		dp_id=$dp_id,subproject_id=$subproject_id,site_id=$site_id,status_id=$status_id");
}
	//redirect(base_url('complaint/dp_detail'));
	}
	 public function edit_section($id)
	{
		extract($_POST);
        $this->load->view('header');
		$this->load->view('menu');
		$data["aid"]=$id;
		$this->load->view('complaint/edit_section',$data);
		$this->load->view('footer');
	}

	public function update_section()
	{
			$this->load->library('upload');
        $config['upload_path'] = 'img/attachment/';
        $config['file_name'] = $_FILES["files"]['name'];
        $insert_image = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        if($this->upload->do_upload("files")) {
		
					$insert_image = $uploadData['file_name'];
					$done1=$this->db->query("update ppms_ss_section set ss_section_name='$name',ss_section_date='$date',ss_section_remarks='$remarks',ss_section_file_upload='$insert_image' where ss_section_id=$ss_section_id");
				}else{
		
		   $done1=$this->db->query("update ppms_ss_section set ss_section_name='$name',ss_section_date='$date',ss_section_remarks='$remarks' where ss_section_id=$ss_section_id");
		}
		   redirect(base_url('complaint/ss_detail'));
	}
	public function add_larp_detail()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/add_larp_detail');
		$this->load->view('footer');
	}
	public function dp_load()
	{
		
		$this->load->view('complaint/dp_load');
		
	}
	public function get_project() { 
		extract($_POST);
		 $result1 = $this->db->query("select * from  ppms_project where sector_id=$id")->result();
			   echo "<option value=''>Select project</option>";
			   $i=1;
			   foreach($result1 as $result){
				   
				 echo "<option value='".$result->project_id."'>".$result->project_name."</option><br>";  
				$i++;   
			   }
		     
			   //echo json_encode($result);
			   
}
	public function get_subproject() { 
		extract($_POST);
		 $result1 = $this->db->query("select * from  ppms_subproject where project_id=$id")->result();
			   echo "<option value=''>Select Subproject</option>";
			   $i=1;
			   foreach($result1 as $result){
				   
				 echo "<option value='".$result->subproject_id."'>".$result->subproject_name."</option><br>";  
				$i++;   
			   }
		     
			   //echo json_encode($result);
			   
}
public function get_site() { 
		extract($_POST);
		 $result = $this->db->query("select * from  ppms_subproject_site where subproject_id=$id")->result();
			   echo "<option value=''>Select Site</option>";
			   foreach($result as $result){
				   
				 echo "<option value='".$result->sps_id."'>".$result->site_name."</option><br>";  
				   
				   
				   
			   }
		
}

public function get_description() { 
		extract($_POST);
		 $result = $this->db->query("select * from  ppms_ss_land_detail as psld,ppms_ss_document_detail as psdd where psdd.ss_doc_detail_id=psld.ss_doc_detail_id AND psdd.site_id=$site_id AND psdd.subproject_id=$subproject_id AND psdd.project_id=$project_id")->result();
		       echo $this->db->last_query();
			   echo "<option value=''>Select Site</option>";
			   foreach($result as $result){
				   
				 echo "<option value='".$result->ss_land_detail_id."'>".$result->ss_land_description."</option><br>";  
				   
				   
				   
			   }
		
			   //echo json_encode($result);
			   
}
public function insert_land_record()
	{
		extract($_POST);
		//echo $description_id;
     $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();
    $desc=$doc->ss_doc_detail_id;
   
  
	$done=$this->db->query("insert into ppms_ss_land_record set ss_totalqty='$total_area',ss_khasra_no='$khasra_no',ss_total_area_affected='$area_affected',ss_landtype_id=$land_type_id,ss_area_unit_id=$area_unit_id,ss_doc_detail_id=$desc,ss_lrecord_bor_unitrate='$bor_unit_rate',ss_lrecord_bor_totalamount='$bor_total_amount',ss_lrecord_borpayableamount='$bor_l_payable_amount',ss_lrecord_ivs_unitrate='$ivs_unit_rate',ss_lrecord_ivs_totalamount='$ivs_total_amount',ss_lrecord_ivspayableamount='$ivs_l_payable_amount',ss_dp_id=$ss_dp_id,ss_landdetail_id=$description_id");
	 echo $this->db->last_query();
	//redirect(base_url('complaint/add_larp_detail'));
	}
	public function update_land_record()
	{
		extract($_POST);
		//echo $description_id;
     $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();
    $desc=$doc->ss_doc_detail_id;
   
  
	$done=$this->db->query("update ppms_ss_land_record set ss_totalqty='$total_area',ss_khasra_no='$khasra_no',ss_total_area_affected='$area_affected',ss_landtype_id=$land_type_id,ss_area_unit_id=$area_unit_id,ss_doc_detail_id=$desc,ss_lrecord_bor_unitrate='$bor_unit_rate',ss_lrecord_bor_totalamount='$bor_total_amount',ss_lrecord_ivs_unitrate='$ivs_unit_rate',ss_lrecord_ivs_totalamount='$ivs_total_amount',ss_dp_id=$ss_dp_id where ss_lrecord_id=$lr_id");
	 echo $this->db->last_query();
	//redirect(base_url('complaint/add_larp_detail'));
	}
	public function insert_nonland_record()
	{
		extract($_POST);
		//echo $description_id;
     $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();
    $desc=$doc->ss_doc_detail_id;
   
  
	$done=$this->db->query("insert into ppms_ss_nonland_record set ss_nlrecord_totalqty='$nontotal_area',ss_nonlandtype_id=$nonland_type_id,ss_doc_detail_id=$desc,ss_nlrecord_borunitrate='$nonbor_unit_rate',ss_nlrecord_bortotalamount='$nonbor_total_amount',ss_nlrecord_ivsunitrate='$nonivs_unit_rate',ss_nlrecord_ivstotalamount='$nonivs_total_amount',ss_nlrecord_borpayableamount='$ss_nlrecord_borpayableamount',ss_nlrecord_ivspayableamount='$ss_nlrecord_ivspayableamount',ss_dp_id=$ss_dp_id,ss_landdetail_id=$description_id");
	 echo $this->db->last_query();
	//redirect(base_url('complaint/add_larp_detail'));
	}
	public function update_nonland_record()
	{
		extract($_POST);
		//echo $description_id;
     $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();
    $desc=$doc->ss_doc_detail_id;
   
  
	$done=$this->db->query("update ppms_ss_nonland_record set ss_nlrecord_totalqty='$nontotal_area',ss_nonlandtype_id=$nonland_type_id,ss_doc_detail_id=$desc,ss_nlrecord_borunitrate='$nonbor_unit_rate',ss_nlrecord_bortotalamount='$nonbor_total_amount',ss_nlrecord_ivsunitrate='$nonivs_unit_rate',ss_nlrecord_ivstotalamount='$nonivs_total_amount',ss_dp_id=$ss_dp_id,ss_landdetail_id=$description_id where ss_nlrecord_id=$n_lr_id");
	 echo $this->db->last_query();
	//redirect(base_url('complaint/add_larp_detail'));
	}

	public function insert_allowances()
	{
		extract($_POST);
		//echo $description_id;
     $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();
    $desc=$doc->ss_doc_detail_id;
   
  
	$done=$this->db->query("insert into ppms_ss_allowances_detail set severity_unit_amount='$severity_amount',severity_total_amount=$total_amount_s,ss_doc_detail_id=$desc,vulnerability_unit_amount='$vulnerability',vulnerability_total_amount='$total_amount_v',ss_allowances_borpayableamount='$ss_allowances_borpayableamount',ss_allowances_ivspayableamount='$ss_allowances_ivspayableamount',ss_dp_id=$ss_dp_id");
	 
	//redirect(base_url('complaint/add_larp_detail'));
	}
	public function update_allowances()
	{
		extract($_POST);
		//echo $description_id;
     $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();
    $desc=$doc->ss_doc_detail_id;
   
  
	$done=$this->db->query("update ppms_ss_allowances_detail set severity_unit_amount='$severity_amount',severity_total_amount=$total_amount_s,ss_doc_detail_id=$desc,vulnerability_unit_amount='$vulnerability',vulnerability_total_amount='$total_amount_v',ss_dp_id=$ss_dp_id where allowances_detail_id=$allowances_detail_id");
	 
	//redirect(base_url('complaint/add_larp_detail'));
	}
	public function insert_payment()
	{
		extract($_POST);
		  $cheque_no = $_POST["cheque_no"];
		  $payment_amount = $_POST["payment_amount"];
		  $date = $_POST["date"];
		  $bor_type_id = $_POST["bor_type_id"];
		  $status = $_POST["status"];
		  $ss_dp_id = $_POST["ss_dp_id"];
		  $description_id = $_POST["description_id"];
		  $file = $_FILES["file"];
		  // Validate and handle the file upload here
		  $targetDir = "img/cheques/";  // Specify your target directory for file uploads
		  $targetFile = $targetDir . basename($file["name"]);
				  // Move the uploaded file to the target directory
	if (move_uploaded_file($file["tmp_name"], $targetFile)) {
					  // Store other data in the database
			$file_path = $targetFile;  // Store the file path in the database
		//echo $description_id;
      $doc=$this->db->query("select ss_doc_detail_id from ppms_ss_land_detail where ss_land_detail_id=$description_id")->row();
    $desc=$doc->ss_doc_detail_id;
  
	$done=$this->db->query("insert into ppms_ss_dp_payment_detail set cheque_no='$cheque_no',paid_amount='$payment_amount',file='$file_path',payment_date='$date',ss_doc_detail_id=$desc,category_id=$bor_type_id, payment_status='$status',ss_dp_id=$ss_dp_id");
	 
	//redirect(base_url('complaint/add_larp_detail'));
	}
}
	public function load_desc()
	{
		extract($_POST);
		$data["ss_dp_id"]=$ss_dp_id;
		$data["description_id"]=$description_id;
		$this->load->view('complaint/load_desc',$data);
	}
	public function get_status()
	{
		extract($_POST);
		$data["status_id"]=$status_id;
		$data["dp_id"]=$dp_id;
		$this->load->view('complaint/filter_cnic',$data);
	}
	public function dp_list()
	{
		extract($_POST);
		$data["subproject_id"]=$subproject_id;
		$data["site_id"]=$site_id;
		$this->load->view('complaint/dp_list',$data);
	}
	public function dp_city_list()
	{
		extract($_POST);
		$data["subproject_id"]=$subproject_id;
		$data["site_id"]=$site_id;
		$data["city_id"]=$city_id;
		$this->load->view('complaint/dp_city_list',$data);
	}
	public function larp_detail()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/larp_detail');
		$this->load->view('footer');
	}
	public function all_dp_list()
	{
		extract($_POST);
		$this->load->view('complaint/all_dp_list');
	}
	public function assigned_dp_list()
	{
		extract($_POST);
		$this->load->view('complaint/assigned_dp_list');
	}
  public function assigned_city()
	{
		extract($_POST);
		$data["city_id"]=$city_id;
		$this->load->view('complaint/assigned_city',$data);
	}
	public function safeguard_report()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('complaint/safeguard_report');
		$this->load->view('footer');
	}
	public function larp_land_record()
	{
		extract($_POST);
		$data["description_id"]=$id;
		$this->load->view('complaint/larp_land_record',$data);
	}
	public function larp_detaill()
	{
	    extract($_POST);
	    $data["category_id"]=$category_id;
		$this->load->view('complaint/total_land',$data);	
	}
	public function total_land_table()
	{
		$this->load->view('complaint/total_land_table');	
	}
	public function load_land_detail()
	{
		$this->load->view('complaint/load_land_detail');	
	}
	public function all_city_dp()
	{
		extract($_POST);
		$data["city_id"]=$city_id;
		$this->load->view('complaint/all_city_dp',$data);
	}
	
}
