<?php

namespace App\Controller;

use App\Dao\CommentDao;

class FrontendController
{
    private $commentDao;


    public function __construct()
    {
        $this->commentDao = new CommentDao();
    }

    public function home()
    {
        require(__DIR__ . '/../view/base.php');
    }

    public function menus($type)
    {
        $recettes = [];
        if ($type === 'burgers') {
            require(__DIR__.'/../view/menu_burger.php');
        }
        if ($type === 'salades') {
            require(__DIR__.'/../view/menu_salade.php');
        }
    }

    public function burgers($type)
    {
        $recettes = [];
        if ($type === 'boeuf') {
            require(__DIR__.'/../view/burgers_boeuf.php');
        }
        if ($type === 'poulet') {
            require(__DIR__.'/../view/burgers_poulet.php');
        }
    }

    public function drinks()
    {
        require(__DIR__.'/../view/boissons.php');
    }

    public function desserts()
    {
        require(__DIR__.'/../view/desserts.php');
    }

    public function avis()
    {
        require(__DIR__.'/../view/avis.php');
    }

    public function addComment($Id, $formData)
    {
        $this->commentDao->create($formData);
        header('Location: ?action=base');
    }
}
