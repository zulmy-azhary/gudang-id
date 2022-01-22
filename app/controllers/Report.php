<?php 

class Report extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->stockModel = $this->model("StockModel");
        $this->transactionModel = $this->model("TransactionModel");
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
            'content' => 'report/transaction',
            'items' => $this->transactionModel->getInvoice("", "ASC")
        ];
        $this->view('main/index', $data);
    }

    // ! Ajax
    public function getStockReport(){
        echo json_encode($this->stockModel->getStock($_POST['type']));
    }
}