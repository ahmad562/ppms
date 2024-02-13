<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Enviroment extends CI_Controller {

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
		 	ob_start();
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

       public function sub_project_site()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/sub_project_site');
           $this->load->view('footer');
       }
       public function edit_sub_projects_site($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_sub_projects_site',$data);
           $this->load->view('footer');
       }
       
       public function enviroment_staff()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/enviroment_staff');
           $this->load->view('footer');
       }
       public function edit_enviroment_staff($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_enviroment_staff',$data);
           $this->load->view('footer');
       }
       ////////////////////////////////
       public function es_file()
       {
           extract($_POST);
           error_reporting(0);
           $this->load->view('header');
           $this->load->view('menu');
           ///$this->load->view('enviroment/es_file');
            $this->load->view('enviroment/es_file_testing');
           $this->load->view('footer');
       }


       public function es_file_old()
       {
           extract($_POST);
           error_reporting(0);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/es_file');
            ///$this->load->view('enviroment/es_file_testing');
           $this->load->view('footer');
       }
       public function es_remarks()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/es_remarks');
           $this->load->view('footer');
       }

       public function es_forward()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/es_forward');
           $this->load->view('footer');
       }
       ///////////////////////////////////
       
       public function construction_documents()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/construction_documents');
           $this->load->view('footer');
       }

       public function edit_construction_document($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_construction_document',$data);
           $this->load->view('footer');
       }

       public function saemr_master()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/saemr_master');
           $this->load->view('footer');
       }

       public function edit_saemr_master($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_saemr_master',$data);
           $this->load->view('footer');
       }

       public function saemr_detail()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/saemr_detail');
           $this->load->view('footer');
       }
       public function edit_saemr_detail($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_saemr_detail',$data);
           $this->load->view('footer');
       }
       
       public function construction_labtest()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/construction_labtest');
           $this->load->view('footer');
       }
       public function edit_construction_labtest($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_construction_labtest',$data);
           $this->load->view('footer');
       }
       public function external_monitoring_mater()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/external_monitoring_mater');
           $this->load->view('footer');
       }

       public function edit_monitoring_mater($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_monitoring_mater',$data);
           $this->load->view('footer');
       }
        public function display_detail()
       {
           extract($_POST);
           error_reporting(0);
           $this->load->view('header');
           $this->load->view('menu');
          // $this->load->view('enviroment/es_file');

          $this->load->view('enviroment/es_file_testing_detail');
           $this->load->view('footer');
       }

       public function external_monitoring_detail()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/external_monitoring_detail');
           $this->load->view('footer');
       }
       public function edit_monitoring_detail($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_monitoring_detail',$data);
           $this->load->view('footer');
       }
///////////////////////////////////////////////////////////
public function add_montiroing_detail(){
    extract($_POST);
    $done=$this->db->query("insert into ppms_es_externalmonitoring_detail 
set es_em_id=$master_id,es_emd_status=$status_id,sps_id=$site_id,es_file_remarks='$remarks',es_date='$doc_date'");
    $insertId = $this->db->insert_id();

if ( sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1 ) {

    $query_files = false;
    $arr = array();
    ///////////////////////////////////////////////////////////////////////////////////////////
       $config = array(
      'upload_path' => 'img/enviroment/',
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

        $insert_image = $pic_data['file_name'];

        $abc="insert into ppms_es_file_attached set attached_file='$insert_image',
        attached_date='$doc_date',id=$insertId,es_module_id=4";
        $done=$this->db->query($abc);	


      }
    }
      }



//echo $this->db->last_query();
///exit;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($done){
redirect(base_url('Enviroment/external_monitoring_detail'));
}

}
///////////////////////////////////////

