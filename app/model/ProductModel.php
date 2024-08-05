<?php

class ProductModel
{
    private $db;
    function __construct()
    {
        require_once (__DIR__ . '/database.php');
        $this->db = new Database(); // gọi class Database từ file database.php
    }
    function getCate()
    {
        $sql = "SELECT * FROM categories";
        return $this->db->getAll($sql); // gọi hàm getAll từ class Database
    }
    function getProduct()
    {
        $sql = "SELECT * FROM products ORDER BY id DESC";
        return $this->db->getAll($sql);
    }
    function getHotProduct()
    {
        $sql = "SELECT * FROM products WHERE sold >= 50 ORDER BY id DESC LIMIT 4";
        return $this->db->getAll($sql);
    }
    function insertPro($data)
    {
        $sql = "INSERT INTO products( title, image, imgA, imgB, imgC, price, sale, description, detail, status, sold, category_id) VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $param = [$data['title'], $data['image'], $data['imgA'], $data['imgB'], $data['imgC'], $data['price'], $data['sale'], $data['description'], $data['detail'], $data['status'], $data['sold'], $data['category_id']];
        return $this->db->insert($sql, $param);
    }
    function getIdPro($category_id){ // hàm lấy 1 dữ liệu từ bảng product
        $sql = "SELECT * FROM products WHERE id = $category_id";
        return $this->db->getOne($sql); // gọi hàm getOne từ class Database
    }
    function updateProduct($data)
    {
        $sql = "UPDATE products SET title = ?, image = ?, imgA = ?, imgB = ?, imgC = ?, price = ?, sale = ?, description = ?, detail = ?, status = ?, sold = ?, category_id = ? WHERE id = ?";
        $param = [$data['title'], $data['image'], $data['imgA'], $data['imgB'], $data['imgC'], $data['price'], $data['sale'], $data['description'], $data['detail'], $data['status'], $data['sold'], $data['category_id'], $data['id']];
        return $this->db->update($sql, $param);
    }
    function deletePro($id){
        $sql = "DELETE FROM products WHERE id = ?";
        $param = [$id];
        return $this->db->delete($sql, $param);
    }
    function getDetail($idProduct){
        $sql = "SELECT * FROM products WHERE id = $idProduct";
        return $this->db->getOne($sql);
    }
}

?>