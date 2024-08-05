<?php
class AdProductController
{
    private $product; // biến lưu trữ model product 
    private $data; // biến lưu trữ dữ liệu truyền từ controller sang view
    private $datacate;
    private $cate;
    function __construct()
    {
        $this->product = new ProductModel();
        $this->data = [];
        $this->datacate = [];
    }
    function renderView($view, $data = null)
    {
        $view = './app/view/' . $view . '.php';
        require_once $view;
    }
    // hàm lấy name từ bảng category
    function getNameCate($id)
    {
        $data = $this->product->getCate(); // gọi hàm getCate() từ ProductModel
        foreach ($data as $key => $value) {
            if ($value['id'] == $id) { // nếu id truyền vào bằng id trong bảng category thì trả về name
                return $value['name'];
            }
        }
        return null;
    }
    function viewPro()
    {
        $this->datacate['listcate'] = $this->product->getCate();
        $this->data = $this->product->getproduct();
        $this->renderView('product', $this->data);
    }
    function viewAdd()
    {
        $this->data['listcate'] = $this->product->getCate();// lấy dữ liệu từ bảng category qua hàm getCate() trong ProductModel
        $this->renderView('addpro', []); //  hiển thị view addpro trong ProductModel
    }
    function addPro()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['title'] = $_POST['title'];
            $data['image'] = $_FILES['image']['name'];
            $data['imgA'] = $_FILES['imgA']['name'];
            $data['imgB'] = $_FILES['imgB']['name'];
            $data['imgC'] = $_FILES['imgC']['name'];
            $data['price'] = $_POST['price'];
            $data['sale'] = $_POST['sale'];
            $data['description'] = $_POST['description'];
            $data['detail'] = $_POST['detail'];
            $data['status'] = $_POST['status'];
            $data['sold'] = $_POST['sold'];
            $data['category_id'] = $_POST['category'];
            $file = '../public/upload/pictures/products/product/' . $data['image'];
            $fileA = '../public/upload/pictures/products/product/' . $data['imgA'];
            $fileB = '../public/upload/pictures/products/product/' . $data['imgB'];
            $fileC = '../public/upload/pictures/products/product/' . $data['imgC'];
            move_uploaded_file($_FILES['image']['tmp_name'], $file);
            move_uploaded_file($_FILES['imgA']['tmp_name'], $fileA);
            move_uploaded_file($_FILES['imgB']['tmp_name'], $fileB);
            move_uploaded_file($_FILES['imgC']['tmp_name'], $fileC);
            $this->product->insertPro($data);
        }
        echo '<script>location.href="index.php?page=product"</script>';
    }
    function viewEdit()
    {
        if (isset($_GET['id']) && ($_GET['id']) > 0) {
            $id = $_GET['id'];
            $this->data['listcate'] = $this->product->getCate();
            $this->data['pro_detail'] = $this->product->getIdPro($id); // getIdPro nằm ở ProductModel.php
            $this->renderView('editpro', $this->data);
        }
    }
   
    function editPro()
    {
        if (isset($_POST['submit'])) {
            $data = [];
            $data['title'] = $_POST['title'];
            $data['price'] = $_POST['price'];
            $data['sale'] = $_POST['sale'];
            $data['description'] = $_POST['description'];
            $data['detail'] = $_POST['detail'];
            $data['status'] = $_POST['status'];
            $data['sold'] = $_POST['sold'];
            $data['category_id'] = $_POST['category'];
            $data['id'] = $_POST['idpro']; // Ensure id is set

            // Handle image uploads
            if (!empty($_FILES['image']['name']) && !empty($_FILES['imgA']['name']) && !empty($_FILES['imgB']['name']) && !empty($_FILES['imgC']['name'])) {
                $data['image'] = $_FILES['image']['name'];
                $data['imgA'] = $_FILES['imgA']['name'];
                $data['imgB'] = $_FILES['imgB']['name'];
                $data['imgC'] = $_FILES['imgC']['name'];
                $file = '../public/upload/pictures/products/product/' . $data['image'];
                $fileA = '../public/upload/pictures/products/product/' . $data['imgA'];
                $fileB = '../public/upload/pictures/products/product/' . $data['imgB'];
                $fileC = '../public/upload/pictures/products/product/' . $data['imgC'];
                if (move_uploaded_file($_FILES['image']['tmp_name'], $file) && move_uploaded_file($_FILES['imgA']['tmp_name'], $fileA) && move_uploaded_file($_FILES['imgB']['tmp_name'], $fileB) && move_uploaded_file($_FILES['imgC']['tmp_name'], $fileC)) {
                    // Delete old images if necessary
                    $file_old = '../public/upload/pictures/products/product/' . $data['img_old'];
                    $file_oldA = '../public/upload/pictures/products/product/' . $data['img_oldA'];
                    $file_oldB = '../public/upload/pictures/products/product/' . $data['img_oldB'];
                    $file_oldC = '../public/upload/pictures/products/product/' . $data['img_oldC'];
                    if (file_exists($file_old) && $data['img_old'] != '' && file_exists($file_oldA) && $data['img_oldA'] != '' && file_exists($file_oldB) && $data['img_oldB'] != '' && file_exists($file_oldC) && $data['img_oldC'] != '') {
                        unlink($file_old);
                        unlink($file_oldA);
                        unlink($file_oldB);
                        unlink($file_oldC);
                    }
                } else {
                    echo "Có lỗi xảy ra khi upload ảnh mới";
                    return;
                }
            } else {
                $data['image'] = $data['img_old'];
                $data['imgA'] = $data['img_oldA'];
                $data['imgB'] = $data['img_oldB'];
                $data['imgC'] = $data['img_oldC'];
            }

            $this->product->updateProduct($data);
            echo '<script>alert("' . $data['title'] . ' đã được cập nhật")</script>';
            echo '<script>location.href="index.php?page=product"</script>';
            exit;
        }
    }
    function delProId()
    {
        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
            $id = $_GET['id'];
            $data = $this->product->getIdPro($id);
            $file = '../public/upload/pictures/products/product/' . $data['image'];
            $fileA = '../public/upload/pictures/products/product/' . $data['imgA'];
            $fileB = '../public/upload/pictures/products/product/' . $data['imgB'];
            $fileC = '../public/upload/pictures/products/product/' . $data['imgC'];
            unlink($file);
            unlink($fileA);
            unlink($fileB);
            unlink($fileC);
            $this->product->deletePro($id);
        }
        echo '<script>location.href="index.php?page=product"</script>';
    }


}

?>