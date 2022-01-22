<?php 

class StockModel {
    private $db;
    
    public function __construct()
    {
        $this->db = new Database;
    }

    // Query for showing Stock In / Out
    public function getStock($type){
        $query = "SELECT a.stock_id, a.qty, a.date, b.id_barang, b.kd_barang, b.nm_barang, c.nm_kat, d.fullname, e.nm_role
                    FROM {$this->db->tableStock} as a
                    INNER JOIN {$this->db->tableItems} as b
                    ON a.id_barang = b.id_barang
                    INNER JOIN {$this->db->tableCategory} as c
                    ON b.id_kat = c.id_kat
                    INNER JOIN {$this->db->tableUsers} as d
                    ON a.user_id = d.user_id
                    INNER JOIN {$this->db->tableRole} as e
                    ON d.id_role = e.id_role
                    WHERE a.type = :type
                    ORDER BY a.stock_id DESC
                ";

        $this->db->query($query);
        $this->db->bind(':type', $type);
        return $this->db->resultSet();
    }

    public function getStockById($id){
        $query = "SELECT *FROM {$this->db->tableStock}
                    WHERE stock_id = :id
                ";

        $this->db->query($query);
        $this->db->bind(':id', $id);

        return $this->db->single();
    }

    public function deleteStock($id){
        $query = "DELETE FROM {$this->db->tableStock}
                    WHERE stock_id = :id
                ";

        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();

        return $this->db->rowCount();
    }

    // Query for Stock In
    public function addStockIn($data){
        $query = "INSERT INTO {$this->db->tableStock} SET
                    id_barang = :id_barang_in,
                    type = 'in',
                    qty = :set_stok_in,
                    date = :date_in,
                    user_id = :user_id
                ";

        $this->db->query($query);
        $this->db->bind(':id_barang_in', $data['id_barang_in']);
        $this->db->bind(':set_stok_in', $data['set_stok_in']);
        $this->db->bind(':date_in', globalDate($data['date_in']));
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }
    
    // ! Stock Out
    // Stock out when transaction are success
    public function addStockOut($data){
        for($i = 0; $i < count($data['itemIdAdd']); $i++){
            $query = "INSERT INTO {$this->db->tableStock} SET
                        id_barang = :id_barang_out,
                        type = 'out',
                        qty = :set_stok_out,
                        date = :date_out,
                        user_id = :user_id
                    ";

            $this->db->query($query);
            $this->db->bind(':id_barang_out', $data['itemIdAdd'][$i]);
            $this->db->bind(':set_stok_out', $data['itemStockAdd'][$i]);
            $this->db->bind(':date_out', globalDate($data['dateTransaction']));
            $this->db->bind(':user_id', $_SESSION['user_id']);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }
}

