<!DOCTYPE html>
<html lang="fr">
<head>

	<?php include("src/view/template/head.php") ?>

	<title>Du light pour vos desirs</title>
</head>

<body>

<header>

<?php include("src/view/template/header.php") ?>

</header>

	<div class="text-center col-lg-6 mt-3">
<h2>Menus Salades"</h2>
  <table class="table table-striped">
    <thead>
    <tr>
      <th scope="col">Salades</th>
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
