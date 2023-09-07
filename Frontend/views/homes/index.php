<?php
require_once 'helpers/Helper.php';
require_once 'controllers/ProductController.php';
require_once 'models/Product.php';
require_once 'controllers/HomeController.php';
require_once 'models/spnb.php';

?>


<div class="maintop">
    <div>
        <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100 " src="assets/images/xbox.jpg" >
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/original.jpg">
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/duo-gamer-3.jpg">
                </div>
                <div class="carousel-item ">
                    <img class="d-block w-100" src="assets/images/R.jpg">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
        <div  class="row" >

        <img class="img-maintop col-md-6" src="assets/images/BANNER-GIAM-GIA.jpg">
        <img  class="img-maintop col-md-6" src="assets/images/cam-ket.jpg">


    </div>
</div>

<!--    PRODUCT-->
<div class="product-wrap">
    <div class="product container">

        <?php if (!empty($spnbs)): ?>
          <h1 class="post-list-title">
              <a href="danh-sach-san-pham.html" class="link-category-item">Sản phẩm Nổi Bật</a>
          </h1>
          <div class="link-secondary-wrap row">
            <?php foreach ($spnbs AS $spnbs):
              $slug = Helper::getSlug($spnbs['title']);
              $product_link = "san-pham/$slug/" . $spnbs['id'] . ".html";
              $product_cart_add = "them-vao-gio-hang/" . $spnbs['id'] . ".html";

              ?>
                <div class="service-link col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $product_link; ?>">
                        <img class="secondary-img img-responsive" title="<?php echo $spnbs['title'] ?>"
                             src="../backend/assets/uploads/<?php echo $spnbs['avatar'] ?>"
                             alt="<?php echo $spnbs['title'] ?>"/>
                        <span class="shop-title">
                        <?php echo $spnbs['title'] ?>
                    </span>
                    </a>
                    <span class="shop-price">
                            <?php echo number_format($spnbs['price']) ?>
                </span>

                    <span data-id="<?php echo $spnbs['id'] ?>" class="add-to-cart">
                        <a href="<?php echo $product_cart_add ?>" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>

    </div>
</div>
<!--    END PRODUCT-->

<!--NEWS-->
<div class="news-wrap">
    <div class="news container">
        <h1 class="post-list-title">
            <a href="/news.html" class="link-category-item">Siêu Khuyến Mại Nhân Dịp Khai Trương</a>
        </h1>
        <div class="row">
            <?php if (!empty($news)): ?>
<!--                <div class="link-secondary-wrap row">-->
                    <?php foreach ($news AS $news):
                        $slug = Helper::getSlug($news['title']);
                        $product_link = "news/$slug/" . $news['id'] . ".html";
                        $product_cart_add = "them-vao-gio-hang/" . $news['id'] . ".html";
                        ?>
                        <div class="service-link col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo $product_link; ?>">
                                <img class="secondary-img img-responsive" title="<?php echo $news['title'] ?>"
                                     src="../backend/assets/uploads/<?php echo $news['avatar'] ?>"
                                     alt="<?php echo $news['title'] ?>"/>
                                <span class="shop-title">
                        <?php echo $news['title'] ?>


                    </span>
                            </a>
                            <p>Giá cũ : <del><?php echo $news['summary'] ?></del> </p>
                            <span class="shop-price">
                            <p> Giá mới :<?php echo number_format($news['price']) ?></p>
                </span>

                            <span data-id="<?php echo $news['id'] ?>" class="add-to-cart">
                        <a href="<?php echo $product_cart_add ?>" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>
            </div>
<!--            <div class="col-md-4 col-sm-4 col-xs-12 category-two-item">-->
<!--                <a href="news_detail.html" class="two-item-link-heading">-->
<!--                    <span class="new-image-content">-->
<!--                        <img src="assets/images/news.jpg"-->
<!--                             title="BÍ MẬT SƠN TINH CAMP"-->
<!--                             alt="BÍ MẬT SƠN TINH CAMP"-->
<!--                             class="post-image-avatar img-responsive">-->
<!--                    </span>-->
<!--                </a>-->
<!--                <div class="news-content-wrap">-->
<!--                    <h3 class="category-heading timeline-post-title">-->
<!--                        <a href="#">-->
<!--                            BÍ MẬT SƠN TINH CAMP </a>-->
<!--                    </h3>-->
<!--                    <div class="news-description">-->
<!--                        Hàng trăm năm qua, không ít những câu chuyện truyền tai nhau sản sinh ra nơi hòn đảo Sơn-->
<!--                        Tinh xinh đẹp. Họ không cùng màu da, không cùng tôn giáo, họ đến từ nhiều nơi và họ là-->
<!--                        những-->
<!--                        con người sôi nổi, thích phiêu lưu. Có phải vì những lời kể ấy đã lôi cuốn họ tìm đến-->
<!--                        Sơn-->
<!--                        Tinh, hay chính vì sự hoang dã tuyệt đẹp của không gian, bởi sự trù phú của sản-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
        </div>
    </div>
</div>

<!--END NEWS-->