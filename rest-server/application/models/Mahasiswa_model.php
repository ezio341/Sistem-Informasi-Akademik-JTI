<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mahasiswa_model extends CI_Model {
        public function getMahasiswa($id=null){
            if($id===null){
                return $this->db->get('mahasiswa')->result_array();
            }else{
                return $this->db->get_where('mahasiswa', ['user_id'=>$id])->result_array();
            }
        }
        
        public function deleteMahasiswa($id){
            $this->db->delete('mahasiswa',['user_id'=>$id]);
            return $this->db->affected_rows();
        }

        public function createMahasiswa($data){
            $this->db->insert('mahasiswa', $data);
            return $this->db->affected_rows();
        }
        public function updateMahasiswa($data,$id){
            $this->db->update('mahasiswa', $data, ['user_id'=>$id]);
            return 
            $this->db->affected_rows();
        }
    }
    
    /* End of file Mahasiswa_model.php */
    
?>