<!-- Ajout de l'en-tête -->
<?php
include_once("../header.php");

function creationCard($image,$nom,$prenom,$age,$codePostal,$desc,$like,$genre) {

}

$clique = 0;
if($_POST['like']) {
	if($clique = 1) {
		?>
			<i class="bi bi-emoji-heart-eyes-fill text-danger bg-opacity-10"></i>
		<?php
		$clique = 0;
	}
}

?>
<h1>Hello, world!</h1>
<!-- Todo le navBar -->
<div class="container-fluid">
	<div class="row row-cols-1 row-cols-md-3 g-4">
		<div class="col">
			<div class="card ">
				<img src="../assets/img/imageTest.jpg" class="card-img-top " alt="imageTest">
				<div class="card-body ">
					<div class="row h3">
						<div class="col-6 ">	
								Prenom Nom
						</div> 
						<div class="col-6 text-end ">
							Age
						</div>
					</div>
					
					<div class="row p-2 m-2">
						<p class="card-text text-start fs-5 p-2">
							A la recherche d'un prince charmant dans son BMW Blanc
						</p>
					</div>
					<div class="row text-center">
						<form calss="" name = "like">
							<button class="border border-0 ">
								<i class="bi bi-emoji-heart-eyes "></i>
							</button>
						</form>
					</div>
				</div>
				<div class="card-footer h3 text-center">
					Amiens
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<img src="../assets/img/imageTest.jpg" class="card-img-top " alt="imageTest">
				<div class="card-body">
					<div class="row">
						<div class="col-6">	
								Prenom 
								Nom
						</div> 
						<div class="col-6 text-end ">
							Age
						</div>
					</div>
					<div class="row py-5">
						<p class="card-text text-start">
							A la recherche d'un prince charmant dans son BMW Blanc
						</p>
					</div>
				</div>
				<i class="bi bi-emoji-heart-eyes text-center "></i>
				<div class="card-footer h3 text-end">
					Amiens
				</div>
			</div>
		</div>
		<div class="col">
			<div class="card">
				<img src="../assets/img/imageTest.jpg" class="card-img-top " alt="imageTest">
				<div class="card-body">
					<div class="row">
						<div class="col-6">	
								Prenom 
								Nom
						</div> 
						<div class="col-6 text-end ">
							Age
						</div>
					</div>
					<div class="row py-5">
						<p class="card-text text-start">
							A la recherche d'un prince charmant dans son BMW Blanc
						</p>
					</div>
				</div>
				<i class="bi bi-emoji-heart-eyes text-center "></i>
				<div class="card-footer h3 text-end">
					Amiens
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Ajout du pied de page -->
<?php
include_once("../footer.php");
?>