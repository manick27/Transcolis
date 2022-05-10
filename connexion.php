<?php

    session_start();
    require_once "functions.php";
    $state = 0;

    if(isset($_GET['decon'])){
        session_destroy();
    }
    if(isset($_POST['connecte'])){
        if(connecterClient($_POST['matricule'], $_POST['password'])){
            header("Location: monCompte.php");
        }
        else{
            $state = 1;
        }
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se connecter</title>
    <link rel="stylesheet" href="Css/form.css">
    <link rel="stylesheet" href="Css/background.css">
	<link href="Css/fontawesome/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
    <div id="containt">
        <div id="containt2">
            <div id="connexion">
                <div class="icon">
                    <i class="fas fa-user-circle" style="font-size: 7em; color: white"></i>
                </div>
                <?php
                     if($state == 1){
                ?>
                    <div style="color: red; width: 100%; heigth: auto">
                        La tentative de connexion a échoué !
                    </div>
                <?php
                    }
                ?>
                <form action="connexion.php" method="POST">
                    <input type="text" id="matricule" name="matricule" placeholder="matricule"><br><br>
                    <input type="password" name="password" id="password" placeholder="mot de passe"><br><br>
                    <input type="submit" name="connecte" value="Se connecter">
                </form>
                <span class="ins"><a href="inscription.php"><i class="fas fa-user-edit">Inscription</i></a></span>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/formVisi.js"></script>
</body>
</html>