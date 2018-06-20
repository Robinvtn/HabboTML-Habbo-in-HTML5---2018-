<script type="text/javascript">

/***********************************************
* Switch Menu script- by Martial B of http://getElementById.com/
* Modified by Dynamic Drive for format & NS4/IE4 compatibility
* Visit http://www.dynamicdrive.com/ for full source code
***********************************************/

var persistmenu="yes" //"yes" or "no". Make sure each SPAN content contains an incrementing ID starting at 1 (id="sub1", id="sub2", etc)
var persisttype="sitewide" //enter "sitewide" for menu to persist across site, "local" for this page only

if (document.getElementById){ //DynamicDrive.com change
document.write('<style type="text/css">\n')
document.write('.submenu{display: none;margin-right: 3px;max-height: 210px;overflow-x: hidden;overflow-y: auto;}\n')
document.write('</style>\n')
}

function SwitchMenu(obj){
	if(document.getElementById){
	var el = document.getElementById(obj);
	var ar = document.getElementById("nav_body").getElementsByTagName("div"); //DynamicDrive.com change
		if(el.style.display != "block"){ //DynamicDrive.com change
			for (var i=0; i<ar.length; i++){
				if (ar[i].className=="submenu") //DynamicDrive.com change
				ar[i].style.display = "none";
			}
			el.style.display = "block";
		}else{
			el.style.display = "none";
		}
	}
}

function get_cookie(Name) { 
var search = Name + "="
var returnvalue = "";
if (document.cookie.length > 0) {
offset = document.cookie.indexOf(search)
if (offset != -1) { 
offset += search.length
end = document.cookie.indexOf(";", offset);
if (end == -1) end = document.cookie.length;
returnvalue=unescape(document.cookie.substring(offset, end))
}
}
return returnvalue;
}

function onloadfunction(){
if (persistmenu=="yes"){
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=get_cookie(cookiename)
if (cookievalue!="")
document.getElementById(cookievalue).style.display="block"
}
}

function savemenustate(){
var inc=1, blockid=""
while (document.getElementById("sub"+inc)){
if (document.getElementById("sub"+inc).style.display=="block"){
blockid="sub"+inc
break
}
inc++
}
var cookiename=(persisttype=="sitewide")? "switchmenu" : window.location.pathname
var cookievalue=(persisttype=="sitewide")? blockid+";path=/" : blockid
document.cookie=cookiename+"="+cookievalue
}

if (window.addEventListener)
window.addEventListener("load", onloadfunction, false)
else if (window.attachEvent)
window.attachEvent("onload", onloadfunction)
else if (document.getElementById)
window.onload=onloadfunction

if (persistmenu=="yes" && document.getElementById)
window.onunload=savemenustate
</script>   

<!-- 7 - Catalogue Accueil -->
<div id="catalogue"> 
		<div class="navigator">
			<div class="navigator-top">
		        <p>Catalogue</p>
		        <img src="assets/images/nav/aide.gif" />
		        <img id="closecata" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'" />
	    	</div>
	    	<div class="choix">
				<center><a class="choisir selected">Accueil</a>
				<a class="choisir" id="ouvrircataloguemobis">Mobiliers</a>
				<a class="choisir">Vêtements</a>
				<a class="choisir">Animaux</a>
				<a class="choisir" id="ouvrircataloguehc2">Abonnements</a></center>
			</div>
			<div class="bar"></div>
	   		
	   		<div class="navigator-contenair">
	        	<div class="left"><div class="text">Bienvenue sur Habbo !</div></div>
	        	<div class="right">
		        	<div class="right-top"><div class="text">Nouveaux tableaux RARES disponibles !</div></div>
		        	<div class="right-center"><div class="text">Pars à la conquête avec Jacques</div></div>
		        	<div class="right-bottom"><div class="text">NOUVEAUX mobis Country 2018</div></div>
	        	</div>
	    	</div>
	</div>
			</div>
<!-- Fin Catalogue Accueil -->



<!-- 7C - Catalogue Mobis -->
<div id="cataloguemobis"> 
		<div class="navigator">
			<div class="navigator-top">
		        <p>Catalogue</p>
		        <img src="assets/images/nav/aide.gif" />
		        <img id="closecatamobis" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'" />
	    	</div>
	    	<div class="choix">
				<center><a class="choisir" id="ouvrircatalogue3">Accueil</a>
				<a class="choisir selected">Mobiliers</a>
				<a class="choisir">Vêtements</a>
				<a class="choisir">Animaux</a>
				<a class="choisir" id="ouvrircataloguehc3">Abonnements</a></center>
			</div>
			<div class="bar"></div>
	   		
	   		<div class="navigator-contenair">
	        <div class="left">
	        	<input type="text" placeholder="Rechercher.." />
				<div class="catalogue_pages">


