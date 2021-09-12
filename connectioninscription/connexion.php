<?php
require_once "tools.php";
if ($_POST) {
    if (empty($_POST['email']) || empty($_POST['password'])) {
        echo "l'email et/ou le mot de passe est vide";
    } else {
        $check = executerequest(//va chercher dans la table l'entré dont l'email est égale à l'email envoyé
            "SELECT * FROM inscription WHERE email = :email",
            array(
                ':email' => $_POST['email']
            )
        );
        if ($check->rowCount() == 1) {//verifie si une entré existe
            $member = $check->fetch(PDO::FETCH_ASSOC);//convertie cette entré en tableau à parcourir
            if (password_verify($_POST['password'], $member['password'])) {//déhash le mot de passe
                echo 'oui';
                $_SESSION["membre"] = $member;//créer une session pour la personne connecter ^^
                var_dump($_SESSION);
            }
            else{
                echo 'vos identifiants sont incorrect';
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>connection</title>
</head>

<body>

    <form action="" method="post">
        <input type="email" name="email" placeholder="email">
        <input type="password" name="password" placeholder="mot de passe">
        <button type="submit">se connecter</button>
    </form>
</body>

</html>