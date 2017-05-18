<div id="help">
    <div class="h1-association">
        <h1>Vous cherchez de l'aide ? Du soutien ? Quelqu'un à qui se confier ? <br> Toutes les solutions sont ici.</h1>
    </div>
    <?php if(isset($_SESSION['auth'])): ?>
    <form method="post" enctype="multipart/form-data">
        <?=$form->input('name','Nom de l\'association',['type'=>'text']);?>
        <?=$form->input('img','Logo Association',['type'=>'file']);?>
        <?=$form->input('description','Description Association',['type'=>'textarea']);?>
        <?=$form->submit('envoyer');?>
    </form>
    <?php else : ?>
    <?php endif; ?>
    <div class="zone">
        <?php foreach ($associations as $assocs): ?>
            <div id="associations">
                <h1 id="titleAssociation"><?=$assocs->name ?></h1>
                <div class="flex">
                    <img src="img/<?=$assocs->img ?>">
                    <p><?=$assocs->description ?></p>
                </div>
                <p class="telephone-association">☎ Contact : 0x.xx.xx.xx.xx - @Mail : xxxxxxxx@xxxxxxxxx.fr</p>
            </div>
        <?php endforeach; ?>
    </div>
</div>