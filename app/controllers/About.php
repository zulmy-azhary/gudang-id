<?php 

class About extends Controller{
    public function __construct(){
        $this->checkSessionId();
    }
    public function index(){
        $data = [
            'title' => 'About'
        ];
        $this->view('about/index', $data);
    }

}