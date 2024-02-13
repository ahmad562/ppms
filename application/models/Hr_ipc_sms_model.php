
<?php 
class Hr_ipc_sms_model extends CI_Model {

   

    // Get all records
    public function get_all() {
        $this->db->select('*');
        $this->db->from('hr_ipc_sms');
        //$this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
        $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
        $this->db->join('sms_group', 'hr_ipc_sms.sms_group_id = sms_group.sms_group_id', 'left');
        //echo $this->db->last_query();
        return $this->db->get()->result();
    }

    // Get record by ID
    public function get_by_id($id) {
        
        $this->db->select('*');
        $this->db->from('hr_ipc_sms');
        $this->db->join('organization', 'hr_ipc_sms.org_id = organization.organization_id', 'left'); // Adjust the join conditions
        $this->db->join('ppms_service_tbl', 'hr_ipc_sms.emp_id = ppms_service_tbl.service_id', 'left'); // Adjust the join conditions
        $this->db->where('hr_ipc_sms.hr_ipc_sms_id', $id);
        
        // Use row_array for single record query
        return $this->db->get()->row_array();
    }

    // Insert new record
    public function insert($data) {
        $this->db->insert('hr_ipc_sms', $data);
    }

    // Update record
    public function update($id, $data) {
        $this->db->where('hr_ipc_sms_id', $id);
        $this->db->update('hr_ipc_sms', $data);
    }

    // Delete record
    public function delete($id) {
        $this->db->where('hr_ipc_sms_id', $id);
        $this->db->delete('hr_ipc_sms');
    }
}
?>