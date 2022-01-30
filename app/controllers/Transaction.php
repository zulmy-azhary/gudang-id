<?php

class Transaction extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->checkRoleUser(3);
        $this->itemModel = $this->model("ItemModel");
        $this->stockModel = $this->model("StockModel");
        $this->customerModel = $this->model("CustomerModel");
        $this->transactionModel = $this->model("TransactionModel");
    }

    // ! View
    // view for transaction
    public function index() {
        $data = [
            'title' => 'Add Transaction',
            'content' => 'transaction/index',
            'custData' => $this->customerModel->getCustomer(),
            'itemData' => $this->itemModel->getData("WHERE stok != 0"),
            'invoice' => $this->transactionModel->invoiceNumber()
        ];
        $this->view('main/index', $data);
    }
    public function status() {
        $data = [
            'title' => 'Transaction Status',
            'content' => 'transaction/status'
        ];
        $this->view('main/index', $data);
    }
    public function history() {
        $data = [
            'title' => 'Transaction History',
            'content' => 'transaction/history',
            'items' => $this->transactionModel->getInvoice()
        ];
        $this->view('main/index', $data);
    }

    public function process(){
        if(isset($_POST['processTransaction'])){
            $this->transactionModel->createInvoice($_POST);
            $this->transactionModel->createItem($_POST);
            $this->itemModel->updateStockOut($_POST);
            $this->stockModel->addStockOut($_POST);
            header('Location: ' . BASEURL . '/transaction');
            exit; 
        }
    }

    // ! Delete transaction history 
    public function deleteTransaction($id){
        $data = $this->transactionModel->getInvoiceById($id);
        if($this->transactionModel->deleteTransaction($data['order_id']) > 0){
            $invoice = $this->transactionModel->getInvoiceItems($data['invoice']);
            $this->transactionModel->deleteTransactionItems($invoice);
            $this->itemModel->retrieveTransaction($invoice);
            for($i = 0; $i < count($invoice); $i++){
                $idBarang = $this->itemModel->getItemId($invoice[$i]);
                $this->stockModel->deleteStockOut($idBarang['id_barang']);
            }

            header('Location: ' . BASEURL . '/transaction/history');
            exit;  
        }
    }

    // ! Ajax
    public function getHistory(){

        $getInvoice = $this->transactionModel->getInvoiceById($_POST['id']);
        $getItems = $this->transactionModel->getInvoiceItems($getInvoice['invoice']);

        $data = [
            'invoice' => $getInvoice,
            'items' => $getItems
        ];

        echo json_encode($data);
    }
}