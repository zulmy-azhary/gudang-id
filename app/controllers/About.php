<?php 

class About extends Controller{
    public function __construct(){
        $this->checkSessionId();
    }
    
    // ! View
    public function index(){
        $data = [
            'title' => 'About',
            'content' => 'about/index'
        ];
        $this->view('main/index', $data);
    }

}