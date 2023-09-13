<?php ?>
<h2>Thêm mới tin tức công nghệ</h2>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nhập tên </label>
        <input type="text" name="name" value="name"
               class="form-control" id="name"/>
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh Tin Tức</label>
        <input type="file" name="avatar" value="" class="form-control" id="avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>
    <div class="form-group">
        <label for="summary">Mô tả ngắn</label>
        <input type="number" name="price" value="summary"
               class="form-control" id="summary"/>
    </div>
    <div class="form-group">
        <label for="content">Chi Tiết Tin Tức</label>
        <textarea name="content" id="content"
                  class="form-control"></textarea>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=product&action=index" class="btn btn-default">Back</a>
    </div>
</form>
