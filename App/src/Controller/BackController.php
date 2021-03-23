<?php

namespace App\src\Controller;

class BackController extends Controller
{
    public function addArticle($post)
    {
        if(isset($post['submit'])) {
            $this->articleManager->addArticle($post);
            header('Location: ../../index.php');
        }
        return $this->view->render('add_article', [
            'post' => $post
        ]);
    }
}