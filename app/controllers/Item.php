<?php

class Item extends Controller{
    // ! View
    // View for index item
    public function index(){
        $data = [
            'title' => 'Item List',
            'items' => $this->model('ItemModel')->getData()
        ];
        $this->view('templates/header', $data);
        $this->view('item/index', $data);
        $this->view('templates/footer');
    }
    // View for create item
    public function create(){
        $data = [
            'title' => 'Add Item',
        ];
        $this->view('templates/header', $data);
        $this->view('item/create', $data);
        $this->view('templates/footer');
    }

    // View for stock in 
    public function in(){
        $data = [
            'title' => 'Stock In',
            'items' => $this->model('ItemModel')->getData()
        ];
        $this->view('templates/header', $data);
        $this->view('stock/stock-in', $data);
        $this->view('templates/footer');
    }


    // ! Method
    // Method for create
    public function add(){
        if($this->model('ItemModel')->createData($_POST) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }
    
    // Method for delete
    public function delete($id){
        if($this->model('ItemModel')->deleteData($id) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }
}