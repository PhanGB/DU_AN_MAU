<div class="content table-responsive table-full-width">
    <!-- <a href="index.php?page=addcate"><button type="button" class="btn btn-primary">Thêm Danh Mục</button></a> -->
    <table class="table table-hover table-striped">
        <thead>
            <th>STT</th>
            <th>Tên đơn hàng</th>
            <th>SĐT</th>
            <th>Địa chỉ</th>
            <th>Phương thức thanh toán</th>
            <th>Ngày mua</th>
            <th>Trạng thái</th>
            <th>Chức năng</th>
        </thead>
        <tbody>
            <?php
                $i = 1;
                foreach ($data['cart'] as $value) {
                    extract($value);
                    echo "<tr>";
                    if($i == 1){
                    echo "<td>" . $i . "</td>";
                        echo "<td>" . $name . "</td>";
                        echo "<td>" . $phone . "</td>";
                        echo "<td>" . $address . "</td>";
                        echo "<td>" . $payment_method . "</td>";
                        echo "<td>" . $buy_date . "</td>";
                        echo "<td>" . $status . "</td>";
                        echo "<td><a href='index.php?page=ecate&id=" . $id . "'>Xác nhận đơn hàng</a> | <a href='index.php?page=delcate&id=" . $id . "'>Xóa đơn hàng</a></td>";
                        echo "</tr>";
                        $i++;
                    }else{
                        // echo "<td> Giỏ hàng trống</td>";
                        // echo "</tr>";
                        echo $i;
                    }
                }

            ?>
        </tbody>
    </table>
</div>