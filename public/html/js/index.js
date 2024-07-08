// chuyển slide ảnh banner
var arrpic = [
  "../public/html/pictures/banner/khung-long.webp",
  "../public/html/pictures/banner/2._Balo_Hoodie_-_MKD.webp",
  "../public/html/pictures/banner/balo.webp",
  "../public/html/pictures/banner/create.webp",
  "../public/html/pictures/banner/kungfu.webp",
];

poisition = 0;
function right() {
  poisition++;
  if (poisition == arrpic.length) {
    poisition = 0;
  }
  document.getElementById("main").setAttribute("src", arrpic[poisition]);
}

function left() {
  poisition--;
  if (poisition < 0) {
    poisition = arrpic.length - 1;
  }
  document.getElementById("main").setAttribute("src", arrpic[poisition]);
}

setInterval(right, 3000);

// Kiểm tra đăng nhập
function kt_dn() {
  var mail_dn = document.getElementById("mail");
  var pass_dn = document.getElementById("pass");
  var email = mail_dn.value;
  var accounts = JSON.parse(localStorage.getItem("accounts"));
  // var email = document.getElementById("mail").value;
  // var password = document.getElementById("pass").value;

  if (mail_dn.value == "") {
    document.getElementById("err_outp").innerHTML =
      ' <p id="errText">Vui lòng nhập Email!</p>';
    mail_dn.focus();
    return false;
  }
  if (email.indexOf("@") == -1 || email.indexOf("@") == email.length - 1) {
    document.getElementById("err_outp").innerHTML =
      ' <p id="errText">Vui lòng nhập email chính xác!</p>';
    return false;
  }

  if (pass_dn.value == "") {
    document.getElementById("err_outp").innerHTML =
      ' <p id="errText">Vui lòng nhập Password!</p>';
    pass_dn.focus();
    return false;
  }
  //Kiểm tra tài khoản đăng nhập

  // var accounts = JSON.parse(localStorage.getItem("accounts"));

  var found = false;
  for (let i = 0; i < accounts.length; i++) {
    if (
      mail_dn.value === accounts[i]["email"] &&
      pass_dn.value === accounts[i]["password"]
    ) {
      found = true;
      break;
    }
  }

  if (!found) {
    document.getElementById("err_outp").innerHTML =
      ' <p id="errText">Email hoặc password không chính xác!</p>';
    setTimeout(function () {
      document.getElementById("err_outp").innerHTML = "";
    }, 4000);
    return false;
  }

  // Đăng nhập thành công, chuyển hướng người dùng đến trang chính
  window.location.href = "home.html";
  return true;

  //  else{
  //    return false;
  //  }
}

// check mail trong form quên mật khẩu
function chk_fgpass() {
  var fg_mail = document.getElementById("fg_email").value;

  if (fg_mail == "") {
    document.getElementById("err_outp").innerHTML =
      ' <p id="errText">Vui lòng nhập email!</p>';
    document.getElementById("fg_email").focus();
    return false;
  }

  if (
    fg_mail.indexOf("@") == -1 ||
    fg_mail.indexOf("@") == fg_mail.length - 1
  ) {
    document.getElementById("err_outp").innerHTML =
      ' <p id="errText">Vui lòng nhập email chính xác!</p>';
    document.getElementById("fg_email").focus();
    return false;
  }

  return true;
}
