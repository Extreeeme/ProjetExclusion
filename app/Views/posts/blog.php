<?php var_dump($blog) ?>

<?php foreach ($blog as $article) : ?>
<h1><?= $article["title"] ?></h1>
<p><?= $article["date_creation_fr"] ?></p>
<p><?= $article["text"] ?></p>
<?php endforeach; ?>