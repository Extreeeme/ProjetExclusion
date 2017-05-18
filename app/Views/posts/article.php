<h1> <a href="index.php?p=posts.showArticle&id=<?=$article->id?>"><?= $article->title?></a></h1>
<p><?= $article->date_article_fr ?></p>
<p><?= $article->text ?></p>
<div class="form">
	<h4><strong>Commentaires</strong></h4>
  <?php if ($comments): ?>
    <?php foreach ($comments as $key => $value): ?>
      <div style="border: 1px solid black; padding:10px;">
    		<p><?= $value->authors ?></p>
    		<p><?= $value->texte ?></p>
    	</div>
    <?php endforeach; ?>
  <?php endif; ?>

</div>
<form method="POST">
	<?= $form->input('author', 'Pseudo'); ?>
	<?= $form->input('comment', 'Laisser un commentaire', ["type" => "textarea"]);?>
	<input type="hidden" name="id_article" value="<?= $article->id ?>" />
	<?= $form->submit() ?>
</form>
