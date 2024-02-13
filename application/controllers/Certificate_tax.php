<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate_tax extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        $this->load->model('certificate_tax_model');
        $this->load->library('form_validation');
    }

    public function index()

    {
        $this->load->view('header');
        $this->load->view('menu');
        $data['certificate_tax'] = $this->certificate_tax_model->get_all_certificate_tax();
        $this->load->view('certificate_tax/view_certificate', $data);
        $this->load->view('footer');
    }
//////////////////////////////////////////////////////////////

public function tax_detail(){
    $this->load->view('header');
    $this->load->view('menu');
    
    $this->load->view('certificate_tax/tax_detail_sameer');
    $this->load->view('footer');
}

public function apply_taxes_pmu_ciu($id){
    $this->load->view('header');
    $this->load->view('menu');
    $data["id"]=$id;
    $this->load->view('certificate_tax/apply_taxes_pmu_ciu',$data);
    $this->load->view('footer');
}

public function taxes_report($id){
    $this->load->view('header');
    $this->load->view('menu');
    $data["id"]=$id;
    $this->load->view('certificate_tax/taxes_report',$data);
    $this->load->view('footer');
}

public function taxes_report_open($id){
  error_reporting(0);
    $data["id"]=$id;
    $this->load->view('certificate_tax/taxes_report_open',$data);
    
}

public function delete_certificate_tax()
	{
		extract($_POST);
        $done=$this->db->query("delete from ppms_gross_payment where ppms_payment_id=$id");
        if($done){
            echo 1;
        }else{
            echo 0;
        }
	}

public function create_tax()
    {
      
        $data = array(
           
            'ctp_option' => $this->input->post('ctp_attribute')
            
        );
//print_r($data);
//exit;
        
        $done=$this->db->insert('certificate_tax', $data);
        if($done){
            redirect( base_url() . 'Certificate_tax');

        }


    }







///////////////////////////////////////////////////////////

    public function add_certificate(){
        $this->load->view('header');
        $this->load->view('menu');
        
        $this->load->view('certificate_tax/add_certificate');
        $this->load->view('footer');
    }
    public function create()
    {
      
        $data = array(
            'ctp_flag' => $this->input->post('ctp_flag'),
            'ctp_option' => $this->input->post('ctp_option'),
            'ctp_attribute' => $this->input->post('ctp_attribute'),
            'add_less' => $this->input->post('add_less'),
            'dpr' => $this->input->post('dpr')
            // Add more fields as required
        );
//print_r($data);
//exit;
        
        // Call a method in your model to add the data to the database
        ///$this->Certificate_tax_model->set_certificate_tax($data);
        $done=$this->db->insert('certificate_tax', $data);
        if($done){
            redirect( base_url() . 'Certificate_tax');

        }


    }

    public function edit_form($id)

    {
        $this->load->view('header');
        $this->load->view('menu');
        $data['id'] = $id;
        ///$this->certificate_tax_model->get_certificate_tax_by_id($id);
        $this->load->view('certificate_tax/edit_certificate', $data);
        $this->load->view('footer');
    }

    public function update($ctp_id)
    {
       
        $data = array(
            //'ctp_flag' => $this->input->post('ctp_flag'),
            'ctp_option' => $this->input->post('ctp_option'),
            //'ctp_attribute' => $this->input->post('ctp_attribute'),
            //'add_less' => $this->input->post('add_less'),
            //'dpr' => $this->input->post('dpr')
            // Add more fields as required
        );

        $this->db->where('ctp_id', $ctp_id);
        $this->db->update('certificate_tax', $data);
        //print_r($data);
        //exit;
       // $done=$this->Certificate_tax_model->update_record($data,$ctp_id);
        //if($done){
            redirect( base_url() . 'Certificate_tax');

        //}

    }

    public function delete($ctp_id)
    {
        $this->certificate_tax_model->delete_certificate_tax($ctp_id);
        redirect( base_url() . 'Certificate_tax');
    }
}
?>