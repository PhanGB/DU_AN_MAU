<?php

class CartModel{
    private $db;
    function __construct()
    {
        require_once '../app/model/database.php';
        $this->db = new Database(); // gọi class Database từ file database.php
    }
    function getAllCart()
    {
        $sql = "SELECT * FROM orders";
        return $this->db->getAll($sql); // gọi hàm getAll từ class Database
    }
    function getCart(){
        $sql = "SELECT * FROM cart ORDER BY id DESC";
        return $this->db->getAll($sql);
    }
    function getHotCart(){
        $sql = "SELECT * FROM cart WHERE sold >= 50 ORDER BY id DESC LIMIT 4";
        return $this->db->getAll($sql);
    }
}

?>