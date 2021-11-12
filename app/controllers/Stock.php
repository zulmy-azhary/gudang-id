<?php 

class Stock extends Controller{
    public function __construct()
    {
        $this->itemModel = $this->model("ItemModel");
        $this->userModel = $this->model("UserModel");
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

        }
    }

}
