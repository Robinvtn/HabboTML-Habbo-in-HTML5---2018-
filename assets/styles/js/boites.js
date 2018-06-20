<script>
// Ne pas toucher aux codes scripts!
$(function(){
	$("#login").click(function(){
		$("#login_in").toggle();
	});
	
	$("#menu1").click(function(){  // Ouvrir le sous-menu "Moi"
		$("#sousmenu1").toggle();
	});
});


$(function() {
	$( "#profilBox" ).draggable({ containment: ".interface" });

	$("#closeProfil").click(function(){ // Fermer la box profil
		$("#profilBox").hide();
	});

	$("#ouvrirProfil").click(function(){ // Ouvrir la box profil depuis le sous-menu "Moi"
		$("#profilBox").toggle();
		$("#sousmenu1").hide();
	});
});

$(function(){
	$("#guide").click(function(){ // Ouvrir la boite d'Aide
		$("#infoguide").toggle();
	});
});

$( function() {
	$( "#infoguide" ).draggable({ containment: ".interface" });

	$("#closeguide").click(function(){ // Ferme la boite d'Aide
		$("#infoguide").hide();
	});
});

$(function() {
	$( "#nav" ).draggable({ containment: ".interface" });

	$("#closenavigateur").click(function(){ // Ferme le navigateur depuis celui-ci
		$("#nav").hide();
	});

	$("#ouvrirnavigateur").click(function(){ // Ouvre le navigateur depuis le menu
		$("#nav").toggle();
	});
});

$(function() {  // Permet de colorer les onglets sélectionnés en haut du navigateur
	$(".choisir").click(function () {
		$(this).toggleClass('selected').siblings().removeClass("selected");
	});
	$("a").click(function(){
		var target = $(this).attr('rel');
		$("#"+target).show().siblings("div").hide();
	});
});

$(function() {
	$( "#navA" ).draggable({ containment: ".interface" });

	$("#ouvrirMesAppartements").click(function(){ // Permet d'ouvrir l'onglet "Mes apparts" depuis l'onglet Public du navigateur
		$("#navM").toggle();
		$("#nav").hide();
	});
});


$(function() {
	$( "#navM" ).draggable({ containment: ".interface" });

	$("#closenavigateurA").click(function(){ // Permet de fermer l'onglet "Mes apparts" du navigateur
		$("#navM").hide();
	});

	$("#ouvrirnavP").click(function(){	// Permet d'ouvrir l'onglet "Public" depuis l'onglet "Mes apparts" du navigateur
		$("#navM").hide();
		$("#nav").toggle();
	});
});

$(function() {
	$(".choisir").click(function () { // ça je sais pas à quoi ça sert mais ça sert.. ne pas enlever
		$(this).toggleClass('selected').siblings().removeClass("selected");
		$(this).toggleClass('selected').siblings().removeClass("selected");
	});
	$("a").click(function(){
		var target = $(this).attr('rel');
		$("#"+target).show().siblings("div").hide();
		$("#"+target).show().siblings("div").hide();
	});
});

$(function() {
	$( "#navM" ).draggable({ containment: ".interface" });

	$("#fermermesappartements").click(function(){ // Permet de fermer l'onglet "mes appartements" depuis la croix rouge en haut à droite du navigateur
		$("#navM").hide();
	});

	$("#ouvrirmesappartements").click(function(){ // Permet d'ouvrir l'onglet "mes appartements" du navigateur depuis le sous-menu "Moi" du menu
	$("#navM").toggle();
	$("#sousmenu1").hide();
	});
});
$(function() {
	$( "#infohc" ).draggable({ containment: ".interface" });
		$("#closeinfohc").click(function(){ // Permet de fermer le catalogue depuis la croix rouge en haut à droite
		$("#infohc").hide();
	});
	$("#ouvririnfohc").click(function(){ // Permet d'ouvrir le catalogue depuis le menu
		$("#infohc").toggle();
	});
});
$(function() {
	$( "#catalogue" ).draggable({ containment: ".interface" });
		$("#closecata").click(function(){ // Permet de fermer le catalogue depuis la croix rouge en haut à droite
		$("#catalogue").hide();
	});
	$("#ouvrircatalogue").click(function(){ // Permet d'ouvrir le catalogue depuis le menu
		$("#catalogue").toggle();
	});
});
$(function() {
	$( "#room" ).draggable({ containment: ".interface" });
		$("#closeroom").click(function(){ // Permet de fermer le catalogue depuis la croix rouge en haut à droite
		$("#room").hide();
	});
	$("#ouvrirroom").click(function(){ // Permet d'ouvrir l'appart depuis la navigateur Public
		$("#room").show(300);
		$("#nav").hide();
	});
		$("#ouvrirroom2").click(function(){ // Permet d'ouvrir l'appart depuis le navigateur Mes Appartements
		$("#room").show(300);
		$("#navM").hide();
	});
	$("#sortirImmediatement").click(function(){ // Permet de sortir depuis le bouton d'urgence d'un appartement
		$("#infoguide").toggle(100);
		$("#room").hide();
	});
});
$(function() {
	$( "#cataloguehc" ).draggable({ containment: ".interface" });

	$("#closecatahc").click(function(){ // Permet de fermer la garde robe depuis la croix rouge en haut à droite
		$("#cataloguehc").hide();
	});

	$("#ouvrircatahc").click(function(){ // Permet d'ouvrir le catalogue HC depuis la box HC
		$("#cataloguehc").toggle();
		$("#infohc").hide();
	});
});
$(function() {
	$( "#abonnement" ).draggable({ containment: ".interface" });

	$("#closecatabo").click(function(){ // Permet de fermer la garde robe depuis la croix rouge en haut à droite
		$("#abonnement").hide();
	});

});
</script>