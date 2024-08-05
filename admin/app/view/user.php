<div class="content table-responsive table-full-width">
    <a href="index.php?page=addcate"><button type="button" class="btn btn-primary">Thêm Danh Mục</button></a>
    <table class="table table-hover table-striped">
        <thead>
            <th>STT</th>
            <th>Username</th>
            <th>Email</th>
            <th>Password</th>
            <th>Role</th>
            <th>Chức năng</th>
        </thead>
        <tbody>
            <?php
            $controller = new AdUserController();
            // $data = $controller->getAllUser();
            $i = 1;
            foreach ($data['data'] as $value) {
                extract($value);
                echo "<tr>";
                echo "<td>" . $i . "</td>";
                echo "<td>" . $username . "</td>";
                echo "<td>" . $email . "</td>";
                echo "<td>" . $password . "</td>";
                echo "<td>" . $role . "</td>";
                echo "<td><a href='index.php?page=edituser&id=" . $id . "'>Sửa</a> | <a href='index.php?page=deluser&id=" . $id . "'>Xóa</a></td>";
                echo "</tr>";
                $i++;
            }
            ?>
        </tbody>
    </table>
</div>