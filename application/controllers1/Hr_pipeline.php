<?php
class Hr_pipeline extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('hr_pipeline_model');
    }

    public function index() {
        // Display all pipelines
        $this->load->view('header');
        $this->load->view('menu');
        $data['pipelines'] = $this->hr_pipeline_model->get_pipelines();
        $this->load->view('hr/pipeline_list', $data);
       
        $this->load->view('footer');

    }
    public function add_form() {
        // Display all pipelines
        $this->load->view('header');
        $this->load->view('menu');
        $data['pipelines'] = $this->hr_pipeline_model->get_pipelines();
        $this->load->view('hr/add_form', $data);
       
        $this->load->view('footer');

    }
    public function add() {
        // Add a new pipeline
        if ($this->input->post()) {
            $data = array(
                'package' => $this->input->post('package'),
                'contract_package' => $this->input->post('contract_package'),
                'est_amount_dollar' => $this->input->post('est_amount_dollar'),
                'planned_approved' => $this->input->post('planned_approved'),
                'ifb' => $this->input->post('ifb'),
                'technical_bid' => $this->input->post('technical_bid'),
                'tber_bid' => $this->input->post('tber_bid'),
                'tber_adb_approval' => $this->input->post('tber_adb_approval'),
                'financial_bid' => $this->input->post('financial_bid'),
                'pber_adb' => $this->input->post('pber_adb'),
                'pber_approval_adb' => $this->input->post('pber_approval_adb'),
                'contract_award' => $this->input->post('contract_award'),
                'remarks' => $this->input->post('remarks'),
            );
            $this->hr_pipeline_model->add_pipeline($data);
            redirect('hr_pipeline/index');
        } else {
            $this->load->view('add_pipeline');
        }
    }
    public function edit_form($id) {
        // Display all pipelines
        $this->load->view('header');
        $this->load->view('menu');
        $data["id"]=$id;
        $data['pipeline'] = $this->hr_pipeline_model->get_pipeline_by_id($id);
        $this->load->view('hr/edit_pipeline_form', $data);
       
        $this->load->view('footer');

    }
    public function edit($pipeline_id) {
        // Edit an existing pipeline
        if ($this->input->post()) {
            $data = array(
                'package' => $this->input->post('package'),
                'contract_package' => $this->input->post('contract_package'),
                'est_amount_dollar' => $this->input->post('est_amount_dollar'),
                'planned_approved' => $this->input->post('planned_approved'),
                'ifb' => $this->input->post('ifb'),
                'technical_bid' => $this->input->post('technical_bid'),
                'tber_bid' => $this->input->post('tber_bid'),
                'tber_adb_approval' => $this->input->post('tber_adb_approval'),
                'financial_bid' => $this->input->post('financial_bid'),
                'pber_adb' => $this->input->post('pber_adb'),
                'pber_approval_adb' => $this->input->post('pber_approval_adb'),
                'contract_award' => $this->input->post('contract_award'),
                'remarks' => $this->input->post('remarks'),
            );
            $this->hr_pipeline_model->update_pipeline($pipeline_id, $data);
            redirect('hr_pipeline/index');
        } else {
            $data['pipeline'] = $this->hr_pipeline_model->get_pipeline_by_id($pipeline_id);
            $this->load->view('edit_pipeline', $data);
        }
    }

    public function delete($pipeline_id) {
        // Delete a pipeline
        $this->hr_pipeline_model->delete_pipeline($pipeline_id);
        redirect('hr_pipeline/index');
    }
}
?>