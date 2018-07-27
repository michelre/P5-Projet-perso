<?php

require_once('model/Comment.php');
require_once('BaseDao.php');


class CommentDao extends BaseDao
{

    public function findAll()
    {


    }

    public function findById($commentId)
    {
         return $this->db
            ->query('SELECT * FROM comment WHERE id = ' . $commentId)
            ->fetch_object(Comment::class);
    }

    public function create($commentId,$formData)
    {
        $stmt = $this->db->prepare('INSERT INTO comment(author, comment, date) VALUES(?, ?, NOW())');
        $stmt->bind_param('sss', $formData['author'], $formData['comment']);
        $stmt->execute();
    }
}
