
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
    <b>------------</b>
    <?php if (!empty($news)): ?>
        <?php foreach ($news AS $news):
            $slug = Helper::getSlug($news['name']);
            $product_link = "tin-tuc/$slug/" . $news['id'] . ".html";
            ?>
            <div class="content-new" >
            <div class="row" >

                <div class="main-new col-md-7 col-sm-7 col-xs-12">
                    <div class="right">
                        <b ><?php echo $news['summary'] ?></b>
                        <p></p>
                        <img class="secondary-img img-responsive" title="<?php echo $news['name'] ?>"
                             src="../backend/assets/uploads/<?php echo $news['avatar'] ?>"     width="100%"  height="300px" >
                        <span class=""></span>

                        <p style="font-size:14px "><br><?php echo $news['content'] ?></p>
                    </div>
                </div>

                <div class="main-new col-md-5 col-sm-5 col-xs-12">

                    <div class="left">

                        <aside id="secondary" class="widget-area">
                            <section id="block-12" class="widget widget_block widget_text">
                                <p class="has-text-align-center"><strong><mark style="background-color:rgba(0, 0, 0, 0)" class="has-inline-color has-black-color">TỔNG HỢP HÌNH ẢNH ĐẸP</mark></strong></p>
                            </section><section id="block-18" class="widget widget_block widget_media_image">
                                <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="100%" height="300" src="http://news.gearshop.vn/wp-content/uploads/2022/10/PC-IronMan-MK-III-Mod-By-Modding-Cafe-9-720x399.jpg" alt="" class="wp-image-2042"></figure>
                            </section><section id="block-22" class="widget widget_block widget_media_image">
                                <figure class="wp-block-image size-large"><img decoding="async" loading="lazy" width="100%" height="300" src="http://news.gearshop.vn/wp-content/uploads/2023/03/PC75B-Image-1-720x399.jpg" alt="" class="wp-image-2346"></figure>
                            </section><section id="block-28" class="widget widget_block widget_media_image">
                               ></aside><!-- #secondary -->
                    </div>
                </div>
            </div>
            </div>

        <?php endforeach; ?>
        <?php endif;

        ?>

    </div>
</div>





