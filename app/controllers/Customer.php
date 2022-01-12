<?php 

class Customer extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->customerModel = $this->model("CustomerModel");
    }

    // ! View
    // View for index item
    public function index(){
        $data = [
            'title' => 'Customer List',
            'content' => 'customer/index',
            'items' => $this->customerModel->getCustomer()
        ];
        $this->view('main/index', $data);
    }

    // View for add customer data
    public function add(){
        $this->checkRoleUser(3);
        $result = $this->customerModel->itemCount()['MAX'];
        
        // Parse data into item code
        $count = $result + 1;
        $length = 3;
        $count = substr(str_repeat(0, $length).$count, - $length);
        $result = 'CS' . $count;

        $data = [
            'title' => 'Add Customer',
            'content' => 'customer/add',
            'kd_pelanggan' => $result
        ];
        $this->view('main/index', $data);
    }

    // ! Method
    // Method for create
    public function create(){
        if($this->customerModel->createCustomer($_POST) !== null){
            header('Location: ' . BASEURL . '/customer');
            exit;            
        }
    }
    
    // Method for update
    public function update(){
        if($this->customerModel->updateCustomer($_POST) !== null){
            header('Location: ' . BASEURL . '/customer');
            exit;            
        }
    }

    // Method for delete
    public function delete($id){
        if($this->customerModel->deleteCustomer($id) !== null){
            header('Location: ' . BASEURL . '/customer');
            exit;            
        }
    }

    // ! Ajax
    public function getModalCustomer(){
        echo json_encode($this->customerModel->getCustomerById($_POST['id']));
    }
}