<?php include('views/header.php'); ?>
    <div class="container-fluid">
    <div class="container" style="margin-bottom: 50px;">
    <h3 align="center" style="color: red">---> Edit Category <---</h3>
    <hr>
        <form action="?admin=admin&mod=category&act=update&id=<?=$category['id'] ?>" method="POST" role="form" enctype="multipart/form-data" style="color: black">
            <a href="?admin=admin&mod=category&act=list" class="btn btn-primary"> Back </a>
            
            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" value="<?= $id ?>">
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="" name="name" value="<?= $category['name'] ?>">
            </div>
            <div class="form-group">
                <label for="">ParentID</label>
                <input type="text" class="form-control" id="" placeholder="" name="parent_id" value="<?= $category['parent_id'] ?>">
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="" name="slug" value="<?= $category['slug'] ?>">
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="" name="description" value="<?= $category['description'] ?>">
            </div>
            <div class="form-group">
                <label for="">CreatedAt</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?= $category['created_at'] ?>">
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
<?php include('views/footer.php'); ?>
