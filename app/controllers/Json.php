<?php 

class Json extends Controller{

    // Ajax for create item
    public function itemJson(){
        $jsonData = json_decode($_POST['data'], true);
        $category = $jsonData['category'];
        $key = $jsonData['key'];
        
        // Query
        $result = $this->model('ItemModel')->countData($category)[0]['count'];
        
        // Parse data into item code
        $count = $result + 1;
        $length = 3;
        $count = substr(str_repeat(0, $length).$count, - $length);
        $result = $key . '-' . $count;
        
        
        $data = [
            'code' => $result,
            'category' => $category,
            'key' => $key,
        ];
        
        // return value into json file
        $jsonFile = json_encode($data, JSON_PRETTY_PRINT);
        print_r($jsonFile);
    }
} 