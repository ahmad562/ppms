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
    public function cad_detail() {
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('cad/loan_table');
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
}
?>