<?php
    
    defined('BASEPATH') OR exit('No direct script access allowed');
    
    class mahasiswa extends CI_Controller {

        public function __construct(){
            parent::__construct();
            $this->load->model('Mahasiswa_model', 'mahasiswa');
            $this->load->library('form_validation');

            if($this->session->userdata('level')!="dosen"){
                redirect('login','refresh');
            }
        }
    
        public function index()
        {   
            $data['title']=ucfirst($this->session->userdata('username'));
            $key=$this->input->post('keyword');
            $data['mahasiswa']=$this->mahasiswa->getMahasiswa($this->session->userdata('id'));
            $this->load->view('template/header_datatables',$data);
            $this->load->view('mahasiswa/index',$data);
            $this->load->view('template/footer_datatables');
        }

        public function detail($id){
            $data['title']='Dosen';
            $data['mahasiswa']=$this->mahasiswa->getMahasiswaInfo($id);
            $this->load->view('template/header', $data);
            $this->load->view('mahasiswa/detail', $data);
            $this->load->view('template/footer');
            
        }
    
    }
    
    /* End of file mahasiswa.php */
    
?>