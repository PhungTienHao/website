<?php
require_once 'controllers/Controller.php';
require_once 'models/News.php';

class NewController extends Controller {
    public function index() {
        $news_model = new News();
        $news = $news_model ->getAll();
        $this->content = $this->render('views/news/index.php', [
            'news' => $news,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function create()
    {
        if (isset($_POST['submit'])) {

            $name = $_POST['name'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];
            $is_home = $_POST['is_home'];


            if (empty($name)) {
                $this->error = 'Không được để trống tên';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;

                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }
            }


            if (empty($this->error)) {
                $filename = '';

                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = 'assets/uploads';
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }

                    $filename = time() . '-news-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }

                $news_model = new News();
                $news_model->name = $name;
                $news_model->avatar = $filename;
                $news_model->summary = $summary;
                $news_model->content = $content;
                $news_model->is_home = $is_home;

                $is_insert = $news_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Insert dữ liệu thất bại';
                }
                header('Location: index.php?controller=new&action=index');
                exit();
            }
        }
        $this->content = $this->render('views/news/cr.php', [

        ]);
        require_once 'views/layouts/main.php';
    }
    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=product');
            exit();
        }

        $id = $_GET['id'];
        $news_model = new News();
        $news = $news_model->getById($id);

        $this->content = $this->render('views/news/detail.php', [
            'news' => $news
        ]);
        require_once 'views/layouts/main.php';
    }
    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=product');
            exit();
        }

        $id = $_GET['id'];
        $news_model = new News();
        $news = $news_model->getById($id);
        if (isset($_POST['submit'])) {
            $name = $_POST['name'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];
            $is_home = $_POST['is_home'];
            if (empty($name)) {
                $this->error = 'Không được để trống tên';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;

                $file_size_mb = round($file_size_mb, 2);

                if (!in_array($extension, $arr_extension)) {
                    $this->error = 'Cần upload file định dạng ảnh';
                } else if ($file_size_mb > 2) {
                    $this->error = 'File upload không được quá 2MB';
                }
            }
            if (empty($this->error)) {
                $filename = $news['avatar'];
                if ($_FILES['avatar']['error'] == 0) {
                    $dir_uploads = 'assets/uploads';

                    @unlink($dir_uploads . '/' . $filename);
                    if (!file_exists($dir_uploads)) {
                        mkdir($dir_uploads);
                    }
                    $filename = time() . '-news-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }

                $news_model = new News();
                $news_model->name = $name;
                $news_model->avatar = $filename;
                $news_model->summary = $summary;
                $news_model->content = $content;
                $news_model->is_home = $is_home;

                $is_update = $news_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
                header('Location: index.php?controller=product');
                exit();
            }
        }
        $this->content = $this->render('views/news/update.php', [
            'news'=>$news,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=product');
            exit();
        }

        $id = $_GET['id'];
        $news_model = new News();
        $is_delete = $news_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa dữ liệu thành công';
        } else {
            $_SESSION['error'] = 'Xóa dữ liệu thất bại';
        }
        header('Location: index.php?controller=new&action=index');
        exit();
    }

}
