<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Cập nhật sản phẩm</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=editcate" method="POST" enctype="multipart/form-data">
                            <?php
                            // Kiểm tra và gán giá trị mặc định nếu không có dữ liệu
                            $dataCate = isset($data['cate_detail']) ? $data['cate_detail'] : null;
                            $name = isset($dataCate['name']) ? htmlspecialchars($dataCate['name'], ENT_QUOTES, 'UTF-8') : '';
                            $image = isset($dataCate['image']) ? htmlspecialchars($dataCate['image'], ENT_QUOTES, 'UTF-8') : '';
                            ?>
                            <label for="name">Tên danh mục</label>
                            <input type="text" name="name" id="name" class="form-control" value="<?= $name ?>">

                            <label for="image">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <?php if ($image): ?>
                                <img src="../public/upload/pictures/index/<?= $image ?>" alt=""
                                    style="width:100px;height:100px;"><br><br>
                            <?php endif; ?>
                            <input type="hidden" name="existing_image" value="<?= $image ?>">

                            <input type="submit" value="Cập nhật" name="sub">
                        </form>


                    </div>

                </div>
            </div>