<?php

class RecetteBurgerBoeuf
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
        return $this->recetteBoeuf;
    }

    /**
     * @param mixed $id
     */
    public function setrecette($recetteBoeuf)
    {
        $this->id = $recetteBoeuf;
    }
}