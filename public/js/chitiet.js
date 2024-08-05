function getout() {
  var h_chinh = localStorage.getItem("h-chinh");
  var name = localStorage.getItem("name");
  var giasp = localStorage.getItem("giasp");
  var idsp = localStorage.getItem("idsp");

  document.getElementById("h-chinh").setAttribute("src", h_chinh);
  document.getElementById("giasp").innerHTML = giasp;
  document.getElementById("gia_hid").value = giasp;
  document.getElementById("name").innerHTML = name;
  document.getElementById("idsp").value = idsp;

  getSmallPics();
}
getout(); 

function getSmallPics() {
  var hinh = localStorage.getItem("h-chinh");
  var dau = hinh.slice(0, hinh.length - 6);
  var cuoi = hinh.slice(hinh.length - 5);
  for (let i = 0; i < 4; i++) {
    var dd = dau + i + cuoi;
    document.getElementById("smallPics").children[i].setAttribute("src", dd);
  }
}
// đổi hình nhỏ lên hình lớn
document.addEventListener("DOMContentLoaded", function() {
  function change(src) {
    document.getElementById("h-chinh").setAttribute("src", src);
  }

  var hinhBe = document.getElementById("smallPics").children;
  for (let i = 0; i < hinhBe.length; i++) {
    hinhBe[i].onclick = function() {
      var src = this.getAttribute("src");
      change(src);
    };
  }
});




function addGh(){
    var hinhsp = document.getElementById("h-chinh").getAttribute("src");
    var tensp = document.getElementById("name").innerHTML;
    var giasp = document.getElementById("giasp").innerHTML;
    var idsp = document.getElementById("idsp").value;
    var soluong = document.getElementById("soluong").value;
  
    var pt = { ten: tensp, gia: giasp, hinh: hinhsp, id: idsp, sl: soluong };
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


    //xuất hiện thông báo thêm thành công
    document.getElementById("themTC").innerHTML = '<p class="themTC">Thêm vào giỏ hàng thành công!</p>';

    setTimeout(function() {
      var div = document.querySelector('.themTC'); // Lấy thẻ div với lớp 'da-them'
      if (div) { // Kiểm tra xem thẻ div có tồn tại không trước khi ẩn
          div.style.display = 'none';
      }
    }, 4000);

  localStorage.setItem("giohang", JSON.stringify(manggh));

}
// function hinhcon() {
//     var hinh = localStorage.getItem("h-chinh");
//     var dau = hinh.slice(0, hinh.lastIndexOf("."));
//     var cuoi = hinh.slice(hinh.lastIndexOf("."));
//     for (let i = 0; i < 4; i++) {
//       var dd = dau + "-" + i + cuoi; // Thay đổi định dạng tên tệp tin
//       document.querySelector(".hinh-con:nth-child(" + (i+2) + ")").setAttribute("src", dd);
//     }
// }


// function hinhcon() {
//     var hinh = localStorage.getItem("h-chinh");
//     var dau = hinh.slice(0, hinh.length - 4);
//     var cuoi = hinh.slice(hinh.length - 4);
//     for (let i = 0; i < 4; i++) {
//       var dd = dau + "." + [i] + cuoi;
//       document.getElementById("hinhbe").children[i].setAttribute("src", dd);
//     }
//   }



//   function doi(x) {
//     document.getElementById("hinhchinh").setAttribute("src", x);
//   }
//   var hinhBe = document.getElementById("hinhbe").children;
//   for (let i = 0; i < hinhBe.length; i++) {
//     hinhBe[i].onclick = function () {
//       var src = this.getAttribute("src");
//       doi(src);
//     };
//   }