<?php
require_once 'controllers/Controller.php';
require_once 'models/Assess.php';

class AssessController extends Controller
{
    public function index()
    {
        $assess_model = new Assess();
        $assess = $assess_model->getAll();
        $this->content = $this->render('views/assess/index.php', [
            'assess' => $assess,

        ]);
        require_once 'views/layouts/main.php';
    }
}
