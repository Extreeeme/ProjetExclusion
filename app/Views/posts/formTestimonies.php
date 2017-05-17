<form class="form-group" action="index.php?p=posts.postTestimony" method="POST">
  <select name="user" class="form-control">
    <option value="<?//=$_SESSION["auth"]?>">Mon pseudo</option>
    <option value="2">Anonymement</option>
  </select>
  <textarea class="form-control" name="testimony" placeholder="Votre témoignage ici"></textarea>
  <input class="btn btn-success" type="submit" value="Se confier">
</form>
