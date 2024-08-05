<?php
class CategoryModel
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
    function getPopularCate()
    {
        $sql = "SELECT * FROM categories WHERE id>4 ORDER BY id asc LIMIT 4";
        return $this->db->getAll($sql);
    }
    function getSeasonCate()
    {
        $sql = "SELECT * FROM categories WHERE season = 1";
        return $this->db->getAll($sql);
    }
    function getIdCate($idCate) {
        $idCate = (int)$idCate;
        $sql = "SELECT id, name, image FROM categories WHERE id = $idCate";
    
        return $this->db->getOne($sql);
    }
    function insertCate($data){
        $sql = "INSERT INTO categories (name, image) VALUES (?,?)";   
        $param = [$data['name'], $data['image']]; // gán giá trị từ form vào mảng
        return $this->db->insert($sql, $param); 
    }
    function deleteCate($id){
        $sql = "DELETE FROM categories WHERE id = ?";
        $param = [$id];
        return $this->db->delete($sql, $param);
    }
    public function isForeignKey($id) {
        // Example query to check if the category is referenced in the products table
        $query = "SELECT COUNT(*) as count FROM products WHERE category_id = :id";
        $stmt = $this->db->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result['count'] > 0;
    }
    function updateCate($data){
        $sql = "UPDATE categories SET name = ?, image = ? WHERE id = ?";
        $param = [$data['name'], $data['image'], $data['id']];
        return $this->db->update($sql, $param);
    }
}


?>