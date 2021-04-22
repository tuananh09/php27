<?php include('views/header.php'); ?>
    <div class="container-fluid">

    <div class="container" style="margin-bottom: 50px;">
        <h3 class="text-center" style="color: red">--- USERS ---</h3>
        <?php 
                if (isset($_COOKIE['success_true'])) {
             ?>
                <div class="alert alert-success">
                    <strong>Thông báo!</strong> thêm mới thành công!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['success_false'])) {
             ?>
                <div class="alert alert-danger">
                    <strong>Thông báo!</strong> Thêm mới thất bại!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['destroy_true'])) {
             ?>
                <div class="alert alert-success">
                    <strong>Thông báo!</strong>Xóa thành công!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['destroy_false'])) {
             ?>
                <div class="alert alert-danger">
                    <strong>Thông báo!</strong>Xóa thất bại!
                </div>
        <?php } ?>
         <?php 
                if (isset($_COOKIE['update_true'])) {
             ?>
                <div class="alert alert-success">
                    <strong>Thông báo!</strong>Cập nhật thành công!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['update_false'])) {
             ?>
                <div class="alert alert-danger">
                    <strong>Thông báo!</strong>Cập nhật thất bại!
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['update_false_pass'])) {
             ?>
                <div class="alert alert-danger">
                    <strong>Thông báo!</strong>Cập nhật thất bại!
                <p>Password phải lớn hơn 6 kí tự!</p>
                </div>
        <?php } ?>
        <?php 
                if (isset($_COOKIE['add_false_pass'])) {
             ?>
                <div class="alert alert-danger">
                    <strong>Thông báo!</strong>Thêm mới thất bại!
                <p>Password phải lớn hơn 6 kí tự!</p>
                </div>
        <?php } ?>
        <table class="table" style="color: black">
            <thead>
                <th>ID</th>
                <th>Avatar</th>
                <th>Name</th>
                <th>Email</th>
                <!-- <th>Description</th> -->
                <!-- <th>Password</th> -->
                <th>Action</th>
            <?php 
                $i = 0;
                foreach ($users as $user) { $i++ ?>
            <tr>
                <td><?= $i ?></td>
                 <td>
                    <img style="border-radius: 50%" src="public/img/avatar/<?= $user['avatar'] ?>" width="70px" height="70px">
                </td>
                <td><?= $user['name'] ?></td>
                <td><?= $user['email'] ?></td>
               
                <!-- <td><?= $post['description'] ?></td> -->
                <!-- <td><?= $post['view_count'] ?></td> -->
                <td>
                    <a href="?admin=admin&mod=user&act=detail&id=<?= $user['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="?admin=admin&mod=user&act=edit&id=<?= $user['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="?admin=admin&mod=user&act=destroy&id=<?= $user['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </thead>
        </table>
    </div>
</div>
<?php include('views/footer.php'); ?>
