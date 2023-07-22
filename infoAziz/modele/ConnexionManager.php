<?php
	/**
	 * Le gestionnaire des connexions à notre jeu de données
	 */
	class ConnexionManager
	{
		public static function getInstance()
		{
			try
			{
				$bdd = new PDO('mysql:host=localhost;dbname=news_abdoul;charset=utf8', 'news_abdoul', 'm1iabd');
			}
			catch (Exception $e)
			{
				echo "Erreur de connexion à la base de données : ".$e->getMessage();
				$bdd = null;
			}
			
			return $bdd;
		}
	}
?>