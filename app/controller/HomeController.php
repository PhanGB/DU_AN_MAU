<?php

class HomeController{

    function __construct(){
        require_once '../app/model/CategoryModel.php';

    }
    function view($data, $product){
        require_once '../app/view/home.php';
    }
    function home(){
        $category = new CategoryModel();
        // $data = $category->getCategory();
        // $product = $category->getProduct();
        // $this->view($data, $product);
        require_once '../app/view/home.php';
    }
}

?>