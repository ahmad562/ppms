<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_performance extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('Cad_performance_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu');
        $data['performances'] = $this->Cad_performance_model->getPerformances();
        $this->load->view('cad/cad_performance_view', $data);
       
        $this->load->view('footer');
    }
    public function report() {
        $this->load->view('header');
        $this->load->view('menu');
        $data['performances'] = $this->Cad_performance_model->getPerformances();
        $this->load->view('cad/cad_performance_report', $data);
       
        $this->load->view('footer');
    }
    public function add_form() {
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('cad/add_cad_performance');
        $this->load->view('footer');
    
    }
    public function cad_detail() {
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('cad/loan_table');
        $this->load->view('footer');
    
    }
    public function add() {
        $data = array(
            'cad_product_id' => $this->input->post('cad_product_id'),
            'year' => $this->input->post('year'),
            'quarter_id' => $this->input->post('quarter_id'),
            'projected' => $this->input->post('projected'),
            'actual' => $this->input->post('actual'),
            'contract_disbursment' => $this->input->post('contract_disbursment')
        );
        $this->Cad_performance_model->addPerformance($data);
        redirect('cad_performance');
    }

    public function edit($id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data['performance'] = $this->Cad_performance_model->getPerformanceById($id);
        $this->load->view('cad/edit_cad_performance', $data);
        $this->load->view('footer');
        
    }

    public function update($id) {
        $data = array(
            'cad_product_id' => $this->input->post('cad_product_id'),
            'year' => $this->input->post('year'),
            'quarter_id' => $this->input->post('quarter_id'),
            'projected' => $this->input->post('projected'),
            'actual' => $this->input->post('actual'),
            'contract_disbursment' => $this->input->post('contract_disbursment')
        );
        $this->Cad_performance_model->updatePerformance($id, $data);
        redirect('Cad_performance/index');
    }

    public function delete($id) {
        $this->Cad_performance_model->deletePerformance($id);
        redirect('cad_performance/index');
    }
///////////////////////////cad_disbursement_target/////////////////////////////////

public function cad_disbursement_target() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('cad/cad_disbursement_target');
    $this->load->view('footer');

}
public function view_cad_disbursement_target() {
    $this->load->view('header');
    $this->load->view('menu');
   
    $this->load->view('cad/view_cad_disbursement_target');
   
    $this->load->view('footer');
}


public function add_cad_disbursement_target() {
    extract($_POST);
    $done=$this->db->query("select * from cad_disbursement_target where city_id=$city_id and sub_project_id=$sub_project_id
    and month_id=$month_id and year=$year")->row();
    if($done){
        $done=$this->db->query("update cad_disbursement_target set amount=$amount where city_id=$city_id and sub_project_id=$sub_project_id
        and month_id=$month_id and year=$year");
    }else{
    $data = array(
        'city_id' => $this->input->post('city_id'),
        'sub_project_id' => $this->input->post('sub_project_id'),
        'month_id' => $this->input->post('month_id'),
        'amount' => $this->input->post('amount'),
        'year' => $this->input->post('year')
    );
    $this->Cad_performance_model->add_cad_disbursement_target($data);
}
    redirect('cad_performance/cad_disbursement_target');
}
//////////////////////////////////////////////acheived by manually///////
public function cad_achieved() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('cad/cad_achieved');
    $this->load->view('footer');

}
public function add_cad_achieved() {
   extract($_POST);
   //echo "city id is: ".$city_id;
  $tdate=date('Y-m-d');
    $cityid=$city_id;
   ///$this->input->post('city_id');
   
 $projectID=$sub_project_id;
   ///$this->input->post('sub_project_id');
    $mid=$month_id;
   ///$this->input->post('month_id');
 $amt=$amount;
   ///$this->input->post('amount');
 $yearss=$year;
   //$this->input->post('year');
//exit;
 $doneeee="select * from ipc_temp_payment where city_id=$cityid and sub_project_id=$projectID
    and month_id=$mid and year=$yearss";
    $done=$this->db->query($doneeee)->row();
   /// exit;
    if($done){
        $done=$this->db->query("update ipc_temp_payment set amount=$amt where city_id=$cityid and sub_project_id=$projectID
        and month_id=$mid and year=$yearss");
    }else{
    $data = array(
        'city_id' => $cityid,
        'sub_project_id' => $projectID,
        'month_id' => $mid,
        'amount' => $amt,
        'year' => $yearss,
        'ipc_temp_date' => $tdate
    );
    $this->Cad_performance_model->add_cad_achieved($data);
}
    redirect('cad_performance/cad_achieved');
}

}
?>