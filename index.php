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
                            <label class="form-label" for="validationServer01" >Nom</label>
                            <input type="text" name="Nom" class="form-control form-control-lg" id="validationServer01" placeholder="Indique ton nom" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label class="form-label">Prénom</label>
                            <input type="text" name="Prenom" class="form-control form-control-lg" id="validationTooltip02" placeholder="Indique ton prénom" required>
                            <div class="valid-feedback">
                                Looks good!
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label class="form-label">Sélectionne ton âge</label>
                            <input type="number" min="18" max="100" name="age" placeholder="18"  class="form-select form-select-lg" required>
                        </div>
                        <!-- </div> -->
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label class="form-label">Genre</label>
                            <select name="genre" class="form-select form-select-lg" id="inlineFormCustomSelectPref" required>
                                <option value="1" selected>Femme</option>
                                <option value="2">Homme</option>
                            </select>
                            <div class="invalid-feedback">
                                Please select a valid state.
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label class="form-label">Courriel</label>
                            <input type="email" class="form-control form-control-lg" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email valide" required>
                            <div class="invalid-feedback">
                                Please choose a username.
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label class="form-label">Code postal</label>
                            <input type="text" class="form-control form-control-lg"  name="code" id="validationTooltip05" placeholder="Code postal" required>
                            <div class="invalid-feedback">
                                Please provide a valid zip.
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-8 offset-0 mb-3">
                            <label class="form-label">Que cherche-tu? </label>
                            <select name="recherche" class="form-select form-select-lg" id="inlineFormCustomSelectPref">
                                <option value="0" selected>Une femme</option>
                                <option value="1" >Un homme</option>
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