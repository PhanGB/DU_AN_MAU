<?php
require_once '../app/view/header.php';
require_once '../app/controller/HomeController.php';
if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){
        case 'product':
            $product = new ProductController();
            $product->index();
            break;
        case 'category':
            $category = new CategoryController();
            $category->index();
            break;
        default:
            $home = new HomeController();
            $home->home();
            break;
    }
}else{
    $home = new HomeController();
    $home->home();
}
require_once '../app/view/footer.php';
?>