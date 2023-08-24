<?php
//views/users/login.php
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>

    <title></title>
<!--    <link rel="stylesheet" type="text/css" href="codecss.css">-->
</head>
<body class="body-user">
<div class="container">
    <h2 class="h-user">  đăng Nhập</h2>
    <form action="" method="post" >
        <div class="form-group">

            <input type="text" id="username" name="username" class="form-control" placeholder="tên đăng nhập "> </div>
        <div class="form-group">

            <input type="password" id="password" name="password" class="form-control" placeholder="mật khẩu"> </div>
        <div class="form-group">
            <input type="checkbox" class="checkbox-user">Ghi Nhớ Đăng Nhập <br>
            <input type="submit" name="submit" value="đăng nhập" class="btn btn-success">
            <div class="link-user">chưa có tài khoản , đăng ký  <a class="aaa" href="index.php?controller=user&action=register">tại đây</a>
            </div>
        </div>
    </form>
</div>
</body>
