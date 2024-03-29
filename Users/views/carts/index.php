<!--Timeline items start -->
<div class="timeline-items container">
    <h2>Giỏ hàng của bạn</h2>
    <?php if (isset($_SESSION['cart'])) : ?>
        <form action="" method="post">
            <table class="table table-bordered">
                <tbody>
                <tr>
                    <th width="40%">Tên sản phẩm</th>
                    <th width="12%">Số lượng</th>
                    <th>Giá</th>
                    <th>Thành tiền</th>
                    <th></th>
                </tr>

                <?php
                $total_price = 0;
                foreach ($_SESSION['cart'] AS $product_id => $product):
                    ?>
                    <tr>
                        <td style="display:flex;">
                            <a href="chi-tiet-san-pham/samsung-s9/5" class="content-product-a">
                            <img class="product-avatar img-responsive"
                                 src="../Admin/assets/uploads/<?php echo $product['avatar'] ?>"
                                 width="80">
                            <div class="content-product">

                                    <?php echo $product['name'] ?> </a>
                            </div>
                        </td>
                        <td>

                            <input type="number" min="0" name="<?php echo $product_id?>" class="product-amount form-control"
                                   value="<?php echo $product['quantity'] ?>">
                        </td>
                        <td>
                            <?php echo number_format($product['price']); ?>
                        </td>
                        <td>
                            <?php
                           $product_price = $product['price'] * $product['quantity'];
                            $total_price += $product_price;
                            echo number_format($product_price);

                            ?>
                        </td>
                        <td>
                            <a class="content-product-a" href="xoa-san-pham/<?php echo $product_id ?>.html">
                                Xóa
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
                <tr>
                    <td colspan="4" >Phí vận chuyển :
                    </td>
                    <td ><b>Miễn phí </b></td>
                </tr>
                <tr>
                    <td colspan="4" style="text-align: left">
                        Tổng giá trị đơn hàng:

                    </td>
                    <td> <span class="product-price" style="color:red;">
                                            <?php echo number_format($total_price); ?> vnđ
                                                </span></td>
                </tr>
                <tr>
                    <td colspan="5" class="product-payment">
                        <input type="submit" name="ok" value="Cập nhật lại giá" class="btn btn-primary">
                        <a href="thanh-toan.html" class="btn btn-success">Đến trang thanh toán</a>
                    </td>
                </tr>
                </tbody>
            </table>
        </form>
    <?php else: ?>
        <h3>Giỏ hàng trống</h3>
    <?php endif; ?>
</div>
<!--Timeline items end -->