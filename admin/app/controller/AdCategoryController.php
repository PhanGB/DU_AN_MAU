<?php
class AdCategoryController{
    private $category; // khai báo private để không bị truy cập từ bên ngoài
    private $data;
    function __construct(){
        $this->category = new CategoryModel();
    } 
    function rederView($view, $data = null){
        $view = './app/view/'.$view.'.php';
        require_once $view;
    }
    function getAllCategory(){
        $this->data = $this->category->getCate();
        $this->rederView('category', $this->data);
    }
    function viewCate(){
        $this->rederView('addcate');
    }
    function addCate(){
        if(isset($_POST['sub'])){
            $data = [];
            $data['name'] = $_POST['name'];
            $data['image'] = $_FILES['image'];
            $file = '../public/upload/pictures/index/' .$data['image']['name'];
            move_uploaded_file($data['image']['tmp_name'], $file);

            $this->category->insertCate($data);
        }
        echo '<script>alert("hêm danh mục thành công")</script>';
        echo '<script>location.href="index.php?page=category"</script>';
    }
    function viewEditCate() {
        if (isset($_GET['id']) && $_GET['id'] > 0) {
            $id = $_GET['id'];
            $this->data['cate_detail'] = $this->category->getIdCate($id);
            $this->rederView('editcate', $this->data);
        } else {
            // Xử lý trường hợp không có id hợp lệ (có thể chuyển hướng hoặc thông báo lỗi)
            echo "Invalid category ID.";
        }
    }
    
    
    function editCate() {
        if (isset($_POST['sub'])) {
            $data = [];
            $data['id'] = $_POST['id']; // Ensure id is set
            $data['name'] = $_POST['name'];
            $data['image'] = $_POST['existing_image']; // Default to existing image
    
            // Handle image upload if a new image is provided
            if (!empty($_FILES['image']['name'])) {
                $data['image'] = $_FILES['image']['name'];
                $file = '../public/upload/pictures/index/' . $data['image'];
                move_uploaded_file($_FILES['image']['tmp_name'], $file);
            }
    
            $this->category->updateCate($data);
            echo '<script>alert("Cập nhật danh mục thành công")</script>';
            echo '<script>location.href="index.php?page=category"</script>';
        }
    }
    function delCateId(){
        // Check if the category is referenced as a foreign key in other tables
        if($this->category->isForeignKey($_GET['id'])){
            echo '<script>alert("Không thể xoá danh mục này vì nó đang được sử dụng")</script>';
            echo '<script>location.href="index.php?page=category"</script>';
            return;
        }
    
        if(isset($_GET['id']) && ($_GET['id']) > 0){
            $id = $_GET['id'];
            $this->category->deleteCate($id);
        }
        echo '<script>location.href="index.php?page=category"</script>';
    }
}

?>