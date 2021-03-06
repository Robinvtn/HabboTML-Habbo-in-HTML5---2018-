<?php include('include/php/database.php'); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">

	<title>Habbo</title>
	<link rel="icon" type="image/ico" href="assets/images/autres/favion.ico" />
	<link rel="stylesheet" type="text/css" href="assets/styles/menu.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/navigateur.css">	
	<link rel="stylesheet" type="text/css" href="assets/styles/catalogue.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/profil.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/avatarlog.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/room.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/guide.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/habboclub.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/talents.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/game.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/minimail.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/account.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/gamecenter.css">

	<script src="assets/styles/js/avatarjs.js"></script>
	<script type="text/javascript" src="assets/styles/js/ajax.js"></script>
	<script type="text/javascript" src="assets/styles/js/jquery.js"></script>
	<script type="text/javascript" src="assets/styles/js/book.js"></script>
	<script type="text/javascript" src="assets/styles/js/goto.js"></script>
	<script type="text/javascript" src="assets/styles/js/jquery-1.4.4.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.rawgit.com/ashleighy/emoji.js/master/emoji.js.js"></script>
	<script src="assets/styles/js/tooltip.js"></script>
	<script src="https://cdn.rawgit.com/konvajs/konva/2.1.5/konva.min.js"></script>
</head>

<?php session_start(); if(!isset($_SESSION['login'])) {  include('include/account.php'); } ?>
<?php include('include/php/user-config.php'); ?>

<body style="margin:0px;" onload="document.getElementById('aff').style.display='none';">

<div id="aff">
	<div id="splash-screen">
	<div id="splash-screen-logo">
		<div id="splash-screen-logo-photo"></div>
		<div id="splash-screen-logo-frame"></div>
	</div>
	<div id="splash-screen-text">Patience!&nbsp;&nbsp;&nbsp;Habbo démarre..</div>
	<div id="splash-screen-bar">
		<div id="splash-screen-bar-progress"></div>
	</div>
	<div id="splash-screen-progress-count">99%</div>
</div>
</div>
<?php include('include/script.php'); ?>

<?php include('include/hotelview.php'); // les fichiers contenant la vue aérienne se trouvent ici ?>
<?php include('include/menu.php'); // les fichiers contenant le menu se trouvent ici, s'y rendre pour modifier le menu ?>

<?php include('include/navigateurs.php'); // les fichiers contenant le menu se trouvent ici, s'y rendre pour modifier le menu ?>
<?php include('include/catalogues.php'); // les fichiers contenant les catalogues se trouvent ici, s'y rendre pour modifier les catalogues ?>
<?php include('include/help.php'); // les fichiers contenant les boites d'aides ?>
<?php include('include/room.php'); // les fichiers contenant les codes des apparts // bientôt supprimé ?>
<?php include('include/habbocitizen.php'); // les fichiers contenant les codes de la Habbo Talents &cie ?>
<?php include('include/minimail.php'); // les fichiers contenant les codes des minimails ?>
<?php include('include/gamecenter.php'); // les fichiers contenant le game center ?>

<!-- 8 - Profil -->
	<div id="profilBox">
		<div class="top">
			<p>Mon Profil</p>
			<img id="closeProfil" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">
		</div>
		<div class="contenair">
		
			<div class="left">
				<div class="left-left">
					<img src="<?php echo $avatar; ?>">
				</div>
			
				<div class="left-right">
					<p><b>Robin</b></p>
					<p><i><?php echo $motto; ?></i></p><br>
					<p><b>Crée</b> <?php echo $date; ?></p>
					<p><b>Dernière connexion :</b> <?php echo $derniere_connexion; ?> </p>
					<p><b>Points d'activité :</b> <?php echo $points; ?></p>
				</div>

				<div class="badges">
					<p>Cet utilisateur n'a aucun badge!</p>
				</div>
			</div>
			<div class="separation-vertical"></div>
			<div class="right">
				<p><b>Amis :</b> <?php echo $amis; ?></p>

				<div class="bestfriend"><img src="https://www.habbo.com/habbo-imaging/avatarimage?hb=image&user=Pulx&headonly=1&direction=2&head_direction=2&action=&gesture=&size=m"><p><b>Robin</b> est dans ses meilleurs amis</p></div>
				<div class="bestfriend"><img src="https://www.habbo.fr/habbo-imaging/avatarimage?hb=image&user=Pulx&headonly=1&direction=2&head_direction=2&action=&gesture=sml&size=m"><p><b>Jan</b> est dans ses meilleurs amis</p></div>
				<div class="bestfriend"><img src="https://www.habbo.com.br/habbo-imaging/avatarimage?hb=image&user=Pulx&headonly=1&direction=2&head_direction=2&action=&gesture=sml&size=m"><p><b>Mix</b> est dans ses meilleurs amis</p></div>
			</div>
			<div class="separation-horizontal"></div>
			<div class="apparts" id="ouvrirroom4"><img src="assets/images/profil/apparts.png"><p>Voir ses appartements</p></div>
			<div class="separation-horizontal"></div>

			<div class="groupe-contenair">
				<p><b>Groupes :</b> 0</p>
			</div>
		</div>
	</div>
