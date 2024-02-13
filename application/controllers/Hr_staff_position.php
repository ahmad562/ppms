<?php
class Hr_staff_position extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Hr_staff_position_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['positions'] = $this->Hr_staff_position_model->get_positions();
        $this->load->view('hr/positions', $data);
        $this->load->view('footer'); 
    }


    public function view_positions_report() {

        $this->load->view('header');
        $this->load->view('menu'); 
        $data['positions'] = $this->Hr_staff_position_model->get_positions();
        $this->load->view('hr/positions_report', $data);
        $this->load->view('footer');

    }
    public function add_position() {
        $this->load->view('header');
        $this->load->view('menu'); 
        $this->load->view('hr/add_position');
        $this->load->view('footer'); 
    }
    public function add() {
        
            $data = array(
                'organization_id' => $this->input->post('organization_id'),
                'total_position' => $this->input->post('total_position'),
                'filled_total' => $this->input->post('filled_total'),
                'male' => $this->input->post('male'),
                'female' => $this->input->post('female'),
                'remaining' => $this->input->post('remaining')
            );
            $this->Hr_staff_position_model->add_position($data);
            redirect('hr_staff_position/index');
        }
    
    public function edit_position($id) {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data["pid"]=$id;
        $this->load->view('hr/edit_position',$data);
        $this->load->view('footer'); 
    }

    public function edit($id) {
        if ($this->input->post('submit')) {
            $data = array(
                'organization_id' => $this->input->post('organization_id'),
                'total_position' => $this->input->post('total_position'),
                'filled_total' => $this->input->post('filled_total'),
                'male' => $this->input->post('male'),
                'female' => $this->input->post('female'),
                'remaining' => $this->input->post('remaining')
            );
            $this->Hr_staff_position_model->update_position($id, $data);
            redirect('hr_staff_position/index');
        } else {
            $data['position'] = $this->Hr_staff_position_model->get_position_by_id($id);
            $this->load->view('edit_position', $data);
        }
    }

    public function delete($id) {
        $this->Hr_staff_position_model->delete_position($id);
        redirect('hr_staff_position/index');
    }
}
?>
