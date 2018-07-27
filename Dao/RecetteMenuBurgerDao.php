<?php

require_once('MODEL/recetteMenuBurger.php');
require_once('BaseDao.php');


class RecetteMenuBurgerDao extends BaseDao
{

    public function findAll()
    {
        $result = $this->db->query("SELECT * FROM recetteMenuBurger");
        
        $contenus = array();
        while ($contenu = $result -> fetch0bjet(Contenu::class)){
            
        array_push($contenus, $contenu)
        }
return $recettes
    }

    public function findById($contenuId)
    {
        return $this->db
            ->query('SELECT * FROM recetteMenuBurger WHERE id = ' . $contenuId)
            ->fetchObject(Contenu::class);

}