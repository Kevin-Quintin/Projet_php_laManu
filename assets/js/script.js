	// D'abords je récupère la classe de l'icone
	let heart = document.getElementsByClassName("icone-eye");

	// Je boucle sur un tableau, pour utiliser un écouteur d'événement.
	for (let i = 0; i < heart.length; i++) {

		heart[i].addEventListener('click', () => {
			if (heart[i].className == "bi bi-emoji-heart-eyes icone-eye iconheart") {
				heart[i].className = "bi bi-emoji-heart-eyes-fill icone-eye iconheart iconcolor";
				localStorage.setItem('fill', true);
			} else if (heart[i].className == "bi bi-emoji-heart-eyes-fill icone-eye iconheart iconcolor") {
				heart[i].className = "bi bi-emoji-heart-eyes icone-eye iconheart";
				localStorage.setItem('fill', false);
			}
		})
	};