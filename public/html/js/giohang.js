function load() {
  var mang = JSON.parse(localStorage.getItem("giohang"));
  var ch = "";
  var tong = 0;
  for (let i = 0; i < mang.length; i++) {
    var tt = mang[i]["sl"] * mang[i]["gia"];
    ch += `<tr>
            <td><input type="checkbox" class="checkbox" onchange="updateTotal(this)"></td>
            <td><img width="100px" src="${mang[i]["hinh"]}" alt="" class="picSp"></td>
            <td>${mang[i]["ten"]}</td>
            <td><input type="number" value="${mang[i]["sl"]}" min="1" max="10" onchange="suasl(this)"></td>
            <td>${mang[i]["gia"]} tỷ</td>
            <td>${tt} tỷ</td>
            <input type="hidden" value="${mang[i]["id"]}">
            <td><input type="submit" onclick="xoa(this)" value="xóa"></td>
        </tr>`;
    tong += tt;
  }
  document.getElementById("ds").innerHTML = ch;
  document.getElementById("tongtien").innerHTML ="0 tỷ";
  document.getElementById("chontatca").addEventListener("change", selectAll);
}

function updateTotal() {
  var checkboxes = document.getElementsByClassName("checkbox");
  var tong = 0;
  for (let i = 0; i < checkboxes.length; i++) {
    if (checkboxes[i].checked) {
      var row = checkboxes[i].parentNode.parentNode;
      var tt = parseFloat(row.cells[5].innerText); // Lấy giá trị từ cột "Thành tiền"
      tong += tt;
    }
  }
  document.getElementById("tongtien").innerHTML = tong + " tỷ";
}

// chọn tất cả
function selectAll() {
  var checkboxes = document.getElementsByClassName("checkbox");
  var selectAllCheckbox = document.getElementById("chontatca");
  for (let i = 0; i < checkboxes.length; i++) {
    checkboxes[i].checked = selectAllCheckbox.checked;
  }
}



function xoagh() {
  localStorage.removeItem("giohang");
}

function xoa(x) {
  var mang = JSON.parse(localStorage.getItem("giohang"));

  var id = x.parentElement.parentElement.children[6].value;
  var vitri = -1;
  for (let i = 0; i < mang.length; i++) {
    if (mang[i]["id"] == id) {
      vitri = i;
      break;
    }
  }
  mang.splice(vitri, 1);

  localStorage.setItem("giohang", JSON.stringify(mang));
  load();
}

function suasl(y) {
  var bsl = y.value; // bsl = b số lượng
  var bid = y.parentElement.parentElement.children[6].value; // bid = b id
  var mang = JSON.parse(localStorage.getItem("giohang"));

  for (let i = 0; i < mang.length; i++) {
    if (mang[i]['id'] == bid){
        mang[i]['sl'] = bsl
    }
  }
  localStorage.setItem("giohang",JSON.stringify(mang));
  load()
}
