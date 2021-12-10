<?php
if (isset($_POST["Nom"]) && !empty($_POST ["Nom"])){

     $nom= $_POST["Nom"];
    }
else { 
    echo "Erreur, le nom est manquant";
}
if (isset($_POST["Prenom"]) && !empty($_POST ["Prenom"])){

    $prenom= $_POST["Prenom"];
   }
else { 
   echo "Erreur, le Prenom est manquant";
}
if (isset($_POST["age"]) && !empty($_POST ["age"])){

    $age= $_POST["age"];
   }
else { 
   echo "Erreur, la valeur age est manquante";
}
if (isset($_POST["genre"]) && !empty($_POST ["genre"])){

    $genre= $_POST["genre"];
   }
else { 
   echo "Erreur, le genre est manquant";
}
if (isset($_POST["email"]) && !empty($_POST ["email"])){

    $email= $_POST["email"];
   }
else { 
   echo "Erreur, le Courriel est manquant";
}
if (isset($_POST["code"]) && !empty($_POST ["code"])){

    $codepostal= $_POST["code"];
   }
else { 
   echo "Erreur, le code_postalest est manquant";
}
if (isset($_POST["recherche"]) && !empty($_POST ["recherche"])){

    $typerecherche= $_POST["recherche"];
   }
else { 
   echo "Erreur, le Type de recherche est manquant";
}

var_dump($_COOKIE);
$_COOKIE["Nom"]=$nom;
$_COOKIE["Prenom"]=$prenom;
$_COOKIE["Age"]=$age;
$_COOKIE["Genre"]=$genre;
$_COOKIE["Courriel"]=$email;
$_COOKIE["Code_postal"]=$codepostal;
$_COOKIE["Type_recherche"]=$typerecherche;

var_dump($_COOKIE);












?>