<script>
//  Bienvenue à toi
	///////  //////  //   //  //  //      //      //////      //////  //    //  //////
	//   //  //      //  //       //      //      //          //      //\   //  //
	///////  //      //////   //  //      //      //////      //	  //  / //    //
	//   //  //      //  //   //  //      //      //          //      //    //      //
	//   //  //////  //  //   //  //////  //////  //////      //////  //    //  //////
//	ACHILLE CMS COPYRIGHT
	//////   //////  //////  //  //   /      //      // /////////  //   /
	//  //   //  //  //  //      ///  /       //    //     //      ///  /
	//////   //  //  //////  //  // / /        //  //      //      // ///
	////     //  //  //  //  //  //  //         ////       //      //  //
	//  //   //////  //////  //  //  //          //        //      //  //
//  MODIFIE PAR ROBIN VTN
//	Merci de bien vouloir respecter nos longues heures qu'ont coutées ce travail.

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    

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

	$("#ouvriraidepart1cat1").click(function(){ // Ferme la boite d'Aide
		$("#aidepart1cat1").toggle();
		$("#infoguide").hide();
	});

	$("#ouvriraidepart1cat2").click(function(){ // Ferme la boite d'Aide
		$("#aidepart1cat2").toggle();
		$("#infoguide").hide();
	});

});

$( function() {
	$( "#aidepart1cat1" ).draggable({ containment: ".interface" });

	$("#closeaidepart1cat1").click(function(){ // Ferme la boite d'Aide
		$("#aidepart1cat1").hide();
	});

	$("#closeaidepart2cat1").click(function(){ // Ferme la boite d'Aide
		$("#aidepart2cat1").hide();
	});

	$("#ouvriraidepart2cat1").click(function(){ // Ferme la boite d'Aide
		$("#aidepart2cat1").toggle();
		$("#aidepart1cat1").hide();
	});

	$("#ouvriraidepart2cat2").click(function(){ // Ferme la boite d'Aide
		$("#aidepart2cat2").toggle();
		$("#aidepart1cat1").hide();
	});

	$("#ouvriraidepart2cat3").click(function(){ // Ferme la boite d'Aide
		$("#aidepart2cat1").toggle();
		$("#aidepart1cat1").hide();
	});

});

