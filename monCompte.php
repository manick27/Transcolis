<?php

    session_start();
    require_once "functions.php";
    $state = 0;

    if(!verifCon()){
        header("Location: connexion.php");
    }
    else{
        require_once "header.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Personnel</title>
    <link rel="stylesheet" href="Css/background1.css">
</head>
<body>
    <section id="section">
        <section id="containt">
            <?php 
                $client=getClient();
                while($ligne = $client->fetch(PDO::FETCH_OBJ)) {
                    echo '<h1>'.$ligne->nom.'  '.$ligne->prenom.'</h1>';
                }
            ?>
            <h1>Bienvenue dans votre espace Personnel</h1>
            <div id="profil">
			    <i class="fas fa-user-circle profil" style="font-size: 1000%; color: green;"></i><br><br>
                <a href="#">Modifier sa photo de profil</a>
            </div>
            <div>
                <?php 
                    // affClient(); 
                    $client=getClient();
                    while($ligne = $client->fetch(PDO::FETCH_OBJ)) {
                        echo 'Matricule: '.$ligne->matricule.'</br></br>';
                        echo 'Nom: '.$ligne->nom.'</br></br>';
                        echo 'Prenom: '.$ligne->prenom.'</br></br>';
                        echo 'Numéro de téléphone: '.$ligne->tel.'</br></br>';
                        echo 'Region: '.$ligne->region.'</br></br>';
                        echo 'Ville: '.$ligne->ville.'</br></br>';
                    }
                ?>
            </div>       
        </section>
    </section>
    <?php
        require_once("footer.php");
        }
    ?>
</body>
</html>