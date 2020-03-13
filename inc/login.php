<?php

require_once("manager-db.php");
if (isset($_POST['login']) && isset($_POST['pwd']) && !empty($_POST['login'])&& !empty($_POST['login'])) {
    $result = getAuthentification($_POST['login'],$_POST['pwd']);
    print_r($result);
    if($result){
        session_start();
        $_SESSION['nom'] = $result->nom;
        $_SESSION['identifiant'] = $result->id;
        $_SESSION['role'] = $result->role;
        $_SESSION['prenom'] = $result->prenom;


        header('location:../WorldMap.php');
    }

    else{
        header('location:authentification.php');
    }
}
else{
    header('location:authentification.php');
}
?>

