<?php 

class Customer extends Controller{
    public function index(){
        $data = [
            'title' => 'Customer List'
        ];
        $this->view('customer/index', $data);
    }
}

?>