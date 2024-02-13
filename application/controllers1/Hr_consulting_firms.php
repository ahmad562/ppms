<?php
class Hr_consulting_firms extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Hr_consulting_firms_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['firms'] = $this->Hr_consulting_firms_model->get_firms();
        $this->load->view('hr/firms', $data);
        $this->load->view('footer'); 
    }
    public function qcbs_report() {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['firms'] = $this->Hr_consulting_firms_model->get_firms();
        $this->load->view('hr/reports/qcbs_report', $data);
        $this->load->view('footer'); 
    }
    public function add_firm() {
        $this->load->view('header');
        $this->load->view('menu'); 
        $this->load->view('hr/add_firm');
        $this->load->view('footer'); 
    }

    public function add() {
        $data = array(
            'package' => $this->input->post('package'),
            'contract_package' => $this->input->post('contract_package'),
            'est_amount_dollar' => $this->input->post('est_amount_dollar')
        );
        print($data);
        $this->Hr_consulting_firms_model->add_firm($data);
        redirect('hr_consulting_firms/index');
        //echo $this->db->last_query();

    }

    public function edit_firm($id) {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['fid'] = $id;
        $this->load->view('hr/edit_firm', $data);
        $this->load->view('footer'); 
    }

    public function edit($id) {
        
            $data = array(
                'package' => $this->input->post('package'),
                'contract_package' => $this->input->post('contract_package'),
                'est_amount_dollar' => $this->input->post('est_amount_dollar')
            );
            $this->Hr_consulting_firms_model->update_firm($id, $data);
            redirect('hr_consulting_firms/index');
        
    }

    public function delete($id) {
        $this->Hr_consulting_firms_model->delete_firm($id);
        redirect('hr_consulting_firms/index');
    }
}
?>
