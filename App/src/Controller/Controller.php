<?php

namespace App\src\controller;

use App\config\Request;
use App\src\Manager\ArticleManager;
use App\src\Manager\CommentManager;
use App\src\model\View;

abstract class Controller
{
    protected $articleManager;
    protected $commentManager;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;

    public function __construct()
    {
        $this->articleManager = new ArticleManager();
        $this->commentManager = new CommentManager();
        $this->view = new View();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}