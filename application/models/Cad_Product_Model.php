<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cad_Product_Model extends CI_Model {

    public function getAllProducts() {
        $query = $this->db->get('cad_product');
        return $query->result();
    }

    public function addProduct($data) {
        $this->db->insert('cad_product', $data);
    }

    public function getProductById($id) {
        $this->db->where('cad_product_id', $id);
        $query = $this->db->get('cad_product');
        return $query->row();
    }

    public function updateProduct($id, $data) {
        $this->db->where('cad_product_id', $id);
        $this->db->update('cad_product', $data);
    }

    public function deleteProduct($id) {
        $this->db->where('cad_product_id', $id);
        $this->db->delete('cad_product');
    }
}
?>
