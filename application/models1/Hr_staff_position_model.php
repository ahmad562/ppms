<?php
class Hr_staff_position_model extends CI_Model {
    public function get_positions() {
    $this->db->select('*');
    $this->db->from('hr_staff_position');
    $this->db->join('organization', 'hr_staff_position.organization_id = organization.organization_id');
    return $this->db->get()->result();


    }

    public function get_position_by_id($id) {
        return $this->db->get_where('hr_staff_position', array('hr_staff_id' => $id))->row();
    }

    public function add_position($data) {
        $this->db->insert('hr_staff_position', $data);
        return $this->db->insert_id();
    }

    public function update_position($id, $data) {
        $this->db->where('hr_staff_id', $id);
        return $this->db->update('hr_staff_position', $data);
    }

    public function delete_position($id) {
        $this->db->where('hr_staff_id', $id);
        return $this->db->delete('hr_staff_position');
    }
}
?>
