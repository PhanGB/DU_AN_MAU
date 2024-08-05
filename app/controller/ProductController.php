<?php
class ProductController{
    private $product;
    private $cate;
    private $data = [];
    function __construct(){
        require_once './app/model/CategoryModel.php';
        require_once './app/model/ProductModel.php';
        $this->cate = new CategoryModel();
        $this -> product = new ProductModel();
        global $listproduct;
        $this -> list = $listproduct;
        $this -> dataPro = [
            'listproducts' => $listproduct,
            'allcate' => [],
        ];
    }

    public function renderview($data, $views) {
        extract($data); // chuyển mảng data thành các biến riêng lẻ (key của mảng thành tên biến, value của mảng thành giá trị của biến)
        $views = "./app/view/" . $views . '.php'; // gán đường dẫn file view
        if (file_exists($views)) {
            require_once $views; // gọi file view
        } else {
            echo "Tệp view không tồn tại: " . $views;
        }
    }

    function viewProduct(){
        $category = new CategoryModel();
        $this -> data['allcate'] = $category -> getCate();
        $this -> data['listproducts'] = $this -> product -> getProduct();
        $this -> renderview($this -> data, 'product');
    }
    function detail(){
       // // nếu có id truyền vào thì lấy ra sản phẩm có id đó
       if (isset($_GET['id'])) {
        $idCate = $_GET['id']; // vào url lấy id và truyền vào biến $idCate
    }else{
        $idCate=0;
    }
    $this->data['detail'] = $this->product->getIdPro($idCate); // gọi hàm getIdPro từ class ProductModel
    $this->renderview($this->data, 'detail'); // gọi hàm renderview từ class ProductController
    }

    
    
}

?>