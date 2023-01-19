<?php

class Type
{
    private $idType;
    private $nomType;

    public function __construct($idType, $nomType) {
        $this->idType = $idType;
        $this->nomType = $nomType;
    }

    // Getters ----------------
    public function getId()
    {
        return $this->idType;
    }

    public function getNom()
    {
        return $this->nomType;
    }

    // Setters ----------------
    public function setId($a)
    {
        $this->idType = $a;
    }

    public function setNom($a)
    {
        $this->nomType = $a;
    }
}