<?php
class Covenant extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Covenant_name_model');
        $this->load->model('Covenant_detail_model');
    }

    public function add_covenant() {
        $this->load->view('header');
		$this->load->view('menu');
        $data['covenant_names'] = $this->Covenant_name_model->get_covenant_names();
        $this->load->view('Covenant/covenant_name_list', $data); // Create a view for listing covenant names
        $this->load->view('footer');
    }
    public function create() {
        $this->load->view('header');
		$this->load->view('menu');
        
        $this->load->view('Covenant/covenant_name_create'); // Create a view for listing covenant names
        $this->load->view('footer');
    }
    public function create_record() {
        if ($_POST) {
            $data = array(
                'covenant_name' => $this->input->post('covenant_name')
            );

            $this->Covenant_name_model->create_covenant_name($data);
            redirect(base_url('Covenant/add_covenant'));
        } else {
            redirect(base_url('Covenant/add_covenant'));
        }
    }

    public function edit($covenant_name_id) {
        if ($_POST) {
            $data = array(
                'covenant_name' => $this->input->post('covenant_name')
            );

            $this->Covenant_name_model->update_covenant_name($covenant_name_id, $data);
            redirect('Covenant');
        } else {
            $data['covenant_name'] = $this->Covenant_name_model->get_covenant_name($covenant_name_id);
            $this->load->view('covenant_name_edit', $data); // Create a view for the edit form
        }
    }

    public function delete($covenant_name_id) {
        $this->Covenant_name_model->delete_covenant_name($covenant_name_id);
        redirect('Covenant');
    }
//////////////////////////////////////////////////////

public function add_covenant_detail() {
    $this->load->view('header');
    $this->load->view('menu');
    //$data['covenant_details'] = $this->Covenant_detail_model->get_covenant_details();
    $this->load->view('Covenant/covenant_detail_list'); // Create a view for listing covenant details
    $this->load->view('footer');
}
////////////////////////////////////////

public function report() {
    $this->load->view('header');
    $this->load->view('menu');
    //$data['covenant_details'] = $this->Covenant_detail_model->get_covenant_details();
    $this->load->view('Covenant/covenant_report'); // Create a view for listing covenant details
    $this->load->view('footer');
}
public function reportNew($id,$cid) {
    $this->load->view('header');
    $this->load->view('menu');
    //$data['covenant_details'] = $this->Covenant_detail_model->get_covenant_details();
    $data["id"]=$id;
    $data["cid"]=$cid;
    $this->load->view('Covenant/covenant_reportNew',$data); // Create a view for listing covenant details
    $this->load->view('footer');
}
//////////////////////////////////////////

public function create_covenant_detail() {
    $this->load->view('header');
    $this->load->view('menu');
    
    $this->load->view('Covenant/create_covenant_detail'); // Create a view for listing covenant names
    $this->load->view('footer');
}

public function edit_covenant($id) {
    $this->load->view('header');
    $this->load->view('menu');
    $data['cid']=$id;
    $this->load->view('Covenant/edit_covenant',$data); // Create a view for listing covenant names
    $this->load->view('footer');
}

public function create_record_detail() {
   extract($_POST);
        $data = array(
            'covenant_id' => $this->input->post('covenant_name'),
            'category_name' => $this->input->post('category_name'),
            'reference' => $this->input->post('reference'),
            'status_id' => $this->input->post('status_id'),
            'covenant_detail' => $this->input->post('covenant_detail'),
            'remarks' => $this->input->post('remarks'),
            'serial_no' => $this->input->post('serialNo')
        );

        $this->Covenant_detail_model->create_covenant_detail($data);
        redirect('Covenant/add_covenant_detail');
    
    }

    public function update_record_detail() {
        extract($_POST);
             $data = array(
                 'covenant_id' => $this->input->post('covenant_name'),
                 'category_name' => $this->input->post('category_name'),
                 'reference' => $this->input->post('reference'),
                 'status_id' => $this->input->post('status_id'),
                 'covenant_detail' => $this->input->post('covenant_detail'),
                 'remarks' => $this->input->post('remarks'),
                 'serial_no' => $this->input->post('serialNo')
             );
     
             $this->Covenant_detail_model->update_covenant_detail($cid,$data);
             redirect('Covenant/add_covenant_detail');
         
         }

         public function delete_covant_detail($id) {
            
         
                $done=$this->db->query("delete from covenant_detail where covenant_detail_id=$id");
if($done){
                 redirect('Covenant/add_covenant_detail');
             
             }
            }


}
?>
