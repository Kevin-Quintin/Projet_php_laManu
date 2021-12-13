<!-- Ajout de l'en-tête -->
<?php
include_once("../header.php");
include_once("../controllers/lovers_controller.php");

?>
<div class="container-fluid">
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

	<div class="row">
		<nav class="navbar navbar-expand-xl navbar-dark bg-dark fw-bold h4 " aria-label="breadcrumb">
			<div class="container-fluid">

				
				<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDark" aria-controls="navbarDark" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse show" id="navbarDark">
				<a class="navbar-brand" href="#">
					<span class="me-2 h3">Bonjour</span> 
					<i class="bi bi-person-square text-light h3 me-2"></i>
					<span class="me-2 h3"> <?= $_COOKIE['Nom'] ?> </span>
				</a>
					<ul class="navbar-nav me-auto mb-2 mb-xl-0">
						<li class="nav-item">
							<a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Nos célibataires</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="user.php">Mes informations</a>
						</li>

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
		</nav>
	</div>

	<div class="container-fluid my-2">
		<div class="row row-cols-1 row-cols-md-5 g-2">
			<?php
				// Affiche les genres choisis par la personne inscrite
				creationDesCard($_COOKIE['Recherche'],$homme,$femme);
			?>
		</div>
	</div>
	<div class="row py-5"></div>
</div>
<script>

</script>
<?php
include_once("../footer.php");
?>