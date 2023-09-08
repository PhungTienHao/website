<?php
require_once 'controllers/Controller.php';
require_once 'models/Assess.php';

class AssessController extends Controller
{
    public function create(){
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $assess = $_POST['asess'];
            if (empty($name)||empty($email)||empty($assess)) {
                $this->error = 'không được gửi đánh giá trống ';}
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
                    header('Location: index.php?controller=assess');
                    exit();
                }

    }
        $this->content = $this->render('views/assess/create.php', [
            'assess' => $assess,
        ]);
        require_once 'views/layouts/main.php';
}
}
