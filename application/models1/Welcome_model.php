<?php
class welcome_model extends CI_Model{

    public function __construct(){
        parent:: __construct();
    }


public function auth_check($data)
    {
        $query = $this->db->get_where('user_new', $data);
		///$query = $this->db->get_where('subscribers_tbl',array('status'=> active','email' => 'info@arjun.net.in'));
		///echo $this->db->last_query();
		 ////exit;
        if($query){   
         return $query->row();
		 
        }
        return false;
    }
	
	function create_record($form_data,$tble)
	{
		$this->db->insert($tble, $form_data);
		
		
		if ($this->db->affected_rows() == '1')
		{
			return TRUE;
		}
		
		return FALSE;
	}
	function edit_record($form_data,$tbl,$field,$id) {
        $this->db->where($field, $id);
		$i = $this->db->update($tbl,$form_data); 	  
		return $i;
	}

   function get_allJsonData()
{
    $arr = array();
    $this->db->from('size');
    $this->db->order_by("size_id", "asc");
    $query = $this->db->get();
    foreach($query->result_object() as $rows )
    {
        $arr[] = $rows;
    }
    return "{\"data\":" .json_encode($arr). "}";
}
///////////////////////////////reporting/////////////////


function display($table,$where = NULL)
	{
		if($where ){
		$this->db->where($where);
		}
		$query = $this->db->get($table);
		
	//echo $this->db->last_query();
	return $query->result();
	}


   function update_about($form_data) {
        ///$this->db->where('web_about_id',$id);
		$i = $this->db->update('web_about_us', $form_data); 	  
		return $i;
	}
	
function update_record($form_data,$tableName) {
        ///$this->db->where('web_about_id',$id);
		$i = $this->db->update($tableName, $form_data); 	  
		return $i;
	}



}
	
	
	

	?>