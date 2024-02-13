<?php
class Hr_staff_plan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Hr_staff_plan_model');
    }


    public function dashboard() {
        $this->load->view('header');
        $this->load->view('menu');
       
        $this->load->view('hr/dashboard');
        $this->load->view('footer');
    }


    public function index() {
        $this->load->view('header');
        $this->load->view('menu');
        $data['plans'] = $this->Hr_staff_plan_model->get_plans();
        $this->load->view('hr/plans', $data);
        $this->load->view('footer');
    }
    public function report() {
        $this->load->view('header');
        $this->load->view('menu');
        $data['plans'] = $this->Hr_staff_plan_model->get_plans();
        $this->load->view('hr/reports/plans_report', $data);
        $this->load->view('footer');
    }
    public function add_plan() {
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('hr/add_plan');
        $this->load->view('footer');
    }

    public function add() {
        $data = array(
            'organization_id' => $this->input->post('organization_id'),
            'adv_date' => $this->input->post('adv_date'),
            'invi_inter_date' => $this->input->post('invi_inter_date'),
            'ranking_date' => $this->input->post('ranking_date'),
            'approval_date' => $this->input->post('approval_date'),
            'appoint_letter' => $this->input->post('appoint_letter'),
            'remarks' => $this->input->post('remarks')
        );
        $this->Hr_staff_plan_model->add_plan($data);
        redirect('hr_staff_plan/index');
    }

    public function edit_plan($id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data["pid"] = $id;
        $this->load->view('hr/edit_plan', $data);
        $this->load->view('footer');
    }

    public function edit($id) {
        if ($this->input->post('submit')) {
            $data = array(
                'organization_id' => $this->input->post('organization_id'),
                'adv_date' => $this->input->post('adv_date'),
                'invi_inter_date' => $this->input->post('invi_inter_date'),
                'ranking_date' => $this->input->post('ranking_date'),
                'approval_date' => $this->input->post('approval_date'),
                'appoint_letter' => $this->input->post('appoint_letter'),
                'remarks' => $this->input->post('remarks')
            );
            $this->Hr_staff_plan_model->update_plan($id, $data);
            redirect('hr_staff_plan/index');
        } else {
            $data['plan'] = $this->Hr_staff_plan_model->get_plan_by_id($id);
            $this->load->view('edit_plan', $data);
        }
    }

    public function delete($id) {
        $this->Hr_staff_plan_model->delete_plan($id);
        redirect('hr_staff_plan/index');
    }
}
?>
