<?php if($errors): ?>
    <div class="alert alert-danger">
        Enregistrement échoué
    </div>
<?php endif; ?>

<form method="post">
<div class="login-page">
  <div class="form">
    <?= $form->input('pseudo', 'Pseudo'); ?>
    <?= $form->input('mail', 'E-mail', ['type' => 'mail']); ?>
    <?= $form->input('password', 'Mot de passe', ['type' => 'password']); ?>
    <?= $form->input('birthdate', 'birthdate', ['type' => 'date']); ?>
    <?= $form->input('id_sexe', 'sexe', ['type' => 'radio']); ?>
    <button class="btn btn-primary">Envoyer</button>
</div>
</div>
</form>