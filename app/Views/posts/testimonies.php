<a class="btn btn-info" href="index.php?p=posts.FormTestimony">Poster un témoignage</a>
<?php foreach ($testimonies as $key => $value): ?>
  <ul>
    <li><strong>Pseudo</strong> : <?=$value->pseudo?></li>
    <li><strong>Posté le </strong><?=$value->date?></li>
    <li><?=$value->text?></li>
  </ul>
<?php endforeach; ?>

<!-- <form class="form-group" action="index.php?p=posts.postTestimony" method="POST">
	<table>
		<tr>
			<td>
				<select name="user" class="form-control">
				  <option value="<?//=$_SESSION["auth"]?>">Mon pseudo</option>
				  <option value="2">Anonymement</option>
				</select>
			</td>
		</tr>
		<tr>
			<td>		
				<textarea class="form-control" name="testimony" placeholder="Votre témoignage ici"></textarea>
			</td>
		</tr>
		<tr>
			<td>		
				<input class="btn btn-success" type="submit" value="Se confier">
			</td>
		</tr>		
	</table>	
</form> -->
