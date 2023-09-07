<?php
require_once 'controllers/Controller.php';
require_once 'models/Spnb.php';
require_once 'models/Category.php';
require_once 'models/Pagination.php';
require_once 'models/Product.php';

class SpnbController extends Controller
{
    public function index()
    {
        $spnb_model = new Spnb();
        $spnbs = $spnb_model->getspnb();
//        $product_model = new Product();
//        $products = $product_model->getAll();

        $category_model = new Category();
        $categories = $category_model->getAll();

        $this->content = $this->render('views/spnb/index.php', [
            'spnb' => $spnbs,
            'categories' => $categories,
//            'products'=>$products,
        ]);
        require_once 'views/layouts/main.php';
    }
    public function select(){
        $product_model = new Product();
        $products = $product_model->getAll();
        $this->content = $this->render('views/spnb/select.php', [
            'products'=>$products,
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
            if (empty($this->error)) {
                $filename = '';
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

        $this->content = $this->render('views/spnb/select.php', [
            'categories' => $categories,
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
