<?php
    session_start();
    require_once("functions.php");

    if(isset($_POST["inscrire"])){

        $nom=$_POST["nom"];
        $prenom=$_POST["prenom"];
        $email=$_POST["email"];
        $tel=$_POST["tel"];
        $cni=$_POST["cni"];
        $region=$_POST["select1"];
        $ville=$_POST["select2"];
        $matricule=$_POST["mat"];
        $password=$_POST["password"];
        
        ajouterClient($nom, $prenom, $email, $tel, $cni, $region, $ville, $matricule, $password);

        $state = 0;
        // if(isset($_POST['connecte'])){
            if(connecterClient($matricule, $password)){
                header("Location: monCompte.php");
            }
            else{
                $state = 1;
            }
        // }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>S'inscrire</title>
    <link rel="stylesheet" href="Css/form.css">
    <link rel="stylesheet" href="Css/background.css">
	<link href="Css/fontawesome/fontawesome/css/all.css" rel="stylesheet">
</head>
<body>
    <?php
        // require_once("functions.php");
    ?>
    <div id="containt1">
        <div id="containt2">
            <div id="inscription">
                <div class="icon"><i class="fas fa-user-edit" style="font-size: 7em; color: white"></i></div>
                <form action="inscription.php" method="POST">
                    <fieldset id="ch1" >
                        <legend>Infos Personnelles</legend>
                        <input required type="text" id="nom" name="nom" placeholder="Entrer votre nom">
                        <div class="erreur" id="erNo">Entrer 4 caracteres ou plus</div><br>
                        <input required type="text" id="prenom" name="prenom" placeholder="Entrer votre prenom">
                        <div class="erreur" id="erPr">Entrer 3 caracteres ou plus</div><br>
                        <input required type="email" id="email" name="email" placeholder="Entrer votre email">
                        <div class="erreur" id="erEm">Email invalid</div><br>
                        <input required type="tel" id="tel" name="tel" placeholder="Entre votre numero de telephone">
                        <div class="erreur" id="erTe">Entrer un numero Camerounais</div><br>
                        <input required type="number" id="cni" name="cni" placeholder="Entre votre numero de cni">
                        <div class="erreur" id="erCn">Entrer 9 chiffres</div><br>
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
                    <fieldset id="ch2">
                        <legend>Infos pour la Connexion</legend>
                        <input required type="text" id="mat" name="mat" placeholder="Definissez vous un matricule">
                        <div class="erreur" id="erMa">Entrer 4 caracteres ou plus</div><br>
                        <input required type="password" id="password" name="password" placeholder="Definissez un mot de passe">
                        <div class="erreur" id="erPa">Entrer 8 caracteres et 1 chiffre ou plus</div><br>
                        <input type="password" id="password2" name="password2" placeholder="Confirmez mot de passe">
                    </fieldset>
                    <!-- <input type="reset" value="Effacer" > -->
                    <input type="submit" name="inscrire" id="inscrire" value="S'inscrire">
                    <!-- <a href="" id="sui">Suivant</a><br> -->
                    <br><span class="con"><a href="connexion.php"><i class="fas fa-user-circle">Connexion</i></a></span>
                </form>
                <script src="js/select.js"></script>
                <script src="js/testForm.js"></script>
            </div>
        </div>
    </div>
    <script type="text/javascript" src="js/formVisi.js"></script>
</body>
</html>