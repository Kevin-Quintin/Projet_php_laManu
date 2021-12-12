<!-- Ajout de l'en-tête -->
<?php
include_once("header.php");
?>
<title>Notre site de rencontres</title>
<div class="container-fluid">
    <div class="row d-flex justify-content-center text-center">
        <header>
            <h1 class="py-3 fw-bold">BIENVENUE JEUNE <i class="bi bi-heart-fill"></i> LOVER <i class="bi bi-heart-fill"></i>
        </header>
    </div>

    <div class="row d-flex justify-content-center g-3 ">
        <!-- Image de fond -->
        <div class="col-lg-6 col-sm-6 offset-0  bg bg-secondary bg-opacity-25 form-box border border-4 rounded-3 py-4 border-secondary">
            <!-- <div class="py-3"> -->
                <h3 class="fw-bold text-center ">On veut tout savoir sur toi </h3>

                <?php
                if (
                    isset($_COOKIE["Nom"]) && !empty($_COOKIE["Nom"])
                    && isset($_COOKIE["Prenom"]) && !empty($_COOKIE["Prenom"])
                    && isset($_COOKIE["Age"]) && !empty($_COOKIE["Age"])
                    && isset($_COOKIE["Genre"]) && !empty($_COOKIE["Genre"])
                    && isset($_COOKIE["Courriel"]) && !empty($_COOKIE["Courriel"])
                    && isset($_COOKIE["Code_postal"]) && !empty($_COOKIE["Code_postal"])
                    && isset($_COOKIE["Type_recherche"]) && !empty($_COOKIE["Type_recherche"])
                ) {
                    header("Location: views\lovers.php");
                } else {    ?>
                    <form method="post" action="controllers\index_controller.php" class="row needs-validation fw-bold fs-3  d-flex justify-content-center" novalidate>
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
                        <div class="col-lg-6  col-sm-6 offset-3 mb-3">
                            <button class="btn btn-primary btn-lg py-3" type="submit" name="rencontre">
                                Rencontrez nos célibataires
                            </button>
                        </div>
                    </form> 
                <?php
                }
                ?>
        </div>
    </div>
</div>
<!-- Ajout du pied de page -->
<?php
include_once("footer.php");
?>