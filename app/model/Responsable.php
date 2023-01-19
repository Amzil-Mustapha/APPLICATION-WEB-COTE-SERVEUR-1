<?php

class  Responsable
{
    private $idResp;
    private $nomResp;
    private $prenomResp;
    private $emailResp;
    private $passResp;

    public function __construct($idResp, $nomResp, $prenomResp, $emailResp, $passResp) {
        $this->idResp = $idResp;
        $this->nomResp = $nomResp;
        $this->prenomResp = $prenomResp;
        $this->emailResp = $emailResp;
        $this->passResp = $passResp;
    }

    // Getters ----------------

    public function getId()
    {
        return $this->idResp;
    }

    public function getNom()
    {
        return $this->nomResp;
    }

    public function getPrenom()
    {
        return $this->prenomResp;
    }

    public function getEmail()
    {
        return $this->emailResp;
    }

    public function getPass()
    {
        return $this->passResp;
    }
    // Setters ----------------

    public function setId($a)
    {
        $this->idResp = $a;
    }

    public function setNom($a)
    {
        $this->nomResp = $a;
    }

    public function setPrenom($a)
    {
        $this->prenomResp = $a;
    }

    public function setEmail($a)
    {
        $this->emailResp = $a;
    }

    public function setPass($a)
    {
        $this->passResp = $a;
    }

}
