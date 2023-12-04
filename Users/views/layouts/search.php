<?php
require_once 'helpers/Helper.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?php echo $_SERVER['SCRIPT_NAME'] ?>" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FUCHAO</title>


    <link rel="canonical" href="http://localhost"/>
    <link rel="alternate" href="http://localhost" hreflang="vi-vn"/>

    <meta name="robots" content="index,follow,noodp">
    <meta name="author" content="http://localhost">
    <meta name="copyright" content="http://localhost"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="MVC Demo Frontend"/>
    <meta property="og:url" content="http://localhost"/>
    <meta property="og:site_name" content="http://localhost"/>
    <!-- SEO META DESCRIPTION -->
    <meta name="title" content="">
    <meta name="keywords" content="">
    <meta name="description" content=""/>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,600,700,900&amp;subset=latin-ext"
          rel="stylesheet">

    <link rel="stylesheet" href="assets/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="assets/css/all.min.css"/>
    <!--<link rel="stylesheet" href="assets/css/font-awesome.min.css"/>-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Tooltip plugin (zebra) css file -->
    <link rel="stylesheet" href="assets/css/zebra_tooltips.min.css"/>
    <!-- Owl Carousel plugin css file. only used pages -->
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css"/>

    <!-- Ideabox responsive css file -->
    <link rel="stylesheet" href="assets/css/responsive-style.css"/>
    <!-- Ideabox main theme css file. you have to add all pages -->
    <link rel="stylesheet" href="assets/css/style.css"/>

</head>
<body>
<?php require_once 'header.php'; ?>




<div class="main-content">


                    <p class="sanphamnoibat_id">Sản phẩm tìm kiếm</p>




    <div class="row">
        <?php if (empty($searchResults)): ?>
            <p>Không tìm thấy kết quả nào.</p>
        <?php else: ?>

            <?php foreach ($searchResults as $product): ?>

                  <?php
                        $slug = Helper::getSlug($product['title']);
                        $product_link = "san-pham/$slug/" . $product['id'] . ".html";
                        $product_cart_add = "them-vao-gio-hang/" . $product['id'] . ".html";
                        ?>
                        <div class="service-link col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo $product_link; ?>">
                                <img class="secondary-img img-responsive" title="<?php echo $product['title'] ?>"
                                     src="../backend/assets/uploads/<?php echo $product['avatar'] ?>"
                                     alt="<?php echo $product['title'] ?>"/>
                                <span class="shop-title">
                        <?php echo $product['title'] ?>
                    </span>
                            </a>
                            <span class="shop-price">
                            <?php echo number_format($product['price']) ?>
                </span>

                            <span data-id="<?php echo $product['id'] ?>" class="add-to-cart">
                        <a href="<?php echo $product_cart_add ?>" style="color: inherit">Thêm vào giỏ</a>
                    </span>
                        </div>

                    <?php endforeach; ?>



            <?php endif;

            ?>

        </div>
    </div>

</div>


<?php require_once 'footer.php'; ?>

</body>

</html>