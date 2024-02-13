<?php
class Hr_consultancy_contracts extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Hr_consultancy_contracts_model');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['contracts'] = $this->Hr_consultancy_contracts_model->getContracts();
        $this->load->view('hr/contract/contracts_view', $data);
        $this->load->view('footer'); 

    }

    public function addForm() {
        $this->load->view('header');
        $this->load->view('menu'); 
        // Load the add form view
        $this->load->view('hr/contract/add_contract_view');
        $this->load->view('footer'); 
    }

    public function add() {
        $data = array(
            'package' => $this->input->post('package'),
            'firm_indi_id' => $this->input->post('firm_indi_id'),
            'emp_id' => $this->input->post('emp_id'),
            'contract_award' => $this->input->post('contract_award'),
            'completion_date' => $this->input->post('completion_date'),
            'revised_date' => $this->input->post('revised_date'),
            'currency' => $this->input->post('currency'),
            'cont_amt_orig' => $this->input->post('cont_amt_orig'),
            'cont_amt_revised' => $this->input->post('cont_amt_revised'),
            'disbursement' => $this->input->post('disbursement'),
            'status_id' => $this->input->post('status_id')
        );

        $this->Hr_consultancy_contracts_model->addContract($data);
        redirect('Hr_consultancy_contracts/index');
    }

    public function editForm($id) {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['contract_data'] = $this->Hr_consultancy_contracts_model->get_contract_by_id($id);
        $this->load->view('hr/contract/edit_contract_view', $data);
        $this->load->view('footer'); 
    }

    ////////////////////////////////////////////////
