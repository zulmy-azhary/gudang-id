<?php 

class Login extends Controller{
    public function __construct(){
        $this->userModel = $this->model('UserModel');
    }

    // ! Login
    public function index(){
        if(isset($_SESSION['user_id'])){
            header('Location: ' . BASEURL . '/home');
        }
        $data = [
            'title' => 'Login',
            'username' => '',
            'password' => '',
            'usernameError' => '',
            'passwordError' => ''
        ];

        // Check for post
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            //Sanitize post data
            $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
            $data = [
                'title' => 'Login',
                'username' => trim($_POST['username']),
                'password' => trim($_POST['password']),
                'usernameError' => '',
                'passwordError' => ''
            ];

            // ! Validate username
            if(empty($data['username'])){
                $data['usernameError'] = 'Please enter a username';
            }

            // ! Validate password
            if(empty($data['password'])){
                $data['passwordError'] = 'Please enter a password';
            }

            // ! Check if all errors are empty
            if(empty($data['usernameError']) && empty($data['passwordError'])){
                $loggedInUser = $this->userModel->login($data['username'], $data['password']);
                
                if($loggedInUser){
                    $this->createUsersession($loggedInUser);
                }
                else{
                    $data['passwordError'] = 'Username or Password is incorrect. Please try again!';
                }
            }
        }
        else{
            $data = [
                'title' => 'Login',
                'username' => '',
                'password' => '',
                'usernameError' => '',
                'passwordError' => ''
            ];
        }

        $this->view('login/index', $data);
    }

    // Create user session
    public function createUsersession($user){
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
}

