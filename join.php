<?php
/* Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)*/
header('Content-type: text/html; charset=UTF-8');

/* Initialisation de la variable du message de réponse*/
$message = null;

/* Récupération des variables issues du formulaire par la méthode post*/
$pseudo = filter_input(INPUT_POST, 'pseudo');
$pass = filter_input(INPUT_POST, 'pass');

/* Si le formulaire est envoyé */
if (isset($pseudo,$pass)) 
{   

    /* Teste que les valeurs ne sont pas vides ou composées uniquement d'espaces  */ 
    $pseudo = trim($pseudo) != '' ? $pseudo : null;
    $pass = trim($pass) != '' ? $pass : null;
    $datemnt = date("m.d.y \à H\hi");
   

    /* Si $pseudo et $pass différents de null */
    if(isset($pseudo,$pass)) 
    {
    /* Connexion au serveur : dans cet exemple, en local sur le serveur d'évaluation
    A MODIFIER avec vos valeurs */
    $hostname = "localhost";
    $database = "habbo";
    $username = "root";
    $password = "";
    
    /* Configuration des options de connexion */
    
    /* Désactive l'éumlateur de requêtes préparées (hautement recommandé)  */
    $pdo_options[PDO::ATTR_EMULATE_PREPARES] = false;
    
    /* Active le mode exception */
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    
    /* Indique le charset */
    $pdo_options[PDO::MYSQL_ATTR_INIT_COMMAND] = "SET NAMES utf8";
    
    /* Connexion */
    try
    {
      $connect = new PDO('mysql:host='.$hostname.';dbname='.$database, $username, $password, $pdo_options);
    }
    catch (PDOException $e)
    {
      exit('problème de connexion à la base');
    }
        
    
    /* Requête pour compter le nombre d'enregistrements répondant à la clause : champ du pseudo de la table = pseudo posté dans le formulaire */
    $requete = "SELECT count(*) FROM membres WHERE pseudo = ?";
    
    try
    {
      /* préparation de la requête*/
      $req_prep = $connect->prepare($requete);
      
      /* Exécution de la requête en passant la position du marqueur et sa variable associée dans un tableau*/
      $req_prep->execute(array(0=>$pseudo));
      
      /* Récupération du résultat */
      $resultat = $req_prep->fetchColumn();
      
      if ($resultat == 0) 
      /* Résultat du comptage = 0 pour ce pseudo, on peut donc l'enregistrer */
      {
        /* Pour enregistrer la date actuelle (date/heure/minutes/secondes) on peut utiliser directement la fonction mysql : NOW()*/
        $insertion = "INSERT INTO membres(pseudo,pass,date_enregistrement) VALUES(:nom, :password, :datemnt)";
        
        /* préparation de l'insertion */
        $insert_prep = $connect->prepare($insertion);
        
        /* Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau*/
        $inser_exec = $insert_prep->execute(array(':nom'=>$pseudo,':password'=>$pass, ':datemnt'=>$datemnt));
        
        /* Si l'insertion s'est faite correctement...*/
        if ($inser_exec === true) 
        {
          /* Démarre une session si aucune n'est déjà existante et enregistre le pseudo dans la variable de session $_SESSION['login'] qui donne au visiteur la possibilité de se connecter.  */
          if (!session_id()) session_start();
          $_SESSION['login'] = $pseudo;
          
          /* A MODIFIER Remplacer le '#' par l'adresse de votre page de destination, sinon ce lien indique la page actuelle.*/
          $message =
          header("Location: index.php");
            exit(); 
        }   
      }
      else
      {   /* Le pseudo est déjà utilisé */
        $message = ' <p id="message">Ce pseudo est déjà utilisé :(</p>';
      }
    }
    catch (PDOException $e)
    {
      $message = ' <p id="message">Problème dans la requête d\'insertion</p>';
    }	
  }
  else 
  {    /* Au moins un des deux champs "pseudo" ou "mot de passe" n'a pas été rempli*/
    $message = ' <p id="message">Tous les champs doivent être remplis</p>';
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="utf-8">
	<title>Habbo</title>
	<link rel="icon" type="image/ico" href="assets/images/autres/favion.ico" />
	<link rel="stylesheet" type="text/css" href="assets/styles/menu.css">
	<link rel="stylesheet" type="text/css" href="assets/styles/account.css">


	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script src="https://cdn.rawgit.com/ashleighy/emoji.js/master/emoji.js.js"></script>
	<script src="assets/styles/js/tooltip.js"></script>
</head>
<body>

 <div id="inscription">
	<div class="box">
		<div class="top">
			<p>S'inscrire sur Habbo</p>
		</div>
    <p id="message-mdp">Attention !<br><br>Les mots de passe ne sont pas cryptés.<br>Cela signifie qu'ils s'affichent en clair dans notre base de données et que n'importe qui de l'équipe HabboTML peut conserver votre mot de passe. <br><br>Par soucis de confidentialité et de sécurité, merci de choisir un mot de passe différent de celui que vous indiquez habituellement sur les autres sites.</p>
		 <?= $message?:'' ?>
		<div class="contenair">
			<!-- <form action = "#" method = "post">
			<input type="text" name="pseudo" class="mail" />
			<input type="password" name="pass" class="mdp" /><br><br>
			<div class="btngo" type="submit">C'EST PARTI!</div>
			</form>

			<div class="separation"></div>
			<p>Tu n'as pas de compte Habbo?</p><br><p id="closeconnexion2" class="inscrip">Rejoins-nous!</p> -->

			 <form action = "#" method = "post">
    <input class="mail" placeholder="Pseudonyme" type = "text" name = "pseudo" id = "pseudo" />
   <input  class="mdp" placeholder="Mot de passe" type = "password" name = "pass" id = "pass" />
    <input class="btngo" type = "submit" value = "REJOINDRE HABBO!" id = "valider" />
    </form>

   			 <div class="separation"></div>
			<p>Tu as déjà un compte Habbo ?</p><br><center><a href="login.php" class="inscrip">Accède à ton compte!</a></center>
  
									

		</div>
	</div>
</div> 

</body>
</html>