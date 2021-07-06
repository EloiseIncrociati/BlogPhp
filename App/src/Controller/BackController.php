<?php

namespace App\src\controller;

use App\config\Parameter;

class BackController extends Controller
{
    private function checkLoggedIn()
    {
        //On vérifie qu'on est bien connecté
        if(!$this->session->get('pseudo')) {
            $this->session->set('need_login', 'Vous devez vous connecter pour accéder à cette page');
            header('Location: ../public/index.php?route=login');
        } 
        return true;
    }

    public function presentation()
    {
        //Page d'accueil
        $users = $this->userManager->getUsers();

        return $this->view->render('presentation', [
            'users' => $users
        ]);
    }

    public function administration()
    {
        //Page d'administration, récupère les articles et commentaires + utilisateurs
        $articles = $this->articleManager->getArticles();
        $comments = $this->commentManager->getFlagComments();
        $users = $this->userManager->getUsers();

        return $this->view->render('administration', [
            'articles' => $articles,
            'comments' => $comments,
            'users' => $users
        ]);
    }

    public function addArticle(Parameter $post)
    {
        //Permet l'ajout d'article au clic bouton type submit
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Article');
            if(!$errors) {
                $this->articleManager->addArticle($post, $this->session->get('id'));
                $this->session->set('add_article', 'Le nouvel article a bien été ajouté');
                header('Location: ../public/index.php?route=administration');
            }
            return $this->view->render('add_article', [
                'post' => $post,
                'errors' => $errors
            ]);
        }
        return $this->view->render('add_article');
    }

    public function editArticle(Parameter $post, $articleId)
    {
        //Permet l'édition d'article au clic bouton type submit
        $article = $this->articleManager->getArticle($articleId);
        if($post->get('submit')) {
            $errors = $this->validation->validate($post, 'Article');
            if(!$errors) {
                $this->articleManager->editArticle($post, $articleId, $this->session->get('id'));
                $this->session->set('edit_article', 'L\' article a bien été modifié');
                header('Location: ../public/index.php?route=administration');
            }
            return $this->view->render('edit_article', [
                'post' => $post,
                'errors' => $errors
            ]);

        }
        $post->set('id', $article->getId());
        $post->set('title', $article->getTitle());
        $post->set('chapo', $article->getChapo());
        $post->set('content', $article->getContent());
        $post->set('author', $article->getAuthor());

        return $this->view->render('edit_article', [
            'post' => $post
        ]);
    }

    public function deleteArticle($articleId)
    {
        //Permet la suppression d'article au clic bouton type submit
        $this->articleManager->deleteArticle($articleId);
        $this->session->set('delete_article', 'L\' article a bien été supprimé');
        header('Location: ../public/index.php?route=administration');
    }

    public function unflagComment($commentId)
    {
        //Désignaler un commentaire
        $this->commentManager->unflagComment($commentId);
        $this->session->set('unflag_comment', 'Le commentaire a bien été désignalé');
        header('Location: ../public/index.php?route=administration');
    }

    public function deleteComment($commentId)
    {
        //Supprimer un commentaire
        $this->commentManager->deleteComment($commentId);
        $this->session->set('delete_comment', 'Le commentaire a bien été supprimé');
        header('Location: ../public/index.php');
    }

    public function profile()
    {
        //Vue du profil
        return $this->view->render('profile');
    }

    public function updatePassword(Parameter $post)
    {
        //Mise à jour du mot de passe
        if($post->get('submit')) {
            $this->userManager->updatePassword($post, $this->session->get('pseudo'));
            $this->session->set('update_password', 'Le mot de passe a été mis à jour');
            header('Location: ../public/index.php?route=profile');
        }
        return $this->view->render('update_password');
    }

    public function logout()
    {
        //se déconnecter, fait appel à logoutOrDelete
        $this->logoutOrDelete('logout');
    }

    public function deleteAccount()
    {
        //supprimer son propre compte
        $this->userManager->deleteAccount($this->session->get('pseudo'));
        $this->logoutOrDelete('delete_account');
    }

    public function deleteUser($userId)
    {
        //supprimer un utilisateur en tant qu'administrateur
        $this->userManager->deleteUser($userId);
        $this->session->set('delete_user', 'L\'utilisateur a bien été supprimé');
        header('Location: ../public/index.php?route=administration');
    }

    private function logoutOrDelete($param)
    {
        //Se déconnecter ou suppression du compte.
        $this->session->stop();
        $this->session->start();
        if($param === 'logout') {
            $this->session->set($param, 'À bientôt');
        } else {
            $this->session->set($param, 'Votre compte a bien été supprimé');
        }
        header('Location: ../public/index.php');
    }
}