<?php
require_once 'helpers/Helper.php';
?>
<?php if (!empty($order)): ?>
<?php foreach ($order as $order): ?>
<table class="table table-bordered">
    <tr>
        <th>Order_id</th>
        <td><?php echo $order['id']?></td>
    </tr>
    <tr>
        <th>Tên Khách Hàng</th>
        <td><?php echo $order['fullname']?></td>
    </tr>
    <tr>
        <th>Title</th>
        <td><?php echo $detail['title']?></td>
    </tr>
    <tr>
        <th>Avatar</th>
        <td>
            <?php if (!empty($detail['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $detail['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Price</th>
        <td><?php echo number_format($detail['price']) ?></td>
    </tr>
    <tr>
        <th>Seo Title</th>
        <td><?php echo $detail['seo_title'] ?></td>
    </tr>
    <tr>
        <th>Seo description</th>
        <td><?php echo $detail['seo_description'] ?></td>
    </tr>
    <tr>
        <th>Seo keywords</th>
        <td><?php echo $detail['seo_keywords'] ?></td>
    </tr>
    <tr>
        <th>Status</th>
        <td><?php echo Helper::getStatusText($detail['status']) ?></td>
    </tr>
    <!--    <tr>-->
    <!--        <th>Kiểu sp</th>-->
    <!--        <td>--><?php //echo Helper::getSpText($product['is_feature']) ?><!--</td>-->
    <!--    </tr>-->
    <tr>
        <th>Created at</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($detail['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Updated at</th>
        <td><?php echo !empty($detail['updated_at']) ? date('d-m-Y H:i:s', strtotime($product['updated_at'])) : '--' ?></td>
    </tr>
</table>
<a href="index.php?controller=product&action=index" class="btn btn-default">Back</a>
    <?php endforeach; ?>
    <tr>
        <td colspan="7"><?php ?></td>
    </tr>
<?php else: ?>
    <tr>
        <td colspan="9">No data found</td>
    </tr>

<?php endif; ?>