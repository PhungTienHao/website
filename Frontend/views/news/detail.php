<?php
?>
<div class="container">
    <div class="row">
        <div class="detail-content-wrap con-md-8 col-sm-8 col-xs-12">
            <div class="product-info-wrap">
                <div class="product-image-info">
                    <img src="../backend/assets/uploads/<?php echo $news['avatar'] ?>" width="260"
                         title="<?php echo $news['title']; ?>">
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                        <?php echo $news['title']; ?>
                    </h3>
                    <div class="product-price">
                        <?php echo number_format($news['price'], 0, '.', ','); ?>₫
                    </div>
                    <div class="product-cart">
                        <span data-id="<?php echo $news['id']; ?>" class="add-to-cart">
                            <i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng
                        </span>
                    </div>
                </div>
            </div>

            <!--Timeline items end -->
            <div class="detail-content-wrap">
                <div class="detail-summary">
                    <strong><?php echo $news['summary']; ?></strong>
                </div>
                <div class="detail-description">
                    <div class="description-productdetail">
                        <?php echo $news['content']; ?>
                    </div>
                </div>
            </div>
            <div class="detail-comment">
                <h2 class="link-category-item">Bình luận</h2>
                <div class="fb-comments" data-href="https://sukien.net" data-width="100%"
                     data-numposts="5"></div>
            </div>
        </div>
        <div class="news-relative-wrap col-md-4 col-sm-4 col-xs-12">
            <h4 class="link-category-item">Sản phẩm khác</h4>
            <ul class="news-relative">
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                                </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
                <li>
                    <a href='product_detail.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/samsung-galaxy-note-10-plus-silver-400x460.png"
                                     alt="no-image" title="SamSung Note 10"
                                     class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    SamSung Note 10
                            </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
