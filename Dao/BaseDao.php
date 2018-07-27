<?php


class BaseDao
{
    protected $db;

    public function __construct()
    {
		$this->db =new PDO('mysql:host=db747064700.db.1and1.com;dbname=db747064700;charset=utf8', 'dbo747064700', '@Eristoff88');
    }


}
