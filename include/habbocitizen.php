<!-- 15 : Talents -->
	<div id="talents">

		<div class="box-header">
			<p class="title">EVOLUTION DE MES TALENTS</p>
			<p class="desc">Être un Habbo Citoyen</p>
		</div>

		<div class="box">

			<img id="fermermestalents" src="assets/images/talents/croix-illumina.png">

				<div class="begin">
				<p class="title">Ta voie pour devenir un véritable Habbo Citoyen</p>
				<p>On veut que tu profites un max du temps que tu passes dans Habbo, alors avant de partir à l'aventure, regarde ce que c'est d'être un Habbo Citoyen. Il y aura des prix - ça, c'est promis!</p>

				<p class="begin-mission">INSCRIS-TOI<br>SUR HABBO</p>
				<img class="done" src="assets/images/talents/done.png">
				<img class="moi" src="<?php echo $avatar; ?>">

				</div>

			<div class="separation"></div>

				<div class="habbosecurity">
				<p class="title">Exprime-toi !</p>
				<p>Un citoyen a droit à sa voix. Lis les 7 conseils qui vont suivre à propos de la Sécurité sur Habbo.</p>
				<div class="habbosecuritygo" id="habbosecuritygo"></div>
				</div>

			<div class="separation"></div>

				<div class="grow-up">
				<p class="title">Regarde autour de toi</p>
				<p>Maintenant que tu sais comment rester en sécurité sur Habbo, pourquoi ne pas faire un tour ? On est sûr que tu trouveras quelque chose à ton goût !</p>
				<div class="habbosecuritygo" id="habbosecuritygo"></div>
				</div>

			<div class="avance">
				<p>TES PROGRES EN TANT QUE CITOYEN : 10%</p>
				<div class="bar-avance"><div class="progression"></div></div>
			</div>


		</div>
	
	</div>

<!-- FIN TALENTS -->
<!-- 15 : Talents -->
	<div id="habbosecuritybox">

		<div class="box-header">
			<p class="title">BROCHURE SÉCURITÉ</p>
			<p class="desc">Reste en sécurité sur Habbo</p>
		</div>

		<div class="box">

			<div class="header"><img id="fermerHSB" src="assets/images/talents/croix-illumina.png"></div>

			<div id="consign" > <?php // permet l'ajax ?>

				<div class="hsbleft">
					<img src="assets/images/talents/hsb1.png">
				</div>

				<div class="hsbright">
					<p class="title">Protège tes informations personnelles</p>
					<p>Tu ne sais jamais avec qui tu es vraiment entrain de parler en ligne, donc ne donne jamais ton vrai nom, adresse, numéro de téléphone, photo ou nom de ton école. Partager ces informations personnelles peut te conduire à être victime d'une arnaque, d'intimidation ou de te mettre en danger.
					</p>
				</div>

				<div class="navbottom">
					<div class="nextillumina" id="nextillumina1"></div>
				</div>

			</div>

		</div>
	
	</div>

<!-- FIN TALENTS -->

<script>
  $(function() {
    $('#nextillumina1').click(function() {
      $('#consign').load('include/habbosecurity-pages/2.html', function() {
      });
    });
  });
</script>

