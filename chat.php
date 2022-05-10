<?php

    session_start();
    require_once "functions.php";

    $db = startConnection();

    // requete d'insertion

    if(isset($_GET['envoye'])){
        
        $id = ''.$_SESSION['matricule'];
        $msg = $_GET['message'];
        $req = $db->prepare("INSERT INTO `message` (`message`, `matricule`) VALUES ('$msg', '$id')");
        $req->execute();
        // $req->execute(array($msg, $id));
        // echo'Manick';
    }
    elseif(isset($_GET['read'])){
        $msg='';
        $req = $db->prepare('SELECT * FROM `message`');
        $req->execute();
        while($tab = $req->fetch(PDO::FETCH_OBJ)){
            if($tab->matricule == $_SESSION['matricule']){
                $msg.="<br><span class='affiche1'>
                    <label class='lab'>".$tab->matricule."</label><br>
                    <label class='lab1'>".$tab->message."</label>
                    </span>";
            }
            else{
                $msg.="<br><span class='affiche'>
                    <label class='lab'>".$tab->matricule."</label><br>
                    <label class='lab1'>".$tab->message."</label>
                    </span>";
            }
        }
        // $msg.='<a id="a" href="./form.html?#a"></a>';
        echo $msg;
    }

    // stopConnection($db);

?>