<?php

namespace App\Dao;


class CommentDao extends BaseDao
{

    public function findAll()
    {
    }

    public function findById($commentId)
    {
         return $this->db
            ->query('SELECT * FROM comment WHERE id = ' . $commentId)
            ->fetchObject(Comment::class);
    }

    public function create($commentId,$formData)
    {
        $stmt = $this->db->prepare('INSERT INTO comment(author, comment, date) VALUES(?, ?, NOW())');
        $stmt->bindParam('sss', $formData['author'], $formData['comment']);
        $stmt->execute();
    }
}
