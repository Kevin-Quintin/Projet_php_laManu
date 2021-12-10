<!-- Ajout de l'en-tête -->
<?php
include_once("../header.php");
include_once("../controllers/user_controller.php");
?>
<div class="container mt-5 d-flex justify-content-center">
    <!-- info profil -->
    <div>
        <p class="fs-2 bg-primary text-white">Bonjour <?= $profil['prenom']?>, voici tes informations:</p>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Nom</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $profil['nom']?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Prénom</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $profil['prenom']?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Age</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $profil['age']?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Genre</p>
            </div>
            <div class=" col-sm-3">
               <p><?= $profil['genre']?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
               <p>Code Postal</p>
            </div>
            <div class=" col-sm-3">
                <p><?= $profil['cp']?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
                <p>Email</p>
            </div>
            <div class=" col-sm-3">
               <p><?= $profil['mail']?></p>
            </div>
        </div>
        <div class="row">
            <div class="offset-sm-1 col-sm-2">
               <p>Recherche</p>
            </div>
            <div class=" col-sm-3">
               <p><?= $profil['type']?></p>
           </div>
        </div>
        <!-- boutons pour les redirections -->
        <div class="row">
           <!-- Désinscrire -->

           <div class="d-flex">
               <form method="post" action="#">
                  <button type="submit" name="desinscrire" class="btn btn-danger me-2">Désinscrire</button>
                </form>
                <?php
                    if(isset($_POST['desinscrire'])){
                         // unset cookies
                        if (isset($_SERVER['HTTP_COOKIE'])) {
                        $cookies = explode(';', $_SERVER['HTTP_COOKIE']);
                        foreach($cookies as $cookie) {
                            $parts = explode('=', $cookie);
                            $name = trim($parts[0]);
                            setcookie($name, '', time()-1000);
                            setcookie($name, '', time()-1000, '/');
                        }
                    }
                    header('location:../index.php');
                }
                ?>
                <!-- Meetic -->
                 <a href="#" class="btn btn-primary disabled" tabindex="-1" role="button" aria-disabled="true">TAKE MY MONEY</a>
            </div>
        </div>
    </div>
</div>
<!-- Ajout du pied de page -->
<?php
include_once("../footer.php");
?>