<?php
class Hr_pipeline_model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Create
    public function add_pipeline($data) {
        $this->db->insert('hr_pipeline', $data);
    }

    // Read
    public function get_pipelines() {
        $query = $this->db->get('hr_pipeline');
        return $query->result();
    }

    public function get_pipeline_by_id($pipeline_id) {
        $query = $this->db->get_where('hr_pipeline', array('pipeline_id' => $pipeline_id));
        return $query->row();
    }

    // Update
    public function update_pipeline($pipeline_id, $data) {
        $this->db->where('pipeline_id', $pipeline_id);
        $this->db->update('hr_pipeline', $data);
    }

    // Delete
    public function delete_pipeline($pipeline_id) {
        $this->db->where('pipeline_id', $pipeline_id);
        $this->db->delete('hr_pipeline');
    }
}
?>