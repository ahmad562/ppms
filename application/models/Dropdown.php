<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dropdown extends CI_Model{
    function __construct() {
        $this->countryTbl = 'countries';
        $this->stateTbl = 'ppms_subproject';
        $this->cityTbl = '    cities';
    }
    
    /*
     * Get country rows from the countries table
     */
    function getCountryRows($params = array()){
        $this->db->select('c.id, c.name');
        $this->db->from($this->countryTbl.' as c');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                if(strpos($key,'.') !== false){
                    $this->db->where($key,$value);
                }else{
                    $this->db->where('c.'.$key,$value);
                }
            }
        }
        $this->db->where('c.status','1');
        
        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

        //return fetched data
        return $result;
    }
    
    /*
     * Get state rows from the countries table
     */
    function getStateRows($params = array()){
        $this->db->select('s.subproject_id, s.subproject_name');
        $this->db->from($this->stateTbl.' as s');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                if(strpos($key,'.') !== false){
                    $this->db->where($key,$value);
                }else{
                    $this->db->where('s.'.$key,$value);
                }
            }
        }
        
        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

        //return fetched data
        return $result;
    }
    
    /*
     * Get city rows from the countries table
     */
    function getCityRows($params = array()){
        $this->db->select('c.id, c.name');
        $this->db->from($this->cityTbl.' as c');
        
        //fetch data by conditions
        if(array_key_exists("conditions",$params)){
            foreach ($params['conditions'] as $key => $value) {
                if(strpos($key,'.') !== false){
                    $this->db->where($key,$value);
                }else{
                    $this->db->where('c.'.$key,$value);
                }
            }
        }
        
        $query = $this->db->get();
        $result = ($query->num_rows() > 0)?$query->result_array():FALSE;

        //return fetched data
        return $result;
    }

    function getCityDepartment($postData){
        $response = array();
     
        // Select record
        $this->db->select('subproject_id,subproject_name');
        $this->db->where('project_id', $postData['project_id']);
        $q = $this->db->get('ppms_subproject');
        $response = $q->result_array();
    
        return $response;
      }

      function getContractor($postData){
        $response = array();
     
        // Select record
        $this->db->select('emp_id,emp_name');
        $this->db->where('subproject_id', $postData['sub_project_idss']);
        $this->db->from('ppms_subproject_assign');
        $this->db->join('emp','emp.emp_id=ppms_subproject_assign.contractor_id','inner');
        $q=$this->db->get();
        $response = $q->result_array();
    
        return $response;
      }
      function getSectors($postData){
        $response = array();
     
        // Select record
        $this->db->select('sector_id,sector_name');
        $this->db->where('output_id', $postData['outputID']);
        $this->db->from('ppms_sector');
        //$this->db->join('emp','emp.emp_id=ppms_subproject_assign.contractor_id','inner');
        $q=$this->db->get();
        $response = $q->result_array();
    
        return $response;
      }

      function get_projects($postData){
        $response = array();
     
        // Select record
        $this->db->select('project_id,project_name');
        $this->db->where('sector_id', $postData['sectors_id']);
        $this->db->from('ppms_project');
        //$this->db->join('emp','emp.emp_id=ppms_subproject_assign.contractor_id','inner');
        $q=$this->db->get();
        $response = $q->result_array();
    
        return $response;
      } 

      function get_sub_projects($postData){
        $response = array();
     
        // Select record
        $this->db->select('subproject_id,subproject_name');
        $this->db->where('project_id', $postData['project_id']);
        $this->db->from('ppms_subproject');
        //$this->db->join('emp','emp.emp_id=ppms_subproject_assign.contractor_id','inner');
        $q=$this->db->get();
        $response = $q->result_array();
    
        return $response;
      }
      function get_sub_project_city_wise($postData){
        $response = array();
     
        // Select record
        $this->db->select('subproject_id,subproject_name,project_name');
        $this->db->where('city_id', $postData['city_id']);
        $this->db->from('ppms_subproject');
        $this->db->join('ppms_project','ppms_project.project_id=ppms_subproject.project_id','inner');
        $q=$this->db->get();
        $response = $q->result_array();
    
        return $response;
      }
      function get_sub_projects_sites($postData){
        $response = array();
     
        // Select record
        $this->db->select('sps_id,site_name');
        $this->db->where('subproject_id', $postData['sub_project_id']);
        $this->db->from('ppms_subproject_site');
        //$this->db->join('emp','emp.emp_id=ppms_subproject_assign.contractor_id','inner');
        $q=$this->db->get();
        $response = $q->result_array();
    
        return $response;
      }

 function get_sub_projects_sub($postData){
        $response = array();
     
        // Select record
        $this->db->select('project_area_id,project_area_name');
        $this->db->where('subproject_id', $postData['sub_project_id']);
        $this->db->from('ppms_subproject_area');
        //$this->db->join('emp','emp.emp_id=ppms_subproject_assign.contractor_id','inner');
        $q=$this->db->get();
        $response = $q->result_array();
    
        return $response;
      }


}