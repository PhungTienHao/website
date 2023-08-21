<?php
//views/users/login.php
?>
<body></body>
<div class="container">
    <h2> from đăng Nhập</h2>
    <form action="" method="post" >
        <div class="form-group">
            <label for="username">username</label>
            <input type="text" id="username" name="username" class="form-control"> </div>
        <div class="form-group">
            <label for="password">password</label>
            <input type="password" id="password" name="password" class="form-control"> </div>
        <div class="form-group">
            <input type="checkbox" >Ghi Nhớ Đăng Nhập <br>
            <input type="submit" name="submit" value="đăng nhập" class="btn btn-success">
            chưa có tài khoản , đăng ký tại <a href="index.php?controller=user&action=register">đây</a>
        </div>
    </form>
</div>
</body>
<style>

    body{
        background:url("assets/images/bk.jpg");

    }
    .container{
        width: 30%;
        margin: 100px 0 0 800px;
        background: rgba(0 , 0 , 0 , 0.8);
        box-shadow: 0 0 20px rgba(255 , 255 , 255 , 0.8);
    }
    .h-user{
        color:#fff;
        text-transform: uppercase;
        text-align:center ;
    }
    .form-group{
        border-bottom: 2px solid #fff;
        color:#fff;
        margin:5px;
    }
    .form-control{
        background:transparent;
        border: 0 ;
        color:#fff
    }
    input.btn.btn-success{
        width:100%;
        margin-top:20px;
    }
    a{
        font-size:30px;
    }

</style>
