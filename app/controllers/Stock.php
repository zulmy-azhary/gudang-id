<?php 

class Stock extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->itemModel = $this->model("ItemModel");
        $this->userModel = $this->model("UserModel");
        $this->stockModel = $this->model("StockModel");
    }

    // ! View
    //View for list of stock in
    public function index(){
        $data = [
            'title' => 'Stock List',
            'content' => 'stock/index',
            'items' => $this->stockModel->getStock("in")
        ];
        $this->view('main/index', $data);
    }

    // View for stock in 
    public function in(){
        $data = [
            'title' => 'Stock In',
            'content' => 'stock/in',
            'items' => $this->itemModel->getData()
        ];
        $this->checkRoleUser(3);
        $this->view('main/index', $data);
    }

    // ! Method
    public function process(){
        if(isset($_POST['stock_in_add'])){
            $this->stockModel->addStockIn($_POST);
            $this->itemModel->updateStockIn($_POST);
            header('Location: ' . BASEURL . '/stock');
            exit;  
        }
    }

    public function stockInDelete($stockId, $itemId){
        if($this->stockModel->getStockById($stockId) !== null){
            $qty = $this->stockModel->getStockById($stockId)['qty'];
            $data = [
                'qty' => $qty,
                'id_barang' => $itemId
            ];
            $this->itemModel->deleteStockIn($data);
            $this->stockModel->deleteStock($stockId);
            header('Location: ' . BASEURL . '/stock');
            exit;
        }
    }
}
