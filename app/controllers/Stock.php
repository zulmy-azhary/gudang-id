<?php 

class Stock extends Controller{
    public function __construct()
    {
        $this->itemModel = $this->model("ItemModel");
        $this->userModel = $this->model("UserModel");
        $this->stockModel = $this->model("StockModel");
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
            $this->stockModel->add_stock_in($_POST);
            $this->itemModel->update_stock_in($_POST);
            header('Location: ' . BASEURL . '/item');
            exit;  
        }
    }

}
