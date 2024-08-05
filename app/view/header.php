<?php
session_start();
require_once "./app/model/database.php";

$db = new Database();
$conn = $db->conn;

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['sub'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email=:email AND password=:password";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['email' => $email, 'password' => $password]);

    if ($stmt->rowCount() > 0) {
        $row = $stmt->fetch(PDO::FETCH_ASSOC);
        $_SESSION['name'] = $row['name'];
        header("Location: index.php?page=index");
        exit();
    } else {
        // $error = "Email hoặc mật khẩu không đúng";
        echo "<script>alert('Email hoặc mật khẩu không đúng')</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Trang Chủ</title>
  <link rel="stylesheet" href="./public/css/style.css ?v= < php echo time(); >? " />
</head>

<body style=" background-image: url(./public/upload/pictures/bg-event-1-6-2024.webp) !important;
    background-attachment: fixed !important;
    background-size: cover !important;
    background-position: center !important;
    background-repeat: no-repeat !important; ">
  <header>
    <div class="left">
      <a href="index.php?page=home" class="logo"><img src="./public/upload/pictures/header/logoPGB.png" alt="logo" /></a>
    </div>
    <div class="search">
      <img src="./public/upload/pictures/header/search.png" alt="" />
      <input type="text" placeholder="Nhập từ khoá để tìm kiếm(ví dụ: em bé, quà tặng, mô hình,...)" />
    </div>

    <div>
      <a href="">
        <button class="follow-order">
          <img src="./public/upload/pictures/header/tracking.png" alt="tracking" />
          <div class="text">Theo dõi đơn hàng</div>
        </button>
      </a>
    </div>

    <div class="login">
      <a href="index.php?page=login">
        <button>
          <img src="./public/upload/pictures/header/login.png" alt="login" />
          <div class="login-text">Đăng nhập</div>
        </button>
      </a>
    </div>

    <div class="shopping">
      <a href="index.php?page=cart">
        <button>
          <img src="./public/upload/pictures/header/shopping-cart.png" alt="shopping-cart" />
          <div class="shopping-text">Giỏ hàng</div>
        </button>
      </a>
    </div>
    <div class="menu-pa">
      <ul>
        <li><a href="index.php?page=home" class="li-1">TRANG CHỦ</a></li>
        <li class="menu-sp">
          <a href="index.php?page=product" class="li-1">Sản Phẩm</a>
          <ul class="menu-con">
            <div class="trai">
              <div class="toy-film">
                <li><a href="" class="content">ĐỒ CHƠI THEO PHIM</a></li>
                <li><a href="">Siêu anh hùng</a></li>
                <li><a href="">Siêu robot</a></li>
                <li><a href="">Siêu thú</a></li>
                <li><a href="">Máy bay, phương tiện xe</a></li>
                <li><a href="">Đối kháng</a></li>
                <li><a href="">Con quay</a></li>
                <li><a href=""></a></li>
                <li><a href="">Khác</a></li>
              </div>
              <div>
                <li><a href="" class="content">ĐỒ CHƠI PHƯƠNG TIỆN</a></li>
                <li><a href="">Xe điều khiển</a></li>
                <li><a href="">Xe sưu tập die-cas</a></li>
                <li><a href="">Xe mô hình</a></li>
                <li><a href="">Xe lắp ráp</a></li>
                <li><a href="">Playset & phụ kiện</a></li>
                <li><a href="">Các phương tiện khác</a></li>
              </div>
            </div>
            <div class="giua1">
              <div class="giua">
                <div>
                  <li><a href="" class="content">ĐỒ CHƠI LẮP GHÉP</a></li>
                  <li><a href="">LEGO</a></li>
                  <li><a href="">Khác</a></li>
                </div>
                <br />
                <div>
                  <li><a href="" class="content">ĐỒ DÙNG HỌC TẬP</a></li>
                  <li><a href="">Balo đi học</a></li>
                  <li><a href="">Balo mầm non</a></li>
                  <li><a href="">Hộp viết</a></li>
                </div>
                <br />
                <div>
                  <li><a href="" class="content">ĐỒ CHƠI SÁNG TẠO</a></li>
                  <li><a href="">STEAM</a></li>
                  <li><a href="">Bút màu và bảng vẽ</a></li>
                  <li><a href="">Bột nặng</a></li>
                  <li><a href="">Cát động lực</a></li>
                  <li><a href="">Slime</a></li>
                  <li><a href="">Đồ chơi dựng phim</a></li>
                  <li><a href="">DIY</a></li>
                </div>
              </div>
              <div class="giua">
                <li class="content">ĐỒ THỜI TRANG</li>
                <li>Balo, túi, ví</li>
                <li>Vali</li>
                <li>Máy chụp hình</li>
                <li>Mắt kính</li>
                <li>Đồng hồ</li>
                <li>Thiết kế thời trnag</li>
                <li>Makeup & làm đẹp</li>
                <li>Phụ kiện thời trang</li>
                <br />
                <li class="content">ĐỒ CHƠI VẬN ĐỘNG</li>
                <li>Trong nhà</li>
                <li>Ngoài trời</li>
                <br />
                <li class="content">THẾ GIỚI ĐỘNG VẬT</li>
                <li>Khủng long</li>
                <li>Rồng</li>
              </div>
              <div class="giua">
                <li><a href="" class="content">BÚP BÊ</a></li>
                <li><a href="">Búp bê sưu tập</a></li>
                <li><a href="">Búp bê thời trang</a></li>
                <li><a href="">Búp bê nghề nghiệp</a></li>
                <li><a href="">Búp bê baby</a></li>
                <li><a href="">Búp bê biết bay</a></li>
                <li><a href="">Playset & phụ kiện</a></li>
                <br />
                <li><a href="" class="content">ĐỒ CHƠI MÔ PHỎNG</a></li>
                <li><a href="">Đồ chơi nhà bếp siêu thị</a></li>
                <li><a href="">Đồ chơi cảnh sát</a></li>
                <li><a href="">Đồ chơi cứu hoả</a></li>
                <li><a href="">Đồ chơi bác sĩ</a></li>
                <li><a href="">Mô phỏng cửa hàng</a></li>
                <li><a href="">Khác</a></li>
              </div>
              <div class="giua">
                <li><a href="" class="content">ROBOT</a></li>
                <li><a href="">Robot điều khiẻn từ xa</a></li>
                <li><a href="">Robot tự động</a></li>
                <br />
                <li><a href="" class="content">ĐỒ CHƠI MẦM NON</a></li>
                <li><a href="">Đồ chơi sơ sinh</a></li>
                <li><a href="">Đồ chơi giáo dục</a></li>
                <li><a href="">Đồ chơi âm nhạc</a></li>
                <li><a href="">Đồ chơi nhập vai</a></li>
                <li><a href="">Đồ chơi nhà tắm</a></li>
                <li><a href="">Đồ chơi mềm</a></li>
                <br />
                <li><a href="" class="content">ĐỒ CHƠI BAY</a></li>
                <li><a href="">Drone</a></li>
                <li><a href="">Trực thăng</a></li>
                <li><a href="">Bệ phóng máy bay</a></li>
              </div>
              <div class="giua">
                <li><a href="" class="content">GAME</a></li>
                <li><a href="">Board games</a></li>
                <li><a href="">Đồ chơi ảo thuật</a></li>
                <li><a href="">Puzzies</a></li>
                <li><a href="">Khác</a></li>
                <br />
                <li><a href="" class="content">XE ĐẠP & SCOOTER</a></li>
                <li><a href="">Xe đạp</a></li>
                <li><a href="">Xe thăng bằng</a></li>
                <li><a href="">Xe chòi chân</a></li>
                <li><a href="">Scooter</a></li>
                <li><a href="">Patin</a></li>
                <li><a href="">Ván trượt</a></li>
                <li><a href="">Phụ kiện</a></li>
                <br />
                <li><a href="" class="content">ĐỒ DÙNG CHO BÉ</a></li>
                <br />
                <li><a href="" class="content">ĐỒ CHƠI SƯU TẬP</a></li>
              </div>
            </div>
          </ul>
        </li>
        <li><a href="" class="li-1">Giới Tính</a></li>
        <li><a href="" class="li-1">Độ Tuổi</a></li>
        <li><a href="" class="li-1">Thương Hiệu</a></li>
        <li><a href="" class="li-1">Khuyến Mãi</a></li>
        <li><a href="" class="li-1">Chương Trình Thành Viên</a></li>
        <li><a href="" class="li-1">Cẩm Nang</a></li>
        <li><a href="" class="li-1">Danh Sách Yêu Thích</a></li>
      </ul>
    </div>
  </header>