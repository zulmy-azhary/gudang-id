<?php 

class StockModel {
    private $tableStock = 'i_stock';
    private $tableItems = 'i_itemlist' ;
    private $tableUsers = 'u_users';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function add_stock_in($POST){
        
    }
}

