<!-- Ajout de l'en-tête -->
<?php
session_start();

include_once("../header.php");
include_once("../controllers/lovers_controller.php");

?>
	<div class="text-center py-3">
		<span>
			<i class="bi bi-bookmark-heart"></i>

			<h1 class="">Les Lovers Du Jour</h1>

			<i class="bi bi-bookmark-heart"></i>
		</span>
	</div>

	<!-- Todo le navBar -->
	<div class="container-fluid ">
		<div class="row row-cols-1 row-cols-md-5 g-3">
			<?php
				creationDesCard(1,$homme,$femme);
			?>
		</div>
	</div>

<!-- Ajout du pied de page -->
<?php
include_once("../footer.php");
?>

