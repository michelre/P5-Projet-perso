<?php

require_once('MODEL/recetteMenuSalade.php');
require_once('BaseDao.php');


class RecetteMenuSaladeDao extends BaseDao
{

    public function findAll()
    {
        $result = $this->db->query("SELECT * FROM recetteMenuSalade");
        
        $recettes = array();
        while ($recette = $result -> fetch0bjet(Recette::class)){
            
        array_push($recettes, $recette)
        }
return $recettes
    }

    public function findById($recetteId)
    {
        return $this->db
            ->query('SELECT * FROM recetteMenuSalade WHERE id = ' . $recetteId)
            ->fetchObject(Recette::class);

}