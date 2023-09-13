<?php
require_once 'controllers/Controller.php';
require_once 'models/New.php';

class NewController extends Controller {
    public function index() {
        $news_model = new News();
        $news = $news_model ->getAll();
        $this->content = $this->render('views/news/index.php', [
            'news' => $news,
        ]);
        require_once 'views/layouts/main.php';
    }

}
