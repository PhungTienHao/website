
<h1>Danh sách Đánh Giá Khách Hàng</h1>

<table class="table table-bordered">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Đánh Giá</th>
        <th>Created_at</th>
        <th></th>
    </tr>
    <?php if (!empty($assess)): ?>
        <?php foreach ($assess as $assess): ?>
            <tr>
                <td>
                    <?php echo $assess['id']; ?>
                </td>
                <td>
                    <?php echo $assess['name']; ?>
                </td>

                <td>
                    <?php echo $assess['email']; ?>
                </td>
                <td>
                    <?php echo $assess['assess']; ?>
                </td>
                <td>
                    <?php echo date('d-m-Y H:i:s', strtotime($assess['created_at'])); ?>
                </td>

            </tr>
        <?php endforeach ?>
<!--        <tr>-->
<!--            <td colspan="7">--><?php //echo $pages; ?><!--</td>-->
<!--        </tr>-->

    <?php else: ?>
        <tr>
            <td colspan="7">Không có bản ghi nào</td>
        </tr>
    <?php endif; ?>
</table>
<!--  hiển thị phân trang-->


