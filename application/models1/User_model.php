<?php 
class User_model extends CI_Model{
    public function showAll(){
       $query = $this->db->get('vendor');
        if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
    }
     public function addUser($data){
        return $this->db->insert('vendor', $data);
    }
        public function updateUser($id,$field){
        $this->db->where('vendor_id', $id);
        $this->db->update('vendor', $field);
        if($this->db->affected_rows() >0){
            return true;
        }else{
            return false;
        }
        
    }
      public function deleteUser($id){
         $this->db->where('vendor_id', $id);
        $this->db->delete('vendor');
           if($this->db->affected_rows() >0){
            return true;
        }else{
            return false;
        }
        
    }
    public function searchUser($match) {
        $field = array('firstname','lastname','gender','birthday','email','contact', 'address');    
        $this->db->like('concat('.implode(',',$field).')',$match);
        $query = $this->db->get('vendor');
         if($query->num_rows() > 0){
            return $query->result();
        }else{
            return false;
        }
}
}
?>