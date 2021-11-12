<?php 

class About extends Controller{
    public function index(){
        $data = [
            'title' => 'About'
        ];
        $this->view('about/index', $data);
    }

}