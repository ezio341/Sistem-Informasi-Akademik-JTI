<?php
    class login extends CI_Controller 
    {
        
        public function __construct()
        {
            parent::__construct();
            $this->load->model('login_model');
        }
        
        public function index()
        {   
            $this->session->sess_destroy();
            $data['title']='Login';
           
            $this->load->view('template/header_login',$data);
            $this->load->view('login/index',$data);
            $this->load->view('template/footer');
        }

        public function proses_login(){
            $username=htmlspecialchars($this->input->post('uname1'));
            $password=htmlspecialchars($this->input->post('pwd1'));
            
            $check= $this->login_model->login($username, $password);
            if($check){
                foreach($check as $chk);
                $this->session->set_userdata('id', $chk["id"]);
                $this->session->set_userdata('username',$chk["username"]);
                $this->session->set_userdata('level',$chk["level"]);
                
                if($this->session->userdata('level')=="dosen"){
                    redirect('mahasiswa/index');
                }
            }else{
                $data['pesan']="username dan password anda salah";
                $data['title']='login';
                $this->load->view('template/header_login',$data);
                $this->load->view('login/index',$data);
                $this->load->view('template/footer');
            }
        }
        public function logout(){
            $this->session->sess_destroy();
            
            redirect('login','refresh');
            
        }
    }
    
?>