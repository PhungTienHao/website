<?php ?>
<div class="row">
    <div class="col-md-3"></div>
<div class="col-md-8">
    <form class="contact_form" action="" method="POST">
        <h1 class="h11">Hòm Thư Góp Ý</h1>
        <div class="row">
            <div class="col-md-2"><label for="name">Họ và tên:</label></div>
            <div class="col-md-10"><input type="text" id="name" name="name" required placeholder="Nhập họ tên"></div>
        </div>
        <div class="row">
            <div class="col-md-2"> <label for="email">Địa chỉ email:</label></div>
            <div class="col-md-10"><input type="email" id="email" name="email" required placeholder="Nhập email"></div>
        </div>
        <label for="assess">Nội dung góp ý:</label>	<br>
        <textarea id="assess" name="assess" required rows="3px" cols="70px"></textarea>
        <br>
        <input type="submit" value="Gửi ý kiến đóng góp" name="submit" >

    </form>
</div></div>
<?php

?>
