<?php
// Controller
class Loan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Loan_model');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index() {
        $this->load->view('header');
        $this->load->view('menu');
        $data['loans'] = $this->Loan_model->get_loans();
        $this->load->view('loan/loan_view', $data);
        $this->load->view('footer');
    }
    public function add_loan() {
        $this->load->view('header');
        $this->load->view('menu');
        $this->load->view('loan/add_loan');
        $this->load->view('footer');
    }
    public function create() {
        $this->form_validation->set_rules('name', 'Name', 'required');

        if ($this->form_validation->run() === FALSE) {
            // Show add loan form
            $this->load->view('add_loan_view');
        } else {
            // Add loan to database
            $data = array(
                'loan_name' => $this->input->post('name')
            );
            $this->Loan_model->create_loan($data);
            redirect('/loan');
        }
    }

    public function grant_edit($id) {
        // Get loan from database
        $this->load->view('header');
        $this->load->view('menu');
        $data['loan'] = $this->Loan_model->get_loan($id);

        if (empty($data['loan'])) {
            show_404();
        }

        // Show edit loan form
        $this->load->view('loan/edit_loan', $data);
        $this->load->view('footer');
    }

    public function update($id) {
        // Update loan in database
        $data = array(
            'loan_name' => $this->input->post('name')
        );
        if ($this->Loan_model->update_loan($id, $data)) {
            redirect('/loan');
        } else {
            show_error('Unable to update the record');
        }
    }

    public function delete($id) {
        if ($this->Loan_model->delete_loan($id)) {
            redirect('/loan');
        } else {
            show_error('Unable to delete loan.');
        }
    }
////////////////////////////////////////////////////////////////


public function grant_view() {
    $this->load->view('header');
    $this->load->view('menu');
    $data['grants'] = $this->Loan_model->get_grants();
    $this->load->view('loan/grant_view', $data);
    $this->load->view('footer');
}
public function add_grant() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('loan/add_grant');
    $this->load->view('footer');
}
public function dmf() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('dmf/dmf');
    $this->load->view('footer');
}

public function gap() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('dmf/gap');
    $this->load->view('footer');
}
public function add_dmf() {
    $this->load->view('header');
    $this->load->view('menu');
    $this->load->view('dmf/add_dmf');
    $this->load->view('footer');
}
public function create_grant() {
    $this->form_validation->set_rules('name', 'Name', 'required');

    if ($this->form_validation->run() === FALSE) {
        // Show add grant form
        $this->load->view('add_grant_view');
    } else {
        // Add grant to database
        $data = array(
            'grant_name' => $this->input->post('name')
        );
        $this->Loan_model->create_grant($data);
        redirect('Loan/grant_view');
    }
}

public function edit_grant($id) {
    // Get grant from database
    $this->load->view('header');
    $this->load->view('menu');
    $data['grant'] = $this->Loan_model->get_grant($id);

    if (empty($data['grant'])) {
        show_404();
    }

    // Show edit grant form
    $this->load->view('loan/edit_grant', $data);
    $this->load->view('footer');
}

public function update_grant($id) {
    // Update grant in database
    $data = array(
        'grant_name' => $this->input->post('name')
    );
    if ($this->Loan_model->update_grant($id, $data)) {
        redirect('Loan/grant_view');
    } else {
        redirect('Loan/grant_view');
    }


}

public function delete_grant($id) {
    if ($this->Loan_model->delete_loan($id)) {
        redirect('Loan/grant_view');
    } else {
        show_error('Unable to delete loan.');
    }
}
}