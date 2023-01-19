<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
    <h1>-- ACCUEIL --</h1>

<pre>
    ID       :           <?= $_SESSION['respId']?>

    NOM      :           <?= $_SESSION['respName']?>

    PRENOM   :           <?= $_SESSION['respLastName']?>

    EMAIL    :           <?= $_SESSION['respEmail']?>

    PASSWORD :           <?= $_SESSION['respPass']?>
</pre>
</body>
</html>