<?php

require_once('MODEL/recetteBurgerBoeuf.php');
require_once('BaseDao.php');


class RecetteBurgerBoeufDao extends BaseDao
{

    public function findAll()
    {
        $result = $this->db->query("SELECT * FROM recetteBurgerBoeuf");
        
        $recettes = array();
        while ($recette = $result -> fetch0bjet(Recette::class)){
            
        array_push($recettes, $recette)
        }
return $recettes
    }

    public function findById($recetteId)
    {
        return $this->db
            ->query('SELECT * FROM recetteBurgerBoeuf WHERE id = ' . $recetteId)
            ->fetchObject(Recette::class);

}
}