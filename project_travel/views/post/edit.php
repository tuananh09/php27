<?php include('views/header.php'); ?>
    <div class="container-fluid">

    <div class="container" style="margin-bottom: 50px;">
    <h3 align="center" style="color: red">---> Edit Post <---</h3>
    <hr>
        <form action="?admin=admin&mod=post&act=update&id=<?=$_GET['id'] ?>" method="POST" role="form" enctype="multipart/form-data" style="color: black">
            <a href="?admin=admin&mod=post&act=list" class="btn btn-primary"> Back </a>
            
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $posts['id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="" name="title" value="<?= $posts['title'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $posts['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" value="<?= $posts['thumbnail'] ?>">
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea type="text" class="form-control" id="" placeholder="" name="content" style="height: 100px;"><?= $posts['content'] ?></textarea>
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $posts['slug'] ?>">
            </div>
            
            <div class="form-group">
                <label for="">User ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="user_id" value="<?= $posts['user_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Category ID</label>
                <input type="text" class="form-control" id="" placeholder="" name="category_id" value="<?= $posts['category_id'] ?>">
            </div>
            <div class="form-group">
            
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php include('views/footer.php'); ?>
