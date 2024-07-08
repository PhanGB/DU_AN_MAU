// localStorage.clear();

function getSP(x) {
  localStorage.setItem("h-chinh", x.children[0].getAttribute("src"));
  localStorage.setItem("name", x.children[2].innerHTML);
  localStorage.setItem("giasp", x.children[3].value);
  localStorage.setItem("idsp", x.children[5].value);
}


function add(x) {
  var hinhsp = x.parentElement.children[0].children[0].getAttribute("src");
  var tensp = x.parentElement.children[0].children[2].innerHTML;
  var giasp = x.parentElement.children[0].children[3].value;
  var idsp = x.parentElement.children[0].children[5].value;

  var pt = { ten: tensp, gia: giasp, hinh: hinhsp, id: idsp, sl: 1 };
  // console.log(giasp);
  // console.log(hinhsp);

  var arr = JSON.parse(localStorage.getItem("giohang"));
  if (arr != null) {
    var manggh = arr;
  } else {
    var manggh = [];
  }

  var fl = 0;
  for (let i = 0; i < manggh.length; i++) {
    if (manggh[i]["id"] == idsp) {
      manggh[i]["sl"]++;
      fl = 1;
    }
  }
  if (fl == 0) {
    manggh.push(pt);
  }



// Xuất hiện thông báo đã thêm vào giỏ hàng với thời gian hiển thị là 2s
  document.getElementById("daThem").innerHTML =
  '<div class="da-them"><p>Đã thêm vào giỏ hàng</p></div>';
// setTimeout để ẩn thẻ div sau 2 giây
setTimeout(function() {
  var div = document.querySelector('.da-them'); // Lấy thẻ div với lớp 'da-them'
  if (div) { // Kiểm tra xem thẻ div có tồn tại không trước khi ẩn
      div.style.display = 'none';
  }
}, 2000);




  localStorage.setItem("giohang", JSON.stringify(manggh));
}
