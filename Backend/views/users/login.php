<?php
//views/users/login.php
?>

<!--<div class="header-login">-->
<!--    <div class="container-login">-->
<!--        <div class="row">-->
<!--            <div class="logo">-->
<!--                <a><img src="assets/images/logo2 (3).png"></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!--</div>-->
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

<style>

</style>