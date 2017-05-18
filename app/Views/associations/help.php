<h1>ICI LES AIDES LES NUMÉROS ET LES BENEVOLES</h1>

<form method="post" enctype="multipart/form-data">

	<?=$form->input('name','Nom de l\'association',['type'=>'text']);?>
	<?=$form->input('siteWeb','Adresse du site web',['type'=>'url']);?>
	<?=$form->input('Numerodetel','Numero de Téléphone',['type'=>'text']);?>
	<?=$form->input('img','Logo Association',['type'=>'file']);?>
	<?=$form->input('description','Description Association',['type'=>'textarea']);?>
	<?=$form->submit('envoyer');?>
</form>

<?php foreach ($associations as $assocs): ?>
	

	<div><?=$assocs->name ?></div>
	<div><?=$assocs->siteWeb?></div>
	<div><?=$assocs->Numerodetel?></div>
	<img style="max-width: 200px;" src="img/<?=$assocs->img ?>">
	<div><?=$assocs->description ?></div>

<?php endforeach; ?>
