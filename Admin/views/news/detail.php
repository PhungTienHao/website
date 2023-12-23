<?php
require_once 'helpers/Helper.php';
?>
<table class="table table-bordered">
    <tr>
        <th>STT</th>
        <td><?php echo $news['id']?></td>
    </tr>
    <tr>
        <th>Tên</th>
        <td><?php echo $news['name']?></td>
    </tr>
    <tr>
        <th>Avatar</th>
        <td>
            <?php if (!empty($news['avatar'])): ?>
                <img height="80" src="assets/uploads/<?php echo $news['avatar'] ?>"/>
            <?php endif; ?>
        </td>
    </tr>
    <tr>
        <th>Mô tả ngắn</th>
        <td><?php echo $news['summary']?></td>
    </tr>
    <tr>
        <th>Mô tả chi tiết</th>
        <td><?php echo $news['content']?></td>
    </tr>
    <tr>
        <th>Trạng thái</th>
        <td><?php echo Helper::getnewText($news['is_home']); ?></td>
    <tr>

        <th>Created at</th>
        <td><?php echo date('d-m-Y H:i:s', strtotime($news['created_at'])) ?></td>
    </tr>

</table>
<a href="index.php?controller=new&action=index" class="btn btn-default">Back</a>
