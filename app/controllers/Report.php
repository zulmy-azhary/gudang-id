<?php 

class Report extends Controller{
    public function __construct(){
        $this->checkSessionId();
    }
    // ! View
    public function item(){
        $data = [
            'title' => 'Item Report',
            'content' => 'report/item'
        ];
        $this->view('main/index', $data);
    }
    public function transaction(){
        $data = [
            'title' => 'Transaction Report',
            'content' => 'report/transaction'
        ];
        $this->view('main/index', $data);
    }
}