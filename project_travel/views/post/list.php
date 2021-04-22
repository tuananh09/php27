<?php include('views/header.php'); ?>
    <div class="container-fluid">

    <div class="container" style="margin-bottom: 50px;">
        <h3 class="text-center" style="color: red">---> POSTS <---</h3>
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
        <table class="table" style="color: black">
            <thead>
                <th>ID</th>
                <th>Thumbnail</th>
                <th>Title</th>
                <th>Action</th>
            <?php 
                $i = 0;
                foreach ($posts as $post) { $i++ ?>
            <tr>
                <td><?= $i ?></td>
                <td>
                    <img style="border-radius: 50%" src="public/img/postImg/<?= $post['thumbnail'] ?>" width="70px" height="70px">
                </td>
                <td><?= $post['title'] ?></td>
                
                <!-- <td><?= $post['description'] ?></td> -->
                <td>
                    <a href="?admin=admin&mod=post&act=detail&id=<?= $post['id'] ?>" class="btn btn-primary">Detail</a>
                    <a href="?admin=admin&mod=post&act=edit&id=<?= $post['id']; ?>" class="btn btn-success">Edit</a>
                    <a href="?admin=admin&mod=post&act=destroy&id=<?= $post['id'] ?>" class="btn btn-danger">Delete</a>
                </td>
            </tr>
            <?php } ?>
            </thead>
        </table>
    </div>
</div>
<?php include('views/footer.php'); ?>
