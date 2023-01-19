<?php

include '../controller/Controller.php';

$o = new Controller();
$o->getActionByTypePro($_GET['val']);


$MTBT = $o->getTotalMontantByType(5);


$actions = [];
foreach ($o->allActiontByType as $ele) {
    $actions[] = ['id' => $ele->getIdAct(), 'nom' => $ele->getNomAct(), 'beneficiaire' => $ele->getNomBeneficiare()];
}

echo json_encode([$actions, $MTBT]);
