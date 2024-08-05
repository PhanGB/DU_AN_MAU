<?php
require_once '../app/model/database.php';
require_once '../app/model/CategoryModel.php';
require_once '../app/model/ProductModel.php';
require_once './app/view/header.php';
require_once './app/controller/AdProductController.php';
require_once './app/controller/AdCategoryController.php';
if (isset($_GET['page'])) {
    $page = $_GET['page'];
    switch ($page) {
        case 'addpro':
            $add = new AdProductController();
            $add->viewAdd();
            break;
        case 'addcate':
            $add = new AdCategoryController();
            $add->viewCate();
        break;
        case 'addnewcate':
            $add = new AdCategoryController();
            $add->addCate();
            break;
        case 'add':
            $add = new AdProductController();
            $add->addPro();
            break;
        case 'editpro':
            $add = new AdProductController();
            $add->viewEdit();
            break;
        case 'ecate':
            $add = new AdCategoryController();
            $add->VieweditCate();
            break;
        case 'delpro':
            $product = new AdProductController();
            $product->delProId();
            break;
        case 'delcate':
            $cate = new AdCategoryController();
            $cate->delCateId();
            break;
        case 'category':
            $cate = new AdCategoryController();
            $cate->getAllCategory(); 
            break;
        case 'product':
            $product = new AdProductController();
            $product->viewPro();
            break;
        case 'edit':
            $product = new AdProductController();
            $product->editPro();
            break;
        case 'editcate':
            $cate = new AdCategoryController();
            $cate->editCate();
            break;
        case 'user':
            require_once './app/controller/AdUserController.php';
            $user = new AdUserController();
            $user->viewUser();
            break;
        case 'cart':
            require_once './app/controller/AdCartController.php';
            $cart = new AdCartController();
            $cart->viewCart();
            break;
        case 'notification':
            // $noti = new AdNotificationController();
            // $noti->viewNoti();
            require_once './app/view/notification.php';
            break;
        default:
            $product = new AdProductController();
            $product->viewPro();
            break;
    }
} else {
    $product = new AdProductController();
    $product->viewPro();
}
require_once './app/view/footer.php';
?>