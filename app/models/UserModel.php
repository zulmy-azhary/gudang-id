<?php 

class UserModel {
    private $tableUser = 'u_users';
    private $tableRole = 'u_role';
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    // Find user by username
    public function findUserByUsername($username){
        $this->db->query("SELECT *FROM $this->tableUser WHERE username = :username");

        // Username param will be binded with the username variable
        $this->db->bind(':username', $username);

        // Check if username is already registered
        if($this->db->rowCounting() > 0){
            return true;
        }else{
            return false;
        }
    }

    // Register
    public function register($data){
        $this->db->query("INSERT INTO $this->tableUser 
                        (fullname, username, password) 
                        VALUES 
                        (:fullname, :username, :password)
                        ");

        $this->db->bind(':fullname', $data['fullname']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);

        $this->db->execute();
        return $this->db->rowCounting();
    }

    // login
    public function login($username, $password){
        $this->db->query("SELECT u.*, r.*
                            FROM $this->tableUser as u 
                            INNER JOIN $this->tableRole as r
                            ON u.id_role = r.id_role 
                            WHERE username = :username
                        ");
                        
        $this->db->bind(':username', $username);
        $row = $this->db->single();

        $hashedPassword = $row['password'];

        if(password_verify($password, $hashedPassword)){
            return $row;
        }else{
            return false;
        }
    }
}
