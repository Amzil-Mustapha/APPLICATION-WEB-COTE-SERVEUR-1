<?php
session_start();
include dirname(__DIR__) . '\\app\\controller\\Controller.php';

$o = new Controller();
$o->getAllType();

$types = [];

foreach ($o->allType as $ele) {
    $types[] = $ele->getId();
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Acions</title>
</head>

<body>
    <h1>-- Action Par Type --</h1>
    <pre>

    Type........:             <select name="type" id="type" onchange="selectChange(this.value)">
        <option value="default">Select Type Id</option>
    <?php
    foreach ($types as $e) {
        echo "<option value='{$e}'>ID : $e</option>";
    }

    ?>
    </select>

    Actions:<ul id="action"></ul>

    Montant Total Par Type: <input type="text" id="mtbt" disabled>

    </pre>

    <script src="../src/js/jquery-3.6.3.min.js"></script>
    <script src="../src/js/script.js"></script>
</body>

</html>