<link rel="stylesheet" href="./public/css/sanpham.css ?v= < php echo time(); >? ">
<div class="c-danhmuc">
      <p>DANH MỤC</p>
      <ul>
        <!-- duyệt danh mục -->
        <?php
        require_once './app/controller/HomeController.php';
        $listcate = $data['allcate'];
        foreach ($listcate as $value) {
        ?>
          <li><a href=""><?= $value['name'] ?></a></li>
        <?php
        }
        ?>
      </ul>

      <p>GIÁ (Đ)</p>
      <input type="checkbox" />
      <label for="">Dưới 1 tỷ</label>
      <br />

      <input type="checkbox" />
      <label for="">1 tỷ - 2 tỷ</label>
      <br />

      <input type="checkbox" />
      <label for="">2 tỷ - 3 tỷ</label>
      <br />

      <input type="checkbox" />
      <label for="">3 tỷ - 4 tỷ</label>
      <br />

      <input type="checkbox" />
      <label for="">Trên 4 tỷ</label>
      <br />

      <p>TUỔI</p>
      <input type="text" placeholder="tuỳ chọn tìm kiếm" /><br />

      <input type="checkbox" />
      <label for="">12 tuổi trở lên</label><br />

      <input type="checkbox" />
      <label for="">6-12 tuổi</label><br />

      <input type="checkbox" />
      <label for="">3-6 tuổi</label><br />

      <input type="checkbox" />
      <label for="">1-3 tuổi</label><br />

      <input type="checkbox" />
      <label for="">0-12 tháng</label><br />

      <p>GIỚI TÍNH</p>
      <input type="checkbox" />
      <label for="">BOY</label><br />

      <input type="checkbox" />
      <label for="">GIRL</label><br />

      <input type="checkbox" name="" id="" />
      <label for="">PRESCHOOL</label><br />
    </div>

    <div class="find-sp">
      <input
        type="text"
        placeholder="tìm kiếm sản phẩm..."
        class="timkiem-sp"
      />
      <a href="" class="loupe"
        ><img src="./public/upload/pictures/products/loupe.png" alt="" width="20px"
      /></a>
    </div>

    <div class="box-sp">
      <div id="daThem">
      </div>
      <!-- ------------------------SẢN PHẨM HÀNG 1---------------------------------------- -->
      <div class="sp">
        <!--------------->
        <?php
        foreach ($listproducts as $product) {
        ?>
          <div class="sp-con">
            <a href="index.php?page=detail&id=<?php echo $product['id'] ?>" onclick="getSP(this)">
              <img
                src="./public/upload/pictures/products/product/<?php echo $product['image'] ?>"
                alt=""
                width="300px"
                height="300px"
                class="sp-img"
              />
              <img
                src="./public/html/pictures/products/sale70n.png"
                width="50px"
                alt=""
                class="sale70"
              />
              <p><?php echo $product['title'] ?></p>
              <input type="hidden" value="<?php echo $product['price'] ?>">
              <p class="price">
                <?php echo number_format($product['price']*((100- $product['sale'] )/100)) ?>k .<del style="font-size: 13px"><?php echo $product['price'] ?>k</del>
              </p>
              <input type="hidden" value="<?php echo $product['id'] ?>" >
            </a>
            <button onclick="add(this)">Thêm vào giỏ hàng</button>
          </div>
        <?php
        }
        ?>
        <!---------------->
      </div>
    </div>