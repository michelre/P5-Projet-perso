<!DOCTYPE html>
<html lang="fr">
<head>
  
	<?php include("VIEW/template/head.php") ?>
 
	<title>Du light pour vos desirs</title>
</head>
	
<body>
	
<header class="pb-5">
	
<?php include("VIEW/template/header.php") ?>

	</header>
	<div class="container">
        
        	
	<p class="container mt-5"> Vous avez envie de manger un burger , une salade sans vous sentir coupable , vous êtes sur la bonne pages , regardez se que nous vous proposons !</p>
        
        
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-75" src="../PUBLIC/images/burgers1.jpg" alt="burger">
    </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="../PUBLIC/images/salades_crevette1.jpg" alt="salades">
    </div>
    <div class="carousel-item">
      <img class="d-block w-75" src="../PUBLIC/images/Salade_de_fruits_exotiques.jpg" alt="dessert aux fruits">
    </div>
  </div>
</div>
	</div>
	
<div class="container col-8">

	<h2 class="container mt-5 mb-5">Ici vous trouverez les informations necessaires sur nous!</h2>
	
	<p class="font-weight-bold">Qu'est ce que l'on vous propose ?</p>
	<p> C'est simple , on vous propose de manger en vous faisant plaisir.
	</p>
	<p class="font-weight-bold"> Comment sa en se faisant plaisir ?</p>
	<p>Tous simplement notre gamme de produits est conçu pour avoir un minimum de calories . Comme cela vous pouvez vous faire plaisir en mangeant un burgers par exemple sans vous sentir coupable et se dire je vais grossir en mangeant cela .</p>
	<p class="font-weight-bold">Mais ou pouvons nous vous trouver?</p>
	<p> Vous trouverez toutes ces informations sur notre pages facebook , comme nous utilisons un camion pour notre restaurants nos lieux peuvent être différents chaque jours. Comme cela nous pouvons vous permettent de manger dans un cadre différents a chaque fois</p>
	
	
</div>
	
		<h3 class="text-center border border-info rounded bg-info text-white container">Vos avis </h3>
		   
		<?php foreach ($comments as $comment) { ?>
      <div class="mt-3 mb-3 p-2 border-bottom">
        <h4><?php echo $comment->getAuthor(); ?></h4>
        <p><?php echo $comment->getComment(); ?></p>
	</div>
	<?php } ?>
    <footer>
	<?php include("VIEW/template/footer.php") ?>
    </footer>
	<script defer="" src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    
	</body>	
</html>