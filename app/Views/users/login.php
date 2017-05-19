<?php if($errors): ?>
    <div class="alert alert-danger">
        Identifiants incorrects
    </div>
<?php endif; ?>

<form method="post">
	<table>
	    <?= $form->input('username', 'Pseudo'); ?>
	    <?= $form->input('user_password', 'Mot de passe', ['type' => 'password']); ?>
	</table>   
	<button class="btn btn-primary">Envoyer</button> 
</form>