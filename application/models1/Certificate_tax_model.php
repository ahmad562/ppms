<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Certificate_tax_model extends CI_Model {

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function get_all_certificate_tax()
    {
        $query = $this->db->get('certificate_tax');
        return $query->result_array();
    }

    public function set_certificate_tax($data)
    {
       
        return $this->db->insert('certificate_tax', $data);
    }

    public function get_certificate_tax_by_id($ctp_id)
    {
        $query = $this->db->get_where('certificate_tax', array('ctp_id' => $ctp_id));
        return $query->row_array();
    }

    public function update_record($ctp_id,$data)
    {
        $this->db->where('ctp_id', $ctp_id);
        $this->db->update('certificate_tax', $data);
        ///////////////////////////
       
    }

    public function delete_certificate_tax($ctp_id)
    {
        return $this->db->delete('certificate_tax', array('ctp_id' => $ctp_id));
    }
}
?>