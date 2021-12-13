<!-- Ajout de l'en-tête -->
<?php
include_once("../header.php");
include_once("../controllers/user_controller.php");
if ($_COOKIE['Recherche'] == "1") {
    $genreRecherche = "Femme";
} else {
    $genreRecherche = "Homme";
}
?>
<div class="container mt-5 d-flex justify-content-center text-dark fond border rounded-5">
    <!-- info profil -->
    <div class=" my-5 w-75 fw-bold fs-3">
        <div class="fs-2 bg-primary text-white border border-4 rounded">Bonjour <?= $_COOKIE['Prenom'] ?>, voici tes informations:</div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2 ">
                <p>Nom</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $_COOKIE['Nom'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Prénom</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $_COOKIE['Prenom'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Age</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $_COOKIE['Age'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Genre</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $_COOKIE['Genre'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Code Postal</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $_COOKIE['Code'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Email</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $_COOKIE['Courriel'] ?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Recherche</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $genreRecherche ?></p>
            </div>
        </div>
        <!-- boutons pour les redirections -->
        <div class="row">
            <!-- Désinscrire -->

            <div class="d-flex justify-content-center">
                <form method="post" action="../controllers/user_controller.php">
                    <button type="submit" name="desinscrire" class="btn btn-danger me-2">Désinscrire</button>
                </form>
                <!-- Meetic -->
                <a href="https://www.meetic.fr" class="btn btn-primary" tabindex="-1" role="button">TAKE MY MONEY</a>
            </div>
        </div>
    </div>
</div>
<!-- Ajout du pied de page -->
<?php
include_once("../footer.php");
?>