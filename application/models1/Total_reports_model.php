<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Total_reports_model extends CI_Model {

    public function get_reports($flag_id) {
        $this->db->where('flag_id', $flag_id);
        return $this->db->get('total_reports')->result_array();
        //////////////////////////////////



////////////////////////////////////////////////////////
    }

    public function get_report($report_id) {
        return $this->db->get_where('total_reports', array('report_id' => $report_id))->row_array();
    }

    public function insert_report($data) {
        $this->db->insert('total_reports', $data);
    }

    public function update_report($report_id, $data) {
        $this->db->where('report_id', $report_id);
        $this->db->update('total_reports', $data);
    }

    public function delete_report($report_id) {
        $this->db->where('report_id', $report_id);
        $this->db->delete('total_reports');
    }
}
