<?php
require_once 'helpers/Helper.php';
?>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $new['id']?></td>
    </tr>
    <tr>
        <th>Category name</th>
        <td><?php echo $new['category_name']?></td>
    </tr>
    <tr>
        <th>Title</th>
        <td><?php echo $new['title']?></td>
    </tr>
    <tr>
        <th>Avatar</th>
        <td>
            <?php if (!empty($new['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $new['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Price</th>
        <td><?php echo number_format($new['price']) ?></td>
    </tr>
    <tr>
        <th>Seo Title</th>
        <td><?php echo $new['seo_title'] ?></td>
    </tr>
    <tr>
        <th>Seo description</th>
        <td><?php echo $new['seo_description'] ?></td>
    </tr>
    <tr>
        <th>Seo keywords</th>
        <td><?php echo $new['seo_keywords'] ?></td>
    </tr>
    <tr>
        <th>Status</th>
        <td><?php echo Helper::getStatusText($new['status']) ?></td>
    </tr>
    <tr>
        <th>Created at</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($new['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Updated at</th>
        <td><?php echo !empty($new['updated_at']) ? date('d-m-Y H:i:s', strtotime($new['updated_at'])) : '--' ?></td>
    </tr>
</table>
<a href="index.php?controller=product&action=index" class="btn btn-default">Back</a>