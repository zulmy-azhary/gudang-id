<?php 

class ManageUser extends Controller{
    public function __construct(){
        $this->checkSessionId();
        $this->checkNotRoleUser(1);
        $this->userModel = $this->model("UserModel");
    }
    
    public function index(){
        $data = [
            'title' => 'User Management',
            'items' => $this->userModel->getUser()
        ];

        $this->view('manageuser/index', $data);
    }
    
    public function add(){
        $data = [
            'title' => 'User Management',
            'confirmPasswordError' => '',
        ];

        // Method for create user
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => 'User Management',
                'fullname' => $_POST['fullname'],
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'confirmPassword' => trim($_POST['confirmPassword']),
                'userCabang' => $_POST['userCabang'],
                'userRole' => $_POST['userRole'],
                'confirmPasswordError' => '',
            ];

            // ! Validate confirm password
            if(empty($data['confirmPassword'])){
                $data['confirmPasswordError'] = "Please enter password";
            } else{
                if($data['password'] != $data['confirmPassword']){
                    $data['confirmPasswordError'] = "Password do not match, please try again";
                }
            }

            // ! Make user that errors are empty
            if(empty($data['confirmPasswordError'])){
                // Hash password
                $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

                // Register user from model
                if($this->userModel->register($data)) {
                    // Redirect to the login page
                    header('Location: ' . BASEURL . '/manageuser');
                } else {
                    die('Something went wrong.');
                }
            }
        }

        $this->view('manageuser/add', $data);
    }

    public function delete($id){
        if($this->userModel->deleteUser($id) !== null){
            header('Location: ' . BASEURL . '/manageuser');
            exit;            
        }
    }

    // ! Ajax
    public function getModalUsers(){
        echo json_encode($this->userModel->getUserById($_POST['id']));
    }
}