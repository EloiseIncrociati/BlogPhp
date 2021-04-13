<?php

namespace App\src\Manager;

use App\config\Parameter;

class UserManager extends DatabaseManager
{
    public function register(Parameter $post)
    {
        $sql = 'INSERT INTO user (pseudo, password, createdAt) VALUES (?, ?, NOW())';
        $this->createQuery($sql, [$post->get('pseudo'), password_hash($post->get('password'), PASSWORD_BCRYPT)]);
    }

    public function checkUser(Parameter $post)
    {
        $sql = 'SELECT COUNT(pseudo) FROM user WHERE pseudo = ?';
        $result = $this->createQuery($sql, [$post->get('pseudo')]);
        $isUnique = $result->fetchColumn();
        if($isUnique) {
            return '<p>Le pseudo existe déjà</p>';
        }
    }
}