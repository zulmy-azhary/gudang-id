<?php 

class TransactionModel{
    private $db;

    public function __construct(){
        $this->db = new Database;
    }

    public function invoiceNumber(){
        $query = "SELECT MAX(RIGHT(invoice, 4)) as invoice
                    FROM {$this->db->tableTransactionOrder}
                    WHERE MID(invoice, 5, 6) = DATE_FORMAT(CURDATE(), '%d%m%y')
                ";

        $this->db->query($query);
        if($this->db->resultSet() !== null){
            $count = ((int) $this->db->resultSet()[0]['invoice']) + 1;
            $count = substr(str_repeat(0, 4).$count, - 4);
        }
        else {
            $count = '0001';
        }
        $result = 'GDID' . date('dmy') . $count;
        return $result;
    }

    public function createInvoice($data){
        $query = "INSERT INTO {$this->db->tableTransactionOrder} SET
                    invoice = :invoice,
                    nm_pelanggan = :nm_pelanggan,
                    alamat = :alamat,
                    no_telp = :no_telp,
                    note = :note,
                    date = :date,
                    grand_total = :grand_total,
                    user_id = :user_id
                ";

        $this->db->query($query);
        $this->db->bind(':invoice', $data['invoice']);
        $this->db->bind(':nm_pelanggan', $data['custNameTransaction']);
        $this->db->bind(':alamat', $data['custAddressTransaction']);
        $this->db->bind(':no_telp', $data['custPhoneTransaction']);
        $this->db->bind(':note', $data['notes']);
        $this->db->bind(':grand_total', $data['grandTotalTransaction']);
        $this->db->bind(':date', globaldate($data['dateTransaction']));
        $this->db->bind(':user_id', $_SESSION['user_id']);
        $this->db->execute();

        return $this->db->rowCount();
    }

    public function createItem($data){
        for($i = 0; $i < count($data['itemCodeAdd']); $i++){
            $query = "INSERT INTO {$this->db->tableTransactionItem} SET
                        invoice = :invoice,
                        kd_barang = :kd_barang,
                        nm_barang = :nm_barang,
                        price = :price,
                        qty = :qty,
                        discount = :discount,
                        total = :total
                    ";

            $this->db->query($query);
            $this->db->bind(':invoice', $data['invoice']);
            $this->db->bind(':kd_barang', $data['itemCodeAdd'][$i]);
            $this->db->bind(':nm_barang', $data['itemNameAdd'][$i]);
            $this->db->bind(':price', $data['itemPriceAdd'][$i]);
            $this->db->bind(':qty', $data['itemStockAdd'][$i]);
            $this->db->bind(':discount', $data['itemDiscountAdd'][$i]);
            $this->db->bind(':total', $data['itemTotalAdd'][$i]);
            $this->db->execute();
        }
        return $this->db->rowCount();
    }

    public function getInvoice($limit = ""){
        $query = "SELECT *FROM {$this->db->tableTransactionOrder}
                    ORDER BY created_at DESC
                    $limit
                ";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    public function getInvoiceById($id){
        $query = "SELECT a.*, b.fullname FROM {$this->db->tableTransactionOrder} as a
                    INNER JOIN {$this->db->tableUsers} as b
                    ON a.user_id = b.user_id
                    WHERE a.order_id = :id
                ";

        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single();
    }

    public function getInvoiceItems($invoice){
        $query = "SELECT *FROM {$this->db->tableTransactionItem}
                    WHERE invoice = :invoice
                ";

        $this->db->query($query);
        $this->db->bind(':invoice', $invoice);

        return $this->db->resultSet();
    }

    public function getTotalTransaction(){
        $query = "SELECT COUNT(invoice) as COUNT FROM {$this->db->tableTransactionOrder}";

        $this->db->query($query);
        return $this->db->single();
    }
}