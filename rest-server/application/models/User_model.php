<?php

class User_model extends CI_Model{
    public function getUser($username=null){
        if($username===null){
            return $this->db->get('user')->result_array();
        }else{
            return $this->db->get_where('user', ['username'=>$username])->result_array();
        }
    }
    public function deleteUser($id){
        $this->db->delete('user',['id'=>$id]);
        return$this->db->affected_rows();
    }
    public function createUser($data){
        $this->db->insert('user', $data);
        return $this->db->affected_rows();
    }
    public function updateUser($data,$username){
        $this->db->update('user', $data, ['username'=>$username]);
        return $this->db->affected_rows();
    }
}
