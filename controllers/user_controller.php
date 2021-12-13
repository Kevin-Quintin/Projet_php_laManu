<?php 
if(isset($_POST['desinscrire'])){
    // setcookie("Nom", '','','', time()-3600*48);
    // setcookie("Prenom", '','','', time()-3600*48);
    // setcookie("Age",  '','','', time()-3600*48);
    // setcookie("Genre",  '','','', time()-3600*48);
    // setcookie("Courriel", '','','',  time()-3600*48);
    // setcookie("Code", '','','',  time()-3600*48);
    // setcookie("Recherche", '','','',  time()-3600*48);

    setcookie("Nom", "", time() - 3600);
   setcookie("Prenom", "", time() - 3600);
   setcookie("Age", "", time() - 3600);
   setcookie("Genre", "", time() - 3600);
   setcookie("Courriel", "", time() - 3600);
   setcookie("Code", "", time() - 3600);
   setcookie("Recherche", "", time() - 3600);

    header('location:../index.php');
    }
?>