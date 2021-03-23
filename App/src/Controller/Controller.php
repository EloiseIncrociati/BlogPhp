<?php

namespace App\src\Controller;

use App\src\Manager\ArticleManager;
use App\src\Manager\CommentManager;
use App\src\Model\View;

abstract class Controller
{
    protected $articleManager;
    protected $commentManager;
    protected $view;

    public function __construct()
    {
        $this->articleManager = new ArticleManager();
        $this->commentManager = new CommentManager();
        $this->view = new View();
    }
}