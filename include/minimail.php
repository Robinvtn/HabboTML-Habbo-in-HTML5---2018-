<?php 

$req = $bdd->query('SELECT  COUNT(*) as NbMM FROM minimail');
$donnees = $req->fetch();
$req->closeCursor();

?>

<!-- 11 - Box Aide utilisateur --> 
<div id="minimail"> 
	<div id="guidetab">
		<div class="top"> 
			<p>Minimail (<?php echo $donnees['NbMM']; ?>)</p>
			<img id="fermerminimail" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">
		</div>

	<?php if($donnees['NbMM'] == 0) { ?>

		<div class="left">
			<img src="assets/images/minimail/4.png">
		</div>

		<div class="right">
			<p class="title"><img src="assets/images/minimail/1.png">&nbsp;&nbsp;Tout est prêt</p>
			<p>Mais Franck ne semble pas pouvoir dire grand chose...</p>
		</div>

	<?php } else { ?>

		<div class="left">
			<img src="assets/images/minimail/4.png">
		</div>

		<div class="right">
			<p class="title"><img src="assets/images/minimail/1.png">&nbsp;&nbsp;Ici, vous trouverez vos minimails !</p>
			<p>Vous pouvez les désactiver dans les paramètres du jeu.</p>
		</div>
		<hr>

	<?php } ?>

<?php 
	// On récupère tout le contenu de la table
$r = $bdd->query('SELECT * FROM minimail');

// On affiche chaque entrée une à une
while ($d = $r->fetch())
{ ?>

	<div id="minimails">
		<p class="title"><?php echo $d['title']; ?></p>
		<p><?php echo $d['description']; ?></p>
	</div>	

<?php }

$r->closeCursor(); // Termine le traitement de la requête

?>


	</div>
</div> 
<!-- Fin Box aide utilisateur -->