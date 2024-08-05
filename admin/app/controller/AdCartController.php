<?php
class AdCartController{
    private $data = [];
    private $cart;
    function __construct()
    {
        require_once '../app/model/CartModel.php';
        $this->cart = new CartModel();
        $this->data = [];
    }
    function renderView($view, $data = null)
    {
        $view = './app/view/' . $view . '.php';
        require_once $view;
    }

    function viewCart(){
        $cart = new CartModel();
        $this->data['cart'] = $cart->getAllCart();
        $this->renderView('cart', $this->data);
    }

}