public function edit_montiroing_detail(){
  extract($_POST);
if ( sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1 ) {

  $query_files = false;
  $arr = array();
  ///////////////////////////////////////////////////////////////////////////////////////////
     $config = array(
    'upload_path' => 'img/enviroment/',
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

      $insert_image = $pic_data['file_name'];

$done=$this->db->query("update ppms_es_externalmonitoring_detail 
set es_em_id=$master_id,es_emd_status=$status_id,sps_id=$site_id,
es_file_attached='$insert_image',es_file_remarks='$remarks',es_date='$doc_date' where es_emd_id=$id");	


    }else{

      $done=$this->db->query("update ppms_es_externalmonitoring_detail 
      set es_em_id=$master_id,es_emd_status=$status_id,sps_id=$site_id,
      es_file_remarks='$remarks',es_date='$doc_date' where es_emd_id=$id");	



    }
  }
    }



//echo $this->db->last_query();
///exit;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($done){
redirect(base_url('Enviroment/external_monitoring_detail'));
}

}
///////////////////////////////////////////////////////////////////////////////////
public function add_approval_doc(){
    extract($_POST);
    $done=$this->db->query("insert into ppms_es_approval_documents 
set es_aed_category_name='$cname',es_aed_status=$status_id,sps_id=$site_id,es_aed_document='$insert_image'");	
$insertId = $this->db->insert_id();

if ( sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1 ) {

    $query_files = false;
    $arr = array();
    ///////////////////////////////////////////////////////////////////////////////////////////
       $config = array(
      'upload_path' => 'img/approval/',
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


 $abc="insert into ppms_es_file_attached set attached_file='$insert_image',
        attached_date='$doc_date',id=$insertId,es_module_id=5";
        $done=$this->db->query($abc);	

      }
    }
      }



//echo $this->db->last_query();
//exit;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($done){
redirect(base_url('Enviroment/enviroment_app_doc'));
}

}   
////////////////////////////////////////////////////////////////////////

public function edit_approval_doc(){
  extract($_POST);
if ( sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1 ) {

  $query_files = false;
  $arr = array();
  ///////////////////////////////////////////////////////////////////////////////////////////
     $config = array(
    'upload_path' => 'img/approval/',
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

$done=$this->db->query("insert into ppms_es_approval_documents 
set es_aed_category_name='$cname',es_aed_status=$status_id,sps_id=$site_id,es_aed_document='$insert_image' where es_aed_id=$id");	


    }else{
      $done=$this->db->query("insert into ppms_es_approval_documents 
      set es_aed_category_name='$cname',es_aed_status=$status_id,sps_id=$site_id,es_aed_document='$insert_image' where es_aed_id=$id");	


    }



  }
    }



//echo $this->db->last_query();
//exit;
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
if($done){
redirect(base_url('Enviroment/construction_labtest'));
}

}     



/////////////////////////////////////////////////////

       public function enviroment_app_doc()
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $this->load->view('enviroment/enviroment_app_doc');
           $this->load->view('footer');
       }
       public function edit_enviroment_app_doc($id)
       {
           extract($_POST);
           $this->load->view('header');
           $this->load->view('menu');
           $data["id"]=$id;
           $this->load->view('enviroment/edit_enviroment_app_doc',$data);
           $this->load->view('footer');
       }
