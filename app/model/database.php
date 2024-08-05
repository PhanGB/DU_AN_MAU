<?php
//kết nối database
class Database {
    private $servername = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "du_an_mau";
    public $conn; // biến lưu trữ kết nối đến database
    private $stmt; // biến lưu trữ câu truy vấn

    public function __construct() { // hàm khởi tạo kết nối đến database
        try {
            $this->conn = new PDO("mysql:host=$this->servername;dbname=$this->dbname", $this->username, $this->password); // tạo kết nối đến database với PDO (PHP Data Objects)
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // set chế độ báo lỗi nếu có lỗi
            // echo "Kết nối thành công"."<br />";
        } catch(PDOException $e) { // bắt lỗi nếu kết nối thất bại
            echo "Kết nối thất bại: " . $e->getMessage(); // in ra lỗi
        }
    }

    function query($sql, $param = [] ){ // $param là mảng chứa các giá trị truyền vào câu truy vấn
        $this->stmt = $this->conn->prepare($sql); // chuẩn bị câu truy vấn
        $this->stmt->execute($param); // thực thi câu truy vấn
        return $this->stmt; // trả về kết quả câu truy vấn

    }
    function prepare($query)
    {
        return $this->conn->prepare($query);
    }
    function getAll($sql){
       $statement = $this->query($sql);
       return $statement->fetchAll(PDO::FETCH_ASSOC); // trả về mảng chứa tất cả các bản ghi
    }
    function insert($sql, $param){
        $this->query($sql, $param); // thực thi câu truy vấn
        return $this->conn->lastInsertId(); // trả về id của bản ghi vừa thêm
    }
    function getOne($sql){
        $statement = $this->query($sql);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    function update($sql, $param){
        $this->query($sql, $param);
    }
    function delete($sql, $param){
        $this->query($sql, $param);
    }
}
?>