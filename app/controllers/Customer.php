<?php 

class Customer extends Controller{
    protected $tableCust = 'u_customers';

    public function __construct(){
        $this->checkSessionId();
        $this->customerModel = $this->model("CustomerModel");
    }
    // View for index item
    public function index(){
        $data = [
            'title' => 'Customer List',
            'items' => $this->customerModel->getCustomer()
        ];
        $this->view('customer/index', $data);
    }

    // View for add customer data
    public function add(){
        $this->checkRoleUser(3);
        $result = $this->customerModel->itemCount($this->tableCust)[0]['count'];
        
        // Parse data into item code
        $count = $result + 1;
        $length = 3;
        $count = substr(str_repeat(0, $length).$count, - $length);
        $result = 'CS' . $count;

        $data = [
            'title' => 'Add Customer',
            'kd_pelanggan' => $result
        ];
        $this->view('customer/add', $data);
    }

    // ! Method
    // Method for create
    public function create(){
        if($this->customerModel->createCustomer($_POST) !== null){
            header('Location: ' . BASEURL . '/customer');
            exit;            
        }
    }
    
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