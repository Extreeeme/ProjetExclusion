<form method="post" action="index.php?p=admin.posts.blog">
	<table>
	    <?= $form->input('title', 'Tire de l\'article'); ?>
	    <?= $form->input('text', 'Contenu', ['type' => 'textarea']); ?>
    </table>	
    <button class="btn btn-primary">Sauvegarder</button>
</form>