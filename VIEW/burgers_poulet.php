<!DOCTYPE html>
<html lang="fr">
<head>
  
	<?php include("../VIEW/template/head.php") ?>
 
	<title>Du light pour vos desirs</title>
</head>
	
<body>
	
<header>
	
<?php include("../VIEW/template/header.php") ?>

	</header>
		<div class="text-center col-lg-6 mt-3">
<h2>Menus Burgers"</h2>
  <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Burgers POULET</th>
      <th scope="col ml-1 ">Recettes</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($recettes as $recette) { ?>
    <tr>
      <th scope="row"><?php echo $recette->getId(); ?></th>
      <td>
          <?php echo $recette->getId(); ?><?php echo $recette->getrecette() ?>
      </td>
      </tr>
    </tbody>
      <?php } ?>
  </table>
	</div>