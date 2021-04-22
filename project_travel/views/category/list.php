<?php include('views/header.php'); ?>
    <div class="container-fluid" style="color: red;">
        <h3 class="text-center">---> CATEGORIES <---</h3>
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
        <table class="table" style="color: black;">
            <thead>
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Action</th>
            <?php 
                $i = 0;
                foreach ($categories as $cate) { $i++ ?>
            <tr>
                <td><?= $i ?></td>
                <td><?= $cate['name'] ?></td>
                <td><?= $cate['description'] ?></td>
                <td>
                    <a href="?admin=admin&mod=category&act=detail&id=<?= $cate['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="?admin=admin&mod=category&act=edit&id=<?=  $cate['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="?admin=admin&mod=category&act=destroy&id=<?= $cate['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </thead>
        </table>
    </div>
    </div>
<?php include('views/footer.php'); ?>