<?php

class RecetteMenuBurger
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
    public function getcontent()
    {
        return $this->recette;
    }

    /**
     * @param mixed $id
     */
    public function setcontent($content)
    {
        $this->id = $content;
    }
}