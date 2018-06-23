<?php include('include/php/login.php'); ?>
	<div id="connexionillumina">

		<div class="box-header">
			<p class="title">NOUS N'AVONS PAS SU TOUT FAIRE...</p>
			<p class="desc">Connectez-vous à Habbo Hôtel !</p>
		</div>

		<div class="box">

			<div class="connexionleft">

				<p class="title"><img src="assets/images/account/4.png">&nbsp;&nbsp;Se connecter</p>
				<p>Connecte-toi à Habbo Hôtel</p>
				<?= $message?:'' ?>

					<form action = "#" method = "post">
				    <input class="mail" placeholder="Pseudonyme" type = "text" name = "pseudo" />
    				<input  class="mdp" placeholder="Mot de passe" type = "password" name = "pass" /><br><br>
    				<input class="btngo" type = "submit" value = "C'est parti!"/>
    				</form>

    			<br><br><center><p style="text-decoration: underline;">Mot de passe oublié ?</p></center>

			</div>

			<div class="connexionright">
				<p class="title"><img src="assets/images/account/1.png">&nbsp;&nbsp;Toujours pas inscrit ?</p>
				<p>Nous vous attendions justement !</p>

				<center><img src="assets/images/account/2.png" style="margin: 20px;"></center>

				<a href="join.php"><div class="illumina-button">S'inscrire sur Habbo</div></a>
				<a href="#"><div class="illumina-button">En savoir plus</div></a>
			</div>

		</div>
	
	</div>