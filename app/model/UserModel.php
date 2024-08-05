<?php
class UserModel
{
    private $table = 'user';
    private $db = null;
    private $user = null;
    private $model;

    public function __construct()
    {
        require_once (__DIR__ . '/database.php');
        $this->db = new Database();
    }

    public function getAllUser()
    {
        $sql = "SELECT * FROM users";
        return $this->db->getAll($sql);
    }
    function signUp($data)
    {
        $sql = "INSERT INTO users (first_name, last_name, email, phone, gender, password) VALUES (?, ?, ?, ?, ?, ?)";
        $param = [$data['first_name'], $data['last_name'], $data['email'], $data['phone'], $data['gender'], $data['password']];
        return $this->db->insert($sql, $param);
    }
}