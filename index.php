<?php
session_start();
include  dirname(__FILE__).'\\app\\controller\\Controller.php';

$o = new Controller();
$o->getAllResponsable();

$message = '';


if (isset($_POST['submit'])) {
    if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['password'])) {
        $message = '--All Feild Are Required';
    }else{
        
        foreach ($o->allResponsable as $ele) 
        {
            if ($ele->getNom() == $_POST['name'] && $ele->getEmail() == $_POST['email'] &&  $ele->getPass() == $_POST['password']) 
            {
                $_SESSION['respId'] = $ele->getId();
                $_SESSION['respName'] = $ele->getNom();
                $_SESSION['respLastName'] = $ele->getPrenom();
                $_SESSION['respEmail'] = $ele->getEmail();
                $_SESSION['respPass'] = $ele->getPass();

                header('location:view/home.php');
                die();
            }else{
                $message = '--Incorect Information Please Check Your Information And Try Again';
            }

        }
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
</head>
<body>
    <h1>Login Page</h1>
    <pre>
    <form action="" method="post">

        Full Name:                   <input type="text" name="name">

        Email:                       <input type="text" name="email">

        Password:                    <input type="password" name="password">


        <button type="submit" name="submit">Login</button>
    </form>

    <?= $message ?>
    </pre>
</body>
</html>