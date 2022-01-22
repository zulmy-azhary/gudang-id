<?php 

class Login extends Controller{
    public function __construct(){
        $this->userModel = $this->model('UserModel');
    }

    // ! Login
    public function index(){
        $data = [
            'title' => 'Login',
            'username' => '',
            'password' => ''
        ];
        if(isset($_SESSION['user_id'])){
            header('Location: ' . BASEURL . '/home');
        }
        $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $data = [
                'title' => 'Login',
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
            ];
            $loggedInUser = $this->userModel->login($data['username']);
            
            if($loggedInUser && password_verify($data['password'], $loggedInUser['password'])){
                $this->createUsersession($loggedInUser);
            }
        }

        $this->view('login/index', $data);
    }

    // Create user session
    public static function createUsersession($user){
        $_SESSION['user_id'] = $user['user_id'];
        $_SESSION['fullname'] = $user['fullname'];
        $_SESSION['username'] = $user['username'];
        $_SESSION['id_role'] = $user['id_role'];
        $_SESSION['nm_role'] = $user['nm_role'];

        header('Location: ' . BASEURL . '/home');
    }

    // Function for logout, unset all session and back to login page
    public function logout(){
        session_destroy();

        header('Location: ' . BASEURL . '/login');
    }

    // ! Ajax
    public function getUser(){
        $username = $_POST['username'];
        $password = $_POST['password'];
        
        if(empty($username)){
            echo 1;
        }
        elseif (empty($password)) {
            echo 2;
        }
        else {
            $data = $this->userModel->login($username);
            
            $newUsername = isset($data['username']) ? $data['username'] : "";
            $newPassword = isset($data['password']) ? $data['password'] : "";

            if($newUsername){
                if(password_verify($password, $newPassword)){
                    echo 9;
                }else{
                    echo 3;
                }
            }
            else {
                echo 3;
            }
        }
    }
}

