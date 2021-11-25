<?php

class Item extends Controller{
    public function __construct()
    {
        $this->itemModel = $this->model("itemModel");
    }

    // view for transaction
    public function index() {
        $data = [
            'title' => 'Transaction',
            'title' => $this->itemModel->getData()
        ];
        $this->view('transaction/index', $data);
    }
}