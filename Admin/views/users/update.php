<?php ?>
<h2>Cập nhật thông tin cá nhân</h2>
<form action="" method="post" enctype="multipart/form-data">

    <div class="form-group">
        <label for="name">Họ và Tên</label>
        <input type="text" name="last_name" id="last_name"
               value="<?php echo isset($_POST['name']) ? $_POST['name'] : $user['name'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="number" name="phone" id="phone"
               value="<?php echo isset($_POST['phone']) ? $_POST['phone'] : $user['phone'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email"
               value="<?php echo isset($_POST['email']) ? $_POST['email'] : $user['email'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" name="address" id="address"
               value="<?php echo isset($_POST['address']) ? $_POST['address'] : $user['address'] ?>"
               class="form-control"/>
    </div>
    <div class="form-group">
        <label for="avatar">Avatar</label>
        <input type="file" name="avatar" id="avatar" class="form-control"/>
        <?php if (!empty($user['avatar'])): ?>
            <img height="80" src="assets/uploads/<?php echo $user['avatar'] ?>"/>
        <?php endif; ?>
    </div>
<!--    <div class="form-group">-->
<!--        <label for="status">Trạng thái</label>-->
<!--        <select name="status" class="form-control" id="status">-->
<!--            --><?php
//            $selected_active = '';
//            $selected_disabled = '';
//            if (isset($_POST['status'])) {
//                switch ($_POST['status']) {
//                    case 0:
//                        $selected_disabled = 'selected';
//                        break;
//                    case 1:
//                        $selected_active = 'selected';
//                        break;
//                }
//            }
//            ?>
<!--            <option value="0" --><?php //echo $selected_disabled; ?><!-->Disabled</option>-->
<!--            <option value="1" --><?php //echo $selected_active ?><!-->Active</option>-->
<!--        </select>-->
<!--    </div>-->
    <div class="form-group">
        <input type="submit" name="submit" value="Save" class="btn btn-primary"/>
        <a href="index.php?controller=user&action=index" class="btn btn-default">Back</a>
    </div>
</form>
