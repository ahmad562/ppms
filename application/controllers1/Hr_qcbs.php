<?php
class Hr_qcbs extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Hr_qcbs_model');
        $this->load->model('Hr_qcbs_awarded_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu');
        $data['records'] = $this->Hr_qcbs_model->get_qcbs_activities();
        $this->load->view('hr/qcbs_activities', $data);
        $this->load->view('footer');
    }

    public function add_activity() {
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('hr/add_qcbs_activity');
        $this->load->view('footer');
    }

    public function edit_qcbs_forms($id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data["id"]=$id;
        $this->load->view('hr/edit_qcbs_form',$data);
        $this->load->view('footer');
    }

    public function add() {
        $data = array(
            'planned_approved' => $this->input->post('planned_approved'),
            'sub_adb' => $this->input->post('sub_adb'),
            'adb_approval' => $this->input->post('adb_approval'),
            'eoi_advert' => $this->input->post('eoi_advert'),
            'hr_cfid' => $this->input->post('hr_cfid'),
            'negotiated' => $this->input->post('negotiated'),
            'awarded' => $this->input->post('awarded'),
            'completed' => $this->input->post('completed'),
            'awarded_amount' => $this->input->post('awarded_amount')
        );
        $this->Hr_qcbs_model->add_qcbs_activity($data);
        redirect('hr_qcbs/index');
    }

    public function edit_activity($id) {
        $this->load->view('header');
        $this->load->view('menu');
        $data['activity_id'] = $id;
        $this->load->view('hr/edit_qcbs_activity', $data);
        $this->load->view('footer');
    }

    public function update_qcbs($id) {
       
            $data = array(
                'planned_approved' => $this->input->post('planned_approved'),
                'sub_adb' => $this->input->post('sub_adb'),
                'adb_approval' => $this->input->post('adb_approval'),
                'eoi_advert' => $this->input->post('eoi_advert'),
                'hr_cfid' => $this->input->post('hr_cfid'),
                'negotiated' => $this->input->post('negotiated'),
                'awarded' => $this->input->post('awarded'),
                'completed' => $this->input->post('completed'),
                'awarded_amount' => $this->input->post('awarded_amount')
            );
            ///print_r($data);
            
            $this->Hr_qcbs_model->update_qcbs_activity($id, $data);
            redirect('hr_qcbs/index');
        
    }

    public function delete_activity($id) {
        $this->Hr_qcbs_model->delete_qcbs_activity($id);
        redirect('hr_qcbs/index');
    }
    /////////////////////////////////QCBS Awarded/////////////////////////

    
    
        public function display_award_list() {
            $this->load->view('header');
            $this->load->view('menu');
            $data['records'] = $this->Hr_qcbs_awarded_model->get_awards();
            $this->load->view('hr/awarded_list', $data);
            $this->load->view('footer');
        }
    
        public function add_award() {
            $this->load->view('header');
            $this->load->view('menu');
            $this->load->view('hr/add_award');
            $this->load->view('footer');
        }
    
        public function add_award_record() {
            $data = array(
                'negotiated' => $this->input->post('negotiated'),
                'awarded' => $this->input->post('awarded'),
                'completed' => $this->input->post('completed'),
                'awarded_amount' => $this->input->post('awarded_amount'),
                'hr_cfid' => $this->input->post('hr_cfid')
            );
            $this->Hr_qcbs_awarded_model->add_award($data);
            redirect('Hr_qcbs/add_award');
        }
    
        public function edit_award($id) {
            extract($_POST);
            $this->load->view('header');
            $this->load->view('menu');
            $data['award_id'] = $id;
            $this->load->view('hr/edit_award', $data);
            $this->load->view('footer');
        }
    
        public function edit_award_record($id) {
           
                $data = array(
                    'negotiated' => $this->input->post('negotiated'),
                    'awarded' => $this->input->post('awarded'),
                    'completed' => $this->input->post('completed'),
                    'awarded_amount' => $this->input->post('awarded_amount')
                );
                $this->Hr_qcbs_awarded_model->update_award($id, $data);
                redirect('Hr_qcbs/add_award');
            
        }
    
        public function delete_award($id) {
            $this->Hr_qcbs_awarded_model->delete_award($id);
            redirect('Hr_qcbs/display_award_list');
        }


////////////////////////package for indivisual person////////////////////////////////

public function package_list() {
    $this->load->view('header');
    $this->load->view('menu');
    $data['packages'] = $this->Hr_qcbs_model->get_packages();
    // Load the view and pass $data to display in the view
    $this->load->view('hr/individual_packages_view', $data);
    $this->load->view('footer');
}
public function add_package() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('hr/add_package');
    $this->load->view('footer');
}
public function add_package_record() {
    $data = array(
        'package' => $this->input->post('package'),
        'package_contract' => $this->input->post('package_contract'),
        'package_amount' => $this->input->post('package_amount'),
        'organization_id' => $this->input->post('organization_id')
        );
        $this->Hr_qcbs_model->add_package($data);
       redirect('Hr_qcbs/package_list');
}
public function edit_package($id) {
    extract($_POST);
    $this->load->view('header');
    $this->load->view('menu');
    $data['award_id'] = $id;
    $this->load->view('hr/edit_package', $data);
    $this->load->view('footer');
}
public function edit_package_record($id) {
   
        $data = array(
            'package' => $this->input->post('package'),
            'package_contract' => $this->input->post('package_contract'),
            'package_amount' => $this->input->post('package_amount'),
            'organization_id' => $this->input->post('organization_id')
        );
        $this->Hr_qcbs_model->update_package($id, $data);
        redirect('Hr_qcbs/package_list');
    
}

