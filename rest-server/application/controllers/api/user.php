<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require APPPATH . 'libraries/REST_Controller.php';
require APPPATH . 'libraries/Format.php';
class User extends REST_Controller{
    public function __construct($config = 'rest') {
        parent::__construct($config);
        $this->load->helper('url');
        $this->load->model('User_model','user');
    }
    public function index_get()
    {
        $username=$this->get('username');
        if($username==null){
            $user=$this->user->getUser();
        } else{
            $user=$this->user->getUser($username);
        }
        if($user){
            $this->response([
                'status'=>true,
                'data'=>$user
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status'=>false,
                'data'=>'id not found'
            ], REST_Controller::HTTP_NOT_FOUND);
        }
    }

    public function index_delete(){
        $id=$this->delete('id');
        if($id===null){
            $this->response([
                'status'=>false,
                'message'=>'provide an id!'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }else{
            if($this->user->deleteUser($id)>0){
                $this->response([
                    'status'=>true,
                    'id'=>$id,
                    'message'=>'deleted'
                ], REST_Controller::HTTP_OK);
            }else{
                $this->response([
                    'status'=>false,
                    'message'=>'id not found!'
                ], REST_Controller::HTTP_BAD_REQUEST);
            }
        }
    }

    public function index_post(){
        $data=[
            'username'=> $this->post('username'),
            'password'=> sha1($this->post('password')),
            'level'=> $this->post('level')
        ];
        if($this->user->createUser($data)>0){
            $this->response([
                'status'=>true,
                'message'=>'User has been created'
            ], REST_Controller::HTTP_CREATED);
        }else{
            $this->response([
                'status'=>false,
                'message'=>'failed to create new data'
            ], REST_Controller::HTTP_BAD_REQUEST);
        }
    }
    public function index_put(){
        $username=$this->put('username');
        $data=[
            'password'=> sha1($this->put('password')),
            'level'=> $this->put('level')
        ];
        if($this->user->updateUser($data,$username)>0){
            $this->response([
                'status'=>true,
                'message'=>'data User has been updated'
            ], REST_Controller::HTTP_OK);
        }else{
            $this->response([
                'status'=>false,
                'message'=>'failed to update data!'
            ],REST_Controller::HTTP_BAD_REQUEST);
        }
    }
}
