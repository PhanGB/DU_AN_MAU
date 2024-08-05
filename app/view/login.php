
 <link rel="stylesheet" href="./public/css/login.css ?v= < php echo time(); >? ">
<div id="err_outp">
    </div>
    <form action="" class="form-login" method="POST">
      <h1>Đăng Nhập</h1>
      <label for="">Email*</label><br />
      <input type="email" class="inp-login" value="" id="mail" name="email" /><br /><br />
      <label for="" style="margin-left: -330px">Mật khẩu*</label><br />
      <input type="password" class="inp-login" value="" id="pass" name="password"/><br /><br />
      <input
        type="submit"
        name="sub"
        value="Đăng Nhập"
        class="submit-log"
        onclick="return kt_dn()"
      /><br /><br />
      <a href="index.php?page=repass">Quên mật khẩu?</a><br /><br />
      <p>
        Chưa có tài khoản?
        <a href="index.php?page=signup" style="color: red">Đăng ký tài khoản</a>
      </p>
    </form>