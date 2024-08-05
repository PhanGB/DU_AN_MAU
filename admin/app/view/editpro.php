<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=add" method="POST" enctype="multipart/form-data">
                            <label for="category">Danh mục sản phẩm</label>
                            <select name="category" id="category" class="form-control" required>
                            <?php
                                $listcate = $data['listcate'];
                                $pro_detail = $data['pro_detail'];
                                foreach ($listcate as $item) {
                                    extract($item);
                                    if ($pro_detail['id_cate'] == $id) {
                                        echo "<option value='" . $id . "' selected>" . $name . "</option>";
                                    } else {
                                        echo "<option value='" . $id . "'>" . $name . "</option>";
                                    }
                                }
                                ?>
                            </select>

                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="title" id="title" class="form-control" 
                            value="<?= $pro_detail['title'] ?>">
                            <label for="">Giá (k)</label>
                            <input type="number" name="price" id="price" class="form-control" 
                            value="<?= $pro_detail['price'] ?>">
                            <label for="">Số phần trăm giảm (%)</label>
                            <input type="number" name="sale" id="sale" max="100" class="form-control" 
                            value="<?= $pro_detail['sale'] ?>">
                            <label for="">Mô tả</label>
                            <textarea name="description" id="description" class="form-control" required><?=$pro_detail['description']?></textarea>
                            <label for="">Trạng thái</label>
                            <input type="text" name="status" id="status" class="form-control" required
                            value="<?= $pro_detail['status'] ?>">
                            <label for="">Số lượng đã bán</label>
                            <input type="number" name="sold" id="sold" class="form-control" required
                            value="<?= $pro_detail['sold'] ?>">
                            <label for="">Chi tiết</label>
                            <input type="text" name="detail" id="detail" class="form-control" required
                            value="<?= $pro_detail['detail'] ?>">
                            <label for=""><b>Hình ảnh chính</b></label>
                            <input type="file" name="image" id="image" class="form-control">
                            <img src="../public/upload/pictures/products/product/<?=$pro_detail['image']?>" alt="" style="width:100px;height=100px;"><br><br>
                            <input type="hidden" name="img_old" value="<?= $pro_detail['image'] ?>">
                            <label for=""><b>Hình con 1</b></label>
                            <input type="file" name="imgA" id="imgA" class="form-control">
                            <img src="../public/upload/pictures/products/product/<?=$pro_detail['imgA']?>" alt="" style="width:100px;height=100px;"><br><br>
                            <input type="hidden" name="img_oldA" value="<?= $pro_detail['imgA'] ?>">
                            <label for=""><b>Hình con 2</b></label>
                            <input type="file" name="imgB" id="imgB" class="form-control">
                            <img src="../public/upload/pictures/products/product/<?=$pro_detail['imgB']?>" alt="" style="width:100px;height=100px;"><br><br>
                            <input type="hidden" name="img_oldB" value="<?= $pro_detail['imgB'] ?>">
                            <label for=""><b>Hình con 3</b></label>
                            <input type="file" name="imgC" id="imgC" class="form-control">
                            <img src="../public/upload/pictures/products/product/<?=$pro_detail['imgC']?>" alt="" style="width:100px;height=100px;"><br><br>
                            <input type="hidden" name="img_oldC" value="<?= $pro_detail['imgC'] ?>">
                            <input type="hidden" name="idpro" value="<?= $pro_detail['id'] ?>">
                            <br><input type="submit" value="Cập nhật" name="submit">
                        </form>
                        <br><br><br><br>
                        <a href="index.php?page=product"><button>Quay lại</button></a>

                    </div>

                </div>
            </div>