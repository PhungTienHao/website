<h2>Cập nhật tin tức</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nhập tên </label>
        <input type="text" name="name"
               value="<?php echo isset($_POST['name']) ? $_POST['name'] : $news['name'] ?>"
               class="form-control" id="name"/>
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh đại diện</label>
        <input type="file" name="avatar" value="" class="form-control" id="avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
        <?php if (!empty($news['avatar'])): ?>
            <img height="80" src="assets/uploads/<?php echo $news['avatar'] ?>"/>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <label for="summary">Mô tả ngắn </label>
        <textarea name="summary" id="summary"
                  class="form-control"><?php echo isset($_POST['summary']) ? $_POST['summary'] : $news['summary'] ?></textarea>
    </div>
    <div class="form-group">
        <label for="content">Mô tả chi tiết sản phẩm</label>
        <textarea name="content" id="content"
                  class="form-control"><?php echo isset($_POST['content']) ? $_POST['content'] : $news['content'] ?></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=new&action=index" class="btn btn-default">Back</a>
    </div>
</form>
