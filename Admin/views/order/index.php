<?php
require_once 'helpers/Helper.php';
?>

<h2>Danh Sách Đơn Hàng</h2>
<table class="table table-bordered">
    <tr>
        <th>ID_Đơn Hàng</th>
        <th>Tên Khách</th>
        <th>Địa chỉ</th>
        <th>Sdt</th>
        <th>email</th>
        <th>ghi chú</th>
        <th>ID_Sản Phẩm</th>
        <th>Tổng Giá Trị Đơn Hàng</th>
        <th>trạng thái thanh toán</th>
        <th>Ngày mua</th>

        <th></th>
    </tr>
    <?php if (!empty($order)): ?>
        <?php foreach ($order as $order): ?>
            <tr>
                <td><?php echo $order['id'] ?></td>
                <td><?php echo $order['fullname'] ?></td>
                <td><?php echo $order['address'] ?></td>
                <td><?php echo number_format($order['mobile']) ?></td>
                <td><?php echo $order['email'] ?></td>
                <td><?php echo $order['note'] ?></td>
                <td><?php echo $order['product_id']?></td>
                <td><?php echo $order['price_total'] ?></td>
                <td><?php echo Helper::getpaymentStatusText($order['payment_status']) ?></td>

                <td><?php echo date('d-m-Y H:i:s', strtotime($order['created_at'])) ?></td>
                <td>
                    <?php
                    $url_detail = "index.php?controller=order&action=detail&id=" . $order['id'];
                    ?>
<!--                  <a title="Chi tiết" href="--><?php //echo $url_detail ?><!--"><i class="fa fa-eye"></i></a>-->

                </td>
            </tr>
        <?php endforeach; ?>
        <tr>
            <td colspan="7"><?php ?></td>
        </tr>
    <?php else: ?>
        <tr>
            <td colspan="9">No data found</td>
        </tr>

    <?php endif; ?>
</table>