<!-- Fin Profil -->

<!-- 9 - Changer de look -->
	<div id="avatarChanger">
		<div id="avatarcontent">
			<div class="avatartop">
				<p>Changer de look</p>
				<img style="position: absolute; right: 10px; top: 5px; cursor: pointer;" id="closeavatar" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">

	<nav class="content_choix" style="background-color: #0E3F52;">
		<ul class="first_child">
			<li class="background-image mainNav selected" nav-point="hd" style="background-image: url('assets/images/avatar/Genre.png');" onclick="openNav('hd');setSet('hd')"></li>
			<li class="background-image mainNav" nav-point="hr" style="background-image: url('assets/images/avatar/Tete.png');" onclick="openNav('hr'); setSet('hr');"></li>
			<li class="background-image mainNav" nav-point="ch" style="background-image: url('assets/images/avatar/Haut.png');" onclick="openNav('ch');setSet('ch');"></li>
			<li class="background-image mainNav" nav-point="lg" style="background-image: url('assets/images/avatar/Bas.png');" onclick="openNav('lg');setSet('lg');"></li>
		</ul>

		<ul class="sub" subnav="hr" style="background-color: #E9E9E1; margin-top: 20px;">
			<li class="nav selected" subnav-point='hair' onclick="setSet('hr');activateSub('hair')"><img src="assets/images/avatar/Cheveux.png"><li>
			<li class="nav" subnav-point='hats' onclick="setSet('ha');activateSub('hats')"><img src="assets/images/avatar/Chapeaux.png"></li>
			<li class="nav" subnav-point='he' onclick="setSet('he');activateSub('he')"><img src="assets/images/avatar/AcTete.png"></li>
			<li class="nav" subnav-point='ea' onclick="setSet('ea');activateSub('ea')"><img src="assets/images/avatar/Lunettes.png"></li>
			<li class="nav" subnav-point='fa' onclick="setSet('fa');activateSub('fa')"><img src="assets/images/avatar/AcVisage.png"></li>
		</ul>

		<ul class="sub" subnav="ch"  style="background-color: #E9E9E1; margin-top: 20px;">
			<li class="nav selected" subnav-point='ch' onclick="setSet('ch');activateSub('ch')"><img src="assets/images/avatar/Shirt.png"></li>
			<li class="nav" subnav-point='cp' onclick="setSet('cp');activateSub('cp')"><img src="assets/images/avatar/ShirtPlus.png"></li>
			<li class="nav" subnav-point='cc' onclick="setSet('cc');activateSub('cc')"><img src="assets/images/avatar/Vestes.png"></li>
			<li class="nav" subnav-point='ca' onclick="setSet('ca');activateSub('ca')"><img src="assets/images/avatar/Bijoux.png"></li>
		</ul>

		<ul class="sub" subnav="lg"  style="background-color: #E9E9E1; margin-top: 20px;">
			<li class="nav selected" subnav-point='lg' onclick="setSet('lg');activateSub('lg')"><img src="assets/images/avatar/Pantalons.png"></li>
			<li class="nav" subnav-point='sh' onclick="setSet('sh');activateSub('sh')"><img src="assets/images/avatar/Shoes.png"></li>
			<li class="nav" subnav-point='wa' onclick="setSet('wa');activateSub('wa')"><img src="assets/images/avatar/Ceintures.png"></li>
		</ul>
	</nav>

				<div style="float: right; margin-right: 35px; margin-bottom: 50px;"> <!-- AVATAR -->
					<div id="avatar"></div>
					<div style="clear: both"></div>
					<div class="rotate left" onclick="rotateAvatar('left')"></div>
				</div>
				<div style="float: left;" id="option">	<!-- PARTIE GAUCHE -->
						<p style="color: black;">Choisis quelque chose</p>
						<div id="clothes" style="padding-left: 5px; "></div>
						<p style="color: black">Choisis une couleur</p>
						<div id="palette" style="padding-left: 5px; margin-top: -0px;"></div>
				</div>

				
				<br><br><div id="closeavatarBtn"><a><img src="assets/images/avatar/sechanger.png" onmouseover="this.src='assets/images/avatar/sechanger-onclick.png'" onmouseout="this.src='assets/images/avatar/sechanger.png'"></a></div>
			</div>
		</div>
	</div>
	<script src="assets/styles/js/avatarimage.js"></script>
	</div>