////////////////////////////////////////////////////////////////////////////
public function add_labtest(){
extract($_POST);
$done=$this->db->query("select * from ppms_es_construction_labtest where es_cit_name='$site_name'")->row();

//echo "kifayat";
	if($done){

	}else{
       
       $abcc="insert into ppms_es_construction_labtest set es_cit_document='$insert_image',es_cit_name='$site_name'
      ,es_cit_status=$status_id,es_cit_date='$doc_date',sps_id=$site_id,es_cit_remarks='$remarks'";
        $done=$this->db->query($abcc);
        $insertId = $this->db->insert_id();


        if (sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1) {
            ///echo "kifayat1";
            $query_files = false;
            $arr = array();
            ///////////////////////////////////////////////////////////////////////////////////////////
               $config = array(
              'upload_path' => 'img/lab/',
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
               /// echo "kifayat3";
               $insert_image = $pic_data['file_name'];    	
        $abc="insert into ppms_es_file_attached set attached_file='$insert_image',
        attached_date='$doc_date',id=$insertId,es_module_id=2";
        $done=$this->db->query($abc);	
        
              }
            }
			  }

	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Enviroment/construction_labtest'));
		}


    }
    /////////////////////////////////////////////////

    public function edit_labtest(){
      extract($_POST);
      
              if ( sizeof( $_FILES[ 'images' ][ 'name' ] ) >= 1 ) {
                  echo "kifayat1";
                  $query_files = false;
                  $arr = array();
                  ///////////////////////////////////////////////////////////////////////////////////////////
                     $config = array(
                    'upload_path' => 'img/lab/',
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
                      ///echo "kifayat3";
                      $insert_image = $pic_data[ 'file_name' ];
             $done1="update ppms_es_construction_labtest set es_cit_document='$insert_image',es_cit_name='$site_name'
            ,es_cit_status=$status_id,es_cit_date='$doc_date',sps_id=$site_id,es_cit_remarks='$remarks' where es_cit_id=$site_idsss";
               $done=$this->db->query($done1);	
              echo $this->db->last_query();
              if($done){
                redirect(base_url('Enviroment/construction_labtest'));
                  }


                    }else{
                     
                     $done1="update ppms_es_construction_labtest set es_cit_name='$site_name'
                      ,es_cit_status=$status_id,es_cit_date='$doc_date',sps_id=$site_id,es_cit_remarks='$remarks' where es_cit_id=$site_idsss";
                       $done=$this->db->query($done1);	
                       echo $this->db->last_query();
                       if($done){
                        redirect(base_url('Enviroment/construction_labtest'));
                          }
                    }

              }
            }
          
          //echo $this->db->last_query();
          //exit;
        ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
       
      
      
          }
      

//////////////////////////add construction//////////
public function add_construction(){
    extract($_POST);
extract($_POST);
$done=$this->db->query("select * from ppms_es_construction_doc where es_cd_title='$es_cd_title'")->row();
	if($done){

	}else{
    $abc="insert into ppms_es_construction_doc set es_cd_status=$status_id,es_cd_date='$doc_date',sps_id=$site_id,es_cd_title='$es_cd_title'";
    $done=$this->db->query($abc);	
    $insertId = $this->db->insert_id();
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
               
                $abc="insert into ppms_es_file_attached set attached_file='$insert_image',
                attached_date='$doc_date',id=$insertId,es_module_id=1";
                $done=$this->db->query($abc);	

              }
            }
                
			  }

	}
		
		//echo $this->db->last_query();
		//exit;
	///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
	if($done){
	redirect(base_url('Enviroment/construction_documents'));
		}
    }
    ////////////////////////////////////////////////////////////////////////////////////////////

    public function edit_construction(){
      extract($_POST);
  extract($_POST);
 
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
    $abc="update ppms_es_construction_doc set es_cd_document='$insert_image ',es_cd_status=$status_id,es_cd_date='$doc_date',sps_id=$site_id,es_cd_title='$es_cd_title' where es_cd_id=$id";
        
          $done=$this->db->query($abc);	
    
  
                }else{

                 
            $abc="update ppms_es_construction_doc set es_cd_status=$status_id,es_cd_date='$doc_date',sps_id=$site_id,es_cd_title='$es_cd_title' where es_cd_id=$id";
                      
                        $done=$this->db->query($abc);	

                }
              }
          }
  
    
      
      //echo $this->db->last_query();
      //exit;
    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
    if($done){
    redirect(base_url('Enviroment/construction_documents'));
      }
      }   
      
      public function lap()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('social/lap');
		$this->load->view('footer');
	}
	  public function ss_detail()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('social/ss_detail');
		$this->load->view('footer');
	}
	
	  public function dps()
	{
		$this->load->view('header');
		$this->load->view('menu');
		$this->load->view('social/dps');
		$this->load->view('footer');
	}
	
}