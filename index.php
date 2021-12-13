<!-- Ajout de l'en-tête -->
<?php
session_start();
include_once("header.php");

if (isset($_POST["rencontre"])) {
    setcookie("Nom", $_POST["Nom"], time() + 3600 * 24);
    setcookie("Prenom", $_POST["Prenom"], time() + 3600 * 24);
    setcookie("Age", $_POST["age"], time() + 3600 * 24);
    setcookie("Genre", $_POST["genre"], time() + 3600 * 24);
    setcookie("Courriel", $_POST["email"], time() + 3600 * 24);
    setcookie("Code_postal", $_POST["code"], time() + 3600 * 24);
    setcookie("Type_recherche", $_POST["recherche"], time() + 3600 * 24);
    header("Location: ./views/lovers.php");
}

?>
<title>Notre site de rencontres</title>
<div class="container-fluid">
    <div class="row d-flex justify-content-center text-center">
        <header>
            <h1 class="py-5 fw-bold">BIENVENUE JEUNE <i class="bi bi-heart-fill"></i> LOVER <i class="bi bi-heart-fill"></i>
        </header>
    </div>

    <div class="row d-flex justify-content-center g-3 ">
        <!-- Image de fond -->
        <div class="col-lg-6 col-sm-6 offset-0 form-box bg bg-secondary bg-opacity-25 border border-4 border-secondary rounded-3 py-4">
            <!-- <div class="py-3"> -->
                <h3 class="fw-bold text-center py-4">On veut tout savoir sur toi </h3>

            <?php
                if (
                    isset($_COOKIE["Nom"]) && !empty($_COOKIE["Nom"])
                    && isset($_COOKIE["Prenom"]) && !empty($_COOKIE["Prenom"])
                    && isset($_COOKIE["Age"]) && !empty($_COOKIE["Age"])
                    && isset($_COOKIE["Genre"]) && !empty($_COOKIE["Genre"])
                    && isset($_COOKIE["Courriel"]) && !empty($_COOKIE["Courriel"])
                    && isset($_COOKIE["Code_postal"]) && !empty($_COOKIE["Code_postal"])
                    && isset($_COOKIE["Type_recherche"]) && !empty($_COOKIE["Type_recherche"])
                ) 
                {
                    header("Location: ./views/lovers.php");
                } 
                else { 
            ?>
                    <form method="POST" action="#" class="row needs-validation fw-bold fs-3  d-flex justify-content-center" novalidate>
                        <!-- <div class="form-row"> -->
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label for="nom" class="form-label ">Nom</label>
                            <input type="text" name="Nom" class="form-control" id="nom" placeholder="Indique ton nom" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label for="prenom" class="form-label">Prénom</label>
                            <input type="text" name="Prenom" minlength="6" class="form-control" id="prenom" placeholder="Indique ton prénom" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">

                            <label for="age" class="form-label">Sélectionne ton âge</label>
                            <input type="number" min="18" value ="18" selected=18  max="100" name="age" id="age" required placeholder>
                        </div>
                        <!-- </div> -->
                        <div class="col-lg-8 col-sm-8 offset-0  ">
                            <label for="genre" class="form-label">Genre</label>
                            <select Name="genre" class="form-select" id="genre" required>
                                <option value="1" selected>Femme</option>
                                <option value="2">Homme</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label for="email" class="form-label">Courriel</label>
                            <input type="email" class="form-control" name="email" id="email" aria-describedby="emailHelp" placeholder="Email valide" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label for="code" class="form-label">Code postal</label>
                            <input type="text" class="form-control"  name="code" id="code" placeholder="Code postal" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label for="recherche" class="form-label">Que cherche-tu? </label>
                            <select name="recherche" class="form-select" id="recherche">
                                <option value="1">Une femme</option>
                                <option value="2" selected>Un homme</option>
                            </select>
                        </div>
                        <div class="col-lg-6  col-sm-6 offset-0 mb-3 text-center">
                            <button class="btn btn-primary btn-lg py-3 fs-4 fw-bold" type="submit" name="rencontre">
                                Rencontrez nos célibataires
                            </button>
                        </div>
                    </form> 
            <?php
                }
                ?>
        </div>
    </div>
    <div class="row py-5"></div>
</div>
<!-- Ajout du pied de page -->
<?php
include_once("footer.php");
?>