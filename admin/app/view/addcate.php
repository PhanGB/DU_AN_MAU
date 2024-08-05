<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">Thêm Danh Mục</h4>
                        <p class="category"></p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <form action="index.php?page=addnewcate" method="POST" enctype="multipart/form-data">
                            <label for="">Tên danh mục</label>
                            <input type="text" name="name" id="name" class="form-control">
                            <label for="">Hình ảnh</label>
                            <input type="file" name="image" id="image" class="form-control">
                            <input type="submit" value="Thêm danh mục" onclick="" name="sub">
                        </form>

                    </div>

                </div>
            </div>