/*
Name: 			D�calage lien interne
Written by: 	
Theme Version:	1.0.0
*/
$(document).ready(function () {
	$("a[href^='#']").click(function (e) {
			var 
			yPos,
			yInitPos,
			target = ($($(this).attr("href") + ":first"));
			
		// On annule le comportement initial au cas ou la base soit diff�rente de la page courante.
		e.preventDefault(); 
		
		yInitPos = $(window).scrollTop();
		
		// On ajoute le hash dans l'url.
		window.location.hash = $(this).attr("href");
		
		// Comme il est possible que l'ajout du hash perturbe le d�filement, on va forcer le scrollTop � son endroit inital
		$(window).scrollTop(yInitPos);
		
		// On cible manuellement l'ancre pour en extraire sa position.
		// Si c'est un ID on l'obtient.
		target = ($($(this).attr("href") + ":first"));

		// Sinon on cherche l'ancre
		if (target.length == 0) {
			target = ($("a[name=" + $(this).attr("href").replace(/#/gi,"") + "]:first"))
		}
		
		// Si on a eu un name ou un id, on d�file.
		if (target.length == 1) {
			yPos = target.offset().top; // Position de l'ancre.
		
			// On anime le d�filement jusqu'� l'ancre.
			$('html,body').animate({ scrollTop: yPos - 80 }, 1000); // On d�cale de 40 pixels l'affichage pour ne pas coller le bord haut de l'affichage du navigateur et on d�file en 1 seconde jusqu'� l'ancre.
		}
	});

});