$(document).ready(function() {
	var charMin = 100; // nb de caracteres min de desc
	var concatSuite = "..."; // afficher "..." après charMin
	var plus = "Voir plus...";
	var moins = "Voir moins...";
	$('.desc').each(function() {
		var content = $(this).html(); // contenue de desc
    // si le contenu est superieur a 100 caracteres
		if(content.length > charMin) {
      // on créé la var qui prend du premier au 100eme caracteres
			var c = content.substr(0, charMin); // de 0 à 100 caracteres
      // puis on créé celle qui va de 100 a 200 caracteres
			var h = content.substr(charMin-1, charMin);

			var minCarac =  c + concatSuite;
      var maxCarac = h + concatSuite;

			$(this).html(minCarac);
		}

	});
// par défaut id="plus" et c'est marqué "Voir plus" en html
// donc les 100 premier caracteres sont affichés
// si on clique sur la div elle prendra la valeur : id="moins"
// et on affiche les 100 prochain caracteres et ce sera affiché "Voir moins"

  $(".plusmoins").click(function(){
		$(this).prev("plus").attr("id","moins");
		// si dans la div c'est affiché "Voir plus.."
    // alors sa affiche jusqu'a 200 caracteres.
    // sinon si c'est affiché "Voir moins..."
    // alors on affiche jusqu'a 100 caracteres.
	});
});
