<!DOCTYPE html>
<html lang="fr">
<head>
  
	<?php include("../VIEW/template/head.php") ?>
 
	<title>Du light pour vos desirs</title>
</head>
	
<body>
	
<header class="pb-5">
	
<?php include("../VIEW/template/header.php") ?>

</header>
	<h1>Vous souhaitez nous trouver ?</h1>
    <p>Toutes les informations sur notre localisation se trouve sur notre <a href="">Facebook</a></p>
	<h1 class="text-center mt-5"> Donnez votre avis </h1>
	

<div class="text-center">
  <form action="?action=addComment" method="post">
    Pseudo : <br/>
    <input type="text" name="author"/><br/>

    Commentaires :<br/><textarea name="comment"></textarea><br/>
    <button type="submit">Poster</button>
  </form>
    </div>