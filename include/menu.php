<div id="barre">
	
	<div class="menu">
		<ul>
				<div id="hotel-view-bar-icons">
					<span class="hotel-view-bar-icon-house"></span>
					<span id="ouvrirnavigateur" class="hotel-view-bar-icon-rooms"></span>
					<span id="ouvrircatalogue" class="hotel-view-bar-icon-catalogue"></span>
					<span id="ouvririnventaire" class="hotel-view-bar-icon-inventory"></span>
					<span id="ouvrirgamecenter" class="hotel-view-bar-icon-games"></span>
				</div>

			<li class="choix_A" style="margin-top: -10px;"><a id="menu1"><img src="<?php echo $avatarhead; ?>" class="masterTooltip" title="Moi"></a>
				<ul id="sousmenu1">
					<li class="choix_B"><a id="ouvrirmestalents"><img src="assets/images/menu/talents.png" onmouseover="this.src='assets/images/menu/talents-onclick.png'" onmouseout="this.src='assets/images/menu/talents.png'"></a></li>
					<li class="choix_B"><a id="ouvrirminimail"><img src="assets/images/menu/minimail.png" onmouseover="this.src='assets/images/menu/minimail-onclick.png'" onmouseout="this.src='assets/images/menu/minimail.png'"></a></li>
					<li class="choix_B"><a id="ouvrirProfil"><img src="assets/images/menu/profil.png" onmouseover="this.src='assets/images/menu/profil-onclick.png'" onmouseout="this.src='assets/images/menu/profil.png'"></a></li>
					<li class="choix_B"><a id="ouvrirmesappartements"><img src="assets/images/menu/rooms.png" onmouseover="this.src='assets/images/menu/rooms-onclick.png'" onmouseout="this.src='assets/images/menu/rooms.png'"></a></li>
					<li class="choix_B"><a id="ouvriravatar"><img src="assets/images/menu/clothes.png" onmouseover="this.src='assets/images/menu/clothes-onclick.png'" onmouseout="this.src='assets/images/menu/clothes.png'"></a></li>
				</ul>
			</li>
		</ul>
	</div>

	<div id="hotel-view-bar-friends">
		<div id="hotel-view-bar-friends-icons">
			<span class="hotel-view-bar-friends-icon-all"></span>
			<span class="hotel-view-bar-friends-icon-search"></span>
		</div>


<?php if($amis == 0) { ?>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
<?php } else if($amis == 1) { ?>

			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>

			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
<?php } else if($amis == 2) { ?>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
<?php } else if($amis == 3) { ?>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
<?php } else if($amis <= 10 && $amis > 3) { ?> 
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
<?php } else if($amis > 10) { ?>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Plus d'amis
			</div>
			<div class="hotel-view-bar-friends-slot no-friends">
				<img src="assets/images/hotelview/barIcons/friend_head.png">
				Les voir tous
			</div>
<?php } ?>
		</div>

</div>
<!-- 5 - Boite d'info -->
<div id="info">
	<div class="point">
		<span class="credits" style="color: #36C2E3;" title="Tu as 0 diamants"><?php echo $diamonds; ?></span>
        <img src="assets/images/hotelview/windowManagerIcons/diamond.png" class="masterTooltip" title="Obtenir + de diamants" style="padding-left: 4px;"> <!-- DIAMONDS ICON -->
		<span class="credits" style="color: #CF82D1;" title="Tu as 0 duckets"><?php echo $duckets; ?></span>
		<img src="assets/images/hotelview/windowManagerIcons/ducket.png" class="masterTooltip" title="Obtenir + de duckets"> <!-- DUCKETS ICON -->
		<span class="credits" style="color: #CCA923;" title="Tu as 0 crédits"><?php echo $credits; ?></span> 
		<img src="assets/images/hotelview/windowManagerIcons/credit.png" class="masterTooltip" title="Obtenir + de crédits"> <!-- CREDITS ICON -->
	</div>
	<div class="certif">
		<a id="ouvririnfohc"><img src="assets/images/hotelview/windowManagerIcons/hc.png"><p><b><?php if($hc == 0) { echo "Rejoins"; } else { echo "À vie"; } ?></b></p></a>
	</div>
	<div class="limit"></div>
	<div class="bouton">
		<a id="guide" class="guide">Aide</a> <!-- AIDE BOUTON -->
		<a href="logout.php" class="deco"><img src="assets/images/hotelview/windowManagerIcons/logout.png"></a> <!-- DECONNEXION BOUTON -->
		<a id="param" class="param"><img src="assets/images/hotelview/windowManagerIcons/settings.png"></a> <!-- PARAMETRE BOUTON -->
	</div>
</div>
<!-- Fin Boite d'info -->
