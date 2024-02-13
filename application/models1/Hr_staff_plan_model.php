<?php
class Hr_staff_plan_model extends CI_Model {
    public function get_plans() {
        return $this->db->select('hr_staff_plan.*, organization.organization_name')
        ->from('hr_staff_plan')
        ->join('organization', 'hr_staff_plan.organization_id = organization.organization_id')
        ->get()
        ->result();
    }

    public function add_plan($data) {
        $this->db->insert('hr_staff_plan', $data);
    }

    public function update_plan($id, $data) {
        $this->db->where('hr_staff_plan_id', $id);
        $this->db->update('hr_staff_plan', $data);
    }

    public function get_plan_by_id($id) {
        return $this->db->select('*')
        ->from('hr_staff_plan')
        ->join('organization', 'hr_staff_plan.organization_id = organization.organization_id')
        ->where('hr_staff_plan.hr_staff_plan_id', $id)->row();
    }

    public function delete_plan($id) {
        $this->db->where('hr_staff_plan_id', $id);
        $this->db->delete('hr_staff_plan');
    }
}
?>
