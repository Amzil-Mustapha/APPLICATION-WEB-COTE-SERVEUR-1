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



    Go To: <ul><li><a href="action.php">Action Par Type</a></li><li><a href=".php">Inscrire - Donateur</a></li></ul>
</pre>
</body>
</html>