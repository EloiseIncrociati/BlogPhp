<?php

namespace App\src\controller;

use App\config\Request;
use App\src\Manager\ArticleManager;
use App\src\Manager\CommentManager;
use App\src\Constraint\Validation;
use App\src\Manager\UserManager;
use App\src\Model\View;

abstract class Controller
{
    protected $articleManager;
    protected $commentManager;
    protected $userManager;
    protected $view;
    private $request;
    protected $get;
    protected $post;
    protected $session;
    protected $validation;

    public function __construct()
    {
        $this->articleManager = new ArticleManager();
        $this->commentManager = new CommentManager();
        $this->userManager = new UserManager();
        $this->view = new View();
        $this->validation = new Validation();
        $this->request = new Request();
        $this->get = $this->request->getGet();
        $this->post = $this->request->getPost();
        $this->session = $this->request->getSession();
    }
}