<script>
     // Hàm hiển thị thông báo xác nhận xóa
     function confirmDelete(id) {
            if (confirm("Bạn có chắc chắn muốn xóa sản phẩm này?")) {
                // Nếu người dùng nhấn Yes, chuyển hướng đến URL xóa
                window.location.href = "index.php?page=delpro&id=" + id;
            } else {
                // Nếu người dùng nhấn No, không làm gì cả
                return false;
            }
        }
</script>
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Danh mục các sản phẩm</h4>
                        <div>
                            <a href="index.php?page=addpro"><button type="button" class="btn btn-primary">
                                    Thêm sản phẩm
                                </button></a>
                        </div>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-hover table-striped">
                            <thead>
                                <th>STT</th>
                                <th>Tên</th>
                                <th>Thể loại</th>
                                <th>Giá</th>
                                <th>Đã bán</th>
                                <th>Giảm</th>
                                <th>Mô tả</th>
                                <th>Hình ảnh</th>
                                <th>Chức năng</th>
                            </thead>
                            <tbody>
                                <?php
                                $controller = new AdProductController();


                                $i = 1;
                                foreach ($data as $value) {
                                    extract($value);
                                    echo "<tr>";
                                    echo "<td>" . $i . "</td>";
                                    echo "<td>" . $title . "</td>";
                                    $category_name = $controller->getNameCate($category_id);
                                    echo "<td>" . $category_name . "</td>";
                                    echo "<td>" . $price . "k</td>";
                                    echo "<td>" . $sold . "</td>";
                                    echo "<td>" . $sale . "%</td>";
                                    echo "<td>" . $description . "</td>";
                                    echo "<td><img src='../public/upload/pictures/products/product/" . $image . "' alt='' height = '80px' width = '100px'></td>";
                                    echo "<td><a href='index.php?page=editpro&id=" . $id . "'>Sửa</a> | <a href='#' onclick='confirmDelete(" . $id . ")'>Xóa</a></td>";
                                    echo "</tr>";
                                    $i++;
                                }
                                ?>
                                <?php

                                if (isset($_GET['page']) && $_GET['page'] === 'delpro' && isset($_GET['id'])) {
                                    $controller->delProId();
                                }
                                ?>
                            </tbody>
                        </table>

                    </div>
                    <ul class="pagination-list">
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-left"></i>
                            </a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">1</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">2</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">3</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">...</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">10</a>
                        </li>
                        <li class="pagination-item">
                            <a href="" class="pagination-link">
                                <i class="fa-solid fa-chevron-right"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>