//kiểm tra đăng kí

document.addEventListener("DOMContentLoaded", function () {
  const modal = document.getElementById("myModal");
  const closeButton = document.getElementsByClassName("close")[0];
  const loginRedirectButton = document.getElementById("loginRedirectButton");

  const registrationForm = document.getElementById("registrationForm");
  registrationForm.addEventListener("submit", function (event) {
    event.preventDefault(); // Ngăn chặn việc gửi form

    // Gọi hàm validateForm() để kiểm tra hợp lệ của các trường input
    if (!validateForm()) {
      return; // Dừng lại nếu có lỗi
    }

    // Hiển thị cửa sổ modal
    modal.style.display = "block";
  });

  // Đóng modal khi nhấn nút close
  closeButton.onclick = function () {
    modal.style.display = "none";
  };

  // Chuyển hướng người dùng đến trang đăng nhập khi nhấp vào nút "Đăng nhập"
  loginRedirectButton.addEventListener("click", function () {
    window.location.href = "login.html"; // Chuyển hướng người dùng đến trang đăng nhập
  });

  // Đóng modal khi nhấn bất kỳ đâu ngoài modal
  window.onclick = function (event) {
    if (event.target == modal) {
      modal.style.display = "none";
    }
  };
});

function validateForm() {
  var firstName = document.getElementById("first-name").value;
  var lastName = document.getElementById("last-name").value;
  var phoneNumber = document.getElementById("phone-number").value;
  var gender = document.getElementById("gender").value;
  var pass = document.getElementById("pass").value;
  var repass = document.getElementById("repass").value;
  var email = document.getElementById("email").value;

  if (firstName == "") {
    document.getElementById("errFName").innerHTML = "Vui lòng nhập Tên";
    setTimeout(function () {
      document.getElementById("errFName").innerHTML = "";
    }, 4000);
    document.getElementById("first-name").focus();
    return false;
  }

  if (lastName == "") {
    document.getElementById("errLName").innerHTML = "Vui lòng nhập Họ";
    setTimeout(function () {
      document.getElementById("errLName").innerHTML = "";
    }, 4000);
    document.getElementById("last-name").focus();
    return false;
  }
  if (email == "") {
    document.getElementById("errMail").innerHTML = "Vui lòng nhập Email";
    setTimeout(function () {
      document.getElementById("errMail").innerHTML = "";
    }, 4000);
    document.getElementById("email").focus();
    return false;
  }
  if (email.indexOf("@") == -1 || email.indexOf("@") == email.length - 1) {
    document.getElementById("errMail").innerHTML =
      "Vui lòng nhập email chính xác";
    setTimeout(function () {
      document.getElementById("errMail").innerHTML = "";
    }, 4000);
    document.getElementById("email").focus();
    return false;
  }

  if (phoneNumber == "") {
    document.getElementById("errTel").innerHTML = "Vui lòng nhập số điện thoại";
    setTimeout(function () {
      document.getElementById("errTel").innerHTML = "";
    }, 4000);
    document.getElementById("phone-number").focus();
    return false;
  }
  if (gender === "") {
    document.getElementById("errG").innerHTML = "Vui lòng chọn Giới Tính";
    setTimeout(function () {
      document.getElementById("errG").innerHTML = "";
    }, 4000);
    document.getElementById("gender").focus();
    return false;
  }
  if (pass === "") {
    document.getElementById("textPass").innerHTML = "Vui lòng nhập mật khẩu!";
    setTimeout(function () {
      document.getElementById("textPass").innerHTML = "";
    }, 4000);
    document.getElementById("pass").focus();
    return false;
  }
  if (pass.length < 8) {
    document.getElementById("textPass").innerHTML =
      "Mật khẩu phải lớn hơn 8 kí tự";
    setTimeout(function () {
      document.getElementById("textPass").innerHTML = "";
    }, 4000);
    document.getElementById("pass").focus();
    return false;
  }
  if (repass === "") {
    document.getElementById("textRePass").innerHTML =
      "Vui lòng xác nhận lại mật khẩu!";
    setTimeout(function () {
      document.getElementById("textRePass").innerHTML = "";
    }, 4000);
    document.getElementById("repass").focus();
    return false;
  }
  if (pass != repass) {
    document.getElementById("textRePass").innerHTML =
      "Mật khẩu không trùng khớp";
    setTimeout(function () {
      document.getElementById("textRePass").innerHTML = "";
    }, 4000);
    return false;
  }

  var email = document.getElementById("email").value;
  var password = document.getElementById("pass").value;

  var account = { 'email': email, 'password': password };

  var accounts = JSON.parse(localStorage.getItem("accounts"));
  if (accounts != null) {
    var accountList = accounts;
  } else {
    var accountList = [];
  }

  accountList.push(account);
  console.log(accountList);

  localStorage.setItem("accounts", JSON.stringify(accountList));
  return true;
}
