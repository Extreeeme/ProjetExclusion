<div class="row">
    <div class="col-sm-8">
        <?php foreach ($campagne as $campagne): ?>

            <h2><?= $campagne->id; ?></a></h2>

            <p><?= $campagne->img; ?></p>

        <?php endforeach; ?>

    </div>

</div>