<?php

class AdUserController{

    private $data = [];
    private $user;
    function __construct()
    {
        require_once '../app/model/UserModel.php';
        $this->user = new UserModel();
        $this->data = [];
    }
    function renderView($view, $data = null)
    {
        $view = './app/view/' . $view . '.php';
        require_once $view;
    }

    function viewUser(){
        $user = new UserModel();
        $this->data['data'] = $user->getAllUser();
        $this->renderView('user', $this->data);
    }
}
