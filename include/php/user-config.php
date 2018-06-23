<?php 
try
{
	// On se connecte à MySQL
	$bdd = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, $pdo_options);
}
catch(Exception $e)
{
	// En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}
// On récupère tout le contenu de la table
$reponse = $bdd->query('SELECT * FROM membres WHERE pseudo = "'.$_SESSION['login'].'"');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
	$date = 0; 
	$date = $donnees['date_enregistrement'];  // Création de la variable Date + Affectation de la date présente dans la Base de données

	$pseudo = "Indéfini";
	$pseudo = $donnees['pseudo'];  // Création de la variable Pseudo + Affectation du pseudo présent dans la base de données etc...

	// SI dans la base de données la colone "avatar" == NULL alors afficher l'avatar par défaut SINON afficher le lien de la colone "avatar" dans la base de données
	// SI dans la base de données la colone "avatarhead" == NULL alors afficher la tête de l'avatar par défaut SINON afficher le lien de la colone "avatarhead" dans la base de données
	if($donnees['avatar'] == NULL) { $avatar = "https://www.habbo.com/habbo-imaging/avatarimage?hb=image&user=Pulx&headonly=0&direction=2&head_direction=2&action=&gesture=&size=m"; } else { $avatar = $donnees['avatar']; }
	if($donnees['avatarhead'] == NULL) { $avatarhead = "https://www.habbo.com/habbo-imaging/avatarimage?hb=image&user=Pulx&headonly=1&direction=2&head_direction=2&action=&gesture=&size=m"; } else { $avatarhead = $donnees['avatarhead']; }

	$points = 0;
	$points = $donnees['points'];

	$amis = 0;
	$amis = $donnees['amis']; 

	$motto = "Indéfini";
	$motto = $donnees['motto']; 

	$hc = 0;
	$hc = $donnees['hc']; // 0 = PAS HC, 1 = HC (dans la base de données)

	$credits = 0;
	$duckets = 0;
	$diamonds = 0;
	$credits = $donnees['credits'];
	$duckets = $donnees['duckets'];
	$diamonds = $donnees['diamonds']; // Création des variables crédits, duckets, diamonds + affectation des données à ces variables

	$newcredits = 0;
	$newcredits = $donnees['credits'] + 100;

	$newduckets = 0;
	$newduckets = $donnees['duckets'] + 10;

	$derniere_connexion = $donnees['derniere_connexion']; 


	$requete = "UPDATE membres SET credits = :newcredits, duckets = :newduckets WHERE pseudo = :pseudo"; // Permet d'ajouter +100 crédits et +10 duckets lors d'une connexion
 	
 	$req_prep = $bdd->prepare($requete);
 	$req_prep->execute(array(':newcredits'=>$newcredits,':newduckets'=>$newduckets,':pseudo'=>$pseudo));

 	$datemnt = date("m.d.y \à H\hi");


 	$requete2 = "UPDATE membres SET derniere_connexion = :datemnt WHERE pseudo = :pseudo";
 	
 	$req_prep2 = $bdd->prepare($requete2);
 	$req_prep2->execute(array(':datemnt' => $datemnt, ':pseudo'=>$pseudo));

 	$id = 0;
 	$id = $donnees['ID'];

}

$reponse->closeCursor(); // Termine le traitement de la requête

?>