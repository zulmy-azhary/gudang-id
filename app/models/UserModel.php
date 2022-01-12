<?php 

class UserModel {
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }

    public function getUser(){
        $query = "SELECT a.*, b.id_role, b.nm_role , c.*
                    FROM {$this->db->tableUsers} as a
                    INNER JOIN {$this->db->tableRole} as b
                    ON a.id_role = b.id_role
                    LEFT JOIN {$this->db->tableCabang} as c
                    ON a.id_cabang = c.id_cabang
                ";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getUserById($id){
        $query = "SELECT a.*, b.id_role, b.nm_role , c.*
                    FROM {$this->db->tableUsers} as a
                    INNER JOIN {$this->db->tableRole} as b
                    ON a.id_role = b.id_role
                    LEFT JOIN {$this->db->tableCabang} as c
                    ON a.id_cabang = c.id_cabang
                    WHERE a.user_id = :id
                ";

        $this->db->query($query);
        $this->db->bind(":id", $id);
        return $this->db->single();
    }

    // Find user by username
    public function findUserByUsername($username){
        $this->db->query("SELECT *FROM {$this->db->tableUsers} WHERE username = :username");

        // Username param will be binded with the username variable
        $this->db->bind(':username', $username);

        // Check if username is already registered
        if($this->db->rowCount() > 0){
            return true;
        }else{
            return false;
        }
    }

    // Register
    public function register($data){
        $query = "INSERT INTO {$this->db->tableUsers} 
                    (fullname, username, password, id_role, id_cabang) 
                    VALUES 
                    (:fullname, :username, :password, :id_role, :id_cabang)
                ";

        $this->db->query($query);
        $this->db->bind(':fullname', $data['fullname']);
        $this->db->bind(':username', $data['username']);
        $this->db->bind(':password', $data['password']);
        $this->db->bind(':id_role', $data['userRole']);
        $this->db->bind(':id_cabang', $data['userCabang']);

        $this->db->execute();
        return $this->db->rowCount();
    }

    public function deleteUser($id){
        $query = "DELETE FROM {$this->db->tableUsers}
                    WHERE user_id = :id
                ";

        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // login
    public function login($username){
        $query = "SELECT u.*, r.*
                    FROM {$this->db->tableUsers} as u 
                    INNER JOIN {$this->db->tableRole} as r
                    ON u.id_role = r.id_role 
                    WHERE username = :username
                ";
                        
        $this->db->query($query);
        $this->db->bind(':username', $username);
        return $this->db->single();
    }
}
