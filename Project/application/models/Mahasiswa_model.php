<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class Mahasiswa_model extends CI_Model {
        public function getMahasiswa($id){
            return $this->db->get_where('mahasiswa', ['user_id'=>$id])->result_array();
        }
        public function getMahasiswaInfo($id){
            return $this->db->get_where('mahasiswa', ['id'=>$id])->result_array();
        }
    }
    
    /* End of file Mahasiswa_model.php */
    
?>