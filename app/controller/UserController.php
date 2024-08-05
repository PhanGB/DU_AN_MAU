<?php
class UserController
{
    private $model;
    function __construct()
    {
        require 'app/model/UserModel.php';
        $this->model = new UserModel();

    }
    function signup()
    {
        if (isset($_POST['submit'])) {
            $data['first_name'] = $_POST['first-name'];
            $data['last_name'] = $_POST['last-name'];
            $data['email'] = $_POST['email'];
            $data['phone'] = $_POST['phone-number'];
            $data['gender'] = $_POST['gender'];
            $data['password'] = $_POST['pass'];
            $this->model->signUp($data);
        }
        echo '<script>alert("Đăng ký thành công")</script>';
        echo '<script>location.href="index.php?page=login"</script>';

    }
    

}


?>