
<script></script>
<style>

</style>
<h2>Thêm mới danh mục</h2>
<form method="post" action="" enctype="multipart/form-data">
    <div class="form-group">
        <label style="color: black">Tên danh mục</label>
        <input type="text" name="name" value="<?php echo isset($_POST['name']) ? $_POST['name'] : ''; ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label style="color: black">Ảnh đại diện</label>
        <input type="file" name="avatar" class="form-control" id="category-avatar"/>
        <img src="#" id="img-preview" style="display: none" width="100" height="100"/>
    </div>
    <div class="form-group">
        <label style="color: black">Mô tả về danh mục</label>
        <textarea class="form-control"
                  name="description"><?php echo isset($_POST['description']) ? $_POST['description'] : ''; ?></textarea>
    </div>
<!--    <div class="form-group">-->
<!--      --><?php
//      $selected_active = '';
//      $selected_disabled = '';
//      if (isset($_POST['status'])) {
//        switch ($_POST['status']) {
//          case 0:
//            $selected_disabled = 'selected';
//            break;
//          case 1:
//            $selected_active = 'selected';
//            break;
//        }
//      }
//      ?>
<!--        <label>Trạng thái</label>-->
<!--        <select name="status" class="form-control">-->
<!--            <option value="0" --><?php //echo $selected_disabled ?><!-- >Active</option>-->
<!--            <option value="1" --><?php //echo $selected_active ?><!-- >Disabled</option>-->
<!--        </select>-->
<!--    </div>-->

    <input type="submit" class="btn btn-primary" name="submit" value="Save"/>
    <input type="reset" class="btn btn-secondary" name="submit" value="Reset"/>
</form>
<style>

</style>