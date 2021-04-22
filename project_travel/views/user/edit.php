<?php include('views/header.php'); ?>
    <div class="container-fluid">
    <div class="container" style="margin-bottom: 50px;">
    <h3 align="center" style="color: red">---> Edit User <---</h3>
    <hr>
        <form action="?admin=admin&mod=user&act=update&id=<?=$users['id']?>" method="POST" role="form" enctype="multipart/form-data" style="color: black">
            <a href="?admin=admin&mod=user&act=list" class="btn btn-primary"> Back </a>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $users['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">Email</label>
                <input type="text" class="form-control" id="" placeholder="" name="email" value="<?=$users['email'] ?>">
            </div>
            <div class="form-group">
                <label for="">Password</label>
                <input type="password" class="form-control" id="" placeholder="" name="password" value="<?= $users['password'] ?>">
            </div>
            <div class="form-group">
                <label for="">Avatar</label>
                <input type="file" class="form-control" id="" placeholder="" name="avatar" value="<?= $users['avatar'] ?>">
            </div>
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php include('views/footer.php'); ?>
