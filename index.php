<!-- Ajout de l'en-tête -->
<?php
include_once("header.php");
?>
  <title>Notre site de rencontres</title>
<header>
    <h1><i class="em em-heart"></i> BIENVENUE JEUNE **<3 LOVER <3**<i class="em em-heart"></i>
      <h1>
  </header>
  <form action="http://ihome.ust.hk/~rossiter/cgi-bin/show_everything.php" method="post" enctype="multipost/form-data">
   
      <legend>On veut des détails sur toi </legend>
      <label for="name" class="lwid">Nom:</label>
      <input type="text" name="name" required placeholder="Saisi ton nom"><br>
      <label for="name" class="lwid">Prénom:</label>
      <input type="text" name="name" required placeholder="Saisi ton Prénom"><br>
      <label for="geneder" class="lwid">Genre:</label><br>
      <label for="Male" class="lauto">Homme</label>
      <input type="radio" name="gender" required placeholder="Saisi ton Prénom"><br>
      <label for="female" class="lauto">Femme</label>
      <input type="radio" name="gender" required placeholder="Rentre ton nom"><br><br>
      <label for="age" class="lwid">Age:</label>
      <input type="number"  min="18" step="5" max="60"name="age" required placeholder="Saisi ton âge"><br><br>
      <label for="country" class="lwid">Code postal:</label>
      <label for="exampleInputEmail1">Courriel</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" required placeholder="Enter email"><br><br>
    
    
  </div>
    
       
    <fieldset>
      
    </fieldset>

    <fieldset>
    
    </fieldset>
    <div class="row justify">
    <input type="submit" value="Valider"><i class="em em-point_left"></i>
    </div>
  </form>

<!-- Ajout du pied de page -->
<?php
include_once("footer.php");
?>