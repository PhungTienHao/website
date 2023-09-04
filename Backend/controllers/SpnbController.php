<?php
require_once 'controllers/Controller.php';
require_once 'models/Spnb.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';

class SpnbController extends Controller
{
    public function index()
    {
        $spnb_model = new Spnb();
        $spnbs = $spnb_model->getAll();
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/spnb/index.php', [
            'spnb' => $spnbs,
            'categories' => $categories,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function create()
    {
        if (isset($_POST['submit'])) {
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
            $summary = $_POST['summary'];
            $content = $_POST['content'];
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

                $spnb_model = new Spnb();
                $spnb_model->category_id = $category_id;
                $spnb_model->title = $title;
                $spnb_model->avatar = $filename;
                $spnb_model->price = $price;
                $spnb_model->amount = $amount;
                $spnb_model->summary = $summary;
                $spnb_model->content = $content;
                $spnb_model->seo_title = $seo_title;
                $spnb_model->seo_description = $seo_description;
                $spnb_model->seo_keywords = $seo_keywords;
                $spnb_model->status = $status;
                $is_insert = $spnb_model->insert();
                if ($is_insert) {
                    $_SESSION['success'] = 'Insert dữ liệu thành công';
                } else {
                    $_SESSION['error'] = 'Insert dữ liệu thất bại';
                }
                header('Location: index.php?controller=spnb');
                exit();
            }
        }
        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/spnb/create.php', [
            'categories' => $categories
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=spnb');
            exit();
        }

        $id = $_GET['id'];
        $spnb_model = new Spnb();
        $spnb = $spnb_model->getById($id);

        $this->content = $this->render('views/spnb/detail.php', [
            'spnb' => $spnb
        ]);
        require_once 'views/layouts/main.php';
    }

    public function update()
    {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID không hợp lệ';
            header('Location: index.php?controller=spnb');
            exit();
        }

        $id = $_GET['id'];
        $spnb_model = new Spnb();
        $spnb = $spnb_model->getById($id);

        if (isset($_POST['submit'])) {
            $category_id = $_POST['category_id'];
            $title = $_POST['title'];
            $price = $_POST['price'];
            $amount = $_POST['amount'];
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
                $filename = $spnb['avatar'];
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
                $spnb_model->category_id = $category_id;
                $spnb_model->title = $title;
                $spnb_model->avatar = $filename;
                $spnb_model->price = $price;
                $spnb_model->amount = $amount;
                $spnb_model->summary = $summary;
                $spnb_model->content = $content;
                $spnb_model->seo_title = $seo_title;
                $spnb_model->seo_description = $seo_description;
                $spnb_model->seo_keywords = $seo_keywords;
                $spnb_model->status = $status;
                $spnb_model->updated_at = date('Y-m-d H:i:s');

                $is_update = $spnb_model->update($id);
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
            'spnb' => $spnb,
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
        $spnb_model = new Spnb();
        $is_delete = $spnb_model->delete($id);
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
