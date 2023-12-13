
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script language="javascript" src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
</head>
<body>
<section class="content-header">

    <ol class="breadcrumb">
        <li><a href="index.php"><i class="fa fa-dashboard"></i> Trang chủ</a></li>->
        <li class="active">Trang liên hệ</li>
    </ol>
    <hr >
</section>
<div class="row">
    <div class="col-md-6" >
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.042620592514!2d105.78089437510532!3d21.030980580618927!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ab4c76b12a3b%3A0x9a311c833456d5f0!2zUC4gRHV5IFTDom4sIEThu4tjaCBW4buNbmcgSOG6rXUsIEPhuqd1IEdp4bqleSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1694351676273!5m2!1svi!2s" width="600" height="400" style="border:0;left:20px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
<div class="col-md-62">
    <form class="contact_form" action="" method="POST" novalidate="novalidate">
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
</body>
