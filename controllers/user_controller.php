<?php 
if(isset($_POST['desinscrire'])){
    setcookie("Nom", '','','', time()-3600*48);
    setcookie("Prenom", '','','', time()-3600*48);
    setcookie("Age",  '','','', time()-3600*48);
    setcookie("Genre",  '','','', time()-3600*48);
    setcookie("Courriel", '','','',  time()-3600*48);
    setcookie("Code_postal", '','','',  time()-3600*48);
    setcookie("Type_recherche", '','','',  time()-3600*48);

    header('location:../index.php');
    }
?>