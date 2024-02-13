<?php
class Hr_consultancy_contracts_model extends CI_Model {
    public function getContracts() {
        $this->db->select('*');
        $this->db->from('hr_consultancy_contracts');
        $this->db->join('ppms_service_tbl', 'hr_consultancy_contracts.emp_id = ppms_service_tbl.service_id');
        $result = $this->db->get()->result();
        return $result;
    }

    public function addContract($data) {
        $this->db->insert('hr_consultancy_contracts', $data);
    }

    public function get_contract_by_id($id) {
        //return $this->db->get_where('hr_consultancy_contracts', array('hr_cid' => $id))->row();

        $this->db->select('*');
$this->db->from('hr_consultancy_contracts');
$this->db->join('ppms_service_tbl', 'hr_consultancy_contracts.emp_id = ppms_service_tbl.service_id');
$this->db->where('hr_consultancy_contracts.hr_cid', $id);
$result = $this->db->get()->row_array();  // Corrected to use row_array()
return $result;


    }

    public function update_contract($id, $data) {
        $this->db->where('hr_cid', $id);
        $this->db->update('hr_consultancy_contracts', $data);
    }

    public function delete_contract($id) {
        $this->db->where('hr_cid', $id);
        $this->db->delete('hr_consultancy_contracts');
    }
}
?>
