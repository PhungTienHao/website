<?php
require_once 'helpers/Helper.php';
require_once 'controllers/NewController.php';
require_once 'Models/New.php';

//echo '<pre>';
//print_r($news);
//echo'</pre>';

?>

<h2>Quản lý danh sách khuyến mãi</h2>
<a href="index.php?controller=new&action=create" class="btn btn-success">
    <i class="fa fa-plus"></i> Thêm mới
</a>
<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Category name</th>
        <th>Title</th>
        <th>Avatar</th>
        <th>Price</th>
        <th>Status</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th></th>
    </tr>
    <?php if (!empty($news)): ?>
        <?php foreach ($news as $news): ?>
            <tr>
                <td><?php echo $news['id'] ?></td>
                <td><?php echo $news['category_name'] ?></td>
                <td><?php echo $news['title'] ?></td>
                <td>
                    <?php if (!empty($news['avatar'])): ?>
                        <img height="80" src="assets/uploads/<?php echo $news['avatar'] ?>"/>
                    <?php endif; ?>
                </td>
              <td><?php echo number_format($news['price']) ?></td>
<!--                <td>--><?php //echo $news['amount'] ?><!--</td>-->
                <td><?php echo Helper::getStatusText($news['status']) ?></td>
                <td><?php echo date('d-m-Y H:i:s', strtotime($news['created_at'])) ?></td>
                <td><?php echo !empty($news['updated_at']) ? date('d-m-Y H:i:s', strtotime($news['updated_at'])) : '--' ?></td>
                <td>
                    <?php
                    $url_detail = "index.php?controller=new&action=detail&id=" . $news['id'];
                    $url_update = "index.php?controller=new&action=update&id=" . $news['id'];
                    $url_delete = "index.php?controller=new&action=delete&id=" . $news['id'];
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
