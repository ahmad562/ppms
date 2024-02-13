<?php
class Covenant_detail_model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    public function create_covenant_detail($data) {
        $this->db->insert('covenant_detail', $data);
        return $this->db->insert_id();
    }

    public function get_covenant_details() {
        return $this->db->get('covenant_detail')->result();
    }

    public function get_covenant_detail($covenant_detail_id) {
        return $this->db->get_where('covenant_detail', array('covenant_detail_id' => $covenant_detail_id))->row();
    }

    public function update_covenant_detail($covenant_detail_id, $data) {
        $this->db->where('covenant_detail_id', $covenant_detail_id);
        $this->db->update('covenant_detail', $data);
    }

    public function delete_covenant_detail($covenant_detail_id) {
        $this->db->where('covenant_detail_id', $covenant_detail_id);
        $this->db->delete('covenant_detail');
    }
}
?>
