<?php
require_once 'helpers/Helper.php';
require_once 'Models/Spnb.php';
require_once 'controllers/SpnbController.php';
require_once 'Models/Product.php';
require_once 'controllers/ProductController.php';
?>

<h2>Danh sách sản phẩm</h2>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Category name</th>
        <th>Title</th>
        <th>Avatar</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Status</th>
        <th></th>
    </tr>
    <?php if (!empty($products)): ?>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?php echo $product['id'] ?></td>
                <td><?php echo $product['category_name'] ?></td>
                <td><?php echo $product['title'] ?></td>
                <td>
                    <?php if (!empty($product['avatar'])): ?>
                        <img height="80" src="assets/uploads/<?php echo $product['avatar'] ?>"/>
                    <?php endif; ?>
                </td>
                <td><?php echo number_format($product['price']) ?></td>
                <td><?php echo $product['amount'] ?></td>
                <td><?php echo Helper::getStatusText($product['status']) ?></td>
                <td>
                    <?php
                    $url_select = "index.php?controller=spnb&action=create"  . $product['id'];
                    ?>&nbsp;&nbsp;
                    <input value="chọn" type="submit" <?php echo $url_select ?>" onclick="return confirm('Are you sure ?')"><i
                            ></i>
                </td>
            </tr>
        <?php endforeach; ?>

    <?php else: ?>
        <tr>
            <td colspan="9">No data found</td>
        </tr>
    <?php endif; ?>
</table>
