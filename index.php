<!-- Ajout de l'en-tête -->
<?php
session_start();
include_once("header.php");
?>
<title>Notre site de rencontres</title>
<div class="row d-flex justify-content-center text-center">
    <header>
        <h1><i class="em em-heart"></i> BIENVENUE JEUNE <i class="bi bi-heart-fill"></i> LOVER <i class="bi bi-heart-fill">
                <br>
    </header>
    <Br>

    <!-- Image de fond -->

    <div class="form-box">
        <div class="header-text">

        </div>
        <div>
            <br>
            <br>
            <br>
            <h4>On veut tout savoir sur toi </h4>

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
                <form method="post" action="#" class="needs-validation" novalidate>
                    <div class="form-row">
                        <div class="col-sm-4 mb-3">
                            <p>Nom</p>
                            <input type="text" name="Nom" class="form-control" id="validationDefault01" placeholder="Indique ton nom" required>
                            <div class="valid-tooltip">
                            </div>
                        </div>
                        <div class="col-sm-4 mb-3">
                            <p>Prénom</p>
                            <input type="text" name="Prenom" class="form-control" id="validationTooltip02" placeholder="Indique ton prénom" required>
                            <div class="valid-tooltip">
                            </div>
                        </div>
                        <div class="col-sm-3 mb-2">
                            <p>Séléctionne ton âge</p>
                            <input type="number" min="18" selected=18 max="100" name="age" required placeholder>
                        </div>
                    </div>
                    <div class="col-sm-2 mb-2">
                        <p>Genre</p>
                        <select Name="genre" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                            <option value="1">Femme</option>
                            <option value="2">Homme</option>

                        </select>
                    </div>


                    <div class="form-row">
                        <div class="col-sm-3 mb-3 form-group">
                            <p>Courriel</p>
                            <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email valide">
                        </div>
                        <div class="col-sm-2 mb-2">
                            <p>Code postal</p>
                            <input name="code" type="text" class="form-control" id="validationTooltip05" placeholder="Code postal" required>
                            <div class="invalid-tooltip">

                            </div>
                            <div class="custom-control custom-radio">

                            </div>

                        </div>
                        <div class="col-sm-4 mb-4">
                            <h4>Que cherche-tu? </h4>
                            <select name="recherche" class="custom-select my-1 mr-sm-2" id="inlineFormCustomSelectPref">
                                <option value="1">Une femme</option>
                                <option value="2">Un homme</option>

                            </select>
                        </div>
                    </div>
                    <div class="row d-flex justify-content-center text-center">
                        <button class="btn btn-primary" type="submit" name="rencontre">Rencontrez nos célibataires</button>
                    </div>
                </form> <?php }


                        ?>

            <?php
            if (isset($_POST["rencontre"])) {

                setcookie("Nom", $_POST["Nom"], time() + 3600 * 24);
                setcookie("Prenom", $_POST["Prenom"], time() + 3600 * 24);
                setcookie("Age", $_POST["age"], time() + 3600 * 24);
                setcookie("Genre", $_POST["genre"], time() + 3600 * 24);
                setcookie("Courriel", $_POST["email"], time() + 3600 * 24);
                setcookie("Code_postal", $_POST["code"], time() + 3600 * 24);
                setcookie("Type_recherche", $_POST["recherche"], time() + 3600 * 24);
                header("Location: views\lovers.php");
            }

            ?>

        </div>
    </div>
</div>
<!-- Ajout du pied de page -->
<?php
include_once("footer.php");
?>