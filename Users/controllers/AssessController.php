<?php
require_once 'controllers/Controller.php';
require_once 'models/Assess.php';

class AssessController extends Controller
{
    public function create(){
        if (isset($_POST['submit'])) {

            $email = htmlspecialchars($_POST['email']);

           $assess = htmlspecialchars($_POST['assess']);
           $name=htmlspecialchars($_POST['name']);



            if (empty($name)||empty($email)||empty($assess)) {
               $this->error = 'không được gửi đánh giá trống';}
            if(preg_match("/<script>/",$name)){
                $this->error ='Bạn đang cố gắng ngăn chặn hoạt động của website này , HÃY DỪNG LẠI !!!';
            }
            if(preg_match("/<script>/",$assess)){
                $this->error ='Bạn đang cố gắng ngăn chặn hoạt động của website này , HÃY DỪNG LẠI !!!';
            }
//            if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
//                $this->error ='Email chưa đúng định dạng';
//            }

                if (empty($this->error)) {
                    $assess_model = new Assess();
                    $assess_model->name = $name;
                    $assess_model->email= $email;
                    $assess_model->assess = $assess;
                    $is_insert = $assess_model->insert();
                    if ($is_insert) {
                        $_SESSION['success'] = 'Gửi đánh giá thành công';
                    } else {
                        $_SESSION['error'] = 'Gửi đánh giá thất bại';
                    }
                    header('Location: contact.html');
                    exit();
                }

    }
        $this->content = $this->render('views/assess/contact.php', [
            'assess' => $assess,
        ]);
        require_once 'views/layouts/main.php';
}
}
