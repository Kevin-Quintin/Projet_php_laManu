<!-- Ajout de l'en-tête -->
<?php
include_once("../header.php");
include_once("../controllers/user_controller.php");
if ($_COOKIE['Type_recherche'] == "1") {
    $genreRecherche = "Femme";
} else {
    $genreRecherche = "Homme";
}

if ($_COOKIE['Genre'] == "1") {
    $genre = "Femme";
} else {
    $genre = "Homme";
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
            <div class="list-group-item fs-5 ">
                Veuillez trouver vos informations saisies lors de l'inscription
            </div>

            <ul class="list-group">
                <li class="list-group-item  h5">
                    <form action="user.php" method="GET" class="">
                        <div class="form-group m-2 py-2">
                            <label>
                                Votre nom : <?= $_COOKIE['Nom'] ?>
                            </label>
                        </div>
                        <div class="form-group m-2 py-2">
                            <label>
                                Votre prénom : <?= $_COOKIE['Prenom'] ?>
                            </label>
                        </div>
                        <div class="form-group m-2 py-2">
                            <label>
                                Votre âge : <?= $_COOKIE['Age'] ?>
                            </label>
                        </div>
                        <div class="form-group m-2 py-2">
                            <label>
                                Genre : <?= $genre ?>
                            </label>
                        </div>
                        <div class="form-group m-2 py-2">
                            <label>
                                Votre code postal : <?= $_COOKIE['Code_postal'] ?>
                            </label>
                        </div>
                        <div class="form-group m-2 py-2">
                            <label>
                                Votre mail : <?= $_COOKIE['Courriel'] ?>
                            </label>
                        </div>
                        <div class="form-group m-2 py-2">
                            <label>
                                Votre type de recherche : <?= $genreRecherche ?>
                            </label>
                        </div>
                    </form>
                    <!-- boutons pour les redirections -->
                    <div class="d-flex justify-content-between">
                        <!-- Désinscrire -->
                        <form method="post" action="../controllers/user_controller.php">
                            <button type="submit" name="desinscrire" class="btn btn-danger me-2 btn-lg ">Désinscrire</button>
                        </form>
                        <!-- Meetic -->
                        <a href="https://www.meetic.fr" class="btn btn-primary btn-lg me-2" tabindex="-1" role="button">TAKE MY MONEY</a>
                    </div>

                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Ajout du pied de page -->
<?php
include_once("../footer.php");
?>