<?php

class  Donateur
{
    private $idD;
    private $nomD;
    private $prenomD;
    private $emailD;
    private $passD;

    public function __construct($idD, $nomD, $prenomD, $emailD, $passD) {
        $this->idD = $idD;
        $this->nomD = $nomD;
        $this->prenomD = $prenomD;
        $this->emailD = $emailD;
        $this->passD = $passD;
    }

    // Getters ----------------

    public function getId()
    {
        return $this->idD;
    }

    public function getNom()
    {
        return $this->nomD;
    }

    public function getPrenom()
    {
        return $this->prenomD;
    }

    public function getEmail()
    {
        return $this->emailD;
    }

    public function getPass()
    {
        return $this->passD;
    }
    // Setters ----------------

    public function setId($a)
    {
        $this->idD = $a;
    }

    public function setNom($a)
    {
        $this->nomD = $a;
    }

    public function setPrenom($a)
    {
        $this->prenomD = $a;
    }

    public function setEmail($a)
    {
        $this->emailD = $a;
    }

    public function setPass($a)
    {
        $this->passD = $a;
    }

}
