<?php include('views/header.php'); ?>
    <div class="container-fluid">
    <div class="container" style="margin-bottom: 50px;">
    <h3 align="center" style="color: red">---> Add new user <---</h3>
    <hr>
        <form action="?admin=admin&mod=user&act=store" method="POST" role="form" enctype="multipart/form-data" style="color:black">
            <a href="?admin=admin&mod=user&act=list" class="btn btn-primary"> Back </a>

            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" required>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập họ tên" name="name" required>
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="Nhập email" name="email" required>
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="Nhập password" name="password">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar" required>
            </div>

            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>

<?php include('views/footer.php'); ?>

