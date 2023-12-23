<?php
require_once 'controllers/Controller.php';
require_once 'models/Product.php';
require_once 'models/News.php';


class NewController extends Controller {
    public function showAll() {

        $news_model = new News();
        $news = $news_model->Allnews();
        $this->content = $this->render('views/news/allnews.php', [
            'news' => $news,
        ]);
        require_once 'views/layouts/main.php';
    }

    public function detail() {
        if (!isset($_GET['id']) || !is_numeric($_GET['id'])) {
            $_SESSION['error'] = 'ID ko hợp lệ';
            $url_redirect = $_SERVER['SCRIPT_NAME'] . '/';
            header("Location: $url_redirect");
            exit();
        }
        $id = $_GET['id'];
        $news_model = new News();
        $news = $news_model->getById($id);
        $this->content = $this->render('views/news/detail.php', [
            'news' => $news,
        ]);
        require_once 'views/layouts/main.php';
    }




}
