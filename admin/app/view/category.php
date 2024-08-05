<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">DANH MỤC</h4>
                                <p class="category"></p>
                            </div>
                            <div class="content table-responsive table-full-width">
                                <a href="index.php?page=addcate"><button type="button" class="btn btn-primary">Thêm Danh Mục</button></a>
                                <table class="table table-hover table-striped">
                                    <thead>
                                        <th>STT</th>
                                    	<th>Tên</th>
                                        <th>Hình ảnh</th>
                                        <th>Chức năng</th>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $product = new CategoryModel();
                                            $data = $product->getCate();
                                            $i = 1;
                                            foreach($data as $value){
                                                extract($value);
                                                echo "<tr>";
                                                echo "<td>".$i."</td>";
                                                echo "<td>".$name."</td>";
                                                echo "<td><img src='../public/upload/pictures/index/".$image."' width='100px' height='50px'></td>";
                                                echo "<td><a href='index.php?page=ecate&id=".$id."'>Sửa</a> | <a href='index.php?page=delcate&id=".$id."'>Xóa</a></td>";
                                                echo "</tr>";
                                                $i++;
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