<link rel="stylesheet" href="./public/css/re_pass.css ?v= < php echo time(); >?">
<div id="err_outp">
    </div>
    <form action="" class="form-login">
      <h1>Đặt Lại Mật Khẩu</h1>
      <p style="margin-top: -20px;">Chúng tôi sẽ gửi email cho bạn để đặt lại mật khẩu</p>
      <br><label for="">Email*</label><br />
      <input type="email" class="inp-login" id="fg_email" /><br />
      <!-- <label for="" style="margin-left: -330px">Mật khẩu*</label><br />
      <input type="password" required class="inp-login" /><br /><br /> -->
      <br>
      <input type="submit" value="Gửi" class="submit-log" onclick="return chk_fgpass()" /><br /><br />
      <a href="index.php?page=login">Huỷ</a><br /><br>
      <!-- <p>Chưa có tài khoản? <a href="signup.html" style="color: red;">Đăng ký tài khoản</a></p> -->
    </form>