<!-- -------------------------------------------- -->
<link rel="stylesheet" href="./public/css/chitiet.css">
<?php
extract($data['detail']);
// var_dump($image);
?>
<div class="box-ct">
  <div class="img-ct">
    <img src="./public/upload/pictures/products/product/<?= $image ?>" alt="" class="hinh-chinh" id="h-chinh ?v= < php echo time(); >?" />
    <div class="saleoff">-70%</div>
    <br />
    <div id="smallPics">
      <img src="./public/upload/pictures/products/product/<?= $image ?>" alt="" class="hinh-con"
        onclick="change(this)" />
      <img src="./public/upload/pictures/products/product/<?= $imgA ?>" alt="" class="hinh-con"
        onclick="change(this)" />
      <img src="./public/upload/pictures/products/product/<?= $imgB ?>" alt="" class="hinh-con"
        onclick="change(this)" />
      <img src="./public/upload/pictures/products/product/<?= $imgC ?>" alt="" class="hinh-con"
        onclick="change(this)" />
    </div>
  </div>
</div>


<div class="in4-ct">
  <div id="themTC"></div>
  <p class="name-sp" id="name"><?= $title ?></p>
  <p class="price">Giá Gốc: <?= $price ?>k</p>
  <p class="price">Giảm Còn:<span id="giasp">2</span> <?= $sale ?>k</p>
  <input type="hidden" value="" id="gia_hid">
  <input type="hidden" value="" id="idsp">
  <p>
    <span class="material-symbols-outlined"> check </span> Hàng Chính Hãng
  </p>

  <p>
    <span class="material-symbols-outlined"> check </span>Miễn Phí Giao
    Hàng Toàn Quốc Đơn Trên 500k
  </p>
  <p>
    <span class="material-symbols-outlined"> check </span>Giao Hàng Hoả
    Tốc 4 Tiếng
  </p>
</div>
</div>
<div class="so-luong">
  <form action="" style="float: left;">
    <label for="">Số lượng</label><br />
    <input type="number" value="1" id="soluong" min="1" max="10" class="inp-sl" />
  </form>
  <button onclick="addGh(this)" class="button-themGH">Thêm vào giỏ hàng</button>
  <button class="mua-ngay">Mua Ngay</button>

</div>
<div class="in4-sp">
  <p>THÔNG TIN SẢN PHẨM</p>
  <table border="1">
    <tr>
      <td>Chủ đề</td>
      <td>NANANA DOLL</td>
    </tr>
    <tr>
      <td>Xuất xứ</td>
      <td>Trung Quốc</td>
    </tr>
    <tr>
      <td>Mã VT</td>
      <td>575375EUC</td>
    </tr>
    <tr>
      <td>Tuổi</td>
      <td>0 - 99</td>
    </tr>
    <tr>
      <td>Xuất xứ thương hiệu</td>
      <td>Mỹ</td>
    </tr>
  </table>
</div>
<script src="./public/js/chitiet.js ?v= < php echo time(); >?"></script>