public function display_new_contract(){
extract($_POST);

    $data['id'] = $id;
    $this->load->view('hr/contract/display_new_contract', $data);



}





    //////////////////////////////////////
    public function add_contract($id) {
        $this->load->view('header');
        $this->load->view('menu'); 
        $data['id'] = $id;
        $this->load->view('hr/contract/add_contract', $data);
        $this->load->view('footer'); 
    }
    public function edit($id) {
        $data = array(
            'package' => $this->input->post('package'),
            'firm_indi_id' => $this->input->post('firm_indi_id'),
            'emp_id' => $this->input->post('emp_id'),
            'contract_award' => $this->input->post('contract_award'),
            'completion_date' => $this->input->post('completion_date'),
            'revised_date' => $this->input->post('revised_date'),
            'currency' => $this->input->post('currency'),
            'cont_amt_orig' => $this->input->post('cont_amt_orig'),
            'cont_amt_revised' => $this->input->post('cont_amt_revised'),
            'disbursement' => $this->input->post('disbursement'),
            'status_id' => $this->input->post('status_id')
        );

        $this->Hr_consultancy_contracts_model->update_contract($id, $data);
        redirect('Hr_consultancy_contracts/index');
    }

    public function delete($id) {
        $this->Hr_consultancy_contracts_model->deleteContract($id);
        redirect('Hr_consultancy_contracts/index');
    }
    //////////////////////////////edit form//////////////////////


    public function edit_new_hr() {
        extract($_POST);
        $data = array(
            'package' => $this->input->post('package'),
            'firm_indi_id' => $this->input->post('firm_indi_id'),
            'emp_id' => $this->input->post('emp_id'),
            'contract_award' => $this->input->post('contract_award'),
            'completion_date' => $this->input->post('completion_date'),
            'revised_date' => $this->input->post('revised_date'),
            'ntp_date' => $this->input->post('ntp_date'),
            'resignation_date' => $this->input->post('resignation_date'),
            'currency' => $this->input->post('currency'),
            'cont_amt_orig' => $this->input->post('cont_amt_orig'),
            'cont_amt_revised' => $this->input->post('cont_amt_revised'),
            'disbursement' => $this->input->post('disbursement'),
            'status_id' => $this->input->post('status_id')
        );

        $this->Hr_consultancy_contracts_model->update_contract($id,$data);
        $contract_id=$id;
        //redirect('Hr_consultancy_contracts/index');
////print_r($contract_id);
        $this->load->library('upload');
        $config['upload_path'] = 'img/emp_files/';
        $config['file_name'] = $_FILES["ntp_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("ntp_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set ntp_file='$insert_image' where hr_cid=$contract_id");
        $done=$this->db->query("select * from hr_consultancy_files where emp_id=$emp_id and file_name='ntp'")->row();
      if($done){
        $this->db->query("update hr_consultancy_files set file_date='$contract_award',file_attached='$insert_image' where emp_id=$emp_id and file_name='ntp'");
      }else{
        $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='ntp',file_date='$contract_award',file_attached='$insert_image',hr_cid=$id");
      }

        }
        /////////////////////////////////////////////////////////////////////////////
        $config['upload_path'] = 'img/emp_join/';
        $config['file_name'] = $_FILES["join_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("join_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set join_date_file='$insert_image' where hr_cid=$contract_id");

        $done=$this->db->query("select * from hr_consultancy_files where emp_id=$emp_id and file_name='join'")->row();
        if($done){
            $this->db->query("update hr_consultancy_files set file_date='$contract_award',file_attached='$insert_image' where emp_id=$emp_id and file_name='join'");
          }else{
            $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='join',file_date='$contract_award',file_attached='$insert_image',hr_cid=$id");
          }

        }

        $config['upload_path'] = 'img/emp_renewal/';
        $config['file_name'] = $_FILES["renewal_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("renewal_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set renewal_file='$insert_image' where hr_cid=$contract_id");
        $done=$this->db->query("select * from hr_consultancy_files where emp_id=$emp_id and file_name='renewal'")->row();
        if($done){
            $this->db->query("update hr_consultancy_files set file_date='$contract_award',file_attached='$insert_image' where emp_id=$emp_id and file_name='renewal'");
          }else{
            $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='renewal',file_date='$contract_award',file_attached='$insert_image',hr_cid=$id");
          }


        }



        $config['upload_path'] = 'img/emp_resignation/';
        $config['file_name'] = $_FILES["resignation_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("resignation_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set resignation_file='$insert_image' where hr_cid=$contract_id");
        $done=$this->db->query("select * from hr_consultancy_files where emp_id=$emp_id and file_name='resignation'")->row();
      
        if($done){
            $this->db->query("update hr_consultancy_files set file_date='$contract_award',file_attached='$insert_image' where emp_id=$emp_id and file_name='resignation'");
          }else{
            $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='resignation',file_date='$contract_award',file_attached='$insert_image',hr_cid=$id");
          }
        }


///echo $this->db->last_query();
redirect('Hr_consultancy_contracts/add_contract/'.$emp_id);

    }




    ////////////////////////////////////////////////////////////////

    public function add_new_hr() {
        extract($_POST);
        $data = array(
            'package' => $this->input->post('package'),
            'firm_indi_id' => $this->input->post('firm_indi_id'),
            'emp_id' => $this->input->post('emp_id'),
            'contract_award' => $this->input->post('contract_award'),
            'completion_date' => $this->input->post('completion_date'),
            'revised_date' => $this->input->post('revised_date'),
            'ntp_date' => $this->input->post('ntp_date'),
            'resignation_date' => $this->input->post('resignation_date'),
            'currency' => $this->input->post('currency'),
            'cont_amt_orig' => $this->input->post('cont_amt_orig'),
            'cont_amt_revised' => $this->input->post('cont_amt_revised'),
            'disbursement' => $this->input->post('disbursement'),
            'status_id' => $this->input->post('status_id')
        );

        $contract_id=$this->Hr_consultancy_contracts_model->addContract($data);
        //redirect('Hr_consultancy_contracts/index');
////print_r($contract_id);
        $this->load->library('upload');
        $config['upload_path'] = 'img/emp_files/';
        $config['file_name'] = $_FILES["ntp_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("ntp_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set ntp_file='$insert_image' where hr_cid=$contract_id");
        $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='ntp',file_date='$contract_award',file_attached='$insert_image',hr_cid=$contract_id");
      
        }
        /////////////////////////////////////////////////////////////////////////////
        $config['upload_path'] = 'img/emp_join/';
        $config['file_name'] = $_FILES["join_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("join_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set join_date_file='$insert_image' where hr_cid=$contract_id");
        
        $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='join',file_date='$contract_award',file_attached='$insert_image',hr_cid=$contract_id");
        }

        $config['upload_path'] = 'img/emp_renewal/';
        $config['file_name'] = $_FILES["renewal_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("renewal_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set renewal_file='$insert_image' where hr_cid=$contract_id");
        $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='renewal',file_date='$contract_award',file_attached='$insert_image',hr_cid=$contract_id");
      
        }



        $config['upload_path'] = 'img/emp_resignation/';
        $config['file_name'] = $_FILES["resignation_file"]['name'];
        $file_picture = $config['upload_path'] . $config['file_name'];
        $config['overwrite'] = TRUE;
        $config['allowed_types'] = '*';
        $this->upload->initialize($config);
        
        if ($this->upload->do_upload("resignation_file")) {
            $data_upload = $this->upload->data();
            echo $insert_image = $config['file_name'];

        
        $update_ntp=$this->db->query("update hr_consultancy_contracts set resignation_file='$insert_image' where hr_cid=$contract_id");
        $this->db->query("insert into hr_consultancy_files set emp_id=$emp_id,file_name='resignation',file_date='$contract_award',file_attached='$insert_image',hr_cid=$contract_id");
      
        }


///echo $this->db->last_query();
redirect('Hr_consultancy_contracts/add_contract/'.$emp_id);

    }
}
?>
