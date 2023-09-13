<?php
require_once 'helpers/Helper.php';
require_once 'controllers/ProductController.php';
require_once 'models/Product.php';
require_once 'controllers/HomeController.php';
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

<div class="product-wrap">
    <div class="product container">

        <?php if (!empty($products)): ?>
          <h1 class="post-list-title">
              <a href="danh-sach-san-pham.html" class="link-category-item">Sản phẩm Nổi Bật</a>
          </h1>
          <div class="link-secondary-wrap row">
            <?php foreach ($products AS $products):
              $slug = Helper::getSlug($products['title']);
              $product_link = "san-pham/$slug/" . $products['id'] . ".html";
              $product_cart_add = "them-vao-gio-hang/" . $products['id'] . ".html";

              ?>
                <div class="service-link col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo $product_link; ?>">
                        <img class="secondary-img img-responsive" title="<?php echo $products['title'] ?>"
                             src="../backend/assets/uploads/<?php echo $products['avatar'] ?>"
                             alt="<?php echo $products['title'] ?>"/>
                        <span class="shop-title">
                        <?php echo $products['title'] ?>
                    </span>
                    </a>
                    <span class="shop-price">
                            <?php echo number_format($products['price']) ?>
                </span>

                    <span data-id="<?php echo $products['id'] ?>" class="add-to-cart">
                        <a href="<?php echo $product_cart_add ?>" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                </div>
            <?php endforeach; ?>
          </div>
      <?php endif; ?>

    </div>
</div>

<div class="news-wrap">
    <div class="news container">
        <h1 class="post-list-title">
            Siêu Khuyến Mại Nhân Dịp Khai Trương <br>
            Tặng kèm khi mua trên website những sản phẩm sau :
        </h1> </div>

<!--        <div class="row">-->
<!--            --><?php //if (!empty($news)): ?>
<!--               <div class="link-secondary-wrap row">-->
<!--                    --><?php //foreach ($news AS $news):
//                        $slug = Helper::getSlug($news['title']);
//                        $product_link = "news/$slug/" . $news['id'] . ".html";
//                        $product_cart_add = "them-vao-gio-hang/" . $news['id'] . ".html";
//                        ?>
<!--                        <div class="service-link col-md-3 col-sm-6 col-xs-12">-->
<!--                            <a href="--><?php //echo $product_link; ?><!--">-->
<!--                                <img class="secondary-img img-responsive" title="--><?php //echo $news['title'] ?><!--"-->
<!--                                     src="../backend/assets/uploads/--><?php //echo $news['avatar'] ?><!--"-->
<!--                                     alt="--><?php //echo $news['title'] ?><!--"/>-->
<!--                                <span class="shop-title">-->
<!--                        --><?php //echo $news['title'] ?>
<!---->
<!---->
<!--                    </span>-->
<!--                            </a>-->
<!--                            <p>Giá cũ : <del>--><?php //echo $news['summary'] ?><!--</del> </p>-->
<!--                            <span class="shop-price">-->
<!--                            <p> Giá mới :--><?php //echo number_format($news['price']) ?><!--</p>-->
<!--                </span>-->
<!---->
<!--                            <span data-id="--><?php //echo $news['id'] ?><!--" class="add-to-cart">-->
<!--                        <a href="--><?php //echo $product_cart_add ?><!--" style="color: inherit">Thêm vào giỏ</a>-->
<!--                    </span>-->
<!--                        </div>-->
<!--                    --><?php //endforeach; ?>
<!--                </div>-->
<!--            --><?php //endif; ?>
<!--            </div>-->
        <div class="news">
            <div class="col-md-4 col-sm-4 col-xs-12 category-two-item">

                    <span class="new-image-content">
                        <img src="assets/images/OIP.jpg"
                             title="Một cặp ngón tay chơi game"
                             class="post-image-avatar img-responsive">
                    </span>

                <div class="news-content-wrap">
                    <h3 class="category-heading timeline-post-title">

                            Một cặp ngón tay chơi game
                    </h3>
                </div>
            </div><div class="col-md-4 col-sm-4 col-xs-12 category-two-item">

                    <span class="new-image-content">
                        <img src="assets/images/tai nghe.jpg"
                             title="Một bộ tai nghe gaming"
                             class="post-image-avatar img-responsive">
                    </span>

                <div class="news-content-wrap">
                    <h3 class="category-heading timeline-post-title">

                        Một bộ tai nghe gaming
                    </h3>
                </div>
            </div><div class="col-md-4 col-sm-4 col-xs-12 category-two-item">

                    <span class="new-image-content">
                        <img src="assets/images/voucher-khuyen-mai-2.jpg"
                             title="Một voucher áp dụng cho lần mua hàng sau"
                             class="post-image-avatar img-responsive">
                    </span>

                <div class="news-content-wrap">
                    <h3 class="category-heading timeline-post-title">

                        Một voucher áp dụng cho lần mua hàng sau
                    </h3>
                </div>
            </div>
    </div>

    </div>

<div class="news-wraps">
        <div class="news container">
            <h1 class="post-list-title">
                Tin Tức Công Nghệ
            </h1>
            <?php if (!empty($news)): ?>
                <div class="link-secondary-wrap row">
                    <?php foreach ($news AS $news):
                        $slug = Helper::getSlug($news['name']);
                        $news_link = "tin-tuc/$slug/" . $news['id'] . ".html";
                        ?>
                        <div class="service-link col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo $news_link; ?>">
                                <img class="anh" title="<?php echo $news['name'] ?>"
                                     src="../backend/assets/uploads/<?php echo $news['avatar'] ?>"
                                     alt="<?php echo $news['name'] ?>"/>
                                <span class="shop-title">
                        <?php echo $news['name'] ?>
                    </span>
                            </a>
                            <span class="shop-summary">
                            <?php echo $news['summary'] ?>
                </span>

                        </div>
                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

</div>
</div>


<style>
.news {
display: flex;
flex-wrap: wrap;
}
.service-link a img {
    height: 300px;
    transition: all 0.3s ease 0s;
    width: 900px;
}

</style>
<!--END NEWS-->