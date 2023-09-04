<?php
require_once 'helpers/Helper.php';
require_once 'Models/Spnb.php';
require_once 'controllers/SpnbController.php';
?>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <td><?php echo $spnb['id']?></td>
    </tr>
    <tr>
        <th>Category name</th>
        <td><?php echo $spnb['category_name']?></td>
    </tr>
    <tr>
        <th>Title</th>
        <td><?php echo $spnb['title']?></td>
    </tr>
    <tr>
        <th>Avatar</th>
        <td>
            <?php if (!empty($spnb['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $spnb['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Price</th>
        <td><?php echo number_format($spnb['price']) ?></td>
    </tr>
    <tr>
        <th>Seo Title</th>
        <td><?php echo $spnb['seo_title'] ?></td>
    </tr>
    <tr>
        <th>Seo description</th>
        <td><?php echo $spnb['seo_description'] ?></td>
    </tr>
    <tr>
        <th>Seo keywords</th>
        <td><?php echo $spnb['seo_keywords'] ?></td>
    </tr>
    <tr>
        <th>Status</th>
        <td><?php echo Helper::getStatusText($spnb['status']) ?></td>
    </tr>
    <tr>
        <th>Created at</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($spnb['created_at'])) ?></td>
    </tr>
    <tr>
        <th>Updated at</th>
        <td><?php echo !empty($spnb['updated_at']) ? date('d-m-Y H:i:s', strtotime($spnb['updated_at'])) : '--' ?></td>
    </tr>
</table>
<a href="index.php?controller=product&action=index" class="btn btn-default">Back</a>
