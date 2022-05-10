<?php

    session_start();
    require_once "functions.php";
    $state = 0;

    if(!verifCon()){
        header("Location: connexion.php");
    }
    else{
        require_once "header.php";

        if(isset($_POST['valider'])){

            $des = $_POST['desc'];
            $poids = $_POST['poids'];
            $taille = $_POST['taille'];
            $valeur = $_POST['valeur'];
            $tof = $_POST['image'];
            $nomPre = $_POST['nom&pre'];
            $telDes = $_POST['tesdes'];
            $mailDes = $_POST['emaildes'];
            $regDes = $_POST['select1'];
            $vilDes = $_POST['select2'];

            ajouterTrans($des, $poids, $taille, $valeur, $tof, $nomPre, $telDes, $mailDes, $regDes, $vilDes);

        }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Espace Personnel</title>
    <link rel="stylesheet" href="Css/form.css">
    <link rel="stylesheet" href="Css/background1.css">
</head>
<body>
    <section id="section">
        <?php 
            // require_once "aside.php";
        ?>
        <section id="containt">
            <h1>Veuillez remplir ce formulaire d'envoie</h1>
            <div id="produit">
                <form action="enColis.php" method="POST">
                    <div id="one">
                        <fieldset>
                            <legend>Informations sur le produit</legend>
                            <textarea name="desc" id="desc" placeholder="Description"></textarea><br>
                            <input name="poids" type="number" id="poids" placeholder="Poids (en Gramme)"><br>
                            <input name="taille" type="text" id="taille" placeholder="Taille (Ex: XX-XX-XX)"><br>
                            <input name="valeur" type="number" id="valeur" placeholder="Valeur marchande(en Fcfa)" required><br>
                            <input name="image" type="file" id="image">
                            <div id="img"></div>
                        </fieldset>
                    </div>
                    <div>
                        <fieldset>
                            <legend>Information à la reception</legend>
                            <input type="text" name="nom&pre" id="nom&pre" placeholder="Noms&prenoms du destinataire" required>
                            <input type="tel" name="tesdes" id="teldes" placeholder="Numero de telephone du destinataire" required>
                            <input type="email" name="emaildes" id="emaildes" placeholder="Adresse mail du destinataire" required>
                            <label for="sel1">Selectionner votre region</label>
                        <select name="select1" id="select1" size="1" onchange="ville()">
                            <option value="">Votre choix</option>
                            <option value="Adamaoua">Adamaoua</option>
                            <option value="Centre">Centre</option>
                            <option value="Est">Est</option>
                            <option value="Extrème nord">Extrème nord</option>
                            <option value="Littoral">Littoral</option>
                            <option value="Nord">Nord</option>
                            <option value="Nord-Ouest">Nord-Ouest</option>
                            <option value="Ouest">Ouest</option>
                            <option value="Sud">Sud</option>
                            <option value="Sud-Ouest">Sud-Ouest</option>
                        </select>
                        <label>Selectionner une ville</label>
                        <select name="select2" id="select2" size="1">
                        </select>
                        <div class="erreur" id="erVi">Choisissez une ville et une region</div><br>
                        </fieldset>
                    </div><br>
                    <input type="submit" value="Valider" name="valider">
                </form>
            </div>
        </section>
    </section>
    <?php
        require_once("footer.php");
        }
    ?>
    <script type="text/javascript" src="js/select.js"></script>
</body>
</html>