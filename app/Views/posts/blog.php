<?php foreach ($pagination as $article) : ?>
<h1> <a href="index.php?p=posts.showArticle&id=<?=$article->id?>"><?= $article->title?></a></h1>
<p><?= $article->date_article_fr ?></p>
<p><?= $article->text ?></p>
<?php endforeach; ?>

<?php
$customPagination = 0;
while ($customPagination < $nbpage) : ?>
 	<span><a href="index.php?p=posts.blog&page=<?=($customPagination+1)?>"><?=($customPagination+1)?></a>|</span>

	<?php
 		$customPagination++;
 endwhile; ?>
