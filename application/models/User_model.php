<?php

class User_model extends CI_model
{
   
    function create($formsArray){
        $this->db->insert('user',$formsArray);
    }
    function getAll(){
       return $users = $this->db->get('user')->result_array();
    }
    function getUser($userId){
    $this->db->where('id',$userId);
    return $user = $this->db->get('user')->row_array();
        
    }

    function updateUser($userId,$formsArray){
      
        $this->db->where('id',$userId);
        $this->db->update('user',$formsArray);
    }

    function deleteUser($userId){
        $this->db->where('id',$userId);
        $this->db->delete('user');
    }
}
?>