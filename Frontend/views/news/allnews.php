
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

    <div class="row" >
        <div class="main-right col-md-9 col-sm-9 col-xs-12">
            <h2>Tin Tức Công Nghệ mới nhất</h2>
            <?php if (!empty($news)): ?>
                <div class="link-secondary-wrap row">
                    <?php foreach ($news AS $news):
                        $slug = Helper::getSlug($news['name']);
                        $product_link = "tin-tuc/$slug/" . $news['id'] . ".html";
                        ?>
                        <div class="service-link col-md-3 col-sm-6 col-xs-12">
                            <a href="<?php echo $product_link; ?>">
                                <img class="secondary-img img-responsive" title="<?php echo $news['name'] ?>"
                                     src="../backend/assets/uploads/<?php echo $news['avatar'] ?>"
                                     alt="<?php echo $news['name'] ?>"/>
                                <span class="shop-title">
                        <?php echo $news['summary'] ?>

                        </div>
                    <?php endforeach; ?>

                </div>

            <?php endif;

            ?>

        </div>
    </div>

</div>
<style>
    .row{
        display:grid;
    }
    .shop-title {
        display: contents;
    }
</style>

