<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompletionStatus extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('CompletionStatus_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu');
        $data['completion_status'] = $this->CompletionStatus_model->get_completion_status();
        $this->load->view('loan/completion_status', $data);
        $this->load->view('footer');
        
    }


    public function store() {
        $data = array(
            'year' => $this->input->post('year'),
            'month' => $this->input->post('month'),
            //'sub_sub_id' => $this->input->post('sub_sub_project_id'),
            'sub_project_id' => $this->input->post('sub_project_id'),
            'planned' => $this->input->post('planned'),
            'achieved' => $this->input->post('achieved')
        );

        $this->CompletionStatus_model->insert_completion_status($data);
        redirect('completionstatus/index');
    }

    public function edit($cs_id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data["id"]=$cs_id;
        //$data['status'] = $this->CompletionStatus_model->get_status_by_id($cs_id);
        $data['completion_status'] = $this->CompletionStatus_model->get_completion_status();
        $this->load->view('loan/completion_status_edit', $data);
        $this->load->view('footer');
    }

    public function update($cs_id) {
        
        $data = array(
            'year' => $this->input->post('year'),
            'month' => $this->input->post('month'),
            //'sub_sub_id' => $this->input->post('sub_sub_project_id'),
            'sub_project_id' => $this->input->post('sub_project_id'),
            
            'planned' => $this->input->post('planned'),
            'achieved' => $this->input->post('achieved')
        );

        $this->CompletionStatus_model->update_completion_status($cs_id, $data);
        redirect('completionstatus/index');
    }

    public function delete($cs_id) {
        $this->CompletionStatus_model->delete_completion_status($cs_id);
        redirect('completionstatus/index');
    }

}
