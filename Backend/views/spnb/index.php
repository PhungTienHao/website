<?php
require_once 'helpers/Helper.php';
require_once 'Models/Spnb.php';
require_once 'controllers/SpnbController.php';
?>

<h2>Danh sách Các Sản Phẩm Nổi Bật</h2>
<a href="index.php?controller=spnb&action=create" class="btn btn-success">
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Category name</th>
        <th>Title</th>
        <th>Avatar</th>
        <th>Price</th>
        <th>Amount</th>
        <th>Status</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th></th>
    </tr>
    <?php if(!empty($spnbs)): ?>
        <?php foreach ($spnbs as $spnb): ?>
            <tr>
                <td><?php echo $spnb['id'] ?></td>
                <td><?php echo $spnb['category_name'] ?></td>
                <td><?php echo $spnb['title'] ?></td>
                <td>
                    <?php if (!empty($spnb['avatar'])): ?>
                        <img height="80" src="assets/uploads/<?php echo $spnb['avatar'] ?>"/>
                    <?php endif; ?>
                </td>
                <td><?php echo number_format($spnb['price']) ?></td>
                <td><?php echo $spnb['amount'] ?></td>
                <td><?php echo Helper::getStatusText($spnb['status']) ?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($spnb['created_at'])) ?></td>
                <td><?php echo !empty($spnb['updated_at']) ? date('d-m-Y H:i:s', strtotime($spnb['updated_at'])) : '--' ?></td>
                <td>
                    <?php
                    $url_detail = "index.php?controller=product&action=detail&id=" . $spnb['id'];
                    $url_update = "index.php?controller=product&action=update&id=" . $spnb['id'];
                    $url_delete = "index.php?controller=product&action=delete&id=" . $spnb['id'];
                    ?>
                    <a title="Chi tiết" href="<?php echo $url_detail ?>"><i class="fa fa-eye"></i></a> &nbsp;&nbsp;
                    <a title="Update" href="<?php echo $url_update ?>"><i class="fa fa-pencil-alt"></i></a> &nbsp;&nbsp;
                    <a title="Xóa" href="<?php echo $url_delete ?>" onclick="return confirm('Are you sure delete?')"><i
                            class="fa fa-trash"></i></a>
                </td>
            </tr>
        <?php endforeach; ?>
    <?php else: ?>
        <tr>
            <td colspan="9">No data found</td>
        </tr>
    <?php endif; ?>
</table>
