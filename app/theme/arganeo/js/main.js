// Slides
$(function(){
      $("#slides").slides({
        preload: true,
        container: 'pub',
        preloadImage: 'webroot/img/loading.gif',
        play: 5000,
        pause: 2500,
        hoverPause: true,
        effect: 'fade',
        generatePagination: false,
        animationStart: function(current){
					if (current == 2){
						$('body').css('background','url(webroot/img/bg1.png)');
					}if(current == 1){
					 $('body').css('background','url(webroot/img/bg2.png)');
					};
				},
				animationComplete: function(current){
					$('').animate({
						opacity:0
					},200);
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
      });
    });

//Clickable Boxes
$(document).ready(function(){
	$("#slides").click(function(){
	window.location=$(this).find("a").attr("href");return false;
	});
});

// Login ajax
$(document).ready( function () { 
	$("#connectlogin").submit( function() {	// à la soumission du formulaire						 
		$.ajax({ // fonction permettant de faire de l'ajax
		   type: "POST", // methode de transmission des données au fichier php
		   async: true,
		   url: "app/model/login.php", // url du fichier php
		   data: "email="+$("#email").val()+"&password="+$("#password").val(), // données à transmettre
		   success: function(msg){ // si l'appel a bien fonctionné
				if(msg==1) // si la connexion en php a fonctionnée
				{
					$("span#valid").fadeIn("slow").css('display','inline').html("<img src=\"bomb.png\" style=\"float:left;\" />&nbsp;<p>Tu est mainteant connecté !</p>");
					setTimeout(function() {
						$("span#valid").fadeOut("slow").css('display','none');
					}, 5000);
					$("#connectlogin").fadeOut("slow").css('display','none');
					$("div#info").html("<span id=\"confirmMsg\">Vous &ecirc;tes maintenant connect&eacute;.</span>");
					// on désactive l'affichage du formulaire et on affiche un message de bienvenue à la place
				}
				else // si la connexion en php n'a pas fonctionnée
				{
					$("span#erreur").fadeIn("slow").css('display','inline').html("<img src=\"bomb.png\" style=\"float:left;\" />&nbsp;<p>Erreur lors de la connexion, veuillez v&eacute;rifier votre login et votre mot de passe.</p>");
					setTimeout(function() {
						$("span#erreur").fadeOut("slow");
					}, 5000);
					console.log(msg);
					// on affiche un message d'erreur dans le span prévu à cet effet
				}
		   }
		});
		return false; // permet de rester sur la même page à la soumission du formulaire
	});
});