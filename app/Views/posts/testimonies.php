<div id="temoignage">
<?php foreach ($testimonies as $key => $value): ?>
  <ul>
    <li><strong>Pseudo</strong> : <?=$value->pseudo?></li>
    <li><strong>Posté le </strong><?=$value->date?></li>
    <li><?=$value->text?></li>
  </ul>
<?php endforeach; ?>
<a class="btn btn-info" href="index.php?p=posts.FormTestimony">Poster un témoignage</a>
</div>