public function delete_package_record($id) {
    $this->Hr_qcbs_model->delete_package($id);
    redirect('Hr_qcbs/package_list');
}
////////////////////////////////////////////////////////////////////////////////icrm submission to adb////////////////////

public function display_icrm() {
    $this->load->view('header');
    $this->load->view('menu');
    $data['records'] = $this->Hr_qcbs_model->display_icrm();
    $this->load->view('hr/display_icrm', $data);
    $this->load->view('footer');
}

public function add_icrms() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('hr/add_icrms');
    $this->load->view('footer');
}
public function icrm_report() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('hr/reports/icrm_report');
    $this->load->view('footer');
}
public function awarded_contract_report() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('hr/reports/awarded_contract_report');
    $this->load->view('footer');
}
public function non_consulting_contract() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('hr/reports/non_consulting_contract');
    $this->load->view('footer');
}

public function pipeline_contract() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('hr/reports/pipeline_contract');
    $this->load->view('footer');
}

public function add_icrms_record() {
   /* $data = array(
        'planned_approved' => $this->input->post('planned_approved'),
        'sub_adb' => $this->input->post('sub_adb'),
        'adb_approval' => $this->input->post('adb_approval'),
        'eoi_advert' => $this->input->post('eoi_advert'),
        'hr_in_package_id' => $this->input->post('hr_in_package_id')
    );
    */
    $data = array(
    'planned_approved' => $this->input->post('planned_approved'),
    'sub_adb_01' => $this->input->post('sub_adb_01'),
    'adb_approval_01' => $this->input->post('adb_approval_01'),
    'eoi_advert' => $this->input->post('eoi_advert'),
    'hr_in_package_id' => $this->input->post('hr_in_package_id'),
    'budget_adb' => $this->input->post('budget_adb'),
    'adb_clear' => $this->input->post('adb_clear'),
    'sub_adb_02' => $this->input->post('sub_adb_02'),
    'adb_approval_02' => $this->input->post('adb_approval_02'),
    'contract_sign' => $this->input->post('contract_signing'),
    'intended_completion' => $this->input->post('intendedcompletion'),
    'awarded_amount' => $this->input->post('AwardedAmount')
    );
    $this->Hr_qcbs_model->add_icrms_record($data);
    redirect('Hr_qcbs/display_icrm');
}

public function edit_icrms($id) {
    $this->load->view('header');
    $this->load->view('menu');
    $data['icrms_id'] = $id;
    $this->load->view('hr/edit_icrms', $data);
    $this->load->view('footer');
}

public function edit_icrms_record($id) {
   
        $data = array(
            'planned_approved' => $this->input->post('planned_approved'),
            'sub_adb_01' => $this->input->post('sub_adb_01'),
            'adb_approval_01' => $this->input->post('adb_approval_01'),
            'eoi_advert' => $this->input->post('eoi_advert'),
            'hr_in_package_id' => $this->input->post('hr_in_package_id'),
            'budget_adb' => $this->input->post('budget_adb'),
            'adb_clear' => $this->input->post('adb_clear'),
            'sub_adb_02' => $this->input->post('sub_adb_02'),
            'adb_approval_02' => $this->input->post('adb_approval_02'),
            'contract_sign' => $this->input->post('contract_signing'),
            'intended_completion' => $this->input->post('intendedcompletion'),
            'awarded_amount' => $this->input->post('AwardedAmount')
        );
        $this->Hr_qcbs_model->edit_icrms_record($id, $data);
        redirect('Hr_qcbs/display_icrm');
    
}

public function delete_icrms($id) {
    $this->Hr_qcbs_model->delete_icrms_record($id);
    redirect('Hr_qcbs/display_icrm');
}

/////////////////////////////////////////////////////////////////////////////////
public function display_icrms_award() {
    $this->load->view('header');
    $this->load->view('menu');
    $data['records'] = $this->Hr_qcbs_model->display_icrms_award();
    $this->load->view('hr/display_icrms_award', $data);
    $this->load->view('footer');
}

public function add_icrms_award() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('hr/add_icrms_award');
    $this->load->view('footer');
}

public function add_icrms_award_record() {
    $data = array(
        'negotiated_date' => $this->input->post('negotiated'),
        'awarded_date' => $this->input->post('awarded'),
        'completed_date' => $this->input->post('completed'),
        'awarded_amount' => $this->input->post('awarded_amount'),
        'hr_cfid' => $this->input->post('hr_in_package_id')
    );
    $this->Hr_qcbs_model->add_icrms_award_record($data);
    redirect('Hr_qcbs/display_icrms_award');
}

public function edit_icrms_award($id) {
    $this->load->view('header');
    $this->load->view('menu');
    $data['awards_id'] = $id;
    $this->load->view('hr/edit_icrms_award', $data);
    $this->load->view('footer');
}

public function edit_icrms_award_record($id) {
    
        $data = array(
            'negotiated_date' => $this->input->post('negotiated'),
            'awarded_date' => $this->input->post('awarded'),
            'completed_date' => $this->input->post('completed'),
            'awarded_amount' => $this->input->post('awarded_amount'),
            'hr_cfid' => $this->input->post('hr_in_package_id')
        );
        $this->Hr_qcbs_model->edit_icrms_award_record($id, $data);
        redirect('Hr_qcbs/display_icrms_award');
    
}

public function delete_icrms_award($id) {
    $this->Hr_qcbs_model->delete_icrms_award($id);
    redirect('Hr_qcbs/display_icrms_award');
}

}
?>
