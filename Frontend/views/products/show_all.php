
<?php
require_once 'helpers/Helper.php';

?>
<div class="container">
        <section class="content-header">

            <ol class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>->
                <li class="active">Trang sản phẩm</li>
            </ol>
            <hr >
        </section>

    <div class="row">
        <div class="main-left col-md-3 col-sm-3 col-xs-12">

            <form action="" method="POST">
<!--              --><?php //if (!empty($categories)): ?>
<!--                  <div class="form-group">-->
<!--                      <b>Danh mục</b> <br/>-->
<!--                    --><?php //foreach ($categories AS $category):
//                      $category_checked = '';
//                      if (isset($_POST['category'])) {
//                        if (in_array($category['id'], $_POST['category'])) {
//                          $category_checked = 'checked';
//                        }
//                      }
//                      ?>
<!--                        <input type="checkbox" name="category[]"-->
<!--                               value="--><?php //echo $category['id']; ?><!--" --><?php //echo $category_checked; ?><!-- />-->
<!--                      --><?php //echo $category['name']; ?>
<!--                        <br/>-->
<!--                    --><?php //endforeach; ?>
<!---->
<!--                  </div>-->
<!--              --><?php //endif; ?>

                <div class="form-group">
                    <b> <h3 style="background-color: #0a90eb;text-align: center;color: white;"> Giá</h3></b> <br/>
                  <?php
                  $price1_checked = '';
                  $price2_checked = '';
                  $price3_checked = '';
                  $price4_checked = '';
                  if (isset($_POST['price'])) {
                    foreach ($_POST['price'] as $price) {
                      if ($price == 1) {
                        $price1_checked = 'checked';
                      }
                      if ($price == 2) {
                        $price2_checked = 'checked';
                      }
                      if ($price == 3) {
                        $price3_checked = 'checked';
                      }
                      if ($price == 4) {
                        $price4_checked = 'checked';
                      }
                    }
                  }
                  ?>
                    <input type="checkbox" name="price[]" value="1" <?php echo $price1_checked; ?> /> Dưới 1tr <br/>
                    <input type="checkbox" name="price[]" value="2" <?php echo $price2_checked; ?> /> Từ 1 - 3tr
                    <br/>
                    <input type="checkbox" name="price[]" value="3" <?php echo $price3_checked; ?> /> Từ 3 - 6tr
                    <br/>
                    <input type="checkbox" name="price[]" value="4" <?php echo $price4_checked; ?> /> Trên 6tr
                    <br/>

                </div>
                <div class="form-group">
                    <b> <h3 style="background-color: #0a90eb;text-align: center;color: white;">Loại </h3></b> <br/>
                    <?php
                    $category1_checked = '';
                    $category2_checked = '';
                    $category3_checked = '';
                    $category4_checked = '';
                    if (isset($_POST['category'])) {
                        foreach ($_POST['category'] as $category) {
                            if ($category == 6) {
                                $category1_checked = 'checked';
                            }
                            if ($category == 7) {
                                $category2_checked = 'checked';
                            }
                            if ($category == 8) {
                                $category3_checked = 'checked';
                            }
                            if ($category == 9) {
                                $category4_checked = 'checked';
                            }
                        }
                    }
                    ?>
                    <input type="checkbox" name="category[]" value="6" <?php echo $category1_checked; ?> />Tay cầm <br/>
                    <input type="checkbox" name="category[]" value="7" <?php echo $category2_checked; ?> />Mobile
                    <br/>
                    <input type="checkbox" name="category[]" value="8" <?php echo $category3_checked; ?> />Xbox
                    <br/>
                    <input type="checkbox" name="category[]" value="9" <?php echo $category4_checked; ?> />PC
                    <br/>

                </div>
                <div class="form-group">
                    <input type="submit"  name="filter" value="lọc" class="btn btn-primary"/>
                    <br>
                    <a href="danh-sach-san-pham.html" class="btn btn-default">Xóa lọc</a>
                </div>
            </form>
        </div>
        <div class="main-right col-md-9 col-sm-9 col-xs-12">
            <h2>Danh sách sản phẩm</h2>
          <?php if (!empty($products)): ?>
              <div class="link-secondary-wrap row">
                <?php foreach ($products AS $product):
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

              </div>

          <?php endif; ?>
        </div>
    </div>

</div>

