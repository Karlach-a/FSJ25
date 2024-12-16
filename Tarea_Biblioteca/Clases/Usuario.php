<?php

Class Usuario{
    private $id;
    private $nombre;
    

    public function __construct($id,$nombre)
{
    $this->id=$id;
    $this->nombre=$nombre;
    
}

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of nombre
     */ 
    public function getNombre()
    {
        return $this->nombre;
    }

   
}
?>