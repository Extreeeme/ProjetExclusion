<?php foreach ($pagination as $article) : ?>
<h1><?= $article->title?></h1>
<p><?= $article->date_article_fr ?></p>
<p><?= $article->text ?></p>
<div class="form">
	<h4><strong>Commentaires</strong></h4>
	<div style="border: 1px solid black; padding:10px;">
		<p><?= $article->authors ?></p>
		<p><?= $article->texte ?></p>
	</div>	
</div>	
<form method="POST">
	<?= $form->input('author', 'Pseudo'); ?>
	<?= $form->input('comment', 'Laisser un commentaire', ["type" => "textarea"]);?>
	<input type="hidden" name="id_article" value="<?= $article->id ?>" />
	<?= $form->submit() ?>
</form>	
<?php endforeach; ?>

<?php 
$customPagination = 0;
while ($customPagination < $nbpage) : ?>
 	<span><a href="index.php?p=posts.blog&page=<?=($customPagination+1)?>"><?=($customPagination+1)?></a>|</span>
	
	<?php
 		$customPagination++;	
 endwhile; ?>
