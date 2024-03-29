<?php 

class ItemModel{
    private $db;

    // Instance DB when ItemModel class is called
    public function __construct(){
        $this->db = new Database;
    }

    // Show all data / read data from items inner join kategori
    public function getData($param = ""){
        $query = "SELECT a.*, b.*
                    FROM {$this->db->tableItems} as a 
                    INNER JOIN {$this->db->tableCategory} as b
                    ON a.id_kat = b.id_kat
                    $param
                    ORDER BY a.kd_barang
                ";
        
        $this->db->query($query);
        return $this->db->resultSet();
    }

    // Query for create data from items table
    public function createItem($data){
        $query = "INSERT INTO {$this->db->tableItems} SET
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
                    FROM {$this->db->tableItems} as a
                    INNER JOIN {$this->db->tableCategory} as b
                    ON a.id_kat = b.id_kat
                    WHERE a.id_barang = :id
                ";
        
        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
    
    public function updateItem($data){
        $query = "UPDATE {$this->db->tableItems} SET
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
    public function deleteItem($id){
        $query = "DELETE FROM {$this->db->tableItems}
                    WHERE id_barang = :id
                ";
        
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Count data from items table based on id_kat
    public function itemCount($category){
        $query = "SELECT MAX(RIGHT(kd_barang, 3)) as MAX
                    FROM {$this->db->tableItems}
                    WHERE id_kat = :kategori
                ";

        $this->db->query($query);
        $this->db->bind(':kategori', $category);
        return $this->db->single();
    }

    public function updateStockIn($data){
        $query = "UPDATE {$this->db->tableItems} SET
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
        $query = "UPDATE {$this->db->tableItems} SET
                    stok = stok - :stock_in
                    WHERE id_barang = :id AND stok >= :stock_in
                ";

        $this->db->query($query);
        $this->db->bind(':id', $data['id_barang']);
        $this->db->bind(':stock_in', $data['qty']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function getItemId($data){
            $query = "SELECT id_barang FROM {$this->db->tableItems}
                    WHERE kd_barang = :kd_barang
                    ";

        $this->db->query($query);
        $this->db->bind(':kd_barang', $data['kd_barang']);
        $this->db->execute();

        return $this->db->single();
    }

    public function retrieveTransaction($data){
        for($i = 0; $i < count($data); $i++){
            $query = "UPDATE {$this->db->tableItems} SET
                        stok = stok + :stock_retrieve
                        WHERE kd_barang = :kd_barang
                    ";

            $this->db->query($query);
            $this->db->bind(':stock_retrieve', $data[$i]['qty']);
            $this->db->bind(':kd_barang', $data[$i]['kd_barang']);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }

    public function updateStockOut($data){
        for($i = 0; $i < count($data['itemCodeAdd']); $i++){
            $query = "UPDATE {$this->db->tableItems} SET
                        stok = stok - :stock_out
                        WHERE kd_barang = :code
                    ";
            
            $this->db->query($query);
            $this->db->bind(':stock_out', $data['itemStockAdd'][$i]);
            $this->db->bind(':code', $data['itemCodeAdd'][$i]);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }

    public function getTotalItem(){
        $query = "SELECT COUNT(id_barang) as COUNT FROM {$this->db->tableItems}";

        $this->db->query($query);
        return $this->db->single();
    }
}
