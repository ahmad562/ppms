<?php
class Hr_consulting_firms_model extends CI_Model {
    public function get_firms() {
        return $this->db->get('hr_consulting_firms')->result();
    }

    public function add_firm($data) {
        $this->db->insert('hr_consulting_firms', $data);
    }

    public function update_firm($id, $data) {
        $this->db->where('hr_cfid', $id);
        $this->db->update('hr_consulting_firms', $data);
    }

    public function get_firm_by_id($id) {
        return $this->db->where('hr_cfid', $id)->get('hr_consulting_firms')->row();
    }

    public function delete_firm($id) {
        $this->db->where('hr_cfid', $id);
        $this->db->delete('hr_consulting_firms');
    }
}
?>
