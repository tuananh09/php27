<?php include('views/header.php'); ?>
    <div class="container-fluid">

    <div class="container" style="margin-bottom: 50px;">
    <h3 align="center" style="color: red">---> Add new post <---</h3>
    <hr>
        <form action="?admin=admin&mod=post&act=store" method="POST" role="form" enctype="multipart/form-data" style="color: black">
            <a href="?admin=admin&mod=post&act=list" class="btn btn-primary"> Back </a>

            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" required>
            </div>
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" class="form-control" id="" placeholder="Nhập title" name="title" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="Nhập description" name="description" required>
            </div>
            <div class="form-group">
                <label for="">Thumbnail</label>
                <input type="file" class="form-control" id="" placeholder="" name="thumbnail" required>
            </div>
            <div class="form-group">
                <label for="">Content</label>
                <textarea type="text" class="form-control" id="" placeholder="Nhập content" name="content" style="height: 100px;"></textarea>
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="Nhâp slug" name="slug" required>
            </div>
            <div class="form-group">
                <label for="">View Count</label>
                <input type="text" class="form-control" id="" placeholder="Nhập view count" name="view_count" required>
            </div>
            <div class="form-group">
                <label for="">User</label>
                <select class="form-control" name="user_id" id="user">
                <?php foreach ($users as $cate) { ?>
                    <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Category</label>
                <select class="form-control" name="category_id" id="category">
                <?php foreach ($categories as $cate) { ?>
                    <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                <?php } ?>
                </select>
            </div>
            
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</div>
<?php include('views/footer.php'); ?>
