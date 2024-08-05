<link rel="stylesheet" href="./public/css/signup.css ?v= < php echo time(); >?">
<form action="index.php?page=addUser" class="form-login" id="registrationForm" method="POST" enctype="multipart/form-data">
      <h1>Đăng Ký Tài Khoản</h1>
      <label for="" style="margin-left: -750px">Tên*</label><br />
      <input type="text" class="inp-login" id="first-name" name="first-name"/>
      <div class="errTx"><span id="errFName"></span>.</div>

      <label for="" style="margin-left: -750px">Họ*</label><br />
      <input type="text" class="inp-login" id="last-name" name="last-name" style="width: 100%" />
      <div class="errTx"><span id="errLName"></span>.</div>

      <label for="" style="margin-left: -750px">Email*</label><br />
      <input type="email" class="inp-login" id="email" name="email" style="width: 100%" />
      <div class="errTx"><span id="errMail"></span>.</div>

      <label for="" style="margin-left: -680px">Số Điện Thoại*</label><br />
      <input type="tel" class="inp-login" id="phone-number" name="phone-number" />
      <div class="errTx"><span id="errTel"></span>.</div>

      <p style="margin-left: -200px; font-style: italic; color: red">
        Số điện thoại này dùng để nhận OTP khi đổi điểm tích luỹ, sử dụng code
        sinh nhật
      </p>
      <br /><br />

      <label for="" style="margin-left: -720px">Giới Tính*</label><br />
      <select name="gender" id="gender" name="gender" class="inp-login" style="width: 100%">
        <option value="">Chọn</option>
        <option value="Nam">Nam</option>
        <option value="Nữ">Nữ</option>
        <option value="Khác">Khác</option>
      </select>
      <div class="errTx"><span id="errG"></span>.</div>
      <br /><br />

      <div class="inp-pass">
        <div class="pass">
          <label for="" class="label-pass" style="margin-left: -280px"
            >Mật Khẩu</label
          ><br />
          <input type="password" id="pass" name="pass"/>
          <p id="textPass"></p>
        </div>
        <div class="pass" style="margin-left: 450px; position: absolute">
          <label for="" class="label-pass">Nhập Lại Mật Khẩu*</label><br />
          <input type="password" id="repass" name="repass" />
          <p id="textRePass"></p>
        </div>
      </div>
      <input
        type="submit"
        name="submit"
        value="Đăng Kí"
        class="submit-log"
        onclick="return validateForm()"
      /><br /><br />
      <p>
        Đã có tài khoản?
        <a href="index.php?page=login" style="color: red">Đăng nhập ngay</a>
      </p>
    </form>

    <div id="myModal" class="modal">
      <div class="modal-content">
        <span class="close">&times;</span>
        <p>Tạo tài khoản thành công!</p>
        <button id="loginRedirectButton">Đăng nhập</button>
      </div>
    </div>