<?php 
class Hr_non_consulting_services_model extends CI_Model
{
    public function getRecords()
    {
        // Fetch all records from the table
$this->db->select('*');
$this->db->from('hr_non_consulting_services');
$this->db->join('emp', 'hr_non_consulting_services.contractor_id = emp.emp_id', 'left');
$this->db->join('ppms_subproject', 'hr_non_consulting_services.subproject_id = ppms_subproject.subproject_id', 'left');
return $result = $this->db->get()->result();
         
    }

    public function getRecordById($id)
    {
        // Fetch a specific record by ID
        return $this->db->get_where('hr_non_consulting_services', array('non_consul_id' => $id))->row();
    }

    public function addRecord($data)
    {
        // Add a new record to the table
        $this->db->insert('hr_non_consulting_services', $data);
    }

    public function updateRecord($id, $data)
    {
        // Update a specific record
        $this->db->where('non_consul_id', $id);
        $this->db->update('hr_non_consulting_services', $data);
        //echo $this->db->last_query();
    }

    public function deleteRecord($id)
    {
        // Delete a record by ID
        $this->db->delete('hr_non_consulting_services', array('non_consul_id' => $id));
    }
}
?>