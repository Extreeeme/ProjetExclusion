<?php var_dump($pagination); ?>
<?php foreach ($pagination as $article) : ?>
<h1><?= $article->title?></h1>
<p><?= $article->date_creation_fr ?></p>
<p><?= $article->text ?></p>
<?php endforeach; ?>

<?php 
$customPagination = 0;
while ($customPagination < $nbpage) {
 	echo '<span><a href="index.php?p=posts.blog&page='.($customPagination+1).'">'.($customPagination+1).'</a>|</span>';
 	$customPagination++;
	
 } ?>
