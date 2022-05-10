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
            <h1>Ici la liste de vos différentes transactions du plus anciens au plus récents</h1>
            <?php 
                $trans = getTrans();
                ?>
                    <table border='1' cellspacing='0'>
                        <thead>
                            <tr>
                                <th>Id Trans</th>
                                <th>Montant Trans</th>
                                <th>Date&Heure</th>
                                <th>Noms & prenoms Recep</th>
                                <th>Ville de desti</th>
                            </tr>
                        </thead>
                <?php
                while($t=$trans->fetch(PDO::FETCH_OBJ)){
                    ?>
                        <tr>
                            <td><?php echo $t->num_trans ?></td>
                            <td><?php echo $t->montant ?></td>
                            <td><?php echo $t->date_trans ?></td>
                            <td><?php echo $t->nom_prenom_desti ?></td>
                            <td><?php echo $t->ville_desti ?></td>
                        </tr>
                        <?php
                }
                ?>
                    </table>
        </section>
    </section>
    <?php
        require_once("footer.php");
        }
    ?>
</body>
</html>