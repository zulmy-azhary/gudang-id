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
            'title' => 'Transaction List'
        ];
        $this->view('transaction/index', $data);
    }
    public function status() {
        $data = [
            'title' => 'Transaction Status'
        ];
        $this->view('transaction/status', $data);
    }
    public function history() {
        $data = [
            'title' => 'Transaction History'
        ];
        $this->view('transaction/history', $data);
    }
}