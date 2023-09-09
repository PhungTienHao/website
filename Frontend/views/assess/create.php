<?php ?>
<div class="row">
    <div class="col-md-6">

        <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d1861.9196567342478!2d105.76815155952197!3d21.039114531068307!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sus!4v1694222356334!5m2!1sen!2sus" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
<div class="col-md-6">
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