<div id="nav_body">

	<div id="front_page" class="cat">
		<div class="icon" style="background: url('assets/images/cat/icon_0.png'); background-repeat: no-repeat; margin-top: -2px"></div>Accueil
	</div>

	<div class="cat" onclick="SwitchMenu('sub1')">
		<div class="icon" style="background: url('assets/images/cat/icon_2.png'); background-repeat: no-repeat; margin-top: -2px"></div>Mobiliers
	</div>
		<!-- sous menu -->
	   <div id="sub1" class="submenu">
		    <a> 
		      <div id="bases" class="subcat" style="margin-right: 10px;">
		      	<div class="icon" style="background: url('assets/images/cat/icon_17.png'); background-repeat: no-repeat; margin-top: -2px"></div> Incontournables
		      </div>
		    </a>
	 	</div>
	 	<!-- fin -->

	<div id="appartements" class="cat">
		<div class="icon" style="background: url('assets/images/cat/icon_55.png'); background-repeat: no-repeat; margin-top: -2px"></div>Appartements
	</div>	 
	
</div>


	  
	 
				</div>
			</div>


	        <div class="right">
	        	<div id="contenu" style="margin: 10px;">
	        		<p class="frontpage_title">Qu'est-ce que je peux trouver dans la boutique ?</p>
	        		<p class="descrip">Pour tout ce que tu aimes faire dans Habbo, tu trouveras un moyen d'en profiter encore plus en parcourant la Boutique.</p><br>

	        		<p class="frontpage_title">Où obtenir des crédits ?</p>
	        		<p class="descrip">Vous pouvez demander des crédits à un membre du staff d'Habbo Hôtel, néanmoins si vous possèdez déjà un montant de crédits suffisant nous ne vous donnerons rien.</p><br>

	        		<p class="frontpage_title">Un soucis ?</p>
	        		<p class="descrip">En cas de soucis technique, d'une question ou autre, contactez-nous via le bouton d'aide situé en haut à droite de votre écran.</p>
	        	</div>
	        </div>

	    </div>
	</div>
			</div>

<script>
  $(function() {
    $('#bases').click(function() {
      $('#contenu').load('include/catalogue-pages/bases.html', function() {
      });
    });
  });
 </script>
 <script>
  $(function() {
    $('#front_page').click(function() {
      $('#contenu').load('include/catalogue-pages/frontpage.html', function() {
      });
    });
  });
 </script>
  <script>
  $(function() {
    $('#appartements').click(function() {
      $('#contenu').load('include/catalogue-pages/appartements.html', function() {
      });
    });
  });
 </script>
<!-- Fin Catalogue Mobis -->

<!-- 7b - Catalogue Abonnement -->	
	<div id="cataloguehc">
		<div class="navigator">
			<div class="navigator-top">
		        <p>Catalogue</p>
		        <img src="assets/images/nav/aide.gif" />
		        <img id="closecatahc" src="assets/images/nav/croix.gif" onmouseover="this.src='assets/images/nav/croixh.gif'" onmouseout="this.src='assets/images/nav/croix.gif'" />
	    	</div>
			<div class="choix">
				<center><a class="choisir" id="ouvrircatalogue2">Accueil</a>
				<a class="choisir" id="ouvrircataloguemobis2">Mobiliers</a>
				<a class="choisir">Vêtements</a>
				<a class="choisir">Animaux</a>
				<a class="choisir selected">Abonnements</a></center>
			</div>
			<div class="bar"></div>
	   		
	   		<div class="navigator-contenair">
	        <div class="left">
				<input type="text" placeholder="Rechercher.." />
			    <div class="catalogue_pages">
					<div class="icon" style="background: url('assets/images/cat/icon_75.png'); background-repeat: no-repeat;"></div> <li>Habbo Club</li>
				</div>
			</div>

			
	        <div class="right">
	        	<center><img src="assets/images/cat/habboclub.png"></center><br>
	        	<img src="assets/images/cat/habboclub-frontpage.png" align="right">
	        	<p class="title">Deviens HC!</p>
	        	<p>Des vêtements et des coupes de cheveux exclusives, et bien plus encore !</p>


	        	<br><br><div class="gohc">
	        		<div class="title"><img src="assets/images/cat/hc.png"> À vie</div>
	        		<div class="hc-credits">
	        			120 <img src="assets/images/cat/credits-big.png">
	        			<div class="btn-achat" <?php if($hc == 1) { ?>id="ouvriralreadyhc"<?php } ?>></div>
	        		</div>
	        	</div>

	        	<center><a id="ouvriravantagesHC">En savoir plus sur les privilèges</a></center>
	        </div>
	    </div>
	</div></div>
<!-- Fin Catalogue Abonnement -->