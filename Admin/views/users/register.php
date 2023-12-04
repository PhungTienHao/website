<?php
//views/users/register.php
require_once "controllers/UserController.php";
require_once "models/User.php";
?>
<body class="body-user">
<div class="container">
    <h2 class="h-user">  đăng ký</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <div class="form-group">

            <input id="user" type="text" id="username" name="username" class="form-control" placeholder="tên đăng nhập"> </div>
        <div class="form-group">

            <input id="user" type="password" id="password" name="password" class="form-control" placeholder="mật khẩu"> </div>
        <div class="form-group">

            <input id="user" type="password" id="repas" name="repas" class="form-control" placeholder="nhập lại mật khẩu"> </div>
        <div class="form-group">

            <input id="user" type="text" id="name" name="name" class="form-control" placeholder="họ tên">
        </div>
        <div class="form-group">

            <input id="user" type="text" id="phone" name="phone" class="form-control" placeholder="số điện thoại">
        </div>
        <div class="form-group">

            <input id="user" type="email" id="email" name="email" class="form-control" placeholder="email">
        </div>
        <div class="form-group">

            <input id="user" type="text" id="address" name="address" class="form-control"placeholder="địa chỉ" >
        </div>

        <div class="form-group">
            <label for="avatar" >Chọn Ảnh Đại Diện của bạn</label>
            <input id="user" type="file" id="avatar" name="avatar" class="form-control">
        </div>
        <div class="form-group" >

            <input type="submit" name="submit" value="đăng ký"  class="btn btn-success">

        </div>
        <div class="link-user">Đã có tài khoản , đăng nhập  <a class="aaa" href="index.php?controller=user&action=login">tại đây</a></div>
    </form>
</div>
</body>
