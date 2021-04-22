<?php include('views/header.php') ?>
    <div class="container-fluid">

    <div class="container" style="margin-bottom: 50px">
    <h3 align="center" style="color: red">---> Add new category <---</h3>
    <hr>
        <form action="?admin=admin&mod=category&act=store" method="POST" role="form" enctype="multipart/form-data" style="color: black">
            <a href="?admin=admin&mod=category&act=list" class="btn btn-primary"> Back </a>

            <div class="form-group">
                <input type="hidden" class="form-control" id="" placeholder="" name="id" required>
            </div>
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" class="form-control" id="" placeholder="Nhập tên" name="name" required>
            </div>
            <div class="form-group">
                <label for="">Parent ID</label>
                <select class="form-control" name="parent_id" id="category">
                <?php foreach ($parents as $cate) { ?>
                    <option value="<?= $cate['id'] ?>"><?= $cate['name'] ?></option>
                <?php } ?>
                </select>
            </div>
            <div class="form-group">
                <label for="">Slug</label>
                <input type="text" class="form-control" id="" placeholder="Nhập Slug" name="slug" required>
            </div>
            <div class="form-group">
                <label for="">Description</label>
                <input type="text" class="form-control" id="" placeholder="Nhập description" name="description" required>
            </div>
            <button type="submit" class="btn btn-info">Create</button>
        </form>
    </div>
</div>
<?php include('views/footer.php') ?>
