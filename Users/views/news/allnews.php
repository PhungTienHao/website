
<?php
require_once 'helpers/Helper.php';
require_once 'models/Product.php';
require_once 'controllers/ProductController.php';

?>

    <div class="container">
        <section class="content-header">
            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>->
                <li class="active">Trang Tin Tức</li>
            </ol>
            <hr >
        </section>
        <h2>Tin Tức Công Nghệ mới nhất</h2>
        <?php if (!empty($news)): ?>
        <div class="link-secondary-wrap ">
            <?php foreach ($news AS $news):
                $slug = Helper::getSlug($news['name']);
                $product_link = "tin-tuc/$slug/" . $news['id'] . ".html";
                ?>


                <div class="row" >

                    <div class="main-right col-md-6 col-sm-6 col-xs-12">
                        <img class="secondary-img img-responsive" title="<?php echo $news['name'] ?>"
                             src="../Admin/assets/uploads/<?php echo $news['avatar'] ?>"     width="300px"  height="200px" >

                    </div>
                    <div class="service-link col-md-6 col-sm-6 col-xs-12">

                        <a href="<?php echo $product_link; ?>">
                            <span class="shop-title-1"></span>
                            <b ><?php echo $news['summary'] ?></b></a>
                    </div>
                </div>

                <br>
            <?php endforeach; ?>
            <?php endif;

            ?>

        </div>
    </div>





