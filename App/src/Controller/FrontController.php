<?php

namespace App\src\Controller;
use App\src\Manager\ArticleManager;
use App\src\Manager\CommentManager;

class FrontController
{
    private $articleManager;
    private $commentManager;

    public function __construct()
    {
        $this->articleManager = new ArticleManager();
        $this->commentManager = new CommentManager();
    }

    public function home()
    {
        $articles = $this->articleManager->getArticles();
        require 'views/home.php';
    }

    public function article($articleId)
    {
        $article = $this->articleManager->getArticle($articleId);
        $comments = $this->commentManager->getCommentsFromArticle($articleId);
        require 'views/single.php';
    }
}