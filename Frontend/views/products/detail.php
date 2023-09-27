<?php

?>
<div class="container">
    <div class="row">
        <div class="detail-content-wrap con-md-8 col-sm-8 col-xs-12">
            <div class="product-info-wrap">
                <div class="product-image-info">
                    <img src="../backend/assets/uploads/<?php echo $product['avatar'] ?>" width="260"
                         title="<?php echo $product['title']; ?>">
                </div>
                <div class="product-info">
                    <h3 class="product-title">
                      <?php echo $product['title']; ?>
                    </h3>
                    <div class="product-price">
                      <?php echo number_format($product['price'], 0, '.', '.'); ?>₫

                    </div>


                    <div class="product-cart">
                        <span data-id="<?php echo $product['id']; ?>" class="add-to-cart">
                            <i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng
                        </span>
                        <br>
                        <div id="rating">
                            <input type="radio" id="star5" name="rating" value="5" />
                            <label class = "full" for="star5" title="Awesome - 5 stars"></label>

                            <input type="radio" id="star4half" name="rating" value="4 and a half" />
                            <label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>

                            <input type="radio" id="star4" name="rating" value="4" />
                            <label class = "full" for="star4" title="Pretty good - 4 stars"></label>

                            <input type="radio" id="star3half" name="rating" value="3 and a half" />
                            <label class="half" for="star3half" title="Meh - 3.5 stars"></label>

                            <input type="radio" id="star3" name="rating" value="3" />
                            <label class = "full" for="star3" title="Meh - 3 stars"></label>

                            <input type="radio" id="star2half" name="rating" value="2 and a half" />
                            <label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>

                            <input type="radio" id="star2" name="rating" value="2" />
                            <label class = "full" for="star2" title="Kinda bad - 2 stars"></label>

                            <input type="radio" id="star1half" name="rating" value="1 and a half" />
                            <label class="half" for="star1half" title="Meh - 1.5 stars"></label>

                            <input type="radio" id="star1" name="rating" value="1" />
                            <label class = "full" for="star1" title="Sucks big time - 1 star"></label>

                            <input type="radio" id="starhalf" name="rating" value="half" />
                            <label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </div>
                        <style>
                            @import url(//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css);
                            #rating{border:none;float:left;}
                            #rating>input{display:none;}
                            #rating>label:before{margin:5px;font-size:1.25em;font-family:FontAwesome;display:inline-block;content:"\f005";}
                            #rating>.half:before{content:"\f089";position:absolute;}
                            #rating>label{color:#ddd;float:right;}
                            #rating>input:checked~label,
                            #rating:not(:checked)>label:hover,
                            #rating:not(:checked)>label:hover~label{color:#FFD700;}
                            #rating>input:checked+label:hover,
                            #rating>input:checked~label:hover,
                            #rating>label:hover~input:checked~label,
                            #rating>input:checked~label:hover~label{color:#FFED85;}
                        </style>
                    </div>
                </div>
            </div>




            <div class="detail-content-wrap">
                <div class="detail-summary">
                    <strong><?php echo $product['summary']; ?></strong>
                </div>
                <div class="detail-description">
                    <div class="description-productdetail">
                      <?php echo $product['content']; ?>
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
                    <a href='san-pham/xbox-series-s-512gb/14.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/xbox.jpg"class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                   Xbox Series S 512GB
                                </span>
                    </a>
                </li>
                <li>
                    <a href='san-pham/ps5/11.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/plsn5.webp"class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                                    Playstaysion 5
                            </span>
                    </a>
                </li>
                <li>
                    <a href='san-pham/nintendo-switch-new-version-mario-choose-one-bundle/15.html' class="news-relative-link">
                                <span class="news-relative-img">
                                <img src="assets/images/original.jpg"class="detail-relative-img"/>
                                </span>
                        <span class="detail-relative-content">
                            Nintendo Switch
                        </span>
                    </a>
                </li>

            </ul>
        </div>
    </div>
</div>