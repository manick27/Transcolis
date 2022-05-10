<?php

    function startConnection(){
        try{
            $db=new PDO('mysql:host=localhost;dbname=transcolis','root','');
            $db->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);//les noms des champs seront enn caractère miniscules
            $db->setAttribute(PDO::ATTR_ERRMODE , PDO::ERRMODE_EXCEPTION);//les erreurs lanceront des exceptions
        }catch(Exception $e){
            echo'une erreur est survenue';
            die();
        }

        return $db;
    }

    function stopConnection($db)
    {
        $db=null;
    }

    function ajouterClient($nom, $prenom, $email, $tel, $cni, $region, $ville, $matricule, $pass){
        //appel de la fonction de connexion
        $db = startConnection();
 
        //enregistrement du client dans la base de donnees
        try{
            $insert = $db->prepare("INSERT INTO client (nom, prenom, email, tel, numcni, region, ville, matricule, motdepasse) VALUES('$nom', '$prenom', '$email', '$tel', '$cni', '$region', '$ville', '$matricule', '$pass')");
            $insert->execute();
        }catch(Exception $e){
            echo'Une erreure est survenue lors de l\'insertion';
        }
        stopConnection($db);
        return true;
     }

     function connecterClient($username, $password) {
        $db = startConnection();
        try{
            $select = $db->prepare("SELECT * FROM client WHERE matricule='$username' AND motdepasse='$password'");
            $select->execute();
            stopConnection($db);
        }catch(Exception $e){
            
        }
        while($ligne = $select->fetch(PDO::FETCH_OBJ)) {
            if($ligne->matricule == $username && $ligne->motdepasse == $password){
                $_SESSION['matricule'] = $username;
            return true;
            }
        }
        return false;
    }

    function verifCon(){
        return isset($_SESSION['matricule']);
    }

    function ajouterTrans($des, $poids, $taille, $valeur, $tof, $nomPre, $telDes, $mailDes, $regDes, $vilDes){
        $db = startConnection();
        try{
            $id = $_SESSION['matricule'];
            if($valeur > 100000){
                $montant = ($valeur*5)/100;
            }
            else{
                $montant = ($valeur*10)/100;
            }
            // $date = date_timestamp_get();
            $inserT = $db->prepare("INSERT INTO transaction (`montant`, `nom_prenom_desti`, `ville_desti`, `tel_desti`, `email_desti`, `matricule`) VALUES ('$montant', '$nomPre', '$vilDes', '$telDes', '$mailDes', '$id')");
            $inserT->execute();
            // $insertP = $db->prepare("INSERT INTO produit (`poids`, `taille`, `valeur`, `description`, `num_ag`, `num_trans`) VALUES ('$poids', '$taille', '$valeur', '$des', '1', '19')");
            // $insertP->execute();
            header('location: transactions.php');
        }catch(Exception $e){
            echo'Erreur survenu lors la validation';
        }
        startConnection($db);
    }

    function getTrans(){
        $id=$_SESSION['matricule'];
        $db = startConnection();
        $select = $db->prepare("SELECT * FROM transaction WHERE matricule='$id'");
        $select->execute();
        stopConnection($db);
        return $select;
    }

    function getClient(){
        $id=$_SESSION['matricule'];
        $db = startConnection();
        $select = $db->prepare("SELECT * FROM client WHERE matricule='$id'");
        $select->execute();
        stopConnection($db);
        return $select;
    }

    function affClient(){
        // $client=getClient();
        // while($ligne = $client->fetch(PDO::FETCH_OBJ)) {
        //     echo 'Matricule: '.$ligne->matricule.'</br>';
        //     echo 'Nom: '.$ligne->nom.'</br>';
        //     echo 'Prenom: '.$ligne->prenom.'</br>';
        //     echo 'Numéro de téléphone: '.$ligne->tel.'</br>';
        //     echo 'Region: '.$ligne->region.'</br>';
        //     echo 'Ville: '.$ligne->ville.'</br>';
        // }
    }
    

?>