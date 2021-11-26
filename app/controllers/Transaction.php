<?php

class Transaction extends Controller{
    public function __construct()
    {
        $this->itemModel = $this->model("itemModel");
    }

    // view for transaction
    public function index() {
        $data = [
            'title' => 'Transaction'
        ];
        $this->view('transaction/index', $data);
    }
}