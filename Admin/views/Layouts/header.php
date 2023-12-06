<?php
$year = '';
$username = '';
$avatar = '';
if (isset($_SESSION['user'])) {
    $username = $_SESSION['user']['username'];
    $avatar = $_SESSION['user']['avatar'];
    $year = date('Y', strtotime($_SESSION['user']['created_at']));
}
?>
<header class="main-header">
<!--    <a href="index2.html" class="logo">-->
<!--        <span class="logo-mini"><b>A</b>LT</span>-->
<!--        <span class="logo-lg"><b>Admin</b>LTE</span>-->
<!--    </a>-->
<!---->

    <nav class="navbar navbar-static-top">
        <div >
            <a herf="index.php" >
<!--                <img class="logoweb" src="assets/images/logo.png" >-->
            </a>
        </div>
        <div>
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <i class="fa fa-bars"></i>
        </a></div>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="assets/uploads/<?php echo $avatar; ?>" class="user-image" alt="User Image">
                        <span class="hidden-xs"><?php echo $username; ?></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <img src="assets/uploads/<?php echo $avatar; ?>" class="img-circle" alt="User Image">

                            <p>
                                <?php echo $username; ?>

                                <small>Thành viên từ năm <?php echo $year; ?></small>
                            </p>
                        </li>

                        <li class="user-footer">
<!--                            <div class="pull-left">-->
<!--                                <a href="#" class="btn btn-default btn-flat">Profile</a>-->
<!--                            </div>-->
                            <div class="pull-right">
                                <a href="index.php?controller=user&action=logout" class="btn btn-default btn-flat">Sign
                                    out</a>
                            </div>
                            <div class="pull-left">
                                <a href="http://localhost/website/users/index.php" class="btn btn-default btn-flat">Chuyển
                                Sang Trang Chủ</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
<aside class="main-sidebar">
    <section class="sidebar">
        <div class="user-panel">

            <div class="pull-left image">
                <img src="assets/uploads/<?php echo $avatar; ?>" class="img-circle">
            </div>
            <div class="pull-left info">
                <p><?php echo $username; ?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">LAOYOUT ADMIN</li>

            <li>
                <a href="index.php?controller=category&action=index" class="b">
                    <i class="fa fa-th"></i> <span >Quản lý danh mục</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=product&action=index" class="b">
                    <i class="fa fa-code"></i> <span>Quản lý sản phẩm</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=user&action=index" class="b">
                    <i class="fa fa-user"></i> <span>Quản lý Tài Khoản </span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=product&action=spnb" class="b">
                    <i class="fa fa-code"></i> <span>Quản lý Sản Phẩm Nổi Bật</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=assess&action=index" class="b">
                    <i class="fa fa-code"></i> <span>Xem Đánh Giá Khách Hàng</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li> <li>
                <a href="index.php?controller=order&action=index" class="b">
                    <i class="fa fa-code"></i> <span>Kiểm Tra Đơn Hàng</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
            <li>
                <a href="index.php?controller=new&action=index" class="b">
                    <i class="fa fa-code"></i> <span>Quản lý Tin Tức</span>
                    <span class="pull-right-container">
            </span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

<!-- Breadcrumd Wrapper. Contains breadcrumb -->
<div class="breadcrumb-wrap content-wrap content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Dashboard
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Dashboard</li>
        </ol>
    </section>
</div>

<!-- Messaeg Wrapper. Contains messaege error and success -->
<div class="message-wrap content-wrap content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <?php if (isset($_SESSION['error'])): ?>
            <div class="alert alert-danger">
                <?php
                echo $_SESSION['error'];
                unset($_SESSION['error']);
                ?>
            </div>
        <?php endif; ?>

        <?php if (!empty($this->error)): ?>
            <div class="alert alert-danger">
                <?php
                echo $this->error;
                ?>
            </div>
        <?php endif; ?>

        <?php if (isset($_SESSION['success'])): ?>
            <div class="alert alert-success">
                <?php
                echo $_SESSION['success'];
                unset($_SESSION['success']);
                ?>
            </div>
        <?php endif; ?>
        <!--        <div class="alert alert-danger">Lỗi validate</div>-->
        <!--        <p class="alert alert-success">Thành công</p>-->
    </section>
</div

<!--<style>-->
<!--    a.b {-->
<!--        font-size: 23px;-->
<!--    }-->
<!--    section.content-header {-->
<!--        height: 70px;-->
<!--    }-->
<!--    .logoweb {-->
<!--        width: 126px;-->
<!--    }-->
<!---->
<!--    nav.navbar.navbar-static-top {-->
<!--        display: flex;-->
<!--        flex-wrap: wrap;-->
<!--        width: 100%;-->
<!--        height: 114px;-->
<!--    }-->
<!--    .navbar-custom-menu {-->
<!--        margin-left: 934px;-->
<!--        margin-top: 30px;-->
<!--        font-size: 24px;-->
<!--    }-->
<!--</style>-->

<style>


    section.content-header {
        height: 70px;
    }
    nav.navbar.navbar-static-top {
        display: flex;
        flex-wrap: wrap;
        width: 100%;
        height: 114px;
    }
    .navbar-custom-menu {
        margin-left: 934px;
        margin-top: 30px;
        font-size: 24px;
    }
</style>