<!-- Fin Changer de Look -->

<!-- 10 - Box HC -->
<?php if($hc = 0) { ?>
<div id="infohc"> 
	<div id="hctab">
		<div class="top"> 
			<p>Centre HC</p>
			<img id="closeinfohc" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">
		</div>
		<div class="inside_A">
			<div class="btn-buy" id="ouvrircatahc"><p>Achète HC</p></div>
			<div class="icontop"></div>
			<div class="hcstatus"><h1>Statut HC: Inactif</h1><p>Rejoindre le Habbo Club</p></div>
			<div class="hcpayday"><h1>Jour de paiement HC</h1><p>Chaque mois, en achetant au catalogue, les membres HC obtiennent des crédits.</p><br>
			<a>En savoir plus...</a></div>
			<div class="hcpaydaycount"><h1>Jour de paie HC dans:</h1><p>19 jours</p></div>
			<div class="hcgift"><h1>Cadeaux HC mensuel</h1><p>Les membres HC reçoivent un cadeau gratuit chaque mois!</p></div>
			<div class="btn-gift">Voir</div>
			<div class="hcbenefits">
				<h1>Plus d'avantages HC:</h1>
				<p> - Grande sélection de vêtements et de couleurs<br>
					- Navigation sans publicités<br>
					- Plus de danses et de bulles de tchat<br>
					- Deux fois plus de Duckets<br>
				</p><a>Consulte tous les avantages</a>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
	<div id="infohc"> 
	<div id="hctab">
		<div class="top"> 
			<p>Centre HC</p>
			<img id="closeinfohc" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">
		</div>
		<div class="inside_A">
			<div class="btn-buy" id="ouvrircatahc"><p>Catalogue</p></div>
			<div class="icontop"></div>
			<div class="hcstatus"><h1>Statut HC: Actif</h1><p>Abonné à vie au Habbo Club</p></div>
			<div class="hcpayday"><h1>Jour de paiement HC</h1><p>Chaque mois, en achetant au catalogue, les membres HC obtiennent des crédits.</p><br>
			<a>En savoir plus...</a></div>
			<div class="hcpaydaycount"><h1>Jour de paie HC dans:</h1><p>19 jours</p></div>
			<div class="hcgift"><h1>Cadeaux HC mensuel</h1><p>Les membres HC reçoivent un cadeau gratuit chaque mois!</p></div>
			<div class="btn-gift">Voir</div>
		</div>
	</div>
</div>
<?php } ?>
<!-- Fin Box HC -->


<!-- 10 - Inventaire -->
<div id="inv"> 
	<div id="invtab">
		<div class="top"> 
			<p>Inventaire</p>
			<img id="closeinventaire" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">
		</div>
		<div class="choix"> 
			<a class="refresh_navarticle new choisir selected">Mobiliers</a>
			<a class="refresh_navarticle all choisir">Badges</a>
		</div>
		<div class="inside">
			<div class="inside_A">
			
			</div>
		</div>
	</div>
</div>
<!-- Fin Inventaire -->
<!-- FIN PARTIE 2 -->

	<?php if(isset($_SESSION['login'])) {  ?>
	<audio src="assets/audio/credits.mp3" autoplay />
	<audio src="assets/audio/duckets.mp3" autoplay />
	<?php } ?>

</body>
</html>
