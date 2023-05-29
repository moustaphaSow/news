<?php
	/**
	 * Classe métier représentant une catégorie
	 */
	class Categorie
	{
		public $id;
		public $libelle;

		// private $bdd;

		// public function __construct()
		// {
		// 	$this->bdd = ConnexionManager::getInstance();
		// }

		public static function getList()
		{
			$bdd = ConnexionManager::getInstance();
			$reponse = $bdd->query('SELECT * FROM Categorie');
			$data = $reponse->fetchAll(PDO::FETCH_CLASS, 'Categorie');
			$reponse->closeCursor();
			return $data;
		}

		public static function getById($id)
		{
			$bdd = ConnexionManager::getInstance();
			$reponse = $bdd->query('SELECT * FROM Categorie WHERE id = '.$id);
			$data = $reponse->fetch(PDO::FETCH_OBJ);
			$reponse->closeCursor();
			return $data;
		}
	}
?>