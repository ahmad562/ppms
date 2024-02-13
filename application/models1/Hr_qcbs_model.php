<?php
class Hr_qcbs_model extends CI_Model {
    public function get_qcbs_activities() {

        $this->db->select('*');
$this->db->from('hr_qcbs');
$this->db->join('hr_consulting_firms', 'hr_qcbs.hr_cfid = hr_consulting_firms.hr_cfid');

// Fetch the result
$result = $this->db->get()->result();

// Return the result
return $result;

    }

    public function add_qcbs_activity($data) {
        $this->db->insert('hr_qcbs', $data);
    }

    public function update_qcbs_activity($id, $data) {
        $this->db->where('qcbs_id', $id);
        $this->db->update('hr_qcbs', $data);
    }

    public function get_qcbs_activity_by_id($id) {
        return $this->db->where('qcbs_id', $id)->get('hr_qcbs')->row();
    }

    public function delete_qcbs_activity($id) {
        $this->db->where('qcbs_id', $id);
        $this->db->delete('hr_qcbs');
    }

/////////////////////////////Package for individual///////////////////

public function get_packages() {
    $this->db->select('*');
    $this->db->from('hr_individual_package as hip');
    $this->db->join('organization as o', 'hip.organization_id = o.organization_id');
    return $this->db->get()->result();
}

public function add_package($data) {
    $this->db->insert('hr_individual_package', $data);
}

public function get_package_by_id($id) {
    $this->db->select('*');
    $this->db->from('hr_individual_package as hip');
    $this->db->join('organization as o', 'hip.organization_id = o.organization_id');
    $this->db->where('hip.hr_in_package_id', $id);
    return $this->db->get()->row();
}

public function update_package($id, $data) {
    $this->db->where('hr_in_package_id', $id);
    $this->db->update('hr_individual_package', $data);
}

public function delete_package($id) {
    $this->db->where('hr_in_package_id', $id);
    $this->db->delete('hr_individual_package');
}
//////////////////Get Icrm submission///////////
public function display_icrm() {
    $this->db->select('*');
    $this->db->from('hr_icrm as hip');
    $this->db->join('hr_individual_package as o', 'hip.hr_in_package_id = o.hr_in_package_id');
    return $this->db->get()->result();
}
public function add_icrms_record($data) {
    $this->db->insert('hr_icrm', $data);
}
public function edit_icrms_record($id, $data) {
    $this->db->where('icrm_id', $id);
    $this->db->update('hr_icrm', $data);
}

public function delete_icrms_record($id) {
    $this->db->where('icrm_id', $id);
    $this->db->delete('hr_icrm');
}
//////////////////////////////////award///////////////////////////////////

public function display_icrms_award() {
    // Fetch activities from the database
$this->db->select('*');
$this->db->from('hr_icrm_awarded');
$this->db->join('hr_individual_package', 'hr_individual_package.hr_in_package_id = hr_icrm_awarded.hr_cfid');
$result = $this->db->get()->result();
return $result;
}

public function add_icrms_award_record($data) {
    $this->db->insert('hr_icrm_awarded', $data);
}

public function get_awarded_activity_by_id($id) {
    return $this->db->get_where('hr_icrm_awarded', array('award_id' => $id))->row();
}

public function edit_icrms_award_record($id, $data) {
    $this->db->where('award_id', $id);
    $this->db->update('hr_icrm_awarded', $data);
}

public function delete_awarded_activity($id) {
    $this->db->where('award_id', $id);
    $this->db->delete('hr_icrm_awarded');
}

}
?>
