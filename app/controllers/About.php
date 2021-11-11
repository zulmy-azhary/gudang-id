<?php 

class About extends Controller{
    public function index(){
        $data = [
            'title' => 'About'
        ];

        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');

    }

}