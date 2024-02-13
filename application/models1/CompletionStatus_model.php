<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CompletionStatus_model extends CI_Model {

    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function get_completion_status() {
        $query = $this->db->get('ppms_completion_status');
        return $query->result();
    }

    public function insert_completion_status($data) {
        $this->db->insert('ppms_completion_status', $data);
    }

    public function get_status_by_id($cs_id) {
        $query = $this->db->get_where('ppms_completion_status', array('cs_id' => $cs_id));
        return $query->row();
    }

    public function update_completion_status($cs_id, $data) {
        $this->db->where('cs_id', $cs_id);
        $this->db->update('ppms_completion_status', $data);
    }

    public function delete_completion_status($cs_id) {
        $this->db->where('cs_id', $cs_id);
        $this->db->delete('ppms_completion_status');
    }

}
