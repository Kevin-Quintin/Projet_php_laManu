<!-- Ajout de l'en-tête -->
<?php
session_start();

include_once("../controllers/lovers_controller.php");
include_once("../header.php");

?>
<div class="text-center py-3">
	<span class="">
		<i class="bi bi-bookmark-heart"></i>

		<h1 class="">Les Lovers Du Jour</h1>

		<i class="bi bi-bookmark-heart"></i>
	</span>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light" aria-label="breadcrumb">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">Bonjour <?= "nom de la personne" ?></a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ol class="breadcrumb">
				<li class="breadcrumb-item active text-uppercase mt-3" aria-current="page">nos célibataires</li>
				<li class="breadcrumb-item text-uppercase mt-3"><a href="#" class="text-decoration-none text-secondary">mes informations</a></li>
			</ol>
		</div>
	</div>
</nav>

<div class="container-fluid ">
	<div class="row row-cols-1 row-cols-md-5 g-3">
		<?php
		creationDesCard(1, $homme, $femme);
		?>
	</div>
</div>
<script>

</script>
<?php
include_once("../footer.php");
?>