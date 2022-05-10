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
			 <h1>Ici la liste de vos différents bordoreaux du plus anciens au plus récents</h1>
        </section>
    </section>
    <?php
        require_once("footer.php");
        }
    ?>
</body>
</html>