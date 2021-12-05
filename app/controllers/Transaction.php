<?php

class Transaction extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->itemModel = $this->model("itemModel");
        $this->checkRoleUser(3);
    }

    // view for transaction
    public function index() {
        $data = [
            'title' => 'Transaction'
        ];
        $this->view('transaction/index', $data);
    }
}