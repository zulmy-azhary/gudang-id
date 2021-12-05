<?php 

class Controller{
    // For views
    public function view($view, $data = []){
        require "../app/views/$view.php";
    }

    // For models
    public function model($model){
        require "../app/models/$model.php";
        return new $model;
    }
    

    // If session id is null, then redirect to login form
    public function checkSessionId(){
        if(!$_SESSION['user_id']){
            header('Location: ' . BASEURL . '/login');
        }
    }

    // Checking role
    public function checkNotRoleUser($id){
        if($_SESSION['user_id'] != $id){
            header('Location: ' . BASEURL . '/home');
        }
    }

    public function checkRoleUser($id){
        if($_SESSION['user_id'] == $id){
            header('Location: ' . BASEURL . '/home');
        }
    }
}