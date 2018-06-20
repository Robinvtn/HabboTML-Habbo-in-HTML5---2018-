<?php
/* Indique le bon format des entêtes (par défaut apache risque de les envoyer au standard ISO-8859-1)*/
header('Content-type: text/html; charset=UTF-8');

/* Initialisation de la variable du message de réponse*/
$message = null;

/* Récupération des variables issues du formulaire par la méthode post*/
$pseudo = filter_input(INPUT_POST, 'pseudo');
$pass = filter_input(INPUT_POST, 'pass');

/* Si le formulaire est envoyé*/
if (isset($pseudo,$pass)) 
{
    
    /* Teste que les valeurs ne sont pas vides ou composées uniquement d'espaces */  
    $pseudo = trim($pseudo) != '' ? $pseudo : null;
    $pass = trim($pass) != '' ? $pass : null;
  
  
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
    
    /* Désactive l'éumlateur de requêtes préparées (hautement recommandé) */
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
    
    /* Requête pour récupérer les enregistrements répondant à la clause : champ du pseudo et champ du mdp de la table = pseudo et mdp posté dans le formulaire */
    $requete = "SELECT * FROM membres WHERE pseudo = :nom AND pass = :password";  
    
    try
    {
      /* Préparation de la requête*/
      $req_prep = $connect->prepare($requete);
      
      /* Exécution de la requête en passant les marqueurs et leur variables associées dans un tableau*/
      $req_prep->execute(array(':nom'=>$pseudo,':password'=>$pass));
      
      /* Création du tableau du résultat avec fetchAll qui récupère tout le tableau en une seule fois*/
      $resultat = $req_prep->fetchAll(); 
      
      $nb_result = count($resultat);
      
      if ($nb_result == 1)
      {
        /* Démarre une session si aucune n'est déjà existante et enregistre le pseudo dans la variable de session $_SESSION['login'] qui donne au visiteur la possibilité de se connecter.  */
        if (!session_id()) session_start();
        $_SESSION['login'] = $pseudo;
        $_SESSION['date_enregistrement'] = $result['date_enregistrement'];
            
        $message = 
        header("Location: index.php");
        exit();
        
        /* Si vous voulez récupérer les données elles se trouvent dans la première et unique ligne du tableau $resultat par exemple */
        /* $result = $resultat[0];
        echo $result['pseudo'];
        echo $result['date_enregistrement'];
        */
      }
      else if ($nb_result > 1)
      {
        /* Par sécurité si plusieurs réponses de la requête mais si la table est bien construite on ne devrait jamais rentrer dans cette condition */
        $message = '<p id="message">Problème de d\'unicité dans la table</p>';
      }
      else
      {   /* Le pseudo ou le mot de passe sont incorrect */
        $message = '<p id="message">Le pseudo ou le mot de passe sont incorrect</p>';
      }
    }
    catch (PDOException $e)
    {
      $message = '<p id="message">Problème dans la requête de sélection</p>';
    }	
  }
  else 
  {/*au moins un des deux champs "pseudo" ou "mot de passe" n'a pas été rempli*/
    $message = '<p id="message">Les champs Pseudo et Mot de passe doivent être remplis.</p>';
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


 <div id="connexion">
	<div class="box">
		<div class="top">
			<p>Se connecter à Habbo</p>
		</div>
		<div class="contenair">

			 <form action = "#" method = "post">
    <input class="mail" placeholder="Pseudonyme" type = "text" name = "pseudo" />
   <input  class="mdp" placeholder="Mot de passe" type = "password" name = "pass" />
    <input class="btngo" type = "submit" value = "C'EST PARTI!" id = "valider" />
    </form>

			<div class="separation"></div>
			<p>Tu n'as pas de compte Habbo?</p><br><center><a href="join.php" class="inscrip">Rejoins-nous!</a></center>
		</div>
	</div>
</div> 


</body>
</html>