$( function() {
	$( "#alert" ).draggable({ containment: ".interface" });

	$("#closealert").click(function(){ // Ferme la boite d'Aide
		$("#alert").hide();
	});

	$("#ouvriralert").click(function(){ // Ferme la boite d'Aide
		$("#alert").toggle();
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


$(function() {
	$( "#navA" ).draggable({ containment: ".interface" });

	$("#ouvrirMesAppartements").click(function(){ // Permet d'ouvrir l'onglet "Mes apparts" depuis l'onglet Public du navigateur
		$("#navM").toggle();
		$("#nav").hide();
	});
	$("#ouvrirroom4").click(function(){ // Permet d'ouvrir l'appart depuis les boxs de profil
		$("#nav").show();
		$("#profilBox").hide();
	});
});

$(function() {
	$( "#navM" ).draggable({ containment: ".interface" });

	$("#fermermesappartements").click(function(){ // Permet de fermer l'onglet "mes appartements" depuis la croix rouge en haut à droite du navigateur
		$("#navM").hide();
	});

	$("#closenavigateurA").click(function(){ // Permet de fermer l'onglet "Mes apparts" du navigateur
		$("#navM").hide();
	});

	$("#ouvrirnavP").click(function(){	// Permet d'ouvrir l'onglet "Public" depuis l'onglet "Mes apparts" du navigateur
		$("#navM").hide();
		$("#nav").toggle();
	});

	$("#ouvrirmesappartements").click(function(){ // Permet d'ouvrir l'onglet "mes appartements" du navigateur depuis le sous-menu "Moi" du menu
	$("#navM").toggle();
	$("#sousmenu1").hide();
	});
});

$(function() {
	$( "#infohc" ).draggable({ containment: ".interface" });
		$("#closeinfohc").click(function(){ // Permet de fermer le centre HC depuis la croix rouge en haut à droite
		$("#infohc").hide();
	});
	$("#ouvririnfohc").click(function(){ // Permet d'ouvrir le centre HC
		$("#infohc").toggle();
	});
	$("#ouvriravantagesHC").click(function(){ // Permet d'ouvrir le centre HC
		$("#infohc").toggle();
	});
	$("#ouvriralreadyhc").click(function(){ // Permet d'ouvrir le catalogue depuis le menu
		$("#infohc").toggle();
		$("#cataloguehc").hide(); 
	});
});

$(function() {
	$( "#inv" ).draggable({ containment: ".interface" });
	
	$("#closeinventaire").click(function(){ // Permet de fermer le catalogue depuis la croix rouge en haut à droite
		$("#inv").hide();
	});

	$("#ouvririnventaire").click(function(){ // Permet d'ouvrir le catalogue depuis le menu
		$("#inv").toggle();
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
	$("#ouvrircatalogue2").click(function(){ // Permet d'ouvrir le catalogue depuis le catalogue ABONNEMENT
		$("#catalogue").toggle();
		$("#cataloguehc").hide();
	});
	$("#ouvrircataloguehc").click(function(){ // Permet d'ouvrir le catalogue Abonnement depuis le centre HC
		$("#catalogue").show(300);
		$("#infohc").hide();
	});
	$("#ouvrircataloguehc2").click(function(){ // Permet d'ouvrir le catalogue Abonnement depuis le centre HC
		$("#cataloguehc").show();
		$("#catalogue").hide();
	});
	$("#ouvrircataloguemobis").click(function(){ // Permet d'ouvrir le catalogue Mobis depuis ACCUEIL
		$("#cataloguemobis").show();
		$("#catalogue").hide();
	});
	$("#ouvrircataloguemobis2").click(function(){ // Permet d'ouvrir le catalogue Mobis depuis ABONNEMENT
		$("#cataloguemobis").show();
		$("#cataloguehc").hide();
	});
	$("#ouvrircatalogue3").click(function(){ // Permet d'ouvrir le catalogue depuis le catalogue MOBIS
		$("#catalogue").toggle();
		$("#cataloguemobis").hide();
	});
	$("#ouvrircataloguehc3").click(function(){ // Permet d'ouvrir le catalogue HC depuis le catalogue MOBIS
		$("#cataloguehc").toggle();
		$("#cataloguemobis").hide();
	});
	$("#closecatamobis").click(function(){ // Permet de fermer la garde robe depuis la croix rouge en haut à droite
		$("#cataloguemobis").hide();
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
		$("#shareappart").hide();
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
	$( "#msgbvn" ).draggable({ containment: ".interface" });

	$("#closemsgbvn").click(function(){ //Permet de fermer le message de bienvenue
		$("#msgbvn").hide();
	});
});

$(function() {
	$( "#connexion" ).draggable({ containment: ".interface" });

	$("#closeconnexion").click(function(){ //Permet de fermer la page de connexion
		$("#connexion").hide();
	});

	$("#closeconnexion2").click(function(){ //Permet de fermer la page de connexion depuis le btn inscrip
		$("#connexion").hide();
	});
});


$(function() {
	$( "#shareappart" ).draggable({ containment: ".interface" });

	$("#closeshareappart").click(function(){ // Permet de fermer la garde robe depuis la croix rouge en haut à droite
		$("#shareappart").hide();
	});

	$("#ouvrirshareappart").click(function(){ // Permet d'ouvrir le catalogue HC depuis la box HC
		$("#shareappart").toggle();
	});
});

$(function() {
	$( "#talents" ).draggable({ containment: ".interface" });

	$("#fermermestalents").click(function(){ // Permet de fermer la garde robe depuis la croix rouge en haut à droite
		$("#talents").hide();
	});

	$("#ouvrirmestalents").click(function(){ // Permet d'ouvrir le catalogue HC depuis la box HC
		$("#talents").toggle();
	});
});

</script>
<script src="assets/styles/js/avatarjs.js"></script> 
<script>
$(function() {
	$( "#avatarChanger" ).draggable({ containment: ".interface" });

	$("#closeavatar").click(function(){ // Permet de fermer la garde robe depuis la croix rouge en haut à droite
		$("#avatarChanger").hide();
	});

	$("#sechanger").click(function(){ // Permet de fermer la garde robe depuis la croix rouge en haut à droite
		$("#avatarChanger").show();
	});

	$("#ouvriravatar").click(function(){ // Permet d'ouvrir la garde robe depuis le sous-menu "Moi" du menu
		$("#avatarChanger").toggle();
		$("#sousmenu1").hide();
	});
});


var Avatargenerator = new Avatargenerator(); // Permet de générer l'éditeur d'avatar 

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////    
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////          
</script>