<?php 

class Home extends Controller{
    public function __construct(){
        $this->checkSessionId();
    }
    public function index(){
        $data['title'] = 'Home';
        $this->view('home/index', $data);
    }
}