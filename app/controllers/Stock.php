<?php 

class Stock extends Controller{
    public function __construct()
    {
        $this->itemModel = $this->model("ItemModel");
        $this->userModel = $this->model("UserModel");
        $this->stockModel = $this->model("StockModel");
    }

    //view for list of stock in
    public function list(){
        $data = [
            'title' => 'Stock List',
            'items' => $this->stockModel->getStockIn()
        ];
        $this->view('stock/index', $data);
    }

    // View for stock in 
    public function in(){
        $data = [
            'title' => 'Stock In',
            'items' => $this->itemModel->getData()
        ];
        $this->view('stock/stock-in', $data);
    }

    public function process(){
        if(isset($_POST['stock_in_add'])){
            $this->stockModel->addStockIn($_POST);
            $this->itemModel->updateStockIn($_POST);
            header('Location: ' . BASEURL . '/stock/list');
            exit;  
        }
    }

    public function stockInDelete($stockId, $itemId){
        if($this->stockModel->getStockInById($stockId) !== null){
            $qty = $this->stockModel->getStockInById($stockId)['qty'];
            $data = [
                'qty' => $qty,
                'id_barang' => $itemId
            ];
            $this->itemModel->deleteStockIn($data);
            $this->stockModel->deleteStockIn($stockId);
            header('Location: ' . BASEURL . '/stock/list');
            exit;
        }
    }

    public function getStockIn(){
        echo json_encode($this->stockModel->getStockInDetail($_POST['stockId']));
    }
}
