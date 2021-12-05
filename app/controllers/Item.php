<?php

class Item extends Controller{
    public function __construct(){
        $this->checkSessionId();
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
    public function add(){
        $this->checkRoleUser(3);
        $data = [
            'title' => 'Add Item',
        ];
        $this->view('item/add', $data);
    }

    
    // ! Method
    // Method for create
    public function create(){
        
        if($this->itemModel->createItem($_POST) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }

    public function update(){
        if($this->itemModel->updateItem($_POST) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }

    // Method for delete
    public function delete($id){
        if($this->itemModel->deleteItem($id) !== null){
            header('Location: ' . BASEURL . '/item');
            exit;            
        }
    }


    // ! Ajax
    // Get data by id from item modal using ajax
    public function getModalItem(){
        echo json_encode($this->itemModel->getItemById($_POST['id']));
    }

    // Ajax for create item
    public function getItemCode(){
        $jsonData = json_decode($_POST['data'], true);
        $category = $jsonData['category'];
        $key = $jsonData['key'];
        
        // Query
        $result = $this->itemModel->itemCount($category)[0]['count'];
        
        // Parse data into item code
        $count = $result + 1;
        $length = 3;
        $count = substr(str_repeat(0, $length).$count, - $length);
        $result = $key . $count;
        
        
        $data = [
            'code' => $result,
            'category' => $category,
            'key' => $key,
        ];
        
        // return value into json file
        echo json_encode($data, JSON_PRETTY_PRINT);
    }
}