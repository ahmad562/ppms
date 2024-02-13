<?php
class Covenant_name_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function create_covenant_name($data) {
        $this->db->insert('covenant_name', $data);
        return $this->db->insert_id();
    }

    public function get_covenant_names() {
        return $this->db->get('covenant_name')->result();
    }

    public function get_covenant_name($covenant_name_id) {
        return $this->db->get_where('covenant_name', array('covenant_name_id' => $covenant_name_id))->row();
    }

    public function update_covenant_name($covenant_name_id, $data) {
        $this->db->where('covenant_name_id', $covenant_name_id);
        $this->db->update('covenant_name', $data);
    }

    public function delete_covenant_name($covenant_name_id) {
        $this->db->where('covenant_name_id', $covenant_name_id);
        $this->db->delete('covenant_name');
    }
}
?>
