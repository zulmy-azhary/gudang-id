<?php 

class Customer extends Controller{
    public function __construct()
    {
        $this->itemModel = $this->model("ItemModel");
    }
    // View for index item
    public function index(){
        $data = [
            'title' => 'Customer List'
        ];
        $this->view('customer/index', $data);
    }

    // View for add customer data
    public function add(){
        $data = [
            'title' => 'Add Customer'
        ];
        $this->view('customer/add', $data);
    }
}

?>