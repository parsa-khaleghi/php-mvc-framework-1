<?php

namespace App\Controllers;

use Core\Controller;

class ArticlesController extends Controller
{
    public function indexAction()
    {
        $this->view->setSiteTitle('Articles');
        $this->view->render();
    }
}