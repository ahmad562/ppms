<?php
class Hr_non_consulting_services extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hr_non_consulting_services_model');
    }

    public function index()
    {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['records'] = $this->Hr_non_consulting_services_model->getRecords();
        $this->load->view('hr/contract/non_consulting_services_view', $data);
        $this->load->view('footer');
        
    }
    public function add_form()
    {
        $this->load->view('header');
        $this->load->view('menu'); 
       
        $this->load->view('hr/contract/add_non_consultant_form');
        $this->load->view('footer');
        
    }
    public function add()
    {
        $data = array(
            'subproject_id' => $this->input->post('subproject_id'),
            'contract_name' => $this->input->post('contract_name'),
            'contractor_id' => $this->input->post('contractor_id'),
            'contract_type' => $this->input->post('contract_type'),
            'award_date' => $this->input->post('award_date'),
            'completion_date_org' => $this->input->post('completion_date_org'),
            'completion_date_rev' => $this->input->post('completion_date_rev'),
            'currency' => $this->input->post('currency'),
            'contract_amount_org' => $this->input->post('contract_amount_org'),
            'contract_amount_rev' => $this->input->post('contract_amount_rev'),
            'expenditure' => $this->input->post('expenditure'),
            'contract_status' => $this->input->post('contract_status')
        );
        $this->Hr_non_consulting_services_model->addRecord($data);
        redirect('hr_non_consulting_services/index');
    }

    public function edit($id)
    {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['record'] = $this->Hr_non_consulting_services_model->getRecordById($id);
        $this->load->view('hr/contract/edit_non_consulting_services', $data);
        $this->load->view('footer');
       
    }

    public function update_record($id)
    {
        $data = array(
            'subproject_id' => $this->input->post('subproject_id'),
            'contract_name' => $this->input->post('contract_name'),
            'contractor_id' => $this->input->post('contractor_id'),
            'contract_type' => $this->input->post('contract_type'),
            'award_date' => $this->input->post('award_date'),
            'completion_date_org' => $this->input->post('completion_date_org'),
            'completion_date_rev' => $this->input->post('completion_date_rev'),
            'currency' => $this->input->post('currency'),
            'contract_amount_org' => $this->input->post('contract_amount_org'),
            'contract_amount_rev' => $this->input->post('contract_amount_rev'),
            'expenditure' => $this->input->post('expenditure'),
            'contract_status' => $this->input->post('contract_status')
        );
        //print_r($data);
        //exit;
        $this->Hr_non_consulting_services_model->updateRecord($id, $data);


        redirect('hr_non_consulting_services/index');
    }

    public function delete($id)
    {
        $this->Hr_non_consulting_services_model->deleteRecord($id);
        redirect('hr_non_consulting_services/index');
    }
}
