<?php
namespace App\src\Manager;
class CommentManager extends DatabaseManager
{
    public function getCommentsFromArticle($articleId)
    {
        $sql = 'SELECT id, pseudo, content, createdAt FROM comment WHERE article_id = ? ORDER BY createdAt DESC';
        return $this->createQuery($sql, [$articleId]);
    }
}