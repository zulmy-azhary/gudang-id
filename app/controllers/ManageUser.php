<?php 

class ManageUser extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->checkNotRoleUser(1);
    }
    
    public function index(){
        $data = [
            'title' => 'User Management'
        ];

        $this->view('manageuser/index', $data);
    }
    
    public function add(){
        $data = [
            'title' => 'User Management'
        ];

        $this->view('manageuser/add', $data);
    }
}