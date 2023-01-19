<?php

include '../controller/Controller.php';

$o = new Controller();
$o->getActionByTypePro($_GET['val']);


$actions = [];
foreach ($o->allActiontByType as $ele) {
    $actions[] = ['id' => $ele->getIdAct(), 'nom' => $ele->getNomAct()];
}

echo json_encode($actions);