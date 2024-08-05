<?php
require_once './app/view/header.php';
require_once './app/controller/HomeController.php';
require_once './app/controller/ProductController.php';
require_once './app/controller/CategoryController.php';
require_once './app/controller/CartController.php';
require_once './app/controller/UserController.php';

if(isset($_GET['page'])){
    $page = $_GET['page'];
    switch($page){
        case 'product':
            $product = new ProductController();
            $product->viewProduct();
            break;
        case 'detail':
            $product = new ProductController();
            $product->detail();
            break;
        case 'category':
            $category = new CategoryController();
            // $category->index();
            break;
        case 'cart':
            $cart = new CartController();
            $cart->index();
            break;
        case 'login':
            require_once './app/view/login.php';
            break;
        case 'signup':
            require_once './app/view/signup.php';
            break;
        case 'addUser':
            $user = new UserController();
            $user->signup();
            break;
        case 'repass':
            require_once './app/view/repass.php';
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
require_once './app/view/footer.php';
?>