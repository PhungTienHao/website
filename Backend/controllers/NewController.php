<?php
require_once 'controllers/Controller.php';
require_once 'models/New.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class NewController extends Controller
{
    public function index()
    {
        $new_model = new news();
        $news = $new_model->getAll();
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/News/index.php', [
            'news' => $news,
            'categories' => $categories,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];
            $price = $_POST['price'];
            $seo_title = $_POST['seo_title'];
            $seo_description = $_POST['seo_description'];
            $seo_keywords = $_POST['seo_keywords'];
            $status = $_POST['status'];

            if (empty($title)) {
                $this->error = 'Không được để trống title';
            } else if ($_FILES['avatar']['error'] == 0) {
                $extension = pathinfo($_FILES['avatar']['name'], PATHINFO_EXTENSION);
                $extension = strtolower($extension);
                $arr_extension = ['jpg', 'jpeg', 'png', 'gif'];

                $file_size_mb = $_FILES['avatar']['size'] / 1024 / 1024;
                //làm tròn theo đơn vị thập phân
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
                    $filename = time() . '-product-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }

                $new_model = new news();
                $new_model->category_id = $category_id;
                $new_model->title = $title;
                $new_model->avatar = $filename;
                $new_model->price = $price;
                $new_model->summary = $summary;
                $new_model->content = $content;
                $new_model->seo_title = $seo_title;
                $new_model->seo_description = $seo_description;
                $new_model->seo_keywords = $seo_keywords;
                $new_model->status = $status;
                $is_insert = $new_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Insert dữ liệu thất bại';
                }
                header('Location: index.php?controller=new');
                exit();
            }
        }
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/News/create.php', [
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=new');
            exit();
        }

        $id = $_GET['id'];
        $new_model = new news();
        $news = $new_model->getById($id);

        $this->content = $this->render('views/News/detail.php', [
            'news' => $news
        ]);
        require_once 'views/layouts/main.php';
    }

    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=new');
            exit();
        }

        $id = $_GET['id'];
        $new_model = new news();
        $news = $new_model->getById($id);

        if (isset($_POST['submit'])) {
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];

            $seo_title = $_POST['seo_title'];
            $seo_description= $_POST['seo_description'];
            $seo_keywords = $_POST['seo_keywords'];
            $status = $_POST['status'];

            if (empty($title)) {
                $this->error = 'Không được để trống title';
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
                    $filename = time() . '-product-' . $_FILES['avatar']['name'];
                    move_uploaded_file($_FILES['avatar']['tmp_name'], $dir_uploads . '/' . $filename);
                }
                //save dữ liệu vào bảng products
                $new_model->category_id = $category_id;
                $new_model->title = $title;
                $new_model->avatar = $filename;
                $new_model->summary = $summary;
                $new_model->content = $content;
                $new_model->seo_title = $seo_title;
                $new_model->seo_description = $seo_description;
                $new_model->seo_keywords = $seo_keywords;
                $new_model->status = $status;
                $new_model->updated_at = date('Y-m-d H:i:s');

                $is_update = $new_model->update($id);
                if ($is_update) {
                    $_SESSION['success'] = 'Update dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Update dữ liệu thất bại';
                }
                header('Location: index.php?controller=spnb');
                exit();
            }
        }
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/spnb/update.php', [
            'categories' => $categories,
            'new' => $news,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function delete()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=spnb');
            exit();
        }

        $id = $_GET['id'];
        $new_model = new Spnb();
        $is_delete = $new_model->delete($id);
        if ($is_delete) {
            $_SESSION['success'] = 'Xóa dữ liệu thành công';
        } else {
            $_SESSION['error'] = 'Xóa dữ liệu thất bại';
        }
        header('Location: index.php?controller=spnb');
        exit();
    }
}
?>

