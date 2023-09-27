<?php ?>
<h2>Thêm mới tin tức công nghệ</h2>

<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="name">Nhập tên </label>
        <input type="text" name="name" value=""
               class="form-control" id="name"/>
    </div>
    <div class="form-group">
        <label for="avatar">Ảnh Tin Tức</label>
        <input type="file" name="avatar" value="" class="form-control" id="avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>
    <div class="form-group">
        <label for="summary">Mô tả ngắn</label>
        <input type="text" name="summary" value=""
               class="form-control" id="summary"/>
    </div>
    <div class="form-group">
        <label for="content">Chi Tiết Tin Tức</label>
        <textarea name="content" id="content"
                  class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="is_home">Hiển thị ra trang chủ ?</label>
        <select name="is_home" class="form-control" id="is_home">
            <?php
            $selected_showhome = '';
            $selected_not = '';
            if (isset($_POST['is_home'])) {
                switch ($_POST['is_home']) {
                    case 0:
                        $selected_showhome = 'selected';
                        break;
                    case 1:
                        $selected_not = 'selected';
                        break;
                }
            }
            ?>
            <option value="0" <?php echo $selected_showhome; ?>>không hiển thị ở home</option>
            <option value="1" <?php echo $selected_not ?>>hiển thị ở home</option>
        </select>
    </div>

    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=new&action=index" class="btn btn-default">Back</a>
    </div>
</form>

