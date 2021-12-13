<?php 
if(isset($_POST['desinscrire'])){

    unset($_COOKIE["Nom"]);
    setcookie("Nom", " ", time() - 0, "/projet_php_laManu", "lamanu");
    setcookie("Prenom", " ", time() - 0, "/projet_php_laManu", "lamanu");
    setcookie("Age", " ", time() - 0, "/projet_php_laManu", "lamanu");
    setcookie("Genre", " ", time() - 0, "/projet_php_laManu", "lamanu");
    setcookie("Courriel", " ", time() - 0, "/projet_php_laManu", "lamanu");
    setcookie("Code_postal", " ", time() - 0, "/projet_php_laManu", "lamanu");
    setcookie("Type_recherche", " ", time() - 0, "/projet_php_laManu", "lamanu");

    header('location:../index.php');
    }
?>