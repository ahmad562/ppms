<?php
class Hr_qcbs_awarded_model extends CI_Model {
    public function get_awards() {
        return $this->db->get('hr_qcbs_awarded')->result();
    }

    public function add_award($data) {
        $this->db->insert('hr_qcbs_awarded', $data);
    }

    public function update_award($id, $data) {
        $this->db->where('award_id', $id);
        $this->db->update('hr_qcbs_awarded', $data);
    }

    public function get_award_by_id($id) {
        return $this->db->get_where('hr_qcbs_awarded', array('award_id' => $id))->row();
    }

    public function delete_award($id) {
        $this->db->where('award_id', $id);
        $this->db->delete('hr_qcbs_awarded');
    }
}
?>
