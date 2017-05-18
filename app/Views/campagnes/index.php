<div class="row">
    <div class="col-sm-8">
        <?php foreach ($campagne as $campagne): ?>

            <p><?= $campagne->img; ?></p>
            <input type="checkbox" name="<?= $campagne->id; ?>" value="<?= $campagne->id; ?>" /><?= $campagne->id; ?><br>

        <?php endforeach; ?>

    </div>

</div>