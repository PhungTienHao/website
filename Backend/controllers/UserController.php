<?php
require_once 'controllers/Controller.php';
require_once 'models/User.php';

class UserController extends Controller {
public function register(){
    $user_model = new User();
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $repas = $_POST['repas'];
        $name = $_POST['name'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $email = $_POST['email'];
        $avatar = $_FILES['avatar'];

        if(empty($username)||empty($password)||empty($name)||empty($phone)||empty($address)||empty($email)||empty($repas)){
            $this->error='phải nhập đầy đủ thông tin';
        }elseif($password != $repas){
            $this->error='mật khẩu không khớp';
        }elseif(!is_numeric($phone)){
            $this->error='số điện thoại sai định dạng';
        }elseif(strlen($password)<8){
            $this->error='độ dài mật khẩu tối thiểu 8 kí tự';
        }else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->error = 'Email không đúng định dạng';}

    elseif ($_FILES['avatar']['error'] == 0) {
            $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
            $extension = strtolower($extension);
            $allow_extensions = ['png', 'jpg', 'jpeg', 'gif'];
            $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
            $file_size_mb = round($file_size_mb, 2);
            if (!in_array($extension, $allow_extensions)) {
                $this->error = 'Phải upload avatar dạng ảnh';
            } else if ($file_size_mb > 2) {
                $this->error = 'File upload không được lớn hơn 2Mb';
            }else if (!empty($username)) {
                $count_user = $user_model->getUser($username);
                if ($count_user) {
                    $this->error = 'Username này đã tồn tại vui lòng đặt username khác';
                }
            }
            if (empty($this->error)) {
            $filename = '';
            if ($_FILES['avatar']['error'] == 0) {
                $dir_uploads = 'assets/uploads';
                if (!file_exists($dir_uploads)) {
                    mkdir($dir_uploads);
                }
                $filename = time() . '-user-' . $_FILES['avatar']['name'];
                move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
            }
        }}
        if(empty($this->error)){
            $pass_hash = password_hash($password,PASSWORD_BCRYPT);
            $user_model->username = $username;
            $user_model->password = $pass_hash;
            $user_model->name = $name;
            $user_model->phone = $phone;
            $user_model->address = $address;
            $user_model->email = $email;
            $user_model->avatar = $filename;

            $is_register =$user_model ->registerUser();
            var_dump($is_register);
            if($is_register){
                $_SESSION['success'] = 'đăng kí thành công';
            } else {
                $_SESSION['error'] = 'đăng kí không thành xông';
            }
            header('Location: index.php?controller=user');
            exit();
        }}

    $this->page_title='form đăng ký';
    $this->content = $this->render('views/users/register.php');
    require_once 'views/layouts/main_login.php';
}

    public function login(){
        $user_model = new User();
        if(isset($_POST['submit'])){
            $username = $_POST['username'];
            $password = $_POST['password'];

            if(empty($this->error)){
                $user_model = new User();
                $user =$user_model->getUser($username);
                if(empty($user)){
                    $this->error='username k tồn tại';}
                else{
                    $pass_hash=$user['password'];
                    $is_login=password_verify($password,$pass_hash);
                    var_dump($is_login);
                    if($is_login){
                        $_SESSION['user']=$user;
                        $_SESSION['success']='đăng nhập thành công';
                        header('location:index.php?controller=product&action=index');
                        exit();
                    }
                    $this->error='sai tk';
                }
            }
        }

        $this->page_title='form đăng nhập';
        $this->content = $this->render('views/users/login.php');
        require_once 'views/layouts/main_login.php';

}

public function logout(){
    unset($_SESSION['user']);
    $_SESSION['success']='logout thành công';
    header('location:index.php?controller=user&action=login');
}


}
