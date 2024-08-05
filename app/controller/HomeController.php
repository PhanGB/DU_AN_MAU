<?php

class HomeController{
    private $categories;
    private $data;
    private $dataproduct;
    private $product;

    function __construct(){
        require_once './app/model/CategoryModel.php';
        $this->categories = new CategoryModel();
        $this->data = [
            'listcate' => [],
            'seasoncate' => [],
        ];
        require_once './app/model/ProductModel.php';
        $this->product = new ProductModel();
        $this->dataproduct = [
            'hotproduct' => [],
        ];


    }
    function view($data, $product, $dataproduct){
        require_once './app/view/home.php';
    }
    function home(){
        $category = new CategoryModel();
        $this->data['allcate'] = $category->getCate();
        $this->data['listcate'] = $category->getPopularCate();
        $this->data['seasoncate'] = $category->getSeasonCate();
        $this->dataproduct['hotproduct'] = $this->product->getHotProduct();
        $this->view($this->data, $this->product, $this->dataproduct);
    }
}

?>