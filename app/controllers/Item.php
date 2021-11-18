<?php

class Item extends Controller{
    public function __construct()
    {
        $this->itemModel = $this->model("ItemModel");
    }    
    
    // ! View
    // View for index item
    public function index(){
        $data = [
            'title' => 'Item List',
            'items' => $this->itemModel->getData()
        ];
        $this->view('item/index', $data);
    }
    // View for create item
    public function create(){
        $data = [
            'title' => 'Add Item',
        ];
        $this->view('item/create', $data);
    }

    
    // ! Method
    // Method for create
    public function add(){
        if($this->itemModel->createData($_POST) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }
    
    // Get data by id from item modal
    public function getData(){
        echo json_encode($this->itemModel->getItemById($_POST['id']));
    }

    public function update(){
        if($this->itemModel->updateData($_POST) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }

    // Method for delete
    public function delete($id){
        if($this->itemModel->deleteData($id) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }
}