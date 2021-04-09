<?php

namespace App\src\Controller;

class FrontController extends Controller
{
    public function home()
    {
        $articles = $this->articleManager->getArticles();
        return $this->view->render('home', [
           'articles' => $articles
        ]);
    }

    public function article($articleId)
    {
        $article = $this->articleManager->getArticle($articleId);
        $comments = $this->commentManager->getCommentsFromArticle($articleId);
        return $this->view->render('single', [
            'article' => $article,
            'comments' => $comments
        ]);
    }
}