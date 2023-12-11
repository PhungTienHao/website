<?php ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>

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
<script>
    $(function() {
        $("#contact_form").validate({
            rules: {
                "name": {
                    required: true,
                    minlength: 6,
                    maxlength: 12,
                    alpha_numericRegex: true
                },
                "assess": {
                    required: true,
                    minlength: 6,
                    maxlength: 20,

                },
                "email": {
                    required: true,
                    maxlength: 200,
                    email: true
                },

            },
            messages: {
                "name": {
                    required: "Vui lòng điền tên đăng nhập",
                    minlength: "Vui lòng nhập ít nhất {0} ký tự",
                    maxlength: "Vui lòng nhập tối đa {0} ký tự",
                    alpha_numericRegex:"Chỉ nhập ký tự chữ và số"
                },
                "email": {
                    required: "Vui lòng điền email",
                    maxlength: "Vui lòng nhập tối đa {0} ký tự",
                    email: "Vui lòng điền email hợp lệ, ví dụ: example@mailinator.com",
                },
                "assess": {
                    required: "Vui lòng điền thông tin liên hệ",
                    minlength: "Vui lòng nhập ít nhất {0} ký tự",
                    maxlength: "Vui lòng nhập tối đa {0} ký tự",
                    alpha_numericRegex:"Chỉ nhập ký tự chữ và số"
                }
            },
            submitHandler: function() {
                $.ajax( {
                    type: "POST",
                    url: '#',
                    data: $("#contact_form").serialize(),
                    success: function(data)
                    {
                        if (data.errCode == "0") {
                            alert("Đánh giá thành công");
                            window.open('#', '_parent');
                        }else{
                            alert(data.errCode + " - " + data.errMsg);
                            window.open('#', '_parent');
                        }
                    }
                });
            }
        });
    });
    $.validator.addMethod("numericRegex", function (value, element) {
        return this.optional(element) || /^[0-9\-]+$/i.test(value);
    });
    $.validator.addMethod("alpha_numericRegex", function (value, element) {
        return this.optional(element) || /^[a-z0-9\-]+$/i.test(value);
    });
</script>
