<?php 

class StockModel {
    private $tableStock = 'i_stock';
    private $tableItems = 'i_itemlist';
    private $tableUsers = 'u_users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add_stock_in($data){
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

        return $this->db->rowCounting();
    }
}

