<!-- Ajout de l'en-tête -->
<?php
include_once("../header.php");
include_once("../controllers/lovers_controller.php");

?>
<div class="row py-3">
	<div class="col-lg-3 col-sm-3 text-end">
		<i class="bi bi-bookmark-heart iconheart"></i>
	</div>
	<div class="col-lg-6 col-sm-6">
		<h1 class="py-3 text-center">Les Lovers Du Jour</h1>
	</div>
	<div class="col-lg-3 col-sm-3 text-start">
		<i class="bi bi-bookmark-heart iconheart"></i>
	</div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="breadcrumb">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Bonjour <?= $_COOKIE["Prenom"]; ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active text-uppercase mt-3" aria-current="page">nos célibataires</li>
				<li class="breadcrumb-item text-uppercase mt-3"><a href="user.php" class="text-decoration-none text-secondary">mes informations</a></li>
			</ol>
		</div>
	</div>
</nav>

<div class="container-fluid my-2">
	<div class="row row-cols-1 row-cols-md-5 g-2">
		<?php
		// Affiche les genres choisis par la personne inscrite
		creationDesCard($_COOKIE['Type_recherche'], $homme, $femme);
		?>
	</div>
	<div class="row py-5"></div>
</div>
<script>

</script>
<?php
include_once("../footer.php");
?>