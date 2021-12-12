<?php
// Je stocke le nom
if (isset($_POST["Nom"]) && !empty($_POST ["Nom"])){
   $nom = $_POST["Nom"];
}
else { 
   echo "Erreur, le nom est manquant";
}

// Je stocke le prénom
if (isset($_POST["Prenom"]) && !empty($_POST ["Prenom"])){
   $prenom = $_POST["Prenom"];
}
else { 
   echo "Erreur, le Prenom est manquant";
}

// Je stocke l'âge
if (isset($_POST["age"]) && !empty($_POST ["age"])){
   $age = $_POST["age"];
   }
else { 
   echo "Erreur, la valeur age est manquante";
}

// Je stocke le genre
if (isset($_POST["genre"]) && !empty($_POST ["genre"])){
   $genre = $_POST["genre"];
   }
else { 
   echo "Erreur, le genre est manquant";
}

// Je stocke l'email
if (isset($_POST["email"]) && !empty($_POST ["email"])){
   $email = $_POST["email"];
   }
else { 
   echo "Erreur, le Courriel est manquant";
}

// Je stocke le code postal
if (isset($_POST["code"]) && !empty($_POST ["code"])){
   $codepostal = $_POST["code"];
   }
else { 
   echo "Erreur, le code_postalest est manquant";
}

// Je stocke le type de recherche
if (isset($_POST["recherche"]) && !empty($_POST ["recherche"])){
   $recherche = $_POST["recherche"];
   }
else { 
   echo "Erreur, le Type de recherche est manquant";
}

if (isset($_POST["rencontre"])) {
   setcookie("Nom", $nom, time() - 3600);
   setcookie("Prenom", $prenom, time() - 3600);
   setcookie("Age", $age, time() - 3600);
   setcookie("Genre", $genre, time() - 3600);
   setcookie("Courriel", $email, time() - 3600);
   setcookie("Code", $codepostal, time() - 3600);
   setcookie("Recherche", $recherche, time() - 3600);

   setcookie("Nom", $nom, time() + 3600 * 24, "/");
   setcookie("Prenom", $prenom, time() + 3600 * 24, "/");
   setcookie("Age", $age, time() + 3600 * 24, "/");
   setcookie("Genre", $genre, time() + 3600 * 24, "/");
   setcookie("Courriel", $email, time() + 3600 * 24, "/");
   setcookie("Code", $codepostal, time() + 3600 * 24, "/");
   setcookie("Recherche", $recherche, time() + 3600 * 24, "/");
   header("Location: ../views/lovers.php");
   // var_dump($_COOKIE['Recherche']);
}