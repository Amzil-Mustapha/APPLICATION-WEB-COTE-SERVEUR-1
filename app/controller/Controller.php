<?php

include dirname(__DIR__) . '../model/Db.php';
include dirname(__DIR__) . '../model/Action.php';
include dirname(__DIR__) . '../model/Don.php';
include dirname(__DIR__) . '../model/Donateur.php';
include dirname(__DIR__) . '../model/Type.php';
include dirname(__DIR__) . '../model/Responsable.php';

class Controller extends Db
{
    public $allResponsable = [];
    public $allActiont = [];
    public $allActiontByType = [];
    public $allDon = [];
    public $allDonateur = [];
    public $allType = [];

    public function getAllResponsable()
    {
        $db = new Db();
        $db->connect();
        $rs = $db->selectQuery("SELECT * FROM responsable");

        while ($row = $rs->fetch()) {
            $resposable = new Responsable($row['idResp'], $row['nomResp'], $row['prenomResp'], $row['emailResp'], $row['passResp']);

            $this->allResponsable[] = $resposable;
        }
    }

    public function getAllDonateur()
    {
        $db = new Db();
        $db->connect();
        $rs = $db->selectQuery("SELECT * FROM donateur");

        while ($row = $rs->fetch()) {
            $donateur = new Donateur($row['idD'], $row['nomD'], $row['prenomD'], $row['emailD'], $row['passD']);

            $this->allDonateur[] = $donateur;
        }
    }

    public function setDonateur($id, $nom, $prenom, $email, $pass)
    {
        $db = new Db();
        $db->connect();
        $db->updateQuery("INSERT INTO donateur VALUES ($id, '$nom', '$prenom', '$email', '$pass')");
    }

    public function getAllType()
    {
        $db = new Db();
        $db->connect();
        $rs = $db->selectQuery("SELECT * FROM type");

        while ($row = $rs->fetch()) {
            $type = new Type($row['idType'], $row['nomType']);
            $this->allType[] = $type;
        }
    }

    public function getActionByTypePro($a)
    {
        $db = new Db();
        $db->connect();
        $rs = $db->selectQueryPro("actionByType($a)");

        while ($row = $rs->fetch()) {
            $action = new Action($row['idAct'], $row['nomAct'], $row['description'], $row['dateCreation'], $row['dateFin'], $row['montantAct'], $row['nomBeneficiare'], $row['dateDerniereDon'], $row['idType'], $row['idResp']);

            $this->allActiontByType[] = $action;
        }
    }

    public function getTotalMontantByType($idType)
    {
        $db = new Db();
        $db->connect();

        $rs = $db->selectQuery("SELECT func_q3($idType)");

        return $rs->fetch()[0];
    }
}