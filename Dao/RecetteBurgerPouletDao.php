<?php

require_once('MODEL/recetteBurgerPoulet.php');
require_once('BaseDao.php');


class RecetteBurgerPouletDao extends BaseDao
{

    public function findAll()
    {
        $result = $this->db->query("SELECT * FROM recetteBurgerPoulet");
        
        $recettes = array();
        while ($recette = $result -> fetch0bjet(Recette::class)){
            
        array_push($recettes, $recette)
        }
return $recettes
    }

    public function findById($recetteId)
    {
        return $this->db
            ->query('SELECT * FROM recetteBurgerPoulet WHERE id = ' . $recetteId)
            ->fetchObject(Recette::class);

}