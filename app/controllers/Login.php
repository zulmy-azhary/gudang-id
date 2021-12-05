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
        $_SESSION['role'] = $user['nm_role'];

        header('Location: ' . BASEURL . '/home');
    }

    // Function for logout, unset all session and back to login page
    public function logout(){
        session_destroy();

        header('Location: ' . BASEURL . '/login');
    }
    
    // ! Register Page
    // public function register(){
    //     $data = [
    //         'title' => 'Registration Form',
    //         'fullname' => '',
    //         'username' => '',
    //         'password' => '',
    //         'confirmPassword' => '',

    //         // Validation
    //         'fullnameError' => '',
    //         'usernameError' => '',
    //         'passwordError' => '',
    //         'confirmPasswordError' => '',
    //     ];

    //     if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //         //Sanitize post data
    //         $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_STRING);
    //         $data = [
    //             'title' => 'Registration Form',
    //             'fullname' => $_POST['fullname'],
    //             'username' => trim($_POST['username']),
    //             'password' => trim($_POST['password']),
    //             'confirmPassword' => trim($_POST['confirmPassword']),

    //             // Validation
    //             'fullnameError' => '',
    //             'usernameError' => '',
    //             'passwordError' => '',
    //             'confirmPasswordError' => '',
    //         ];

    //         $nameValidation = "/^[a-zA-Z0-9]*$/";
    //         $passwordValidation = "/^(.{0,7}|[^a-z]*|[^\d]*)$/i";

    //         // ! Validate Full name
    //         if(empty($data['fullname'])){
    //             $data['fullnameError'] = 'Please enter your name';
    //         }
            
    //         // ! Validate username on letters / numbers
    //         if(empty($data['username'])){
    //             $data['usernameError'] = 'Please enter username';
    //         } else if(!preg_match($nameValidation, $data['username'])){
    //             $data['usernameError'] = 'Username can only contain letters and numbers';
    //         }

    //         // ! Validate Password on length and numeric values
    //         if(empty($data['password'])){
    //             $data['passwordError'] = "Please enter password";
    //         } elseif(strlen($data['password'] < 8)){
    //             $data['passwordError'] = "Password must be atleast 8 characters";
    //         } else if(preg_match($passwordValidation, $data['password'])){
    //             $data['passwordError'] = 'Password must have at least one numeric value';
    //         }

    //         // ! Validate confirm password
    //         if(empty($data['confirmPassword'])){
    //             $data['confirmPasswordError'] = "Please enter password";
    //         } else{
    //             if($data['password'] != $data['confirmPassword']){
    //                 $data['confirmPasswordError'] = "Password do not match, please try again";
    //             }
    //         }

    //         // ! Make user that errors are empty
    //         if(empty($data['fullnameError']) && empty($data['usernameError']) && empty($data['passwordError']) && empty($data['confirmPasswordError'])){
    //             // Hash password
    //             $data['password'] = password_hash($data['password'], PASSWORD_DEFAULT);

    //             // Register user from model
    //             if($this->userModel->register($data)) {
    //                 // Redirect to the login page
    //                 header('Location: ' . BASEURL . '/login');
    //             } else {
    //                 die('Something went wrong.');
    //             }
    //         }
    //     }


    //     $this->view('login/register', $data);
    // }

}

