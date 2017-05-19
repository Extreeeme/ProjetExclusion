<div id="temoignage">
	<div class="row">
		<?php foreach ($testimonies as $key => $value): ?>
 		 <ul class="encadrement col-md-3">
    		<li>" <?=$value->text?> "</li>
    		<div class="info-temoignage">
    			<li class="text-right"><strong>Pseudo</strong> : <?=$value->pseudo?></li>
   	 			<li class="text-right"><strong>Posté le </strong><?=$value->date?></li>
   			</div>
  		</ul>
	<?php endforeach; ?>
	</div>
	<a class="btn btn-default col-md-offset-5 col-md-2" href="index.php?p=posts.FormTestimony">Poster un témoignage</a>
</div>

