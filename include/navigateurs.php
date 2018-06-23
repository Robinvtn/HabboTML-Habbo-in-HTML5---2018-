<!-- PARTIE 2 : BOITES PRINCIPALES -->


<!-- 6 - Navigateur Tous Les Appartements -->
<div id="nav"> 
		<div class="top"> 
			<p>Navigateur - Tous les apparts</p>
			<img id="closenavigateur" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">
		</div>
		<div class="choix"> 
			<img id="flux" src="assets/images/nav/flux.gif" class="refresh_navarticle">
			<a class="refresh_navarticle new choisir selected">Tous les apparts</a>
			<a class="refresh_navarticle all choisir" id ="ouvrirMesAppartements">Mes appartements</a>
		</div>
		<div class="inside"> 
			<div id="fluxcom"></div>
			<div class="search">
			<span class="custom-dropdown custom-dropdown--white">
				<select class="custom-dropdown__select custom-dropdown__select--white">
					<option>Tous</option>
					<option>Nom d'appart</option>
					<option>Propriétaire</option>
					<option>Groupes</option>
					<option>Tag</option>
				</select>
			</span>
			<input type="text" placeholder="Rechercher un article" style="top: 2px;">
		</div>

		<div id="box"> <!-- Boite contenant les lieux publics -->
			<div class="box A" id="ouvrirroom">
				<div class="bloc voir_article">
					<div style="background-image: url(assets/images/nav/top.png);" class="image_new"></div>
					<div class="bas">
						<div class="titre">La Réceptionnn</div>
						<div class="info">
							<div class="info_article">
								<img src="assets/images/nav/info.gif" class="bouton">
								<span class="article_info">
									<div class="ts_article">
										<div class="image" style="background-image: url(assets/images/nav/top.png);"></div>
										<div class="text"><p>La Réceptionnn</p><p>Bienvenue sur Habbo!</p></div>
									</div>
									<div class="plus_info">
										<div class="auteur">
											<img src="assets/images/nav/auteur.gif">
											<span>officialsroomsfr</span>
										</div>
										<div class="mention">
											<span>Crée le:</span> 24/05/2018<br>
											<span>Vote</span> 59 680
										</div>
										<div class="tag">
										#Habbo
										</div>
									</div>
								</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
<!-- Fin Navigateur Tous Les Appartements -->

<!-- 6b - Navigateur Mes Appartements -->
	<div id="navM">
		<div class="top">
			<p>Navigateur - Mes appartements</p>
			<img id="closenavigateurA" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'">
		</div>
		<div class="choix">
			<img id="flux" src="assets/images/nav/flux.gif" class="refresh_navarticle">
			<a class="refresh_navarticle new choisir" id="ouvrirnavP">Tous les apparts</a>
			<a class="refresh_navarticle all choisir selected">Mes Appartements</a>
		</div>
		<div class="inside">
		<div id="fluxcom"></div>
		<div class="search">
			<span class="custom-dropdown custom-dropdown--white">
			<select class="custom-dropdown__select custom-dropdown__select--white">
				<option>Tous</option>
				<option>Nom d'appart</option>
				<option>Propriétaire</option>
				<option>Groupes</option>
				<option>Tag</option>
			</select>
			</span>
			<input type="text" name="motcle" placeholder="Rechercher un article">
		</div>
		<div id="box">
			<div class="liste" id="ouvrirroom2">
				<a class="voir_article">
					<div class="nombrePersonnes"><img src="assets/images/nav/personnes.png" style="margin-left: -8px; margin-top: 3px;">&nbsp;100</div>
				<div class="titre">La Réceptionnn</div>
				</a>
				<div class="info">
					<div class="info_article">
						<img src="assets/images/nav/info.gif" class="bouton">
						<span class="article_info">
							<div class="ts_article">
							<div class="image" style="background-image: url(assets/images/nav/top.png);"></div>
								<div class="text">
									<p>La Réceptionnn</p><p>Bienvenue sur Habbo !</p>
								</div>
							</div>
							<div class="plus_info">
								<div class="auteur"><img src="assets/img/auteur.gif"><span>officialsroomsfr</span></div>
								<div class="mention"><span>Crée le: 24/05/2018</span><br><span>Vote: 59 680</span> </div>
								<div class="tag">#Habbo</div>
							</div>
						</span>
					</div>
				</div>
			</div>
		</div>
	</div>

		</div>
		</div>
		</div>
<!-- Fin Navigateur Mes Appartements -->