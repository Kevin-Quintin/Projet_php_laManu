<?php 
if(isset($_POST['desinscrire'])){

    setcookie("Nom", " ", time() - 3600, "/");
    setcookie("Prenom", " ", time() - 3600, "/");
    setcookie("Age", " ", time() - 3600, "/");
    setcookie("Genre", " ", time() - 3600, "/");
    setcookie("Courriel", " ", time() - 3600, "/");
    setcookie("Code_postal", " ", time() - 3600, "/");
    setcookie("Type_recherche", " ", time() - 3600, "/");

    header('location:../index.php');
    }
?>