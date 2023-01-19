<?php
    session_start();
include  dirname(__DIR__).'\\app\\controller\\Controller.php';

$o = new Controller();
$o->getAllDonateur();
$message = '';
$error = false;

if (isset($_POST['submit'])) {
    if (
        empty($_POST['nom']) || 
        empty($_POST['email']) || 
        empty($_POST['pass']) || 
        empty($_POST['id']) ||
        empty($_POST['prenom']) || 
        empty($_POST['conPass'])
        ) 
    {
        $message = '--All Feild Are Required';
    }else{
        if ($_POST['conPass'] != $_POST['pass']) {
            $message = '-- The Password Not Confirmed';
        }else
        {
            foreach ($o->allDonateur as $ele) {
                if ($ele->getId() == $_POST['id']) {
                    
                    $error = true;
                    $message = '-- This ID Is Booked, Please Entry An Other ID';
                }
            }

            if (!$error) {
                $o->setDonateur($_POST['id'],$_POST['nom'], $_POST['prenom'], $_POST['email'], $_POST['pass']);
                        $message = '-- You Have Been Added Successfully';
            }

        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Inscrire - Donateur</title>
</head>
<body>
    <h1>-- Inscrire - Donateur --</h1>

<pre>

    <form method="post">
    ID...........:            <input type="number" name="id">

    NOM..........:            <input type="text" name="nom">

    PRENOM.......:            <input type="text" name="prenom">

    EMAIL........:            <input type="text" name="email">

    MOT DE PASSE.:            <input type="password" name="pass">

    CONFIRME.....:            <input type="password" name="conPass">

    <button type="submit" name="submit">Inscrire</button>
    
    <?= $message ?>
    </form>
</pre>
</body>
</html>