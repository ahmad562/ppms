<?php 
class Loan_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_loans() {
        return $this->db->get('loan')->result_array();
    }

    public function get_loan($id) {
        return $this->db->get_where('loan', array('loan_id' => $id))->row_array();
    }

    public function create_loan($data) {
        $this->db->insert('loan', $data);
        return $this->db->insert_id();
    }

    public function update_loan($id, $data) {
        $this->db->where('loan_id', $id);
        return $this->db->update('loan', $data);
    }

    public function delete_loan($id) {
        return $this->db->delete('loan', array('loan_id' => $id));
    }
    /////////////////////////////////Grant/////////////
    public function get_grants() {
        return $this->db->get('grant')->result_array();
    }

    public function get_grant($id) {
        return $this->db->get_where('grant', array('grant_id' => $id))->row_array();
    }

    public function create_grant($data) {
        $this->db->insert('grant', $data);
        return $this->db->insert_id();
    }

    public function update_grant($id, $data) {
        $this->db->where('grant_id', $id);
        return $this->db->update('grant', $data);
    }

    public function delete_grant($id) {
        return $this->db->delete('grant', array('grant_id' => $id));
    }


}
?>