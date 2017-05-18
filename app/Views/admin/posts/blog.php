<form method="post" action="index.php?p=admin.posts.blog">
    <?= $form->input('title', 'Tire de l\'article'); ?>
    <?= $form->input('text', 'Contenu', ['type' => 'textarea']); ?>
    <button class="btn btn-primary">Sauvegarder</button>
</form>