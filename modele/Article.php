<?php
	/**
	 * Classe métier représentant un article
	 */
	class Article
	{
		public $id;
		public $titre;
		public $contenu;
		public $categorie;
		public $dateCreation;
		public $dateModification;

		// private $bdd;

		// public function __construct()
		// {
		// 	$this->bdd = ConnexionManager::getInstance();
		// }

		public static function getList()
		{
			$bdd = ConnexionManager::getInstance();
			$data = $bdd->query('SELECT * FROM Article');
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'Article');
			$data->closeCursor();
			return $articles;
		}

		public static function getById($id)
		{
			$bdd = ConnexionManager::getInstance();
			$data = $bdd->query('SELECT * FROM Article WHERE id = '.$id);
			$article = $data->fetch(PDO::FETCH_OBJ);
			$data->closeCursor();
			return $article; 
		}

		public static function getByCategoryId($id)
		{
			$bdd = ConnexionManager::getInstance();
			$data = $bdd->query('SELECT * FROM Article WHERE categorie = '.$id);
			$articles = $data->fetchAll(PDO::FETCH_CLASS, 'Article');
			$data->closeCursor();
			return $articles;
		}
	}
?>