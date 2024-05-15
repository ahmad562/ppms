<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_performance_model extends CI_Model {

    public function getPerformances() {
    $this->db->select('*');
    $this->db->from('cad_performance cp');
    $this->db->join('cad_product p', 'cp.cad_product_id = p.cad_product_id', 'left');
    $query = $this->db->get();
    return $query->result();
}
    

    public function addPerformance($data) {
        $this->db->insert('cad_performance', $data);
    }
    public function add_cad_disbursement_target($data) {
        $this->db->insert('cad_disbursement_target', $data);
    }
    public function add_cad_achieved($data) {
        $this->db->insert('ipc_temp_payment', $data);
    }
    public function getPerformanceById($id) {
        $this->db->select('cp.*, p.cad_product_name');
        $this->db->from('cad_performance cp');
        $this->db->join('cad_product p', 'cp.cad_product_id = p.cad_product_id', 'left');
        $this->db->where('cp.cad_performance_id', $id);
        $query = $this->db->get();
        return $query->row();
    }

    public function updatePerformance($id, $data) {
        $this->db->where('cad_performance_id', $id);
        $this->db->update('cad_performance', $data);
    }

    public function deletePerformance($id) {
        $this->db->where('cad_performance_id', $id);
        $this->db->delete('cad_performance');
    }
}
?>