<?php 

class StockModel {
    private $tableStock = 'i_stock';
    private $tableItems = 'i_itemlist';
    private $tableCategory = 'i_category';
    private $tableUsers = 'u_users';
    private $tableRole = 'u_role';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    // Query for showing Stock In at Stock In Table
    public function getStockIn(){
        $query = "SELECT a.stock_id, a.qty, a.date, b.id_barang, b.kd_barang, b.nm_barang, c.fullname
                    FROM $this->tableStock as a
                    INNER JOIN $this->tableItems as b
                    ON a.id_barang = b.id_barang
                    INNER JOIN $this->tableUsers as c
                    ON a.user_id = c.user_id
                    WHERE a.type = 'in' ORDER BY a.stock_id DESC;
                    ";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getStockInDetail($id){
        $query = "SELECT a.qty, a.date, b.kd_barang, b.nm_barang, c.nm_kat, d.fullname, e.nm_role
                    FROM $this->tableStock as a
                    INNER JOIN $this->tableItems as b
                    ON a.id_barang = b.id_barang
                    INNER JOIN $this->tableCategory as c
                    ON b.id_kat = c.id_kat
                    INNER JOIN $this->tableUsers as d
                    ON a.user_id = d.user_id
                    INNER JOIN $this->tableRole as e
                    ON d.id_role = e.id_role
                    WHERE a.stock_id = :id;
                    ";

        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getStockInById($id){
        $query = "SELECT *FROM $this->tableStock WHERE stock_id = :id";

        $this->db->query($query);
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function deleteStockIn($id){
        $query = "DELETE FROM $this->tableStock WHERE stock_id = :id";

        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Query for Stock In
    public function addStockIn($data){
        $query = "INSERT INTO $this->tableStock SET
                    id_barang = :id_barang_in,
                    type = 'in',
                    qty = :set_stok_in,
                    date = :date_in,
                    user_id = :user_id
                ";

        $this->db->query($query);
        $this->db->bind(':id_barang_in', $data['id_barang_in']);
        $this->db->bind(':set_stok_in', $data['set_stok_in']);
        $this->db->bind(':date_in', $data['date_in']);
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}

