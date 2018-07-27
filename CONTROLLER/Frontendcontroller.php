<?php

require_once('DAO/CommentDao.php)');

class FrontendController
{
	private $commentDao;
	
	
	
	public function __construct()
	{
		$this->commentDao= new CommentDao();
	}
	
	    public function addComment($Id, $formData)
    {
        $this->commentDao->create($formData);
       header('Location: ?action=base');
    }
}