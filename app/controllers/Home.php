<?php 

class Home extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->itemModel = $this->model("ItemModel");
        $this->customerModel = $this->model("CustomerModel");
        $this->transactionModel = $this->model("TransactionModel");
    }

    // ! View
    public function index(){
        $data = [
            'title' => 'Home',
            'content' => 'home/index',
            'totalItem' => $this->itemModel->getTotalItem()['COUNT'],
            'totalTransaction' => $this->transactionModel->getTotalTransaction()['COUNT'],
            'customer' => $this->customerModel->itemCount()['MAX'],
            'transaction' => $this->transactionModel->getInvoice("LIMIT 5")
        ];
        $this->view('main/index', $data);
    }
}