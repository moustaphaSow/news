<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Affichage d'un article</title>
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<?php require_once 'inc/entete.php'; ?>
	<?php if (!empty($article)): ?>
		<div id="contenu">
			<h1><?= $article->titre ?></h1>
			<span>Publié le <?= $article->dateCreation ?></span>
			<p><?= $article->contenu ?></p>
		</div>
	<?php else: ?>
		<div class="message">L'article demandé n'existe pas</div>
	<?php endif ?>
	<?php require_once 'inc/menu.php';  ?>
</body>
</html>