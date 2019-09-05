<?php 

/*connectino à la base de donnée MhappyBB*/
	try {
		$dbuser ='root';
		$dbpass ='';
	// instannciation d'une nouvelle connexion
		$dbcon = new PDO('mysql:host=localhost;dbname=mhappybb;charset=utf8', $dbuser, $dbpass);
	//echo 'BRAVOOOOO';
	
	// si la connexion echoue, PDO lancera une exception
		$dbcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
	// cette ligne demande à transformer les erreurs en message d'erreur de type exception
		echo 'BRAVOOOOO, vous êtes connecté';

	} catch(PDOException $e) {
		echo 'attention la connexion n\'a pas été réalisée. <br/>';
		die('Erreur : '.$e->getMessage());
	}

?>