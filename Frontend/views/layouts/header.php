
<a href="#" class="scrollup"></a>
<div class="header-top nopc">
    <div class="container">
        <div class="row">
<!--            <div class=" col-md-4 col-sm-4 col-xs-12">-->
            <div class=" info">
                <a class="info-contact" href="tel:0331231234">
                    <i class="fas fa-phone-alt"></i> 0331231234
                </a>
                <a class="info-contact" href="mailto:fuchaogamestore@gmail.com">
                    <i class="far fa-envelope"></i> fuchaogame@gmail.com
                </a>
            </div>
<!--            <div class="col-md-8 col-sm-8 col-xs-12">-->
            <div class="mini-logo">
                <ul class="header-navigation" data-show-menu-on-mobile="">
<!--                    <li>-->
<!--                        <a href="info.html" class="material-button submenu-toggle">Giới thiệu-->
<!--                    </li>-->
<!--                    <li>-->
<!--                        <a href="contact.html" class="material-button submenu-toggle">Liên hệ</a>-->
<!--                    </li>-->

                    <li>
                        <a href="#" class="link-icon-laguage material-button submenu-toggle">
                            <img src="assets/images/icon-flag-vn.png" class="icon-language">
                        </a>
                        <a href="#" class="link-icon-laguage material-button submenu-toggle">
                            <img src="assets/images/avatar.jpg" class="icon-language">
                        </a>
                    </li>
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
            <ul class="header-navigation" data-show-menu-on-mobile>
                <li>
                    <a href="index.php" class="home-link material-button submenu-toggle">
                        <img class="logo" src="assets/images/logo.png">
                    </a>
                </li>
                <div class="seach">
                    <input type="text" name="query" placeholder="Tìm kiếm...">
                    <button type="submit"><i class="fas fa-search"></i></button>
                </div>
                <li>
                    <a href="index.php" class="material-button submenu-toggle">Trang chủ</a>
                </li>

                <li>
                    <a href="news.html" class="material-button submenu-toggle">Tin tức <span
                                class="fa fa-angle-down"></span></a>
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
                    <a href="login.html" class="material-button submenu-toggle">Đăng nhập</a>
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
