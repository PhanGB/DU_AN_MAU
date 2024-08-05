<?php

class CartController{
    function __construct(){
        require_once '../app/model/CartModel.php';
    }   
    function index(){
        $cart = new CartModel();
        $data = $cart->getCart();
        require_once '../app/view/cart.php';
    }
    
}