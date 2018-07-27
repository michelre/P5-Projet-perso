<?php

namespace App\Dao;


class RecetteDao extends BaseDao
{

    public function findAll()
    {
        $result = $this->db->query("SELECT * FROM recetteBurgerBoeuf");

        $recettes = array();
        while ($recette = $result->fetch0bjet(Recette::class)) {

            array_push($recettes, $recette);
        }
        return $recettes;
    }

    public function findById($recetteId)
    {
        return $this->db
            ->query('SELECT * FROM recetteBurgerBoeuf WHERE id = ' . $recetteId)
            ->fetchObject(Recette::class);

    }
}
