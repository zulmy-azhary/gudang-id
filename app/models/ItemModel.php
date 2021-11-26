<?php 

class ItemModel{
    private $tableItems = 'i_itemlist';
    private $tableCategory = 'i_category';
    private $db;

    // Instance DB when ItemModel class is called
    public function __construct(){
        $this->db = new Database;
    }

    // Show all data / read data from items inner join kategori
    public function getData(){
        $query = "SELECT a.*, b.*
                    FROM $this->tableItems as a 
                    INNER JOIN $this->tableCategory as b
                    ON a.id_kat = b.id_kat ORDER BY a.kd_barang
                ";
        
        $this->db->query($query);
        return $this->db->resultSet();
    }

    // Query for create data from items table
    public function createData($data){
        $query = "INSERT INTO $this->tableItems SET
                kd_barang = :kd_barang,
                nm_barang = :nm_barang,
                id_kat = :kategori,
                harga = :harga
                ";
        
        $this->db->query($query);
        $this->db->bind(':kd_barang', $data['kd_barang']);
        $this->db->bind(':nm_barang', $data['nm_barang']);
        $this->db->bind(':kategori', $data['kategori']);
        $this->db->bind(':harga', $data['harga']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function getItemById($id){
        $query = "SELECT a.id_barang, a.kd_barang, a.nm_barang, a.id_kat, a.harga, b.nm_kat
                FROM $this->tableItems as a INNER JOIN $this->tableCategory as b
                ON a.id_kat = b.id_kat
                WHERE a.id_barang = :id
                ";
        
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    public function updateData($data){
        $query = "UPDATE $this->tableItems SET
                nm_barang = :nm_barang,
                harga = :harga
                WHERE id_barang = :id_barang
                ";

        $this->db->query($query);
        $this->db->bind(':nm_barang', $data['nm_barang']);
        $this->db->bind(':harga', $data['harga']);
        $this->db->bind(':id_barang', $data['id_barang']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Query for delete data from items table
    public function deleteData($id){
        $query = "DELETE FROM $this->tableItems WHERE id_barang = :id";
        
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Count data from items table based on id_kat
    public function countData($param){
        $query = "SELECT COUNT(*) as count FROM $this->tableItems where id_kat = :kategori";

        $this->db->query($query);
        $this->db->bind(':kategori', $param);
        return $this->db->resultSet();
    }

    public function updateStockIn($data){
        $query = "UPDATE $this->tableItems SET
                stok = stok + :stock_in
                WHERE id_barang = :id
                ";

        $this->db->query($query);
        $this->db->bind(':id', $data['id_barang_in']);
        $this->db->bind(':stock_in', $data['set_stok_in']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function deleteStockIn($data){
        $query = "UPDATE $this->tableItems SET
                stok = stok - :stock_in
                WHERE id_barang = :id
                ";

        $this->db->query($query);
        $this->db->bind(':id', $data['id_barang']);
        $this->db->bind(':stock_in', $data['qty']);
        $this->db->execute();

        return $this->db->rowCount();
    }
}
