

<div class="header-top nopc" style="background-image: url(assets/images/111.jpg);">
    <div class="container" >
        <div class="row" >
<!--            <div class=" col-md-4 col-sm-4 col-xs-12">-->

            <div class="mini-logo" >
                <ul class="header-navigation" data-show-menu-on-mobile="" >

<!--                    <li>-->
<!--                            <img src="assets/images/icon-flag-vn.png" class="icon-language">-->
<!---->
<!--                       <a href="index.php?controller=user&action=login" class="link-icon-laguage material-button submenu-toggle">-->
<!--                           <img src="assets/images/avatar.jpg" class="icon-language">-->
<!--                       </a>-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <div class="navbar-custom-menu">-->
<!--                            <ul class="nav navbar-nav" >-->
<!--                                <li class="dropdown user user-menu" >-->
<!--                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">-->
<!--                                        <img src="assets/images/avatar.jpg" class="user-image" style="width: 23px; " >-->
<!--                                        <span class="hidden-xs"></span>-->
<!--                                    </a>-->
<!--                                    <ul class="dropdown-menu">-->
<!--                                        <li class="user-header">-->
<!--                                            <img src="assets/images/avatar.jpg" class="img-circle" alt="User Image">-->
<!--                                        </li>-->
<!---->
<!--                                        <li class="user-footer">-->
<!--                                            <div class="pull-right">-->
<!--                                               <a href="index.php?controller=user&action=login" class="btn btn-default btn-flat">Đăng Nhập</a>-->
<!--                                           </div>-->
<!--                                      </li>-->
<!--                                    </ul>-->
<!--                                </li>-->
<!--                            </ul>-->
<!--                        </div>-->
<!--                    </li>-->
                </ul>
            </div>
        </div>
    </div>
</div>
<span class="ajax-message"></span>

<header class="header">

    <div class="header-wrapper container">
        <div class="toggle-sidebar material-button">
            <i class="material-icons">&#xE5D2;</i>
        </div>
        <div class="logo-box">
            <h1>

            </h1>
        </div>

        <div class="header-menu">
            <div class="abc">
                <a href="index.php" class="home-link">
                    <img class="logo" src="assets/images/logo.png">
                </a>
                <div>
                    <div class="h">
                    <form action="index.php?controller=product&action=search"  method="get">
                            <div class="row height d-flex justify-content-center align-items-center">

                                    <div class="form-search">

                                        <i class="fa fa-search"></i>

                                        <input type="text" name="search" class="form-control form-search-input" placeholder="Search anything..." value="<?php echo (isset($_GET['search'])) ? $_GET['search']:'' ;  ?>">

                                        <span class="left-pan"><i class="fa fa-microphone"></i></span>

                                    </div>

                            </div>
                    </form>
                    </div>



                    <ul class="header-navigation" data-show-menu-on-mobile>

                        <li>
                            <a href="index.php" class="material-button submenu-toggle">Trang chủ</a>
                        </li>

                        <li>
<!--                            -->
                            <div class="header-submenu">
                                <ul>
                                    <li><a href="index.html">Email</a></li>
                                    <li><a href="index2.html">Hosting/a></li>
                                    <li><a href="index3.html">Tên miền</a></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <a href="danh-sach-san-pham.html" class="material-button submenu-toggle">Sản phẩm</a>
                        </li>
                        <li>
                            <a href="contact.html" class="material-button submenu-toggle">Liên Hệ</a>
                        </li>
                        <li>
                            <a href="gio-hang-cua-ban.html" class="cart-link">Giỏ hàng
                                <i class="fa fa-cart-plus"></i>
                                <?php
                                $cart_total = 0;
                                if (isset($_SESSION['cart'])) {
                                    foreach ($_SESSION['cart'] AS $cart) {
                                        $cart_total += $cart['quantity'];
                                    }
                                }
                                ?>
                                <span class="cart-amount">
                                <?php echo $cart_total; ?>
                            </span>
                            </a>
                        </li>
                    </ul>
            </div>

                <div class=" info">
                    <a class="info-contact" href="tel:0338680362">
                        <i class="fas fa-phone-alt"></i> 0338680362
                    </a>
                    <a class="info-contact" href="mailto:haotienphung@gmail.com">
                        <i class="far fa-envelope"></i> fuchaogame@gmail.com
                    </a>
                </div>
        <div class="header-right with-seperator">
            <!-- header right menu start -->
            <ul class="header-navigation">
                <li>
                    <a href="/gio-hang-cua-ban.html" class="">
                        <i class="fa fa-cart-plus"></i>
                        <span class="cart-amount-mobile">
                                <?php echo $cart_total; ?>
                        </span>
                    </a>
                </li>
            </ul>
            <!-- header right menu end -->

        </div>
    </div>
</header>
<div class="sidebar">
    <div class="sidebar-wrapper">

        <div class="sidebar-logo">
            <a href="#"></a>
            <div class="sidebar-toggle-button">
                <i class="material-icons">&#xE317;</i>
            </div>
        </div>
        <div id="mobileMenu">
            <div class="sidebar-seperate"></div>
        </div>
        <ul class="sidebar-menu">
            <li>
                <a href="index.php" class="material-button submenu-toggle">Trang chủ</a>
            </li>
            <li>
                <a href="#" class="material-button submenu-toggle">Sản phẩm</a>
            </li>
            <li>
                <a href="#" class="material-button submenu-toggle">Tin tức</a>
            </li>
            <li>
                <a href="#" class="material-button submenu-toggle">Đăng nhập</a>
            </li>
        </ul>
        <!-- sidebar menu end -->
        <div class="sidebar-seperate"></div>
        <!-- sidebar menu end -->
    </div>
</div>

