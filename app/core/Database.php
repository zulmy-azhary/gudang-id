<?php 

class Database{
    private $host = DB_HOST;
    private $user = DB_USER;
    private $pass = DB_PASS;
    private $dbName = DB_NAME;

    protected $db_handler;
    protected $statement;

    // Method yang pertama kali dipanggil ketika class Database di instansiasi
    public function __construct(){
        // Data Source Name
        $dsn = "mysql:host=$this->host;dbname=$this->dbName";

        // Option
        $option = [
            PDO::ATTR_PERSISTENT => true,
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
        ];

        try{
            $this->db_handler = new PDO($dsn, $this->user, $this->pass, $option);
        }
        catch(PDOException $error){
            die($error->getMessage());
        }
    }

    // Query Template, for showing data from DB, including CRUD
    public function query($query){
        $this->statement = $this->db_handler->prepare($query);
    }

    // Binding Data
    public function bind($param, $val, $type = NULL){
        if(is_null($type)){
            switch (true) {
                case is_int($val):
                    $type = PDO::PARAM_INT;
                    break;
                
                case is_bool($val):
                    $type = PDO::PARAM_BOOL;
                    break;

                case is_null($val):
                    $type = PDO::PARAM_NULL;

                default:
                    $type = PDO::PARAM_STR;
                    break;
            }
        }
        $this->statement->bindValue($param, $val, $type);
    }

    public function execute(){
        $this->statement->execute();
    }

    // Jika banyak data yang ingin ditampilkan
    public function resultSet(){
        $this->execute();
        return $this->statement->fetchAll(PDO::FETCH_ASSOC);
    }

    // Jika hanya satu data yang mau ditampilkan
    public function single(){
        $this->execute();
        return $this->statement->fetch(PDO::FETCH_ASSOC);
    }

    // Untuk menghitung ada berapa baris yang berubah didalam tabel
    public function rowCount(){
        return $this->statement->rowCount();
    }
}
