<?php 
if(isset($_POST['desinscrire'])){

    $domain = $_SERVER['SERVER_NAME'];
    $path = explode("/", $_SERVER["REQUEST_URI"]);

    setcookie("Nom", " ", time() - 0, "/".$path[1], $domain);
    setcookie("Prenom", " ", time() - 0, "/".$path[1], $domain);
    setcookie("Age", " ", time() - 0, "/".$path[1], $domain);
    setcookie("Genre", " ", time() - 0, "/".$path[1], $domain);
    setcookie("Courriel", " ", time() - 0, "/".$path[1], $domain);
    setcookie("Code_postal", " ", time() - 0, "/".$path[1], $domain);
    setcookie("Type_recherche", " ", time() - 0, "/".$path[1], $domain);

    header('location:../index.php');
    }
?>