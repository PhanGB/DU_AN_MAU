<?php
// require_once '../app/controller/HomeController.php';
?>
<div class="banner">
  <img src="./public/upload/pictures/left-arrow.png" alt="" width="60px" id="arrow-left" onclick="left()">
  <img src="./public/upload/pictures/right-arrow.png" alt="" width="60px" id="arrow-right" onclick="right()">
  <img src="./public/upload/pictures/banner/khung-long.webp ?v= < php echo time(); >? " alt="" id="main" />
</div>
<!--  -->
<div class="under-banner1">
  <div class="under-banner"><a href="">Tất Cả</a></div>
  <div class="under-banner"><a href="">Hàng Mới</a></div>
  <div class="under-banner"><a href="">Sự kiện</a></div>
  <div class="under-banner"><a href="">Giảm Giá</a></div>
</div>
<!-- DANH MỤC NỔI BẬT  -->
<div class="dmnb">
  <p class="dmnb-title">DANH MỤC NỔI BẬT</p>
</div>

<!-- duyệt danh mục -->
<?php
$listcate = $data['listcate'];
foreach ($listcate as $value) {
  ?>
  <div class="dmnb1">
    <div class="dcnb">
      <img src="./public/upload/pictures/index/<?= $value['image'] ?> " alt="" width="680px" height="400px" />
      <p class="dcmn"><?= $value['name'] ?></p>
      <a href="">Xem Thêm</a>
    </div>
  </div>
  <?php
}
?>


<!-- -----------DANH MỤC SẢN PHẨM THEO MÙA------------- -->
<p class="spTheoMua-title">DANH MỤC SẢN PHẨM THEO MÙA</p>
<div class="sp-theomua">
  <?php
  $seasoncate = $data['seasoncate'];
  foreach ($seasoncate as $value) {
    ?>
    <div class="sp-theomua1">
      <img src="./public/upload/pictures/index/<?= $value['image'] ?>" alt="" width="320px" />
      <p><?= $value['name'] ?></p>
      <a href="">Xem Thêm</a>
    </div>
  <?php
}
?>
</div>

<!-- ---SẢN PHẨM BÁN CHẠY -->
<p class="spbanChay-tile">TOP SẢN PHẨM BÁN CHẠY</p>
<div class="spbanchay">
  <?php
  $product = $dataproduct['hotproduct'];
  foreach ($product as $value) {
    ?>
    <div class="spbanchay1">
      <a href="">
        <img src="./public/upload/pictures/products/product/<?= $value['image'] ?>" alt="" />
        <p><?= $value['title'] ?></p>
        <p class="price">
          <del style="font-size: 13px; color: black"><?= number_format($value['price']) ?>k VND</del> <?= number_format($value['price'] * 0.9) ?>k VND
        </p>
        <a href="#"><button>Thêm vào giỏ hàng</button></a>
      </a>
    </div>
  <?php
}
?>
</div>
<!-- -------------------GÓC TÌM QUÀ TẶNG ------------------>
<div class="gif">
  <div class="box">
    <p class="title">Góc Tìm Quà Tặng</p>
    <p class="text">
      Hãy để Mykingdom cùng tìm kiếm những món quà ý nghĩa cho những dịp
      <br />đặc biệt của các bạn nhỏ nhé. <br />Đầu tiên hãy trả lời nhanh
      các câu hỏi sau đây để Mykingdom có thể biết <br />được sở thích của
      các bạn nhỏ nha. Ngay khi bạn hoàn thành xong các câu <br />hỏi, các
      quà tặng phù hợp cho bé sẽ xuất hiện. Bắt đầu ngay thôi!
    </p>
    <a href="">Xem Thêm</a>
  </div>
  <div class="box">
    <img src="./public/upload/pictures/index/Goc_tim_qua_t_ng_731x420_ec47b1c3-fefe-40b4-b59e-6e785e401cf3.webp"
      alt="" />
  </div>
</div>