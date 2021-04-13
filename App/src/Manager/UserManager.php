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
}