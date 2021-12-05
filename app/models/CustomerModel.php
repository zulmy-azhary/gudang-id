<?php 

class CustomerModel{
    private $tableCust = 'u_customers';
    private $db;
    
    public function __construct(){
        $this->db = new Database;
    }

    public function getCustomer(){
        $query = "SELECT *FROM $this->tableCust";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    // Query for create customer
    public function createCustomer($data){
        $query = "INSERT INTO $this->tableCust SET
                kd_pelanggan = :kd_pelanggan,
                nm_pelanggan = :nm_pelanggan,
                alamat = :alamat,
                no_telp = :tlp
                ";
        
        $this->db->query($query);
        $this->db->bind(':kd_pelanggan', $data['kd_pelanggan']);
        $this->db->bind(':nm_pelanggan', $data['nm_pelanggan']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':tlp', $data['tlp']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Query for update customer data
    public function updateCustomer($data){
        $query = "UPDATE $this->tableCust SET
                nm_pelanggan = :nm_pelanggan,
                alamat = :alamat,
                no_telp = :tlp
                WHERE cust_id = :id
                ";

        $this->db->query($query);
        $this->db->bind(':nm_pelanggan', $data['nm_pelanggan']);
        $this->db->bind(':alamat', $data['alamat']);
        $this->db->bind(':tlp', $data['tlp']);
        $this->db->bind(':id', $data['cust_id']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Query for delete customer data
    public function deleteCustomer($id){
        $query = "DELETE FROM $this->tableCust WHERE cust_id = :id";
        
        $this->db->query($query);
        $this->db->bind(':id', $id);
        $this->db->execute();
        return $this->db->rowCount();
    }

    // Count data from customer table
    public function itemCount(){
        $query = "SELECT COUNT(*) as count FROM $this->tableCust";

        $this->db->query($query);
        return $this->db->resultSet();
    }

    // Get customer data based on customer id
    public function getCustomerById($id){
        $query = "SELECT *FROM $this->tableCust where cust_id = :id";

        $this->db->query($query);
        $this->db->bind(':id', $id);
        return $this->db->single();
    }
}