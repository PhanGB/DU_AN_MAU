<section>
    <link rel="stylesheet" href="./public/css/giohang.css  ?v= < php echo time(); >?">
    <div class="logo">
        <div class="white">

        </div>
    </div>
    <div class="p-nut">
        <a href="sanpham.html" class="nut" style="margin-left: 30px">Tiếp tục mua sắm</a>
        <a href="" onclick="xoagh()" class="nut" style="margin-left: 1070px">Xóa giỏ hàng</a>
    </div>
    <div class="table">
        <table border="0">
            <tr>
                <th>
                    <input type="checkbox" class="checkboxFull" id="chontatca" />
                </th>
                <th class="title">Hình sản phẩm</th>
                <th>Tên</th>
                <th>Số lượng</th>
                <th>Giá bán</th>
                <th>Thành tiền</th>
                <th>chức năng</th>
            </tr>
            <tbody id="ds"></tbody>
            <tr>
                <td colspan="5" class="tong-tien">Tổng tiền thanh toán:</td>
                <td colspan="2" id="tongtien">???</td>
            </tr>
        </table>
        <hr />
    </div>
    <div style="margin-top: 60px">
        <hr />
    </div>
    <form class="thanhtoan">
        <input type="radio" class="ttoan" name="ttoan" id="ttoan" />
        <label for="ttoan">Thanh toán khi nhận hàng</label><br /><br />
        <input type="radio" name="ttoan" class="ttoan" id="ttoan1" />
        <label for="ttoan1">Thanh toán chuyển khoản</label><br /><br />
        <button class="buy">ĐẶT HÀNG</button>
    </form>
</section>