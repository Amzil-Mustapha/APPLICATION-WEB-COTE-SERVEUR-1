<?php

class  Action
{
    private $idAct;
    private $nomAct;
    private $description;
    private $dateCreation;
    private $dateFin;
    private $montantAct;
    private $nomBeneficiare;
    private $dateDerniereDon;
    private $idType;
    private $idResp;

    public function __construct($idAct, $nomAct, $description, $dateCreation, $dateFin,$montantAct, $nomBeneficiare, $dateDerniereDon, $idType, $idResp) {
        $this->idAct = $idAct;
        $this->nomAct = $nomAct;
        $this->description = $description;
        $this->dateCreation = $dateCreation;
        $this->dateFin = $dateFin;
        $this->montantAct = $montantAct;
        $this->nomBeneficiare = $nomBeneficiare;
        $this->dateDerniereDon = $dateDerniereDon;
        $this->idType = $idType;
        $this->idResp = $idResp;
    }

    public function getIdAct()
    {
        return $this->idAct;
    }

    public function setIdAct($idAct)
    {
        $this->idAct = $idAct;
    }

    public function getNomAct()
    {
        return $this->nomAct;
    }

    public function setNomAct($nomAct)
    {
        $this->nomAct = $nomAct;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getDateCreation()
    {
        return $this->dateCreation;
    }

    public function setDateCreation($dateCreation)
    {
        $this->dateCreation = $dateCreation;
    }

    public function getDateFin()
    {
        return $this->dateFin;
    }

    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;
    }

    public function getMontantBeneficiare()
    {
        return $this->montantAct;
    }

    public function setMontantBeneficiare($montantAct)
    {
        $this->montantAct = $montantAct;
    }

    public function getNomBeneficiare()
    {
        return $this->nomBeneficiare;
    }

    public function setNomBeneficiare($nomBeneficiare)
    {
        $this->nomBeneficiare = $nomBeneficiare;
    }


    public function getDateDerniereDon()
    {
        return $this->dateDerniereDon;
    }

    public function setDateDerniereDon($dateDerniereDon)
    {
        $this->dateDerniereDon = $dateDerniereDon;
    }

    public function getIdType()
    {
        return $this->idType;
    }

    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    public function getIdResp()
    {
        return $this->idResp;
    }

    public function setIdResp($idResp)
    {
        $this->idResp = $idResp;
    }

}
