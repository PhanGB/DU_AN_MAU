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
                                $cate = new CategoryModel(); // khởi tạo model để lấy dữ liệu danh mục
                                $data = $cate->getCate(); // gọi hàm lấy dữ liệu danh mục từ model
                                foreach ($data as $value) {
                                    extract($value);
                                    echo "<option value='" . $id . "'>" . $name . "</option>";
                                }
                                ?>
                            </select>

                            <label for="">Tên sản phẩm</label>
                            <input type="text" name="title" id="title" class="form-control" required>
                            <label for="">Giá (k)</label>
                            <input type="number" name="price" id="price" class="form-control" required>
                            <label for="">Số phần trăm giảm (%)</label>
                            <input type="number" name="sale" id="sale" max="100" class="form-control" required>
                            <label for="">Mô tả</label>
                            <textarea name="description" id="description" class="form-control" required></textarea>
                            <label for="">Trạng thái</label>
                            <input type="text" name="status" id="status" class="form-control" required>
                            <label for="">Số lượng đã bán</label>
                            <input type="number" name="sold" id="sold" class="form-control" required>
                            <label for="">Chi tiết</label>
                            <input type="text" name="detail" id="detail" class="form-control" required>
                            <label for=""><b>Hình ảnh chính</b></label>
                            <input type="file" name="image" id="image" class="form-control" required>
                            <label for=""><b>Hình con 1</b></label>
                            <input type="file" name="imgA" id="imgA" class="form-control">
                            <label for=""><b>Hình con 2</b></label>
                            <input type="file" name="imgB" id="imgB" class="form-control">
                            <label for=""><b>Hình con 3</b></label>
                            <input type="file" name="imgC" id="imgC" class="form-control">
                            <input type="submit" value="Thêm sản phẩm" name="submit">
                        </form>
                        <br><br><br><br>
                        <a href="index.php?page=product"><button>Quay lại</button></a>

                    </div>

                </div>
            </div>