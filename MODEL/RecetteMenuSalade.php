<?php

class RecetteMenuSalade
{

    private $id;
    private $recette;
    
        /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }
    
        /**
     * @return mixed
     */
    public function getrecette()
    {
        return $this->recette;
    }

    /**
     * @param mixed $id
     */
    public function setrecette($recette)
    {
        $this->id = $recette;
    }
}